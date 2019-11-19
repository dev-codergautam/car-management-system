<div class="col-lg-9 mb-3  m-0 p-0">

    <div class="bg-white">
        <div class="col-lg-12">
            <h5><a href="<?= base_url(); ?>user/index" class="fa fa-arrow-circle-left fa-lg nav-link"></a> My blogs</h5>
            <div class="hr-brand mb-4"></div>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <?php if(!empty($allblogs)): ?>
                <?php foreach($profile as $profile){} ?>
                <?php foreach($allblogs as $rows): ?>
                <?php
            $data['photo'] = $this->datawork->get_id('blogimage', ['bi_blogid' => $rows->bl_id]);
            $photos = $data['photo']['bi_image'];
        ?>
                    <?php
            if($photos == ""){
                $photo = base_url() . "assets/image/bnm.jpg";
            }
            else {
                $photo = base_url() . "assets/image/myblog/" . $photos;
            }
        ?>
                        <div class="col-lg-4 mb-4">
                            <div class="work mb-0">
                                <div class="work-grid mb-0" style="background-image:url(<?= $photo; ?>);height:200px;"></div>
                            </div>
                            <h6 class="mt-3">
                                <?= substr($rows->bl_title, 0, 45) . "..."; ?>
                            </h6>
                            <p class="text-muted small">by <b><?= $profile->u_name; ?></b>

                            </p>
                            <a href="<?= base_url(); ?>user/myBlog/<?= $rows->bl_titleslug; ?>" class="btn btn-brand rounded-0"><i class="fa fa-eye"></i> View</a>
                            <a href="<?= base_url(); ?>user/deleteBlog/<?= $rows->bl_id; ?>" class="btn btn-danger rounded-0"><i class="fa fa-trash"></i> Delete</a>
                            <a href="<?= base_url(); ?>user/updateBlog/<?= $rows->bl_id; ?>" class="btn btn-primary rounded-0"><i class="fa fa-pencil"></i> Update</a>
                        </div>
                        <?php endforeach; ?>
            </div>
        </div>

        <?php else:?>
        <div class="col-lg-12">
            <div class='alert alert-light p-lg-5'>
                <h2 class='h5'><i class='fa fa-meh-o fa-lg'></i> There isn't any blog you have posted</h2>
                <p class='m-0 p-0 mt-4'>Reason for error may be due to..</p>
                <ol>
                    <li>You have not inserted any advertisement with <b>Business Nirmanam</b></li>
                    <li>To add new advertisements <a href='' class='alert-link text-danger'> Click here</a></li>
                    <li>Get more demand in the markert.</li>
                </ol>
            </div>
        </div>
        <?php endif;?>
        <div class="col-lg-12">
            <div class="col-md-6">
                <h6>Your Blogs (
                    <?= $total_row; ?>)</h6>
            </div>
            <div class="col-md-6 text-right">
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-lg-1"></div>
</div>