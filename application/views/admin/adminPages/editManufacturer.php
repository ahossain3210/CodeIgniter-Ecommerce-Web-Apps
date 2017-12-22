<ul class="breadcrumb">
    <li>
        <i class="#"></i>
        <a href="<?php echo base_url();?>dashboard.html">Dashboard</a>
        <i class="icon-angle-right"></i> 
    </li>
    <li>Edit Manufacturer</li>
</ul>

<form class="form-horizontal" action="<?php echo base_url(); ?>dashboard/updateManufacturer" enctype="multipart/form-data" method="post">
    <fieldset>
        <div class="control-group">
            <label class="control-label" for="typeahead">Manufacturer Name</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" name="manufacturer_name" value="<?php echo $manufacturerInfo->manufacturer_name;?>" data-provide="typeahead" data-items="4" >
                <input type="hidden" class="span6 typeahead" id="typeahead" name="manufacturer_id" value="<?php echo $manufacturerInfo->manufacturer_id;?>" data-provide="typeahead" data-items="4" >
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="selectError">Category Name</label>
            <div class="controls">
                <select id="selectError" name="category_id">
                    <?php foreach ($allPublishCategory as $v_category)
                        {
                        if($v_category->category_id==$manufacturerInfo->category_id)
                        {
                        ?>
                    <option value="<?php echo $v_category->category_id;?>" selected="true"><?php echo $v_category->category_name;?></option>
                        <?php } else {?>
                    <option value="<?php echo $v_category->category_id;?>"><?php echo $v_category->category_name;?></option>
                        <?php } }?>
                </select>
            </div> 
        </div> 
        <div class="control-group hidden-phone">
            <label class="control-label" for="textarea2">Manufacturer Description</label>
            <div class="controls">
                <textarea class="cleditor" name="manufacturer_description" id="textarea2" rows="3"><?php echo $manufacturerInfo->manufacturer_description;?></textarea>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="selectError">Product Image</label>
            <div class="controls">
                <input type="file" name="manufacturer_image">
                <img src="<?php echo base_url(). $manufacturerInfo->manufacturer_image;?>" width="70px">
            </div> 
        </div>    
        <div class="control-group">
            <label class="control-label" for="selectError">Publication Status</label>
            <div class="controls">
                <select id="selectError" name="publication_status">
                    <option>select</option>
                    <?php if ($manufacturerInfo->publication_status == 1 ){?>
                        <option value="1" selected="true">Publish</option>
                        <option value="0">Unpublish</option>
                    <?php }else { ?>
                        <option value="1">Publish</option>
                        <option value="0" selected="true">Unpublish</option>                            
                    <?php }?>
                </select>
            </div>     
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="reset" class="btn">Cancel</button>
            </div>
        </div>   
    </fieldset>
</form>