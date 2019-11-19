<div class="col-lg-9 mb-3">
    <div class="row">
        <div class="col-lg-12">
            <h5><a href="<?= base_url(); ?>user/index" class="fa fa-arrow-circle-left fa-lg nav-link"></a> My Services or Product List</h5>
            <div class="hr-brand mb-4"></div>
        </div>
        <div class="col-lg-12">
            <?= $this->session->flashdata('updateSuccess'); ?>
        </div>
        <?php if(!empty($services)): ?>
        <?php foreach($services as $rows): ?>
        <?php
            $data['photo'] = $this->datawork->get_id('productgallery', ['pg_productid' => $rows->s_id]);
            $photos = $data['photo']['pg_image'];
        ?>
        <?php
            if($photos == ""){
                $photo = base_url() . "assets/image/bnm.jpg";
            }
            else {
                $photo = base_url() . "assets/image/services/" . $photos;
            }
        ?>
        <div class="col-lg-1"></div>
            <div class="col-lg-10 mb-3">
                <div class="card border-0">
                    <div class="row">
                                <div class="col-lg-4 col-5">
                                    <div class="work mb-0">
                                        <div class="work-grid mb-0" style="background-image:url(<?= $photo; ?>);">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 pr-lg-1 pl-lg-4 pr-lg-4 t-3 col-7 p-1">
                                    <h3 class="title-name mt-lg-4 text-truncate">
                                        <?= $rows->s_name ?>
                                    </h3>
                                    <div class="text-right mr-4 d-none d-md-block">
                                        <a href="<?= base_url(); ?>user/service/<?= $rows->s_nameslug; ?>" class="btn btn-outline-dark float-right">Get now</a>
                                    </div>
                                    <div class="hrbrand d-none d-md-block"></div>
                                    <?php
                                        $data['category'] = $this->datawork->get_id('category', ['title_slug' => $rows->s_category]);
                                        $category_name = $data['category']['title'];
                                    ?>
                                    <div class="text-brand h6 font-weight-light  d-none d-md-block"><span class=" d-none d-md-block"></span><span> <b>Category : <?= $category_name; ?></b></span></div>
                                    <p class=" text-truncate">
                                        <?= $rows->s_desc; ?>
                                    </p>
                                    <?php if(empty($rows->s_discountprice)): ?>
                                    <h6 class="srch-2">Price :
                                        <span class="h6 mr-3 text-green"><i class="fa fa-inr"></i> <?= number_format($rows->s_price);?></span>
                                       
                                    </h6>
                                    <?php else: ?>
                                    <h6 class="srch-2">Price : <span class="h6 mr-2 text-green"><i class="fa fa-inr"></i>
                                        <?= number_format($rows->s_discountprice);?></span>
                                        <span class="h6"><del class="text-muted"><i class="fa fa-inr"></i> <?= number_format($rows->s_price);?></del></span>
                                        <?php
                                            $a = ($rows->s_discountprice/$rows->s_price)*100;
                                            $per = 100 - $a;
                                            ?>
                                            <?php if($per == 0): ?>
                                            <?php else: ?>
                                            <span class="ml-2 h6 text-danger"><b><?= substr($per, 0, 2) ?>% off</b></span>
                                            <?php endif; ?>
                                    </h6>
                                    <?php endif; ?>
                                    <div class="mr-4 d-md-none">
                                        <a href="<?= base_url(); ?>user/service/<?= $rows->s_nameslug; ?>" class="btn btn-sm btn-outline-dark">Get now</a>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
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
            <?php endif;?>
    </div>
</div>
</div>
<div class="col-lg-1"></div>
</div>