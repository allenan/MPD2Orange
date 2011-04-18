<h4 class="alert_info">This content will be displayed on your bio page</h4>
<article class="module width_full">
    <header><h3>Edit User</h3></header>
    <div class="module_content">
        <?php echo form_open('cms/do_edit_user'); ?>

        <fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
            <label>First Name</label>
            <?php echo form_input('first', $user_info->FirstName, 'tabindex="1" maxlength="255" id="first" type="text" style="width:92%;"'); ?>
        </fieldset>
        <fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
            <label>Last Name</label>
            <?php echo form_input('last', $user_info->LastName, 'tabindex="1" maxlength="255" id="last" type="text" style="width:92%;"'); ?>
        </fieldset><div class="clear"></div>
        <fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
            <label>Graduation Year</label>
            <?php echo form_input('gradyear', $user_info->GraduationYear, 'tabindex="1" maxlength="255" id="gradyear" type="text" style="width:92%;"'); ?>
        </fieldset><div class="clear"></div>


    </div>
    <footer>
        <div class="submit_link">
            <?php echo form_hidden('UserID', $user_info->UserID); ?>
            <?php echo form_submit('submit', 'Publish', 'class="alt_btn"'); ?>
            <input type="submit" value="Reset">
            <?php echo form_close(); ?>
        </div>
    </footer>
</article>

<article class="module width_full">
    <header><h3>Edit Login</h3></header>
    <div class="module_content">
        <?php echo form_open('cms/do_edit_login'); ?>

       
        <fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
            <label>Username</label>
            <?php echo form_input('login', $user_login, 'tabindex="1" maxlength="255" id="login" type="text" style="width:92%;"'); ?>
        </fieldset>
        <fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
            <label>Password</label>
            <?php echo form_input('password', "", 'tabindex="1" maxlength="255" id="password" type="text" style="width:92%;"'); ?>
        </fieldset><div class="clear"></div>

    </div>
    <footer>
        <div class="submit_link">
            <?php echo form_hidden('UserID', $user_info->UserID); ?>
            <?php echo form_submit('submit', 'Publish', 'class="alt_btn"'); ?>
            <input type="submit" value="Reset">
            <?php echo form_close(); ?>
        </div>
    </footer>
</article>