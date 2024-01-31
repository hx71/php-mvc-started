<div class="container mt-3">


    <h2>Data Users</h2>
    <br>
    <div class="card-header">
        <h3 class="card-title">
            <a href="<?= BASEURL; ?>/users/create" class="btn float-right btn-xs btn btn-primary">Add Users
            </a>
    </div>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="7%">No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php $no = 1; ?>
            <?php foreach ($data['users'] as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td>
                        <a href="<?= BASEURL; ?>/users/edit/<?= $row['id'] ?>">Edit</a>
                        <a href="<?= BASEURL; ?>/users/delete/<?= $row['id'] ?>" onclick="return confirm('Delete data?');">Hapus</a>
                    </td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</div>