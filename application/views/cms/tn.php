<?php $ratio = 1.25; ?>
<html>
    <head>

        <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.Jcrop.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery.Jcrop.css" type="text/css" />
        <!--		<link rel="stylesheet" href="demo_files/demos.css" type="text/css" />-->

        <script language="Javascript">

            // Remember to invoke within jQuery(window).load(...)
            // If you don't, Jcrop may not initialize properly
            jQuery(window).load(function(){

                jQuery('#cropbox').Jcrop({
                    onChange: showPreview,
                    onSelect: showPreview,
                    aspectRatio: <?php echo $ratio;?>
                });

            });


            // Our simple event handler, called from onChange and onSelect
            // event handlers, as per the Jcrop invocation above
            function showPreview(coords)
            {
                if (parseInt(coords.w) > 0)
                {
                    var rx = 100 / coords.w;
                    var ry = 100 / coords.h;

                    jQuery('#preview').css({
                        width: Math.round(rx * <?php echo $img_width; ?>) + 'px',
                        height: Math.round(ry * <?php echo $img_height; ?>) + 'px',
                        marginLeft: '-' + Math.round(rx * coords.x) + 'px',
                        marginTop: '-' + Math.round(ry * coords.y) + 'px'
                    });

                    jQuery('#x').val(coords.x);
                    jQuery('#y').val(coords.y);
                    jQuery('#x2').val(coords.x2);
                    jQuery('#y2').val(coords.y2);
                    jQuery('#w').val(coords.w);
                    jQuery('#h').val(coords.h);
                }
            }


        </script>

    </head>

    <body>

        <div id="outer">
            <div class="jcExample">
                <div class="article">

                    <h1>Jcrop - Aspect ratio lock w/ preview pane</h1>

                    <!-- This is the image we're attaching Jcrop to -->
                    <table>
                        <tr>
                            <td>
                                <img src="<?php echo base_url(); ?>uploads/<?php echo $img_url; ?>" id="cropbox" />
                            </td>
                            <td>
                                <div style="width:125px;height:100px;overflow:hidden;">
                                    <img src="<?php echo base_url(); ?>uploads/<?php echo $img_url; ?>" id="preview" />
                                </div>

                            </td>
                        </tr>
                    </table>

                    <?php echo form_open('upload/make_tn'); ?>
                    <label>X1 <input type="text" name="x" id="x" size="4"></label>
                    <label>Y1 <input type="text" name="y" id="y" size="4"></label>
                    <label>X2 <input type="text" name="x2" id="x2" size="4"></label>
                    <label>Y2 <input type="text" name="y2" id="y2" size="4"></label>
                    <label>W <input type="text" name="w" id="w" size="4"></label>
                    <label>H <input type="text" name="h" id="h" size="4"></label>
                    <?php echo form_hidden('url', $img_url); ?>
                    <?php echo form_submit('make_thumbnail', 'Make Thumbnail'); ?>
                    <?php echo form_close(); ?>



                </div>
            </div>
        </div>
    </body>

</html>