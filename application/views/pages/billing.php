
<div class="page_content_offset">
    <div class="container">
        <div class="row clearfix">
            <!--left content column-->
            <section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
                <h2 class="color_dark tt_uppercase m_bottom_25">Billing Information</h2>
                <div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
                    <div class="row clearfix">
                        <div class="col-lg-9 col-md-9 col-sm-6 m_xs_bottom_30">
                            <h5 class="fw_medium m_bottom_15">Bill To</h5>
                            <form action="<?php echo base_url();?>save-billing" method="post">
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

    <!--                                            <option value="Australia">Bangladesh</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Austria">New Zealand</option>
                                                <option value="Austria">Canada</option>
                                                <option value="Austria">France</option>
                                                <option value="Austria">Germany</option>
                                                <option value="Austria">Japan</option>
                                                <option value="Austria">Singapore</option>
                                                <option value="Austria">Malaysiya</option>
                                                <option value="Austria">USA</option>
                                                <option value="Austria">India</option>
                                                <option value="Austria">Sri Lanka</option>-->
                                            </select>
                                        </div>
                                        
                                    </li>
                                    <li class="m_bottom_15">
                                        <label for="m_phone_1" class="d_inline_b m_bottom_5">Mobile</label>
                                        <input type="text" id="m_phone_1" name="mobile" class="r_corners full_width">
                                    </li>
                                    <li class="m_bottom_15">
                                        <label for="fax_1" class="d_inline_b m_bottom_5">Fax</label>
                                        <input type="text" id="fax_1" name="fax" class="r_corners full_width">
                                    </li>
                                    <li><button type="submit" class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Save Billing Info</button></li>
                                </ul>
                            </form>
                        </div>
                      
                    </div>
                </div>
            </section>
            <!--right column-->
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
                            Categories list
                            <ul class="categories_list">
                                <li class="active">
                                    <a href="#" class="f_size_large scheme_color d_block relative">
                                        <b>Women</b>
                                        <span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                    </a>
                                    second level
                                    <ul>
                                        <li class="active">
                                            <a href="#" class="d_block f_size_large color_dark relative">
                                                Dresses<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                            </a>
                                            third level
                                            <ul>
                                                <li><a href="#" class="color_dark d_block">Evening Dresses</a></li>
                                                <li><a href="#" class="color_dark d_block">Casual Dresses</a></li>
                                                <li><a href="#" class="color_dark d_block">Party Dresses</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="d_block f_size_large color_dark relative">
                                                Accessories<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d_block f_size_large color_dark relative">
                                                Tops<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="f_size_large color_dark d_block relative">
                                        <b>Men</b>
                                        <span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                    </a>
                                    second level
                                    <ul class="d_none">
                                        <li>
                                            <a href="#" class="d_block f_size_large color_dark relative">
                                                Shorts<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                            </a>
                                            third level
                                            <ul class="d_none">
                                                <li><a href="#" class="color_dark d_block">Evening</a></li>
                                                <li><a href="#" class="color_dark d_block">Casual</a></li>
                                                <li><a href="#" class="color_dark d_block">Party</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
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
                            <div class="clearfix m_bottom_15 relative cw_product">
                                <img src="images/bestsellers_img_1.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                                <a href="#" class="color_dark d_block bt_link">Ut tellus dolor dapibus</a>
                                <button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
                            </div>
                            <hr class="m_bottom_15">
                            <div class="clearfix m_bottom_25 relative cw_product">
                                <img src="images/bestsellers_img_2.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                                <a href="#" class="color_dark d_block bt_link">Elemenum vel</a>
                                <button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
                            </div>
                            <a href="#" class="color_dark"><i class="fa fa-heart-o m_right_10"></i>Go to Wishlist</a>
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
                            <div class="clearfix m_bottom_15">
                                <img src="images/new_products_img_1.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                                <a href="#" class="color_dark d_block m_bottom_5 bt_link">Ut tellus dolor dapibus</a>
                                <p class="scheme_color">$61.00</p>
                            </div>
                            <hr class="m_bottom_15">
                            <div class="clearfix m_bottom_15">
                                <img src="images/new_products_img_2.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                                <a href="#" class="color_dark d_block m_bottom_5 bt_link">Elementum vel</a>
                                <p class="scheme_color">$57.00</p>
                            </div>
                            <hr class="m_bottom_15">
                            <div class="clearfix m_bottom_5">
                                <img src="images/new_products_img_3.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                                <a href="#" class="color_dark d_block m_bottom_5 bt_link">Crsus eleifend elit</a>
                                <p class="scheme_color">$24.00</p>
                            </div>
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
        </div>
    </div>
</div>

