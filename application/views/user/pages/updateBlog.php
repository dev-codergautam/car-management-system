<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
<div class="col-lg-9 mb-3">
    <div class="row">
        <div class="col-lg-12">
            <h5><a href="<?= base_url(); ?>user/index" class="fa fa-arrow-circle-left fa-lg nav-link"></a> Update Blog</h5>
            <div class="hr-brand mb-4"></div>
        </div>
        <?php foreach($viewblog as $rows){} ?>
        <div class="col-lg-12">
            <?= form_open_multipart('user/updateBlog/' . $rows->bl_id); ?>
                <div class="row">

                    <div class="col-md-12">
                        <legend>Step 1 of 2</legend>
                        <div class="hrbrand"></div>
                    </div>
                    <div class="form-group col-12">
                        <input type="text" class="form-control form-control-sm" name="title" value="<?= $rows->bl_title; ?>">
                        <?= form_error('title');?>
                    </div>
                    <div class="form-group col-12">
                        <select name="category" class="form-control form-control-sm" id="">
                            <option value="<?= $rows->bl_cat; ?>"><?= $rows->bl_cat; ?></option>
                            <?php foreach($blogcat as $blogcat):?>
                            <option value="<?= $blogcat->bc_slug;?>"><?= $blogcat->bc_category;?> </option>
                            <?php endforeach;?>
                            <?= form_error('category');?>
                        </select>
                    </div>

                    <div class="form-group col-12">
                        <textarea id="summernote" name="desc"><?= $rows->bl_desc; ?></textarea>
                        <?= form_error('desc');?>
                        <script>
                            $('#summernote').summernote({
                                placeholder: 'Write something...',
                                tabsize: 2,
                                height: 200
                            });
                        </script>
                    </div>
                    <div class="form-group col-md-12 text-center">
                        <input type="submit" class="btn btn-outline-dark rounded-0" value="Update Blog">
                    </div>
                    <?= form_close(); ?>
                </div>
        </div>
    </div>
</div>
</div>
<div class="col-lg-1"></div>
</div>