<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>CMS</title>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.3.2.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/ui/ui.core.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/superfish.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/live_search.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/tooltip.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/cookie.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/ui/ui.sortable.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/ui/ui.draggable.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/ui/ui.resizable.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/ui/ui.dialog.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/custom.js"></script>

	<link href="<?php echo base_url();?>css/ui/ui.base.css" rel="stylesheet" media="all" />

	<link href="<?php echo base_url();?>css/themes/blueberry/ui.css" rel="stylesheet" title="style" media="all" />

	<!--[if IE 6]>
	<link href="css/ie6.css" rel="stylesheet" media="all" />

	<script src="js/pngfix.js"></script>
	<script>
	  /* Fix IE6 Transparent PNG */
	  DD_belatedPNG.fix('.logo, ul#dashboard-buttons li a, .response-msg, #search-bar input');

	</script>
	<![endif]-->
</head>
<body>
	<div id="page_wrapper">
		<div id="page-header">

			<!--PAGE-HEADER-->
			<div id="page-header-wrapper">
				<div id="top">
					<!--<a href="dashboard.html" class="logo" title="Admintasia V2.0">Admintasia V2.0</a>-->
                                        <img src="<?php echo base_url();?>images/mpdlogo.jpg" alt="mpd" height="50px"/>
					<div class="welcome">
						<span class="note">Welcome, <a href="#" title="Welcome, Admin">Admin</a></span>
						<a class="btn ui-state-default ui-corner-all" href="#">
							<span class="ui-icon ui-icon-wrench"></span>
							Settings
						</a>
						<a class="btn ui-state-default ui-corner-all" href="#">
							<span class="ui-icon ui-icon-person"></span>
							My account
						</a>
						<a class="btn ui-state-default ui-corner-all" href="login/logout">
							<span class="ui-icon ui-icon-power"></span>
							Logout
						</a>
					</div>
				</div>
				<!--PAGE-NAVOGATION-->
				<ul id="navigation">
					<li>
						<a href="dashboard.html" class="sf-with-ul">Dashboard</a>
						<ul>
							<li><a href="dashboard.html">Administration</a></li>
							<li>
								<a href="forms.html">Forms</a>
								<ul>
									<li><a href="validate.html">Form validation</a></li>
									<li><a href="table_modal.html"><b>Add to table modal</b></a></li>
									<li><a href="editinplace.html"><b>Edit in Place</b></a></li>
									<li><a href="tinymce.html"><b>WYSIWYG Editor</b></a></li>
								</ul>
							</li>
							<li>
								<a href="tables.html">Tables</a>
								<ul>
									<li><a href="tables.html">Sortable Tables</a></li>
									<li><a href="flexigrid.html"><b>FlexiGrid</b></a></li>
								</ul>
							</li>
							<li>
								<a href="#">Widgets</a>
								<ul>
									<li><a href="accordion.html">Accordion</a></li>
									<li><a href="flexigrid.html"><b>FlexiGrid</b></a></li>
									<li><a href="editinplace.html"><b>Edit in Place</b></a></li>
									<li><a href="tinymce.html"><b>WYSIWYG Editor</b></a></li>
									<li><a href="charts.html"><b>Charts</b></a></li>
									<li><a href="tabs.html">Tabs</a></li>
									<li><a href="slider.html">Slider</a></li>
									<li><a href="datepicker.html">Datepicker</a></li>
									<li><a href="progress.html">Progress Bar</a></li>
									<li><a href="dialog.html">Dialogs and Modals</a></li>
									<li><a href="overlays.html">Overlays</a></li>
									<li><a href="photo_manager.html">Photo Manager</a></li>
									<li><a href="file_browser.html">File Browser</a></li>
								</ul>
							</li>
							<li><a href="msg.html">Response Messages</a></li>
							<li><a href="icons.html">Icons</a></li>
							<li><a href="index.html">Login Page</a></li>
							<li><a href="icons.html">Buttons and Elements</a></li>
						</ul>
					</li>
					<li>
						<a href="#" class="sf-with-ul">Unlimited Levels</a>
						<ul>
							<li>
								<a href="#" class="sf-with-ul">Menu item 1</a>
								<ul>
									<li><a href="#">Subitem 1</a></li>
									<li><a href="#">Subitem 2</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Menu item 2</a>
							</li>
							<li>
								<a href="#">Menu item 3</a>
							</li>
							<li>
								<a href="#" class="sf-with-ul">Menu item 4</a>
								<ul>
									<li><a href="#">Subitem 1</a></li>
									<li>
										<a href="#" class="sf-with-ul">Subitem 2</a>
										<ul>
											<li><a href="#">Subitem 1</a></li>
											<li>
												<a href="#" class="sf-with-ul">Subitem 2</a>
												<ul>
													<li><a href="#">Subitem 1</a></li>
													<li>
														<a href="#">Subitem 2</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="#" class="sf-with-ul">Menu item 5</a>
								<ul>
									<li><a href="#">Subitem 1</a></li>
									<li><a href="#">Subitem 2</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Menu item 6</a>
							</li>
							<li>
								<a href="#">Menu item 7</a>
							</li>
						</ul>
					</li>
					<li><a href="gallery.html">Photo Gallery</a></li>
					<li>
						<a href="#" class="sf-with-ul">Layout Options</a>
						<ul>
							<li>
								<a href="three-columns-layout.html">Three columns</a>
							</li>
							<li>
								<a href="two-column-layout.html">Two columns</a>
							</li>
							<li>
								<a href="no-rounded.html">No rounded corners</a>
							</li>
							<li>
								<a href="content_boxes.html">Available content boxes</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" class="sf-with-ul">Theme Options</a>
						<ul>
							<li>
								<a href="page_left_sidebar.html">Page with left sidebar</a>
							</li>
							<li>
								<a href="page_dynamic_sidebar.html">Page with dynamic sidebar</a>
							</li>
							<li>
								<a href="#">Avaiable Themes</a>
								<ul id="style-switcher">
									<li>
										<a class="set_theme" id="black_rose" href="#" title="Black Rose Theme">Black Rose Theme</a>
									</li>
									<li>
										<a class="set_theme" id="gray_standard" href="#" title="Gray Standard Theme">Gray Standard Theme</a>
									</li>
									<li>
										<a class="set_theme" id="gray_lightness" href="#" title="Gray Lightness Theme">Gray Lightness Theme</a>
									</li>
									<li>
										<a class="set_theme" id="apple_pie" href="#" title="Apple Pie Theme">Apple Pie Theme</a>
									</li>
									<li>
										<a class="set_theme" id="blueberry" href="#" title="Blueberry Theme">Blueberry Theme</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#"><i>Dummy Link</i></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" class="sf-with-ul">Widgets</a>
						<ul>
							<li><a href="accordion.html">Accordion</a></li>
							<li><a href="flexigrid.html"><b>FlexiGrid</b></a></li>
							<li><a href="editinplace.html"><b>Edit in Place</b></a></li>
							<li><a href="tinymce.html"><b>WYSIWYG Editor</b></a></li>
							<li><a href="charts.html"><b>Charts</b></a></li>
							<li><a href="tabs.html">Tabs</a></li>
							<li><a href="slider.html">Slider</a></li>
							<li><a href="datepicker.html">Datepicker</a></li>
							<li><a href="progress.html">Progress Bar</a></li>
							<li><a href="dialog.html">Dialogs and Modals</a></li>
							<li><a href="overlays.html">Overlays</a></li>
							<li><a href="photo_manager.html">Photo Manager</a></li>
							<li><a href="file_browser.html">File Browser</a></li>
						</ul>
					</li>
				</ul>
				<!--END-PAGE-NAV-->
				<div id="search-bar">
					<form method="post" action="http://www.google.com/">
						<input type="text" name="q" value="live search demo" />
					</form>
				</div>
			</div>
		</div>
		<!--END-PAGE-HEADER-->

		<script type="text/javascript" src="js/ui/ui.tabs.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
			// Tabs
			$('#tabs, #tabs2, #tabs5').tabs();
		});
		</script>

		<!--PAGE-MAIN-CONTENT-->
		<!--Page content header-->
		<!--Page title and breadcrumbs-->
		<div id="sub-nav"><div class="page-title">
			<h1>Dashboard</h1>
			<span><a href="#" title="Layout Options">Layout Options</a> > <a href="#" title="Two column layout">Two column layout</a> > This is a breadcrumb example</span>
		</div>
		<!--END Page title and breadcrumbs-->

		<!--Top Buttons-->
		<div id="top-buttons">
			<a id="dialog_link" class="btn ui-state-default ui-corner-all" href="#">
				<span class="ui-icon ui-icon-newwin"></span>
				Dialog Window
			</a>
			<a class="btn ui-state-default ui-corner-all" id="drop" href="#drop_down">
				<span class="ui-icon ui-icon-carat-2-n-s"></span>
				DropDown Menu
			</a>
			<div id="drop_down" class="hidden">
				<ul>
					<li><a href="#">Google</a></li>
					<li><a href="#">Yahoo</a></li>
					<li><a href="#">MSN</a></li>
					<li><a href="#">Ask</a></li>
					<li><a href="#">AOL</a></li>
				</ul>
			</div>
			<a id="modal_confirmation_link" class="btn ui-state-default ui-corner-all" href="#">
				<span class="ui-icon ui-icon-grip-dotted-horizontal"></span>
				Modal Confirmation
			</a>
		</div>
			<div id="dialog" title="Dialog Title">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			<div id="modal_confirmation" title="An example modal title ?">
				<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
		</div>
		<!--END Top Buttons-->
		<!--END Page content header-->

		<!--Page Content-->
		<div id="page-layout"><div id="page-content">
			<div id="page-content-wrapper">



		<?php 
                    if (isset($cms_main_content))
                    $this->load->view('cms/'.$cms_main_content);
                ?>

                                <!--END Page Content-->








		<!--SIDEBAR-->
		<div id="sidebar">
			<div class="sidebar-content">

				<!--Sidebar Controls-->
				<a id="close_sidebar" class="btn ui-state-default full-link ui-corner-all" href="#drill">
					<span class="ui-icon ui-icon-circle-arrow-e"></span>
					Close Sidebar
				</a>
				<a id="open_sidebar" class="btn tooltip ui-state-default full-link icon-only ui-corner-all" title="Open Sidebar" href="#"><span class="ui-icon ui-icon-circle-arrow-w"></span></a>
				<div class="hide_sidebar">
				<!--End Sidebar Controls-->


				<!--Navigation Box-->
				<div class="box ui-widget ui-widget-content ui-corner-all">
					<h3>Navigation</h3>
					<div class="content">
						<a class="btn ui-state-default full-link ui-corner-all" href="#">
							<span class="ui-icon ui-icon-clock"></span>
							Dashboard
						</a>
						<a class="btn ui-state-default full-link ui-corner-all" href="#">
							<span class="ui-icon ui-icon-note"></span>
							News
						</a>
						<a class="btn ui-state-default full-link ui-corner-all" href="#">
							<span class="ui-icon ui-icon-person"></span>
							Roster
						</a>
						<a class="btn ui-state-default full-link ui-corner-all" href="#">
							<span class="ui-icon ui-icon-calendar"></span>
							Events
						</a>
						<a class="btn ui-state-default full-link ui-corner-all" href="#">
							<span class="ui-icon ui-icon-image"></span>
							Photo Galleries
						</a>
						<a class="btn ui-state-default full-link ui-corner-all" href="#">
							<span class="ui-icon ui-icon-pencil"></span>
							Edit Content
						</a>
						<a class="btn ui-state-default full-link ui-corner-all" href="#">
							<span class="ui-icon ui-icon-mail-closed"></span>
							Contact Form
						</a>
					</div>
				</div>
				<!--End Navigation Box-->











				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
	<!--FOOTER-->
	<div id="footer">
		<a href="#" title="Home">Home</a> |
		<a href="#" title="Register">Register</a> |
		<a href="#" title="Members Login">Members Login</a> |
		<a href="#" title="About us">About us</a> |
		<a href="#" title="Example link">Example link</a>
	</div>
	<!--END FOOTER-->
</div> <!--page_wrapper-->
</body>


</html>