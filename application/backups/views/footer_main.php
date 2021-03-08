

    <footer class="footer_area bg_cover" style="background-image: url(<?php echo base_url();?>common/images/footer_bg.jpg)">

        <div class="footer_widget pt-80 pb-130">

            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-sm-6">

                        <div class="footer_about mt-50">

                            <a href="#"><img src="<?php echo base_url();?>common/images/logo.png" alt="logo"></a>

                            

                            <p>Start learning from today
Get your free demo video<br> 
Watch demo button (go to demo video section)<br> <br> 
Buy the subscription on reasonable rate.<br> 
Enjoy your live classes.
</p>

                            

                            <ul class="footer_social">

                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>

                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>

                            </ul>

                        </div>

                    </div>

                    <div class="col-lg-9">

                        <div class="footer_widget_wrapper d-flex flex-wrap">

                            <div class="footer_link mt-50">

                                <h5 class="footer_title">Quick Links</h5>



                                <div class="footer_link_wrapper d-flex">

                                    <ul class="link">

                                        <li><a href="<?php echo base_url();?>">Home</a></li>

                                        <li><a href="<?php echo base_url();?>about">About us</a></li>

                                        <li><a href="<?php echo base_url();?>">Courses</a></li>

                                        <li><a href="<?php echo base_url();?>">1 On 1 Classes</a></li>

                                        <li><a href="<?php echo base_url();?>">Find Your Teacher</a></li>

                                    </ul>

                                    <ul class="link">

                                        <li><a href="<?php echo base_url();?>">Gallery</a></li>

                                        <li><a href="<?php echo base_url();?>">Study Metirial</a></li>

                                        <li><a href="<?php echo base_url();?>">Privacy Policy</a></li>

                                        <li><a href="<?php echo base_url();?>">Terms & Condations</a></li>

                                        <li><a href="<?php echo base_url();?>contact">Contact Us</a></li>

                                    </ul>

                                </div>

                            </div>



                            <div class="footer_contact mt-50">

                                <h5 class="footer_title">Contact</h5>

                                

                                <ul class="contact">

                                    <li>Location : Dhampur, UP, India</li>

                                    <li>Email : bhavishyaindia1005@gmail.com</li>

                                    <li>Phone : +(91)76181 11888</li>

                                    

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        

        <div class="footer_copyright">

            <div class="container">

                <div class="footer_copyright_wrapper text-center d-md-flex justify-content-between">

                    <div class="copyright">

                        <p>Designed & Developed By Orion Softech & Contentgrill Pvt. Ltd.</p>

                    </div>

                    <div class="copyright">

                        <p>&copy; Copyright <?php echo (date('Y')>2020)?('2020 - '.date('Y')):'2020'; ?> Bhavishya India All rights reserved. </p>

                    </div>

                </div>

            </div>

        </div>

    </footer>



    <div class="modal fade gallerypopup subscriptionpopup" id="onlineclass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">

            

            <div class="modal-content modal-content p-3">

                <div class="cross"> <img data-dismiss="modal" src="<?php echo base_url();?>common/images/cross.png" alt=""> </div>

                <h3 class="pl-25 pr-25">Sign Up Now</h3>

                <p class="small pl-25 pr-25">Recieve push notifications to be updated to latest news.</p>

                <p class="small pl-25 pr-25" id="chk_msg" style="display: none;"></p>

                <div class="blog_comment_form pl-25 pr-25">

                        <form class="subscriptionform"  action="#">

                                <div class="single_form mt-15">

                                        <input type="text" placeholder="Name" id="s_name">

                                 </div> <!-- single form -->

                                <div class="single_form mt-15">

                                        <input type="email" placeholder="Email" id="s_email">

                                </div> <!-- single form -->



                                <div class="single_form mt-15">

                                        <input type="number" placeholder="Contact No." id="s_phone">

                                </div> <!-- single form -->

                                    <!-- <div class="single_form mt-15">

                                        <textarea placeholder="Comment"></textarea>

                                    </div> single form -->

                                <div class="single_form mt-15">

                                        <button type="button" class="main-btn text-white" id="submit-subs">Submit</button>

                                </div> <!-- single form -->

                        </form>

                </div>

            </div>

        </div>

    </div>