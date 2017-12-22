<section class="breadcrumbs">
    <div class="container">
        <ul class="horizontal_list clearfix bc_list f_size_medium">
            <li class="m_right_10 current"><a href="<?php echo base_url();?>" class="default_t_color"><i class="fa fa-home"></i><i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li class="m_right_10 current">Searching Product</li>

        </ul>
    </div>
</section>
<div class="container">
    <h2 class="m_bottom_20 color_dark heading1 animate_ftr" style="margin-top: 2em;">Searching result here..</h2>

    <section class="products_container clearfix m_bottom_25 m_sm_bottom_15"> 
        <?php foreach ($search_product_item as $v_product){?>
        <div class="product_item new">
            <figure class="r_corners photoframe shadow relative animate_ftb long">
                <!--product preview-->
                <a href="<?php echo base_url(); ?>product-details/<?php  echo $v_product->product_id; ?>" class="d_block relative wrapper pp_wrap">
                    <img src="<?php echo base_url() . $v_product->product_image;  ?>" style="width: 180px; height: 130px;" class="tr_all_hover" alt="">
                    <!--<span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>-->
                </a>
                <!--description and price of product-->
                <figcaption>
                    <h5 class="m_bottom_10"><a href="<?php echo base_url(); ?>product-details/<?php  echo $v_product->product_id;?>" class="color_dark" title="<?php  echo $v_product->product_name;?>"><?php  echo $v_product->product_name;?></a></h5>
                    <div class="clearfix">
                        <p class="scheme_color f_left f_size_large m_bottom_15">Tk.<?php echo $v_product->product_price;  ?></p>
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
                        <input type="hidden" name="product_id" value="<?php echo $v_product->product_id;?>">
                        <input type="hidden" name="qty" value="1">
                        <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Add to Cart</button>
                    </form>    
                </figcaption>
            </figure>
        </div>

        <?php } ?>
    </section>


</div>
