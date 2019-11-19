<script src="<?= base_url(); ?>assets/js/nicEdit-latest.js" type="text/javascript"></script>
<div class="col-lg-9 mb-3">
    <div class="row">
        <div class="col-lg-12">
            <h5><a href="<?= base_url(); ?>user/index" class="fa fa-arrow-circle-left fa-lg nav-link"></a> Post Blog</h5>
            <div class="hr-brand mb-4"></div>
        </div>
        <div class="col-lg-12">
            <?= form_open_multipart('user/addBlog'); ?>
                <div class="row">
                   
                    <div class="col-md-12">
                        <legend>Step 1 of 2</legend>
                        <div class="hrbrand"></div>
                    </div>
                    <div class="form-group col-12">
                        <input type="text" class="form-control form-control-sm" name="title" value="<?= set_value('title');?>" placeholder="Post title">
                        <?= form_error('title');?>
                    </div>
                    <div class="form-group col-12">
                        <input type="text" class="form-control form-control-sm" name="meta" value="<?= set_value('meta');?>" placeholder="Meta title">
                        <?= form_error('meta');?>
                    </div>
                    <div class="form-group col-12">
                        <input type="text" class="form-control form-control-sm" name="keyword" value="<?= set_value('keyword');?>" placeholder="Meta Keyword">
                        <?= form_error('keyword');?>
                    </div>
                    <div class="form-group col-12">
                        <select name="category" class="form-control form-control-sm" id="">
                            <option value="" selected disabled>Category</option>
                            <?php foreach($blogcat as $blogcat):?>
                            <option value="<?= $blogcat->bc_slug;?>"><?= $blogcat->bc_category;?> </option>
                            <?php endforeach;?>
                            <?= form_error('category');?>
                        </select>
                    </div>

                    <div class="form-group col-12">
                        <textarea class="form-control" rows="8" name="desc"><?= set_value('desc');?></textarea>
                        <?= form_error('desc');?>
                    </div>

                    <div class="form-group col-md-12 text-center">
                        <input type="submit" class="btn btn-outline-dark rounded-0" value="Save & Continue">
                    </div>
                    <?= form_close(); ?>
                </div>


    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);

    </script>

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
