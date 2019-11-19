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
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($contact as $rows): ?>
                                <tr>
                                    <th><?= $rows->c_id; ?></th>
                                    <td><?= $rows->c_name; ?></td>
                                    <td><?= $rows->c_email; ?></td>
                                    <td><?= $rows->c_contact; ?></td>
                                    <td><a href="" class="btn btn-danger">view</a></td>
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
