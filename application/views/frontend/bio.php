<div id="content" class="container_16">
	<div id="bio_title" class="grid_8 push_2">
		<?php if(isset($alum_data)) : ?>
		<div class="grid_8">
			
			<h2><?php echo "$alum_data->FirstName $alum_data->LastName's Bio Page";?></h2>

		</div>
		<div class="grid_4">
			<?php if(isset($alum_img)) : ?>
			<img src="<?php echo "$alum_img->imageURL";?>" alt="<?php echo "$alum_data->FirstName $alum_data->LastName" ?>" />
			<h2><?php else : echo "Image not found!";?></h2>
			<?php endif; ?>
			
			<p><?php echo "$alum_data->facebook";?></p>
			<p><?php echo "$alum_data->twitter";?></p>
			<p><?php echo "$alum_data->linkedin";?></p>
		</div>
		
		<div class = "grid_8">
		<p><?php echo "$alum_data->info";?></p>
		
		</div>
		<div class = "grid_8">
		<h2>The rest of my team</h2>
		<p><?php if(isset($team_imgs)) : foreach ($team_imgs as $team_member) : ?>
		<p><img src="<?php echo "$team_member->imageURL";?>" /> </p>
		
		<?php endforeach; ?>
		<?php endif; ?>
		</p>
		
		</div>
		
		<h2><?php else : echo "Alumni not found!";?></h2>
		<?php endif; ?>
	</div>

</div>
