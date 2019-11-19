<div class="col-lg-12 mt-lg-3">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-8">
           <div class="col-lg-12 m-0 p-0 profile">
           </div>
            <div class="bg-white text-dark">
                <div class="row">
                    <?php foreach($profile as $profile){} ?>
                    <?php
                $photo1 = $profile->u_image;
                if($photo1 == NULL){
                    $photo = base_url() . "assets/image/user.jpg";
                }
                else {
                    $photo = base_url() . "assets/image/users/" . $photo1;
                }
            ?>
                        <?php
                $photo1 = $profile->u_image;
                if($photo1 == NULL){
                    $photo = base_url() . "assets/image/user.jpg";
                }
                else {
                    $photo = base_url() . "assets/image/users/" . $photo1;
                }
            ?>
                <?php
                if($profile->u_address==NULL):
                    $address    = "N/A";
                else:
                    $address    = $profile->u_address;
                endif;
            ?>
            <?php
                if($profile->u_contact==NULL):
                    $contact    = "N/A";
                else:
                    $contact    = $profile->u_contact;
                endif;
            ?>
            <?php
                if($profile->u_whatsapp==NULL):
                    $whatsapp    = "N/A";
                else:
                    $whatsapp    = $profile->u_whatsapp;
                endif;
            ?>
               <?php
                if($profile->u_dist==NULL):
                    $dist       = "N/A";
                else:
                    $dist       = $profile->u_dist;
                endif;
            ?>
               <?php
                if($profile->u_state==NULL):
                    $state      = "N/A";
                else:
                    $state      = $profile->u_state;
                endif;
            ?>
               <?php
                if($profile->u_email==NULL):
                    $email      = "N/A";
                else:
                    $email      = $profile->u_email;
                endif;
            ?>
               <?php
                if($profile->u_gender==NULL):
                    $gender     = "N/A";
                else:
                    $gender     = $profile->u_gender;
                endif;
            ?>
                            <div class="col-lg-12 text-center">
                               <img src="<?= $photo; ?>" alt="<?= $profile->u_name; ?>" class="img-fluid rounded-circle " style="width:120px;height:120px;margin-top:-50px;">
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8 pt-3">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h3>
                                            <?= $profile->u_name; ?>
                                        </h3>
                                        <hr class="hrbrand">
                                        <p><i class="fa fa-user-o"></i> Business Owner</p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fa fa-phone fa-lg text-brand"></i>
                                            </div>
                                            <div class="col-10">
                                                <p>
                                                    <?= $contact; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fa fa-envelope fa-lg text-brand"></i>
                                            </div>
                                            <div class="col-10">
                                                <p>
                                                    <?= $email; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fa fa-user fa-lg text-brand"></i>
                                            </div>
                                            <div class="col-10">
                                                <p>
                                                    <?= $gender; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fa fa-map-marker fa-lg text-brand"></i>
                                            </div>
                                            <div class="col-10">
                                                <p>
                                                    <?= $address; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fa fa-map-marker fa-lg text-brand"></i>
                                            </div>
                                            <div class="col-10">
                                                <p>
                                                    <?= $dist; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fa fa-map-marker fa-lg text-brand"></i>
                                            </div>
                                            <div class="col-10">
                                                <p>
                                                    <?= $state; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="box-shadow card mb-3">
                <div class="card-body">
                    <h6 class="card-title small text-uppercase"><b>CATEGORIES</b></h6>
                    <?php foreach($maincat as $cats):?>
                    <a href="<?= base_url() . $cats->main_titleslug; ?>" class='nav-link text-dark p-0'>
                        <div class='listbar_small col-lg-12 p-2'>
                            <div class="row">
                                <div class="col-2">
                                <img src="<?= base_url(); ?>assets/image/<?= $cats->main_image; ?>" alt="" class="small-image">
                                </div>
                                <div class="col-10 text-truncate">
                                    <?= $cats->main_title; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-8">
            <div class="row">
                <?php foreach($userbizz as $row): ?>
                <?php
                    $photo1 = $row->pic;
                    if($photo1 == NULL){
                        $photo = base_url() . "assets/image/default.png";
                    }
                    else {
                        $photo = base_url() . "assets/clients/" . $photo1;
                    }
                $b_id = $row->id;
                ?>
                    <!-- Rating -->
                    <?php 
                if($this->datawork->count_data('rating',['r_bizzid' => $row->id]) > 0){
                    $c = $this->datawork->count_data('rating',['r_bizzid' => $row->id]);
                }
                else{
                    $c = 0;
                }
                ?>
                    <?php
                if($c == 0){
                    $message = "Not rated yet";
                }
                elseif($c == 1){
                    $message = $c . " Rating";
                }
                else{
                    $message = $c . " Ratings";
                }
                ?>
                        <?php 
                            // rate count in average
                            foreach ($totalrat as $totalrate){
                                if($b_id == $totalrate->r_bizzid){
                                     $array[] = $totalrate->rate;
                                }
                                else{
                                    $i = 0;
                                }
                            }
                        ?>
                        <?php
                        if((!empty($array)) && ($c > 0)){
                            $totalbizzrate = array_sum($array);
                                $avg = $totalbizzrate / $c;
                        } else{
                            $avg = 0;
                        }
                        ?>

                            <?php
                        if($avg == ""){
                            $avgstar = "<i class='fa fa-star-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>";
                        }
                        elseif($avg <= 1){
                            $avgstar = "<i class='fa fa-star text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>";
                        }
                        elseif($avg <= 1.5){
                            $avgstar = "<i class='fa fa-star text-danger ml-lg-1'></i>
                            <i class='fa fa-star-half-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>";
                        }
                        elseif($avg <= 2){
                            $avgstar = "<i class='fa fa-star text-danger ml-lg-1'></i>
                            <i class='fa fa-star text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>";
                        }
                        elseif($avg <= 2.5){
                            $avgstar = "<i class='fa fa-star text-green ml-lg-1'></i>
                            <i class='fa fa-star text-green ml-lg-1'></i>
                            <i class='fa fa-star-half-o text-green ml-lg-1'></i>
                            <i class='fa fa-star-o text-green ml-lg-1'></i>
                            <i class='fa fa-star-o text-green ml-lg-1'></i>";
                        }
                        elseif($avg <= 3){
                            $avgstar = "<i class='fa fa-star text-green ml-lg-1'></i>
                            <i class='fa fa-star text-green ml-lg-1'></i>
                            <i class='fa fa-star text-green ml-lg-1'></i>
                            <i class='fa fa-star-o text-green ml-lg-1'></i>
                            <i class='fa fa-star-o text-green ml-lg-1'></i>";
                        }
                        elseif($avg <= 3.5){
                            $avgstar = "<i class='fa fa-star text-green ml-lg-1'></i>
                            <i class='fa fa-star text-green ml-lg-1'></i>
                            <i class='fa fa-star text-green ml-lg-1'></i>
                            <i class='fa fa-star-half-o text-green ml-lg-1'></i>
                            <i class='fa fa-star-o text-green ml-lg-1'></i>";
                        }
                        elseif($avg <= 4){
                            $avgstar = "<i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star-o text-warning ml-lg-1'></i>";
                        }
                        elseif($avg <= 4.5){
                            $avgstar = "<i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star-half-o text-warning ml-lg-1'></i>";
                        }
                        else{
                            $avgstar = "<i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star text-warning ml-lg-1'></i>";
                        }
                        ?>

                                <div class="col-lg-12 mb-3">

                                    <a href="<?= base_url(); ?>home/business/<?= $row->name_slug;?>" class="nav-link bo-shadow box-shadow2">
                                        <div class="row">
                                            <div class="col-lg-4 col-6">
                                                <div class="mysearch" style="background-image:url(<?= $photo; ?>);">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-6 mt-lg-4">
                                                <div class="text-dark">
                                                    <p class="srch-1 mb-0">
                                                        <?= $row->business_name;?>
                                                    </p>
                                                    <p class="srch-2 text-danger mb-0">
                                                        <?= "$row->address, $row->city";?>
                                                    </p>
                                                    <p class="d-none d-lg-block mb-0">
                                                        Contact :
                                                        <?= $row->contact;?>
                                                    </p>
                                                    <p class="d-none d-lg-block mb-0">
                                                        Business Category :
                                                        <b><?= $row->category;?></b>
                                                    </p>
                                                    <p class="d-md-none mb-0">
                                                        <b><?= $row->category;?></b>
                                                    </p>
                                                    <p class="card-text">
                                                        <?= $avgstar; ?> <br> <small>(<?= $message; ?>)</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>