<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct() {
		parent:: __construct();
	}


	public function index()
	{
		if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1 && ($this->session->userdata('usergroup')==1  || $this->session->userdata('usergroup')==2))
		{

			$categoryData = $this->mm->getCategoryData($p=null,$many=TRUE);
			if($categoryData){
				foreach ($categoryData as $key => $value) {
					
					$this->data['cat_data'][] = array(
						'category_id'  => $value->category_id,
						'category_name'  => $value->category_name,
						'created_dtime'  => $value->created_dtime
					);
				}
			}
			else{
				$this->data['cat_data'] = '';
			}
			$this->load->view('masters/vw_category', $this->data, false);
		

		}
		else{
			redirect(base_url());
		}
	}

	public function onCreateCategoryView()
	{
		if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1 && ($this->session->userdata('usergroup')==1  || $this->session->userdata('usergroup')==2)){

			if(!empty(xss_clean($this->uri->segment(2)))){

				$category_id = xss_clean($this->uri->segment(2));
				$categoryData = $this->mm->getCategoryData($p=array('category_id'=>$category_id),$many=FALSE);
				if($categoryData){
						$this->data['cat_data'] = array(
							'category_id'  => $categoryData->category_id,
							'category_name'  => $categoryData->category_name,
							'created_dtime'  => $categoryData->created_dtime
						);
				}
				else{
					$this->data['cat_data'] = '';
				}

				$this->load->view('masters/vw_create_category', $this->data, false);
			}
			else{
				$this->load->view('masters/vw_create_category');
			}
			
		}else{
			redirect(base_url());
		}

	}

	public function onCheckDuplicateCategory()
	{
		if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1 && ($this->session->userdata('usergroup')==1  || $this->session->userdata('usergroup')==2))
		{
			if($this->input->is_ajax_request() && $this->input->server('REQUEST_METHOD')=='POST'){

				$category_name = xss_clean($this->input->post('category_name'));

				$is_exists = $this->mm->getCategoryData($p=array('category_name'=>$category_name),$many=FALSE);
				if($is_exists){
						$return['is_exists'] = 1;
				}
				else{
					$return['is_exists'] = 0;
				}
					
				header('Content-Type: application/json');

				echo json_encode($return);	
			}
			else{
				//exit('No direct script access allowed');
				redirect(base_url());
			}
		}else{
			redirect(base_url());
		}
	}

	public function onCreateCategory()
	{
		if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1 && ($this->session->userdata('usergroup')==1  || $this->session->userdata('usergroup')==2))
		{
			if($this->input->is_ajax_request() && $this->input->server('REQUEST_METHOD')=='POST'){

					$category_name = xss_clean($this->input->post('category_name'));
					$category_id = xss_clean($this->input->post('catid'));

					if($category_name != ''){
						$chkdata = array('category_name'  => $category_name);
						$categoryData = $this->mm->getCategoryData($chkdata,$many=FALSE);
	
					
						if(empty($categoryData) && $category_id==0){
							
							
							$insdata = array(
										'category_name'  => $category_name,
										'created_dtime'  => dtime,
										'created_by'  => $this->session->userdata('userid')
									);
		
							$added = $this->mm->addCategory($insdata);
		
							if($added){
								$return['cat_added'] = 'success';
							}
							else{
								$return['cat_added'] = 'failure';
							}
								
						}
						else{
		
							$updata = array(
										'category_name'  => $category_name,
										'edited_dtime'  => dtime,
										'edited_user'  => $this->session->userdata('userid')
									);
							$updated = $this->mm->updateCategory($updata,array('category_id'  => $category_id));
							if($updated){
								$return['cat_updated'] = 'success';
							}
							else{
								$return['cat_updated'] = 'failure';
							}
							
						}
					}else{
						$return['is_blank'] = '1';
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

	public function onDeleteCategory()
	{
		if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1 && ($this->session->userdata('usergroup')==1  || $this->session->userdata('usergroup')==2))
			{
			   if($this->input->is_ajax_request() && $this->input->server('REQUEST_METHOD')=='POST'){

				$category_id = xss_clean($this->input->post('catid'));
				$categoryData = $this->mm->getCategoryData(array('category_id'  => $category_id),$many=FALSE);

				if($categoryData){
					//del
					$del = $this->mm->delCategory(array('category_id' => $category_id));

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