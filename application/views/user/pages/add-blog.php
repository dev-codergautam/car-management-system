<div class="col-lg-9 mb-3">
    <div class="card p-3 box-shadow">
        <div class="row">
            <div class="col-lg-12">
                <h5><a href="<?= base_url(); ?>user/index" class="fa fa-arrow-circle-left fa-lg nav-link"></a> Add free advertisements</h5>
                <div class="hr-brand mb-4"></div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <?= form_open_multipart('user/insert_blog'); ?>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-sm" name="title" value="<?= set_value('title');?>" placeholder="Advertisement title">
                        <?= form_error('title');?>
                    </div>
                    <div class="form-group">
                        <select name="category" class="form-control form-control-sm" id="">
                            <option value="" selected disabled>Choose</option>
                            <?php foreach($cat as $main):?>
                            <option value="<?= $main->title_slug;?>"><?= $main->title;?> </option>
                            <?php endforeach;?>
                            <?= form_error('category');?>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name="desc" id="" rows="3" class="form-control form-control-sm" placeholder="Describe your advertisement for new business, goods and services..."><?= set_value('desc');?></textarea>
                        <?= form_error('desc');?>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3 col-2"></div>
                        <div class="col-lg-6 col-8">
                            <img src="<?= base_url(); ?>assets/image/default.png" alt="Your profile picture" id="blah1" class="img-fluid w-100">
                            <div class="card-footer">
                                <input type="file" class="w-100" name="pic" onchange="readURL1(this);">
                            </div>
                        </div>
                        <div class="col-lg-3 col-2"></div>
                    </div>

                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-outline-dark" value="Create new advertisements">
                    </div>
                    <?= form_close(); ?>
            </div>
        </div>
    </div>
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
</div>
<div class="col-lg-1"></div>
</div>