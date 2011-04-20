	
<body>
	<div id="page_container" class="container_12">
		<div id="logo" class="grid_2">
                    <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/mpdlogo.jpg" alt="MPD2"/></a>
		</div>
		
		
		<div id="site_nav" class ="grid_10">
			<ul>
                            <?php echo form_open('site/serach');?>
                            <li><a href="<?php echo base_url(); echo index_page(); echo'/';?>site/gallery">projects</a></li>
                            <li><a href="<?php echo base_url(); echo index_page(); echo'/';?>site/alumni">alumni</a></li>
                            <li><?php echo form_input("search", "search", 'class="search-box" onFocus=this.value=""');?></li>
                            <?php echo form_close();?>
			</ul>
                    
		</div>
		
