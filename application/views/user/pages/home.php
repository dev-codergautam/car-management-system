<div class="col-lg-9 mb-3">
    <div class="row">
        <div class="col-lg-12">
            <h5><a href="<?= base_url(); ?>user/index" class="fa fa-arrow-circle-left fa-lg nav-link"></a> My Business List</h5>
            <div class="hr-brand mb-4"></div>
        </div>
        <div class="col-lg-12">
            <?= $this->session->flashdata('success'); ?>
        </div>
        <?php if(!empty($mybusiness)): ?>
        <?php foreach($mybusiness as $rows): ?>
        <?php
            $photo1 = $rows->pic;
            if($photo1 == ""){
                $photo = base_url() . "assets/image/default.png";
            }
            else {
            $photo = base_url() . "assets/clients/" . $photo1;
            }
        ?>
            <div class="col-lg-12 mb-3">
                <div class="box-shadow p-4 card">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="work mb-0">
                                <div class="work-grid mb-0" style="background-image:url(<?= $photo; ?>);">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 mt-3">
                            <?php if($rows->status == 1) { ?>
                            <span href="" class="bg-success btn text-white p-2 float-right">
                               <span class="lnr lnr-neutral"></span> Pending for approval
                            </span>
                            <?php } elseif($rows->status == 2) { ?>
                            <span href="" class="bg-danger btn text-white p-2 float-right">
                               <span class="lnr lnr-sad"></span> Deactivated
                            </span>
                            <?php } else { ?>
                            <span href="" class="bg-brand btn text-white p-2 float-right">
                              <span class="lnr lnr-smile"></span> Active
                            </span>
                            <?php } ?>
                            <h4 class="font-weight-light">
                                <?= $rows->business_name ?>
                            </h4>
                            <div class="hrbrand"></div>
                            <h6 class="text-brand font-weight-light">Business Category : <b><?= $rows->category ?></b></h6>
                            <p>
                                <?= $rows->description; ?>
                            </p>
                            <?php if($rows->step_status == 0) : ?>
                            <div class="text-right">
                                <a href="<?= base_url(); ?>user/add_gallery/<?= $rows->id; ?>" class="btn btn-outline-dark">Add Gallery</a>
                                <a href="<?= base_url(); ?>user/mybusiness/<?= $rows->name_slug; ?>" class="btn btn-outline-dark float-right ml-3">View</a>
                            </div>
                            <?php else: ?>
                             <div class="text-right">
                                <a href="<?= base_url(); ?>user/addNewStep2/<?= $rows->id; ?>" class="btn btn-outline-dark">Continue to step-2</a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php else:?>
            <div class="col-lg-12">
                <div class='alert alert-default p-3 text-dark'>
                    <h2 class='h5'><i class='fa fa-meh-o fa-lg'></i> Not found any business</h2>
                    <p class='m-0 p-0 mt-4'> Reason for error may be due to..</p>
                    <ol>
                        <li>No business listed at your profile</li>
                        <li><a href='<?= base_url(); ?>user/addNew' class='alert-link text-danger'> Click here</a> to add Business</li>
                        <li>Or contact us</li>
                    </ol>
                </div>
            </div>
            <?php endif;?>
    </div>
</div>
</div>
<div class="col-lg-1"></div>
</div>