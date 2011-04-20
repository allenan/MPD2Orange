<article class="module width_full">
    <header><h3 class="tabs_involved">View Projects</h3></header>
    <table class="tablesorter" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Year</th>
                <th>ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projects as $row): ?>
                <tr>
                    <td><?php echo $row->ProjectName; ?></td>
                    <td><?php echo $row->Year; ?></td>
                    <td><?php echo $row->ProjID; ?></td>
                    <td>
                        <input type="image" src="<?php echo base_url() ?>images/icn_edit.png" title="Edit" onClick="document.location.href='<?php echo base_url(); echo index_page(); echo '/cms/edit_project/'; echo $row->ProjID; ?>'" >
                        <input type="image" src="<?php echo base_url() ?>images/icn_trash.png" title="Trash" onClick="document.location.href='<?php echo base_url(); echo index_page(); echo '/cms/delete_project/'; echo $row->ProjID; ?>'" >
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</article>