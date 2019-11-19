<main class="card p-2">
    <div class="col-md-12 mt-3">
        <h4>Add Dealer</h4>
        <?= $this->session->flashdata('success') ?>
        <hr>
    </div>
    <div class="col-lg-12 mt-2">
        <script src="<?= base_url(); ?>assets/js/nicEdit-latest.js" type="text/javascript"></script>
        <form name="myForm" class="form-horizontal" id="myForm" action="<?= base_url('admin/addNewDealer'); ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="h5"><i class="fa fa-info-circle"></i> Dealer's Personal details</h4>
                    <div class="borderbottom mb-4 ml-4"></div>
                    <div class="tile-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="" class=" ">First name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-sm" name="fname" placeholder="Your First Name" value="<?= set_value('fname') ?>">
                                            <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('fname') ?></small></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="" class=" ">Last name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-sm" name="lname" placeholder="Your Last Name" value="<?= set_value('lname') ?>">
                                            <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('lname') ?></small></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                        <div class="form-group ">
                                            <label for="" class=" ">Contact <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control form-control-sm" name="contact" placeholder="Contact number" value="<?= set_value('contact') ?>">
                                            <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('contact') ?></small></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                        <div class="form-group ">
                                            <label for="" class=" ">Alt. Contact <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control form-control-sm" name="altcontact" placeholder="Alternate Contact number" value="<?= set_value('altcontact') ?>">
                                            <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('altcontact') ?></small></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                        <div class="form-group ">
                                            <label for="" class=" ">Email<span class="text-danger">*</span></label>
                                            <input type="email" class="form-control form-control-sm" name="email" placeholder="Email Address" value="<?= set_value('email') ?>">
                                            <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('email') ?></small></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                        <div class="form-group ">
                                            <label for="" class=" ">City<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-sm" name="city" placeholder="city" value="<?= set_value('city') ?>">
                                            <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('city') ?></small></label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-3 text-centre">
                                <img src="<?= base_url('assets/image/em-boy-1.svg') ?>" alt="profile Image" class="img-fluid" id="dealerImage">
                                <input class="form-control form-control-sm" type="file" name="dealerImage" id="imageInput">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                            <div class="form-group ">
                                <label for="" class=" ">State<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" name="state" placeholder="State" value="<?= set_value('state') ?>">
                                <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('state') ?></small></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                            <div class="form-group ">
                                <label for="" class=" ">Landmark<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" name="landmark" placeholder="landmark" value="<?= set_value('landmark') ?>">
                                <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('landmark') ?></small></label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                           <div class="form-group ">
                                <label for="" class=" ">Bio<span class="text-danger">*</span></label>
                                <textarea class="form-control form-control-sm" name="bio" placeholder="Bio..."><?= set_value('bio') ?></textarea>
                                <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('bio') ?></small></label>
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
    </form>
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
                                required: true,
                                minlength: 12,
                                maxlength: 12,
                                number: true
                            },
                            pan: "required",
                            address: "required"
                        },
                        messages: {},
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
    <script>
        function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#dealerImage').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
      }
  }

  $("#imageInput").change(function() {
      readURL(this);
  });
</script>

</main>
