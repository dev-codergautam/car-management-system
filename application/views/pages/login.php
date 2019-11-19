<?php
    if(isset($_POST['reg_btn'])){
        echo'
            <script>
                $(document).ready(function(){
                    $("#first").hide();                    
                    $("#second").show();                    
                });
            </script>';
    }
?>
    <style>
        #second {
            display: none;
        }

    </style>
    <div class="col-lg-12 login-background">
        <div class="row">
            <div class="col-lg-12 d-none d-lg-block text-center">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- business-gallery -->
                <ins class="adsbygoogle" style="display:inline-block;width:970px;height:90px" data-ad-client="ca-pub-2867182879802044" data-ad-slot="2686912360"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});

                </script>
            </div>

            <div class="col-lg-12 d-md-none text-center">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- mobile banner -->
                <ins class="adsbygoogle" style="display:inline-block;width:320px;height:50px" data-ad-client="ca-pub-2867182879802044" data-ad-slot="9427865948"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});

                </script>
            </div>

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10 mt-3 mb-3">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6 bg-white p-lg-5 p-3">
                                <h2 class="text-center h5 text-dark">Login or signup with BNM</h2>
                                <hr class="hrbrand">
                                <p class="text-center mb-3 txt1">- EASILY USING -</p>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <a href="<?= $authURL; ?>" class="btn-face mb-3 col-lg-6">
                                    <i class="fa fa-facebook-official fb-color"></i>
                                    Facebook
                                </a>
                                        <a href="<?php echo $loginURL; ?>" class="btn-google mb-3 col-lg-6">
                                    <img src="<?= base_url(); ?>assets/image/icon-google.png" alt="GOOGLE">
                                    Google
                                </a>
                                    </div>
                                </div>

                                <div id="first">
                                    <p class="text-center mt-4 txt1">- OR USING EMAIL -</p>
                                    <?= form_open('home/login'); ?>
                                        <div class="form-group col-12">
                                            <?= $this->session->flashdata('error'); ?>
                                        </div>
                                        <div class="pb-3">
                                            <span class="txt1">Email or Contact</span>
                                        </div>
                                        <div class="wrap-input100 validate-input" data-validate="Username is required">
                                            <input class="input100" type="text" name="username" value="<?= set_value('username');?>">
                                            <span class="focus-input100"></span>
                                        </div>
                                        <?= form_error('username');?>
                                            <div class="pt-4 pb-3">
                                                <span class="txt1"> Password </span>
                                                <a href="#" class="txt2 bo1 m-l-5"> Forgot? </a>
                                            </div>
                                            <div class="wrap-input100 validate-input" data-validate="Password is required">
                                                <input class="input100" type="password" name="password">
                                                <span class="focus-input100"></span>

                                            </div>
                                            <?= form_error('password');?>
                                                <div class="container-login100-form-btn mt-4">
                                                    <input class="login100-form-btn" type="submit" name="login_btn" value="Sign In">
                                                </div>

                                                <div class="w-full text-center pt-4">
                                                    <span class="txt2">Not a member?</span>
                                                    <a href="#" class="txt2 bo1" id="signup">Sign up now</a>
                                                </div>
                                                <?= form_close(); ?>
                                </div>
                                <div id="second">
                                    <p class="text-center mt-4 txt1 mb-4">- OR FILL HERE -</p>
                                    <?= form_open('home/signup'); ?>
                                        <div class="form-group col-12">
                                            <label class="sr-only" for="inlineFormInputGroupUsername2">Name</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Name" name="name" value="<?= set_value('name');?>">
                                            </div>
                                            <?= form_error('name');?>
                                        </div>

                                        <div class="form-group col-12">
                                            <label class="sr-only" for="inlineFormInputGroupUsername2">Contact</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-phone"></i></div>
                                                </div>
                                                <input type="number" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Contact" name="contact" value="<?= set_value('contact');?>">
                                            </div>
                                            <?= form_error('contact');?>
                                        </div>

                                        <div class="form-group col-12">
                                            <label class="sr-only" for="inlineFormInputGroupUsername2">Email</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Email" name="email" value="<?= set_value('email');?>">
                                            </div>
                                            <?= form_error('email');?>
                                        </div>

                                        <div class="form-group col-12">
                                            <label class="sr-only" for="inlineFormInputGroupUsername2">Password</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-key"></i></div>
                                                </div>
                                                <input type="password" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Password" name="reg_password" value="<?= set_value('reg_password');?>">

                                            </div>
                                            <small class="text-dark">Your password must be 6-20 characters long.</small>
                                            <?= form_error('reg_password');?>
                                        </div>

                                        <div class="form-group col-12">
                                            <label class="sr-only" for="inlineFormInputGroupUsername2">Confirm Password</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-key"></i></div>
                                                </div>
                                                <input type="password" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Confirm Password" name="cpassword" value="<?= set_value('cpassword');?>">

                                            </div>
                                            <?= form_error('cpassword');?>
                                        </div>
                                        <?php
                                            $str = rand(100000, 999999);
                                            $OTP = str_shuffle($str);
                                            $OTP;
                                        ?>
                                            <input type="text" name="otp" value="<?= $OTP; ?>" hidden="hidden">

                                            <div class="form-group col-12 text-center">
                                                <input class="btn rounded-0 btn-block btn-outline-dark" type="submit" name="reg_btn" id="example-text-input" value="Sign Up">
                                            </div>
                                            <div class="form-group col-12 text-center">
                                                <a href="#" id="signin" class="signin">Already have an account? Login here!</a>
                                            </div>
                                            <?= form_close(); ?>
                                </div>
                            </div>
                            <div class="col-lg-3"></div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>

            <div class="col-lg-12 d-none d-lg-block text-center">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- business-gallery -->
                <ins class="adsbygoogle" style="display:inline-block;width:970px;height:90px" data-ad-client="ca-pub-2867182879802044" data-ad-slot="2686912360"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});

                </script>
            </div>

            <div class="col-lg-12 d-md-none text-center">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- mobile banner -->
                <ins class="adsbygoogle" style="display:inline-block;width:320px;height:50px" data-ad-client="ca-pub-2867182879802044" data-ad-slot="9427865948"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});

                </script>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            //onclick signup, hide login and show registration form.
            $("#signup").click(function() {
                $("#first").slideUp("slow", function() {
                    $("#second").slideDown("slow");
                });
            });

            //onclick signup, hide registration and show login form.
            $("#signin").click(function() {
                $("#second").slideUp("slow", function() {
                    $("#first").slideDown("slow");
                });
            });
        });

    </script>
