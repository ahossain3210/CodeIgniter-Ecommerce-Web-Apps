<section class="breadcrumbs">
    <div class="container">
        <ul class="horizontal_list clearfix bc_list f_size_medium">
            <li class="m_right_10 current"><a href="<?php echo base_url();?>" class="default_t_color"><i class="fa fa-home"></i><i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li class="m_right_10 current"><a href="#" class="default_t_color">Category Product<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li><a href="#" class="default_t_color"><?php echo $viewProductCategory->category_name;?></a></li>
        </ul>
    </div>
</section>
<div class="container">
    <h2 class="tt_uppercase m_bottom_20 color_dark heading1 animate_ftr" style="margin-top: 2em;">Our New <span style="background: #ff757a;"><?php echo $viewProductCategory->category_name;?></span> Collections</h2>

    <section class="products_container clearfix m_bottom_25 m_sm_bottom_15">
        <?php foreach ($viewCategoryProduct as $v_product) { ?>        
            <div class="product_item new">
                <figure class="r_corners photoframe shadow relative animate_ftb long">
                    <!--product preview-->
                    <a href="<?php echo base_url();?>product-details/<?php echo $v_product->product_id;?>" class="d_block relative wrapper pp_wrap">
                        <img src="<?php echo base_url() . $v_product->product_image; ?>" style="width: 180px; height: 130px;" class="tr_all_hover" alt="">
                        <!--<span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>-->
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
                        <form action="<?php echo base_url();?>add-to-cart" method="post">
                            <input type="hidden" name="product_id" value="<?php echo $v_product->product_id;?>">
                            <input type="hidden" name="qty" value="1">
                            <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Add to Cart</button>
                        </form>    
                    </figcaption>
                </figure>
            </div>

        <?php } ?>
    </section>

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
            <a href="<?php echo base_url();?>manufacturer_product/<?php echo $v_manufacturer->manufacturer_id;?>" class="d_block t_align_c animate_fade"><img src="<?php echo base_url() . $v_manufacturer->manufacturer_image; ?>" style=" width: 150px; height: 50px;" alt=""></a>
        <?php } ?>
    </div>
</div>
