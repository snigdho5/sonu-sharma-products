<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {

	public function __construct() {
		parent:: __construct();

	}

	public function get404()
	{
		$this->load->view('404', $this->data, false);
	}

	public function index()
	{
		$ip = $this->input->ip_address();
		$iplocation = getiplocation($ip);

		$hdata = array(
			'ip' => $ip,
			'country' => $iplocation->country,
			'countryCode' => $iplocation->countryCode,
			'region' => $iplocation->region,
			'regionName' => $iplocation->regionName,
			'city' => $iplocation->city,
			'page_name' => 'home',
			'hit_dtime' => dtime
			);
		$added=$this->mm->addHits($hdata);
	
		$countVisits = $this->mm->getWebCount();
			if($countVisits){
				$this->data['tot_visits'] = $countVisits->tot_count;
			}
			else{
				$this->data['tot_visits'] = '0';
			}

		$this->load->view('vw_welcome', $this->data, false);
	}

	public function indexProducts()
	{
		$ip = $this->input->ip_address();
		$iplocation = getiplocation($ip);

		$hdata = array(
			'ip' => $ip,
			'country' => $iplocation->country,
			'countryCode' => $iplocation->countryCode,
			'region' => $iplocation->region,
			'regionName' => $iplocation->regionName,
			'city' => $iplocation->city,
			'page_name' => 'products',
			'hit_dtime' => dtime
			);
		$added=$this->mm->addHits($hdata);

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

		$productData = $this->mm->getProductList($p=array('cat_products_bridge.category_id'  => '1'),$group_by='products_id');
			if($productData){
				foreach ($productData as $key => $value) {
					
					$this->data['pro_data'][] = array(
                        'products_id'  => $value->products_id,
                        'category_id'  => $value->cat_id,
                        'category_name'  => $value->category_name,
                        'name'  => $value->name,
						'price'  => $value->price,
						'point_value'  => $value->point_value,
                        'description'  => $value->description,
                        'youtube_url'  => $value->youtube_url,
						'file_path'  => $value->file_path,
						'image_url'  => $value->image_url,
						'created_dtime'  => $value->created_dtime
					);
				}
			}
			else{
				$this->data['pro_data'] = '';
			}

		//get url and details

		$distributor_id = xss_clean($this->uri->segment(2));
		
		if(isset($distributor_id) && $distributor_id != ''){
			$chkdata = array(
				'distributor_id'  => $distributor_id
			);
			$agentData = $this->mm->getAgentDetails($chkdata,$many=FALSE);
			//print_obj($agentData);die;
			if(!empty($agentData)){
				$this->data['agent_data'] = array(
						'id'  => $agentData->id,
						'unique_id'  => $agentData->unique_id,
						'distributor_id'  => $agentData->distributor_id,
						'referral_code'  => $agentData->referral_code,
						'designation'  => $agentData->designation,
						'first_name'  => $agentData->com_name,
						'last_name'  => $agentData->last_name,
						'email'  => $agentData->email,
						'phone_no'  => $agentData->phone_no,
						'date_time'  => $agentData->date_time,
						'file_path'  => $agentData->file_path,
						'demo_pass'  => 'Mydemo@143'
					);
					
			}
			else{
				$this->data['agent_data'] = '';
			  }
			  
		}else{
			$this->data['agent_data'] = '';
		  }
	
		$this->load->view('products/vw_welcome', $this->data, false);
	}

	public function onGetProductsByCat()
	{
		if($this->input->is_ajax_request() && $this->input->server('REQUEST_METHOD')=='POST')
		{
			$category_id = strip_tags($this->input->post('catid'));

			$productData = $this->mm->getProductList($p=array('cat_products_bridge.category_id'  => $category_id),$group_by='products_id');
			if($productData){
				foreach ($productData as $key => $value) {
					
					$return['pro_data'][] = array(
                        'products_id'  => $value->products_id,
                        'category_id'  => $value->cat_id,
                        'category_name'  => $value->category_name,
                        'name'  => $value->name,
                        'price'  => $value->price,
						'point_value'  => $value->point_value,
                        'description'  => $value->description,
                        'youtube_url'  => $value->youtube_url,
						'file_path'  => $value->file_path,
						'image_url'  => $value->image_url,
						'created_dtime'  => $value->created_dtime
					);
				}
			}
			else{
				$return['pro_data'] = '';
			}

			header('Content-Type: application/json');
			echo json_encode($return);	
		}else{
			redirect(base_url());
		}
	}

	public function onSearchProducts()
	{
		if($this->input->is_ajax_request() && $this->input->server('REQUEST_METHOD')=='POST')
		{
			$search = xss_clean($this->input->post('search'));

			$search =  strtolower($search);

			$productData = $this->mm->getProductList($p=array('vg_products.name LIKE'  => '%'.$search.'%'),$group_by='products_id');
			if($productData){
				foreach ($productData as $key => $value) {
					
					$return['pro_data'][] = array(
                        'products_id'  => $value->products_id,
                        'category_id'  => $value->cat_id,
                        'category_name'  => $value->category_name,
                        'name'  => $value->name,
                        'price'  => $value->price,
						'point_value'  => $value->point_value,
                        'description'  => $value->description,
                        'youtube_url'  => $value->youtube_url,
						'file_path'  => $value->file_path,
						'image_url'  => $value->image_url,
						'created_dtime'  => $value->created_dtime
					);
				}
			}
			else{
				$return['pro_data'] = '';
			}

			header('Content-Type: application/json');
			echo json_encode($return);	
		}else{
			redirect(base_url());
		}
	}

	

	public function onSetNewContact()
	{
		if($this->input->is_ajax_request() && $this->input->server('REQUEST_METHOD')=='POST')
		{
			$this->form_validation->set_rules('fname', 'First Name', 'trim|required|xss_clean|htmlentities');
			$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|xss_clean|htmlentities');
			$this->form_validation->set_rules('phone', 'Phone', 'trim|required|regex_match[/^[0-9]{10}$/]|xss_clean|htmlentities');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean|htmlentities');
			// $this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean|htmlentities');
			$this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean|htmlentities');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->form_validation->set_error_delimiters('', '');
				$return['errors'] = validation_errors();
				$return['added'] = 'rule_error';
			}
			else 
			{

				$fname = strip_tags($this->input->post('fname'));
				$lname = strip_tags($this->input->post('lname'));
				$phone = strip_tags($this->input->post('phone'));
				$email = strip_tags($this->input->post('email'));
				//$subject = strip_tags($this->input->post('subject'));
				$message = strip_tags($this->input->post('message'));
				$ip = $this->input->ip_address();

				$name = $fname .' '.$lname;

				$data = array(
					'name' => $name,
					'phone' => $phone,
					'email' => $email,
					'message' => $message,
					'created_ip' => $ip,
					'dtime' => dtime
				);
				//print_obj($data);die;
				$added=$this->mm->addContact($data);

				if($added){
					$return['added'] = 'success';
				}else{
					$return['added'] = 'failure';
				}

			//print_obj();die;
			}
			header('Content-Type: application/json');
			echo json_encode($return);	
		}else{
			redirect(base_url());
		}
	}
	

}
