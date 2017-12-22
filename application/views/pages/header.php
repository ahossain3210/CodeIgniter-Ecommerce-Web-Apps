<header role="banner">
    <!--header top part-->
    <section class="h_top_part">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-5 t_xs_align_c">
                    <?php
                    $customer_id=$this->session->userdata('customer_id');
                    if ($customer_id!=NULL)
                    {
                    ?>
                    <p class="f_size_small" style="color: green;">Welcome <b> <?php echo $this->session->userdata('customer_name');?></b> | <a href="<?php echo base_url();?>customer-logout">Logout</a></p>
                    <?php }
                    else {
                    ?>
                    <p class="f_size_small"><a href="<?php echo base_url();?>customer-registration">Login</a> | <a href="<?php echo base_url();?>customer-registration">Create an Account</a></p>
                    <?php }?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 t_align_c t_xs_align_c">
                    <p class="f_size_small"><i class="fa fa-mobile scheme_color"></i> +88-01672-505856 | <i class="fa fa-envelope scheme_color"></i> eshopper@infobd.com</p>
                </div>
                <nav class="col-lg-4 col-md-4 col-sm-5 t_align_r t_xs_align_c">
                    <ul class="d_inline_b horizontal_list clearfix f_size_small users_nav">
                        <li><a href="<?php echo base_url();?>customer-registration" class="default_t_color">My Account</a></li>
                        <li><a href="<?php echo base_url();?>order-list" class="default_t_color">Orders List</a></li>
                        <li><a href="<?php echo base_url();?>add-to-cart" class="default_t_color">Wishlist</a></li>
                        <?php
                        $customer_id=$this->session->userdata('customer_id');
                        $billing_id=$this->session->userdata('billing_id');
                        $shipping_id=$this->session->userdata('shipping_id');
                        if($customer_id && $billing_id && $shipping_id !=NULL)
                        {
                        ?>
                        <li><a href="<?php echo base_url();?>payment.html" class="default_t_color">Checkout</a></li>
                        <?php } else { ?>
                        <li><a href="<?php echo base_url();?>customer-registration" class="default_t_color">Checkout</a></li>
                        <?php }?>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!--header bottom part-->
    <section class="h_bot_part container">
        <div class="clearfix row">
            <div class="col-lg-6 col-md-6 col-sm-4 t_xs_align_c">
                <a href="<?php echo base_url();?>" class="logo m_xs_bottom_15 d_xs_inline_b">
                    <img src="<?php echo base_url(); ?>assets/images/logo.png" class="" alt="">
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-8 t_align_r t_xs_align_c">
                <ul class="d_inline_b horizontal_list clearfix t_align_l site_settings">
                    <!--like-->
                    <li>
                        <!--<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Wishlist</span>-->
                        <a role="button" href="<?php echo base_url();?>add-to-cart" class="button_type_1 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none"><i class="fa fa-heart-o f_size_ex_large"></i><span class="count circle t_align_c"><?php echo $this->cart->total_items();?></span></a>
                    </li>
                    <li class="m_left_5">
                        <a role="button" href="#" class="button_type_1 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none"><i class="fa fa-files-o f_size_ex_large"></i><span class="count circle t_align_c">0</span></a>
                    </li>
                    <!--language settings-->
                    <li class="m_left_5 relative container3d">
                        <a role="button" href="#" class="button_type_2 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none" id="lang_button"><img class="d_inline_middle m_right_10 m_mxs_right_0" src="<?php echo base_url(); ?>assets/images/flag_en.jpg" alt=""><span class="d_mxs_none">English</span></a>
                        <ul class="dropdown_list top_arrow color_light">
                            <li><a href="#" class="tr_delay_hover color_light"><img class="d_inline_middle" src="<?php echo base_url(); ?>assets/images/flag_en.jpg" alt="">English</a></li>
                            <li><a href="#" class="tr_delay_hover color_light"><img class="d_inline_middle" src="<?php echo base_url(); ?>assets/images/flag_fr.jpg" alt="">French</a></li>
                            <li><a href="#" class="tr_delay_hover color_light"><img class="d_inline_middle" src="<?php echo base_url(); ?>assets/images/flag_g.jpg" alt="">German</a></li>
                            <li><a href="#" class="tr_delay_hover color_light"><img class="d_inline_middle" src="<?php echo base_url(); ?>assets/images/flag_i.jpg" alt="">Italian</a></li>
                            <li><a href="#" class="tr_delay_hover color_light"><img class="d_inline_middle" src="<?php echo base_url(); ?>assets/images/flag_s.jpg" alt="">Spanish</a></li>
                        </ul>
                    </li>
                    <!--currency settings-->
                    <li class="m_left_5 relative container3d">
                        <a role="button" href="#" class="button_type_2 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none" id="currency_button"><span class="scheme_color">$</span> <span class="d_mxs_none">US Dollar</span></a>
                        <ul class="dropdown_list top_arrow color_light">
                            <li><a href="#" class="tr_delay_hover color_light"><span class="scheme_color">$</span> US Dollar</a></li>
                            <li><a href="#" class="tr_delay_hover color_light"><span class="scheme_color">&#8364;</span> Euro</a></li>
                            <li><a href="#" class="tr_delay_hover color_light"><span class="scheme_color">&#163;</span> Pound</a></li>
                        </ul>
                    </li>
                    <!--shopping cart-->
                    <li class="m_left_5 relative container3d" id="shopping_button">
                        <a role="button" href="#" class="button_type_3 color_light bg_scheme_color d_block r_corners tr_delay_hover box_s_none">
                            <span class="d_inline_middle shop_icon m_mxs_right_0">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="count tr_delay_hover type_2 circle t_align_c"><?php echo $this->cart->total_items();?></span>
                            </span>
                            <b class="d_mxs_none">Tk.<?php echo $this->cart->total();?></b>
                        </a>
                        <div class="shopping_cart top_arrow tr_all_hover r_corners">
                            <div class="f_size_medium sc_header">Recently added item(s)</div>
                            <ul class="products_list">
                                <?php
                                $contents=$this->cart->contents();
                                foreach ($contents as $cartItems)
                                {
                                ?>
                                <li>
                                    <div class="clearfix">
                                        <!--product image-->
                                        <img class="f_left m_right_10" src="<?php echo base_url().$cartItems['image']?>" style="width: 50px;" alt="">
                                        <!--product description-->
                                        <div class="f_left product_description">
                                            <a href="#" class="color_dark m_bottom_5 d_block"><?php echo $cartItems['name']?></a>
                                            <span class="f_size_medium">Product Code PS34</span>
                                        </div>
                                        <!--product price-->
                                        <div class="f_left f_size_medium">
                                            <div class="clearfix">
                                                <?php echo $cartItems['qty']?> x <b class="color_dark">Tk.<?php echo $cartItems['price']?></b>
                                            </div>
                                            <a href="<?php echo base_url();?>cart/deleteCart/<?php echo $cartItems['rowid']?>"><button class="close_product color_dark tr_hover"><i class="fa fa-times"></i></button></a>
                                        </div>
                                    </div>
                                </li>
                                <?php }?>
                                
                            </ul>
                            <!--total price-->
                            <ul class="total_price bg_light_color_1 t_align_r color_dark">
                                <li class="m_bottom_10">Shipment fee:
                                    <span class="f_size_large sc_price t_align_l d_inline_b m_left_15">Tk.
                                        <?php
                                        $shipping_fee=50;
                                        echo $shipping_fee;
                                        ?>
                                    </span></li>
                                <li class="m_bottom_10">Discount (10%): 
                                    <span class="f_size_large sc_price t_align_l d_inline_b m_left_15">Tk. 
                                        <?php
                                        $total=$this->cart->total();
                                        $discount=(10*$total)/100;
                                        echo $discount;
                                        ?>
                                    </span></li>
                                            <li>Total: <b class="f_size_large bold scheme_color sc_price t_align_l d_inline_b m_left_15">Tk. 
                                                <?php
                                                $grand_total=($total+$shipping_fee)-$discount;
                    
                                                echo $grand_total;
                                                ?>
                                        </b></li>
                            </ul>
                            <div class="sc_footer t_align_c">
                                <a href="<?php echo base_url();?>cart.html" role="button" class="button_type_4 d_inline_middle bg_light_color_2 r_corners color_dark t_align_c tr_all_hover m_mxs_bottom_5">View Cart</a>
                                <?php
