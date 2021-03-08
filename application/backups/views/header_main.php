<section class="header_area">
        <div class="header_top">
            <div class="container">
                <div class="header_top_wrapper d-flex justify-content-center justify-content-md-between">
                    <div class="header_top_info d-none d-md-block">
                        <ul>
                            <li><img src="<?php echo base_url();?>common/images/call.png" alt="call"><a href="tel:+917618111888">+(91)76181 11888</a></li>
                            <li><img src="<?php echo base_url();?>common/images/mail.png" alt="mail"><a href="mailto:bhavishyaindia1005@gmail.com">bhavishyaindia1005@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="header_top_login">
                        <ul>
                            <li><a data-toggle="modal" data-target="#onlineclass"  href="#">Sign Up</a></li>
                            <!--====== 
                            <li><a class="main-btn" href="#"><i class="fa fa-user-o"></i> Log In</a></li>======-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    <?php $pg = explode("/",current_url()); $page_name = $pg[3]; ?>

        <div class="header_menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="<?php echo base_url();?>">
                        <img src="<?php echo base_url();?>common/images/logo.png" alt="logo">
                    </a>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li><a class="<?php echo ($page_name=='')?'active':''; ?>" href="<?php echo base_url();?>">Home</a></li>
                           
                            <li>
                                <a href="#">Courses <i class="fa fa-chevron-down"></i></a>
                                
                                <ul class="sub-menu">
                                    <li><a href="<?php echo base_url();?>">CBSE</a></li>
                                    <li><a href="<?php echo base_url();?>">ICSE</a></li>
                                    <li><a href="<?php echo base_url();?>">UP</a></li>
                                    <li><a href="<?php echo base_url();?>">MUSIC</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="class.html">1 – on – 1 class <i class="fa fa-chevron-down"></i></a>
                                
                                <ul class="sub-menu">
                                    <li><a href="<?php echo base_url();?>">CBSE</a></li>
                                    <li><a href="<?php echo base_url();?>">ICSE</a></li>
                                    <li><a href="<?php echo base_url();?>">UP</a></li>
                                    <li><a href="<?php echo base_url();?>">MUSIC</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url();?>findteacher">Find Your Teacher</a></li>
                            <li><a href="<?php echo base_url();?>">Gallery</a></li>
                             <li>
                                <a href="#">Free Study Material <i class="fa fa-chevron-down"></i></a>
                                
                                <ul class="sub-menu">
                                    <li><a href="<?php echo base_url();?>">NCERT Solution</a></li>
                                    <li><a href="<?php echo base_url();?>"> 10 Years Question</a></li>
                                    <li><a href="<?php echo base_url();?>">Syllabus</a></li>
                                    <li><a href="<?php echo base_url();?>">Sample Paper</a></li>
                                </ul>
                            </li>
                           
                             <li>
                                <a class="<?php echo ($page_name=='about')?'active':''; ?>" href="<?php echo base_url();?>about">About</a>
                            </li>
                            <li>
                                <a class="<?php echo ($page_name=='contact')?'active':''; ?>" href="<?php echo base_url();?>contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                    
              
                </nav>
            </div>
        </div>
    </section>