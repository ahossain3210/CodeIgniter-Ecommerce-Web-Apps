<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Manage Blogs</a></li>
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
                        <th>Blog Id</th>
                        <th>Blog Title</th>
                        <th>Blog Short Description</th>
                        <th>Blog Long Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    foreach ($selectAllBlog as $v_blog) {
                        ?>
                        <tr>
                            <td><?php echo $v_blog->blog_id; ?></td>
                            <td class="center"><?php echo $v_blog->blog_title; ?></td>
                            <td class="center"><?php echo $v_blog->blog_short_description; ?></td>
                            <td class="center"><?php echo $v_blog->blog_long_description; ?></td>
                            <td class="center">
                                <?php
                                if ($v_blog->publication_status == 1) {
                                    ?>
                                    <span class="label label-success">Active</span>
                                    <?php
                                } else {
                                    ?> 
                                    <span class="label label-danger">Inactive</span>
                                <?php } ?>


                            </td>
                            <td class="center">
                                <?php
                                if ($v_blog->publication_status == 1) {
                                    ?>    
                                <a class="btn btn-danger" href="<?php echo base_url();?>Dashboard/unpublishBlog/<?php echo $v_blog->blog_id;?>">
                                        <i class="halflings-icon white thumbs-down"></i> 
                                    </a>
                                <?php
                                } else {
                                    ?>
                                    <a class="btn btn-success" href="<?php echo base_url();?>Dashboard/publishBlog/<?php echo $v_blog->blog_id;?>">
<!--                                        <i class="halflings-icon white thumbs_up"></i>-->
                                        <i class="halflings-icon white thumbs-up"></i>
                                    </a>
                                    <?php } ?>    
                                    <a class="btn btn-info" href="<?php echo base_url();?>Dashboard/editBlog/<?php echo $v_blog->blog_id;?>">
                                        <i class="halflings-icon white edit"></i>  
                                    </a>
                                    <?php
                                    $access_level=$this->session->userdata('access_level');
                                    if($access_level==1)
                                    {   
                                    ?>
                                    <a class="btn btn-danger" href="<?php echo base_url();?>Dashboard/deleteBlog/<?php echo $v_blog->blog_id;?>">
                                        <i class="halflings-icon white trash"></i> 
                                    </a>
                                    <?php }?>
                                </td>
                            </tr>
                            <?php } ?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->
</div>