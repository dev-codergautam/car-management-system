<div class="col-lg-9 mb-3">
    <div class="row">
       <div class="col-lg-12">
            <?= $this->session->flashdata('success'); ?>
        </div>
        <?php if(!empty($mybusiness)): ?>
        <?php foreach($mybusiness as $rows): ?>
        <div class="col-lg-12 mb-3">
            <div class="box-shadow p-4 card">
                <div class="row">
                    <div class="col-lg-8 mt-3">
                        <h1 class="font-weight-light">
                            <?= $rows->business_name ?>
                        </h1>
                        <div class="hrbrand"></div>
                        <h4 class="text-brand font-weight-light"><b><?= $rows->category ?></b></h4>
                    </div>
                    <?php if($rows->status == 0 || $rows->status == 1) { ?>
                    <div class="col-lg-4">
                        <a href="<?= base_url(); ?>user/confirm/<?= $rows->id; ?>" class="btn btn-outline-dark btn-sm">Deactivate</a>
                    </div>
                    <?php }else{?>
                    <div class="col-lg-4">
                        <a href="<?= base_url(); ?>home/contact" class="btn btn-outline-danger btn-sm">Activate</a>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <?php else:?>
        <div class="col-lg-12">
            <div class='alert alert-primary p-3'>
                <h2 class='h5'><i class='fa fa-meh-o fa-lg'></i> Not Found Any Business</h2>
                <p class='m-0 p-0 mt-4'> Reason for erro may be due to..</p>
                <ol>
                    <li>There is no related business to your profile</li>
                    <li>Add Business<a href='add_business' class='alert-link text-danger'> Click here to add your Business </a></li>
                    <li>We will approve your business list as soon as possible...</li>
                </ol>
            </div>
        </div>
        <?php endif;?>
    </div>
</div>
</div>
<div class="col-lg-1"></div>
</div>