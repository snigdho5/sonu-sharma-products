<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {

	public function __construct() {
		parent:: __construct();
	}

	public function index()
	{
		//
	}

	//cont us
	public function onGetContactUs()
	{
		if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1)
		{

			$contdata = $this->mm->getContData($p=null,$many=TRUE);
			if($contdata){
				foreach ($contdata as $key => $value) {
					$this->data['cont_data'][] = array(
						'cont_id'  => $value->id,
						'unique_id'  => $value->unique_id,
						'distributor_id'  => $value->distributor_id,
						'referral_code'  => $value->referral_code,
						'first_name'  => $value->com_name,
						'last_name'  => $value->last_name,
						'email'  => $value->email,
						'phone_no'  => $value->phone_no,
						'date_time'  => $value->date_time,
						'file_path'  => $value->file_path,
						'url'  => PAGE_URL.$value->distributor_id.'/'.strtolower($value->com_name).'-'.strtolower($value->last_name)
					);
				}
			}
			else{
				$this->data['cont_data'] = '';
			}
			$this->load->view('main/vw_contacts', $this->data, false);
		

		}
		else{
			redirect(base_url());
		}
	}

	public function onGetContactUsView()
	{
		if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1 && ($this->session->userdata('usergroup')==1  || $this->session->userdata('usergroup')==2)){

			$id = xss_clean($this->uri->segment(2));
		
			if(isset($id) && $id != ''){
				$chkdata = array(
					'id'  => $id
				);
				$agentData = $this->mm->getContData($chkdata,$many=FALSE);
				
				if(!empty($agentData)){
					$this->data['agent_data'] = array(
							'cont_id'  => $agentData->id,
							'unique_id'  => $agentData->unique_id,
							'distributor_id'  => $agentData->distributor_id,
							'referral_code'  => $agentData->referral_code,
							'first_name'  => $agentData->com_name,
							'last_name'  => $agentData->last_name,
							'email'  => $agentData->email,
							'phone_no'  => $agentData->phone_no,
							'date_time'  => $agentData->date_time,
							'demo_pass'  => 'Mydemo@143',
							'file_path'  => $agentData->file_path
						);
						
				}
				else{
					$this->data['agent_data'] = '';
				}
				
			}else{
				$this->data['agent_data'] = '';
			}	
			
			$this->load->view('main/vw_edit_contactus', $this->data, false);	
			
		}else{
			redirect(base_url());
		}

	}

	public function onSetContUsEdit()
	{
		if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1 && ($this->session->userdata('usergroup')==1  || $this->session->userdata('usergroup')==2))
		{
			if($this->input->is_ajax_request() && $this->input->server('REQUEST_METHOD')=='POST'){
					$cont_id = xss_clean($this->input->post('cont_id'));

					$chkdata = array('id'  => $cont_id);
					$agentData = $this->mm->getContData($chkdata,$many=FALSE);

				
				
				if(!empty($agentData) && $cont_id!=0){
						
					$rel_path = base_url().'uploads/dp/';
	            
					$path = './uploads/dp/';
						// echo  $path;
						// if(is_dir($path)){
						// 	echo '<br>ss';
						// }else{
						// 	echo '<br>ff';
						// }

						$config['upload_path'] = $path;
						$config['allowed_types'] = 'jpg|jpeg|png|bmp';
						$config['remove_spaces'] = TRUE;
						$config['max_size'] = 1000;
						//$config['min_width'] = 361;
						//$config['max_width'] = 361;
						//$config['min_height'] = 248;
						//$config['max_height'] = 248;

						$this->load->library('upload', $config);
						$this->upload->initialize($config);   

						if (!$this->upload->do_upload('agent_dp')) {
							$return['upload_error'] = '1';
							$return['file_error'] = $this->upload->display_errors();
						} else {
							$uploadedData = array('upload_data' => $this->upload->data());
						// print_obj($this->data['upload_success']);die;
						}

						if(empty($return['file_error'])){


							//if((isset($del) && $del==1) || empty($upldData)){
								// $insData = array(
								// 	'module_name' => 'teacher_dp',
								// 	'module_id' => $teacher_id,
								// 	'unique_id'  => $uniqid_edit,
								// 	'file_name' => $uploadedData['upload_data']['file_name'],
								// 	'file_type' => $uploadedData['upload_data']['file_type'],
								// 	'file_path'  => $rel_path.$uploadedData['upload_data']['file_name'],
								// 	'abs_file_path' => $uploadedData['upload_data']['full_path'],
								// 	'file_org_name' => $uploadedData['upload_data']['client_name'],
								// 	'file_size' => $uploadedData['upload_data']['file_size'],
								// 	'file_ext' => $uploadedData['upload_data']['file_ext'],
								// 	'created_by'  => $this->session->userdata('userid'),
								// 	'created_dtime'  => dtime
								// );
								
								// $uploaded = $this->cm->addUpload($insData);


								$updData = array(
									'file_path'  => $rel_path.$uploadedData['upload_data']['file_name'],
									'abs_file_path' => $uploadedData['upload_data']['full_path']
								);
								
								$uploaded = $this->mm->updateCont($updData, $p=array('id'=>$cont_id));
	
								if($uploaded){
									$return['cont_updated'] = 'success';
								}else{
									$return['cont_updated'] = 'failure';
								}
							//}else{

							//}
							
							
						}else{
							if ($return['file_error'] == '<p>You did not select a file to upload.</p>'){
								$return['cont_updated'] = 'success';
								$return['upload_error'] = '2';
							}else{
								$return['cont_updated'] = 'failure';
							}
						}
					
					
				}

			header('Content-Type: application/json');
			echo json_encode($return);	

			}else{
				redirect(base_url());
			}
		}
		else{
			redirect(base_url());
		}
 	}


	public function onDeleteContUs()
	{
		if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1 && $this->session->userdata('usergroup')==1)
		{
		   if($this->input->is_ajax_request() && $this->input->server('REQUEST_METHOD')=='POST'){

			$cont_id = xss_clean($this->input->post('contid'));
			$contdata = $this->mm->getContData(array('id'  => $cont_id),$many=FALSE);

			if($contdata){
				//del
				$delcont = $this->mm->delCont(array('id' => $cont_id));

				if($delcont){
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
		}
 	}
	

}
