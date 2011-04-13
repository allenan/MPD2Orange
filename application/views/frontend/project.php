<div id="content" class="grid_12">
	<div id="project_title" class="grid_8 push_2">
		<h2>Project: <?php echo $proj_info->projectname; ?></h2>
	</div>
	<div  class="grid_8">
		<div class="customtabs tabs-imbricate">
			<div class="customtabs-nav">
				<div class="customtabs-nav-clip">
					<ul>
					<li><a href="#" title="[link title]">Summary</a></li>
					<li><a href="#" title="[link title]">Product Opportunity</a></li>
					<li><a href="#" title="[link title]">Ideation</a></li>
					<li><a href="#" title="[link title]">Final Product</a></li>
					<li><a href="#" title="[link title]">Team</a></li>
					</ul>
				</div>
			</div>
			<div class="customtabs-panels">
				<div class="customtabs-panel">
					<p>Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s :
				
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
				<div class="customtabs-panel">
					<a href="#" title="[Titre de l'article]"><img src="../lib/images/photos/small/sample-04.jpg" alt="[alternative text]" /></a>
					<h3><a href="#">Lorem ipsum dolor est</a></h3>
					<p>Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
					<a class="customtabs-news-readmore" href="#">Read more</a></p>

				</div>
				<div class="customtabs-panel">
					<div class="customtabs-news">
						<a href="#" title="[Titre de l'article]"><img src="../lib/images/photos/small/sample-01.jpg" alt="[alternative text]" /></a>
						<h3><a href="#">Lorem ipsum</a></h3>
						<p>Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took...
						<a class="customtabs-news-readmore" href="#">Read more</a></p>
					</div>
				</div>
				<div class="customtabs-panel">
					<div class="customtabs-news">
						<a href="#" title="[Titre de l'article]"><img src="../lib/images/photos/small/sample-01.jpg" alt="[alternative text]" /></a>
						<h3><a href="#">Lorem ipsum</a></h3>
						<p>Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took...
						<a class="customtabs-news-readmore" href="#">Read more</a></p>
					</div>
				</div>
				<div class="customtabs-panel">
					<div class="customtabs-news">
					<div class="sliderkit photosgallery-vertical">	
						<div class="sliderkit-nav">
							<div class="sliderkit-nav-clip">
								<ul>
									<p><?php if(isset($all_alum_data)) : foreach ($all_alum_data as $team_member) : ?>	
										<<li><a href="#" rel="nofollow" title="[link title]">
										<img src="<?php echo "$team_member->ImageURL"; ?>" alt="[Alternative text]" /></a></li>
									<?php endforeach; ?></p>
									<?php endif; ?>
								</ul>
							</div>
							
							<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-prev"><a rel="nofollow" href="#" title="Previous line"><span>Previous</span></a></div>
							<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-next"><a rel="nofollow" href="#" title="Next line"><span>Next</span></a></div>
							
						</div>
						<div class="sliderkit-panels">
							<p><?php if(isset($all_alum_data)) : foreach ($all_alum_data as $team_member) : ?>
							<div class="sliderkit-panel">
								
								<?php
								$data['alum_data'] = $team_member;
								$this->load->view("frontend/bio", $data); ?> 
								 
							</div>
							<?php endforeach; ?></p>
							<?php endif; ?>
						</div>
					</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>