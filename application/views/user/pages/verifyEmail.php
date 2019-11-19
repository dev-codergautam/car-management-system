<?php $sessionid = $this->session->userdata('user'); ?>
<?php foreach($profile as $profile){} ?>
<div class="col-lg-9 mb-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 bg-white p-lg-5 p-3">
                    <h2 class="text-center h5 text-dark">Email ID</h2>
                    <hr class="hrbrand">
                    <p class="text-center mb-3">- Verify your account -</p>
                    <?= form_open('user/verifyEmail/' . $sessionid); ?>
                        <div class="form-group">
                            <?= $this->session->flashdata('error'); ?>
                        </div>
                        <div class="pt-3 pb-3">
                            <span class="txt1">Email Id</span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Username is required">
                            <input class="input100" type="text" name="email" value="<?= $profile->u_email; ?>">
                            <span class="focus-input100"></span>
                        </div>
                        <?php
                            $str = rand(100000, 999999);
                            $OTP = str_shuffle($str);
                            $OTP;
                        ?>
                       <input type="text" name="otp" value="<?= $OTP; ?>" hidden="hidden">
                        <?= form_error('email'); ?>
                        <div class="container-login100-form-btn mt-4">
                            <input class="login100-form-btn" type="submit" value="Verify">
                        </div>
                        <?= form_close(); ?>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-lg-1"></div>
</div>
