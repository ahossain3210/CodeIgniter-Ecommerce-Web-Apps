<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo base_url();?>dashboard.html">Dashboard</a>
        <i class="icon-angle-right"></i> 
    </li>
    <li>Manage manufacturer</li>
</ul>
<h5 style="color: green">
    <?php
    $message=$this->session->userdata('message');
            if($message)
            {
                echo $message;
                $this->session->unset_userdata('message');
            }
    ?>
</h5>
<h5 style="color: red;">
    <?php
    $errMessage=$this->session->userdata('errMessage');
            if($errMessage)
            {
                echo $errMessage;
                $this->session->unset_userdata('errMessage');
            }
    ?>
</h5>

<table class="table table-striped table-bordered bootstrap-datatable datatable">
    
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Category Name</th>
            <th>Image</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>   
         <?php
         foreach ($manufacturer_info as $v_manufacturer)
         {
         ?>   
        <tr>
            <td><?php echo $v_manufacturer->manufacturer_id;?></td>
            <td class="center"><?php echo $v_manufacturer->manufacturer_name;?></td>
            <td class="center"><?php echo $v_manufacturer->category_name;?></td>
            <td class="center"><img src="<?php echo base_url(). $v_manufacturer->manufacturer_image;?>" width="70px"></td>

            <td class="center">
                <?php
                if($v_manufacturer->publication_status==1)
                {
                ?>
                    <span class="label label-success">Active</span>
                <?php }
                 else {
                     ?>
                    <span class="label label-danger">Inactive</span>
                <?php }?>
            </td>
            <td class="center">
                <?php
                if($v_manufacturer->publication_status==1)
                {
                ?>
                <a class="btn btn-danger" href="<?php echo base_url();?>Dashboard/unpublishManufacturer/<?php echo $v_manufacturer->manufacturer_id;?>" title="Unpublish">
                    <i class="halflings-icon white thumbs-down"></i>  
                </a>
                <?php }
                 else {
                     ?>
                <a class="btn btn-success" href="<?php echo base_url();?>Dashboard/publishManufacturer/<?php echo $v_manufacturer->manufacturer_id;?>">
                    <i class="halflings-icon white thumbs-up"></i>  
                </a>
                <?php }?>
                <a class="btn btn-info" href="<?php echo base_url();?>Dashboard/editManufacturer/<?php echo $v_manufacturer->manufacturer_id;?>">
                    <i class="halflings-icon white edit"></i>  
                </a>
                <?php
                $access_level=$this->session->userdata('access_level');
                if($access_level==1)
                {   
                ?>
                <a class="btn btn-danger" href="<?php echo base_url();?>Dashboard/deleteManufacturer/<?php echo $v_manufacturer->manufacturer_id;?>">
                    <i class="halflings-icon white trash"></i> 
                </a>
                <?php }?>
            </td>
        </tr>
         <?php }?>
</table>            

