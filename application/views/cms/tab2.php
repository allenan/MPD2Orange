<h4 class="alert_info">This content will be displayed on your project page</h4>
<article class="module width_full">
    <header><h3>Edit Ideation Content</h3></header>
    <div class="module_content">
        <?php echo form_open_multipart('upload/do_upload'); ?>
        <fieldset>
            <label>Image 1*</label>
            <input type="file" name="userfile">
        </fieldset>

        <fieldset>
            <label>Summary Text</label>
            <?php
            $summaryFormData = array(
                'name' => 'description',
                'id' => 'description',
                'value' => $descriptions[0]->description,
                'rows' => '8'
            ); ?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>
        <?php echo form_hidden('tab', '2'); ?>
		<?php echo form_hidden('position', '0'); ?>
    </div>
    <footer>
        <div class="submit_link">
            <input type="submit" value="Publish" class="alt_btn">
            <?php echo form_reset('reset', 'Reset');?>
            <input type="button" value="Thumbnail" onClick="document.location.href='<?php echo base_url(); echo index_page(); echo '/'; ?>cms/tn/2/0'">
            <input type="button" value="Delete" onClick="document.location.href='<?php echo base_url(); echo index_page(); echo '/'; ?>upload/delete/2/0'">
            <?php echo form_close(); ?>
        </div>
    </footer>
</article>

<article class="module width_full">
    <header><h3>Edit Ideation Content</h3></header>
    <div class="module_content">
        <?php echo form_open_multipart('upload/do_upload'); ?>
        <fieldset>
            <label>Image 2*</label>
            <input type="file" name="userfile">
        </fieldset>

        <fieldset>
            <label>Summary Text</label>
            <?php
            $summaryFormData = array(
                'name' => 'description',
                'id' => 'description',
                'value' => $descriptions[1]->description,
                'rows' => '8'
            ); ?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>
        <?php echo form_hidden('tab', '2'); ?>
		<?php echo form_hidden('position', '1'); ?>
    </div>
    <footer>
        <div class="submit_link">
            <input type="submit" value="Publish" class="alt_btn">
            <?php echo form_reset('reset', 'Reset');?>
            <input type="button" value="Thumbnail" onClick="document.location.href='<?php echo base_url(); echo index_page(); echo '/'; ?>cms/tn/2/1'">
            <input type="button" value="Delete" onClick="document.location.href='<?php echo base_url(); echo index_page(); echo '/'; ?>upload/delete/2/1'">
            <?php echo form_close(); ?>
        </div>
    </footer>
</article>

<article class="module width_full">
    <header><h3>Edit Ideation Content</h3></header>
    <div class="module_content">
        <?php echo form_open_multipart('upload/do_upload'); ?>
        <fieldset>
            <label>Image 3*</label>
            <input type="file" name="userfile">
        </fieldset>

        <fieldset>
            <label>Summary Text</label>
            <?php
            $summaryFormData = array(
                'name' => 'description',
                'id' => 'description',
                'value' => $descriptions[2]->description,
                'rows' => '8'
            ); ?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>
        <?php echo form_hidden('tab', '2'); ?>
		<?php echo form_hidden('position', '2'); ?>
    </div>
    <footer>
        <div class="submit_link">
            <input type="submit" value="Publish" class="alt_btn">
           <?php echo form_reset('reset', 'Reset');?>
            <input type="button" value="Thumbnail" onClick="document.location.href='<?php echo base_url(); echo index_page(); echo '/'; ?>cms/tn/2/2'">
            <input type="button" value="Delete" onClick="document.location.href='<?php echo base_url(); echo index_page(); echo '/'; ?>upload/delete/2/2'">
            <?php echo form_close(); ?>
        </div>
    </footer>
</article>

<article class="module width_full">
    <header><h3>Edit Ideation Content</h3></header>
    <div class="module_content">
        <?php echo form_open_multipart('upload/do_upload'); ?>
        <fieldset>
            <label>Image 4*</label>
            <input type="file" name="userfile">
        </fieldset>

        <fieldset>
            <label>Summary Text</label>
            <?php
            $summaryFormData = array(
                'name' => 'description',
                'id' => 'description',
                'value' => $descriptions[3]->description,
                'rows' => '8'
            ); ?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>
        <?php echo form_hidden('tab', '2'); ?>
		<?php echo form_hidden('position', '3'); ?>
    </div>
    <footer>
        <div class="submit_link">
            <input type="submit" value="Publish" class="alt_btn">
            <?php echo form_reset('reset', 'Reset');?>
            <input type="button" value="Thumbnail" onClick="document.location.href='<?php echo base_url(); echo index_page(); echo '/'; ?>cms/tn/2/3'">
            <input type="button" value="Delete" onClick="document.location.href='<?php echo base_url(); echo index_page(); echo '/'; ?>upload/delete/2/3'">
            <?php echo form_close(); ?>
        </div>
    </footer>
</article>