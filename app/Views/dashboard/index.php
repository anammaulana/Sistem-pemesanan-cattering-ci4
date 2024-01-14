<!-- File: app/Views/domains/index.php -->

<h2>Domain List</h2>

<table>
    <thead>
        <tr>
            <th>Nama Domain</th>
            <th>OPD</th>
            <th>Deskripsi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($domains as $domain): ?>
            <tr>
                <td><?= $domain['nama_domain'] ?></td>
                <td><?= $domain['opd_id'] ?></td>
                <td><?= $domain['deskripsi'] ?></td>
                <td>
                    <a href="<?= site_url('domains/edit/' . $domain['id']) ?>">Edit</a>
                    <a href="<?= site_url('domains/delete/' . $domain['id']) ?>" onclick="return confirm('Are you sure you want to delete this domain?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
