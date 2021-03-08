<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Uploads extends CI_Controller {

	public function __construct() {
		parent:: __construct();
	}

	public function index()
	{
		if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1)
		{
            if(!empty(xss_clean($this->uri->segment(2)))){

                $module_name = xss_clean($this->uri->segment(2));
                $module_id = xss_clean($this->uri->segment(3));

                $uploadData = $this->cm->getUploadData($p=array('module_name'=>$module_name,'module_id'=>$module_id),$many=TRUE);
                //print_obj($visitdata);die;
                if($uploadData){
                    foreach ($uploadData as $key => $value) {
                        $this->data['upld_data'][] = array(
                            'uploads_id'  => $value->uploads_id,
                            'module_name'  => $value->module_name,
                            'module_id'  => $value->module_id,
                            'file_type'  => $value->file_type,
                            'file_name'  => $value->file_name,
                            'file_path'  => $value->file_path,
                            'abs_file_path'  => $value->abs_file_path,
                            'created_dtime'  => $value->created_dtime
                        );
                    }
                }
                else{
                    $this->data['upld_data'] = '';
                }

            }

			$this->load->view('others/vw_uploads', $this->data, false);

		}
		else{
			redirect(base_url());
		}
    }
    
    public function onUploadFile(){
    	if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1)
		{
 
	  	    if ($this->input->post('submit')) {

                $module_name = xss_clean($this->input->post('module_name'));
                $module_id = xss_clean($this->input->post('module_id'));

                $rel_path = base_url().'common/uploads/course/';
	            
	            $path = ABS_PATH.'uploads/course/';
	            //echo  $path;die;

	            $config['upload_path'] = $path;
	            $config['allowed_types'] = 'pdf|doc|docx|mp4|webm';
                $config['remove_spaces'] = TRUE;
                $config['max_size'] = 100000;
                //$config['max_width'] = 1500;
                //$config['max_height'] = 1500;

	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);   

	            if (!$this->upload->do_upload('uploadFile')) {
	                $this->data['file_error'] = $this->upload->display_errors();
	            } else {
                    $uploadedData = array('upload_data' => $this->upload->data());
                   // print_obj($this->data['upload_success']);die;
                }

                if(empty($this->data['file_error'])){
                    $insData = array(
                        'module_name' => $module_name,
                        'module_id' => $module_id,
                        'file_name' => $uploadedData['upload_data']['file_name'],
                        'file_type' => $uploadedData['upload_data']['file_type'],
                        'file_path'  => $rel_path.$uploadedData['upload_data']['file_name'],
                        'abs_file_path' => $uploadedData['upload_data']['full_path'],
                        'file_org_name' => $uploadedData['upload_data']['client_name'],
                        'file_size' => $uploadedData['upload_data']['file_size'],
                        'file_ext' => $uploadedData['upload_data']['file_ext'],
                        'created_by'  => $this->session->userdata('userid'),
                        'created_dtime'  => dtime
                    );
                    
                    $added = $this->cm->addUpload($insData);

                    if($added){
                        $this->data['module_name'] = $module_name;
                        $this->data['module_id'] = $module_id;
                        $this->data['upload_status'] = 'success';
                    }else{
                        $this->data['upload_status'] = 'failure';
                    }
                   
                    
                }else{
                    $this->data['upload_status'] = 'failure';
                }

                $this->load->view('others/vw_uploads', $this->data, false);

            }else{
               // redirect(base_url());
            } 
        }else{
			redirect(base_url());
		} 
    }   

    public function onDeleteUploads()
	{
		if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1 && ($this->session->userdata('usergroup')==1  || $this->session->userdata('usergroup')==2))
			{
			   if($this->input->is_ajax_request() && $this->input->server('REQUEST_METHOD')=='POST'){

				$uploads_id = xss_clean($this->input->post('fileid'));
				$uplddata = $this->cm->getUploadData(array('uploads_id'  => $uploads_id),$many=FALSE);

				if($uplddata){
					//del
					$del = $this->cm->delUpload(array('uploads_id' => $uploads_id));

					if($del){
						$return['deleted'] = 'success';
					}
					else{
						$return['deleted'] = 'failure';
					}
						
				}
				else{
					$return['deleted'] = 'not_exists';
				}

			header('Content-Type: application/json');
			echo json_encode($return);	

			}else{
				redirect(base_url());
			}
		}else{
            redirect(base_url());
        }
 	}


	
}