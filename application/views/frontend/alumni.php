<!-- ><div id="content" class="grid_12">
	<div id="alumni_list" class="grid_8">
		<li><a href="<?php echo base_url(); echo index_page(); echo'/';?>site/bio">Alumni</a></li>
		<li>Will</li>
		<li>Be</li>
		<li>Listed</li>
		<li>Here</li>
	</div>
</div> -->
	<style>
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
	</style>
<div id='content' class='grid_12'>
	<div id='alumni_list' class="grid_8">
		<table>
			<thead>
				<?php foreach ($fields as $field_name => $field_display): ?>
				<th>
					<?php echo anchor("site/alumni/$field_name/" .
					(($sort_order == 'desc' && $sort_by == $field_name) ? 'asc' : 'desc'),
					$field_display); ?>
				</th>
				<?php endforeach; ?> 
			</thead>
			
			<tbody>
				<?php foreach ($alumni as $alum): ?>
					<tr>
						<?php foreach ($fields as $field_name => $field_display): ?>
							<td>
								<?php echo $alum->$field_name; ?>
							</td>
						<?php endforeach; ?>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

