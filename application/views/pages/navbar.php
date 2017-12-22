<nav role="navigation" class="f_left f_xs_none d_xs_none" style="background: #59b8cc;">	
    <ul class="horizontal_list main_menu clearfix">
        <li class=" relative f_xs_none m_xs_bottom_5"><a href="<?php echo base_url();?>" class="tr_delay_hover color_light menu_font"><b>Home</b></a></li>
        <li class="relative f_xs_none m_xs_bottom_5"><a href="<?php echo base_url();?>all-products.html" class="tr_delay_hover color_light menu_font"><b>All Products <i class="fa fa-angle-down"></i></b></a>
        <!-- sub menu-->
        <div class="sub_menu_wrap top_arrow d_xs_none tr_all_hover clearfix r_corners w_xs_auto">
            <div class="f_left f_xs_none">
                <b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Mobile</b>
                <ul class="sub_menu first">
                    <?php 
                    $mobile_category_manufacturer=$this->Welcome_Model->selectCategoryManufacturer();
                    foreach ($mobile_category_manufacturer as $v_manufacturer)
                        {
                        ?>
                    <li><a class="color_dark tr_delay_hover" href="<?php echo base_url();?>manufacturer-product/<?php echo $v_manufacturer->manufacturer_id;?>"><?php echo $v_manufacturer->manufacturer_name;?></a></li>
                    <?php }?>
                </ul>
            </div>
            <div class="f_left m_left_10 m_xs_left_0 f_xs_none">
                <b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Computer</b>
                <ul class="sub_menu">
                   <?php 
                    $computer_category_manufacturer=$this->Welcome_Model->select_computer_category_manufacturer();
                    foreach ($computer_category_manufacturer as $v_manufacturer)
                        {
                        ?>
                    <li><a class="color_dark tr_delay_hover" href="<?php echo base_url();?>manufacturer-product/<?php echo $v_manufacturer->manufacturer_id;?>"><?php echo $v_manufacturer->manufacturer_name;?></a></li>
                    <?php }?>
                </ul>
            </div>
            <div class="f_left m_left_10 m_xs_left_0 f_xs_none">
                <b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Television</b>
                <ul class="sub_menu">
                    <?php 
                    $tel_category_manufacturer=$this->Welcome_Model->select_tel_category_manufacturer();
                    foreach ($tel_category_manufacturer as $v_manufacturer)
                        {
                        ?>
                    <li><a class="color_dark tr_delay_hover" href="<?php echo base_url();?>manufacturer-product/<?php echo $v_manufacturer->manufacturer_id;?>"><?php echo $v_manufacturer->manufacturer_name;?></a></li>
                    <?php }?>
                </ul>
            </div>
            <div class="f_left m_left_10 m_xs_left_0 f_xs_none">
                <b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Electronics</b>
                <ul class="sub_menu">
                    <?php 
                    $elec_category_manufacturer=$this->Welcome_Model->select_elec_category_manufacturer();
                    foreach ($elec_category_manufacturer as $v_manufacturer)
                        {
                        ?>
                    <li><a class="color_dark tr_delay_hover" href="<?php echo base_url();?>manufacturer-product/<?php echo $v_manufacturer->manufacturer_id;?>"><?php echo $v_manufacturer->manufacturer_name;?></a></li>
                    <?php }?>
                </ul>
            </div>
            <img src="<?php echo base_url();?>assets/images/img.jpg" width="300px;" class="d_sm_none f_right m_bottom_10" alt="">
        </div>
        </li>
        <?php
        $allPublishCategory=  $this->Welcome_Model->selectAllPublishCategory();
        
        foreach ($allPublishCategory as $v_category)
        {   
        ?>
        <li class="relative f_xs_none m_xs_bottom_5"><a href="<?php echo base_url();?>category-products/<?php echo $v_category->category_id;?>" class="tr_delay_hover color_light menu_font"><b><?php echo $v_category->category_name;?> <i class="fa fa-angle-down"></i></b></a>
            <!--sub menu-->
                <div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
                    <ul class="sub_menu">
                        <?php
                        $ci=$v_category->category_id;
                        $c_manufacturer=$this->Welcome_Model->select_c_manufacturer_info($ci);
                        foreach ($c_manufacturer as $v_manufacturer)
                        {
                        ?>
                        <li><a class="color_dark tr_delay_hover" href="<?php echo base_url();?>manufacturer-product/<?php echo $v_manufacturer->manufacturer_id;?>"><?php echo $v_manufacturer->manufacturer_name;?></a></li>
                        <?php }?>
                    </ul>
                </div>
        </li>
        <?php }?>
        <li class="relative f_xs_none m_xs_bottom_5"><a href="<?php echo base_url();?>contact.html" class="tr_delay_hover color_light menu_font"><b>Contact</b></a></li>
    </ul>
</nav>