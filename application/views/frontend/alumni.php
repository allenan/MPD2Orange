<!-- ><div id="content" class="grid_12">
	<div id="alumni_list" class="grid_8">
		<li><a href="<?php echo base_url();
echo index_page();
echo'/'; ?>site/bio">Alumni</a></li>
		<li>Will</li>
		<li>Be</li>
		<li>Listed</li>
		<li>Here</li>
	</div>
</div> -->
        <!--<style>
		* {
			font-family: Arial;
			font-size: 12px;
		}
		table {
			border-collapse: collapse;
		}
		td, th {
			border: 1px solid #666666;
			padding:  4px;
		}
		div {
			margin: 4px;
		}
		.sort_asc:after {
			content: "▲";
		}
		.sort_desc:after {
			content: "▼";
		}
	</style>-->
<div id='content' class='grid_12'>
    <div id='alumni_list' class="grid_12">
        <table id="alumni_table" class="display" cellspacing="0" border="0">
            <thead>
                <!--<?php //foreach ($fields as $field_name => $field_display): ?>
                <th <?php //if($sort_by == $field_name) echo "class=\"sort_$sort_order\"" ?>>
                <?php /* echo anchor("site/alumni/$field_name/" .
                  (($sort_order == 'desc' && $sort_by == $field_name) ? 'asc' : 'desc'),
                  $field_display); */ ?>
				</th>
<?php //endforeach;  ?> -->
            <th>Graduated</th>
            <th>First</th>
            <th>Last</th>
            <th>Current Employer</th>
            <th>Industry</th>
            </thead>

            <tbody>
                    <?php foreach ($alumni as $alum): ?>
                    <tr>
                        <?php foreach ($fields as $field_name => $field_display): ?>
                        <td>
                        <?php
                            if ($field_display == 'Last')
                                echo anchor("site/bio/" .
                                        $alum->AlumniID,
                                        $alum->$field_name);
                            else
                                echo $alum->$field_name;
                        ?>
                                </td>
<?php endforeach; ?>
                            </tr>
<?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

