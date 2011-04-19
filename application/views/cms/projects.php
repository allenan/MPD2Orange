<article class="module width_half">
    <header><h3 class="tabs_involved">Teams</h3>
        <?php echo form_open('cms/do_assign_project'); ?>
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
                        <th>ProjID</th>
                    </tr>
                </thead>
                <tbody>
					<?php $team_id = -1; ?>
                    <?php foreach ($teams as $row): ?>
                        <tr>
							<?php if($team_id != $row->TeamID) : 
								$team_id = $row->TeamID?>
                            <td><input type="radio" name="team_group[]" value="<?php echo $row->TeamID; ?>"></td>
							<?php else : echo "<td></td>"; endif; ?> 
                            <td><?php echo $row->FirstName; ?></td>
                            <td><?php echo $row->LastName; ?></td>
                            <td><?php echo $row->GraduationYear; ?></td>
                            <td><?php echo $row->TeamID; ?></td>
                            <td><?php echo $row->ProjID; ?></td>
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

            </div>
        </footer>

    </article><!-- end of content manager article -->

    <article class="module width_half">
            <header><h3 class="tabs_involved">Projects</h3>

            </header>


            <table class="tablesorter" cellspacing="0">
                <thead>
                    <tr>
                        <th></th>
                        <th>Project ID</th>
                        <th>Project Name</th>
                        <th>Year</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($projects as $row): ?>
                    <tr>
                        <td><input type="radio" name="project_group[]" value="<?php echo $row->ProjID; ?>"></td>
                        <td><?php echo $row->ProjID; ?></td>
                        <td><?php echo $row->ProjectName; ?></td>
                        <td><?php echo $row->Year; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


        <footer>
            <div class="submit_link">
                <input type="submit" value="Assign Project" class="alt_btn">
                <?php echo form_close(); ?>
            </div>
        </footer>

    </article><!-- end of content manager article -->