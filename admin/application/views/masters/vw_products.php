<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<?php $this->load->view('top_css'); ?>
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'common/assets/extra-libs/multicheck/multicheck.css';?>">
	<link href="<?php echo base_url().'common/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css';?>" rel="stylesheet">
	<title><?php echo comp_name; ?> | Product</title>
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
	<div class="lds-ripple">
		<div class="lds-pos"></div>
		<div class="lds-pos"></div>
	</div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
	<!-- ============================================================== -->
	<!-- Topbar header - style you can find in pages.scss -->
	<?php $this->load->view('header_main'); ?>
	<!-- End Topbar header -->
	<!-- Left Sidebar - style you can find in sidebar.scss  -->
	<?php $this->load->view('sidebar_main'); ?>
	<!-- End Left Sidebar - style you can find in sidebar.scss  -->
	<!-- ============================================================== -->
	<div class="page-wrapper">
		<!-- ============================================================== -->
		<div class="page-breadcrumb">
			<div class="row">
				<div class="col-12 d-flex no-block align-items-center">
					<h4 class="page-title">Product</h4>
					<div class="ml-auto text-right">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Product</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<div class="container-fluid">
			<!-- ============================================================== -->
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Product <button type="button" class="btn badge badge-pill badge-success" onclick="location.href='<?php echo base_url().'addproduct'; ?>'">Add Product</button></h5>
							<div class="table-responsive">
								<table id="zero_config" class="table table-striped table-bordered">
									<thead>
									<tr class="textcen">
										<th>Sl</th>
										<th>Created On</th>
										<th>Category</th>
										<th>Product Name</th>
										<th>Price</th>
										<th>Image</th>
										<th>YoutubeURL</th>
										<?php if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1 && $this->session->userdata('usergroup')==1) { 
												?>
										<th>Action</th>
										<?php } ?>

									</tr>
									</thead>
									<tbody class="textcen">
									<?php
									if(!empty($pro_data)){
										//print_obj($pro_data);die;
										$sl=1;
										foreach($pro_data as $key => $val){
											?>
											<tr>
												<td><?php echo $sl; ?></td>
												<td><?php echo $val['created_dtime']; ?></td>
												<td><?php echo $val['category_name']; ?></td>
												<td><?php echo $val['name']; ?></td>
												<td><?php echo $val['price']; ?></td>
												<td><a href="<?php echo $val['file_path']; ?>" target="_blank"><i class="icofont-file-document"></i> View Image</a></td>
												<td><a href="<?php echo $val['youtube_url']; ?>" target="_blank"><i class="icofont-file-document"></i> YoutubeURL</a></td>
												<?php if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1 && $this->session->userdata('usergroup')==1) {  ?>
													<td>
														<button type="button" onclick="location.href='<?php echo base_url().'editproduct/'.$val['products_id']; ?>'"><i class="icofont-pencil-alt-2"></i></button>
														<button type="button" class="del_pro" data-proid="<?php echo $val['products_id']; ?>" data-proname="<?php echo $val['name']; ?>"><i class="fas fa-trash-alt"></i></button>
													</td>
												<?php } ?>
												
											</tr>
											<?php
											$sl++;
										}
									}
									else{
										if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1 && $this->session->userdata('usergroup')==1) { 
										?>
										<tr><td colspan="4">No data found</td></tr>
									<?php
										}else{
											?>
											<tr><td colspan="3">No data found</td></tr>
											<?php
											}
										}
									?>
									</tbody>
								</table>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- ============================================================== -->
		</div>
		<!-- ============================================================== -->
		<!-- End Container fluid  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- footer -->
		<!-- ============================================================== -->
		<?php $this->load->view('footer'); ?>
		<!-- ============================================================== -->
		<!-- End footer -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- End Page wrapper  -->
	<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<?php $this->load->view('bottom_js'); ?>
<!-- this page js -->
<script src="<?php echo base_url().'common/assets/extra-libs/multicheck/datatable-checkbox-init.js';?>"></script>
<script src="<?php echo base_url().'common/assets/extra-libs/multicheck/jquery.multicheck.js';?>"></script>
<script src="<?php echo base_url().'common/assets/extra-libs/DataTables/datatables.min.js';?>"></script>
<script>
	/****************************************
	 *       Basic Table                   *
	 ****************************************/
	$('#zero_config').DataTable();

 $(document).ready(function(){
	
	$(document).on('click', '.del_pro', function(){
		
		var proid = $(this).attr('data-proid');
		var proname = $(this).attr('data-proname');
		

		conf = confirm('Are you sure to delete '+proname+'?');
		if(conf){
			$.ajax({

					type:'POST',

					url:'<?php echo base_url();?>deleteproduct',

					data:{proid:proid},

					success:function(d){

						if(d.deleted=='success'){

							alert('Product deleted!');
							window.location.reload();

						}
						else if(d.deleted=='not_exists'){

							alert('Product not exists!');

						}else{
							alert('Something went wrong!');
						}

					}

				});
			}
		});	

	

 });
</script>

</body>

</html>
