<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Auth_model extends MY_Model {


	function __construct(){
		$this->table='admin_users';
		$this->primary_key='user_id';
	}

	public function addUser($data){
		$this->table='admin_users';
		return $this->store($data);
	}
	public function getUserData($param=null,$many=FALSE){
		$this->table='admin_users';
		if($param!=null && $many==FALSE){
			return $this->get_one($param);
		}
		elseif($param!=null && $many==TRUE){
			return $this->get_many($param,$order_by='user_id',$order='DESC',FALSE);
		}
		else{
			return $this->get_many();
		}
	}
	public function updateUser($data,$param){
		$this->table='admin_users';
		return $this->modify($data,$param);
	}
	public function delUser($param){
		$this->table='admin_users';
		return $this->remove($param);
	}


}
