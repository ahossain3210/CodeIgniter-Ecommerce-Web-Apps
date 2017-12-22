<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Manage Order</a></li>
</ul>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Product Name</th>
                        <th>Order Quantity</th>
                        <th>Total Order</th>
                        <th>Payment Method</th>
                        <th>Order Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    foreach ($orderInfo as $v_order){?>
                    <tr>
                        <td class="center"><?php echo $v_order->order_id;?></td>
                        <td class="center"><?php echo $v_order->customer_name;?></td>
                        <td class="center"><?php echo $v_order->product_name;?></td>
                        <td class="center"><?php echo $v_order->product_sales_quantity;?></td>
                        <td class="center">Tk. <?php echo $v_order->order_total;?></td>
                        <td class="center"><?php echo $v_order->payment_type;?></td>
                        <td class="center"><?php echo $v_order->order_status;?></td>
                        <td class="center">
                            <a class="btn btn-success" href="<?php echo base_url();?>Dashboard/viewInvoice/<?php echo $v_order->order_id;?>">
                                <i class="halflings-icon white zoom-in" title="View Invoice"></i>  
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit" title="Edit Invoice"></i>  
                            </a>
                            <a class="btn btn-success" href="<?php echo base_url();?>Dashboard/downloadInvoice/<?php echo $v_order->order_id;?>">
                                <i class="halflings-icon white download" title="Download Invoice"></i>  
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash" title="Delete Invoice"></i> 
                            </a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div>