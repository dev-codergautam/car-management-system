<div class="col-lg-9 mb-3">
    <div class="card p-3">
        <div class="row">
            <div class="col-lg-12">
                <h4><a href="<?= base_url(); ?>user/profile" class="fa fa-arrow-circle-left "></a> Request Update of </h4>
                <div class="hr-brand mb-4"></div>
            </div>
            <div class="col-lg-12">
                <?= $this->session->flashdata('success'); ?>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="card-body text-dark">
                        <?php foreach($profile as $profile){} ?>
                        <?= form_open_multipart('user/biz_update/'. $bizz_id); ?>
                            <div class="form-group">
                                <label for="example-text-input" class="">Title</label>
                                <input type="text" class="form-control form-control-sm" name="title" value="<?= set_value('title');?>" placeholder="What do you want to change... (contact no, address, email etc.)">
                                <?= form_error('title'); ?>
                            </div>
                            <input type="hidden" value="<?= $bizz_id; ?>" name="biz_id">
                            <div class="form-group">
                                <label for="example-text-input" class="">Reason for Update</label>
                                <input type="text" class="form-control form-control-sm" name="reason" value="<?= set_value('reason');?>" placeholder="ex (My contact no has been changed)">
                                <?= form_error('reason'); ?>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-outline-dark btn-block" name="name" value="Request Now">
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