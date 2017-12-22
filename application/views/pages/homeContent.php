<div class="page_content_offset">
    <div class="container">
        <h2 class="tt_uppercase m_bottom_20 color_dark heading1 animate_ftr">Our Latest Collection <a href="<?php echo base_url();?>new-product-collection.html" class=" m_left_20 tt_none"><small style="font-size:13px;">[ See All ]</small></a></h2> 

        <!--filter navigation of products-->

        <!--products-->
        <section class="products_container clearfix m_bottom_25 m_sm_bottom_15">
            <!--product item-->
            <?php
            foreach ($latestProduct as $v_product) {
                ?>
                <div class="product_item featured <?php echo $v_product->manufacturer_id ?>">
                    <figure class="r_corners photoframe shadow relative hit animate_ftb long m_bottom_35">
                        <!--product preview-->
                        <a href="<?php echo base_url(); ?>product-details/<?php echo $v_product->product_id; ?>" class="d_block relative pp_wrap">                        
                            <img src="<?php echo base_url() . $v_product->product_image; ?>" style="width: 180px; height: 150px;" class="tr_all_hover" alt="">
                            <!--<span data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Details</span>-->
                        </a>
                        <!--description and price of product-->
                        <figcaption>
                            <h5 class="m_bottom_10"><a href="#" class="color_dark"><?php echo $v_product->product_name; ?></a></h5>
                            <div class="clearfix">
                                <p class="scheme_color f_left f_size_large m_bottom_15">Tk. <?php echo $v_product->product_price; ?></p>
                                <p class="scheme_color f_left f_size_large m_bottom_15 m_left_10"><small><s>Tk. <?php echo $v_product->previous_product_price; ?></s></small></p>
                                <!--rating-->
                                <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
<!--                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>-->
                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                </ul>
                            </div>
                            <form action="<?php echo base_url(); ?>add-to-cart" method="post">
                                <input type="hidden" name="product_id" value="<?php echo $v_product->product_id; ?>">
                                <input type="hidden" name="qty" value="1">
                                <button type="submit" class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Add to Cart</button>
                            </form>
                        </figcaption>
                    </figure>
                </div>
            <?php } ?>
            <!--product item-->
        </section>
        
        <h2 class="tt_uppercase m_bottom_20 color_dark heading1 animate_ftr">Computer Collection <a href="<?php echo base_url();?>computer-collections.html" class=" m_left_20 tt_none"><small style="font-size:13px;">[ See All ]</small></a></h2> 
        <section class="products_container clearfix m_bottom_25 m_sm_bottom_15">
            <!--product item-->
            <?php
            foreach ($computer_collection as $v_product) {
                ?>
                <div class="product_item featured <?php echo $v_product->manufacturer_id ?>">
                    <figure class="r_corners photoframe shadow relative hit animate_ftb long m_bottom_35">
                        <!--product preview-->
                        <a href="<?php echo base_url(); ?>product-details/<?php echo $v_product->product_id; ?>" class="d_block relative pp_wrap">                        
                            <img src="<?php echo base_url() . $v_product->product_image; ?>" style="width: 180px; height: 150px;" class="tr_all_hover" alt="">
                            <!--<span data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Details</span>-->
                        </a>
                        <!--description and price of product-->
                        <figcaption>
                            <h5 class="m_bottom_10"><a href="#" class="color_dark"><?php echo $v_product->product_name; ?></a></h5>
                            <div class="clearfix">
                                <p class="scheme_color f_left f_size_large m_bottom_15">Tk.<?php echo $v_product->product_price; ?></p>
                                <!--rating-->
                                <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
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
                            </div>
                            <form action="<?php echo base_url(); ?>add-to-cart" method="post">
                                <input type="hidden" name="product_id" value="<?php echo $v_product->product_id; ?>">
                                <input type="hidden" name="qty" value="1">
                                <button type="submit" class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Add to Cart</button>
                            </form>
                        </figcaption>
                    </figure>
                </div>
            <?php } ?>
            <!--product item-->
        </section>
        <h2 class="tt_uppercase m_bottom_20 color_dark heading1 animate_ftr">Featured Products <a href="<?php echo base_url();?>feature-products.html" class=" m_left_20 tt_none"><small style="font-size:13px;">[ See All ]</small></a></h2>
        <section class="products_container clearfix m_bottom_25 m_sm_bottom_15">

            <!--product item-->
            <?php
            foreach ($viewFeaturedProduct as $v_featured_product) {
                ?>
                <div class="product_item featured <?php echo $v_featured_product->manufacturer_id ?>">
                    <figure class="r_corners photoframe shadow relative hit animate_ftb long">
                        <!--product preview-->
                        <a href="<?php echo base_url(); ?>product-details/<?php echo $v_featured_product->product_id; ?>" class="d_block relative pp_wrap">                        
                            <img src="<?php echo base_url() . $v_featured_product->product_image; ?>" style="width: 180px; height: 130px;" class="tr_all_hover" alt="">
                            <!--<span data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Details</span>-->
                        </a>
                        <!--description and price of product-->
                        <figcaption>
                            <h5 class="m_bottom_10"><a href="#" class="color_dark"><?php echo $v_featured_product->product_name; ?></a></h5>
                            <div class="clearfix">
                                <p class="scheme_color f_left f_size_large m_bottom_15">Tk.<?php echo $v_featured_product->product_price; ?></p>
                                <!--rating-->
                                <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
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
                            </div>
                            <form action="<?php echo base_url(); ?>add-to-cart" method="post">
                                <input type="hidden" name="product_id" value="<?php echo $v_featured_product->product_id; ?>">
                                <input type="hidden" name="qty" value="1">
                                <button type="submit" class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Add to Cart</button>
                            </form>
                        </figcaption>
                    </figure>
                </div>
<?php } ?>
            <!--product item-->
        </section>
        <!--.........carusel product.........-->

        <div class="clearfix">
            <h2 class="color_dark tt_uppercase f_left m_bottom_15 f_mxs_none">Mobile Collection </h2><a href="<?php echo base_url();?>mobile-collections.html" class=" m_left_20 t_align_r">[ See All ]</a>
            <div class="f_right clearfix nav_buttons_wrap f_mxs_none m_mxs_bottom_5">
                <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners rp_prev"><i class="fa fa-angle-left"></i></button>
                <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners rp_next"><i class="fa fa-angle-right"></i></button>
            </div>
        </div>
        <div class="related_projects product_full_width m_bottom_40">
