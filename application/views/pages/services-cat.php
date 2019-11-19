<div class="col-lg-12 mt-3 mb-3">
    <div class="row">
        <div class="col-lg-9 mb-3">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <?php if(!empty($servicesCat)): ?>
                    <?php foreach($servicesCat as $rows): ?>
                    <?php
                    $photo1 = $rows->s_image;
                    if($photo1 == ""){
                        $photo = base_url() . "assets/image/default.png";
                    }
                    else {
                    $photo = base_url() . "assets/image/services/" . $photo1;
                    }
                ?>
                        <div class="card border-0 mb-3">
                            <div class="row">
                                <div class="col-lg-4 col-5">
                                    <div class="work mb-0">
                                        <div class="work-grid mb-0" style="background-image:url(<?= $photo; ?>);">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 pr-lg-1 pl-lg-4 pr-lg-4 pt-3 col-7 p-1">
                                    <h3 class="title-name mt-lg-4 text-truncate">
                                        <?= $rows->s_name ?>
                                    </h3>
                                    <div class="text-right mr-4 d-none d-md-block">
                                        <a href="<?= base_url(); ?>home/service/<?= $rows->s_id; ?>" class="btn btn-outline-dark float-right">View now</a>
                                    </div>
                                    <div class="hrbrand d-none d-md-block"></div>
                                    <div class="text-brand h6 font-weight-light  d-none d-md-block"><span class=" d-none d-md-block">Category :</span><span> <b><?= $rows->s_category ?></b></span></div>
                                    <p class=" text-truncate">
                                        <?= $rows->s_desc; ?>
                                    </p>
                                    <div class="mr-4 d-md-none">
                                        <a href="<?= base_url(); ?>home/service/<?= $rows->s_id; ?>" class="btn btn-sm btn-outline-dark">View now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php else:?>
                        <div class="col-lg-12">
                            <div class='alert alert-light bg-white p-3 p-lg-5'>
                                <h2 class='h5'><i class='fa fa-meh-o fa-lg'></i> Not found any Services or Products</h2>
                                <p class='m-0 p-0 mt-4'> Reason for error may be due to..</p>
                                <ol>
                                    <li>Not listed any Services or Products at your profile</li>
                                    <li>Add Business <a href='<?= base_url(); ?>user/servicesStep1' class='alert-link text-danger'> Click here</a></li>
                                    <li>Your Product or Service will be view soon</li>
                                </ol>
                            </div>
                        </div>
                        <?php endif; ?>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
        <div class="col-lg-3 mt-3">
            <div class="box-shadow card mb-3">
                <div class="card-body">
                    <h6 class="card-title small text-uppercase"><b>CATEGORIES</b></h6>
                    <?php foreach($category as $cats):?>
                    <?php
                    $data['maincategory'] = $this->datawork->get_id('maincategory', ['main_parentid' => $cats->parent_id]);
                    $main_catslug = $data['maincategory']['main_titleslug'];
                ?>
                        <a href="<?= base_url() . 'home/servicesCategory/' . $cats->title_slug; ?>" class='nav-link text-dark p-0'>
                            <div class='listbar_small col-lg-12 p-2'>
                                <div class="row">
                                    <div class="col-2">
                                        <img src="<?= base_url(); ?>assets/image/category/<?= $cats->pic; ?>" alt="" class="small-image">
                                    </div>
                                    <div class="col-10 text-truncate">
                                        <?= $cats->title; ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>