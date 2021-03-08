<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<?php $this->load->view('top_css'); ?>
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>common/assets/extra-libs/multicheck/multicheck.css">
	<link href="<?php echo base_url(); ?>common/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>common/assets/libs/select2/dist/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>common/assets/libs/jquery-minicolors/jquery.minicolors.css">
	<link rel="stylesheet" href="<?php echo base_url() . 'common/dist/css/style.min.css'; ?>">
	<title><?php echo comp_name; ?> | Add Product</title>
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
						<h4 class="page-title">Add Product</h4>
						<div class="ml-auto text-right">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Product</li>
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

							<form class="form-horizontal" id="create_product_form">
								<?php //print_obj($user_data);die; 
								?>
								<div class="card-body">
									<h4 class="card-title">Create New Product <button type="button" class="btn badge badge-pill badge-success" onclick="location.href='<?php echo base_url() . 'products'; ?>'">Product List</button></h4>
									<p id="chk_msg_up" style="display: none;"></p>

									<div class="form-group row">
										<label for="fname" class="col-sm-3 text-right control-label col-form-label">Category</label>
										<div class="col-sm-9">
											<input type="hidden" id="proid" name="proid" value="<?php echo (!empty($pro_data) && $pro_data['products_id'] != '') ? $pro_data['products_id'] : '0'; ?>">

											<select class="select2 form-control m-t-15" multiple="multiple" style="width: 100%; height:36px;" id="categories" name="categories[]" required="">
												<option value="0">Select</option>

												<?php
												if (!empty($cat_data)) {
													//print_obj($cat_data);die;
													foreach ($cat_data as $key => $val) {
												?>
														<option value="<?php echo $val['category_id']; ?>" <?php echo (!empty($pro_data) && in_array($val['category_id'], $pro_data['category_id'])) ? 'selected' : ''; ?>><?php echo $val['category_name']; ?></option>
												<?php
													}
												}
												?>

											</select>
										</div>
									</div>

									<div class="form-group row">
										<label for="fname" class="col-sm-3 text-right control-label col-form-label">Product Name</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="name" name="name" placeholder="Product Name.." value="<?php echo (!empty($pro_data) && $pro_data['name'] != '') ? $pro_data['name'] : ''; ?>" required="">
											<label id="chk_msg" style="display: none;"></label>
										</div>
									</div>
									<div class="form-group row">
										<label for="fname" class="col-sm-3 text-right control-label col-form-label">Category Price</label>
										<div class="col-sm-9">

											<input type="number" class="form-control" id="price" name="price" placeholder="Price.." value="<?php echo (!empty($pro_data) && $pro_data['price'] != '') ? $pro_data['price'] : ''; ?>" required="">

										</div>
									</div>

									<div class="form-group row">
										<label for="fname" class="col-sm-3 text-right control-label col-form-label">Point value</label>
										<div class="col-sm-9">

											<input type="text" class="form-control" id="point_value" name="point_value" placeholder="Point Value.." value="<?php echo (!empty($pro_data) && $pro_data['point_value'] != '') ? $pro_data['point_value'] : ''; ?>">

										</div>
									</div>
									<div class="form-group row">
										<label for="fname" class="col-sm-3 text-right control-label col-form-label">Category Description</label>
										<div class="col-sm-9">

											<textarea class="form-control" id="description" name="description" placeholder="Description.."><?php echo (!empty($pro_data) && $pro_data['description'] != '') ? $pro_data['description'] : ''; ?></textarea>

										</div>
									</div>
									<div class="form-group row">
										<label for="fname" class="col-sm-3 text-right control-label col-form-label">Youtube EmbedURL</label>
										<div class="col-sm-9">

											<input type="text" class="form-control" id="youtube_url" name="youtube_url" placeholder="Youtube URL.." value="<?php echo (!empty($pro_data) && $pro_data['youtube_url'] != '') ? $pro_data['youtube_url'] : ''; ?>" required="">

										</div>
									</div>

									<div class="form-group row">
										<label for="fname" class="col-sm-3 text-right control-label col-form-label">Category Image (Allowed: jpg/jpeg/png/bmp | 1MB)</label>
										<div class="col-sm-9">

											<input type="file" class="form-control" id="product_file" name="product_file" <?php echo (empty($pro_data)) ? 'required' : ''; ?>>
											<label><a href="<?php echo (!empty($pro_data) && $pro_data['file_path'] != '') ? $pro_data['file_path'] : ''; ?>" target="_blank"><i class="icofont-file-document"></i> View Image</a></label>

										</div>
									</div>

									<div class="form-group row">
										<label for="fname" class="col-sm-3 text-right control-label col-form-label">Image URL</label>
										<div class="col-sm-9">

											<input type="text" class="form-control" id="image_url" name="image_url" placeholder="Image URL.." value="<?php echo (!empty($pro_data) && $pro_data['image_url'] != '') ? $pro_data['image_url'] : ''; ?>">

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
	<script src="<?php echo base_url(); ?>common/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
	<script src="<?php echo base_url(); ?>common/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
	<script src="<?php echo base_url(); ?>common/assets/extra-libs/DataTables/datatables.min.js"></script>
	<script src="<?php echo base_url(); ?>common/assets/libs/select2/dist/js/select2.full.min.js"></script>
	<script src="<?php echo base_url(); ?>common/assets/libs/select2/dist/js/select2.min.js"></script>
	<script src="<?php echo base_url(); ?>common/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>


	<script>
		$(".select2").select2();

		$("#name").keyup(function() {

			var name = $('#name').val();

			if (name != '') {
				$('#submit').attr("disabled", true);
				$.ajax({
					type: "POST",
					url: "<?php echo base_url() . 'duplicate_check_product'; ?>",
					data: {
						name: name
					},

					success: function(d) {
						if (d.is_exists == 1) {
							$('#chk_msg').show();
							$('#chk_msg').html('<i class="icofont-close-squared-alt"></i> Product already exists..!!');
							$("#chk_msg").css("color", "red");
							$('#submit').attr("disabled", true);
							return false;
						} else {
							$('#chk_msg').show();
							$('#chk_msg').html('<i class="icofont-tick-boxed"></i> Product available.');
							$("#chk_msg").css("color", "green");
							$('#submit').attr("disabled", false);
						}
					}
				});
			} else {
				$('#chk_msg').hide();
			}

		});

		$("form[id='create_product_form']").submit(function(e) {

			var formData = new FormData($(this)[0]);

			$.ajax({
				url: "<?php echo base_url(); ?>createproduct",
				type: "POST",
				data: formData,
				success: function(d) {
					if (d.pro_added == 'success') {

						$('#chk_msg_up').show();
						$('#chk_msg_up').html('<i class="icofont-tick-mark"></i> Product added!');
						$("#chk_msg_up").css("color", "green");
						setTimeout(function() {
							window.location.reload();
						}, 1000);

					} else if (d.upload_error == '1' && (d.pro_added == 'failure' || d.pro_updated == 'failure')) {
						$('#chk_msg_up').show();
						$('#chk_msg_up').html('<i class="icofont-close-squared-alt"></i> Error: ' + d.file_error);
						$("#chk_msg_up").css("color", "red");

					} else if (d.pro_added == 'failure') {

						alert('Something went wrong!');

					} else if (d.upload_error == '2' && d.pro_updated == 'success') {
						$('#chk_msg_up').show();
						$('#chk_msg_up').html('<i class="icofont-tick-mark"></i> Details Updated. Display picture is unchanged.');
						$("#chk_msg_up").css("color", "green");
						setTimeout(function() {
							window.location.reload();
						}, 1000);

					} else if (d.pro_updated == 'success') {

						$('#chk_msg_up').show();
						$('#chk_msg_up').html('<i class="icofont-tick-mark"></i> Product updated!');
						$("#chk_msg_up").css("color", "green");
						setTimeout(function() {
							window.location.reload();
						}, 1000);

					} else {
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