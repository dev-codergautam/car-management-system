<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta property="fb:page_id" content="210289026237346" />  -->
    <meta property="fb:app_id" content="210289026237346" />
    <?php foreach($names as $rows):?>
    <?php
        $data['photo'] = $this->datawork->get_id('productgallery', ['pg_productid' => $rows->s_id]);
        $photos = $data['photo']['pg_image'];

        if($photos == ""){
            $ph = base_url() . "assets/image/default.png";
        }
        else {
            $ph = base_url() . "assets/image/services/" . $photos;
        }
        ?>
        <meta property="og:url" content="<?= base_url(); ?>home/service/<?= $rows->s_nameslug; ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?= $rows->s_name;?>" />
        <meta property="og:description" content="<?= $rows->s_desc;?>" />
        <meta property="og:image" content="<?= $ph; ?>" />
        <?php endforeach; ?>
        <meta name="author" content="Business Nirmanam">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Business Nirmanam | India get connected freely with Biznirmanam.</title>

        <link rel="stylesheet" href="<?= base_url('assets/css/litera.min.css');?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/style.css');?>">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/default-skin.css" type="text/css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/photoswipe.css" type="text/css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/card.css" type="text/css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/webnirmanam.css" type="text/css">

        <link rel="shortcut icon" href="<?= base_url(); ?>/assets/image/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?= base_url(); ?>/assets/image/favicon.ico" type="image/x-icon">

        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Google Add Sense -->
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-2867182879802044",
                enable_page_level_ads: true
            });

        </script>
