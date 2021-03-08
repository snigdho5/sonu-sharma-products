<!doctype html>

<html lang="en">

<head>



    <!--====== Required meta tags ======-->

    <meta charset="utf-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!--====== Title ======-->

    <title><?php echo comp_name; ?> | Contact</title>



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

                        <h4 class="title">Contact Us</h4>

                        <ul class="breadcrumb justify-content-center">

                            <li><a href="#">Home</a></li>

                            <li><a class="active">Contact</a></li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!--====== Page Banner PART ENDS ======-->



    



    <!--====== CONTACT PART START ======-->



    <section class="contact_area pt-80 pb-130">

        <div class="services_shape_1" style="background-image: url(<?php echo base_url();?>common/images/shape/shape-12.html)"></div>

        <div class="container">

            <div class="row">

                <div class="col-lg-8">

                    <div class="contact_form mt-40">                        

                        

                        <div class="row">

                            <div class="col-lg-10">

                                <div class="section_title pb-30">

                                    <h3 class="main_title">Get in touch</h3>

                                    <p>We’re here to help you and answer any question you might have. We look forward to hear from you.</p>

                                    <p id="chk_msg_c" style="display: none;"></p>

                                </div>

                            </div>

                        </div>

                        

                        <form action="http://raistheme.com/html/edustdy/edustdy/contact.php" method="POST">

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="single_form">

                                        <input type="text" placeholder="Name" id="c_name">

                                    </div> <!-- single form -->

                                </div>

                                <div class="col-md-6">

                                    <div class="single_form">

                                        <input type="email" placeholder="Email" id="c_email">

                                    </div> <!-- single form -->

                                </div>

                                <div class="col-md-6">

                                    <div class="single_form">

                                        <input type="text" placeholder="Subject" id="c_subject">

                                    </div> <!-- single form -->

                                </div>

                                <div class="col-md-6">

                                    <div class="single_form">

                                        <input type="number" placeholder="Number" id="c_phone">

                                    </div> <!-- single form -->

                                </div>

                                <div class="col-md-12">

                                    <div class="single_form">

                                        <textarea placeholder="Massage" id="c_message"></textarea>

                                    </div> <!-- single form -->

                                </div>

                                <div class="col-md-12">

                                    <div class="single_form">

                                        <button type="button" class="main-btn" id="submit-contact">Send Massage</button>

                                    </div> <!-- single form -->

                                </div>

                            </div> <!-- row -->

                        </form>

                    </div> <!-- contact form -->

                </div>

                <div class="col-lg-4">

                    <div class="contact_info pt-20">

                        <ul>

                            <li>

                                <div class="single_info d-flex align-items-center mt-30">

                                    <div class="info_icon">

                                        <i class="fa fa-home"></i>

                                    </div>

                                    <div class="info_content media-body">

                                        <p>Abhitak news channel near post office, Dhampur district bijnor, UP India 246761</p>

                                    </div>

                                </div> <!-- single info -->

                            </li>

                            <li>

                                <div class="single_info d-flex align-items-center mt-30">

                                    <div class="info_icon">

                                        <i class="fa fa-phone"></i>

                                    </div>

                                    <div class="info_content media-body">

                                        <p>+91 7618111888</p>

                                        <p>+91 8171878311</p>

                                    </div>

                                </div> <!-- single info -->

                            </li>

                            <li>

                                <div class="single_info d-flex align-items-center mt-30">

                                    <div class="info_icon">

                                        <i class="fa fa-envelope"></i>

                                    </div>

                                    <div class="info_content media-body">

                                        <p>Bhavishyaindia1005@gmail.com</p>

                                        <p>harshit@bhavishyaindia.com</p>

                                    </div>

                                </div> <!-- single info -->

                            </li>

                        </ul>

                    </div> <!-- contact info -->

                    <div class="contact_map mt-50">

                        <div class="gmap_canvas">                            

                            

                            <iframe  id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3479.074414172449!2d78.50553101442428!3d29.309492759871215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390bc83bac6bc319%3A0x26c833e9f6754032!2sAbhitak%20News%20Channel!5e0!3m2!1sen!2sus!4v1595080916539!5m2!1sen!2sus" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                        </div>

                    </div> <!-- contact map -->

                </div>

            </div> <!-- row -->

        </div> <!-- container -->

    </section>



    <!--====== CONTACT PART ENDS ======-->



    



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

