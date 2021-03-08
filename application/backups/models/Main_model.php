<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Main_model extends MY_Model {


	function __construct(){
		//
	}

	public function addHits($data){
		$this->table='website_hits';
		return $this->store($data);
	}

	public function addSignUp($data){
		$this->table='web_users';
		return $this->store($data);
	}

	public function addContact($data){
		$this->table='contact_us';
		return $this->store($data);
	}

	// public function getCountry($param=null,$many=FALSE){
	// 	$this->table='country';
	// 	if($param!=null && $many==FALSE){
	// 		return $this->get_one($param);
	// 	}
	// 	else{
	// 		return $this->get_many();
	// 	}

	// }

//
//	public function deleteForm($param){
//		$this->table='demotable';
//		return $this->remove($param);
//	}
//
//	public function updateForm($data,$param){
//		$this->table='demotable';
//		return $this->modify($data,$param);
//	}



}
