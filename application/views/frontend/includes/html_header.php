<html>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/960.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/reset.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/text.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/default.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/demo_table.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/sliderkit-core.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/sliderkit-demos.css" media="screen, projection" />
        <!--<script type="text/javascript" src="js/prototype.js"></script>
        <script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
        <script type="text/javascript" src="js/lightbox.js"></script>-->

        <script src="<?php echo base_url() ?>js/jquery.js" language="javascript" type="text/javascript" ></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.sliderkit.1.4.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easing.1.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript">
            jQuery(window).load(function(){
                jQuery(".photosgallery-vertical").sliderkit({
                    debug:true,
                    circular:true,
                    shownavitems:4,
                    verticalnav:true,
                    navclipcenter:true,
                    start:<?php echo $which_alumni; ?>,
                    auto:false
                });
                jQuery(".tabs-imbricate").sliderkit({
                    cssprefix:"customtabs",
                    auto:false,
                    tabs:true,
                    start:<?php echo $start_val; ?>
                });
            });

        </script>
        <script src="<?php echo base_url() ?>js/jquery.dataTables.js" language="javascript" type="text/javascript" /></script>
        <script charset="utf-8" type="text/javascript">
            $(document).ready(function() {
                $('#alumni_table').dataTable({
					"aaSorting":[[0,'desc']]
				});
            } );
        </script>

        <script type="text/javascript">
            function ChangeColor(tableRow, highLight, odd)
            {
                if (highLight)
                {

                    tableRow.style.backgroundColor = '#7d74ad';
                }
                else
                {
                    if (odd)
                        tableRow.style.backgroundColor = 'white';
                    else
                        tableRow.style.backgroundColor = 'e2e4ff';
                }
            }

            function DoNav(theUrl)
            {
                document.location.href = theUrl;
            }
        </script>


        <!--<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />-->
    </head>