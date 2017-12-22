<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo base_url();?>dashboard.html">Dashboard</a>
        <i class="icon-angle-right"></i> 
    </li>
    <li>Add Product</li>
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

<form class="form-horizontal" action="<?php echo base_url();?>dashboard/saveProduct" method="post" enctype="multipart/form-data">
    <fieldset>
        <div class="control-group">
            <label class="control-label" for="typeahead">Product Name</label>
            <div class="controls">
                <input type="text" name="product_name" class="span6 typeahead" id="typeahead" required="required" data-provide="typeahead" data-items="4" >
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="selectError">Category Name</label>
            <div class="controls">
                <select id="selectError" name="category_id">
                    <option>select</option>
                    <?php foreach ($allPublishCategory as $v_category){?>
                        <option value="<?php echo $v_category->category_id;?>"><?php echo $v_category->category_name;?></option>
                    <?php }?>
                </select>
            </div>     
        </div> 
        <div class="control-group">
            <label class="control-label" for="selectError">Manufacturer Name</label>
            <div class="controls">
                <select id="selectError" name="manufacturer_id">
                    <option>select</option>
                    <?php foreach ($allPublishManufacturer as $v_manufacturer){?>
                        <option value="<?php echo $v_manufacturer->manufacturer_id;?>"><?php echo $v_manufacturer->manufacturer_name;?></option>
                    <?php }?>
                </select>
            </div>     
        </div> 
        
        <div class="control-group">
            <label class="control-label" for="typeahead">Product Price</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" name="product_price" data-provide="typeahead" data-items="4" >
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="typeahead">Previous Price</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" name="previous_product_price" data-provide="typeahead" data-items="4" >
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="typeahead">Product Quantity</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" name="product_quantity" data-provide="typeahead" data-items="4" >
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="selectError3">Is Featured</label>
            <div class="controls">
                <select id="selectError3" name="featured_product">
                    <option>Select</option>
                    <option value="featured">Feature</option>
                    <option value="unfeatured">Unfeature</option>

                </select>
            </div>
        </div> 
        <div class="control-group hidden-phone">
            <label class="control-label" for="textarea2">Product short Description</label>
            <div class="controls">
                <textarea class="cleditor" name="product_short_description" id="textarea2" rows="3"></textarea>
            </div>
        </div>
        <div class="control-group hidden-phone">
            <label class="control-label" for="textarea2">Product long Description</label>
            <div class="controls">
                <textarea class="cleditor" name="product_long_description" id="textarea2" rows="3"></textarea>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label"  for="selectError">Product Image</label>
            <div class="controls">
                <input type="file" name="product_image">
            </div>     
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Add Product</button>
                <button type="reset" class="btn">Cancel</button>
            </div>
        </div>   
    </fieldset>
</form>


