

<div id='content' class='grid_12'>
    <div id='alumni_list' class="grid_12">
        <table id="alumni_table" class="display" cellspacing="0" border="0">
            <thead>

            <th>Graduated</th>
            <th>First</th>
            <th>Last</th>
            <th>Current Employer</th>
            <th>Industry</th>
            </thead>
<?php $quote = "'"; $i = 0?>
            <tbody>
                <?php foreach ($alumni as $alum): ?>
                    <tr onmouseover="ChangeColor(this, true, <?php echo $i%2;?>);"
                        onmouseout="ChangeColor(this, false, <?php echo $i%2; ?>);"
                        onclick="DoNav(<?php echo $quote.base_url().index_page().'/site/project/' .
                                        $alum->ProjID .
                                        '/' .
                                        $alum->AlumniID.$quote; ?>);">
                        <?php foreach ($fields as $field_name => $field_display): ?>
                        <td>
                        <?php
                                echo $alum->$field_name;
                        ?>
                        </td>
                    <?php endforeach; ?>
                        </tr>
                        <?php $i++;?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