</head>
<?php include_once(APPPATH."views/includes/navbar.php"); ?>
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-9 mt-lg-3 mb-3">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10 p-0">
                    <?php foreach($service as $rows){}
                        $data =  $this->datawork->get_data('users',"user_id = '$rows->s_userid'");
                        foreach($data as $row){}
                        $photo1 = $row->u_image;
                        if($photo1 == NULL){
                            $photo = base_url() . "assets/image/user.jpg";
                        }
                        else {
                            $photo = base_url() . "assets/image/users/" . $row->u_image;
                        }
                    ?>
                    <div class="row m-0">
                        <?php
                        $data['users'] = $this->datawork->get_id('users', ['user_id' => $rows->s_userid]);
                        $contact = $data['users']['u_contact'];
                        $whatsapp = $data['users']['u_whatsapp'];
                    ?>
                            <div class="col-lg-12 bg-white pt-0 pt-lg-3 mb-4">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <?php $i = 1; ?>
                                                <?php foreach($productimage as $productimage): ?>
                                                <?php
                                        if($productimage->pg_image == ""){
                                            $p_image = base_url() . "assets/image/default.png";
                                        }
                                        else {
                                            $p_image = base_url() . "assets/image/services/" . $productimage->pg_image;
                                        }
                                        ?>
                                                    <?php $item_class = ($i == 1) ? 'carousel-item active' : 'carousel-item'; ?>
                                                    <div class="<?php echo $item_class; ?>">
                                                        <img class="d-block w-100" src="<?= $p_image; ?>" alt="dgh" />
                                                    </div>
                                                    <?php $i++; ?>
                                                    <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <h5 class="mt-3 text-brand">
                                            <?= $rows->s_name;?>
                                        </h5>
                                        <div class="col-lg-12 mt-3 mb-3 d-md-none">
                                            <div class="row">
                                                <?php if(!empty($whatsapp)): ?>
                                                <div class="col-6 col-lg-3 p-1">
                                                    <a class="btn btn-outline-info btn-block rounded-0" href="https://api.whatsapp.com/send?phone=+91<?= $whatsapp;?>">Message</a>
                                                </div>
                                                <?php else: ?>
                                                <?php endif; ?>
                                                <?php if(!empty($contact)): ?>
                                                <div class="col-6 col-lg-3 p-1">
                                                    <a class="btn btn-info btn-block rounded-0" href="tel:<?= $contact;?>">Call Now</a>
                                                </div>
                                                <?php else: ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <h6>
                                           <a href="<?= base_url(); ?>home/profile/<?= $rows->s_userid;?>">
                                            <img src="<?= $photo; ?>" alt="<?= $row->u_image; ?>" class="small-image mr-2">
                                            <?= $row->u_name;?>
                                        </a>
                                        </h6>
                                        <p class="mb-1 mt-3">Category : <br></p>
                                        <?php
                                            $data['category'] = $this->datawork->get_id('category', ['title_slug' => $rows->s_category]);
                                            $category_name = $data['category']['title'];
                                        ?>
                                            <h6>
                                                <?= $category_name;?>
                                            </h6>
                                            <p class="mb-1 mt-3">Price :</p>
                                            <?php if(empty($rows->s_discountprice)): ?>
                                            <h4>
                                                <span class="h3 mr-3 text-green"><i class="fa fa-inr"></i> <?= number_format($rows->s_price);?></span>

                                            </h4>
                                            <?php else: ?>
                                            <h4><span class="h3 mr-2 text-green"><i class="fa fa-inr"></i>
                                        <?= number_format($rows->s_discountprice);?></span>
                                                <span class="h6"><del class="text-muted"><i class="fa fa-inr"></i> <?= number_format($rows->s_price);?></del></span>
                                                <?php
                                            $a = ($rows->s_discountprice/$rows->s_price)*100;
                                            $per = 100 - $a;
                                            ?>
                                                    <?php if($per == 0): ?>
                                                    <?php else: ?>
                                                    <span class="h6 text-danger"><b><?= substr($per, 0, 2) ?>% off</b></span>
                                                    <?php endif; ?>
                                            </h4>
                                            <?php endif; ?>
                                    </div>
                                    <div class="col-lg-12 mt-3 mb-3 d-none d-md-block">
                                        <div class="row">
                                            <?php if(!empty($whatsapp)): ?>
                                            <div class="col-6 col-lg-3 p-1">
                                                <a class="btn btn-info btn-block rounded-0" href="https://api.whatsapp.com/send?phone=+91<?= $whatsapp;?>">Message</a>
                                            </div>
                                            <?php else: ?>
                                            <?php endif; ?>
                                            <?php if(!empty($contact)): ?>
                                            <div class="col-6 col-lg-3 p-1">
                                                <a class="btn btn-info btn-block rounded-0" href="tel:<?= $contact;?>">Call Now</a>
                                            </div>
                                            <?php else: ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 p-0 m-0">
                                        <div class="col-lg-12">
                                            <h4 class="font-weight-light">
                                                <?= $rows->s_name;?>
                                            </h4>
                                            <div class="hrbrand"></div>
                                            <p class="ellipses">
                                                <?= $rows->s_desc;?>
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h6>Share Now</h6>
                                                    <div class="hrbrand"></div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <a href="whatsapp://send?text=<?= base_url(); ?>home/service/<?= $rows->s_nameslug; ?>" class="mr-2" title="Share on WhatsApp"><img src="<?= base_url(); ?>assets/image/square-whatsapp.svg" alt="Share" style="width:40px;"></a>

                                                    <a class="mr-2" href="http://www.facebook.com/sharer.php?u=<?= base_url(); ?>home/service/<?= $rows->s_nameslug; ?>" target="_blank" title="Share on Facebook">
                                                <img src="<?= base_url(); ?>assets/image/square-facebook.svg" alt="Share" style="width:40px;">
                                            </a>

                                                    <a class="mr-2" href="http://twitter.com/share?text=<?= $rows->s_name; ?>&url=<?= base_url(); ?>home/service/<?= $rows->s_nameslug; ?>" target="_blank" title="Share on Twitter">
                                                <img src="<?= base_url(); ?>assets/image/square-twitter.svg" alt="Share" style="width:40px;">
                                            </a>

                                                    <a class="mr-2" href="https://plus.google.com/share?url=<?= base_url(); ?>home/service/<?= $rows->s_nameslug; ?>" target="_blank" title="Share on Google Plus">
                                                <img src="<?= base_url(); ?>assets/image/square-gp.svg" alt="Share" style="width:40px;">
                                            </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12 bg-white pt-3 mb-4">
                                <h5 class="h6 text-center">MORE PRODUCT / SERVICES</h5>
                                <hr class="hrbrand">
                                <?php foreach($moreservices as $rows): ?>
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
                                        <div class="card border-0 mb-3 ">
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
                                                        <a href="<?= base_url(); ?>home/service/<?= $rows->s_nameslug; ?>" class="btn btn-outline-dark float-right">View now</a>
                                                    </div>
                                                    <div class="hrbrand d-none d-md-block"></div>
                                                    <?php
                                                    $data['category'] = $this->datawork->get_id('category', ['title_slug' => $rows->s_category]);
                                                    $category_name = $data['category']['title'];
                                                ?>
                                                        <div class="text-brand h6 font-weight-light d-none d-md-block"><span class=" d-none d-md-block">Category :</span><span> <b><?= $category_name; ?></b></span></div>
                                                        <p class=" text-truncate">
                                                            <?= $rows->s_desc; ?>
                                                        </p>
                                                        <div class="mr-4 d-md-none">
                                                            <a href="<?= base_url(); ?>home/service/<?= $rows->s_nameslug; ?>" class="btn btn-sm btn-outline-dark">View now</a>
                                                        </div>
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

<script>
    ! function(t) {
        t.fn.bcSwipe = function(e) {
            var n = {
                threshold: 50
            };
            return e && t.extend(n, e), this.each(function() {
                function e(t) {
                    1 == t.touches.length && (u = t.touches[0].pageX, c = !0, this.addEventListener("touchmove", o, !1))
                }

                function o(e) {
                    if (c) {
                        var o = e.touches[0].pageX,
                            i = u - o;
                        Math.abs(i) >= n.threshold && (h(), t(this).carousel(i > 0 ? "next" : "prev"))
                    }
                }

                function h() {
                    this.removeEventListener("touchmove", o), u = null, c = !1
                }
                var u, c = !1;
                "ontouchstart" in document.documentElement && this.addEventListener("touchstart", e, !1)
            }), this
        }
    }(jQuery);

    // Swipe functions for Bootstrap Carousel
    $('.carousel').bcSwipe({
        threshold: 50
    });

</script>
