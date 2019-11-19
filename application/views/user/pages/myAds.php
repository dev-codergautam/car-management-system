<div class="col-lg-9 mb-3">

    <div class="card bg-white box-shadow  rounded-0">
        <div class="col-lg-12 mt-3">
            <h5><a href="<?= base_url(); ?>user/index" class="fa fa-arrow-circle-left fa-lg nav-link"></a> My Advertisements List</h5>
            <div class="hr-brand mb-4"></div>
        </div>
        <div class="row pl-lg-5 pr-lg-5 pt-lg-4 p-4">

            <?php if(!empty($myblog)): ?>
            <?php foreach($profile as $profile){} ?>
            <?php foreach($myads as $rows): ?>
            <?php
                $photo1 = $rows->b_img;
                if($photo1 == NULL){
                    $photo = base_url() . "assets/image/default.png";
                }
                else {
                    $photo = base_url() . "assets/image/blogs/" . $photo1;
                }
            ?>
                <div class="col-lg-12 border m-0 p-0 mb-3">
                    <div class="row p-3 ">
                        <div class="col-lg-3">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-8 col-lg-12">
                                    <img src="<?= $photo; ?>" alt="" class="img-fluid">
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <h4 class="mt-lg-1 mt-4">
                                <?= substr($rows->b_title, 0, 45) . "..."; ?>
                            </h4>
                            <p class="text-muted small mb-3"><i class="fa fa-user"></i>
                                <?= $profile->u_name; ?> <i class="fa fa-clock-o ml-2"></i>
                                    <?= $rows->b_date; ?>
                            </p>
                            <p>
                                <?= substr($rows->b_desc, 0, 150) . "..."; ?>
                            </p>
                            <a href="<?= base_url(); ?>user/view_advertisement/<?= $rows->b_id; ?>" class="btn btn-brand rounded-0"><i class="fa fa-eye"></i></a>
                            <a href="<?= base_url(); ?>user/delete_blog/<?= $rows->b_id; ?>" class="btn btn-danger rounded-0"><i class="fa fa-trash"></i></a>
                            <a href="<?= base_url(); ?>user/edit_blog/<?= $rows->b_id; ?>" class="btn btn-primary rounded-0"><i class="fa fa-pencil"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php else:?>
                <div class="col-lg-12">
                    <div class='alert alert-light p-lg-5'>
                        <h2 class='h5'><i class='fa fa-meh-o fa-lg'></i> Not found any advertisements</h2>
                        <p class='m-0 p-0 mt-4'>Reason for error may be due to..</p>
                        <ol>
                            <li>You have not inserted any advertisement with <b>Business Nirmanam</b></li>
                            <li>To add new advertisements <a href='' class='alert-link text-danger'> Click here</a></li>
                            <li>Get more demand in the markert.</li>
                        </ol>
                    </div>
                </div>
                <?php endif;?>
        </div>
    </div>
</div>
</div>
<div class="col-lg-1"></div>
</div>