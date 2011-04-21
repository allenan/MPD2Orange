
		<div id="year_nav" class="grid_10 push_2">
			<ul id="list-nav">
				<?php if(isset($years)) : foreach ($years as $oneyear) : ?>
				<li><a href="#<?php echo $oneyear->year; ?>"><?php echo $oneyear->year; ?></a></li>
				<?php endforeach; ?>
				<?php endif; ?>
			</ul>
		</div>
		
		
		<div id="content" class="grid_12">
                    <?php if(isset($years)) : foreach ($years as $oneyear) : ?>

                    <div class="grid_2 alpha year">
                        <a name="<?php echo $oneyear->year; ?>"><p><?php echo $oneyear->year; ?></p></a>
                    </div>

                    <div class="grid_10 alpha omega">
                    <?php foreach ($projs as $project) : if($project->Year == $oneyear->year) : ?>

                        <div class="img">
                            <div class="details">
                                <h3><?php echo $project->ProjectName;?></h3>
                            </div>
                            <a href= "<?php echo base_url(); echo index_page(); echo'/';?>site/project/<?php echo $project->ProjID; ?>" title="<?php echo $project->ProjectName; ?>">
                                <img src="<?php echo base_url(); echo "uploads/$project->ImageURL"; ?>" alt="<?php echo $project->ProjectName; ?>" height="240" />
                            </a>
<!--                            <div class="desc">//<?php //echo $project->Summary; ?></div>-->
                        </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    </div>

                    <?php endforeach; ?>
                    <?php endif; ?>
		
		</div>
