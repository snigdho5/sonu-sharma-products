<!doctype html>

<html lang="en">

<head>



    <!--====== Required meta tags ======-->

    <meta charset="utf-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!--====== Title ======-->

    <title><?php echo comp_name; ?> | About</title>



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

                        <h4 class="title">About Us</h4>

                        <ul class="breadcrumb justify-content-center">

                            <li><a href="#">Home</a></li>

                            <li><a class="active">About</a></li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!--====== Page Banner PART ENDS ======-->



    



    <!--====== ABOUT PART START ======-->



    <section class="about_area_4 about_area pt-40 mb-80">



        <img class="shap_1" src="<?php echo base_url();?>common/images/shape/shape-1.png" alt="shape">

        <img class="shap_2" src="<?php echo base_url();?>common/images/shape/shape-2.png" alt="shape">

        <img class="shap_3" src="<?php echo base_url();?>common/images/shape/shape-3.png" alt="shape">

        <img class="shap_4" src="<?php echo base_url();?>common/images/shape/shape-4.png" alt="shape">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6 col-md-8 col-sm-10">

                    <div class="about_image_4 mt-50">

                        <img src="<?php echo base_url();?>common/images/about-6.jpg" alt="about">

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="about_content_4">

                        <div class="section_title mt-40">

                            <h3 class="main_title">Make your  poor language skill high</h3>

                            <p>Bhavishya India is an online tuition platform where we are providing live classes to students from their home.</p>



                            <p>In this era our main aim is to provide quality and safe education to all students. We have best teachers from all fields and our vision is to create a knowledge network student and teacher can get connected with a click of button.</p>



                            <p>We are looking for equally passionate individuals to join us in making this vision a reality.</p>

                        </div>

                        

                    </div>

                </div>

            </div>

        </div>

</section>



    <!--====== ABOUT PART ENDS ======-->



    



    <!--====== Footer PART START ======-->



    <?php $this->load->view('footer_main'); ?>



    <!--====== Footer PART ENDS ======-->

    

    <!--====== BACK TOP TOP PART START ======-->



    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>



    <!--====== BACK TOP TOP PART ENDS ======-->



    

    <?php $this->load->view('bottom_js'); ?>



    <script>

         $("#submit-contact").click(function(){



            var name = $('#c_name').val();

            var phone = $('#c_phone').val();

            var email = $('#c_email').val();

            var subject = $('#c_subject').val();

            var message = $('#c_message').val();

            //var c_captcha = $('#c_captcha').val();



                //if(c_captcha!=''){

                    $.ajax({



                    type:'POST',



                    url:'<?php echo base_url();?>newcontact',



                    data:{name:name,phone:phone,email:email,subject:subject,message:message},



                    success:function(d){



                        if(d.added=='rule_error'){



                            $('#chk_msg_c').show();

                            $('#chk_msg_c').html('<b style=""><i class="fa fa-warning" style="color:red"></i> Error: '+d.errors+'</b>');



                        }

                        else if(d.added=='failure'){



                            $('#chk_msg_c').show();

                            $('#chk_msg_c').html('<b style=""><i class="fa fa-warning" style="color:red"></i> Error: Something Went Wrong!</b>');



                        }else if(d.added=='success'){



                            $('#chk_msg_c').show();

                            $('#chk_msg_c').html('<b style=""><i class="fa fa-paper-plane" style="color:green"></i> Success: Thank you!</b>');

                            //window.location.reload();



                        }else{

                            alert('Something went wrong!');

                        }

                    }



                    });

                // }else{

                //     $('#chk_msg_c').show();

                //     $('#chk_msg_c').html('<b style=""><i class="fa fa-warning" style="color:red"></i> Error: Captcha not verified!</b>');

                // }





            });



    </script>



</body>

</html>

