<h4 class="alert_info">This content will be displayed on your project page</h4>

<?php for ($i = 0; $i <= 3; $i++) : ?>
<article class="module width_full">
    <header><h3>Edit Summary Content</h3></header>
    <div class="module_content">
        <?php echo form_open_multipart('upload/do_upload'); ?>
        <fieldset>
            <label>Image <?php echo $i+1;?></label>
			<?php if(isset($current_info[$i])): echo "Current Image: ".$current_info[$i]->imageURL;
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

            if (isset($current_info[$i])): $summaryFormData['value'] = $current_info[$i]->description;
            endif;
            ?>

            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>
        <?php echo form_hidden('tab', $tab_index); ?>
        <?php echo form_hidden('position', $i); ?>
        </div>
        <footer>
            <div class="submit_link">
                <input type="submit" value="Publish" class="alt_btn">
                <?php echo form_reset('reset', 'Reset'); ?>
                <input type="button" value="Thumbnail" onClick="document.location.href='<?php echo base_url();
                echo index_page();
                echo "/cms/tn/$tab_index/$i"; ?>'">
                <input type="button" value="Delete" onClick="document.location.href='<?php echo base_url();echo index_page();echo "/upload/delete/$tab_index/$i"; ?>'">
                <?php echo form_close(); ?>
            </div>
        </footer>
</article>
<?php endfor; ?>
