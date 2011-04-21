<div id="content" class="container_12" style="background: #fff;">
	<div id="bio_title" class="grid_12">
		<?php if(isset($alum_data)) : ?>
		<div class="grid_8">
			<h2><?php echo "$alum_data->FirstName $alum_data->LastName";?></h2>

		</div>
		<div class="grid_8">
                    <div class ="grid_4 alpha omega">
                        <?php if ($alum_data->ImageURL != '') : ?>
                        <img src="<?php echo base_url() . "uploads/$alum_data->ImageURL"; ?>" alt="<?php echo "$alum_data->FirstName $alum_data->LastName" ?>" width="300pxx"/>
                    <?php else : echo "<h2>Image not found!</h2>"; ?>
                    <?php endif; ?>

                   
                    </div>
		</div>
		
		<div id="bio_info_box" class = "grid_4 alpha omega pull_3">
                    <p><b>Graduation Year: </b><?php echo $alum_data->GraduationYear; ?></p>
                    <p><b>Industry: </b><?php echo $alum_data->Industry; ?></p>
                    <p><b>Current Employer: </b><?php echo $alum_data->CurrentEmployer; ?></p>
                    <p><?php echo "$alum_data->info";?></p>
                    <?php if ($alum_data->twitter != '') : ?>
                        <a href="<?php echo "$alum_data->twitter"; ?>"><img src="<?php echo base_url() . "images/twitter_logo.jpg"; ?>" alt="Twitter" width="24px"/></a>
                    <?php endif; ?>
                    <?php if ($alum_data->linkedin != '') : ?>
                            <a href="<?php echo "$alum_data->linkedin"; ?>"><img src="<?php echo base_url() . "images/linkedIn_logo.gif"; ?>" alt="LinkedIn" width="24px"/></a>
                    <?php endif; ?>
                    <?php if ($alum_data->facebook != '') : ?>
                                <a href="<?php echo "$alum_data->facebook"; ?>"><img src="<?php echo base_url() . "images/facebooklogo.png"; ?>" alt="Facebook" width="24px"/></a>
                    <?php endif; ?>
		
		</div>
		
		<h2><?php else : echo "Alumni not found!";?></h2>
		<?php endif; ?>
	</div>

</div>
