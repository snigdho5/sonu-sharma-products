    <!--====== jquery js ======-->
    <script src="<?php echo base_url();?>common/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="<?php echo base_url();?>common/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="<?php echo base_url();?>common/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>common/js/popper.min.js"></script>

    <!--====== Slick js ======-->
    <script src="<?php echo base_url();?>common/js/slick.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="<?php echo base_url();?>common/js/jquery.magnific-popup.min.js"></script>

    <!--====== Counter Up js ======-->
    <script src="<?php echo base_url();?>common/js/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>common/js/jquery.counterup.min.js"></script>

    <!--====== Nice Select js ======-->
    <script src="<?php echo base_url();?>common/js/jquery.nice-select.min.js"></script>
    
    <!--====== Count Down js ======-->
    <script src="<?php echo base_url();?>common/js/jquery.countdown.min.js"></script>
    
    <!--====== Appear js ======-->
    <script src="<?php echo base_url();?>common/js/jquery.appear.min.js"></script>

    <!--====== Main js ======-->
    <script src="<?php echo base_url();?>common/js/main.js"></script>

    <script>
         $("#submit-subs").click(function(){

            var name = $('#s_name').val();
            var phone = $('#s_phone').val();
            var email = $('#s_email').val();
            //var c_captcha = $('#c_captcha').val();

                //if(c_captcha!=''){
                    $.ajax({

                    type:'POST',

                    url:'<?php echo base_url();?>newsignup',

                    data:{name:name,phone:phone,email:email},

                    success:function(d){

                        if(d.added=='rule_error'){

                            $('#chk_msg').show();
                            $('#chk_msg').html('<b style=""><i class="fa fa-warning" style="color:red"></i> Error: '+d.errors+'</b>');

                        }
                        else if(d.added=='failure'){

                            $('#chk_msg').show();
                            $('#chk_msg').html('<b style=""><i class="fa fa-warning" style="color:red"></i> Error: Something Went Wrong!</b>');

                        }else if(d.added=='success'){

                            $('#chk_msg').show();
                            $('#chk_msg').html('<b style=""><i class="fa fa-paper-plane" style="color:green"></i> Success: Thank you!</b>');
                            //window.location.reload();

                        }else{
                            alert('Something went wrong!');
                        }
                    }

                    });
                // }else{
                //     $('#chk_msg').show();
                //     $('#chk_msg').html('<b style=""><i class="fa fa-warning" style="color:red"></i> Error: Captcha not verified!</b>');
                // }

                


            });

    </script>