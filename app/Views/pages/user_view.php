<div class="container mt-4 page-content">
    <div class="d-flex">
        <h2 class="title"><i class="fa-solid fa-users fa-xs subheader-icon"></i> Users List</h2>
        <a href="<?php echo site_url('/add-user') ?>" class="btn btn-ci4 mb-2">
        <i class="fa-solid fa-user-plus fa-xs"></i> Add user
        </a>
    </div>
    <h3 class="subtitle">List of all users</h3>

    <div class="card">
        <table class="stripe" id="users-list">
            <thead>
                <tr>
                    <th width="5%">ID</th>
                    <th width="20%">FirstName</th>
                    <th width="20%">Lastname</th>
                    <th width="20%">Email</th>
                    <th width="20%">Mobile</th>
                    <th width="15%">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($users) : ?>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?php echo $user['id'] ?></td>
                            <td><?php echo $user['firstname'] ?></td>
                            <td><?php echo $user['lastname'] ?></td>
                            <td><?php echo $user['email'] ?></td>
                            <td><?php echo $user['mobile'] ?></td>
                            <td>
                                <a href="<?php echo base_url('detail-view/' . $user['id']); ?>" class="btn tx-info"><i class="fa-solid fa-eye fa-sm"></i></a>
                                <a href="<?php echo base_url('edit-view/' . $user['id']); ?>" class="btn tx-edit"><i class="fa-solid fa-pen-to-square fa-sm"></i></a>
                                <a href="<?php echo base_url('delete/' . $user['id']); ?>" class="btn tx-delete"><i class="fa-solid fa-trash-can fa-sm"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>

        </table>

    </div>