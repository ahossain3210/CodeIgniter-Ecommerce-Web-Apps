<div class="page_content_offset">
    <div class="container">
        <div class="row clearfix">
            <!--left content column-->
            <section class="col-lg-9 col-md-9 col-sm-9">
                <h2 class="color_dark m_bottom_30">Order List</h2>
                <!--orders list table-->
                <table class="table_type_3 responsive_table full_width r_corners wrapper shadow bg_light_color_1 m_bottom_30 t_align_l">
                    <thead>
                        <tr class="f_size_large">
                            <!--titles for td-->
                            <th>Order Number</th>
                            <th>Order Date</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Order Type</th>
                            <th>Unit Price</th>
                            <th>Sub total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if($orderInfo==NULL)
                        {
                            echo "You Have No Order To Display. Please Complete Your Order Quickly!";
                        }
                         else {
                        $i=1;
                        
                        foreach ($orderInfo as $v_order_info)
                        {
                        ?>
                        <tr>
                            <!--order number-->
                            <td data-title="Order Number"><a href="order_details.html" class="color_dark"><?php echo $i; $i++;?></a></td>
                            <!--order date-->
                            <td data-title="Order Status"><?php echo date('d-M-Y',  strtotime($v_order_info->order_date))?></td>
                            <td data-title="Order Date"><?php echo $v_order_info->product_name;?></td>
                            <td data-title="Order Date"><?php echo $v_order_info->product_sales_quantity;?></td>
                            <td data-title="Order Date"><?php echo $v_order_info->payment_type;?></td>
                            <td data-title="Order Date">BDT <?php echo $v_order_info->product_price;?></td>
                            <!--order status-->
                            <!--quanity-->
                            <td data-title="Total"><span class="f_size_large fw_medium scheme_color">BDT <?php echo $v_order_info->product_sales_quantity * $v_order_info->product_price;?></span></td>
                        </tr>
                         <?php } }?>
                    </tbody>
                </table>
                <table align="right" cellpadding="10">
                <tbody>
                    <tr>
                        <td colspan="5"></td>
                        <td class="right"><b>Total : BDT <?php echo $this->cart->total();?></b></td>
                        <td class="right number"></td>
                    </tr>
                    <tr>
                        <td colspan="5"></td>
                        <td class="right"><b>Shipment fee : <?php 
                        $shipment_fee=100;
                        echo 'BDT '.$shipment_fee;
                        ?>
                        </b></td>
                        <td class="right number"></td>
                    </tr>
                    <tr>
                        <td colspan="5"></td>
                        <td class="right"><b>Discount (10%):
                            <?php 
                            $total=$this->cart->total();
                            $discount=(10*$total)/100;
                            echo 'BDT '.$discount;
//                          ?>
                        </td>
                        <td class="right number"></td>
                    </tr>
                    <tr>
                        <td colspan="5"></td>
                        <td class="right"><b>Grand-Total : BDT <?php echo ($total+$shipment_fee)-$discount;?></b></td>
                        <td class="right number"></td>
                    </tr>
                </tbody>
            </table>
                
                <div>
                    <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0"><a href="<?php echo base_url();?>cancel-order/<?php echo $v_order_info->order_id;?>" class="color_light tr_all_hover">Cancel Order</a></button>
                </div>
            </section>
            <!--right column-->
            <?php $this->load->view('pages/sidebar');?>
        </div>
    </div>
</div>