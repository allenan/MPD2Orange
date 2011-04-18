<article class="module width_full">
    <header><h3 class="tabs_involved">View Users</h3></header>
    <table class="tablesorter" cellspacing="0">
        <thead>
            <tr>
                <th>First</th>
                <th>Last</th>
                <th>Grad Year</th>
                <th>TeamID</th>
                <th>ProjID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alumni as $row): ?>
                <tr>
                    <td><?php echo $row->FirstName; ?></td>
                    <td><?php echo $row->LastName; ?></td>
                    <td><?php echo $row->GraduationYear; ?></td>
                    <td><?php echo $row->TeamID; ?></td>
                    <td><?php echo $row->ProjID; ?></td>
                    <td>
                        <input type="image" src="<?php echo base_url() ?>images/icn_edit.png" title="Edit" onClick="document.location.href='<?php echo base_url(); echo index_page(); echo '/cms/edit/'; echo $row->UserID; ?>'" >
                        <input type="image" src="<?php echo base_url() ?>images/icn_trash.png" title="Trash" onClick="document.location.href='<?php echo base_url(); echo index_page(); echo '/cms/delete/'; echo $row->UserID; ?>'" >
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</article>