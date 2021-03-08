<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Masters_model extends MY_Model {


	function __construct(){
		//
	}
	
	//board
	
	public function getBoardData($param=null,$many=FALSE){
		$this->table='mt_board';
		if($param!=null && $many==FALSE){
			return $this->get_one($param);
		}
		elseif($param!=null && $many==TRUE){
			return $this->get_many($param,$order_by='board_id',$order='DESC',FALSE);
		}
		elseif($param==null && $many==TRUE){
			return $this->get_many($param=null,$order_by='board_id',$order='DESC',FALSE);
		}
		else{
			return $this->get_many();
		}
	}

	
		//class

        public function getClassData($param=null,$many=FALSE){
            $this->table='mt_class';
            if($param!=null && $many==FALSE){
                return $this->get_one($param);
            }
            elseif($param!=null && $many==TRUE){
                return $this->get_many($param,$order_by='class_id',$order='DESC',FALSE);
            }
            elseif($param==null && $many==TRUE){
                return $this->get_many($param=null,$order_by='class_id',$order='DESC',FALSE);
            }
            else{
                return $this->get_many();
            }
        }
    
       

    //Subjects
   
    public function getSubjectData($param=null,$many=FALSE){
        $this->table='mt_subject';
        if($param!=null && $many==FALSE){
            return $this->get_one($param);
        }
        elseif($param!=null && $many==TRUE){
            return $this->get_many($param,$order_by='subject_id',$order='DESC',FALSE);
        }
        elseif($param==null && $many==TRUE){
            return $this->get_many($param=null,$order_by='subject_id',$order='DESC',FALSE);
        }
        else{
            return $this->get_many();
        }
    }



        //Teachers
      
        
        public function getTeacherData($param=null,$many=FALSE){
            $this->table='mt_teacher';
            if($param!=null && $many==FALSE){
                return $this->get_one($param);
            }
            elseif($param!=null && $many==TRUE){
                return $this->get_many($param,$order_by='teacher_id',$order='DESC',FALSE);
            }
            elseif($param==null && $many==TRUE){
                return $this->get_many($param=null,$order_by='teacher_id',$order='DESC',FALSE);
            }
            else{
                return $this->get_many();
            }
        }

        public function getTeacherSearch($param=null,$isone=null,$group_by=null){

            $this->db->select('courses.*, mt_teacher.*, uploads.file_path AS file_path, mt_subject.subject_name AS subject_name');
            
            $this->db->join('mt_teacher','courses.teachers_id=mt_teacher.teacher_id','left');

            $this->db->join('uploads','uploads.unique_id=mt_teacher.dp_uniq_id','left');

            $this->db->join('mt_board','mt_board.board_id=courses.board_id','left');

            $this->db->join('mt_class','mt_class.class_id=courses.class_id','left');

            $this->db->join('mt_subject','mt_subject.subject_id=courses.subject_id','left');
    
            if($param!=null){
                $this->db->where($param);
            }
    
            if($group_by!=null){
                $this->db->group_by("courses.course_id".$group_by);
            }
            
            $this->db->order_by("courses.course_id", "DESC");
            
            
    
            $query = $this->db->get('courses');
            //echo $this->db->last_query();die;
    
            if ($isone != null) {
                return $query->row();
            }else{
                return $query->result();
            }
            
        }

        public function getTeacherList($param=null,$isone=null,$group_by=null){

            $this->db->select('mt_teacher.*, uploads.file_path AS file_path');
    
            $this->db->join('uploads','uploads.unique_id=mt_teacher.dp_uniq_id','left');
    
            if($param!=null){
                $this->db->where($param);
            }
    
            if($group_by!=null){
                $this->db->group_by("mt_teacher.teacher_id".$group_by);
            }
            
            $this->db->order_by("mt_teacher.teacher_id", "DESC");
            
            
    
            $query = $this->db->get('mt_teacher');
            //echo $this->db->last_query();die;
    
            if ($isone != null) {
                return $query->row();
            }else{
                return $query->result();
            }
            
        }

        public function getTeacherVideos($param=null,$isone=null,$group_by=null){

            $this->db->select('uploads.*, uploads.file_path AS file_path');
    
            $this->db->join('courses','courses.course_id=uploads.module_id','left');
    
            if($param!=null){
                $this->db->where($param);
            }
    
            if($group_by!=null){
                $this->db->group_by("uploads.uploads_id".$group_by);
            }
            
            $this->db->order_by("uploads.uploads_id", "DESC");
            
            
    
            $query = $this->db->get('uploads');
            //echo $this->db->last_query();die;
    
            if ($isone != null) {
                return $query->row();
            }else{
                return $query->result();
            }
            
        }
     


}
