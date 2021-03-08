<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Teachers extends CI_Controller {

	public function __construct() {
		parent:: __construct();

		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()
	{
        //
    }
    
    public function onGetMatchedTeacher()
	{
        if($this->input->server('REQUEST_METHOD')=='POST'){
            $board_id = xss_clean($this->input->post('board_id'));
            $subject_id = xss_clean($this->input->post('subject_id'));
            $class_id = xss_clean($this->input->post('class_id'));

			if($board_id !=0 && $subject_id !=0 && $class_id !=0){

				$param=array(
					'courses.board_id'=>$board_id,
					'courses.subject_id'=>$subject_id,
					'courses.class_id'=>$class_id
				);

				$teachersData = $this->msm->getTeacherSearch($param);

				if($teachersData){
					foreach ($teachersData as $key => $value) {
						
						$this->data['teach_data'][] = array(
							'teacher_id'  => $value->teacher_id,
							'teacher_name'  => $value->teacher_name,
							'subject_name'  => $value->subject_name,
							'teacher_bio'  => $value->teacher_bio,
							'course_name'  => $value->course_name,
							'teacher_phone'  => $value->teacher_phone,
							'teacher_email'  => $value->teacher_email,
							'file_path'  => $value->file_path,
							'created_dtime'  => $value->created_dtime
						);
					}
				}
				else{
					$this->data['teach_data'] = '';
				}
			}else{
				$this->data['not_selected'] = '1';
				$this->data['teach_data'] = '';
			}
           
			//print_obj($param);die;

            

        }else{
			//
        }
        
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
    
    public function onGetTeacherView()
	{
			if(!empty(xss_clean($this->uri->segment(2)))){

				$teacher_id = xss_clean($this->uri->segment(2));
				$teachersData = $this->msm->getTeacherList($p=array('mt_teacher.teacher_id'=>$teacher_id),$isone=1);
				if($teachersData){
						$this->data['teach_data'] = array(
							'teacher_id'  => $teachersData->teacher_id,
							'teacher_name'  => $teachersData->teacher_name,
							'teacher_bio'  => $teachersData->teacher_bio,
							'teacher_phone'  => $teachersData->teacher_phone,
							'teacher_email'  => $teachersData->teacher_email,
							'file_path'  => $teachersData->file_path,
							'created_dtime'  => $teachersData->created_dtime
						);
				}
				else{
					$this->data['teach_data'] = '';
                }

                $p=array(
                    'courses.teachers_id'=>$teacher_id,
                    'uploads.module_name'=>'course'
                );
                
                $VideoData = $this->msm->getTeacherVideos($p);
                
				if($VideoData){
                    foreach ($VideoData as $key => $value) {
						$this->data['videos'][] = array(
                            'file_path'  => $value->file_path
                        );
                    }
				}
				else{
					$this->data['videos'] = '';
				}

				$this->load->view('pages/vw_teacher_profile', $this->data, false);
			}
			else{
				redirect(base_url().'findteacher');
			}
	
	}

	

}
