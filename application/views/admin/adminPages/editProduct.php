<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo base_url();?>dashboard.html">Dashboard</a>
        <i class="icon-angle-right"></i> 
    </li>
    <li>Edit Product</li>
</ul>
<h5 class="color_green">
    <?php
    $message=$this->session->userdata('message');
            if($message)
            {
                echo $message;
                $this->session->unset_userdata('message');
            }
    ?>
</h5>
<h5 class="scheme_color">
    <?php
    $errMessage=$this->session->userdata('errMessage');
            if($errMessage)
            {
                echo $errMessage;
                $this->session->unset_userdata('errMessage');
            }
    ?>
</h5>

<form class="form-horizontal" action="<?php echo base_url();?>dashboard/updateProduct" method="post" enctype="multipart/form-data">
    <fieldset>
        <div class="control-group">
            <label class="control-label" for="typeahead">Product Name</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" required="required" name="product_name" value="<?php echo $productInfo->product_name;?>" data-provide="typeahead" data-items="4" >
                <input type="hidden" class="span6 typeahead" id="typeahead" required="required" name="product_id" value="<?php echo $productInfo->product_id;?>" data-provide="typeahead" data-items="4" >
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="selectError">Category Name</label>
            <div class="controls">
                <select id="selectError" name="category_id">
                    <option>select</option>
                    <?php foreach ($allPublishCategory as $v_category)
                        {
                        if ($v_category->category_id == $productInfo->category_id)
                            {
                    ?>
                    <option value="<?php echo $v_category->category_id;?>" selected="true"><?php echo $v_category->category_name;?></option>

                    <?php }else { ?>
                          <option value="<?php echo $v_category->category_id;?>"><?php echo $v_category->category_name;?></option>
                    <?php } } ;?>     
                </select>
            </div>     
        </div> 
        <div class="control-group">
            <label class="control-label" for="selectError">Manufacturer Name</label>
            <div class="controls">
                <select id="selectError" name="manufacturer_id">
                    <option>select</option>
                    <?php
                     foreach ($allPublishManufacturer as $v_manufacturer)
                     {
                         if($v_manufacturer->manufacturer_id==$productInfo->manufacturer_id)
                         {
                         ?>
                    <option value="<?php echo $v_manufacturer->manufacturer_id?>" selected="true"><?php echo $v_manufacturer->manufacturer_name;?></option> 
                        <?php }else {?>
                                <option value="<?php echo $v_manufacturer->manufacturer_id?>"><?php echo $v_manufacturer->manufacturer_name;?></option> 
                         <?php }}?>
                </select>
            </div>     
        </div> 
        
        <div class="control-group">
            <label class="control-label" for="typeahead">Product Price</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" name="product_price" value="<?php echo $productInfo->product_price;?>" data-provide="typeahead" data-items="4" >
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="typeahead">Previous Price</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" name="previous_product_price" value="<?php echo $productInfo->previous_product_price;?>" data-provide="typeahead" data-items="4" >
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="typeahead">Product Quantity</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" name="product_quantity" value="<?php echo $productInfo->product_quantity;?>" data-provide="typeahead" data-items="4" >
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="selectError3">Is Featured</label>
            <div class="controls">
                <select id="selectError3" name="featured_product">
                    <?php if($product_info->featured_product=='featured') {?>
                    <option value="featured" selected="true">Featured</option>
                    <option value="unfeatured">Unfeatured</option>
                    <?php } else {?>
                    <option value="featured">Featured</option>
                    <option value="unfeatured" selected="true">Unfeatured</option>
                    <?php }?>
                </select>
            </div>
        </div> 
        <div class="control-group hidden-phone">
            <label class="control-label" for="textarea2">Short Description</label>
            <div class="controls">
                <textarea class="cleditor" name="product_short_description" id="textarea2" rows="3"><?php echo $productInfo->product_short_description;?></textarea>
            </div>
        </div>
        <div class="control-group hidden-phone">
            <label class="control-label" for="textarea2">Long Description</label>
            <div class="controls">
                <textarea class="cleditor" name="product_long_description" id="textarea2" rows="3"><?php echo $productInfo->product_long_description;?></textarea>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label"  for="selectError">Product Image</label>
            <div class="controls">
                <input type="file" name="product_image">
                <img src="<?php echo base_url().$productInfo->product_image?>" width="70px;">
            </div>     
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <button type="reset" class="btn">Cancel</button>
            </div>
        </div>   
    </fieldset>
</form>


