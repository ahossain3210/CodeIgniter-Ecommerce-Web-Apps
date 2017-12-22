<ul class="breadcrumb">
    <li>
        <a href="<?php echo base_url();?>dashboard.html"><i class="icon-home"></i></a><i class="icon-angle-right"></i>
    </li>
    <li>Add Blog</li>
</ul>
<div class="row-fluid sortable">

    <h2 style="color: green">
        <?php
        $message=$this->session->userdata('message');
        if($message)
        {
            echo $message;
            $this->session->unset_userdata('message');
        }
        ?>
    </h2>
    
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url(); ?>Dashboard/saveBlog" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Blog Title </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="blogTitle"  data-provide="typeahead" data-items="4">                        
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category Name </label>
                        <div class="controls">
                            <select id="selectError3" name="categoryId">
                                <option>Select</option>
                                <?php
                                        foreach ($allPublishCategory as $v_category)
                                        {
                                ?>
                                <option><?php echo $v_category->categoryName;?></option> 
                                        <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Blog Short Description</label>
                        <div class="controls">
                            <textarea class="cleditor" id="textarea2" name="blogShortDescription" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Blog Long Description</label>
                        <div class="controls">
                            <textarea class="cleditor" id="textarea2" name="blogLongDescription" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Blog Image </label>
                        <div class="controls">
                            <input type="file" name="blogImage">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Publication Status</label>
                        <div class="controls">
                            <select id="selectError3" name="publicationStatus">
                                <option>Select</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>

                            </select>
                        </div>
                    </div>   

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" style="padding: 6px 30px;">Add</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->