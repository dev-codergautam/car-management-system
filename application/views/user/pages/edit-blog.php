<div class="col-lg-9 mb-3">
    <div class="card p-3 box-shadow">
        <div class="row">
            <div class="col-lg-12">
                <h4><a href="<?= base_url(); ?>user/my_blogs" class="fa fa-arrow-circle-left fa-lg nav-link"></a> Update Blog</h4>
                <div class="hr-brand mb-4"></div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
               <?php foreach($myAds as $myblog){} ?>
                <?= form_open_multipart('user/update_blog/' . $myblog->b_id); ?>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Blog title</label>
                        <input type="text" class="form-control form-control-sm" name="title" value="<?= $myblog->b_title;?>">
                        <?= form_error('title');?>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Category</label>
                        <select name="category" class="form-control form-control-sm" id="">
                            <option value="<?= $myblog->b_category;?>"><?= $myblog->b_category;?></option>
                            <?php foreach($cat as $main):?>
                            <option value="<?= $main->title_slug;?>"><?= $main->title;?> </option>
                            <?php endforeach;?>
                            <?= form_error('category');?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="desc" class="col-form-label">Description</label>
                        <textarea name="desc" id="" rows="6" class="form-control"><?= $myblog->b_desc;?></textarea>
                        <?= form_error('desc');?>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-outline-dark" value="Update your blog">
                    </div>
                    <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-lg-1"></div>
</div>