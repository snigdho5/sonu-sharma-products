<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
     <!-- Site Metas -->
     <?php /*<meta name="title" content="<?php echo comp_name; ?> | About">
     <meta name="keywords" content="pracheenkalasamity, pracheenkalasamity.in, kala kendra, pkalasamity, pkalasamity.in">
     <meta name="description" content="Pracheen Kala Samity was founded in the year 1993, by Shri Tinkari Ghosh Alias Tinu Ghosh, a musician and inventor of a new musical instrument “TANTAR”,.."> 
     <meta name="author" content="Snigdho Upadhyay">
     <meta name="robots" content="index, follow">
      */?>
     <title><?php echo comp_name; ?> | 404</title>

     <?php $this->load->view('top_css'); ?>
</head>
<body class="host_version"> 


    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	

    <!-- Start header -->
	<?php $this->load->view('header_main'); ?>
	<!-- End header -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>404<span class="m_1">Page not found</span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section lb">
        <div class="container">
            <!-- <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>About</h3>
                    <p class="lead">About Pracheen Kala Samity</p>
                </div>
            </div> -->
        
            <div class="row align-items-center">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4></h4>
                        <h2>404 - Page not found</h2>
                        <p>The page or document is not available / URL was entered incorrectly.</p>
                        <a href="<?php echo base_url(); ?>" class="hover-btn-new orange"><span>Home</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

			</div>
            
        </div><!-- end container -->
    </div><!-- end section -->


    <?php $this->load->view('footer_main'); ?>

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <?php $this->load->view('bottom_js'); ?>

</body>
</html>