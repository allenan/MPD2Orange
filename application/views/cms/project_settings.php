<h4 class="alert_info">Edit the main settings for your group's project</h4>
<article class="module width_full">
    <header><h3>Edit Project Settings</h3></header>
    <div class="module_content">
        <?php echo form_open('cms/update_project'); ?>
        <fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
            <label>Project Title</label>
            <?php echo form_input('projectName', $projectName, 'tabindex="1" maxlength="255" id="projectName" type="text" style="width:92%;"'); ?>
        </fieldset>
        <div class="clear"></div>
        <fieldset>
            <label>Summary</label>
            <?php
            $summaryFormData = array(
                'name' => 'projectSummary',
                'id' => 'projectSummary',
                'value' => $projectSummary,
                'rows' => '8'
            ); ?>
            <?php echo form_textarea($summaryFormData); ?>
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
