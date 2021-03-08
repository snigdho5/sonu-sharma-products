<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<?php $this->load->view('top_css'); ?>
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'common/assets/extra-libs/multicheck/multicheck.css';?>">
	<link href="<?php echo base_url().'common/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css';?>" rel="stylesheet">
	<title><?php echo comp_name; ?> | Uploads</title>
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
					<h4 class="page-title">Uploads</h4>
					<div class="ml-auto text-right">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Uploads</li>
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
							<h5 class="card-title">Uploads</h5>
							<p>
								<?php if(!isset($upload_status) && !isset($file_error)){ ?>
									<form action="<?php echo base_url();?>fileupload" method="post" enctype="multipart/form-data">
										<b>Upload File</b> (Allowed: pdf/docx/doc/mp4/webm | 100MB.) : 

										<input type="hidden" name="module_name" value="<?php echo (!empty(xss_clean($this->uri->segment(2))))?xss_clean($this->uri->segment(2)):''; ?>" />

										<input type="hidden" name="module_id" value="<?php echo (!empty(xss_clean($this->uri->segment(2))))?xss_clean($this->uri->segment(3)):''; ?>" />

										<input type="file" name="uploadFile" value="" />
										<input type="submit" name="submit" value="Upload" />
									</form>
								<?php } ?>

								<?php if(isset($upload_status) && $upload_status=='success'){
									echo '<br><i class="icofont-tick-mark" style="color:green;"></i> Successfully Uploaded.';
									echo ' <a href="'.base_url().'uploads/'.$module_name.'/'.$module_id.'">View</a>';
								} elseif(isset($file_error)){
									echo '<br><i class="icofont-close-circled" style="color:red;"></i> '.$file_error.' ';
								} elseif(isset($upload_status) && $upload_status=='failure'){
									echo '<br><i class="icofont-close-circled" style="color:red;"></i> Something went wrong!';
								}?>

							</p>

							<?php if(!isset($upload_status) && !isset($file_error)){ ?>
								<div class="table-responsive">
									<table id="zero_config" class="table table-striped table-bordered">
										<thead>
										<tr class="textcen">
											<th>Sl</th>
											<th>Created On</th>
											<th>File Name</th>
											<th>View</th>
											<?php if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1 && $this->session->userdata('usergroup')==1) { 
													?>
											<th>Action</th>
											<?php } ?>

										</tr>
										</thead>
										<tbody class="textcen">
										<?php
										if(!empty($upld_data)){
											//print_obj($upld_data);die;
											$sl=1;
											foreach($upld_data as $key => $val){
												?>
												<tr>
													<td><?php echo $sl; ?></td>
													<td><?php echo $val['created_dtime']; ?></td>
													<td><?php echo $val['file_name']; ?></td>
													<td><a href="<?php echo $val['file_path']; ?>" target="_blank"><i class="icofont-file-document"></i></a></td>
													<?php if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1 && $this->session->userdata('usergroup')==1) {  ?>
															<td>
															<button type="button" class="del_upld" data-fileid="<?php echo $val['uploads_id']; ?>" data-filename="<?php echo $val['file_name']; ?>"><i class="fas fa-trash-alt"></i></button>
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
											<tr><td colspan="5">No data found</td></tr>
										<?php
											}else{
												?>
												<tr><td colspan="4">No data found</td></tr>
												<?php
												}
											}
										?>
										</tbody>
									</table>
								</div>
							<?php } ?>

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
	
	$(document).on('click', '.del_upld', function(){
		
		var fileid = $(this).attr('data-fileid');
		var filename = $(this).attr('data-filename');
		

		conf = confirm('Are you sure to delete '+filename+'?');
		if(conf){
			$.ajax({

					type:'POST',

					url:'<?php echo base_url();?>deletefile',

					data:{fileid:fileid},

					success:function(d){

						if(d.deleted=='success'){

							alert('File deleted!');
							window.location.reload();

						}
						else if(d.deleted=='not_exists'){

							alert('File not exists!');

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
