<!doctype html>
<html lang="en">
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title><?php echo comp_name; ?> | Find Your Teacher</title>

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

    <!--====== Page Banner PART START ======-->

    <section class="page_banner bg_cover" style="background-image: url(<?php echo base_url();?>common/images/about_bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4 class="title">Find Your Teacher</h4>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="#">Home</a></li>
                            <li><a class="active" href="#">Find Your Teacher</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner PART ENDS ======-->





  <!--====== Courses Form PART START ======-->

    <section class="courses_form_area gallery">
        <div class="container">
            <div class="courses_form_wrapper">
                <div class="row no-gutters">
                    <div class="col-lg-12">
                        <div class="courses_form text-center">
                            <div class="form_wrapper" style="display: block;">
                                <h4 class="form_title">Find your <br> preferable Teacher</h4>

                                <form id="find_teacher_form" action="<?php echo base_url();?>searchteacher" method="post">
                                <div class="row">
                                    
                                     <div class="col-lg-4">
                                        <div class="single_form">
                                            <select name="board_id">
                                            <option>Board</option>
                                                <?php
												if(!empty($board_data)){
													//print_obj($board_data);die;
													foreach($board_data as $key => $val){
												?>
													<option value="<?php echo $val['board_id']; ?>" <?php echo (!empty($course_data) && $course_data['board_id']==$val['board_id'])?'selected':''; ?>><?php echo $val['board_name']; ?></option>
												<?php
													}
												}
                                                ?>
                                            </select>
                                        </div>
                                     </div>


                                    <div class="col-lg-4">
                                        <div class="single_form">
                                    <select name="subject_id">
                                        <option>Subject</option>
                                        <?php
												if(!empty($subj_data)){
													//print_obj($subj_data);die;
													foreach($subj_data as $key => $val){
												?>
													<option value="<?php echo $val['subject_id']; ?>" <?php echo (!empty($course_data) && $course_data['subject_id']==$val['subject_id'])?'selected':''; ?>><?php echo $val['subject_name']; ?></option>
												<?php
													}
												}
                                                ?>
                                    </select>
                                        </div>

                                    </div>

                                    <div class="col-lg-4">
                                        <div class="single_form">
                                    <select name="class_id">
                                        <option>Class</option>
                                                 <?php
												if(!empty($class_data)){
													//print_obj($class_data);die;
													foreach($class_data as $key => $val){
												?>
													<option value="<?php echo $val['class_id']; ?>" <?php echo (!empty($course_data) && $course_data['class_id']==$val['class_id'])?'selected':''; ?>><?php echo $val['class_name']; ?></option>
												<?php
													}
												}
												?>
                                    </select>
                                        </div>

                                    </div>
                                     
                                     <div class="col-lg-4 single_form "></div>
                                       <div class="col-lg-4 single_form ">
                                           <button type="submit" class="main-btn" name="submit">Search Teacher</button>
                                        </div>
                                       <div class="col-lg-4 single_form "></div>

                                 
                                </div>
                            </form>
                                
                               
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Courses Form PART ENDS ======-->


    <?php if(!empty($teach_data)){?>
    <!--====== Blog PART START ======-->
    <section class="blog_area pt-10 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-20">
                        <p>Search Result:</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                    foreach ($teach_data as $key => $value) {
                ?>
                <div class="col-lg-4 col-md-7">
                <div class="single_blog mt-30">
                        <div class="blog_image">
                            <img src="<?php echo $value['file_path']; ?>" alt="blog">
                        </div>
                        <div class="blog_content">
                            <span class="date"><span><img src="<?php echo base_url();?>common/images/p-icon-3.png" alt=""></span></span>
                            
                            <div class="blog_content_wrapper">
                                <h4 class="blog_title"><a class="mt-0" href="<?php echo base_url().'teacherprofile/'.$value['teacher_id'];?>"><?php echo $value['teacher_name']; ?></a></h4>
                                <ul class="tag">
                                <li><a href="#"><?php echo $value['subject_name']; ?></a></li>
                                <li><a data-toggle="modal" data-target="#onlineclass" href="#">Online Class</a></li>
                               
                            </ul>


                                <small><?php echo $value['teacher_bio']; ?></small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
        <!--====== Blog PART ENDS ======-->
    <?php }else{ ?>
    <section class="blog_area pt-10 pb-130">
    </section>
    <?php } ?>


    

     <div class="modal fade gallerypopup subscriptionpopup" id="onlineclass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
         
        <div class="modal-content modal-content p-3">
            <div class="cross"> <img data-dismiss="modal" src="<?php echo base_url();?>common/images/cross.png" alt=""> </div>
            <h3 class="pl-25 pr-25">Subscribe To Our Site</h3>
            <p class="small pl-25 pr-25">Recieve push notifications to be updated to latest news.</p>
            <div class="blog_comment_form pl-25 pr-25">
                            <form class="subscriptionform" action="#">
                                <div class="single_form mt-15">
                                    <input type="text" placeholder="Name">
                                </div> <!-- single form -->
                                <div class="single_form mt-15">
                                    <input type="email" placeholder="Email">
                                </div> <!-- single form -->

                                 <div class="single_form mt-15">
                                    <input type="email" placeholder="Contact No.">
                                </div> <!-- single form -->
                                <!-- <div class="single_form mt-15">
                                    <textarea placeholder="Comment"></textarea>
                                </div> single form -->
                                <div class="single_form mt-15">
                                    <button class="main-btn">Submit</button>
                                </div> <!-- single form -->
                            </form>
                        </div>
        </div>
    </div>
</div>

   
    
   

    <!--====== Footer PART START ======-->

    <?php $this->load->view('footer_main'); ?>

    <!--====== Footer PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    

    <?php $this->load->view('bottom_js'); ?>

    <script>
        // $("form[id='find_teacher_form']").submit(function(e) {

        // var formData = new FormData($(this)[0]);

        // $.ajax({
        //     url: "<?php echo base_url();?>searchteacher",
        //     type: "POST",
        //     data: formData,
        //     success: function (d) {
        //         if(d.teacher_added=='success'){

        //             alert('Teacher added!');
        //             window.location.reload();

        //         }else{
        //             alert('Something went wrong!');
        //         }
        //     },
        //     cache: false,
        //     contentType: false,
        //     processData: false
        // });

        // e.preventDefault();
        // });
        </script>

</body>
</html>
