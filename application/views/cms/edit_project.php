<!--<h4 class="alert_info">This content will be displayed on your bio page</h4>-->
<article class="module width_full">
    <header><h3>Edit Project</h3></header>
    <div class="module_content">
        <?php echo form_open('cms/do_update_project'); ?>

        <fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
            <label>Project Name</label>
            <?php echo form_input('project_name', $project_info->ProjectName, 'tabindex="1" maxlength="255" id="project_name" type="text" style="width:92%;"'); ?>
        </fieldset>
        <fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
            <label>Year</label>
            <?php echo form_input('project_year', $project_info->Year, 'tabindex="1" maxlength="255" id="project_year" type="text" style="width:92%;"'); ?>
        </fieldset><div class="clear"></div>

    </div>
    <footer>
        <div class="submit_link">
            <?php echo form_hidden('ProjID', $project_info->ProjID); ?>
            <?php echo form_submit('submit', 'Publish', 'class="alt_btn"'); ?>
            <input type="submit" value="Reset">
            <?php echo form_close(); ?>
        </div>
    </footer>
</article>