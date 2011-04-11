<div id="content" class="grid_12">
	<div id="bio_title" class="grid_8 push_2">
		<h2>Alum's Bio Page</h2>
	</div>
    <div class="sliderkit photosgallery-vertical" >	
	<div class="sliderkit-nav">
						<div class="sliderkit-nav-clip">
							<ul>
								<li><a href="#" rel="nofollow" title="[link title]"><img src="http://users.eecs.northwestern.edu/~ada829/pics/Northwestern.gif" alt="[Alternative text]" /></a></li>
								<li><a href="#" rel="nofollow" title="[link title]"><img src="http://www.riedel.com/files/usa-flag.gif" alt="[Alternative text]" /></a></li>
								<li><a href="#" rel="nofollow" title="[link title]"><img src="http://www.adiumxtras.com/images/pictures/chuck_norris_random_fact_generator_6_3957_2224_image_2561.jpg" alt="[Alternative text]" /></a></li>
								<li><a href="#" rel="nofollow" title="[link title]"><img src="http://blogs.babson.edu/admission/files/2009/11/random-shots-2.jpg" alt="[Alternative text]" /></a></li>
								<li><a href="#" rel="nofollow" title="[link title]"><img src="http://rpmedia.ask.com/ts?u=/wikipedia/commons/thumb/7/71/EnglishSpringerSpan2_wb.jpg/150px-EnglishSpringerSpan2_wb.jpg" alt="[Alternative text]" /></a></li>
								<li><a href="#" rel="nofollow" title="[link title]"><img src="../lib/images/photos/mini/sample-06.jpg" alt="[Alternative text]" /></a></li>
								<li><a href="#" rel="nofollow" title="[link title]"><img src="../lib/images/photos/mini/sample-07.jpg" alt="[Alternative text]" /></a></li>
							</ul>
						</div>
						<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-prev"><a rel="nofollow" href="#" title="Previous line"><span>Previous</span></a></div>
						<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-next"><a rel="nofollow" href="#" title="Next line"><span>Next</span></a></div>
					</div>
					<div class="sliderkit-panels">
						<div class="sliderkit-panel">
							<img src="http://users.eecs.northwestern.edu/~ada829/pics/Northwestern.gif" alt="[Alternative text]" />
							<div class="sliderkit-panel-textbox">
								<div class="sliderkit-panel-text">
									<h4>An N-cat</h4>
									<p>Found this randomly.</p>
								</div>
								<div class="sliderkit-panel-overlay"></div>
							</div>
						</div>
						<div class="sliderkit-panel">
							<img src="http://www.riedel.com/files/usa-flag.gif" alt="[Alternative text]" />
							<div class="sliderkit-panel-textbox">
								<div class="sliderkit-panel-text">
									<h4>A flag</h4>
									<p>And this</p>
								</div>
								<div class="sliderkit-panel-overlay"></div>
							</div>
						</div>
						<div class="sliderkit-panel">
							<img src="http://www.adiumxtras.com/images/pictures/chuck_norris_random_fact_generator_6_3957_2224_image_2561.jpg" alt="[Alternative text]" />
							<div class="sliderkit-panel-textbox">
								<div class="sliderkit-panel-text">
									<h4>sample-03.jpg</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
								</div>
								<div class="sliderkit-panel-overlay"></div>
							</div>
						</div>
						<div class="sliderkit-panel">
							<img src="http://blogs.babson.edu/admission/files/2009/11/random-shots-2.jpg" alt="[Alternative text]" />
							<div class="sliderkit-panel-textbox">
								<div class="sliderkit-panel-text">
									<h4>sample-04.jpg</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
								</div>
								<div class="sliderkit-panel-overlay"></div>
							</div>
						</div>
						<div class="sliderkit-panel">
							<img src="http://rpmedia.ask.com/ts?u=/wikipedia/commons/thumb/7/71/EnglishSpringerSpan2_wb.jpg/150px-EnglishSpringerSpan2_wb.jpg" alt="[Alternative text]" />
							<div class="sliderkit-panel-textbox">
								<div class="sliderkit-panel-text">
									<h4>sample-05.jpg</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
								</div>
								<div class="sliderkit-panel-overlay"></div>
							</div>
						</div>
						<div class="sliderkit-panel">
							<img src="../lib/images/photos/sample-06.jpg" alt="[Alternative text]" />
							<div class="sliderkit-panel-textbox">
								<div class="sliderkit-panel-text">
									<h4>sample-06.jpg</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
								</div>
								<div class="sliderkit-panel-overlay"></div>
							</div>
						</div>
						<div class="sliderkit-panel">
							<img src="../lib/images/photos/sample-07.jpg" alt="[Alternative text]" />
							<div class="sliderkit-panel-textbox">
								<div class="sliderkit-panel-text">
									<h4>sample-07.jpg</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
								</div>
								<div class="sliderkit-panel-overlay"></div>
							</div>
						</div>
					</div>
				</div>
	
        <p><?php if(isset($alum_img)) : foreach ($alum_img as $an_img) : ?>
		<h2><?php echo "Found this url: $an_img->imageURL\n"; ?></h2>
		
		<?php endforeach; ?></p>
		
		<?php else : ?>
		<h2>No records found.</h2>
		<?php endif; ?>
    </div>
</div>