<div class="col-lg-12 login-background">
    <div class="row">
        <div class="col-lg-12">
           <?php foreach($profile as $profile){} ?>
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10 mt-3 mb-3">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 bg-white p-lg-5 p-3">
                            <h2 class="text-center h5 text-dark">Validate OTP</h2>
                            <hr class="hrbrand">
                            <?= form_open('user/verify'); ?>
                                <div class="form-group">
                                    <?= $this->session->flashdata('error'); ?>
                                </div>
                                <p class="text-dark mb-4 text-center">A OTP(One Time Password) has been sent to <b><?= $profile->u_email; ?></b></p>
                                <div class="wrap-input100 validate-input" data-validate="Enter OTP">
                                    <input class="input100" type="text" name="newotp" placeholder="Enter code OTP">
                                    <span class="focus-input100"></span>
                                </div>
                                <div class="container-login100-form-btn mt-4">
                                    <input class="login100-form-btn" type="submit" value="Verify">
                                </div>
                                <?= form_close(); ?>
                                <p class="text-dark mt-5 text-center">Didn't get OTP? <a href="<?= base_url(); ?>user/resendOTP" class="nav-link">Resend again!</a></p>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </div>
</div>
