<h4 class="alert_info">This content will be displayed on your project page</h4>
<article class="module width_full">
    <header><h3>Edit Summary Content</h3></header>
    <div class="module_content">
        <?php echo form_open_multipart('upload/do_upload'); ?>
        <fieldset>
            <label>Image 1*</label>
			<?php if(isset($current_info[0])): echo "Current Image: ".$current_info[0]->imageURL;
			else : echo "No Image set.";
			endif; ?> 
            <input type="file" name="userfile" >
        </fieldset>

        <fieldset>
            <label>Summary Text</label>
            <?php
            $summaryFormData = array(
                'name' => 'description',
                'id' => 'description',
                'rows' => '8'
            );
			if(isset($current_info[0])): $summaryFormData['value'] = $current_info[0]->description;
			endif;
			?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>
        <?php echo form_hidden('tab', '0'); ?>
		<?php echo form_hidden('position', '0'); ?>
    </div>
    <footer>
        <div class="submit_link">
            <input type="submit" value="Publish" class="alt_btn">
<!--            <input type="submit" value="Reset">-->
            <?php echo form_reset('reset', 'Reset');?>
            <input type="button" value="Thumbnail" onClick="document.location.href='<?php echo base_url(); echo index_page(); echo '/'; ?>cms/tn/0/0'">
            <input type="button" value="Delete" onClick="document.location.href='<?php echo base_url(); echo index_page(); echo '/'; ?>upload/delete/0/0'">
            <?php echo form_close(); ?>
        </div>
    </footer>
</article>

<article class="module width_full">
    <header><h3>Edit Summary Content</h3></header>
    <div class="module_content">
        <?php echo form_open_multipart('upload/do_upload'); ?>
        <fieldset>
            <label>Image 2*</label>
			<?php if(isset($current_info[1])): echo "Current Image: ".$current_info[1]->imageURL;
			else : echo "No Image set.";
			endif; ?> 
            <input type="file" name="userfile">
        </fieldset>

        <fieldset>
            <label>Summary Text</label>
            <?php
            $summaryFormData = array(
                'name' => 'description',
                'id' => 'description',
                //'value' => $projectSummary,
                'rows' => '8'
            );
			if(isset($current_info[1])): $summaryFormData['value'] = $current_info[1]->description;
			endif;?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>
        <?php echo form_hidden('tab', '0'); ?>
		<?php echo form_hidden('position', '1'); ?>
    </div>
    <footer>
        <div class="submit_link">
            <input type="submit" value="Publish" class="alt_btn">
            <input type="submit" value="Reset">
            <input type="button" value="Thumbnail" onClick="document.location.href='<?php echo base_url(); echo index_page(); echo '/'; ?>cms/tn/0/1'">
            <input type="button" value="Delete" onClick="document.location.href='<?php echo base_url(); echo index_page(); echo '/'; ?>upload/delete/0/1'">
            <?php echo form_close(); ?>
        </div>
    </footer>
</article>

<article class="module width_full">
    <header><h3>Edit Summary Content</h3></header>
    <div class="module_content">
        <?php echo form_open_multipart('upload/do_upload'); ?>
        <fieldset>
            <label>Image 3*</label>
			<?php if(isset($current_info[2])): echo "Current Image: ".$current_info[2]->imageURL;
			else : echo "No Image set.";
			endif; ?> 
            <input type="file" name="userfile">
        </fieldset>

        <fieldset>
            <label>Summary Text</label>
            <?php
            $summaryFormData = array(
                'name' => 'description',
                'id' => 'description',
                //'value' => $projectSummary,
                'rows' => '8'
            );
			if(isset($current_info[2])): $summaryFormData['value'] = $current_info[2]->description;
			endif;?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>
        <?php echo form_hidden('tab', '0'); ?>
		<?php echo form_hidden('position', '2'); ?>
    </div>
    <footer>
        <div class="submit_link">
            <input type="submit" value="Publish" class="alt_btn">
            <input type="submit" value="Reset">
            <input type="button" value="Thumbnail" onClick="document.location.href='<?php echo base_url(); echo index_page(); echo '/'; ?>cms/tn/0/2'">
            <input type="button" value="Delete" onClick="document.location.href='<?php echo base_url(); echo index_page(); echo '/'; ?>upload/delete/0/2'">
            <?php echo form_close(); ?>
        </div>
    </footer>
</article>

<article class="module width_full">
    <header><h3>Edit Summary Content</h3></header>
    <div class="module_content">
        <?php echo form_open_multipart('upload/do_upload'); ?>
        <fieldset>
            <label>Image 4*</label>
			<?php if(isset($current_info[3])): echo "Current Image: ".$current_info[3]->imageURL;
			else : echo "No Image set.";
			endif; ?> 
            <input type="file" name="userfile">
        </fieldset>

        <fieldset>
            <label>Summary Text</label>
            <?php
            $summaryFormData = array(
                'name' => 'description',
                'id' => 'description',
                //'value' => $projectSummary,
                'rows' => '8'
            );
			if(isset($current_info[3])): $summaryFormData['value'] = $current_info[3]->description;
			endif;?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>
        <?php echo form_hidden('tab', '0'); ?>
		<?php echo form_hidden('position', '3'); ?>
    </div>
    <footer>
        <div class="submit_link">
            <input type="submit" value="Publish" class="alt_btn">
            <input type="submit" value="Reset">
            <input type="button" value="Thumbnail" onClick="document.location.href='<?php echo base_url(); echo index_page(); echo '/'; ?>cms/tn/0/3'">
            <input type="button" value="Delete" onClick="document.location.href='<?php echo base_url(); echo index_page(); echo '/'; ?>upload/delete/0/3'">
            <?php echo form_close(); ?>
        </div>
    </footer>
</article>