//                                $customer_id=$this->session->userdata('customer_id');
//                                $billing_id=$this->session->userdata('billing_id');
//                                $shipping_id=$this->session->userdata('shipping_id');
                                if($customer_id && $billing_id && $shipping_id !=NULL)
                                {
                                ?>
                                    <a href="<?php echo base_url();?>payment.html" role="button" class="button_type_4 bg_scheme_color d_inline_middle r_corners tr_all_hover color_light">Checkout</a>
                                <?php } else { ?>
                                    <a href="<?php echo base_url();?>customer-registration" role="button" class="button_type_4 bg_scheme_color d_inline_middle r_corners tr_all_hover color_light">Checkout</a>
                                <?php } ?>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--main menu container-->
    <section class="menu_wrap relative">
        <div class="clearfix" id="navigation_menu">
            <!--button for responsive menu-->
            <button id="menu_button" class="r_corners centered_db d_none tr_all_hover d_xs_block m_bottom_10">
                <span class="centered_db r_corners"></span>
                <span class="centered_db r_corners"></span>
                <span class="centered_db r_corners"></span>
            </button>
            <!--main menu-->
            <?php
            $this->load->view('pages/navbar');
            ?>
<!--            <button class="f_right search_button tr_all_hover f_xs_none d_xs_none">
                <i class="fa fa-search"></i>
            </button>-->
            <?php
             $this->load->view('pages/search');
            ?>
        </div>
        <!--search form-->
            
        
    </section>
</header>