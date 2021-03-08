<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {

	public function __construct() {
		parent:: __construct();

		$this->load->helper('form');
		$this->load->library('form_validation');
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
			'page_name' => 'index',
			'hit_dtime' => dtime
			);
		$added=$this->mm->addHits($hdata);


		$this->load->view('vw_welcome', $this->data, false);
	}

	

	public function onGetContact()
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
			'page_name' => 'contact',
			'hit_dtime' => dtime
			);
		$added=$this->mm->addHits($hdata);

			
			$this->load->view('pages/vw_contact', $this->data, false);

		
	}

	public function onGetAbout()
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
			'page_name' => 'about',
			'hit_dtime' => dtime
			);
		$added=$this->mm->addHits($hdata);

			
			$this->load->view('pages/vw_about', $this->data, false);

		
	}

	public function onGetTeacher()
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
			'page_name' => 'findteacher',
			'hit_dtime' => dtime
			);
		$added=$this->mm->addHits($hdata);

		//boards
		$boardData = $this->msm->getBoardData($p=null,$many=TRUE);
		if($boardData){
			foreach ($boardData as $key => $value) {
				
				$this->data['board_data'][] = array(
					'board_id'  => $value->board_id,
					'board_name'  => $value->board_name,
					'created_dtime'  => $value->created_dtime
				);
			}
		}
		else{
			$this->data['board_data'] = '';
		}

		//classes
		$classData = $this->msm->getClassData($p=null,$many=TRUE);
		if($classData){
			foreach ($classData as $key => $value) {
				
				$this->data['class_data'][] = array(
					'class_id'  => $value->class_id,
					'class_name'  => $value->class_name,
					'created_dtime'  => $value->created_dtime
				);
			}
		}
		else{
			$this->data['class_data'] = '';
		}
		
		//subjects
		$subjectData = $this->msm->getSubjectData($p=null,$many=TRUE);
		if($subjectData){
			foreach ($subjectData as $key => $value) {
				
				$this->data['subj_data'][] = array(
					'subject_id'  => $value->subject_id,
					'subject_name'  => $value->subject_name,
					'created_dtime'  => $value->created_dtime
				);
			}
		}
		else{
			$this->data['subj_data'] = '';
		}
		

			
			$this->load->view('pages/vw_find_teacher', $this->data, false);

		
	}

	public function onGetGallery()
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
			'page_name' => 'findteacher',
			'hit_dtime' => dtime
			);
		$added=$this->mm->addHits($hdata);

		//boards
		$boardData = $this->msm->getBoardData($p=null,$many=TRUE);
		if($boardData){
			foreach ($boardData as $key => $value) {
				
				$this->data['board_data'][] = array(
					'board_id'  => $value->board_id,
					'board_name'  => $value->board_name,
					'created_dtime'  => $value->created_dtime
				);
			}
		}
		else{
			$this->data['board_data'] = '';
		}

		//classes
		$classData = $this->msm->getClassData($p=null,$many=TRUE);
		if($classData){
			foreach ($classData as $key => $value) {
				
				$this->data['class_data'][] = array(
					'class_id'  => $value->class_id,
					'class_name'  => $value->class_name,
					'created_dtime'  => $value->created_dtime
				);
			}
		}
		else{
			$this->data['class_data'] = '';
		}
		
		//subjects
		$subjectData = $this->msm->getSubjectData($p=null,$many=TRUE);
		if($subjectData){
			foreach ($subjectData as $key => $value) {
				
				$this->data['subj_data'][] = array(
					'subject_id'  => $value->subject_id,
					'subject_name'  => $value->subject_name,
					'created_dtime'  => $value->created_dtime
				);
			}
		}
		else{
			$this->data['subj_data'] = '';
		}

		 //teachers
		 $teachersData = $this->msm->getTeacherData($p=null,$many=TRUE);
		 if($teachersData){
			 foreach ($teachersData as $key => $value) {
				 
				 $this->data['teach_data'][] = array(
					 'teacher_id'  => $value->teacher_id,
					 'teacher_name'  => $value->teacher_name,
					 'created_dtime'  => $value->created_dtime
				 );
			 }
		 }
		 else{
			 $this->data['teach_data'] = '';
		 }
		

			
			$this->load->view('pages/vw_gallery', $this->data, false);

		
	}

	public function onSetSignUp()
	{
		if($this->input->is_ajax_request() && $this->input->server('REQUEST_METHOD')=='POST')
		{
			$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean|htmlentities');
			$this->form_validation->set_rules('phone', 'Phone', 'trim|required|regex_match[/^[0-9]{10}$/]|xss_clean|htmlentities');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean|htmlentities');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->form_validation->set_error_delimiters('', '');
				$return['errors'] = validation_errors();
				$return['added'] = 'rule_error';
			}
			else 
			{

				$name = strip_tags($this->input->post('name'));
				$phone = strip_tags($this->input->post('phone'));
				$email = strip_tags($this->input->post('email'));
				$ip = $this->input->ip_address();


				$data = array(
				'name' => $name,
				'phone' => $phone,
				'email' => $email,
				'created_ip' => $ip,
				'created_dtime' => dtime
				);
				//print_obj($data);die;
				$added=$this->mm->addSignUp($data);

				if($added){
					$return['added'] = 'success';
				}else{
					$return['added'] = 'failure';
				}


				//echo $fname.'___'.$lname;die;

			//print_obj();die;
			}
			header('Content-Type: application/json');
			echo json_encode($return);	
		}
	}


	public function onSetNewContact()
	{
		if($this->input->is_ajax_request() && $this->input->server('REQUEST_METHOD')=='POST')
		{
			$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean|htmlentities');
			$this->form_validation->set_rules('phone', 'Phone', 'trim|required|regex_match[/^[0-9]{10}$/]|xss_clean|htmlentities');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean|htmlentities');
			$this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean|htmlentities');
			$this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean|htmlentities');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->form_validation->set_error_delimiters('', '');
				$return['errors'] = validation_errors();
				$return['added'] = 'rule_error';
			}
			else 
			{

				$name = strip_tags($this->input->post('name'));
				$phone = strip_tags($this->input->post('phone'));
				$email = strip_tags($this->input->post('email'));
				$subject = strip_tags($this->input->post('subject'));
				$message = strip_tags($this->input->post('message'));
				$ip = $this->input->ip_address();


				$data = array(
				'name' => $name,
				'phone' => $phone,
				'email' => $email,
				'subject' => $subject,
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


				//echo $fname.'___'.$lname;die;

			//print_obj();die;
			}
			header('Content-Type: application/json');
			echo json_encode($return);	
		}
	}



	


	
	

}
