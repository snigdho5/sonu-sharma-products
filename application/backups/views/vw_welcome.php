<!doctype html>
<html lang="en">
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="bhavishya india, bhavishyaindia.com">
    <meta name="description" content="bhavishyaindia.com">

    <!--====== Title ======-->
    <title><?php echo comp_name; ?> | Home</title>
	<?php $this->load->view('top_css'); ?>

</head>

<body>
    
    <!--====== PRELOADER PART START ======-->

    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== Header PART START ======-->

    <?php $this->load->view('header_main'); ?>  

    <!--====== Header PART ENDS ======-->

    <!--====== Slider PART START ======-->

    <section class="slider_area slider-active">
        <div class="single_slider bg_cover d-flex align-items-center" style="background-image: url(<?php echo base_url();?>common/images/slider-1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider_content text-center">
                            <h4 class="sub_title" data-animation="fadeInUp" data-delay="0.2s">Welcome to your </h4>
                            <h2 class="main_title" data-animation="fadeInUp" data-delay="0.5s">Best <span>Learning</span> Platform</h2>
                            <p data-animation="fadeInUp" data-delay="0.8s">A knowledge network where you can connect to the world of learning with a click of button.</p>
                            <a class="main-btn" href="<?php echo base_url();?>about" data-animation="fadeInUp" data-delay="1.1s">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider bg_cover d-flex align-items-center" style="background-image: url(<?php echo base_url();?>common/images/slider-3.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider_content text-center">
                            <h4 class="sub_title" data-animation="fadeInUp" data-delay="0.2s">Welcome to your </h4>
                            <h2 class="main_title" data-animation="fadeInUp" data-delay="0.5s">Best <span>Learning</span> Platform</h2>
                            <p data-animation="fadeInUp" data-delay="0.8s">A knowledge network where you can connect to the world of learning with a click of button.</p>
                            <a class="main-btn" href="<?php echo base_url();?>about" data-animation="fadeInUp" data-delay="1.1s">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Slider PART ENDS ======-->

    <!--====== Features PART START ======-->

    <section class="features_area ">
        <div class="container">
            <div class="features_wrapper">
                <div class="row no-gutters">
                    <div class="col-md-4 features_col">
                        <div class="single_features text-center">
                            <div class="features_icon">
                                <img src="<?php echo base_url();?>common/images/f-icon-1.png" alt="Icon">
                            </div>
                            <div class="features_content">
                                <h4 class="features_title"><a href="findyourteacher.html">Quality Teachers</a></h4>
                                <p>Student will learn in modern and dynamic environment, using new method and tricks to enhance their studies</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 features_col">
                        <div class="single_features text-center">
                            <div class="features_icon">
                                <img src="<?php echo base_url();?>common/images/f-icon-2.png" alt="Icon">
                            </div>
                            <div class="features_content">
                                <h4 class="features_title"><a href="courses-cbsc.html">Best Courses</a></h4>
                                <p>Our student say it best – our approach to teaching and supporting students helps them to thrive, progress and achieve their potential.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 features_col">
                        <div class="single_features text-center">
                            <div class="features_icon">
                                <img src="<?php echo base_url();?>common/images/f-icon-3.png" alt="Icon">
                            </div>
                            <div class="features_content">
                                <h4 class="features_title"><a href="#">Global Recognition</a></h4>
                                <p>Highest Quality Education –Ensure inclusive and equitable quality education and promote lifelong learning.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Features PART ENDS ======-->

    <!--====== About PART START ======-->

    <section class="about_area pt-80">
        <img class="shap_1" src="<?php echo base_url();?>common/images/shape/shape-1.png" alt="shape">
        <img class="shap_2" src="<?php echo base_url();?>common/images/shape/shape-2.png" alt="shape">
        <img class="shap_3" src="<?php echo base_url();?>common/images/shape/shape-3.png" alt="shape">
        <img class="shap_4" src="<?php echo base_url();?>common/images/shape/shape-4.png" alt="shape">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about_content mt-45">
                        <h3 class="about_title">We are the top learning platform</h3>
                        <p class="text">What do you think is better to receive after each lesson: a lovely looking badge or important skills you can immediately put into practice</p>
                        <p>What do you think is better to receive after each lesson: a lovely looking badge or important skills you can immediately put into practice? We thought you might choose the latter.</p>
                        <a href="<?php echo base_url();?>about" class="main-btn">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_image mt-50">
                        <img src="<?php echo base_url();?>common/images/about-1.jpg" alt="about" class="about_image-1">
                        <img src="<?php echo base_url();?>common/images/about-2.jpg" alt="about" class="about_image-2">
                        <img src="<?php echo base_url();?>common/images/about-3.jpg" alt="about" class="about_image-3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== About PART ENDS ======-->

    <!--====== Counter PART START ======-->

    <section class="counter_area pt-80 pb-130">
        <div class="container">
            <div class="row counter_wrapper">
                <div class="col-lg-3 col-sm-6 counter_col">
                    <div class="single_counter text-center mt-50">
                        <div class="counter_icon">
                            <div class="icon_wrapper">
                                <img src="<?php echo base_url();?>common/images/count_icon-1.png" alt="Icon">
                            </div>
                        </div>
                        <div class="counter_content">
                            <span class="cont"><span class="counter">78</span>+</span>
                            <p>Faculties</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 counter_col">
                    <div class="single_counter text-center mt-50">
                        <div class="counter_icon">
                            <div class="icon_wrapper">
                                <img src="<?php echo base_url();?>common/images/count_icon-2.png" alt="Icon">
                            </div>
                        </div>
                        <div class="counter_content">
                            <span class="cont"><span class="counter">5</span>k+</span>
                            <p>Total Students</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 counter_col">
                    <div class="single_counter text-center mt-50">
                        <div class="counter_icon">
                            <div class="icon_wrapper">
                                <img src="<?php echo base_url();?>common/images/count_icon-3.png" alt="Icon">
                            </div>
                        </div>
                        <div class="counter_content">
                            <span class="cont"><span class="counter">400</span>k</span>
                            <p>Courses</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 counter_col">
                    <div class="single_counter text-center mt-50">
                        <div class="counter_icon">
                            <div class="icon_wrapper">
                                <img src="<?php echo base_url();?>common/images/count_icon-4.png" alt="Icon">
                            </div>
                        </div>
                        <div class="counter_content">
                            <span class="cont"><span class="counter">1200</span></span>
                            <p>Online Seminers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Counter PART ENDS ======-->

    <!--====== About 2 PART START ======-->

    <section class="about_area_2 d-flex flex-wrap ">
        <div class="about_video bg_cover" style="background-image: url(<?php echo base_url();?>common/images/about_bg.jpg)">
            <div class="video">
                <a class="video_play" href="#"><i class="fa fa-play"></i></a>
            </div>
        </div>
        
        <div class="about_content_2">
            <div class="single_about_2 d-flex flex-wrap">
                <div class="about_2_content">
                    <div class="about_2_content_wrapper">
                        <h4 class="title"><a href="#">1 – on – 1 class</a></h4>
                        <p>Get a personal tutor with us for your learning.</p>
                    </div>
                </div>
                <div class="about_2_image bg_cover" style="background-image: url(<?php echo base_url();?>common/images/about-4.jpg)"></div>
            </div>
            
            <div class="single_about_2 d-flex flex-wrap">
                <div class="about_2_content order-md-last">
                    <div class="about_2_content_wrapper">
                        <h4 class="title"><a href="#">Demo Class</a></h4>
                        <p>Get a free demo class and select teacher of your wish </p>
                    </div>
                </div>
                <div class="about_2_image bg_cover order-md-first" style="background-image: url(<?php echo base_url();?>common/images/about-5.jpg)"></div>
            </div>
        </div>
    </section>

    <!--====== About 2 PART ENDS ======-->

    <!--====== Program PART START ======-->

    <section class="program_area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title section_title_2 text-center pb-50">
                        <h3 class="main_title">Our Gallery</h3>
                        <p>What do you think is better to receive after each lesson: a lovely looking badge or important skills you can immediately put into practice.</p>
                    </div>
                </div>
            </div>
            <div class="row no-gutters program_wrapper">
                <div class="col-lg-4 col-md-6 program_col">
                    <div class="single_program program_color-1 d-flex flex-wrap">
                        <div class="program_icon">
                            <div class="icon_wrapper">
                                <img src="<?php echo base_url();?>common/images/p-icon-1.png" alt="Icon">
                            </div>
                        </div>
                        <div class="program_content">
                            <div class="content_wrapper">
                                <h5 class="title"><a href="gallery.html">Applied <br> Physics</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 program_col">
                    <div class="single_program program_color-2 d-flex flex-wrap program_4">
                        <div class="program_icon">
                            <div class="icon_wrapper">
                                <img src="<?php echo base_url();?>common/images/p-icon-2.png" alt="Icon">
                            </div>
                        </div>
                        <div class="program_content">
                            <div class="content_wrapper">
                                <h5 class="title"><a href="gallery.html">Political <br> Science</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 program_col">
                    <div class="single_program program_color-3 d-flex flex-wrap program_3">
                        <div class="program_icon">
                            <div class="icon_wrapper">
                                <img src="<?php echo base_url();?>common/images/p-icon-3.png" alt="Icon">
                            </div>
                        </div>
                        <div class="program_content">
                            <div class="content_wrapper">
                                <h5 class="title"><a href="gallery.html">Business <br> Studies</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 program_col">
                    <div class="single_program program_color-4 d-flex flex-wrap program_2 program_3 program_4">
                        <div class="program_icon">
                            <div class="icon_wrapper">
                                <img src="<?php echo base_url();?>common/images/p-icon-4.png" alt="Icon">
                            </div>
                        </div>
                        <div class="program_content">
                            <div class="content_wrapper">
                                <h5 class="title"><a href="gallery.html">Rocket <br> Science</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 program_col">
                    <div class="single_program program_color-5 d-flex flex-wrap program_2">
                        <div class="program_icon">
                            <div class="icon_wrapper">
                                <img src="<?php echo base_url();?>common/images/p-icon-5.png" alt="Icon">
                            </div>
                        </div>
                        <div class="program_content">
                            <div class="content_wrapper">
                                <h5 class="title"><a href="gallery.html">Art & <br> Design</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 program_col">
                    <div class="single_program program_color-6 d-flex flex-wrap program_2 program_4">
                        <div class="program_icon">
                            <div class="icon_wrapper">
                                <img src="<?php echo base_url();?>common/images/p-icon-6.png" alt="Icon">
                            </div>
                        </div>
                        <div class="program_content">
                            <div class="content_wrapper">
                                <h5 class="title"><a href="gallery.html">Medical <br> Science</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Program PART ENDS ======-->

    <!--====== Why Choose Us PART START ======-->

    <section class="why_choose_area pt-120 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="why_choose_content">
                        <div class="section_title pb-20">
                            <h3 class="main_title">Why choose us?</h3>
                            <p>We have a global reputation for excellence due to outstanding quality of our teaching and support and the resulting high levels of student aspiration and achievements. We will help you realize your potential, ,maximize your result and achieve success.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 choose_col">
                                <div class="single_choose mt-30">
                                    <div class="choose_icon">
                                        <img src="<?php echo base_url();?>common/images/choose_icon-1.png" alt="Icon">
                                    </div>
                                    <div class="choose_content">
                                        <h5 class="title"><a href="#">Outstanding Student Progress</a></h5>
                                        <p>The high quality of teaching, alongside exceptionally strong support, enables the vast majority of students to consistently make outstanding progress.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 choose_col">
                                <div class="single_choose mt-30">
                                    <div class="choose_icon">
                                        <img src="<?php echo base_url();?>common/images/choose_icon-2.png" alt="Icon">
                                    </div>
                                    <div class="choose_content">
                                        <h5 class="title"><a href="#">Free Study Material</a></h5>
                                        <p>Download free NCERT solution, board wise syllabus, and previous years question papers and more.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 choose_col">
                                <div class="single_choose mt-30">
                                    <div class="choose_icon">
                                        <img src="<?php echo base_url();?>common/images/choose_icon-3.png" alt="Icon">
                                    </div>
                                    <div class="choose_content">
                                        <h5 class="title"><a href="#">Live and Interactive</a></h5>
                                        <p>Daily live tuition from your home, interactive chats and personal doubt asking</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 choose_col">
                                <div class="single_choose mt-30">
                                    <div class="choose_icon">
                                        <img src="<?php echo base_url();?>common/images/choose_icon-4.png" alt="Icon">
                                    </div>
                                    <div class="choose_content">
                                        <h5 class="title"><a href="#">Safe Learning From Home</a></h5>
                                        <p>No need to go to institute for the tuition in this summer, can easily get tuition by sitting in your home. Save on cost by staying at home while study and remain close to family.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="why_choose_image d-none d-lg-table">
            <div class="image">
                <img src="<?php echo base_url();?>common/images/choose_bg.png" alt="">
            </div>
        </div>
    </section>

    <!--====== Why Choose Us PART ENDS ======-->

    <!--====== Courses PART START ======-->

    <section class="courses_area courses_bg pt-120 pb-130">
        
        <img class="shape-1" src="<?php echo base_url();?>common/images/shape/shape-1.png" alt="shape">
        <img class="shape-2" src="<?php echo base_url();?>common/images/shape/shape-2.png" alt="shape">
        <img class="shape-3" src="<?php echo base_url();?>common/images/shape/shape-3.png" alt="shape">
        <img class="shape-4" src="<?php echo base_url();?>common/images/shape/shape-4.png" alt="shape">
        <img class="shape-5" src="<?php echo base_url();?>common/images/shape/shape-5.png" alt="shape">
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-20">
                        <h3 class="main_title">Featured Courses</h3>
                        <p>You will be able to find the right course or mix of subjects to suit your interests and career ambitions.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_courses mt-30">
                        <div class="courses_image">
                            <img src="<?php echo base_url();?>common/images/courses-1.jpg" alt="courses">
                        </div>
                        <div class="courses_content">
                            <ul class="tag">
                                <li><a href="#">CBSC</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                            <div class="courses_author d-flex">
                                <div class="author_image">
                                    <img src="<?php echo base_url();?>common/images/author-1.jpg" alt="author">
                                </div>
                                <div class="author_name media-body">
                                    <a href="#">Teacher Name</a>
                                </div>
                            </div>
                            <h4 class="title"><a data-toggle="modal" data-target="#onlineclass" href="#">Lorem ipsum doller sit amet </a></h4>
                            <div class="meta d-flex justify-content-between">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user-o"></i> 100</a></li>
                                </ul>
                                <span>Rs. 5000/pm</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_courses mt-30">
                        <div class="courses_image">
                            <img src="<?php echo base_url();?>common/images/courses-2.jpg" alt="courses">
                        </div>
                        <div class="courses_content">
                            <ul class="tag">
                                <li><a href="#">ICSC</a></li>
                                <li><a href="#">Math</a></li>
                            </ul>
                            <div class="courses_author d-flex">
                                <div class="author_image">
                                    <img src="<?php echo base_url();?>common/images/author-2.jpg" alt="author">
                                </div>
                                <div class="author_name media-body">
                                    <a href="#">Teacher Name</a>
                                </div>
                            </div>
                            <h4 class="title"><a data-toggle="modal" data-target="#onlineclass" href="#">Fundamental basic of learning english </a></h4>
                            <div class="meta d-flex justify-content-between">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user-o"></i> 100</a></li>
                                </ul>
                                <span>Rs. 5000/pm</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_courses mt-30">
                        <div class="courses_image">
                            <img src="<?php echo base_url();?>common/images/courses-3.jpg" alt="courses">
                        </div>
                        <div class="courses_content">
                            <ul class="tag">
                                <li><a href="#">Dance</a></li>
                                <li><a href="#">Bharat Natyam</a></li>
                            </ul>
                            <div class="courses_author d-flex">
                                <div class="author_image">
                                    <img src="<?php echo base_url();?>common/images/author-3.jpg" alt="author">
                                </div>
                                <div class="author_name media-body">
                                    <a href="#">Teacher Name</a>
                                </div>
                            </div>
                            <h4 class="title"><a data-toggle="modal" data-target="#onlineclass" href="#">Basic techniqes of learning design </a></h4>
                            <div class="meta d-flex justify-content-between">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user-o"></i> 100</a></li>
                                </ul>
                                <span>Rs. 800/pm</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_courses mt-30">
                        <div class="courses_image">
                            <img src="<?php echo base_url();?>common/images/courses-1.jpg" alt="courses">
                        </div>
                        <div class="courses_content">
                            <ul class="tag">
                                <li><a href="#">Question</a></li>
                                <li><a href="#">Class 10</a></li>
                            </ul>
                            <div class="courses_author d-flex">
                                <div class="author_image">
                                    <img src="<?php echo base_url();?>common/images/author-2.jpg" alt="author">
                                </div>
                                <div class="author_name media-body">
                                    <a href="#">Teacher Name</a>
                                </div>
                            </div>
                            <h4 class="title"><a data-toggle="modal" data-target="#onlineclass" href="#">Fundamental basic of learning english </a></h4>
                            <div class="meta d-flex justify-content-between">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user-o"></i> 1000</a></li>
                                </ul>
                                <span>Free</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Courses PART ENDS ======-->

    <!--====== Testimonial PART START ======-->

    <section class="testimonial_area pt-80 pb-130 bg_cover" style="background-image: url(<?php echo base_url();?>common/images/testimonial_bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="testimonial_title mt-50">
                        <img src="<?php echo base_url();?>common/images/quota.png" alt="quota">
                        <h2 class="title">Success stories of students who took best from us</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial_items mt-50">
                        <div class="single_testimonial">
                            <p>I found myself working in a true partnership that results in an incredible experience, and an end product that is the best. </p>
                            <h6 class="name">Ruchira Roy</h6>
                            <span>Student, Language</span>
                        </div>
                        
                        <div class="single_testimonial">
                            <p>I found myself working in a true partnership that results in an incredible experience, and an end product that is the best. </p>
                            <h6 class="name">Arnob Haldar</h6>
                            <span>Student, Language</span>
                        </div>
                        
                        <div class="single_testimonial">
                            <p>I found myself working in a true partnership that results in an incredible experience, and an end product that is the best. </p>
                            <h6 class="name">Binita Sing</h6>
                            <span>Student, Language</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Testimonial PART ENDS ======-->

    <!--====== Team PART START ======-->

    <section class="team_area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-50">
                        <h3 class="main_title">Top Teachers</h3>
                        <p>Our teachers specialize in post-16 education. Many are examiners, practicing academics and professionals in the subjects they teach. They share their knowledge and enthusiasm with students in a way that inspires and motivates them to enjoy learning and work hard. They support and guide students as they become increasingly independent and more responsible for their own learning.</p>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 team_col_1">
                    <div class="single_team d-sm-flex flex-wrap align-items-center">
                        <img class="team_arrow" src="<?php echo base_url();?>common/images/left.png" alt="left">
                        <div class="team_image">
                            <img src="<?php echo base_url();?>common/images/team-1.jpg" alt="team">
                        </div>
                        <div class="team_content">
                            <div class="team_content_wrapper">
                                <h4 class="title"><a href="#">Subhashis Roy</a></h4>
                                <span>Business Studies</span>
                            
                            </div>
                        </div>
                    </div>
                    <div class="single_team d-sm-flex flex-wrap align-items-center flex-row-reverse">
                        <img class="team_arrow" src="<?php echo base_url();?>common/images/right.png" alt="left">
                        <div class="team_image">
                            <img src="<?php echo base_url();?>common/images/team-3.jpg" alt="team">
                        </div>
                        <div class="team_content">
                            <div class="team_content_wrapper">
                                <h4 class="title"><a href="#">Rebeca Seth</a></h4>
                                <span>Business Studies</span>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 team_col_2">
                    <div class="single_team d-sm-flex flex-wrap align-items-center">
                        <img class="team_arrow" src="<?php echo base_url();?>common/images/left.png" alt="left">
                        <div class="team_image">
                            <img src="<?php echo base_url();?>common/images/team-2.jpg" alt="team">
                        </div>
                        <div class="team_content">
                            <div class="team_content_wrapper">
                                <h4 class="title"><a href="#">Andrew Rodrixs</a></h4>
                                <span>Math ( Class V-X)</span>
                                
                            </div>
                        </div>
                    </div>
                    <div class="single_team d-sm-flex flex-wrap align-items-center flex-row-reverse">
                        <img class="team_arrow" src="<?php echo base_url();?>common/images/right.png" alt="left">
                        <div class="team_image">
                            <img src="<?php echo base_url();?>common/images/team-4.jpg" alt="team">
                        </div>
                        <div class="team_content">
                            <div class="team_content_wrapper">
                                <h4 class="title"><a href="#">Annindita Sen</a></h4>
                                <span>English</span>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Team PART ENDS ======-->

    

   

    <!--====== Footer PART START ======-->

    <?php $this->load->view('footer_main'); ?>
    
    <!--====== Footer PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    




<?php $this->load->view('bottom_js'); ?>


</body>
</html>
