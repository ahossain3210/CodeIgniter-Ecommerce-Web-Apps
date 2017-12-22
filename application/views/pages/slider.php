<div class="camera_wrap m_bottom_0">
    <?php
    foreach ($viewFeaturedProduct as $v_product)
    {
    ?>
    <div data-src="<?php echo base_url().$v_product->product_image;?>" data-custom-thumb="<?php echo base_url().$v_product->product_image;?>">
        <div class="camera_caption_2 fadeIn t_align_c d_xs_none">
            <div class="f_size_large tt_uppercase slider_title_3 scheme_color"><b style="font-size: 1.5em;">New arrivals</b></div>
            <hr class="slider_divider type_2 m_bottom_5 d_inline_b">
            <div class="color_light slider_title tt_uppercase t_align_c m_bottom_15 m_sm_bottom_20" ><b><span class="scheme_color" style="font-size: 3.07em;"><?php  echo $v_product->product_name;?></span></b></div>
            <div class="color_light slider_title tt_uppercase t_align_c m_bottom_30 m_sm_bottom_20"><b><span class="color_dark" style="font-size: 1em;">Ready to Sale</span></b></div>
            <a href="<?php echo base_url(); ?>product-details/<?php echo $v_product->product_id; ?>" role="button" class="d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tr_all_hover" style="font-size: 1.5em;">View Details</a>
        </div>
    </div>
    <?php }?>

</div>