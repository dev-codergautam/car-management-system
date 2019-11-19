<?php foreach($dealer as $dealer): ?>
   <main class="card p-2">
    <div class="col-md-12 mt-3">
        <h4><?= $dealer->dealerFname ?> <?= $dealer->dealerLname ?></h4>
        <hr>
    </div>
    <div class="col-lg-12 mt-2">
        <div class="row">
            <div class="col-md-7">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <div class="form-group">
                            <label for="" class=" ">Full name </label>
                            <h3 class="text-muted h6 ml-3"><?= $dealer->dealerFname; ?> <?= $dealer->dealerLname; ?></h3>
                        </div>
                        <div class="form-group ">
                            <label for="" class=" ">Contact </label>
                            <h3 class="text-muted h6 ml-3"><?= $dealer->dealerContact; ?></h3>
                        </div>
                        <div class="form-group ">
                            <label for="" class=" ">Alt. Contact </label>
                            <h3 class="text-muted h6 ml-3"><?= $dealer->dealerAltContact; ?></h3>
                        </div>
                        <div class="form-group ">
                            <label for="" class=" ">Email</label>
                            <h3 class="text-muted h6 ml-3"><?= $dealer->dealerEmail; ?></h3>
                        </div>
                            </div>
                            <div class="col-lg-5 col-12">
                                <?php if($dealer->dealerImage != ""): ?>
                                <img src="<?= base_url(); ?>assets/image/dealer/<?php echo $dealer->dealerImage; ?>" alt="<?= $dealer->dealerFname; ?> <?= $dealer->dealerLname; ?>" style="width:160px; height:auto;">
                                <?php else: ?>
                                <img src="<?= base_url(); ?>assets/image/em-boy-1.svg" alt="<?= $dealer->dealerFname; ?> <?= $dealer->dealerLname; ?>" style="width:160px; height:auto;">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="tile">
                    <div class="tile-body">
                        <div class="form-group ">
                            <label for="" class=" ">Ciy</label>
                            <h3 class="text-muted h6 ml-3"><?= $dealer->dealerCity; ?></h3>
                        </div>
                        <div class="form-group ">
                            <label for="" class=" ">State</label>
                            <h3 class="text-muted h6 ml-3"><?= $dealer->dealerState; ?></h3>
                        </div>
                        <div class="form-group">
                            <label for="" class="">Landmark </label>
                            <h3 class="text-muted h6 ml-3"><?= $dealer->dealerLandmark; ?></h3>
                        </div>
                        <div class="form-group">
                            <label for="" class="">Bio </label>
                            <h3 class="text-muted h6 ml-3"><?= $dealer->dealerBio; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php endforeach; ?>