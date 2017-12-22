<div class="page_content_offset">
    <div class="container">
        <div class="row clearfix">
            <!--left content column-->
            <section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
                <h2 class="tt_uppercase color_dark m_bottom_30">Payment</h2>
                <form action="<?php echo base_url();?>place-order" method="post">
                    <div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
                        <figure class="block_select clearfix relative m_bottom_15">
                            <input type="radio" checked name="payment_type" value="Paypal" class="d_none">
                            <img src="images/payment_logo.jpg" alt="" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10">
                            <figcaption class="d_table d_sm_block">
                                <div class="d_table_cell d_sm_block p_sm_right_0 p_right_45 m_mxs_bottom_5">
                                    <h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Paypal</h5>
                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turp. Donec sit amet eros. </p>
                                </div>
                            </figcaption>
                        </figure>
                        <hr class="m_bottom_20">
                        <figure class="block_select clearfix relative m_bottom_25">
                            <input type="radio" name="payment_type" value="CashOnDelivery" class="d_none">
                            <img src="images/payment_logo.jpg" alt="" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10">
                            <figcaption>
                                <h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Cash On Delivery</h5>
                                <p>Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. Mauris fermentum dictum magna. 
                                    Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.</p>
                            </figcaption>
                        </figure>
                        <button type="submit" class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Confirm Purchase</button>
                    </div>
                </form>
                <!--requests table-->
               
            </section>
            <!--right column-->
            <?php
            $this->load->view('pages/sidebar');
            ?>
        </div>
    </div>
</div>