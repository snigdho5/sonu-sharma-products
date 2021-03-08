<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct() {
		parent:: __construct();
	}


	public function index()
	{
		if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1 && ($this->session->userdata('usergroup')==1  || $this->session->userdata('usergroup')==2))
		{

			$productData = $this->mm->getProductList($p=null,$group_by='products_id');
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
			$this->load->view('masters/vw_products', $this->data, false);
		

		}
		else{
			redirect(base_url());
		}
	}

	public function onCreateProductView()
	{
		if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1 && ($this->session->userdata('usergroup')==1  || $this->session->userdata('usergroup')==2)){

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
            
			if(!empty(xss_clean($this->uri->segment(2)))){

				$products_id = xss_clean($this->uri->segment(2));
				$productData = $this->mm->getProductList($p=array('vg_products.products_id'=>$products_id),$group_by='products_id',$many=FALSE);
				if($productData){
						$this->data['pro_data'] = array(
                            'products_id'  => $productData->products_id,
                            'category_id'  => explode(",",$productData->cat_id),
                            'name'  => $productData->name,
							'price'  => $productData->price,
							'point_value'  => $productData->point_value,
                            'description'  => $productData->description,
                            'youtube_url'  => $productData->youtube_url,
							'file_path'  => $productData->file_path,
							'image_url'  => $productData->image_url,
                            'created_dtime'  => $productData->created_dtime
						);
				}
				else{
					$this->data['pro_data'] = '';
				}

				$this->load->view('masters/vw_create_product', $this->data, false);
			}
			else{
				$this->load->view('masters/vw_create_product', $this->data, false);
			}
			
		}else{
			redirect(base_url());
		}

	}

	public function onCheckDuplicateProduct()
	{
		if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1 && ($this->session->userdata('usergroup')==1  || $this->session->userdata('usergroup')==2))
		{
			if($this->input->is_ajax_request() && $this->input->server('REQUEST_METHOD')=='POST'){

				$name = xss_clean($this->input->post('name'));

				$is_exists = $this->mm->getProductData($p=array('name'=>$name),$many=FALSE);
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

	public function onCreateProduct()
	{
		if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1 && ($this->session->userdata('usergroup')==1  || $this->session->userdata('usergroup')==2))
		{
			if($this->input->is_ajax_request() && $this->input->server('REQUEST_METHOD')=='POST'){
				
                    $categories = xss_clean($this->input->post('categories'));
                    $name = xss_clean($this->input->post('name'));
					$price = xss_clean($this->input->post('price'));
					$point_value = xss_clean($this->input->post('point_value'));
                    $description = xss_clean($this->input->post('description'));
					$youtube_url = xss_clean($this->input->post('youtube_url'));
					$image_url = xss_clean($this->input->post('image_url'));
					$products_id = xss_clean($this->input->post('proid'));
					$uniqid = random_strings(7);
					

					$chkdata = array('name'  => $name);
					$productData = $this->mm->getProductData($chkdata,$many=FALSE);

				if(empty($productData) && $products_id==0){
					
					$insdata = array(
                                'name'  => $name,
								'price'  => $price,
								'point_value'  => $point_value,
                                'description'  => $description,
								'youtube_url'  => $youtube_url,
								'image_url'  => $image_url,
								'created_dtime'  => dtime,
								'created_by'  => $this->session->userdata('userid')
							);

					$added = $this->mm->addProduct($insdata);
					
					if(!empty($added) && !empty($categories)){

						foreach($categories as $key => $value){
							$catData = array(
								'products_id'  => $added,
								'category_id'  => $value,
								'created_dtime'  => dtime,
								'created_by'  => $this->session->userdata('userid')
							);
		
							$addedCat = $this->mm->addCatProBride($catData);
						}
					}
					

					if($added){
                        $rel_path = base_url().'uploads/products/';
                            
                                $path = './uploads/products/';
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

                                    if (!$this->upload->do_upload('product_file')) {
                                        $return['upload_error'] = '1';
                                        $return['file_error'] = $this->upload->display_errors();
                                    } else {
                                        $uploadedData = $this->upload->data();
                                        // print_obj($this->data['upload_success']);die;
                                    }

                                    if(empty($return['file_error'])){
											//compression
											$config['image_library'] = 'gd2';  
											$config['source_image'] = $path.$uploadedData["file_name"];  
											$config['create_thumb'] = FALSE;  
											$config['maintain_ratio'] = FALSE;  
											$config['quality'] = '50%';  
											//$config['width'] = 200;  
											//$config['height'] = 200;  
											$config['new_image'] = $path.$uploadedData["file_name"];  
											$this->load->library('image_lib', $config);  
											$this->image_lib->resize();  

                                            $updData = array(
                                                'file_path'  => $rel_path.$uploadedData['file_name'],
                                                'abs_file_path' => $uploadedData['full_path']
                                            );
                                            
                                            $uploaded = $this->mm->updateProduct($updData, $p=array('products_id'=>$added));
                
                                            if($uploaded){
                                                $return['pro_added'] = 'success';
                                            }else{
                                                $return['pro_added'] = 'failure';
                                            }
                                        //}else{

                                        //}
                                        
                                        
                                    }else{
                                        if ($return['file_error'] == '<p>You did not select a file to upload.</p>'){
                                            $return['pro_added'] = 'success';
                                            $return['upload_error'] = '2';
                                        }else{
                                            $return['pro_added'] = 'failure';
                                        }
                                    }
					}
					else{
						$return['pro_added'] = 'failure';
					}
						
				}
				else{

					$updata = array(
                                'name'  => $name,
                                'price'  => $price,
								'point_value'  => $point_value,
                                'description'  => $description,
								'youtube_url'  => $youtube_url,
								'image_url'  => $image_url,
								'edited_dtime'  => dtime,
								'edited_by'  => $this->session->userdata('userid')
                            );
                            
					$updated = $this->mm->updateProduct($updata,array('products_id'  => $products_id));

					if(!empty($updated) && !empty($categories)){

						foreach($categories as $key => $value){

							$chkCatB = array(
								'products_id'  => $products_id,
								'category_id'  => $value
							);
							$catBData = $this->mm->getCatProBrideData($chkCatB,$many=FALSE);

							if(empty($catBData)){
								$catData = array(
									'unique_id'  => $uniqid,
									'products_id'  => $products_id,
									'category_id'  => $value,
									'created_dtime'  => dtime,
									'created_by'  => $this->session->userdata('userid')
								);
			
								$addedCat = $this->mm->addCatProBride($catData);	
							}else{
								$catData = array(
									'unique_id'  => $uniqid,
									//'products_id'  => $products_id,
									//'category_id'  => $value,
									'edited_dtime'  => dtime,
									'edited_user'  => $this->session->userdata('userid')
								);
			
								$addedCat = $this->mm->updateCatProBride($catData,$chkCatB);	
							}
							
						}//foreach ends
						$del = $this->mm->delCatProBride(array('unique_id !=' => $uniqid,'products_id'  => $products_id));
					}


					if($updated){
                        $rel_path = base_url().'uploads/products/';
                            
                        $path = './uploads/products/';
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

                            if (!$this->upload->do_upload('product_file')) {
                                $return['upload_error'] = '1';
                                $return['file_error'] = $this->upload->display_errors();
                            } else {
                                $uploadedData = $this->upload->data();
                                // print_obj($this->data['upload_success']);die;
                            }

                            if(empty($return['file_error'])){
								//compression
								$config['image_library'] = 'gd2';  
								$config['source_image'] = $path.$uploadedData["file_name"];  
								$config['create_thumb'] = FALSE;  
								$config['maintain_ratio'] = FALSE;  
								$config['quality'] = '50%';  
								//$config['width'] = 200;  
								//$config['height'] = 200;  
								$config['new_image'] = $path.$uploadedData["file_name"];  
								$this->load->library('image_lib', $config);  
								$this->image_lib->resize();  

                                    $updData = array(
                                        'file_path'  => $rel_path.$uploadedData['file_name'],
                                        'abs_file_path' => $uploadedData['full_path']
                                    );
                                    
                                    $uploaded = $this->mm->updateProduct($updData, $p=array('products_id'=>$products_id));
        
                                    if($uploaded){
                                        $return['pro_updated'] = 'success';
                                    }else{
                                        $return['pro_updated'] = 'failure';
                                    }
                                //}else{

                                //}
                                
                                
                            }else{
                                if ($return['file_error'] == '<p>You did not select a file to upload.</p>'){
                                    $return['pro_updated'] = 'success';
                                    $return['upload_error'] = '2';
                                }else{
                                    $return['pro_updated'] = 'failure';
                                }
                            }
                    }
					else{
						$return['pro_updated'] = 'failure';
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

	public function onDeleteProduct()
	{
		if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1 && ($this->session->userdata('usergroup')==1  || $this->session->userdata('usergroup')==2))
			{
			   if($this->input->is_ajax_request() && $this->input->server('REQUEST_METHOD')=='POST'){

				$products_id = xss_clean($this->input->post('proid'));
				$productData = $this->mm->getProductData(array('products_id'  => $products_id),$many=FALSE);

				if($productData){
					//del
					$del = $this->mm->delProduct(array('products_id' => $products_id));
					$del2 = $this->mm->delCatProBride(array('products_id'  => $products_id));

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