<?php foreach($profile as $profile){} ?>
   <div class="col-lg-9 mb-3">
    <div class="card p-3">
        <div class="row">
            <div class="col-lg-12">
                <h5><a href="<?= base_url(); ?>user/index" class="fa fa-arrow-circle-left fa-lg nav-link"></a> User Setting</h5>
                <div class="hr-brand mb-4"></div>
            </div>
            <div class="col-lg-12">
                <ul class="">
                   <?php
                    if(!empty($profile->oauth_uid)){
                        
                    }
                    else { ?>
                        <li><a href="<?= base_url(); ?>user/password" class="nav-link">Change Password</a></li>
                    <?php } ?>
                    
                    <li><a href="<?= base_url(); ?>user/update_profile/<?= $profile->user_id; ?>" class="nav-link">Update your profile</a></li>
                    <li><a href="<?= base_url(); ?>user" class="nav-link">Request for update your business</a></li>
                    <li><a href="<?= base_url(); ?>user/deactivate_mybusiness" class="nav-link">Deactive My business</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-lg-1"></div>
</div>