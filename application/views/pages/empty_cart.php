<section class="breadcrumbs">
    <div class="container">
        <ul class="horizontal_list clearfix bc_list f_size_medium">
            <li class="m_right_10 current"><a href="<?php echo base_url(); ?>" class="default_t_color"><i class="fa fa-home"></i><i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li class="m_right_10 current">Cart</li>
        </ul>
    </div>
</section>
<div class="page_content_offset">
    <div class="container">
        <div class="row clearfix">
            <section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30" style="background: #f9f9f9; padding-top: 2em;">
                <div class="container">
                    <h2 class="tt_uppercase color_dark m_bottom_25">Cart</h2>

                    <div>
                        <p class="color_dark">Your cart is empty! Please add to cart your best choice..</p>
                    </div>
                </div>
            </section>
            <!--...............Right Sidebar................-->
            <?php
            $this->load->view('pages/sidebar');
            ?>
        </div>
    </div>
</div>

<!--...............Right Sidebar................-->