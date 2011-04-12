<div id="content" class="grid_12">
	<div id="project_title" class="grid_8 push_2">
		<h2>Project Profile Page</h2>
	</div>
	<div  class="grid_8">
	<?php if(isset($proj_img)) : ?>
    <div class="sliderkit photosgallery-vertical" >	
		<div class="sliderkit-nav">
			<div class="sliderkit-nav-clip">
				<ul>
					<p><?php if(isset($proj_img)) : foreach ($proj_img as $an_img) : ?>
						<<li><a href="#" rel="nofollow" title="[link title]">
						<img src="<?php echo "$an_img->imageURL"; ?>" alt="[Alternative text]" /></a></li>
					<?php endforeach; ?></p>
					<?php endif; ?>
				</ul>
			</div>
			
			<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-prev"><a rel="nofollow" href="#" title="Previous line"><span>Previous</span></a></div>
			<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-next"><a rel="nofollow" href="#" title="Next line"><span>Next</span></a></div>
			
		</div>
		<div class="sliderkit-panels">
			<p><?php if(isset($proj_img)) : foreach ($proj_img as $an_img) : ?>
			<div class="sliderkit-panel">
				<img src="<?php echo "$an_img->imageURL"; ?>" alt="[Alternative text]" height = 100% width = 100%  />
				<div class="sliderkit-panel-textbox">
					<div class="sliderkit-panel-text">
						<h4><?php echo "$an_img->imageURL"; ?></h4>
						<p>Using above URL.</p>
					</div>
					<div class="sliderkit-panel-overlay"></div>
				</div>
			</div>
			<?php endforeach; ?></p>
			<?php endif; ?>
		</div>
	</div>
	<?php else : ?>
	<div  class="grid_8">
		<h3>No content to display.</h3>
	</div>
	<?php endif; ?>
	</div>
</div>