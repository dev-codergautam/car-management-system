<div class="col-lg-12 text-center d-md-none">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- service page top smallscreen -->
    <ins class="adsbygoogle" style="display:inline-block;width:320px;height:50px" data-ad-client="ca-pub-2867182879802044" data-ad-slot="2539749651"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});

    </script>
</div>

<div class="col-lg-12 mt-3 mb-3">
    <div class="row">
        <div class="col-lg-9 mb-3">
            <div class="row">
                <div class="col-lg-12 text-center d-none d-lg-block">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- services page top bigscreen -->
                    <ins class="adsbygoogle" style="display:inline-block;width:970px;height:90px" data-ad-client="ca-pub-2867182879802044" data-ad-slot="7960022322"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});

                    </script>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
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
                            <div class="card border-0 mb-3">
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
                                            <a href="<?= base_url(); ?>home/service/<?= $rows->s_nameslug; ?>" class="btn btn-outline-dark float-right">View now</a>
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
                                                <a href="<?= base_url(); ?>home/service/<?= $rows->s_nameslug; ?>" class="btn btn-sm btn-outline-dark">View now</a>
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
                            <?php endif;?>

                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-12 text-center d-none d-lg-block">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- service page bottom bigscreen -->
                    <ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-2867182879802044" data-ad-slot="5900835192"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});

                    </script>
                </div>
                <div class="col-lg-12 text-center d-md-none">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- service page bottom smallscreen -->
                    <ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-2867182879802044" data-ad-slot="3246751695"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});

                    </script>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
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
