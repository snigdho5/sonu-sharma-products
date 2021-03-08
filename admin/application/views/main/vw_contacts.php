<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<?php $this->load->view('top_css'); ?>
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'common/assets/extra-libs/multicheck/multicheck.css';?>">
	<link href="<?php echo base_url().'common/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css';?>" rel="stylesheet">
	<title><?php echo comp_name; ?> | Contact Us</title>
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
					<h4 class="page-title">Contact Us</h4>
					<div class="ml-auto text-right">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
							<h5 class="card-title">Contact Us</h5>
							<div class="table-responsive">
								<table id="zero_config" class="table table-striped table-bordered">
									<thead>
									<tr class="textcen">
										<th>Sl</th>
										<th>CreatedOn</th>
										<th>Full Name</th>
										<th>Phone</th>
										<th>Email</th>
										<th>ReferralCode</th>
										<th>DistributorID</th>
										<th>Website</th>
										<th>Action</th>

									</tr>
									</thead>
									<tbody class="textcen">
									<?php
									if(!empty($cont_data)){
										//print_obj($cont_data);
										$sl=1;
										foreach($cont_data as $key => $val){
											?>
											<tr>
												<td><?php echo $sl; ?></td>
												<td><?php echo $val['date_time']; ?></td>
												<td><?php echo $val['first_name'].' '.$val['last_name']; ?></td>
												<td><?php echo $val['phone_no']; ?></td>
												<td><?php echo $val['email']; ?></td>
												<td><?php echo $val['referral_code']; ?></td>
												<td><?php echo $val['distributor_id']; ?></td>
												<td><a href="<?php echo $val['url']; ?>" target="_blank">View Page</a></td>
												<td>
													<?php if (!empty($this->session->userdata('userid')) && $this->session->userdata('usr_logged_in')==1 && $this->session->userdata('usergroup')==1) {  ?>
														<button type="button" onclick="location.href='<?php echo base_url().'editdealer/'.$val['cont_id']; ?>'"><i class="icofont-pencil-alt-2"></i></button>
														<button type="button" class="del_cont" data-contid="<?php echo $val['cont_id']; ?>" data-fullname="<?php echo $val['first_name']; ?>"><i class="fas fa-trash-alt"></i></button>
													<?php } ?>
												</td>
											</tr>
											<?php
											$sl++;
										}
									}
									else{
										?>
										<tr><td colspan="6">No data found</td></tr>
									<?php
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
	  $(".del_cont").click(function(){

		var cont_id = $(this).attr('data-contid');
		var fullname = $(this).attr('data-fullname');

		conf = confirm('Are you sure to delete '+fullname+'?');
		if(conf){
			$.ajax({

					type:'POST',

					url:'<?php echo base_url();?>deletecont',

					data:{contid:cont_id},

					success:function(d){

						if(d.deleted=='success'){

							alert('Deleted!');
							window.location.reload();

						}
						else if(d.deleted=='not_exists'){

							alert('Does not exists!');

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
