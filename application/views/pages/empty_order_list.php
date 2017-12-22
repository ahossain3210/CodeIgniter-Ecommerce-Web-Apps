<section class="breadcrumbs">
    <div class="container">
        <ul class="horizontal_list clearfix bc_list f_size_medium">
            <li class="m_right_10 current"><a href="<?php echo base_url(); ?>" class="default_t_color"><i class="fa fa-home"></i><i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li class="m_right_10 current">Order List</li>
        </ul>
    </div>
</section>

<div class="page_content_offset">
    <div class="container">
        <div class="row clearfix">
            <!--left content column-->
            <section class="col-lg-9 col-md-9 col-sm-9">
                <h2 class="color_dark m_bottom_30">Order List</h2>
                <h5 class="color_green m_bottom_30">
                    <?php
                    $message=$this->session->userdata('message');
                    if ($message)
                    {
                        echo $message;
                        $this->session->unset_userdata('message');
                    }
                    ?>
                </h5>
                <!--orders list table-->
                <?php
                echo "You have no order right now. Please complete your Order quickly ! Our stocks are limited"
                ?>
            </section>
            <!--right column-->
            <?php $this->load->view('pages/sidebar');?>
        </div>
    </div>
</div>