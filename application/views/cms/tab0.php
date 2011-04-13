<h4 class="alert_info">This content will be displayed on your project page</h4>
<article class="module width_full">
    <header><h3>Edit Summary Content</h3></header>
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
                //'value' => $projectSummary,
                'rows' => '8'
            ); ?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>
        <?php echo form_hidden('tab', '0'); ?>
		<?php echo form_hidden('position', '0'); ?>
    </div>
    <footer>
        <div class="submit_link">
            <input type="submit" value="Publish" class="alt_btn">
            <input type="submit" value="Reset">
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
            ); ?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>
        <?php echo form_hidden('tab', '0'); ?>
		<?php echo form_hidden('position', '1'); ?>
    </div>
    <footer>
        <div class="submit_link">
            <input type="submit" value="Publish" class="alt_btn">
            <input type="submit" value="Reset">
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
            ); ?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>
        <?php echo form_hidden('tab', '0'); ?>
		<?php echo form_hidden('position', '2'); ?>
    </div>
    <footer>
        <div class="submit_link">
            <input type="submit" value="Publish" class="alt_btn">
            <input type="submit" value="Reset">
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
            ); ?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>
        <?php echo form_hidden('tab', '0'); ?>
		<?php echo form_hidden('position', '3'); ?>
    </div>
    <footer>
        <div class="submit_link">
            <input type="submit" value="Publish" class="alt_btn">
            <input type="submit" value="Reset">
            <?php echo form_close(); ?>
        </div>
    </footer>
</article>
