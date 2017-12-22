<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

    <!-- Mirrored from inthe7heaven.com/flatastic-html/ by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 17 Jun 2014 17:30:41 GMT -->
    <head>
        <title><?php echo $title;?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!--meta info-->
        <meta name="author" content="">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <link rel="icon" type="image/ico" href="<?php echo base_url();?>assets/images/fav.ico">
        <!--stylesheet include-->
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/css/colorpicker.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/css/jquery.fancybox-1.3.4.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/css/camera.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/css/owl.transitions.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/css/jquery.custom-scrollbar.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/css/style.css">
        <!--font include-->
        <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/my_style.css" rel="stylesheet">
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
        
        <script type="text/javascript">
        jQuery(document).ready(function()
        {
            jQuery('#search-area button').click(function()
            {
                var return_bool=false;
                
                if(jQuery(this).hasClass('active') && jQuery('#search-area input').val().length !==0)
                {
                    return_bool=true;
                }
                else if(jQuery(this).hasClass('active') && jQuery('#search-area input').val().length ===0)
                {
                    jQuery('#search-area input').animate(
                            {
                                width:'35px'
                            },350,'easeOutExpo');
                            
                            jQuery('#search-area button').removeClass('active');
                            
                            return_bool=false;
                }
               else
                {
                    jQuery(this).addClass('active');
                    jQuery('#search-area input').animate(
                            {
                                width:'400px'
                            },350,'easeOutExpo');
                            
                            return_bool=false;
                            
                }
                return return_bool;
            });
        });
        
        
        
        </script>
        
        <script src="<?php echo base_url();?>assets/js/country.js"></script>
        
    </head>
    <body>

        <!--boxed layout-->
        <div class="boxed_layout relative w_xs_auto">
            <!--[if (lt IE 9) | IE 9]>
                    <div style="background:#fff;padding:8px 0 10px;">
                    <div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix" style="padding:9px 0 0;float:left;width:83%;"><i class="fa fa-exclamation-triangle scheme_color f_left m_right_10" style="font-size:25px;color:#e74c3c;"></i><b style="color:#e74c3c;">Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:16%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_4 r_corners bg_scheme_color color_light d_inline_b t_align_c" target="_blank" style="margin-bottom:2px;">Update Now!</a></div></div></div></div>
            <![endif]-->
            <!--markup header-->
            <?php
            $this->load->view('pages/header');
            ?>
            <!--slider-->
            
            <?php
            if(isset($slider)){
            $this->load->view('pages/slider');
            }
            ?>
            <!--content-->
             <?php echo $mainContent;?>
            <!--markup footer-->
           <?php
            $this->load->view('pages/footer');
            ?>
        </div>
        <!--social widgets-->
        <ul class="social_widgets d_xs_none">
            <!--facebook-->
            <li class="relative">
                <button class="sw_button t_align_c facebook"><i class="fa fa-facebook"></i></button>
                <div class="sw_content">
                    <h3 class="color_dark m_bottom_20"><b>Join Us on Facebook</b></h3>
                    <!--<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;width=235&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=438889712801266" style="border:none; overflow:hidden; width:235px; height:258px;"></iframe>-->
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fitxpertsbd%2F&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                </div>
            </li>
            <!--contact form-->
            <li class="relative">
                <button class="sw_button t_align_c contact"><i class="fa fa-envelope-o"></i></button>
                <div class="sw_content">
                    <h3 class="color_dark m_bottom_20">Contact Us</h3>
                    <p class="f_size_medium m_bottom_15">Always Stay Connected With Our Largest Community</p>
                    <form class="mini" action="<?php echo base_url();?>save-customer-message" method="post">
                        <input class="f_size_medium m_bottom_10 r_corners full_width" type="text" name="c_name" placeholder="Your name" required="">
                        <input class="f_size_medium m_bottom_10 r_corners full_width" type="email" name="c_email" placeholder="Email" required="">
                        <textarea class="f_size_medium r_corners full_width m_bottom_20" placeholder="Message" name="c_message" required=""></textarea>
                        <button type="submit" class="button_type_4 r_corners mw_0 tr_all_hover color_dark bg_light_color_2">Send</button>
                    </form>
                </div>	
            </li>
            <!--contact info-->
            <li class="relative">
                <button class="sw_button t_align_c googlemap"><i class="fa fa-map-marker"></i></button>
                <div class="sw_content">
                    <h3 class="color_dark m_bottom_20">E-Shopper Location</h3>
                    <ul class="c_info_list">
                        <li class="m_bottom_10">
                            <div class="clearfix m_bottom_15">
                                <i class="fa fa-map-marker f_left color_dark"></i>
                                <p class="contact_e">Bashundhara Shopping Complex<br>Level #01 (Block-A),<br>Panthopath, Dhaka-1215</p>
                            </div>
                            <!--<iframe class="r_corners full_width" id="gmap_mini" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=Manhattan,+New+York,+NY,+United+States&amp;aq=0&amp;oq=monheten&amp;sll=37.0625,-95.677068&amp;sspn=65.430355,129.814453&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%9C%D0%B0%D0%BD%D1%85%D1%8D%D1%82%D1%82%D0%B5%D0%BD,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E+%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA&amp;ll=40.790278,-73.959722&amp;spn=0.015612,0.031693&amp;z=13&amp;output=embed"></iframe>-->
                            <iframe class="r_corners full_width" id="gmap_mini" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.894847422034!2d90.38866281426533!3d23.751128884589004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bcd681372b%3A0x5c2b8755e4327004!2sBashundhara+City+Shopping+Complex!5e0!3m2!1sen!2sin!4v1505754299231" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </li>
                        <li class="m_bottom_10">
                            <div class="clearfix m_bottom_10">
                                <i class="fa fa-phone f_left color_dark"></i>
                                <p class="contact_e">800-559-65-80</p>
                            </div>
                        </li>
                        <li class="m_bottom_10">
                            <div class="clearfix m_bottom_10">
                                <i class="fa fa-envelope f_left color_dark"></i>
                                <a class="contact_e default_t_color" href="mailto:#">info@companyname.com</a>
                            </div>
                        </li>
                        <li>
                            <div class="clearfix">
                                <i class="fa fa-clock-o f_left color_dark"></i>
                                <p class="contact_e">Monday - Friday: 08.00-20.00 <br>Saturday: 09.00-15.00<br> Sunday: closed</p>
                            </div>
                        </li>
                    </ul>
                </div>	
            </li>
        </ul>
        <!--login popup-->
        <div class="popup_wrap d_none" id="login_popup">
            <section class="popup r_corners shadow">
                <button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
                <h3 class="m_bottom_20 color_dark">Log In</h3>
                <form>
                    <ul>
                        <li class="m_bottom_15">
                            <label for="username" class="m_bottom_5 d_inline_b">Username</label><br>
                            <input type="text" name="" id="username" class="r_corners full_width">
                        </li>
                        <li class="m_bottom_25">
                            <label for="password" class="m_bottom_5 d_inline_b">Password</label><br>
                            <input type="password" name="" id="password" class="r_corners full_width">
                        </li>
                        <li class="m_bottom_15">
                            <input type="checkbox" class="d_none" id="checkbox_10"><label for="checkbox_10">Remember me</label>
                        </li>
                        <li class="clearfix m_bottom_30">
                            <button class="button_type_4 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_15">Log In</button>
                            <div class="f_right f_size_medium f_mxs_none">
                                <a href="#" class="color_dark">Forgot your password?</a><br>
                                <a href="#" class="color_dark">Forgot your username?</a>
                            </div>
                        </li>
                    </ul>
                </form>
                <footer class="bg_light_color_1 t_mxs_align_c">
                    <h3 class="color_dark d_inline_middle d_mxs_block m_mxs_bottom_15">New Customer?</h3>
                    <a href="#" role="button" class="tr_all_hover r_corners button_type_4 bg_dark_color bg_cs_hover color_light d_inline_middle m_mxs_left_0">Create an Account</a>
                </footer>
            </section>
        </div>
        <!--custom popup-->
       
        <div class="popup_wrap d_none" id="quick_view_product">
            <section class="popup r_corners shadow">
                <button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
                <div class="clearfix">
                    
                    <div class="custom_scrollbar">
                        <!--left popup column-->
                        <div class="f_left half_column">
                            <div class="relative d_inline_b m_bottom_10 qv_preview">
                                <span class="hot_stripe"><img src="<?php echo base_url();?>assets/images/sale_product.png" alt=""></span>
                                <img src="<?php echo base_url();?>assets/images/" class="tr_all_hover" alt="">
                            </div>
                            <!--carousel-->
                            <div class="relative qv_carousel_wrap m_bottom_20">
                                <button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_prev">
                                    <i class="fa fa-angle-left "></i>
                                </button>
                                <ul class="qv_carousel d_inline_middle">
                                    <li data-src="<?php echo base_url();?>assets/images/quick_view_img_1.jpg"><img src="<?php echo base_url();?>assets/images/quick_view_img_4.jpg" alt=""></li>
                                    <li data-src="<?php echo base_url();?>assets/images/quick_view_img_2.jpg"><img src="<?php echo base_url();?>assets/images/quick_view_img_5.jpg" alt=""></li>
                                    <li data-src="<?php echo base_url();?>assets/images/quick_view_img_3.jpg"><img src="<?php echo base_url();?>assets/images/quick_view_img_6.jpg" alt=""></li>
                                    <li data-src="<?php echo base_url();?>assets/images/quick_view_img_1.jpg"><img src="<?php echo base_url();?>assets/images/quick_view_img_4.jpg" alt=""></li>
                                    <li data-src="<?php echo base_url();?>assets/images/quick_view_img_2.jpg"><img src="<?php echo base_url();?>assets/images/quick_view_img_5.jpg" alt=""></li>
                                    <li data-src="<?php echo base_url();?>assets/images/quick_view_img_3.jpg"><img src="<?php echo base_url();?>assets/images/quick_view_img_6.jpg" alt=""></li>
                                </ul>
                                <button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_next">
                                    <i class="fa fa-angle-right "></i>
                                </button>
                            </div>
                            <div class="d_inline_middle">Share this:</div>
                            <div class="d_inline_middle m_left_5">
                                <!-- AddThis Button BEGIN -->
                                <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                                    <a class="addthis_button_preferred_1"></a>
                                    <a class="addthis_button_preferred_2"></a>
                                    <a class="addthis_button_preferred_3"></a>
                                    <a class="addthis_button_preferred_4"></a>
                                    <a class="addthis_button_compact"></a>
                                    <a class="addthis_counter addthis_bubble_style"></a>
                                </div>
                                <!-- AddThis Button END -->
                            </div>
                        </div>
                        <!--right popup column-->
                        <div class="f_right half_column">
                            <!--description-->
                            <h2 class="m_bottom_10"><a href="#" class="color_dark fw_medium">Eget elementum vel</a></h2>
                            <div class="m_bottom_10">
                                <!--rating-->
                                <ul class="horizontal_list d_inline_middle type_2 clearfix rating_list tr_all_hover">
                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                </ul>
                                <a href="#" class="d_inline_middle default_t_color f_size_small m_left_5">1 Review(s) </a>
                            </div>
                            <hr class="m_bottom_10 divider_type_3">
                            <table class="description_table m_bottom_10">
                                <tr>
                                    <td>Manufacturer:</td>
                                    <td><a href="#" class="color_dark">Chanel</a></td>
                                </tr>
                                <tr>
                                    <td>Availability:</td>
                                    <td><span class="color_green">in stock</span> 20 item(s)</td>
                                </tr>
                                <tr>
                                    <td>Product Code:</td>
                                    <td>PS06</td>
                                </tr>
                            </table>
                            <h5 class="fw_medium m_bottom_10">Product Dimensions and Weight</h5>
                            <table class="description_table m_bottom_5">
                                <tr>
                                    <td>Product Length:</td>
                                    <td><span class="color_dark">10.0000M</span></td>
                                </tr>
                                <tr>
                                    <td>Product Weight:</td>
                                    <td>10.0000KG</td>
                                </tr>
                            </table>
                            <hr class="divider_type_3 m_bottom_10">
                            <p class="m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. </p>
                            <hr class="divider_type_3 m_bottom_15">
                            <div class="m_bottom_15">
                                <s class="v_align_b f_size_ex_large">$152.00</s><span class="v_align_b f_size_big m_left_5 scheme_color fw_medium">$102.00</span>
                            </div>
                            <table class="description_table type_2 m_bottom_15">
                                <tr>
                                    <td class="v_align_m">Size:</td>
                                    <td class="v_align_m">
                                        <div class="custom_select f_size_medium relative d_inline_middle">
                                            <div class="select_title r_corners relative color_dark">s</div>
                                            <ul class="select_list d_none"></ul>
                                            <select name="product_name">
                                                <option value="s">s</option>
                                                <option value="m">m</option>
                                                <option value="l">l</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="v_align_m">Quantity:</td>
                                    <td class="v_align_m">
                                        <div class="clearfix quantity r_corners d_inline_middle f_size_medium color_dark">
                                            <button class="bg_tr d_block f_left" data-direction="down">-</button>
                                            <input type="text" name="" readonly value="1" class="f_left">
                                            <button class="bg_tr d_block f_left" data-direction="up">+</button>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <div class="clearfix m_bottom_15">
                                <button class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover f_left f_size_large">Add to Cart</button>
                                <button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0"><i class="fa fa-heart-o f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Wishlist</span></button>
                                <button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0"><i class="fa fa-files-o f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Compare</span></button>
                                <button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0 relative"><i class="fa fa-question-circle f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Ask a Question</span></button>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
        
        
        <!--scripts include-->
        <script src="<?php echo base_url();?>assets/js/jquery-2.1.0.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/elevatezoom.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.fancybox-1.3.4.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/retina.js"></script>
        <script src="<?php echo base_url();?>assets/js/camera.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>
        <script src="<?php echo base_url();?>assets/js/styleswitcher.js"></script>
        <script src="<?php echo base_url();?>assets/js/colorpicker.js"></script>
        <script src="<?php echo base_url();?>assets/js/waypoints.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.isotope.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.tweet.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.custom-scrollbar.js"></script>
        <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
        <script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
    </body>

    <!-- Mirrored from inthe7heaven.com/flatastic-html/ by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 17 Jun 2014 17:33:38 GMT -->
</html>