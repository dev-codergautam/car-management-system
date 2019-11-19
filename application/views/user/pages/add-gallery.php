<div class="col-lg-9 mb-3">
    <div class="card p-3">
        <div class="row">
            <div class="col-lg-12">
                <h5><a href="<?= base_url(); ?>user/index" class="fa fa-arrow-circle-left fa-lg nav-link"></a> Add Gallery</h5>
                <div class="hr-brand mb-4"></div>
            </div>
            
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <?= $this->session->flashdata('error'); ?>
                <?= form_open_multipart('user/add_image/'. $id); ?>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Image Name</label>
                        <input type="text" class="form-control form-control-sm" name="title" value="<?= set_value('title');?>">
                        <?= form_error('title');?>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-lg-3 col-12 col-form-label">Images</label>
                        <div class="col-lg-6 col-12">
                            <img src="<?= base_url(); ?>assets/image/default.png" alt="Your profile picture" id="blah1" class="img-fluid w-100">
                            <div class="card-footer mb-2">
                                <input type="file" class="w-100" name="pic" onchange="readURL1(this);">
                            </div>
                            <?= form_error('pic');?>
                        </div>
                        
                    </div>
                    <input type="text" name="bizzid" value="<?= $id; ?>" hidden="hidden">
                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-outline-dark" value="Add Picture to Gallary Album">
                    </div>
                    <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-lg-1"></div>
</div>
<script>
    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#blah1').attr('src', e.target.result).class('img-fluid').height(auto);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
