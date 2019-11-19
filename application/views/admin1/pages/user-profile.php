<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <?php foreach($userprofile as $profile){} ?>
            <h3 class="page-title">User |
                <?= $profile->u_name; ?>
            </h3>
            <div class="panel">
                <div class="panel-body">
                    <?php
                        $photo1 = $profile->u_image;
                        if($photo1 == NULL){
                            $photo = base_url() . "assets/image/user.jpg";
                        }
                        else {
                            $photo = base_url() . "assets/image/users/" . $photo1;
                        }
                    ?>
                        <div class="col-lg-5">
                            <img src="<?= $photo; ?>" alt="<?= $profile->u_name; ?>" class="img-responsive box-shadow">
                        </div>
                        <div class="col-lg-7 pt-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>
                                        <?= $profile->u_name; ?>
                                    </h2>
                                </div>
                                <div class="col-md-12">
                                    <div class="hrbrand"></div>
                                </div>
                                <div class="col-md-12">
                                    <p><i class="fa fa-phone fa-lg text-brand"></i>
                                        <?= $profile->u_contact; ?>
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <p><i class="fa fa-envelope fa-lg text-brand"></i>
                                        <?= $profile->u_email; ?>
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <p><i class="fa fa-user fa-lg text-brand"></i>
                                        <?= $profile->u_gender; ?>
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <p><i class="fa fa-map-marker fa-lg text-brand"></i>
                                        <?= $profile->u_address; ?>
                                    </p>
                                </div>
                                <div class="col-md-12">

                                    <p><i class="fa fa-map-marker fa-lg text-brand"></i>
                                        <?= $profile->u_dist; ?>
                                    </p>
                                </div>
                                <div class="col-md-12">

                                    <p> <i class="fa fa-map-marker fa-lg text-brand"></i>
                                        <?= $profile->u_state; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
