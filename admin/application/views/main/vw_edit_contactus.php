<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<?php $this->load->view('top_css'); ?>
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>common/assets/extra-libs/multicheck/multicheck.css">
	<link href="<?php echo base_url();?>common/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>common/assets/libs/select2/dist/css/select2.min.css">
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
					<h4 class="page-title">Edit Contact Us</h4>
					<div class="ml-auto text-right">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Contact Us</li>
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
				
						<form class="form-horizontal" id="edit_cont_form">
							<?php //print_obj($user_data);die; ?>
                                <div class="card-body">
                                    <h4 class="card-title">Edit Contact Us <button type="button" class="btn badge badge-pill badge-success" onclick="location.href='<?php echo base_url().'contactus'; ?>'">Contact List</button></h4>
                                    <p id="chk_msg_up" style="display: none;"></p>

                                    <div class="form-group row">
											<label for="fname" class="col-sm-3 text-right control-label col-form-label">Display Picture: (Allowed: jpg/jpeg/png/bmp | 1MB)</label>
											<div class="col-sm-9">
                                                <input type="hidden" id="cont_id" name="cont_id" value="<?php echo (!empty($agent_data) && $agent_data['cont_id']!='')?$agent_data['cont_id']:'0'; ?>">

												<input type="file" class="form-control" id="agent_dp" name="agent_dp" <?php echo (empty($agent_data))?'required':''; ?>>
												<label><a href="<?php echo (!empty($agent_data) && $agent_data['file_path']!='')?$agent_data['file_path']:''; ?>" target="_blank"><i class="icofont-file-document"></i> View Image</a></label>
											</div>
									</div>

                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
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
<script src="<?php echo base_url();?>common/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="<?php echo base_url();?>common/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="<?php echo base_url();?>common/assets/extra-libs/DataTables/datatables.min.js"></script>

 <script src="<?php echo base_url();?>common/assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url();?>common/assets/libs/select2/dist/js/select2.min.js"></script>

    <script>
	$(".select2").select2();

	$("form[id='edit_cont_form']").submit(function(e) {

		var formData = new FormData($(this)[0]);

		$.ajax({
			url: "<?php echo base_url();?>savecont",
			type: "POST",
			data: formData,
			success: function (d) {
				if(d.upload_error=='1' && (d.cont_updated=='failure' || d.cont_updated=='failure')){
					$('#chk_msg_up').show();
	            	$('#chk_msg_up').html('<i class="icofont-close-squared-alt"></i> Error: '+d.file_error);
					$("#chk_msg_up").css("color", "red");

				}else if(d.cont_updated=='failure'){

					alert('Something went wrong!');

				}else if(d.cont_updated=='success'){
					
					alert('Photo updated!');
					window.location.reload();

				}else if(d.upload_error=='2' && d.cont_updated=='success'){
					$('#chk_msg_up').show();
	            	$('#chk_msg_up').html('<i class="icofont-tick-mark"></i> Details Updated. Display picture is unchanged.');
					$("#chk_msg_up").css("color", "green");

				}else{
					alert('Something went wrong!');
				}
			},
			cache: false,
			contentType: false,
			processData: false
		});

		e.preventDefault();
	});


</script>

</body>

</html>
