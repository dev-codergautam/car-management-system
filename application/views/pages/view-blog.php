<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta property="fb:page_id" content="210289026237346" />  -->
    <meta property="fb:app_id" content="210289026237346" />
    <?php foreach($names as $rows):?>
    <?php
        $data['photo'] = $this->datawork->get_id('blogimage', ['bi_blogid' => $rows->bl_id]);
        $photos = $data['photo']['bi_image'];
    ?>
        <?php
        if($photos == NULL){
            $ph = base_url() . "assets/image/bnmdef.jpg";
        }
        else {
            $ph = base_url() . "assets/image/myblog/" . $photos;
        }
    ?>
            <meta property="og:url" content="<?= base_url(); ?>home/blog/<?= $rows->bl_titleslug; ?>" />
            <meta property="og:type" content="website" />
            <meta property="og:title" content="<?= $rows->bl_title;?>" />
            <meta property="og:description" content="<?= $rows->bl_meta;?>" />
            <meta property="og:keywords" content="<?= $rows->bl_keyword;?>" />
            <meta property="og:image" content="<?= $ph; ?>" />
            <?php endforeach; ?>
            <meta name="author" content="Business Nirmanam">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <title>
                <?= $rows->bl_title;?> - BNM
            </title>

            <link rel="stylesheet" href="<?= base_url('assets/css/litera.min.css');?>">
            <link rel="stylesheet" href="<?= base_url('assets/css/style.css');?>">
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/default-skin.css" type="text/css">
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/photoswipe.css" type="text/css">
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/card.css" type="text/css">
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/webnirmanam.css" type="text/css">
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/hhhhhh.min.css" type="text/css">

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
<div class="col-lg-12 mb-3 mt-3">
    <div class="row">
        <div class="col-lg-12 text-center d-none d-lg-block">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- viewpage top bigscreen -->
            <ins class="adsbygoogle" style="display:inline-block;width:970px;height:90px" data-ad-client="ca-pub-2867182879802044" data-ad-slot="9292026112"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});

            </script>
        </div>

        <div class="col-lg-12 text-center d-md-none">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- viewblog top smallscreen -->
            <ins class="adsbygoogle" style="display:inline-block;width:320px;height:50px" data-ad-client="ca-pub-2867182879802044" data-ad-slot="4347246229"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});

            </script>
        </div>

        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="row">
                <div class="col-lg-8">
                    <div class="container-fluid">
                        <h6 class="text-uppercase font-weight-light mb-1">
                            <?= $rows->bl_cat; ?>
                        </h6>
                        <h4>
                            <b><?= $rows->bl_title; ?></b>
                        </h4>
                        <h6 class="mt-3">
                            <?php
                                $data['profile'] = $this->datawork->get_id('users', ['user_id' => $rows->bl_userid]);
                                $name = $data['profile']['u_name'];
                            ?>
                                <a href="<?= base_url(); ?>home/profile/<?= $rows->bl_userid; ?>" class="nav-link p-0">
                                    <b><?= $name; ?></b>
                                </a>
                        </h6>
                        <p>
                            Posted on
                            <?= $rows->bl_date; ?>
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-12">
                            <div class="row">
                                <a href="whatsapp://send?text=<?= base_url(); ?>home/blog/<?= $rows->bl_titleslug; ?>" class="mr-3"><img src="<?= base_url(); ?>assets/image/square-whatsapp.svg" alt="Share" style="width:40px;"></a>

                                <div class="fb-share-button mr-3" data-href="<?= base_url(); ?>home/blog/<?= $rows->bl_titleslug; ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?= base_url(); ?>home/blog/<?= $rows->bl_titleslug; ?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><img src="<?= base_url(); ?>assets/image/square-facebook.svg" alt="Share" style="width:40px;"></a></div>

                                <a class="mr-3" href="http://twitter.com/share?text=<?= $rows->bl_title; ?>&url=<?= base_url(); ?>home/blog/<?= $rows->bl_titleslug; ?>" target="_blank">
                                <img src="<?= base_url(); ?>assets/image/square-twitter.svg" alt="Share" style="width:40px;">
                                </a>

                                <a class="mr-3" href="https://plus.google.com/share?url=<?= base_url(); ?>home/blog/<?= $rows->bl_titleslug; ?>" target="_blank">
                                <img src="<?= base_url(); ?>assets/image/square-gp.svg" alt="Share" style="width:40px;">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <p>
                            <?= $rows->bl_desc; ?>
                        </p>
                    </div>
                    <div class="container-fluid mt-4 text-center d-none d-lg-block">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- view page links -->
                        <ins class="adsbygoogle" style="display:inline-block;width:728px;height:15px" data-ad-client="ca-pub-2867182879802044" data-ad-slot="5487253299"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});

                        </script>
                    </div>
                    <div class="container-fluid mt-4 text-center d-md-none">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- view blog link smallscreen -->
                        <ins class="adsbygoogle" style="display:inline-block;width:200px;height:90px" data-ad-client="ca-pub-2867182879802044" data-ad-slot="7244447271"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});

                        </script>
                    </div>
                    <div class="container-fluid mt-4">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <?php $i = 1; ?>
                                <?php foreach($blogimage as $blogimage): ?>
                                <?php
                        if($blogimage->bi_image == ""){
                            $p_image = base_url() . "assets/image/default.png";
                        }
                        else {
                            $p_image = base_url() . "assets/image/myblog/" . $blogimage->bi_image;
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
                    <div class="container-fluid mt-4">
                        <div class="fb-comments" data-href="<?= base_url(); ?>home/blog/<?= $rows->bl_titleslug; ?>" data-width="100%" data-numposts="5"></div>
                        <div id="fb-root"></div>
                        <script>
                            (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0&appId=210289026237346&autoLogAppEvents=1';
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));

                        </script>
                    </div>
                </div>
                <div class="col-lg-4 p-0 m-0">
                    <div class="col-lg-12 text-center mt-4">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- view blog side top -->
                        <ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-2867182879802044" data-ad-slot="6454109789"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});

                        </script>
                    </div>
                    <div class="col-lg-12">
                        <h5>LATEST</h5>
                        <div class="hrbrand"></div>
                        <?php foreach($allblogs as $row): ?>
                        <a href="<?= base_url(); ?>home/blog/<?= $row->bl_titleslug; ?>" class="nav-link p-0">
                            <div class="mt-4">
                                <h6 class="text-uppercase font-weight-light mb-1">
                                    <?= $row->bl_cat; ?>
                                </h6>
                                <h6>
                                    <b><?= substr($row->bl_title, 0, 70); ?></b>
                                </h6>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-lg-12 d-none d-lg-block text-center">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- view blog side-ads -->
                        <ins class="adsbygoogle" style="display:inline-block;width:300px;height:600px" data-ad-client="ca-pub-2867182879802044" data-ad-slot="4410825408"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});

                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
</div>
<div class="col-lg-12 text-center d-none d-lg-block">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- viewblog bottom bigscreen -->
    <ins class="adsbygoogle" style="display:inline-block;width:970px;height:250px" data-ad-client="ca-pub-2867182879802044" data-ad-slot="7045136721"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});

    </script>
</div>
<div class="col-lg-12 text-center d-md-none">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- viewblog bottom smallscreen -->
    <ins class="adsbygoogle" style="display:inline-block;width:320px;height:50px" data-ad-client="ca-pub-2867182879802044" data-ad-slot="2283764634"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});

    </script>
</div>
