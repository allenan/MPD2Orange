<!--<div class="customtabs tabs-imbricate">
<div  class="grid_10 push_2">
    <div class="customtabs-nav-clip customtabs-nav">
        <ul>
            <li><a href="#" title="Summary">Summary</a></li>
            <li><a href="#" title="Product Opportunity">Product Opportunity</a></li>
            <li><a href="#" title="Ideation">Ideation</a></li>
            <li><a href="#" title="Final Product">Final Product</a></li>
            <li><a href="#" title="Product Details">Product Details</a></li>
            <li><a href="#" title="Team">Team</a></li>
        </ul>
    </div>
</div>-->

<div id="content" class="grid_12">
	<div id="project_title" class="grid_12 alpha omega">
		<h2><?php echo $proj_info->ProjectName; ?></h2>
	</div>
	<div  class="grid_12">
		<div class="customtabs tabs-imbricate">
			<div class="customtabs-nav">
				<div class="customtabs-nav-clip">
					<ul>
					<li><a href="#" title="Summary">Summary</a></li>
					<li><a href="#" title="Product Opportunity">Product Opportunity</a></li>
					<li><a href="#" title="Ideation">Ideation</a></li>
					<li><a href="#" title="Final Product">Final Product</a></li>
					<li><a href="#" title="Product Details">Product Details</a></li>
					<li><a href="#" title="Team">Team</a></li>
					</ul>
				</div>
			</div>
			<div class="customtabs-panels">
				<div class="customtabs-panel">				
					<?php if(isset($proj_img_summary)) : ?>
					<div class="sliderkit photosgallery-vertical" style="width: 896px;" >
						<div class="sliderkit-nav" >
							<div class="sliderkit-nav-clip">
								<ul>
									<p><?php if(isset($proj_img_summary)) : foreach ($proj_img_summary as $an_img) : ?>
										<li><a href="#" rel="nofollow">
										<img src="<?php echo base_url(); echo "uploads/tn/$an_img->imageURL"; ?>" alt="Summary Thumbnail" /></a></li>
									<?php endforeach; ?></p>
									<?php endif; ?>
								</ul>
							</div>
						</div>
						<div class="sliderkit-panels">
							<p><?php if(isset($proj_img_summary)) : foreach ($proj_img_summary as $an_img) : ?>
							<div class="sliderkit-panel">
								<img src="<?php echo base_url(); echo "uploads/$an_img->imageURL"; ?>" alt="Summary Image" height = 450px width = 601px  style="margin-left: 200px;"  />
								<div class="sliderkit-panel-textbox">
									<div class="sliderkit-panel-text">
										<p><?php echo "$an_img->description"; ?></p>
									</div>
									<div class="sliderkit-panel-overlay"></div>
								</div>
							</div>
							<?php endforeach; ?></p>
							<?php endif; ?>
						</div>
					</div>
					<?php else : ?>
					<div  class="grid_12 alpha omega">
						<h3>No content to display.</h3>
					</div>
					<?php endif; ?>
				</div>
				
				<div class="customtabs-panel">				
					<?php if(isset($proj_img_opp)) : ?>
					<div class="sliderkit photosgallery-vertical" >	
						<div class="sliderkit-nav">
							<div class="sliderkit-nav-clip">
								<ul>
									<p><?php if(isset($proj_img_opp)) : foreach ($proj_img_opp as $an_img) : ?>
										<li><a href="#" rel="nofollow">
										<img src="<?php echo base_url(); echo "uploads/tn/$an_img->imageURL"; ?>" alt="Opportunity Thumbnail" /></a></li>
									<?php endforeach; ?></p>
									<?php endif; ?>
								</ul>
							</div>
						</div>
						<div class="sliderkit-panels">
							<p><?php if(isset($proj_img_opp)) : foreach ($proj_img_opp as $an_img) : ?>
							<div class="sliderkit-panel">
								<img src="<?php echo base_url(); echo "uploads/$an_img->imageURL"; ?>" alt="Opportunity Image" height = 450px width = 601px  style="margin-left: 200px;" />
								<div class="sliderkit-panel-textbox">
									<div class="sliderkit-panel-text">
										<p><?php echo "$an_img->description"; ?></p>
									</div>
									<div class="sliderkit-panel-overlay"></div>
								</div>
							</div>
							<?php endforeach; ?></p>
							<?php endif; ?>
						</div>
					</div>
					<?php else : ?>
					<div  class="grid_12 alpha omega">
						<h3>No content to display.</h3>
					</div>
					<?php endif; ?>
				</div>
				<div class="customtabs-panel">
					<?php if(isset($proj_img_idea)) : ?>
					<div class="sliderkit photosgallery-vertical" >	
						<div class="sliderkit-nav">
							<div class="sliderkit-nav-clip">
								<ul>
									<p><?php if(isset($proj_img_idea)) : foreach ($proj_img_idea as $an_img) : ?>
										<li><a href="#" rel="nofollow">
										<img src="<?php echo base_url(); echo "uploads/tn/$an_img->imageURL"; ?>" alt="Ideation Thumbnail" /></a></li>
									<?php endforeach; ?></p>
									<?php endif; ?>
								</ul>
							</div>
						</div>
						<div class="sliderkit-panels">
							<p><?php if(isset($proj_img_idea)) : foreach ($proj_img_idea as $an_img) : ?>
							<div class="sliderkit-panel">
								<img src="<?php echo base_url(); echo "uploads/$an_img->imageURL"; ?>" alt="Ideation Image" height = 450px width = 601px  style="margin-left: 200px;"  />
								<div class="sliderkit-panel-textbox">
									<div class="sliderkit-panel-text">
										<p><?php echo "$an_img->description"; ?></p>
									</div>
									<div class="sliderkit-panel-overlay"></div>
								</div>
							</div>
							<?php endforeach; ?></p>
							<?php endif; ?>
						</div>
					</div>
					<?php else : ?>
					<div  class="grid_12 alpha omega">
						<h3>No content to display.</h3>
					</div>
					<?php endif; ?>
				</div>
				<div class="customtabs-panel">
					<?php if(isset($proj_img_finalprod)) : ?>
					<div class="sliderkit photosgallery-vertical" >	
						<div class="sliderkit-nav">
							<div class="sliderkit-nav-clip">
								<ul>
									<p><?php if(isset($proj_img_finalprod)) : foreach ($proj_img_finalprod as $an_img) : ?>
										<li><a href="#" rel="nofollow">
										<img src="<?php echo base_url(); echo "uploads/tn/$an_img->imageURL"; ?>" alt="Final Product Thumbnail" /></a></li>
									<?php endforeach; ?></p>
									<?php endif; ?>
								</ul>
							</div>					
						</div>
						<div class="sliderkit-panels">
							<p><?php if(isset($proj_img_finalprod)) : foreach ($proj_img_finalprod as $an_img) : ?>
							<div class="sliderkit-panel">
								<img src="<?php echo base_url(); echo "uploads/$an_img->imageURL"; ?>" alt="Final Product Image" height = 450px width = 601px  style="margin-left: 200px;"  />
								<div class="sliderkit-panel-textbox">
									<div class="sliderkit-panel-text">
										<p><?php echo "$an_img->description"; ?></p>
									</div>
									<div class="sliderkit-panel-overlay"></div>
								</div>
							</div>
							<?php endforeach; ?></p>
							<?php endif; ?>
						</div>
					</div>
					<?php else : ?>
					<div  class="grid_12 alpha omega">
						<h3>No content to display.</h3>
					</div>
					<?php endif; ?>
				</div>
								
				<div class="customtabs-panel">
					<?php $counter = -1;
					if(isset($proj_info)) {
					$counter = 0;
					if($proj_info->MarketSegmentation){ echo "<p><b>Market Segmentation: </b> $proj_info->MarketSegmentation</p>"; $counter++;}
					if($proj_info->TargetMarket){echo "<p><b>Target Market:</b> $proj_info->TargetMarket</p> ";$counter++;}
					if($proj_info->MarketPositioning) { echo "<p><b>Market Positioning:</b> $proj_info->MarketPositioning</p> ";$counter++;}
					if($proj_info->QualitativeResearch) { echo "<p><b>Qualitative Research: </b> $proj_info->QualitativeResearch</p> ";$counter++; }
					if($proj_info->QuantitativeResearch) {echo "<p><b>Quantitative Research: </b> $proj_info->QuantitativeResearch</p>";$counter++;}
					if($proj_info->Price) {echo "<p><b>Price: </b> $proj_info->Price </p> ";$counter++;}
					if($proj_info->CountryOfOrigin) { echo "<p><b>Country of Origin: </b> $proj_info->CountryOfOrigin </p> ";$counter++;}
					if($proj_info->MaterialSelection) { echo "<p><b>Material Selection: </b> $proj_info->MaterialSelection</p> ";$counter++;}
					if($proj_info->IntellectualProperty) {echo "<p><b>Intellectual Property: </b> $proj_info->IntellectualProperty</p> ";$counter++;}
					if($proj_info->HumanFactors){echo "<p><b>Human Factors: </b>$proj_info->HumanFactors</p> ";$counter++;}
					if($proj_info->Regulations) {echo "<p><b>Regulations: </b> $proj_info->Regulations</p> ";$counter++;}
					if($proj_info->OtherInfo){echo "<p><b>Other Info: </b> $proj_info->OtherInfo </p>";$counter++;}
					}
					
					else { ?>
					<div  class="grid_12 alpha omega">
						<h3>No content to display.</h3>
					</div>
					<?php }
					if($counter == 0) :?>
					<div  class="grid_12 alpha omega">
						<h3>No content to display.</h3>
					</div>
					<?php endif; ?>
				</div>
				<div class="customtabs-panel">
					<?php if(isset($all_alum_data)) : ?>
					<div class="customtabs-news">
					<div class="sliderkit photosgallery-vertical">	
						<div class="sliderkit-nav">
							<div class="sliderkit-nav-clip">
								<ul>
									<p><?php if(isset($all_alum_data)) : foreach ($all_alum_data as $team_member) : ?>	
										<li><a href="#" rel="nofollow">
										<img src="<?php echo base_url(); echo "uploads/tn/$team_member->ImageURL"; ?>" alt="<?php echo "$team_member->FirstName $team_member->LastName" ?>" /></a></li>
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
					<?php else : ?>
					<div  class="grid_12 alpha omega">
						<h3>No content to display.</h3>
					</div>
					<?php endif; ?>
						
					</div>
				</div>


			</div>
		</div>
	</div>
</div>