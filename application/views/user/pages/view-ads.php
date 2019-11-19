<div class="col-lg-9 mb-3">
    <div class="card bg-white box-shadow rounded-0 mb-3">
        <div class="col-lg-12 p-3">
            <h4><a href="<?= base_url(); ?>user/my_blogs" class="fa fa-arrow-circle-left fa-lg nav-link"></a> My Blog</h4>
            <div class="hr-brand"></div>
        </div>
        <div class="row">

            <?php foreach($profile as $profile){} ?>
            <?php foreach($myblog as $rows){} ?>
            <?php
                $photo1 = $rows->b_img;
                if($photo1 == NULL){
                    $photo = "";
                }
                else {
                    $photo = base_url() . "assets/image/blogs/" . $photo1;
                }
            ?>
                <div class="col-lg-12 mb-lg-3  pl-5">
                    <h4 class="">
                        <?= $rows->b_title; ?>
                    </h4>
                </div>
                <div class="col-lg-12 mb-lg-3 pl-5">
                    <p class="text-muted mb-3">
                        <i class="fa fa-user-o"></i> <?= $profile->u_name; ?>
                        <i class="fa fa-clock-o ml-2"></i> <?= $rows->b_date; ?>
                    </p>
                    <p class="mb-3 text-uppercase"><i class="fa fa-bookmark"></i>
                        <?= $rows->b_category; ?>
                    </p>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <img src="<?= $photo; ?>" alt="" class="img-fluid mt-2 mb-2 mt-lg-2 mb-lg-4">
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
                <div class="col-lg-12 pl-5 pr-5">
                    <p class="text-justify">
                        <?= $rows->b_desc; ?>
                    </p>
                </div>
        </div>
    </div>

    <div class="card bg-white box-shadow rounded-0">
        <div class="col-lg-12 p-3 bg-brand text-white">
            <h4 class="font-weight-light">Your Blog Posts</h4>
        </div>
        <div class="row pl-lg-5 pr-lg-5 pt-lg-4 p-4">
            <?php foreach($mybloglimit as $row): ?>
            <?php
                $photo1 = $row->b_img;
                if($photo1 == NULL){
                    $photo = base_url() . "assets/image/default.png";
                }
                else {
                    $photo = base_url() . "assets/image/blogs/" . $photo1;
                }
            ?>
                <div class="col-lg-12 border m-0 p-0 mb-3">
                    <div class="row p-3 ">
                        <div class="col-lg-2">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-8 col-lg-12">
                                    <img src="<?= $photo; ?>" alt="" class="img-fluid">
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <h4 class="mt-lg-1 mt-4">
                                <?= substr($row->b_title, 0, 45) . "..."; ?>
                            </h4>
                            <p>
                                <?= substr($row->b_desc, 0, 150) . "..."; ?>
                            </p>
                            <a href="<?= base_url(); ?>user/view_advertisement/<?= $row->b_id; ?>" class="btn btn-brand btn-sm rounded-0">Read More</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
        </div>
    </div>

</div>
</div>
<div class="col-lg-1"></div>
</div>