<h4 class="alert_info">This content will be displayed on your bio page</h4>
<article class="module width_full">
    <header><h3>Add a New User</h3></header>
    <div class="module_content">
        <?php echo form_open('cms/do_add_user'); ?>

        <fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
            <label>First Name</label>
            <?php echo form_input('first', "", 'tabindex="1" maxlength="255" id="first" type="text" style="width:92%;"'); ?>
        </fieldset>
        <fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
            <label>Last Name</label>
            <?php echo form_input('last', "", 'tabindex="1" maxlength="255" id="last" type="text" style="width:92%;"'); ?>
        </fieldset><div class="clear"></div>
        <fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
            <label>Graduation Year</label>
            <?php echo form_input('gradyear', "", 'tabindex="1" maxlength="255" id="gradyear" type="text" style="width:92%;"'); ?>
        </fieldset>
        <fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
            <label>Username</label>
            <?php echo form_input('login', "", 'tabindex="1" maxlength="255" id="login" type="text" style="width:92%;"'); ?>
        </fieldset>
        <fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
            <label>Password</label>
            <?php echo form_input('password', "", 'tabindex="1" maxlength="255" id="password" type="text" style="width:92%;"'); ?>
        </fieldset><div class="clear"></div>






    </div>
    <footer>
        <div class="submit_link">
            <?php echo form_submit('submit', 'Publish', 'class="alt_btn"'); ?>
            <input type="submit" value="Reset">
            <?php echo form_close(); ?>
        </div>
    </footer>
</article>