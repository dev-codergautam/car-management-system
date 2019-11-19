<div class="col-lg-9 mb-3">
    <div class="card p-3">
        <div class="row">
            <div class="col-lg-12">
                <h4><a href="<?= base_url(); ?>user/setting" class="fa fa-arrow-circle-left fa-lg nav-link"></a> User Password</h4>
                <div class="hr-brand mb-4"></div>
            </div>
            <div class="col-lg-12">
                <?= $this->session->flashdata('success'); ?>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="card-body text-dark">
                    
                        <?php foreach($profile as $profile){} ?>
                        <?= form_open_multipart('user/update_password/'. $profile->user_id) ; ?>
                            <div class="form-group">
                                <label for="example-text-input" class="">Old Password</label>
                                <input type="password" class="form-control form-control-sm" name="pass" value="<?= set_value('pass');?>">
                                <?= form_error('pass'); ?>
                            </div>
                            <div class="form-group">
                                <label for="example-text-input" class="">New Password</label>
                                <input type="password" class="form-control form-control-sm" name="new_pass" value="">
                                <?= form_error('new_pass'); ?>
                            </div>
                            <div class="form-group">
                                <label for="example-text-input" class="">Confirm Password</label>
                                <input type="password" class="form-control form-control-sm" name="conf_pass" value="">
                                <?= form_error('conf_pass'); ?>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-outline-dark btn-block" name="name" value="Update">
                            </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>
</div>
<div class="col-lg-1"></div>
</div>