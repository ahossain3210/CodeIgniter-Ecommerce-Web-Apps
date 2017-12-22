<div class="page_content_offset">
    <div class="container">
        <h2 class="tt_uppercase m_bottom_20 color_dark heading1 animate_ftr">All Products</h2>
        <!--filter navigation of products-->
        <ul class="horizontal_list clearfix tt_uppercase isotope_menu f_size_ex_large">
            <li class="active m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter="*">All</button></li>
            <li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".random">New</button></li>
            <?php
            foreach ($allPublishManufacturer as $v_manufacturer) {
                ?>
                <li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".<?php echo $v_manufacturer->manufacturer_id;?>"><?php echo $v_manufacturer->manufacturer_name; ?></button></li>
            <?php } ?>
        </ul>
        <!--products-->
        <section class="products_container clearfix m_bottom_25 m_sm_bottom_15">
            <!--product item-->
            <?php
            foreach ($viewProduct as $v_product) {
                ?>
                <div class="product_item featured <?php echo $v_product->manufacturer_id;?>">
                    <figure class="r_corners photoframe shadow relative hit animate_ftb long">
                        <!--product preview-->
                        <a href="<?php echo base_url(); ?>product-details/<?php echo $v_product->product_id; ?>" class="d_block relative pp_wrap">                        
                            <img src="<?php echo base_url() . $v_product->product_image; ?>" style="width: 180px; height: 130px;" class="tr_all_hover" alt="">
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



        </section>
        <div class="row clearfix m_xs_bottom_30 m_bottom_25">
<!--            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-5">
                <p class="d_inline_middle f_size_medium">Results 1 - 5 of 45</p>
            </div>-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-7 t_align_c">
                <!--pagination-->
                <!--<a role="button" href="#" class="f_size_large button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none"><i class="fa fa-angle-left"></i></a>-->
<!--                <ul class="horizontal_list clearfix d_inline_middle f_size_medium m_left_10">
                    <li class="m_right_10"><a class="color_dark" href="#">&laquo; Previous</a></li>
                    <li class="m_right_10"><a class="color_dark" href="#">1</a></li>
                    <li class="m_right_10"><a class="active" href="#">2</a></li>
                    <li class="m_right_10"><a class="color_dark" href="#">3</a></li>
                    <li class="m_right_10"><a class="color_dark" href="#">4</a></li>
                    <li class="m_right_10"><a class="color_dark" href="#">5</a></li>
                    <li class="m_right_10"><a class="color_dark" href="#">6</a></li>
                    <li class="m_right_10"><a class="color_dark" href="#">7</a></li>
                    <li class="m_right_10"><a class="color_dark" href="#">Next &raquo;</a></li>
                </ul>-->
<?php echo $this->pagination->create_links();?>
                <!--<a role="button" href="#" class="f_size_large button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none"><i class="fa fa-angle-right"></i></a>-->
            </div>
        </div>
        <!--banners-->
        <section class="row clearfix m_bottom_45 m_sm_bottom_35">
            <div class="col-lg-6 col-md-6 col-sm-6 animate_half_tc">
                <a href="#" class="d_block banner wrapper r_corners relative m_xs_bottom_30">
                    <img src="<?php echo base_url(); ?>assets/images/banner_img_1.png" alt="">
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
                    <img src="<?php echo base_url(); ?>assets/images/banner_img_2.png" alt="">
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
        <div class="clearfix m_bottom_25 m_sm_bottom_20">
            <h2 class="tt_uppercase color_dark f_left heading2 animate_fade f_mxs_none m_mxs_bottom_15">Product Brands</h2>
            <div class="f_right clearfix nav_buttons_wrap animate_fade f_mxs_none">
                <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners pb_prev"><i class="fa fa-angle-left"></i></button>
                <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners pb_next"><i class="fa fa-angle-right"></i></button>
            </div>
        </div>
        <!--product brands carousel-->
        <div class="product_brands m_bottom_45 m_sm_bottom_35">
            <?php foreach ($allPublishManufacturer as $v_manufacturer) { ?>
                <a href="<?php echo base_url(); ?>Welcome/manufacturerProduct/<?php echo $v_manufacturer->manufacturer_id; ?>" class="d_block t_align_c animate_fade"><img style=" width: 150px; height: 70px;" src="<?php echo base_url() . $v_manufacturer->manufacturer_image; ?>" alt=""></a>
                <?php } ?>
        </div>
    </div>
</div>