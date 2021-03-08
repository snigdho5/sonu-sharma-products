<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Main_model extends MY_Model {


	function __construct(){
		//
	}

	//contact us
	public function addCont($data){
		$this->table='contact_us';
		return $this->store($data);
	}

	public function getContData($param=null,$many=FALSE,$order_by='id',$order='DESC'){
		$this->table='contact_us';
		if($param!=null && $many==FALSE){
			return $this->get_one($param);
		}
		elseif($param!=null && $many==TRUE){
			return $this->get_many($param,$order_by,$order,FALSE);
		}
		elseif($param==null && $many==TRUE){
			return $this->get_many($param,$order_by,$order,FALSE);
		}
		else{
			return $this->get_many();
		}
	}

	public function updateCont($data,$param){
		$this->table='contact_us';
		return $this->modify($data,$param);
	}

	public function delCont($param){
		$this->table='contact_us';
		return $this->remove($param);
	}

		//Category
		public function addCategory($data){
			$this->table='mt_category';
			return $this->store($data);
		}
	
		public function getCategoryData($param=null,$many=FALSE,$order_by='category_id',$order='DESC'){
			$this->table='mt_category';
			if($param!=null && $many==FALSE){
				return $this->get_one($param);
			}
			elseif($param!=null && $many==TRUE){
				return $this->get_many($param,$order_by,$order,FALSE);
			}
			elseif($param==null && $many==TRUE){
				return $this->get_many($param,$order_by,$order,FALSE);
			}
			else{
				return $this->get_many();
			}
		}
	
		public function updateCategory($data,$param){
			$this->table='mt_category';
			return $this->modify($data,$param);
		}
	
		public function delCategory($param){
			$this->table='mt_category';
			return $this->remove($param);
		}


			//Category product bridge
			public function addCatProBride($data){
				$this->table='cat_products_bridge';
				return $this->store($data);
			}
		
			public function getCatProBrideData($param=null,$many=FALSE,$order_by='bridge_id',$order='DESC'){
				$this->table='cat_products_bridge';
				if($param!=null && $many==FALSE){
					return $this->get_one($param);
				}
				elseif($param!=null && $many==TRUE){
					return $this->get_many($param,$order_by,$order,FALSE);
				}
				elseif($param==null && $many==TRUE){
					return $this->get_many($param,$order_by,$order,FALSE);
				}
				else{
					return $this->get_many();
				}
			}
		
			public function updateCatProBride($data,$param){
				$this->table='cat_products_bridge';
				return $this->modify($data,$param);
			}
		
			public function delCatProBride($param){
				$this->table='cat_products_bridge';
				return $this->remove($param);
			}
	

			

	//Product
	public function addProduct($data){
		$this->table='vg_products';
		return $this->store($data);
	}

	public function getProductData($param=null,$many=FALSE){
		$this->table='vg_products';
		if($param!=null && $many==FALSE){
			return $this->get_one($param);
		}
		elseif($param!=null && $many==TRUE){
			return $this->get_many($param,$order_by='products_id',$order='DESC',FALSE);
		}
		elseif($param==null && $many==TRUE){
			return $this->get_many($param,$order_by='products_id',$order='DESC',FALSE);
		}
		else{
			return $this->get_many();
		}
	}

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

	public function updateProduct($data,$param){
		$this->table='vg_products';
		return $this->modify($data,$param);
	}

	public function delProduct($param){
		$this->table='vg_products';
		return $this->remove($param);
	}

	
	


}
