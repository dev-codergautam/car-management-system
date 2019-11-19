<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Users</h3>
            <div class="panel">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email </th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($users as $rows): ?>
                                <tr>
                                    <th><?= $rows->user_id; ?></th>
                                    <td><?= $rows->u_name; ?></td>
                                    <td><?= $rows->u_email; ?></td>
                                    <td><?= $rows->u_contact; ?></td>
                                    <td><?= $rows->u_password; ?></td>
                                    <td><a href="<?= base_url(); ?>admin/user_profile/<?= $rows->user_id; ?>" class="btn btn-danger">profile</a></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-body">
                    <div class="col-md-6">
                        <h6></h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <?= $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
