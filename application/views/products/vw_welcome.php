<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?php echo (!empty($agent_data)) ? ($agent_data['first_name'] . ' ' . $agent_data['last_name'] . ' | ') : ''; ?>Vestige Product Catalogue With Dealer Price</title>
    <?php $this->load->view('products/top_css'); ?>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" target="_blank" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>common/products/assets/img/tss-logo.png" alt="" /></a>
            <!--<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>-->
            <div class="navbar-collapse collapse show" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger"><?php echo (!empty($agent_data)) ? ($agent_data['first_name'] . ' ' . $agent_data['last_name'] . ' (' . $agent_data['designation'] . ')') : 'Team Sonu Sharma'; ?></a></li>

                    <!--<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Purifier</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>-->
                </ul>
            </div>
            <a class="navbar-brand js-scroll-trigger" target="_blank" href="https://www.myvestige.com/"><img src="<?php echo base_url(); ?>common/products/assets/img/vestige-logo.png" alt="" /></a>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <?php
            if (!empty($agent_data)) {
            ?>
                <img class="img-width" src="<?php echo $agent_data['file_path']; ?>" alt="" width="20px;" />
                <div class="masthead-subheading">Welcome To my Online Shop</div>
                <div class="masthead-subheading">Free Delivery anywhare in India </div>
                <div class="masthead-subheading">
                    @ Rs 1200<sup class="new_text"></sup> and above<sub style="font-size: 8px;">TC</sub></div>
                <div class="masthead-subheading">Whatsapp Only <?php echo $agent_data['phone_no']; ?></div>
                <div class="masthead-subheading">Referral Code : <?php echo $agent_data['referral_code']; ?></div>
                <div class="masthead-subheading">DISTRIBUTER ID (<?php echo $agent_data['distributor_id']; ?>)</div>
                <!--<div class="masthead-subheading">Welcome To my Online Shop</div>-->

            <?php
            } else {
            ?>
                <div class="masthead-subheading">Welcome To our Online Shop</div>
                <div class="masthead-subheading">Free Delivery anywhare in India </div>
                <div class="masthead-subheading">
                    @ Rs 1200<sup class="new_text"></sup> and above<sub style="font-size: 8px;">TC</sub></div>
            <?php
            }
            ?>
        </div>

    </header>
    <!-- Services-->
    <style>
        * {
            box-sizing: border-box;
        }

        #myInput {
            background-image: url('<?php echo base_url(); ?>common/products/css/searchicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myTable {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 18px;
        }

        #myTable th,
        #myTable td {
            text-align: left;
            padding: 12px;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header,
        #myTable tr:hover {
            background-color: #f1f1f1;
        }
    </style>


    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <table id="myTable">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Product Catalogue</h2>
                    <!--<h3 class="section-subheading text-muted">Price Updated Till November 2020</h3>-->

                    <ul class="nav nav-tabs">
                        <?php
                        if (!empty($cat_data)) {
                            foreach ($cat_data as $key => $value) {
                        ?>
                                <li class="nav-item">
                                    <a class="nav-link productbycat <?php echo ($value['category_id'] == '1') ? 'active' : ''; ?>" id="productbycat_<?php echo $value['category_id']; ?>" data-catid="<?php echo $value['category_id']; ?>" href="javascript:void(0)"><?php echo $value['category_name']; ?></a>
                                </li>
                        <?php
                            }
                        }
                        ?>
                        <!-- <li class="nav-item">
                            <a class="nav-link active" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li> -->
                    </ul>

                    <input type="text" id="myInput" class="productsearch" placeholder="Search for names.." title="Type in a name">

                </div>


                <div class="row probycat">
                    <?php
                    if (!empty($pro_data)) {
                        foreach ($pro_data as $key => $value) {
                    ?>

                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="portfolio-item text-center" style="background: #fff;">
                                    <!--<a class="portfolio-link" target="_blank" href="<?php echo $value['image_url']; ?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>-->
                                    <img class="img-fluid" src="<?php echo $value['file_path']; ?>" alt="" />
                                    <!--</a>-->

                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading"><?php echo $value['name']; ?></div>
                                        <div class="portfolio-caption-subheading text-muted">DP - Rs <?php echo $value['price']; ?> <?php echo ($value['point_value'] != '') ? '. PV- ' . $value['point_value'] : ''; ?></div>
                                        <iframe width="100%" height="200" src="<?php echo $value['youtube_url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>

                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>

                </div>
            </table>
        </div>
    </section>

    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <?php
                if (!empty($agent_data)) {
                ?>
                    <h3 class="section-subheading text-white">Whatsapp Only - <?php echo $agent_data['phone_no']; ?></h3>
                    <!--<h3 class="section-subheading text-white">DEMO Distributer ID - <?php echo $agent_data['distributor_id']; ?> | DEMO Password - <?php echo $agent_data['demo_pass']; ?></h3>--?
                    <?php
                } else {
                    ?>
                        <h3 class="section-subheading text-white">Whatsapp Only - 9804313325/8777620095</h3>
                        <h3 class="section-subheading text-white">DEMO Distributer ID - 87588509 | DEMO Password - Mydemo@143</h3>
                    <?php
                }
                    ?>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
                    <!-- <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left"></div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <h4 href="#!">Whatsapp Only - 9804313325/8777620095</h4>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        
                    </div>
                </div>
            </div>
        </footer>-->
                    <!-- Portfolio Modals-->


                    <?php $this->load->view('products/bottom_js'); ?>

                    <script>
                        $(document).ready(function() {

                            $(document).on('click', '.productbycat', function() {

                                var catid = $(this).attr('data-catid');
                                $('.probycat').html('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>');

                                $.ajax({

                                    type: 'POST',

                                    url: '<?php echo base_url(); ?>getproductbycat',

                                    data: {
                                        catid: catid
                                    },

                                    success: function(d) {
                                        // console.log(d.pro_data);
                                        var html = '';
                                        if (d.pro_data != '') {
                                            $.each(d.pro_data, function(key, value) {
                                                html += '<div class="col-lg-4 col-sm-6 mb-4">';
                                                html += '<div class="portfolio-item text-center" style="background: #fff;">';


                                                html += '<img class="img-fluid" src="' + value['file_path'] + '" alt="" />';


                                                html += '<div class="portfolio-caption">';
                                                html += '<div class="portfolio-caption-heading">' + value['name'] + '</div>';
                                                if (value['point_value'] != '' && value['point_value'] != null) {
                                                    html += ' <div class="portfolio-caption-subheading text-muted">DP - Rs ' + value['price'] + '. PV- ' + value['point_value'] + '</div>';
                                                } else {
                                                    html += ' <div class="portfolio-caption-subheading text-muted">DP - Rs ' + value['price'] + '</div>';
                                                }
                                                html += '<iframe width="100%" height="200" src="' + value['youtube_url'] + '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                                                html += '</div>';

                                                html += ' </div>';
                                                html += '</div>';
                                            });
                                        } else {
                                            html += '<div class="col-lg-4 col-sm-6 mb-4">';
                                            html += '<div class="portfolio-item">';

                                            html += '<div class="portfolio-caption">';
                                            html += '<div class="portfolio-caption-heading">No products found!</div>';
                                            html += ' <div class="portfolio-caption-subheading text-muted">Try other categories</div>';
                                            html += '</div>';

                                            html += ' </div>';
                                            html += '</div>';
                                        }


                                        //console.log(html);
                                        //$('.probycat').html('');
                                        $('.probycat').html(html);

                                        $('.productbycat').attr({
                                            class: "nav-link productbycat"
                                        });

                                        $('#productbycat_' + catid).attr({
                                            class: "nav-link productbycat active"
                                        });

                                    }

                                });

                            });

                            $(document).on('keyup', '.productsearch', function() {

                                var search = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

                                var html = '';

                                $('.probycat').html('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>');

                                if (search != '') {
                                    $.ajax({

                                        type: 'POST',

                                        url: '<?php echo base_url(); ?>productsearch',

                                        data: {
                                            search: search
                                        },

                                        success: function(d) {
                                            // console.log(d.pro_data);
                                            if (d.pro_data != '') {
                                                $.each(d.pro_data, function(key, value) {
                                                    html += '<div class="col-lg-4 col-sm-6 mb-4">';
                                                    html += '<div class="portfolio-item text-center" style="background: #fff;">';


                                                    html += '<img class="img-fluid" src="' + value['file_path'] + '" alt="" />';


                                                    html += '<div class="portfolio-caption">';
                                                    html += '<div class="portfolio-caption-heading">' + value['name'] + '</div>';
                                                    if (value['point_value'] != '' && value['point_value'] != null) {
                                                        html += ' <div class="portfolio-caption-subheading text-muted">DP - Rs ' + value['price'] + '. PV- ' + value['point_value'] + '</div>';
                                                    } else {
                                                        html += ' <div class="portfolio-caption-subheading text-muted">DP - Rs ' + value['price'] + '</div>';
                                                    }
                                                    html += '<iframe width="100%" height="200" src="' + value['youtube_url'] + '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                                                    html += '</div>';

                                                    html += ' </div>';
                                                    html += '</div>';
                                                });
                                            } else {
                                                html += '<div class="col-lg-4 col-sm-6 mb-4">';
                                                html += '<div class="portfolio-item">';

                                                html += '<div class="portfolio-caption">';
                                                html += '<div class="portfolio-caption-heading">No products found!</div>';
                                                html += ' <div class="portfolio-caption-subheading text-muted">Try other products</div>';
                                                html += '</div>';

                                                html += ' </div>';
                                                html += '</div>';
                                            }


                                            //console.log(html);
                                            //$('.probycat').html('');
                                            $('.probycat').html(html);

                                            $('.productbycat').attr({
                                                class: "nav-link productbycat"
                                            });

                                            // $('#productbycat_' + catid).attr({
                                            //     class: "nav-link productbycat active"
                                            // });

                                        }

                                    });
                                } else {
                                    html += '<div class="col-lg-4 col-sm-6 mb-4">';
                                    html += '<div class="portfolio-item">';

                                    html += '<div class="portfolio-caption">';
                                    html += '<div class="portfolio-caption-heading">No products found!</div>';
                                    html += ' <div class="portfolio-caption-subheading text-muted">Please type something</div>';
                                    html += '</div>';

                                    html += ' </div>';
                                    html += '</div>';
                                    $('.probycat').html(html);
                                    $('.productbycat').attr({
                                        class: "nav-link productbycat"
                                    });
                                }



                            });

                        });
                    </script>

</body>

</html>