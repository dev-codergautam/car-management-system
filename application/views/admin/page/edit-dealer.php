<?php foreach($dealer as $dealer): ?>
<main class="card p-2">
    <div class="col-md-12 mt-3">
        <h4>Edit <?= $dealer->dealerFname  ?>'s Detail</h4>
        <?= $this->session->flashdata('success') ?>
        <hr>
    </div>
    <div class="col-lg-12 mt-2">
        <script src="<?= base_url(); ?>assets/js/nicEdit-latest.js" type="text/javascript"></script>
        <?= form_open(); ?>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="h5"><i class="fa fa-info-circle"></i> Dealer's Personal details</h4>
                    <div class="borderbottom mb-4 ml-4"></div>
                    <div class="tile-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class=" ">First name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-sm" name="fname" placeholder="Your First Name" value="<?= $dealer->dealerFname ?>">
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('fname') ?></small></label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class=" ">Last name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-sm" name="lname" placeholder="Your Last Name" value="<?= $dealer->dealerLname ?>">
                                     <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('lname') ?></small></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                <div class="form-group ">
                                    <label for="" class=" ">Contact <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control form-control-sm" name="contact" placeholder="Contact number" value="<?= $dealer->dealerContact ?>">
                                     <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('contact') ?></small></label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                <div class="form-group ">
                                    <label for="" class=" ">Email<span class="text-danger">*</span></label>
                                    <input type="email" class="form-control form-control-sm" name="email" placeholder="Email Address" value="<?=  $dealer->dealerEmail ?>">
                                     <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('email') ?></small></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                <div class="form-group ">
                                    <label for="" class=" ">Aadhar<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control form-control-sm" name="aadhar" placeholder="Aadhar Number" value="<?=  $dealer->dealerAadhar ?>">
                                     <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('aadhar') ?></small></label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                <div class="form-group ">
                                    <label for="" class=" ">Pan<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-sm" name="pan" placeholder="Pan" value="<?=  $dealer->dealerPan ?>">
                                     <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('pan') ?></small></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="" class="">Full Address <span class="text-danger">*</span> </label>
                                    <textarea name="address" id="" cols="30" rows="2" class="form-control form-control-sm"><?=  $dealer->dealerAddress ?></textarea>
                                     <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('address') ?></small></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group  col-6 offset-lg-6 text-right">
                            <button type="submit" class="btn-primary btn float-right"><i class="fa fa-check"></i> Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        <?= form_close(); ?>
    </div>


    <script type="text/javascript">
        (function($, W, D) {
            var JQUERY4U = {};
            JQUERY4U.UTIL = {
                setupFormValidation: function() {
                    //form validation rules
                    $("#myForm").validate({
                        rules: {
                            fname: "required",
                            lname: "required",
                            contact: {
                                required: true,
                                minlength: 10,
                                maxlength: 10,
                                number: true
                            },
                            email: {
                                required: true,
                                email: true
                            },
                            aadhar: {
                                required:true,
                                minlength: 12,
                                maxlength: 12,
                                number:true
                            },
                            pan: "required",
                            address: "required"
                        },
                        messages : {},
                        submitHandler: function(form) {
                            form.submit();
                        }
                    });
                }
            }
            //when the dom has loaded setup form validation rules
            $(D).ready(function($) {
                JQUERY4U.UTIL.setupFormValidation();
            });
        })(jQuery, window, document);

    </script>

</main>
<?php endforeach; ?>