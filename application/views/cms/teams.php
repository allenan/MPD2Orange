<article class="module width_full">
    <header><h3 class="tabs_involved">Assign Teams</h3>
    <?php echo form_open('cms/do_make_team'); ?>
    </header>
    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                    <tr>
                        <th></th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Graduation Year</th>
                        <th>TeamID</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($alumni as $row): ?>
                    <tr>
                        <td><input type="checkbox" name="team_group[]" value="<?php echo $row->AlumniID; ?>"></td>
                        <td><?php echo $row->FirstName; ?></td>
                        <td><?php echo $row->LastName; ?></td>
                        <td><?php echo $row->GraduationYear; ?></td>
                        <td><?php echo $row->TeamID; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div><!-- end of #tab1 -->

        <div id="tab2" class="tab_content">


        </div><!-- end of #tab2 -->

    </div><!-- end of .tab_container -->
        <footer>
        <div class="submit_link">
            <input type="submit" value="Make Team" class="alt_btn">
            <?php echo form_close(); ?>
        </div>
    </footer>

</article><!-- end of content manager article -->