
<div class="page_content_offset">
    <div class="container">
        <div class="row clearfix">
            <!--left content column-->
            <section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
                <h2 class="color_dark tt_uppercase m_bottom_25">Shipment Information</h2>
                <div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
                    <div class="row clearfix">
                        <div class="col-lg-9 col-md-9 col-sm-6 m_xs_bottom_30">
                            <h5 class="fw_medium m_bottom_15">Shipping To</h5>
                            <form action="<?php echo base_url(); ?>Checkout/saveShipping" method="post">
                                <ul>
                                    <li class="m_bottom_15">
                                        <label for="c_name_1" class="d_inline_b m_bottom_5">Company Name</label>
                                        <input type="text" id="c_name_1" name="company_name" class="r_corners full_width">
                                    </li>
                                    <li class="m_bottom_15">
                                        <label for="f_name_1" class="d_inline_b m_bottom_5 required">First Name</label>
                                        <input type="text" id="f_name_1" name="first_name" class="r_corners full_width">
                                    </li>
                                    <li class="m_bottom_15">
                                        <label for="l_name_1" class="d_inline_b m_bottom_5 required">Last Name</label>
                                        <input type="text" id="l_name_1" name="last_name" class="r_corners full_width">
                                    </li>
                                    <li class="m_bottom_15">
                                        <label for="l_name_1" class="d_inline_b m_bottom_5 required">Email</label>
                                        <input type="text" id="l_name_1" name="email" class="r_corners full_width">
                                    </li>
                                    <li class="m_bottom_15">
                                        <label for="address_1" class="d_inline_b m_bottom_5 required">Valid Address</label>
                                        <input type="text" id="address_1" name="address" class="r_corners full_width">
                                    </li>
<!--                                    <li class="m_bottom_15">
                                        <label for="address_1" class="d_inline_b m_bottom_5">NID (if have)</label>
                                        <input type="text" id="code_2" name="nid" class="r_corners full_width">
                                    </li>-->
                                    <li class="m_bottom_15">
                                        <label for="code_1" class="d_inline_b m_bottom_5 required">Zip / Postal Code</label>
                                        <input type="text" id="code_1" name="postal_code" class="r_corners full_width">
                                    </li>
                                    <li class="m_bottom_15">
                                        <label for="city_1" class="d_inline_b m_bottom_5 required">City</label>
                                        <input type="text" id="city_1" name="city" class="r_corners full_width">
                                    </li>
                                    <li class="m_bottom_15">
                                        <label class="d_inline_b m_bottom_5 required">Country</label>
                                        <!--product name select-->
                                        <div >
                                            <select name="country" class="select_title type_2 r_corners color_dark mw_0 col-lg-12" >
                                                <option value="">Please Select</option>
                                                <script type="text/javascript">
                                                    printCountryOptions();
                                                </script>
                                            </select>
                                        </div>
                                        
                                    </li>
                                    <li class="m_bottom_15">
                                        <label for="m_phone_1" class="d_inline_b m_bottom_5">Mobile</label>
                                        <input type="text" id="m_phone_1" name="mobile" class="r_corners full_width">
                                    </li>
                                    <li><button type="submit" class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Save Shipping Info</button></li>
                                </ul>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
            <!--right column-->
            <?php
            $this->load->view('pages/sidebar');
            ?>
        </div>
    </div>
</div>

