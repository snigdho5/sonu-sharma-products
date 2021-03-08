<!doctype html>
<html lang="en">
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title><?php echo comp_name; ?> | Teacher's Profile</title>

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
    

    <section class="page_banner bg_cover" style="padding-top: 38px;background: #1b2945;"></section>
    
   
    <!--====== Testimonial PART START ======-->

    <section class="testimonial_area_3 pt-130 pb-130 bg_cover"  style="display: none;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="testimonial_title text-center pb-55">
                        <img src="<?php echo base_url();?>common/images/quota.png" alt="quota">
                        <h2 class="title">Students Testimonial</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-7 col-sm-9">
                    <div class="row testimonial_author_active">
                        <div class="col-lg-4">
                            <div class="single_testimonial_author">
                                <img src="<?php echo base_url();?>common/images/testimonial-author-1.jpg" alt="author">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_testimonial_author">
                                <img src="<?php echo base_url();?>common/images/testimonial-author-2.jpg" alt="author">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_testimonial_author">
                                <img src="<?php echo base_url();?>common/images/testimonial-author-3.jpg" alt="author">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_testimonial_author">
                                <img src="<?php echo base_url();?>common/images/testimonial-author-2.jpg" alt="author">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-lg-6">
                    <div class="testimonial_content_active">
                        <div class="single_testimonial_content">
                            <p>I found myself working in a true partnership that results in an incredible experience, and an end product .</p>
                            <h6 class="author_name">Arnold Holder</h6>
                            <span class="sub_title">Student, Language</span>
                        </div>

                        <div class="single_testimonial_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem dolores, deleniti necessitatibus earum.</p>
                            <h6 class="author_name">Srnold Holder</h6>
                            <span class="sub_title">Student, Language</span>
                        </div>

                        <div class="single_testimonial_content">
                            <p>I found myself working in a true partnership that results in an incredible experience, and an end product .</p>
                            <h6 class="author_name">Mrnold Holder</h6>
                            <span class="sub_title">Student, Language</span>
                        </div>

                        <div class="single_testimonial_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem dolores, deleniti necessitatibus earum.</p>
                            <h6 class="author_name">Nrnold Holder</h6>
                            <span class="sub_title">Student, Language</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Testimonial PART ENDS ======-->

    
    <!--====== About 4 PART START ======-->

    <section class="about_area_4 pt-80 pb-130">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="about_image_5 mt-50">
                        <img class="image" src="<?php echo (!empty($teach_data) && $teach_data['file_path']!='')?$teach_data['file_path']:''; ?>" alt="about">

                        <div class="about_items d-flex flex-wrap">
                            <div class="single_items">
                                <div class="items_wrapper">
                                    <img src="<?php echo base_url();?>common/images/p-icon-7.png" alt="icon">
                                    <h5 class=items_title>Best Tutor <?php echo date('Y'); ?></h5>
                                </div>
                            </div>
                            <div class="single_items">
                                <div class="items_wrapper">
                                    <img src="<?php echo base_url();?>common/images/p-icon-8.png" alt="icon">
                                    <h5 class=items_title>Most Rated Tutor</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="about_content_5 text-center mt-45">
                        <div class="section_title">
                            <h3 class="main_title"><?php echo (!empty($teach_data) && $teach_data['teacher_name']!='')?$teach_data['teacher_name']:''; ?></h3>
                            <p><?php echo (!empty($teach_data) && $teach_data['teacher_bio']!='')?$teach_data['teacher_bio']:''; ?></p>
                        </div>

                       

                        <div class="about_info d-sm-flex justify-content-center">
                            <div class="single_about_info mt-30">
                                <img src="<?php echo base_url();?>common/images/call.png" alt="call">
                                <p><?php echo (!empty($teach_data) && $teach_data['teacher_phone']!='')?$teach_data['teacher_phone']:''; ?></p>
                            </div>
                            <div class="single_about_info mt-30">
                                <img src="<?php echo base_url();?>common/images/mail.png" alt="mail">
                                <p><?php echo (!empty($teach_data) && $teach_data['teacher_email']!='')?$teach_data['teacher_email']:''; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== About 4 PART ENDS ======-->
    
    <!--====== Event 3 PART START ======-->

    <section class="event_area_3 pt-20">
        <div class="event_bg bg_cover" style="background-image: url(<?php echo base_url();?>common/images/event_bg.jpg)"></div>
        <div class="container">
            <div class="event_title_btn align-items-center d-md-flex justify-content-between pb-55">
                <div class="section_title section_title_2 mt-50">
                    <h3 class="main_title">My Latest Video</h3>
                </div>

                
            </div>
        </div>
        <div class="container-fluid">
            <div class="row event_active_3">
                <?php 
                if(!empty($videos)){
                    //print_obj($videos);die;
                    foreach ($videos as $key => $value) {
                    ?>
                    <div class="col-lg-8">
                        <div class="single_event_3">
                            <div class="event_image">
                                <img src="<?php echo base_url();?>common/images/subject-1.jpg" alt="event">
                            </div>
                            <div class="event_content d-flex">
                                <!-- <div class="event_meta media-body"> -->
                                    <iframe width="100%" height="250" src="<? echo $value['file_path']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                <?php 
                    }
                 }
                ?>
                
            </div>
        </div>
    </section>

    <!--====== Event 3 PART ENDS ======-->


    <div class="modal fade gallerypopup" id="video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            
            <div class="modal-content modal-content p-3">
                <div class="cross"> <img data-dismiss="modal" src="<?php echo base_url();?>common/images/cross.png" alt=""> </div>
                <h3>Lorem Ipsum Doler Sit...</h3>
                <p class="small">Recieve push notifications to be updated to latest news.</p>
                <div class="text-center mb-3"> 
                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/9-y4vd0UYlM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div> 
            </div>
        </div>
    </div>



    <section class="features_area_2 pt-100 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_features_2 mt-30">
                        <img src="<?php echo base_url();?>common/images/f-icon-4.png" alt="icon">
                        <h5 class="title"><a href="#">Affordable Cost</a></h5>
                        <p>What do you think is better to receive after each lesson: a lovely looking .</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_features_2 mt-30">
                        <img src="<?php echo base_url();?>common/images/f-icon-5.png" alt="icon">
                        <h5 class="title"><a href="#">locations Throught</a></h5>
                        <p>What do you think is better to receive after each lesson: a lovely looking .</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_features_2 mt-30">
                        <img src="<?php echo base_url();?>common/images/f-icon-6.png" alt="icon">
                        <h5 class="title"><a href="#">Global Network</a></h5>
                        <p>What do you think is better to receive after each lesson: a lovely looking .</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_features_2 mt-30">
                        <img src="<?php echo base_url();?>common/images/f-icon-7.png" alt="icon">
                        <h5 class="title"><a href="#">Certification</a></h5>
                        <p>What do you think is better to receive after each lesson: a lovely looking .</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

   <!--====== Footer PART START ======-->

   <?php $this->load->view('footer_main'); ?>

    <!--====== Footer PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <?php $this->load->view('bottom_js'); ?>


</body>


</html>
