<section class="breadcrumbs">
    <div class="container">
        <ul class="horizontal_list clearfix bc_list f_size_medium">
            <li class="m_right_10 current"><a href="<?php echo base_url();?>" class="default_t_color"><i class="fa fa-home"></i><i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li>Contacts</li>
        </ul>
    </div>
</section>
<!--content-->
<div class="page_content_offset">
    <div class="container">
        <div class="row clearfix">
            <!--left content column-->
            <section class="col-lg-9 col-md-9 col-sm-9">
                <h2 class="tt_uppercase color_dark m_bottom_25">Contacts</h2>
                <div class="r_corners photoframe map_container shadow m_bottom_45">
                    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12098.04228269596!2d-74.00499255597757!3d40.70677554722762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2z0J3RjNGOLdCZ0L7RgNC6!5e0!3m2!1sru!2s!4v1393474990482"></iframe>-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.894847422034!2d90.38866281426533!3d23.751128884589004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bcd681372b%3A0x5c2b8755e4327004!2sBashundhara+City+Shopping+Complex!5e0!3m2!1sen!2sin!4v1505754299231"></iframe>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30">
                        <h2 class="tt_uppercase color_dark m_bottom_25">Contact Info</h2>
                        <ul class="c_info_list">
                            <li class="m_bottom_10">
                                <div class="clearfix m_bottom_15">
                                    <i class="fa fa-map-marker f_left color_dark"></i>
                                    <p class="contact_e">Bashundhara Shopping Complex<br>Level #01 (Block-A),<br>Panthopath, Dhaka-1215</p>
                                </div>
                            </li>
                            <li class="m_bottom_10">
                                <div class="clearfix m_bottom_10">
                                    <i class="fa fa-phone f_left color_dark"></i>
                                    <p class="contact_e">+88-01672-505856</p>
                                </div>
                            </li>
                            <li class="m_bottom_10">
                                <div class="clearfix m_bottom_10">
                                    <i class="fa fa-envelope f_left color_dark"></i>
                                    <a class="contact_e default_t_color" href="mailto:#">eshopper@infobd.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="clearfix">
                                    <i class="fa fa-clock-o f_left color_dark"></i>
                                    <p class="contact_e">Wednesday - Monday: 8:00 AM - 12:00 PM <br>Tuesdays: Closed</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 m_xs_bottom_30">
                        <h2 class="tt_uppercase color_dark m_bottom_25">Contact</h2>
                        <h5 class="scheme_color">
                            <?php
                            $message=$this->session->userdata('message');
                            if($message)
                            {
                                echo $message;
                                $this->session->unset_userdata('message');
                            }
                            ?>
                        </h5>
                        <p class="m_bottom_15">Always Stay Connected With Our Largest Community</p>
                        <form id="" action="<?php echo base_url();?>save-customer-message" method="post">
                            <ul>
                                <li class="clearfix m_bottom_15">
                                    <div class="f_left half_column">
                                        <label for="c_name" class="required d_inline_b m_bottom_5">Your Name</label>
                                        <input type="text" id="cf_name" name="c_name" class="full_width r_corners" required="">
                                    </div>
                                    <div class="f_left half_column">
                                        <label for="c_email" class="required d_inline_b m_bottom_5">Email</label>
                                        <input type="email" id="cf_email" name="c_email" class="full_width r_corners" required="">
                                    </div>
                                </li>
                                <li class="m_bottom_15">
                                    <label for="c_message" class="d_inline_b m_bottom_5 required">Message</label>
                                    <textarea id="cf_message" name="c_message" class="full_width r_corners" required="" placeholder="Type your message"></textarea>
                                </li>
                                <li>
                                    <button type="submit" class="button_type_4 bg_light_color_2 r_corners mw_0 tr_all_hover color_dark">Send</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </section>
            <!--right column-->
            <?php $this->load->view('pages/sidebar');?>
        </div>
    </div>
</div>