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
        <a href="<?php echo base_url(); ?>manufacturer-product/<?php echo $v_manufacturer->manufacturer_id; ?>" class="d_block t_align_c animate_fade"><img style=" width: 150px; height: 70px;" src="<?php echo base_url() . $v_manufacturer->manufacturer_image; ?>" alt=""></a>
        <?php } ?>
</div>