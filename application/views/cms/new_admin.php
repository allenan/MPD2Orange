<h4 class="alert_info">This content will be displayed on your bio page</h4>
<article class="module width_full">
    <header><h3>Add a New Admin</h3></header>
    <div class="module_content">

        <?php echo form_open('cms/do_add_admin'); ?>
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
            <?php echo form_submit('submit', 'Add', 'class="alt_btn"'); ?>
            <input type="submit" value="Reset">
            <?php echo form_close(); ?>
        </div>
    </footer>
</article>