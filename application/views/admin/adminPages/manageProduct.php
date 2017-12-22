<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo base_url();?>dashboard.html">Dashboard</a>
        <i class="icon-angle-right"></i> 
    </li>
    <li>Manage Product</li>
</ul>
<table class="table table-striped table-bordered bootstrap-datatable datatable">
    <thead>
        <tr>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Manufacture Name</th>
            <th>Category Name</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
            <th>Product Image</th>
            <th>Product Status</th>
            <th>Actions</th>
        </tr>
    </thead> 
    <?php 
    $i=1;
    foreach ($selectProduct as $v_product)
    {?>
        <tr>
            <td><?php echo $v_product->product_id;?></td>
            <td class="center"><?php echo $v_product->product_name;?></td>
            <td class="center"><?php echo $v_product->manufacturer_name;?></td>
            <td class="center"><?php echo $v_product->category_name;?></td>
            <td class="center">BDT <?php echo $v_product->product_price;?></td>
            <td class="center"><?php echo $v_product->product_quantity;?></td>
            <td class="center"><img  src="<?php echo base_url().$v_product->product_image;?>" width="70px"></td>
            <td class="center">
                <?php if($v_product->featured_product=='featured'){?>
                <span class="label label-success">Featured</span>
                <?php } else {?>
                <span class="label label-danger">Unfeatured</span>
                <?php }?>
            </td>
            
            
            <td class="center">
                <?php if($v_product->featured_product=='featured'){?>
                <a class="btn btn-danger" title="Unfeature" href="<?php echo base_url();?>dashboard/unpublishFeatureProduct/<?php echo $v_product->product_id;?>">
                    <i class="halflings-icon white thumbs-down"></i>  
                </a>
                <?php } else {?>
                <a class="btn btn-success" title="Feature" href="<?php echo base_url();?>dashboard/publishFeatureProduct/<?php echo $v_product->product_id;?>">
                    <i class="halflings-icon white thumbs-up"></i>  
                </a>
                <?php }?>
                <a class="btn btn-info" title="Edit" href="<?php echo base_url();?>dashboard/editProduct/<?php echo $v_product->product_id;?>">
                    <i class="halflings-icon white edit"></i>  
                </a>
                <?php
                $access_level=$this->session->userdata('access_level');
                if($access_level==1)
                {   
                ?>
                <a class="btn btn-danger" title="Delete" href="<?php echo base_url();?>dashboard/deleteProduct/<?php echo $v_product->product_id;?>">
                    <i class="halflings-icon white trash"></i> 
                </a>
                <?php }?>
            </td>
        </tr>
    <?php }?>
</table>            

