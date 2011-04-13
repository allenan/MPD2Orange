<h4 class="alert_info">This content will be displayed on your bio page</h4>
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
