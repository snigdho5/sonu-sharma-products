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

	public function getWebCount($param=null){

		$this->db->select('COUNT(*) as tot_count');
		$this->db->from('website_hits');
		//$this->db->order_by('hits_id', 'DESC');
		//$this->db->limit('1');

		$query = $this->db->get();
		return $query->row();
	}

	public function addContact($data){
		$this->table='contact_us';
		return $this->store($data);
	}

	
	// upload
	public function addUpload($data){
		$this->table='uploads';
		return $this->store($data);
	}

	public function getAgentDetails($param=null,$many=FALSE){
		$this->table='contact_us';
		if($param!=null && $many==FALSE){
			return $this->get_one($param);
		}
		else{
			return $this->get_many();
		}

	}

	//category
	public function getCategoryData($param=null,$many=FALSE){
		$this->table='mt_category';
		if($param!=null && $many==FALSE){
			return $this->get_one($param);
		}
		elseif($param!=null && $many==TRUE){
			return $this->get_many($param,$order_by='category_id',$order='ASC',FALSE);
		}
		elseif($param==null && $many==TRUE){
			return $this->get_many($param,$order_by='category_id',$order='ASC',FALSE);
		}
		else{
			return $this->get_many();
		}
	}

	//product
	public function getProductList($param=null,$group_by=null,$many=TRUE){

		$this->db->select('vg_products.*, group_concat(mt_category.category_name) AS category_name, group_concat(mt_category.category_id) AS cat_id');

		$this->db->join('cat_products_bridge','cat_products_bridge.products_id=vg_products.products_id','left');

		$this->db->join('mt_category','mt_category.category_id=cat_products_bridge.category_id','left');

		if($param!=null){
			$this->db->where($param);
		}

		if($group_by!=null){
			$this->db->group_by("vg_products.".$group_by);
		}

		$this->db->order_by("vg_products.products_id", "DESC");

		$query = $this->db->get('vg_products');
		//echo $this->db->last_query();die;
		
		if($many != TRUE){
			return $query->row();
		}else{
			return $query->result();
		}
		

	}



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
