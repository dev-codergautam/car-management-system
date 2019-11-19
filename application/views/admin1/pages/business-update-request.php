<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Business Update Request</h3>
            <div class="panel">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">User ID</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Business ID </th>
                                    <th scope="col">Business Title </th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($bizupdate as $rows): ?>
                                <?php $biz =  $this->admin_datawork->get_data('bizz',['id' => $rows->up_businessid]);
                                foreach($biz as $bizz_title):  ?>
                                <?php $user =  $this->admin_datawork->get_data('users',['user_id' => $rows->up_userid]);
                                foreach($user as $username):  ?>
                                <tr>
                                    <th>
                                        <?= $rows->up_id; ?>
                                    </th>
                                    <th>
                                        <?= $rows->up_userid; ?>
                                    </th>
                                    <th>
                                        <?= $username->u_name; ?>
                                    </th>
                                    <th>
                                        <?= $rows->up_businessid; ?>
                                    </th>
                                    <th>
                                        <?= $bizz_title->business_name; ?>
                                    </th>
                                    <td>
                                        <?= $rows->up_title; ?>
                                    </td>
                                    <td><a href="<?= base_url(); ?>admin/view_business_update_request/<?= $rows->up_businessid; ?>" class="btn btn-danger">Update</a></td>
                                </tr>
                                <?php endforeach; ?>
                                <?php endforeach; ?>
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