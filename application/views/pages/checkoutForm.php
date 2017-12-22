<section class="breadcrumbs">
    <div class="container">
        <ul class="horizontal_list clearfix bc_list f_size_medium">
            <li class="m_right_10 current"><a href="<?php echo base_url();?>" class="default_t_color"><i class="fa fa-home"></i><i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li class="m_right_10 current">Checkout</li>
        </ul>
    </div>
</section>
<div class="page_content_offset">
    <div class="container">
        <div class="row clearfix">
            <!--left content column-->
            <section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
                <div class="tabs m_bottom_45">
                    <!--tabs navigation-->
                    <h4 style="color: red;">
                        <?php echo validation_errors('');?>
                    </h4>
                    <nav>
                        <ul class="tabs_nav horizontal_list clearfix">
                            <li><a href="#tab-1" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Login</a></li>
                            <li><a href="#tab-2" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Sign Up</a></li>
                        </ul>
                    </nav>
                    <section class="tabs_content shadow r_corners">
                        <div id="tab-1">
                            <!--login form-->
                            <h5 style="color: red;">
                                <?php
                                $message=$this->session->userdata('message');
                                if($message)
                                {
                                    echo $message;
                                    $this->session->unset_userdata('message');
                                }
                                ?>
                            </h5>
                            <h5 class="fw_medium m_bottom_15 colorpicker_focus">Not registered? Please Sign up first.</h5>
                            <form action="<?php echo base_url();?>Checkout/customerLogin" method="post">
                                <ul>
                                    <li class="clearfix m_bottom_15">
                                        <div class="half_column type_2 f_left">
                                            <label for="username" class="m_bottom_5 d_inline_b">Username</label>
                                            <input type="text" id="username" name="customer_email" class="r_corners full_width m_bottom_5">
                                            <a href="#" class="color_dark f_size_medium">Forgot your username?</a>
                                        </div>
                                        <div class="half_column type_2 f_left">
                                            <label for="pass" class="m_bottom_5 d_inline_b">Password</label>
                                            <input type="password" id="pass" name="customer_password" class="r_corners full_width m_bottom_5">
                                            <a href="#" class="color_dark f_size_medium">Forgot your password?</a>
                                        </div>
                                    </li>
                                    <li><button type="submit" class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Log In</button></li>
                                </ul>
                            </form>
                        </div>
                        <div id="tab-2">
                            <?php echo form_open('save-customer-info'); ?>
                            <!--<form action="<?php //echo base_url();?>Checkout/saveCustomer" method="post">-->
                                <ul>
                                    <li class="clearfix m_bottom_15">
                                        <div class="half_column type_2 f_left">
                                            <label for="d_name" class="m_bottom_5 d_inline_b required">Full Name</label>
                                            <input type="text" id="d_name" name="customer_name" class="r_corners full_width">
                                        </div>
                                    </li>
                                    <li class="clearfix m_bottom_15">
                                        <div class="half_column type_2 f_left">
                                            <label for="u_email" class="m_bottom_5 d_inline_b required">Email</label>
                                            <input type="email" id="u_email" name="customer_email" onblur="makerequest(this.value,'getValue')" class="r_corners full_width"><span id="getValue"></span>
                                        </div>
                                    </li>
                                    <li class="clearfix m_bottom_15">
                                        <div class="half_column type_2 f_left">
                                            <label for="u_pass" class="m_bottom_5 d_inline_b required">Password</label>
                                            <input type="password" id="u_pass" name="customer_password" class="r_corners full_width">
                                        </div>
                                    </li>
                                    <li class="clearfix m_bottom_15">
                                        <div class="half_column type_2 f_left">
                                            <label for="u_repeat_pass" class="m_bottom_5 d_inline_b">Confirm Password</label>
                                            <input type="password" id="u_repeat_pass" name="con_cassword" class="r_corners full_width">
                                        </div>
                                    </li>
                                    <li><button type="submit" class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Register</button></li>
                                </ul>
                            </form>
                        </div>
                    </section>
                </div>
            </section>
            <!--right column-->
            <?php
            $this->load->view('pages/sidebar');
            ?>
        </div>
    </div>
</div>