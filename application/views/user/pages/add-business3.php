<div class="col-lg-9 mb-3">
    <div class="card p-3">
        <?php foreach($profile as $profile){} ?>
        <?php
            $name = $profile->u_name; 
            $userid = $profile->user_id; 
        ?>
            <div class="row">
                <div class="col-lg-12">
                    <h5><a href="<?= base_url(); ?>user/index" class="fa fa-arrow-circle-left fa-lg nav-link"></a>Add Your Business</h5>
                    <div class="hr-brand mb-4"></div>
                </div>
                <div class="col-lg-2"></div>
                <script src="<?= base_url(); ?>assets/js/jquery.validate.js"></script>
                <div class="col-lg-8">
                    <div class="form-group col-md-12">
                        <?= form_open_multipart('user/add_business3');?>
                    </div>
                    <div class="row">
                        <legend>Step 3 of 3</legend>
                        <div class="form-group col-md-12">
                            <div class="row">
                                <label for="" class="col-md-12 control-label">Business logo or photo</label>
                                <div class="col-2"></div>
                                <div class="col-lg-6 col-8">
                                    <img src="<?= base_url(); ?>assets/image/default.png" alt="Your profile picture" id="blah" class="img-fluid w-100">
                                    <div class="custom-file">
                                        <input type="file" class="w-100 custom-file-input" name="pic" onchange="readURL1(this);" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose Image</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= form_close();?>
                <div class="col-lg-2"></div>
    </div>
</div>
</div>
<script>
    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result).class('img-fluid').height(auto);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
