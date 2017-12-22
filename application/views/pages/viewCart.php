<section class="breadcrumbs">
    <div class="container">
        <ul class="horizontal_list clearfix bc_list f_size_medium">
            <li class="m_right_10 current"><a href="<?php echo base_url();?>" class="default_t_color"><i class="fa fa-home"></i><i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li>Cart</li>
        </ul>
    </div>
</section>
<div class="page_content_offset">
    <div class="container">
        <div class="row clearfix">
            <section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30" style="background: #f9f9f9; padding-top: 2em;">
                <div class="container">
                    <h2 class="tt_uppercase color_dark m_bottom_25">Cart</h2>
                    <!--cart table-->
                    <table class="table_type_4 responsive_table full_width r_corners wraper shadow t_align_l t_xs_align_c m_bottom_30" style="margin-bottom: 0;">
                        <thead>
                            <tr class="f_size_large">
                                <!--titles for td-->
                                <th>Product Image &amp; Name</th>
                                <th>Product Id</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Sub-Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
//            $contents=$this->cart->contents();
//            echo '<pre>';
//            print_r($contents);
                            foreach ($contents as $cartItems) {
                                ?>
                                <tr>
                                    <!--Product name and image-->
                                    <td data-title="Product Image &amp; name" class="t_md_align_c">
                                        <img src="<?php echo base_url() . $cartItems['image'] ?>"  style="width: 80px;"alt="" class="m_md_bottom_5 d_xs_block d_xs_centered">
                                        <a href="#" class="d_inline_b m_left_5 color_dark"><?php echo $cartItems['name'] ?></a>
                                    </td>
                                    <!--product key-->
                                    <td data-title="SKU"><?php echo $cartItems['id'] ?></td>
                                    <!--product price-->
                                    <td data-title="Price">
                                        <p class="f_size_large color_dark">Tk.<?php echo $cartItems['price'] ?></p>
                                    </td>
                                    <!--quanity-->
                            <form action="<?php echo base_url(); ?>cart/updateCart" method="post">
                                <td data-title="Quantity">
                                    <div class="clearfix quantity r_corners d_inline_middle f_size_medium color_dark m_bottom_10">
                                        <button class="bg_tr d_block f_left" data-direction="down">-</button>
                                        <input type="text" name="qty" value="<?php echo $cartItems['qty'] ?>" class="f_left">
                                        <input type="hidden" name="rowId" value="<?php echo $cartItems['rowid'] ?>" class="f_left">
                                        <button class="bg_tr d_block f_left" data-direction="up">+</button>
                                    </div>
                                    <div>
                                        <button style="width: 68px;" type="submit"><a href="#" class="color_dark"><i class="fa fa-check f_size_medium m_right_5"></i>Update</a></button>
                                        <br>
                                        <a href="<?php echo base_url(); ?>cart/deleteCart/<?php echo $cartItems['rowid'] ?>" class="color_dark"><i class="fa fa-times f_size_medium m_right_5"></i>Remove</a><br>
                                    </div>
                                </td>
                            </form>
                            <!--subtotal-->
                            <td data-title="Subtotal">
                                <p class="f_size_large fw_medium color_dark">Tk. <?php echo $cartItems['subtotal'] ?></p>
                            </td>
                            </tr>
                        <?php } ?>
                        <!--prices-->

                        <tr>
                            <td colspan="4">
                                <p class="fw_medium f_size_large t_align_r t_xs_align_c">Shipment Fee:</p>
                            </td>
                            <td colspan="1">
                                <p class="fw_medium f_size_large color_dark">Tk. 
                                    <?php
                                    $shipping_fee = 50;
                                    echo $shipping_fee;
                                    ?>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <p class="fw_medium f_size_large t_align_r t_xs_align_c">Discount (10%):</p>
                            </td>
                            <td colspan="1">
                                <p class="fw_medium f_size_large color_dark">Tk. 
                                    <?php
                                    $total = $this->cart->total();
                                    $discount = (10 * $total) / 100;
                                    echo $discount;
                                    ?>
                                </p>
                            </td>
                        </tr>
                        <!--total-->
                        <tr>
                            <td colspan="4" class="v_align_m d_ib_offset_large t_xs_align_l">
                                <!--coupon-->
                                <!--                    <form class="d_ib_offset_0 d_inline_middle half_column d_xs_block w_xs_full m_xs_bottom_5">
                                                        <input type="text" placeholder="Enter your coupon code" name="" class="r_corners f_size_medium">
                                                        <button class="button_type_4 r_corners bg_light_color_2 m_left_5 mw_0 tr_all_hover color_dark">Save</button>
                                                    </form>-->
                                <p class="fw_medium f_size_large t_align_r scheme_color p_xs_hr_0 d_inline_middle half_column d_ib_offset_normal d_xs_block w_xs_full t_xs_align_c">Total:</p>
                            </td>
                            <td colspan="1" class="v_align_m">
                                <p class="fw_medium f_size_large scheme_color m_xs_bottom_10"><b>Tk.
                    <?php
                    $grand_total = ($total + $shipping_fee) - $discount;

                    echo $grand_total;

                    $sdata = array();
                    $sdata['total'] = $grand_total;
                    $this->session->set_userdata($sdata);
                    ?></b></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div>
                        <ul style="float: right;">
                    <?php
                    $customer_id = $this->session->userdata('customer_id');
                    $billing_id = $this->session->userdata('billing_id');
                    $shipping_id = $this->session->userdata('shipping_id');
                    if ($customer_id && $billing_id && $shipping_id != NULL) {
                        ?>
                                <li style="float: left; margin: .5em 4em 1em 0;"><a href="<?php echo base_url(); ?>payment.html"><button class="button_type_4 r_corners bg_scheme_color color_light tr_delay_hover d_inline_b f_size_large">Checkout</button></a></li>
                            <?php } else { ?>
                                <li style="float: left; margin: .5em 4em 1em 0;"><a href="<?php echo base_url(); ?>customer-registration"><button class="button_type_4 r_corners bg_scheme_color color_light tr_delay_hover d_inline_b f_size_large">Checkout</button></a></li>
                            <?php } ?>


                            <li style="float: left; margin: .5em 21em 1em 0;"><a href="<?php echo base_url() . $this->session->userdata('cName') . '/' . $this->session->userdata('fName') . '/' . $this->session->userdata('pName'); ?>"><button class="button_type_4 r_corners bg_scheme_color color_light tr_delay_hover d_inline_b f_size_large">Shopping Continue</button></a></li>
                        </ul>
                    </div>
                </div>
                <!--tabs-->
            </section>
            
            <?php 
            $this->load->view('pages/sidebar');
            ?>
        </div>
    </div>
</div>
<!--...............Right Sidebar................-->


<!--...............Right Sidebar................-->