<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>MPD2 CMS Login</title>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.3.2.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/ui/ui.core.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/superfish.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/live_search.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/sidebar_menu.html"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/tooltip.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/cookie.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/ui/ui.sortable.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/ui/ui.draggable.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/ui/ui.resizable.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/ui/ui.dialog.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/custom.js"></script>

        <link href="<?php echo base_url(); ?>css/ui/ui.base.css" rel="stylesheet" media="all" />

        <link href="<?php echo base_url(); ?>css/ui/ui.login.css" rel="stylesheet" media="all" />

        <link href="<?php echo base_url(); ?>css/themes/blueberry/ui.css" rel="stylesheet" media="all" />

        <link href="<?php echo base_url(); ?>css/themes/blueberry/ui.css" rel="stylesheet" title="style" media="all" />

        <!--[if IE 6]>
	<link href="css/ie6.css" rel="stylesheet" media="all" />

        <script src="js/pngfix.js"></script>
        <script>
	  /* Fix IE6 Transparent PNG */
	  DD_belatedPNG.fix('.logo, .other ul#dashboard-buttons li a');

	</script>
	<![endif]-->
        <!--[if IE 7]>
	<link href="css/ie7.css" rel="stylesheet" media="all" />
	<![endif]-->
    </head>
    <body>
        <div id="page_wrapper">
            <div id="page-header">
                <div id="page-header-wrapper">
                    <div id="top">
                        <!--<a href="#" class="logo" title="Admintasia V2.0">Admintasia V2.0</a>
					<div class="welcome">
                                <span class="note">Welcome, <a href="#" title="Welcome, Horia Simon">Horia Simon</a></span>
						<a class="btn ui-state-default ui-corner-all" href="#">
                                        <span class="ui-icon ui-icon-wrench"></span>
							Settings
						</a>
						<a class="btn ui-state-default ui-corner-all" href="#">
                                        <span class="ui-icon ui-icon-person"></span>
							My account
						</a>
						<a class="btn ui-state-default ui-corner-all" href="#">
                                        <span class="ui-icon ui-icon-power"></span>
							Logout
						</a>						
					</div>-->
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="<?php echo base_url(); ?>js/ui/ui.tabs.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    // Tabs
                    $('#tabs, #tabs2, #tabs5').tabs();
                });
            </script>
            <div id="sub-nav">
                <div class="page-title">
                    <h1>MPD<sup>2</sup></h1>
                    <span>Content Management System</span>
                </div>
                <div id="top-buttons">
                    <!--<a id="modal_confirmation_link" class="btn ui-state-default ui-corner-all" href="#">
                            <span class="ui-icon ui-icon-grip-dotted-horizontal"></span>
				Modal window
			</a>
			<ul class="drop-down">
				<li>
					<a class="btn ui-state-default ui-corner-all" href="javascript:void(0);">
                                            <span class="ui-icon ui-icon-carat-2-n-s"></span>
						Change Theme
					</a>
					<ul id="style-switcher" class="drop-down-container box ui-widget ui-widget-content .ui-corner-tl .ui-corner-tr">
						<li>
							<a id="black_rose" href="#" class="btn ui-state-default full-link ui-corner-all set_theme" title="Black Rose Theme">
                                                            <span class="ui-icon ui-icon-zoomin"></span>
								Black Rose Theme
							</a>
						</li>
						<li>
							<a id="gray_standard" href="#" class="btn ui-state-default full-link ui-corner-all set_theme" title="Gray Standard Theme">
                                                            <span class="ui-icon ui-icon-zoomin"></span>
								Gray Standard Theme
							</a>
						</li>
						<li>
							<a id="gray_lightness" href="#" class="btn ui-state-default full-link ui-corner-all set_theme" title="Gray Lightness Theme">
                                                            <span class="ui-icon ui-icon-zoomin"></span>
								Gray Lightness Theme
							</a>
						</li>
						<li>
							<a id="apple_pie" href="#" class="btn ui-state-default full-link ui-corner-all set_theme" title="Apple Pie Theme">
                                                            <span class="ui-icon ui-icon-zoomin"></span>
								Apple Pie Theme
							</a>
						</li>
						<li>
							<a id="blueberry" href="#" class="btn ui-state-default full-link ui-corner-all set_theme" title="Blueberry Theme">
                                                            <span class="ui-icon ui-icon-zoomin"></span>
								Blueberry Theme
							</a>
						</li>					
					</ul>
				</li>
			</ul>-->	
                </div>
                <div id="dialog" title="Dialog Title">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="modal_confirmation" title="An example modal title ?">
                    <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <div class="clear"></div>
            <div id="page-layout">
                <div id="page-content">
                    <div id="page-content-wrapper">

                        <div id="tabs">
                            <ul>

                                <li><a href="#login">Login</a></li>
                                <li><a href="#tabs-2">Recover Password</a></li>
                                <!--<li><a href="#tabs-3">Recover password</a></li>-->
                            </ul>
                            <div id="login">
                                <!--<div class="response-msg success ui-corner-all">
                                        <span>Success message</span>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit
						</div>-->

                                <?php echo form_open('login/validate_credentials') ?>
                                <ul>
                                    <li>
                                        <label for="Login" class="desc">

										Username:
                                        </label>
                                        <div>
                                                <!--<input type="text" tabindex="1" maxlength="255" value="" class="field text full" name="username" id="username" />-->
                                            <?php echo form_input('Login', '', 'tabindex="1" maxlength="255" value="" class="field text full"  id="Login"') ?>
                                        </div>
                                    </li>
                                    <li>
                                        <label for="Password" class="desc">
										Password:
                                        </label>

                                        <div>
                                                <!--<input type="password" tabindex="1" maxlength="255" value="" class="field text full" name="password" id="password" />-->
                                            <?php echo form_password('Password', '', 'tabindex="1" maxlength="255" value="" class="field text full" id="Password"') ?>
                                        </div>
                                    </li>
                                    <li class="buttons">
                                        <div>
                                            <!--<button class="ui-state-default ui-corner-all float-right ui-button" type="submit">Login</button>-->
                                            <?php echo form_submit('submit', 'Login', 'class="ui-state-default ui-corner-all float-right ui-button"'); ?>
                                        </div>
                                    </li>
                                </ul>
                                <!--</form>-->
                                <?php echo form_close(); ?>
                            </div>
                            <!--<div id="tabs-2">
						<div class="other-box gray-box ui-corner-all">
							<div class="cont ui-corner-all tooltip" title="Example tooltip!">
								<h3>Example information message</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
							</div>
						</div>
                                    <p>You can put a register form here.</p>
					</div>-->
                            <div id="tabs-2">
                                <form action="dashboard.html">
                                    <ul>
                                        <li>
                                            <label for="email" class="desc">
										Registered Email:
                                            </label>
                                            <div>
                                                <input type="text" tabindex="1" maxlength="255" value="" class="field text full" name="email" id="email" />
                                            </div>
                                        </li>
                                        <li class="buttons">
                                            <div>
                                                <button class="ui-state-default ui-corner-all float-right ui-button" type="submit">Send new password</button>
                                            </div>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>



                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </body>
</html>