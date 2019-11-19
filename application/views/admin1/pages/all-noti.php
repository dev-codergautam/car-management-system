<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">All Notification Sended by Admin</h3>
            <div class="panel">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Notification</th>
                                    <th scope="col">To </th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($noti as $rows): ?>
                                <?php 
                                    $user_name =  $this->admin_datawork->get_data('users',['user_id' => $rows->n_userid]);
                                ?>
                                
                                <?php 
                                    if($rows->n_userid == 0){ $notify = "All"; } else { $notify = $rows->n_userid; } ?>
                                
                                <tr>
                                    <th><?= $rows->n_id; ?></th>
                                    <th><?= $rows->n_message; ?></th>
                                    <td><?= $notify; ?></td>
                                    <td><a href="#" class="btn btn-danger">profile</a></td>
                                </tr>
                                <?php endforeach; ?>                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
