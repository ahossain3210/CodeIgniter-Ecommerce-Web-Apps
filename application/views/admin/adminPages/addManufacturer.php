<ul class="breadcrumb">
    <li>
        <i class="#"></i>
        <a href="<?php echo base_url();?>dashboard.html">Dashboard</a>
        <i class="icon-angle-right"></i> 
    </li>
    <li>
        Add Manufacturer 
    </li>
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

<form class="form-horizontal" action="<?php echo base_url();?>Dashboard/saveManufacturer" enctype="multipart/form-data" method="post">
    <fieldset>
        <div class="control-group">
            <label class="control-label" for="typeahead">Manufacturer Name</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" required="required" name="manufacturer_name" data-provide="typeahead" data-items="4" >
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="selectError">Category Name</label>
            <div class="controls">
                <select id="selectError" name="category_id">
                    <option>Select</option>
                    <?php foreach ($allPublishCategory as $v_category){?>
                    <option value="<?php echo $v_category->category_id;?>"><?php echo $v_category->category_name;?></option>
                    <?php }?>
                </select>
            </div> 
        </div>   
        <div class="control-group hidden-phone">
            <label class="control-label" for="textarea2">Manufacturer Description</label>
            <div class="controls">
                <textarea class="cleditor" name="manufacturer_description" id="textarea2" rows="3"></textarea>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label"  for="selectError">Product Image</label>
            <div class="controls">
                <input type="file" name="manufacturer_image">
            </div>     
        </div>     
        <div class="control-group">
            <label class="control-label" for="selectError">Publication Status</label>
            <div class="controls">
                <select id="selectError" name="publication_status">
                    <option>select</option>
                    <option value="1">Publish</option>
                    <option value="0">Unpublish</option>
                </select>
            </div>     
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="reset" class="btn">Cancel</button>
            </div>
        </div>   
    </fieldset>
</form>