<?php
$mobile_related_product = $this->Welcome_Model->select_mobile_info();

foreach ($mobile_related_product as $v_product) {
    ?>
                <figure class="r_corners photoframe shadow relative d_md_block d_xs_inline_b tr_all_hover">
                    <!--                 <figure class="r_corners photoframe shadow relative hit animate_ftb long">-->
                    <!--product preview-->
                    <a href="<?php echo base_url(); ?>product-details/<?php echo $v_product->product_id; ?>" class="d_block relative pp_wrap">
                        <!--hot product-->
                        <span class="hot_stripe type_2"><img src="<?php echo base_url(); ?>assets/images/hot_product_type_2.png" alt=""></span>
                        <img src="<?php echo base_url() . $v_product->product_image; ?>" width="250px" height="180" class="tr_all_hover photo" alt="">
                        <span class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">View Details</span>
                    </a>
                    <!--description and price of product-->
                    <figcaption class="t_xs_align_l">
                        <h5 class="m_bottom_10"><a href="#" class="color_dark ellipsis" title="<?php echo $v_product->product_name; ?>"><?php echo $v_product->product_name; ?></a></h5>
                        <div class="clearfix">
                            <p class="scheme_color f_left f_size_large m_bottom_15">Tk.<?php echo $v_product->product_price; ?></p>


                            <!--rating-->
                            <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
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
                        </div>
                        <form action="<?php echo base_url(); ?>add-to-cart" method="post">
                        <input type="hidden" name="product_id" value="<?php echo $v_product->product_id;?>">
                        <input type="hidden" name="qty" value="1">
                        <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Add to Cart</button>
                        </form>
                    </figcaption>
                </figure>
<?php } ?>
        </div>

        <!--.........carusel product.........-->
        <!--banners-->
        <section class="row clearfix m_bottom_45 m_sm_bottom_35">
            <div class="col-lg-6 col-md-6 col-sm-6 animate_half_tc">
                <a href="#" class="d_block banner wrapper r_corners relative m_xs_bottom_30">
                    <img src="<?php echo base_url(); ?>assets/images/slide_image_2.jpg" width="550px" height="220px" alt="">
                    <span class="banner_caption d_block vc_child t_align_c w_sm_auto">
                        <span class="d_inline_middle">
                            <span class="d_block color_dark tt_uppercase m_bottom_5 let_s">New Collection!</span>
                            <span class="d_block divider_type_2 centered_db m_bottom_5"></span>
                            <span class="d_block color_light tt_uppercase m_bottom_25 m_xs_bottom_10 banner_title"><b>Colored Fashion</b></span>
                            <span class="button_type_6 bg_scheme_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
                        </span>
                    </span>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 animate_half_tc">
                <a href="#" class="d_block banner wrapper r_corners type_2 relative">
                    <img src="<?php echo base_url(); ?>assets/images/banner_img_1.png"  alt="">
                    <span class="banner_caption d_block vc_child t_align_c w_sm_auto">
                        <span class="d_inline_middle">
                            <span class="d_block scheme_color banner_title type_2 m_bottom_5 m_mxs_bottom_5"><b>-50%</b></span>
                            <span class="d_block divider_type_2 centered_db m_bottom_5 d_sm_none"></span>
                            <span class="d_block color_light tt_uppercase m_bottom_15 banner_title_3 m_md_bottom_5 d_mxs_none">On All<br><b>Sunglasses</b></span>
                            <span class="button_type_6 bg_dark_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
                        </span>
                    </span>
                </a>
            </div>
        </section>
        <!--product brands-->

        <!--blog-->
        <div class="row clearfix m_bottom_45 m_sm_bottom_35">
            <!--            <div class="col-lg-6 col-md-6 col-sm-12 m_sm_bottom_35 blog_animate animate_ftr">
                            <div class="clearfix m_bottom_25 m_sm_bottom_20">
                                <h2 class="tt_uppercase color_dark f_left">From The Blog</h2>
                                <div class="f_right clearfix nav_buttons_wrap">
                                    <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left tr_delay_hover r_corners blog_prev"><i class="fa fa-angle-left"></i></button>
                                    <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners blog_next"><i class="fa fa-angle-right"></i></button>
                                </div>
                            </div>
                            blog carousel
                            <div class="blog_carousel">
                                <div class="clearfix">
                                    image
                                    <a href="#" class="d_block photoframe relative shadow wrapper r_corners f_left m_right_20 animate_ftt f_mxs_none m_mxs_bottom_10">
                                        <img class="tr_all_long_hover" src="<?php //echo base_url();  ?>assets/images/blog_img_1.jpg" alt="">
                                    </a>
                                    post content
                                    <div class="mini_post_content">
                                        <h4 class="m_bottom_5 animate_ftr"><a href="#" class="color_dark"><b>Ut tellus dolor, dapibus eget, elementum vel</b></a></h4>
                                        <p class="f_size_medium m_bottom_10 animate_ftr">25 January, 2013, 5 comments</p>
                                        <p class="m_bottom_10 animate_ftr">Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. </p>
                                        <a class="tt_uppercase f_size_large animate_ftr" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    image
                                    <a href="#" class="d_block photoframe relative shadow wrapper r_corners f_left m_right_20 animate_ftt f_mxs_none m_mxs_bottom_10">
                                        <img class="tr_all_long_hover" src="<?php // echo base_url();  ?>assets/images/blog_img_2.jpg" alt="">
                                    </a>
                                    post content
                                    <div class="mini_post_content">
                                        <h4 class="m_bottom_5 animate_ftr"><a href="#" class="color_dark"><b>Cursus eleifend, elit aenean set amet lorem</b></a></h4>
                                        <p class="f_size_medium m_bottom_10 animate_ftr">30 January, 2013, 6 comments</p>
                                        <p class="m_bottom_10 animate_ftr">Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. </p>
                                        <a class="tt_uppercase f_size_large animate_ftr" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    image
                                    <a href="#" class="d_block photoframe relative shadow wrapper r_corners f_left m_right_20 animate_ftt f_mxs_none m_mxs_bottom_10">
                                        <img class="tr_all_long_hover" src="<?php //echo base_url();  ?>assets/images/blog_img_3.jpg" alt="">
                                    </a>
                                    post content
                                    <div class="mini_post_content">
                                        <h4 class="m_bottom_5 animate_ftr"><a href="#" class="color_dark"><b>In pede mi, aliquet sit ut tellus dolor</b></a></h4>
                                        <p class="f_size_medium m_bottom_10 animate_ftr">1 February, 2013, 12 comments</p>
                                        <p class="m_bottom_10 animate_ftr">Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. </p>
                                        <a class="tt_uppercase f_size_large animate_ftr" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>-->
            <!--testimonials-->
            <div class="row clearfix m_bottom_45 m_sm_bottom_35">
                <div class="col-lg-6 col-md-6 col-sm-12 m_sm_bottom_35 blog_animate animate_ftr">
                    <div class="clearfix m_bottom_25 m_sm_bottom_20">
                        <h2 class="tt_uppercase color_dark f_left">From The Blog</h2>
                        <div class="f_right clearfix nav_buttons_wrap">
                            <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left tr_delay_hover r_corners blog_prev"><i class="fa fa-angle-left"></i></button>
                            <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners blog_next"><i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                    <!--blog carousel-->
                    <div class="blog_carousel">
                        <div class="clearfix">
                            <!--image-->
                            <a href="#" class="d_block photoframe relative shadow wrapper r_corners f_left m_right_20 animate_ftt f_mxs_none m_mxs_bottom_10">
                                <img class="tr_all_long_hover" src="<?php echo base_url(); ?>assets/images/blog_img_1.jpg" alt="">
                            </a>
                            <!--post content-->
                            <div class="mini_post_content">
                                <h4 class="m_bottom_5 animate_ftr"><a href="#" class="color_dark"><b>Ut tellus dolor, dapibus eget, elementum vel</b></a></h4>
                                <p class="f_size_medium m_bottom_10 animate_ftr">25 January, 2013, 5 comments</p>
                                <p class="m_bottom_10 animate_ftr">Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. </p>
                                <a class="tt_uppercase f_size_large animate_ftr" href="#">Read More</a>
                            </div>
                        </div>
                        <div class="clearfix">
                            <!--image-->
                            <a href="#" class="d_block photoframe relative shadow wrapper r_corners f_left m_right_20 animate_ftt f_mxs_none m_mxs_bottom_10">
                                <img class="tr_all_long_hover" src="<?php echo base_url(); ?>assets/images/blog_img_2.jpg" alt="">
                            </a>
                            <!--post content-->
                            <div class="mini_post_content">
                                <h4 class="m_bottom_5 animate_ftr"><a href="#" class="color_dark"><b>Cursus eleifend, elit aenean set amet lorem</b></a></h4>
                                <p class="f_size_medium m_bottom_10 animate_ftr">30 January, 2013, 6 comments</p>
                                <p class="m_bottom_10 animate_ftr">Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. </p>
                                <a class="tt_uppercase f_size_large animate_ftr" href="#">Read More</a>
                            </div>
                        </div>
                        <div class="clearfix">
                            <!--image-->
                            <a href="#" class="d_block photoframe relative shadow wrapper r_corners f_left m_right_20 animate_ftt f_mxs_none m_mxs_bottom_10">
                                <img class="tr_all_long_hover" src="<?php echo base_url(); ?>assets/images/blog_img_3.jpg" alt="">
                            </a>
                            <!--post content-->
                            <div class="mini_post_content">
                                <h4 class="m_bottom_5 animate_ftr"><a href="#" class="color_dark"><b>In pede mi, aliquet sit ut tellus dolor</b></a></h4>
                                <p class="f_size_medium m_bottom_10 animate_ftr">1 February, 2013, 12 comments</p>
                                <p class="m_bottom_10 animate_ftr">Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. </p>
                                <a class="tt_uppercase f_size_large animate_ftr" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--testimonials-->
                <div class="col-lg-6 col-md-6 col-sm-12 ti_animate animate_ftr">
                    <div class="clearfix m_bottom_25 m_sm_bottom_20">
                        <h2 class="tt_uppercase color_dark f_left f_mxs_none m_mxs_bottom_15">What Our Customers Say</h2>
                        <div class="f_right clearfix nav_buttons_wrap f_mxs_none">
                            <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left tr_delay_hover r_corners ti_prev"><i class="fa fa-angle-left"></i></button>
                            <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners ti_next"><i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                    <!--testimonials carousel-->
                    <div class="testiomials_carousel">
                        <div>
                            <blockquote class="r_corners shadow f_size_large relative m_bottom_15 animate_ftr">Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis.</blockquote>
                            <img class="circle m_left_20 d_inline_middle animate_ftr" src="<?php echo base_url(); ?>assets/images/testimonial_img_1.jpg" alt="">
                            <div class="d_inline_middle m_left_15 animate_ftr">
                                <h5 class="color_dark"><b>Marta Healy</b></h5>
                                <p>Los Angeles</p>
                            </div>
                        </div>
                        <div>
                            <blockquote class="r_corners shadow f_size_large relative m_bottom_15">Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</blockquote>
                            <img class="circle m_left_20 d_inline_middle" src="<?php echo base_url(); ?>assets/images/testimonial_img_2.jpg" alt="">
                            <div class="d_inline_middle m_left_15">
                                <h5 class="color_dark"><b>Alan Smith</b></h5>
                                <p>New York</p>
                            </div>
                        </div>
                        <div>
                            <blockquote class="r_corners shadow f_size_large relative m_bottom_15">Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt.</blockquote>
                            <img class="circle m_left_20 d_inline_middle" src="<?php echo base_url(); ?>assets/images/testimonial_img_3.jpg" alt="">
                            <div class="d_inline_middle m_left_15">
                                <h5 class="color_dark"><b>Anna Johnson</b></h5>
                                <p>Detroid</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $this->load->view('pages/product_brand'); ?>
        <!--banners-->
        <!--        <div class="row clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners red t_align_c tt_uppercase vc_child n_sm_vc_child">
                            <span class="d_inline_middle">
                                <img class="d_inline_middle m_md_bottom_5" src="<?php //echo base_url();  ?>assets/images/banner_img_3.png" alt="">
                                <span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
                                    <b>100% Satisfaction</b><br><span class="color_dark">Guaranteed</span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners green t_align_c tt_uppercase vc_child n_sm_vc_child">
                            <span class="d_inline_middle">
                                <img class="d_inline_middle m_md_bottom_5" src="<?php //echo base_url();  ?>assets/images/banner_img_4.png" alt="">
                                <span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
                                    <b>Free Shipping</b><br><span class="color_dark">On All Items</span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <a href="#" class="d_block animate_ftb h_md_auto banner_type_2 r_corners orange t_align_c tt_uppercase vc_child n_sm_vc_child">
                            <span class="d_inline_middle">
                                <img class="d_inline_middle m_md_bottom_5" src="<?php //echo base_url();  ?>assets/images/banner_img_5.png" alt="">
                                <span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
                                    <b>Great Daily Deals</b><br><span class="color_dark">Shop Now!</span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>-->
    </div>
</div>