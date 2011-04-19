<h4 class="alert_info">This content will be displayed on your bio page</h4>
<article class="module width_full">
    <header><h3>Edit Bio Image</h3></header>
    <div class="module_content">
        <?php echo form_open_multipart('upload/do_upload'); ?>
        <fieldset>
            <label>Bio Image</label>
			<?php if(isset($current_info[$position])): echo "Current Image: ".$current_info[$position]->imageURL;
			else : echo "No Image set. You must select an image to appear on project page.";
			endif; ?>
            <input type="file" name="userfile" >
        </fieldset>
        <?php echo form_hidden('tab', 4); ?>
        <?php echo form_hidden('position', $position); ?>
        </div>
        <footer>
            <div class="submit_link">
                <input type="submit" value="Publish" class="alt_btn">
                <?php echo form_reset('reset', 'Reset'); ?>
                <input type="button" value="Thumbnail" onClick="document.location.href='<?php echo base_url();
                echo index_page();
                echo "/cms/tn/4/$position"; ?>'">
                <input type="button" value="Delete" onClick="document.location.href='<?php echo base_url();echo index_page();echo "/upload/delete/4/$position"; ?>'">
                <?php echo form_close(); ?>
            </div>
        </footer>
</article>
<article class="module width_full">
    <header><h3>Edit Bio Information</h3></header>
    <div class="module_content">
        <?php echo form_open('cms/update_bio'); ?>

        <fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
            <label>Industry</label>
<!--            <input type="text" style="width:92%;" value="">-->
            <?php echo form_input('Industry', $bio_content[0], 'tabindex="1" maxlength="255" id="Industry" type="text" style="width:92%;"'); ?>
        </fieldset>
        <fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
            <label>Employer</label>
<!--            <input type="text" style="width:92%;">-->
            <?php echo form_input('Employer', $bio_content[1], 'tabindex="1" maxlength="255" id="Employer" type="text" style="width:92%;"'); ?>
        </fieldset><div class="clear"></div>
        <fieldset>
            <label>Bio Content</label>
            <?php
            $contentFormData = array(
                'name' => 'info',
                'id' => 'info',
                'value' => $bio_content[2],
                'rows' => '8'
            ); ?>
            <?php echo form_textarea($contentFormData); ?>
        </fieldset>

        <fieldset style="width:28%;">
            <label>Facebook</label>
            <?php echo form_input('facebook', $bio_content[3], 'tabindex="1" maxlength="255" id="facebook" type="text" style="width:92%;"'); ?>
        </fieldset>
        <fieldset style="width:28%;">
            <label>Twitter</label>
            <?php echo form_input('twitter', $bio_content[4], 'tabindex="1" maxlength="255" id="twitter" type="text" style="width:92%;"'); ?>
        </fieldset>
        <fieldset style="width:28%;">
            <label>LinkedIn</label>
            <?php echo form_input('linkedin', $bio_content[5], 'tabindex="1" maxlength="255" id="linkedin" type="text" style="width:92%;"'); ?>
        </fieldset>
		
    </div>
    <footer>
        <div class="submit_link">
            <?php echo form_submit('submit', 'Publish', 'class="alt_btn"'); ?>
            <input type="submit" value="Reset">
            <?php echo form_close(); ?>
        </div>
    </footer>
</article>
