<aside class="col-lg-3 col-md-3 col-sm-3" style="background: #f9f9f9; margin-bottom: 1em;">
    <!--widgets-->
    <?php
    if (isset($categories)) {
        ?>
        <figure class="widget shadow r_corners wrapper m_bottom_30">
            <figcaption>
                <h3 class="color_light">Categories</h3>
            </figcaption>
            <div class="widget_content">
                <!--Categories list-->
                <ul class="categories_list">
                <?php
                    $allPublishCategory=  $this->Welcome_Model->selectAllPublishCategory();

                    foreach ($allPublishCategory as $v_category)
                    {   
                ?>  
                    <li>
                        <a href="#" class="f_size_large color_dark d_block relative">
                            <b><?php echo $v_category->category_name;?></b>
                            <span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                        </a>
                        <!--second level-->
                        <ul class="d_none">
                        <?php
                        $ci=$v_category->category_id;
                        $c_manufacturer=$this->Welcome_Model->select_c_manufacturer_info($ci);
                        foreach ($c_manufacturer as $v_manufacturer)
                        {
                        ?>
                            <li>
                                <a href="#" class="d_block f_size_large color_dark relative">
                                    <?php echo $v_manufacturer->manufacturer_name;?>
                                    <span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                </a>
                                <!--third level-->
                                <ul class="d_none">
                                    <li><a href="#" class="color_dark d_block">Evening</a></li>
                                    <li><a href="#" class="color_dark d_block">Casual</a></li>
                                    <li><a href="#" class="color_dark d_block">Party</a></li>
                                </ul>
                            </li>
                        <?php }?>
                        </ul>
                    </li>
                    <?php } ?>
                    <li>
                        <a href="#" class="f_size_large color_dark d_block relative">
                            <b>Kids</b>
                            <span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </figure>
    <?php } ?>
    <!--wishlist-->
    <?php
    if (isset($wishList)) {
        ?>
        <figure class="widget shadow r_corners wrapper m_bottom_30">
            <figcaption>
                <h3 class="color_light">Wishlist</h3>
            </figcaption>
            <div class="widget_content">
                <?php
                $contents=$this->cart->contents();
                
                foreach ($contents as $cartItems)
                {
                ?>
                <div class="clearfix m_bottom_15 relative cw_product">
                    <img src="<?php echo base_url().$cartItems['image']?>" alt="" width="80" height="67" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                    <a href="<?php echo base_url();?>product-details/<?php echo $cartItems['id']?>" class="color_dark d_block bt_link"><?php echo $cartItems['name']?></a>
                    <br>
                    <p class="scheme_color">Tk. <?php echo $cartItems['price']?></p>
                    <button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
                </div>
                <hr class="m_bottom_15">
                <?php }?>
                <a href="<?php echo base_url();?>cart.html" class="color_dark"><i class="fa fa-heart-o m_right_10"></i>Go to Wishlist</a>
            </div>
        </figure>
    <?php } ?>
    <!--banner-->
    <!--    <a href="#" class="d_block r_corners m_bottom_30">
            <img src="images/banner_img_6.jpg" alt="">
        </a>-->
    <!--Bestsellers-->
    <!--tags-->

    <!--New products-->
    <?php
    if (isset($newProducts)) {
        ?>
        <figure class="widget shadow r_corners wrapper m_bottom_30">
            <figcaption>
                <h3 class="color_light">New Products</h3>
            </figcaption>
            <div class="widget_content">
                <?php
                $latestProduct=  $this->Welcome_Model->selectLatestProduct();
                foreach ($latestProduct as $v_product)
                {
                ?>
                <div class="clearfix m_bottom_15">
                    <img src="<?php echo base_url().$v_product->product_image?>" width="80px;" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                    <a href="<?php echo base_url(); ?>product-details/<?php echo $v_product->product_id; ?>" class="color_dark d_block m_bottom_5 bt_link"><?php echo $v_product->product_name;?></a>
                    <p class="scheme_color">BDT <?php echo $v_product->product_price;?></p>
                </div>
                <?php }?>
            </div>
        </figure>
    <?php } ?>
    <!--Specials-->
    <!--Popular articles-->
    <?php
    if (isset($popularArticles)) {
        ?>
        <figure class="widget shadow r_corners wrapper m_bottom_30">
            <figcaption>
                <h3 class="color_light">Popular Articles</h3>
            </figcaption>
            <div class="widget_content">
                <article class="clearfix m_bottom_15">
                    <img src="images/article_img_1.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                    <a href="#" class="color_dark d_block bt_link p_vr_0">Aliquam erat volutpat.</a>
                    <p class="f_size_medium">50 comments</p>
                </article>
                <hr class="m_bottom_15">
                <article class="clearfix m_bottom_15">
                    <img src="images/article_img_2.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                    <a href="#" class="color_dark d_block p_vr_0 bt_link">Integer rutrum ante </a>
                    <p class="f_size_medium">34 comments</p>
                </article>
                <hr class="m_bottom_15">
                <article class="clearfix m_bottom_5">
                    <img src="images/article_img_3.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                    <a href="#" class="color_dark d_block p_vr_0 bt_link">Vestibulum libero nisl, porta vel</a>
                    <p class="f_size_medium">21 comments</p>
                </article>
            </div>
        </figure>
    <?php } ?>

    <!--Latest articles-->
</aside>
