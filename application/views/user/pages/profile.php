<div class="col-lg-9 mb-3">
    <div class="card-box-shadow bg-white text-dark">
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
                    <div class="col-lg-4" style="margin-top:-40px;">
                        <?= form_open_multipart('user/imgupload/'. $profile->user_id) ; ?>
                            <span class='choose_file' title='Upload Profile Picture' id="imgbtn">
                            <span><i class='fa fa-camera fa-shadow' aria-hidden='true'></i></span>
                            <input type='file' onchange='javascript:this.form.submit();' name='pic' accept='image/*;capture=camera' style="width:60px;">
                            </span>
                            <?= form_close(); ?>
                            <div class="myprofilepic" style="background:url(<?= $photo; ?>" alt="<?= $profile->u_name; ?>)"></div>
                    </div>
                    <div class="col-lg-1"></div>
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
                                        <i class="fa fa-whatsapp fa-lg text-brand"></i>
                                    </div>
                                    <div class="col-10">
                                        <p>
                                            <?= $whatsapp; ?>
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

                            <div class="col-md-12 col-12">
                                <a href="<?= base_url(); ?>user/update_profile/<?= $profile->user_id; ?>" class="btn btn-outline-dark btn-sm float-right"><i class="fa fa-pencil"></i> Update Profile</a>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>
 
</div>
<div class="col-lg-1"></div>
</div>