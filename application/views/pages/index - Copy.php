<div class="col-lg-12 maincover">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div id="hitarea">
                <div id="a-1" class="hitbox"></div>
                <div id="a-2" class="hitbox"></div>
                <div id="a-3" class="hitbox"></div>
                <div id="a-4" class="hitbox"></div>
                <div id="a-5" class="hitbox"></div>
                <div id="b-1" class="hitbox"></div>
                <div id="b-2" class="hitbox"></div>
                <div id="b-3" class="hitbox"></div>
                <div id="b-4" class="hitbox"></div>
                <div id="b-5" class="hitbox"></div>
                <div id="c-1" class="hitbox"></div>
                <div id="c-2" class="hitbox"></div>
                <div id="c-3" class="hitbox"></div>
                <div id="c-4" class="hitbox"></div>
                <div id="c-5" class="hitbox"></div>
                <div id="d-1" class="hitbox"></div>
                <div id="d-2" class="hitbox"></div>
                <div id="d-3" class="hitbox"></div>
                <div id="d-4" class="hitbox"></div>
                <div id="d-5" class="hitbox"></div>
                <div id="e-1" class="hitbox"></div>
                <div id="e-2" class="hitbox"></div>
                <div id="e-3" class="hitbox"></div>
                <div id="e-4" class="hitbox"></div>
                <div id="e-5" class="hitbox"></div>
                <div class="eye">
                    <div class="pupil"></div>
                </div>
                <div class="eye">
                    <div class="pupil"></div>
                </div>
                <div class="eyelid"></div>
                <div class="eyelid"></div>
            </div>

            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/select2.min.css">
            <script src="<?= base_url(); ?>assets/js/select2.min.js" type="text/javascript"></script>

            <div class="d-none d-lg-block">
                <?= form_open('home/query',['method'=>'get']); ?>
                    <div class="container">
                        <div class="input-group mb-3 mt-5">
                            <div class="input-group-prepend">
                                <select name="city" id="city" class="form-control rounded-0">
                                    <?php foreach($cities as $cities): ?>
                                    <option value="<?= $cities->city_name; ?>"><?= $cities->city_name; ?></option>     
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <input type="text" name="query" class="form-control rounded-0" placeholder="Search any business here" autocomplete="off">
                            <div class="input-group-append">
                                <button class="btn btn-outline-default bg-white rounded-0 searchdes" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <script>
                            $('#city').select2();

                        </script>
                    </div>
                    <?= form_close(); ?>
            </div>
            <div class="d-md-none">
                <?= form_open('home/query',['method'=>'get']); ?>
                    <div class="container mt-5">
                        <div class="input-group-prepend">
                            <select name="city" id="citys" class="form-control rounded-0 img-fluid">
                            <?php foreach($citi as $cities): ?>
                            <option value="<?= $cities->city_name ?>"><?= $cities->city_name ?></option>     
                            <?php endforeach; ?>
                        </select>
                        </div>
                        <div class="input-group mb-3 col-lg-12 m-0 p-0">
                            <input type="text" name="query" class="form-control rounded-0" placeholder="Search any business here" autocomplete="off">
                            <div class="input-group-append">
                                <button class="btn btn-outline-default bg-white rounded-0 searchdes" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <script>
                        $('#citys').select2();

                    </script>
                    <?= form_close(); ?>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
<!-- main category -->
<section class="main-category mt-3 mb-3">
    <div class="h6 text-center mt-3 text-uppercase mb-2">Browse category</div>
    <hr class="hrbrand">
    <div class="container pt-3 pb-3">
        <div id="maincategory" class="owl-carousel owl-theme col-12 p-0">
            <?php foreach($maincat as $maincat): ?>
            <article class="thumbnail item" itemscope="" itemtype="">
                <a class="blog-thumb-img nav-link p-0" href="<?= base_url() . $maincat->main_titleslug; ?>" title="<?= $maincat->main_title ;?> - BNM">
                   <img src="<?= base_url(); ?>assets/image/<?= $maincat->main_image; ?>" alt="<?= $maincat->main_title ;?>" class="img-fluid rounded-circle">
                    <div class="caption text-center mt-2">
                        <p itemprop="text" class="text-muted mb-0 text-truncate">
                            <?= $maincat->main_title; ?>
                        </p>
                    </div>
                </a>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- .container -->
    <script>
        jQuery(document).ready(function($) {
            var owl = $("#maincategory");
            owl.owlCarousel({
                items: 8,
                itemsDesktop: [992, 6],
                itemsDesktopSmall: [768, 5],
                itemsTablet: [480, 4],
                itemsMobile: [320, 3]
            });
            $(".next").click(function() {
                owl.trigger('owl.next');
            });
            $(".prev").click(function() {
                owl.trigger('owl.prev');
            });
            $('.main-category .thumbnail.item').matchHeight();
        });

    </script>
</section>
<!-- main category -->
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-9">
            <div id="qwer">
                <div>
                    <img class="w-100" src="<?= base_url(); ?>assets/image/adds/bnm1.jpg" alt="biznirmanam">
                </div>
                <div>
                    <img class="w-100" src="<?= base_url(); ?>assets/image/adds/pj.png" alt="biznirmanam">
                </div>
                <div>
                    <img class="w-100" src="<?= base_url(); ?>assets/image/adds/biznirmanam1.png" alt="BizNirmanam">
                </div>
                <div>
                    <img class="w-100" src="<?= base_url(); ?>assets/image/adds/biznirmanam2.png" alt="BizNirmanam">
                </div>
                <div>
                    <img class="w-100" src="<?= base_url(); ?>assets/image/adds/biznirmanam3.png" alt="BizNirmanam">
                </div>
                <div>
                    <img class="w-100" src="<?= base_url(); ?>assets/image/adds/bnm1.jpg" alt="biznirmanam">
                </div>
                <div>
                    <img class="w-100" src="<?= base_url(); ?>assets/image/adds/pj.png" alt="biznirmanam">
                </div>
                <div>
                    <img class="w-100" src="<?= base_url(); ?>assets/image/adds/advertisewithus.png" alt="WebNirmanam">
                </div>
                <div>
                    <img class="w-100" src="<?= base_url(); ?>assets/image/adds/cwl.png" alt="WebNirmanam">
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $("#qwer>div:gt(0)").hide();
                    setInterval(function() {
                        $("#qwer>div:first")
                            .fadeOut(1000)
                            .next()
                            .fadeIn(1000)
                            .end()
                            .appendTo("#qwer");

                    }, 4000);
                });

            </script>
        </div>
        <div class="col-lg-3">
            <h6 class="text-uppercase mb-2">Most viewed business</h6>
            <div class="hrbrand"></div>
            <?php foreach($topviewbizz as $row){ ?>
            <?php
                    $photo1 = $row->pic;
                    if($photo1 == NULL){
                        $photo = base_url() . "assets/image/default.png";
                    }
                    else {
                    $photo = base_url() . "assets/clients/" . $photo1;
                    }
                    $b_id = $row->id;
                ?>
                <?php
                    if($this->datawork->count_data('rating',['r_bizzid' => $row->id]) > 0){
                    $c = $this->datawork->count_data('rating',['r_bizzid' => $row->id]);
                }
                else{
                    $c = 0;
                }
                ?>
                    <?php $message = $c . " Ratings"; ?>
                    <?php 
                        // rate count in average
                        foreach ($totalrat as $totalrate){
                            if($b_id == $totalrate->r_bizzid){
                                $array[] = $totalrate->rate;
                                $totalrate->r_bizzid;
                            }
                            else{
                                $i = 0;
                            }
                        }
                    ?>
                    <?php
                        if((!empty($array)) && ($c > 0)){
                            $totalbizzrate = array_sum($array);
                            $avg = $totalbizzrate / $c;
                        }else{
                            $avg = 0;
                        }
                        ?>
                        <?php
                    $data['cate'] = $this->datawork->get_id('category', ['title_slug' => $row->category]);
                    $category_name = $data['cate']['title'];
                ?>
                            <a href="<?= base_url(); ?>home/business/<?= $row->name_slug;?>" class="nav-link p-0" title="<?= ucwords($row->business_name) ." ".  $row->city . ", " . $row->state . " - " . $category_name; ?>">
                                <div class="card border-0 rounded-0 box-shadow box-shadow2 text-center">
                                    <div class="b-cards" style="background-image:url(<?= $photo; ?>)"></div>
                                    <div class=" d-none d-lg-block">
                                        <div class="b-cate">
                                            <p class="mb-0 p-0">
                                                <?= $category_name;?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-body businesscard mt-2">
                                        <h6 class="text-brand text-truncate">
                                            <?= $row->business_name;?>
                                        </h6>
                                        <p class="card-text text-truncate mb-1">
                                            <?= "$row->address, $row->city";?>
                                        </p>
                                        <p class="card-text">
                                            <span class="bg-warning pl-2 pr-2 pt-1 pb-1 text-white mr-2">
                                        <?= $message; ?>
                                    </span>
                                            <?php 
                                        $input = $row->pageview;

                                        $k = pow(10,3);
                                        $mil = pow(10,6);
                                        $bil = pow(10,9);

                                        if($input >= $bil){
                                             $output = $input / $bil . 'B';
                                        }
                                        elseif($input >= $mil){
                                             $output = round($input / $mil, 1) . 'M';
                                        }
                                        elseif($input >= $k){
                                             $output = round($input / $k, 1) . 'K';
                                        }
                                        else{
                                             $output = $input;
                                        }
                                    ?>
                                            <span> <strong><?= $output; ?></strong> views</span>
                                        </p>
                                    </div>

                                </div>
                            </a>
                            <?php } ?>
        </div>
    </div>
</div>

<div class="col-lg-12 mt-4">
    <div class="row">
        <div class="col-lg-12 mb-3">
            <hr>
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-8 col-10">
                    <span class="text-uppercase mb-0 headings">Verified business</span>
                </div>
                <div class="col-lg-2 d-none d-lg-block">
                    <span class="text-uppercase text-right mb-0"><a href="#" class="headings">View More</a></span>
                </div>
                <div class="col-lg-2 d-md-none col-2">
                    <span class="text-uppercase headings text-right mb-0"><a href="#" class=""><i class="fa fa-plus"></i></a></span>
                </div>
                <div class="col-lg-1"></div>
            </div>
            <hr>
            <h1 hidden="hidden">Biznirmanam</h1>
            <h2 hidden="hidden">BNM</h2>
            <h2 hidden="hidden">bnm</h2>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="row">
                <?php foreach($allbusiness as $row): ?>
                <?php
                    $photo1 = $row->pic;
                    if($photo1 == NULL){
                        $photo = base_url() . "assets/image/bnmdef.png";
                    }
                    else {
                    $photo = base_url() . "assets/clients/" . $photo1;
                    }
                ?>
                    <?php 
                if($this->datawork->count_data('rating',['r_bizzid' => $row->id]) > 0){
                    $c = $this->datawork->count_data('rating', ['r_bizzid' => $row->id]);
                }
                else{
                    $c = 0;
                }
                ?>
                    <?php
                    if($c == 0){
                        $message = "<i class='fa fa-thumbs-up'></i> 0";
                    }
                    elseif($c == 1){
                        $message = " <i class='fa fa-thumbs-up'></i> " . $c;
                    }
                    else{
                        $message = " <i class='fa fa-thumbs-up'></i> " . $c;
                    }
                ?>
                        <?php 
                    // rate count in average
                    foreach ($totalrat as $totalrate){
                        if($row->id == $totalrate->r_bizzid){
                            $array[] = $totalrate->rate;
                        }
                        else{
                            $i = 0;
                        }
                    }
                ?>
                        <?php
                if((!empty($array)) && ($c > 0)){
                    $totalbizzrate = array_sum($array);
                    $avg = $totalbizzrate / $c;
                }
                else{
                    $avg = 0;
                }
                ?>
                            <?php
                    $data['cate'] = $this->datawork->get_id('category', ['title_slug' => $row->category]);
                    $category_name = $data['cate']['title'];
                ?>
                                <div class="col-lg-3 col-6 mb-4">
                                    <a href="<?= base_url(); ?>home/business/<?= $row->name_slug;?>" class="nav-link p-0" title="<?= ucwords($row->business_name) ." ".  $row->city . ", " . $row->state . " - " . $category_name; ?>">
                                        <div class="card border-0 rounded-0 box-shadow box-shadow2 text-center">
                                            <div class="b-cards" style="background-image:url(<?= $photo; ?>)"></div>
                                            <div class=" d-none d-lg-block">
                                                <div class="b-cate">
                                                    <p class="mb-0 p-0">
                                                        <?= $category_name;?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-body businesscard mt-2">
                                                <h6 class="text-brand text-truncate">
                                                    <?= ucwords($row->business_name);?>
                                                </h6>
                                                <p class="card-text text-truncate mb-1">
                                                    <?= "$row->address, $row->city";?>
                                                </p>
                                                <p class="card-text">
                                                    <span class="bg-warning pl-2 pr-2 pt-1 pb-1 text-white mr-2">
                                        <?= $message; ?>
                                    </span>
                                                    <?php 
                                        $input = $row->pageview;

                                        $k = pow(10,3);
                                        $mil = pow(10,6);
                                        $bil = pow(10,9);

                                        if($input >= $bil){
                                             $output = $input / $bil . 'B';
                                        }
                                        elseif($input >= $mil){
                                             $output = round($input / $mil, 1) . 'M';
                                        }
                                        elseif($input >= $k){
                                             $output = round($input / $k, 1) . 'K';
                                        }
                                        else{
                                             $output = $input;
                                        }
                                    ?>
                                                    <span> <strong><?= $output; ?></strong> views</span>
                                                </p>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
</div>
<!-- medical start -->
<div class="col-lg-12 p-2">
    <div class="h4 text-center headings text-uppercase pb-0"><a class="nav-link p-0" href="<?= base_url(); ?>medical">Medicals</a></div>
    <hr class="hrbrand mt-0">
</div>
<div class="col-lg-12 mb-3 d-none d-lg-block">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="row">
                <?php foreach($medical as $rows):?>
                <div class="col-lg-2 text-center col-6 p-0">
                    <div class="text-center col-12 p-0">
                        <a href="<?= base_url(); ?>medical/category/<?= $rows->title_slug; ?>" class="nav-link p-0" title="<?= $rows->title; ?> - Medical">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <img src="<?= base_url(); ?>assets/image/category/<?= $rows->pic; ?>" alt="<?= $rows->title; ?>" class="img-fluid">
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                            <p class="mt-3">
                                <?= $rows->title; ?>
                            </p>
                        </a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
</div>
<div class="col-lg-3 d-md-none">
    <div class="box-shadow card mb-3">
        <div class="card-body">
            <?php foreach($medical as $cats):?>
            <a href="<?= base_url('medical/category/'.$cats->title_slug);?>" class='nav-link text-dark p-0'>
                <div class='listbar_small col-lg-12 p-2'>
                    <div class="row">
                        <div class="col-2"><i class="fa <?= $cats->icons; ?> fa-lg text-brand"></i></div>
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
<!-- medical end -->

<!-- event start -->
<div class="col-lg-12">
    <hr>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-8 col-10">
            <span class="text-uppercase mb-0 headings">Events</span>
        </div>
        <div class="col-lg-2 d-none d-lg-block">
            <span class="text-uppercase text-right mb-0"><a href="<?= base_url(); ?>event" class="headings">View More</a></span>
        </div>
        <div class="col-lg-2 d-md-none col-2">
            <span class="text-uppercase headings text-right mb-0"><a href="<?= base_url(); ?>event" class=""><i class="fa fa-plus"></i></a></span>
        </div>
        <div class="col-lg-1"></div>
    </div>
    <hr>
</div>
<section class="event-category bg-white">
    <div class="container pt-3 pb-3">
        <div id="events" class="owl-carousel owl-theme col-12 p-0">
            <?php foreach($owlevents as $rows): ?>
            <article class="thumbnail item" itemscope="" itemtype="">
                <a class="blog-thumb-img nav-link p-0" href="<?= base_url(); ?>event/category/<?= $rows->title_slug; ?>" title="<?= $rows->title ;?> - BNM">
                   <img src="<?= base_url(); ?>assets/image/category/<?= $rows->pic; ?>" alt="<?= $rows->title ;?>" class="img-fluid rounded-circle">
                    <div class="caption text-center mt-2">
                        <p itemprop="text" class="text-muted mb-0 text-truncate">
                            <?= $rows->title ;?>
                        </p>
                    </div>
                </a>
            </article>
            <?php endforeach; ?>
        </div>
        <!-- #owl-demo-2 -->
        <div class="customNavigation d-none d-lg-block">
            <span class="pager-left"><a class="btn btn-default prev"><span class="fa fa-chevron-left"></span></a>
            </span>
            <span class="pager-right"><a class="btn btn-default next"><span class="fa fa-chevron-right"></span></a>
            </span>
        </div>
    </div>
    <!-- .container -->
    <script>
        jQuery(document).ready(function($) {
            var owl = $("#events");
            owl.owlCarousel({
                items: 8,
                itemsDesktop: [992, 6],
                itemsDesktopSmall: [768, 5],
                itemsTablet: [480, 4],
                itemsMobile: [320, 3]
            });
            $(".next").click(function() {
                owl.trigger('owl.next');
            });
            $(".prev").click(function() {
                owl.trigger('owl.prev');
            });
            $('.event-category .thumbnail.item').matchHeight();
        });

    </script>
</section>
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="row">
                <?php foreach($eventbusiness as $row): ?>
                <?php
                    $photo1 = $row->pic;
                    if($photo1 == NULL){
                        $photo = base_url() . "assets/image/bnmdef.png";
                    }
                    else {
                    $photo = base_url() . "assets/clients/" . $photo1;
                    }
                ?>
                    <?php 
                if($this->datawork->count_data('rating',['r_bizzid' => $row->id]) > 0){
                    $c = $this->datawork->count_data('rating', ['r_bizzid' => $row->id]);
                }
                else{
                    $c = 0;
                }
                ?>
                    <?php
                    if($c == 0){
                        $message = "<i class='fa fa-thumbs-up'></i> 0";
                    }
                    elseif($c == 1){
                        $message = " <i class='fa fa-thumbs-up'></i> " . $c;
                    }
                    else{
                        $message = " <i class='fa fa-thumbs-up'></i> " . $c;
                    }
                ?>
                        <?php 
                    // rate count in average
                    foreach ($totalrat as $totalrate){
                        if($row->id == $totalrate->r_bizzid){
                            $array[] = $totalrate->rate;
                        }
                        else{
                            $i = 0;
                        }
                    }
                ?>
                        <?php
                if((!empty($array)) && ($c > 0)){
                    $totalbizzrate = array_sum($array);
                    $avg = $totalbizzrate / $c;
                }
                else{
                    $avg = 0;
                }
                ?>
                            <?php
                    $data['cate'] = $this->datawork->get_id('category', ['title_slug' => $row->category]);
                    $category_name = $data['cate']['title'];
                ?>
                                <div class="col-lg-3 col-6 mb-4">
                                    <a href="<?= base_url(); ?>home/business/<?= $row->name_slug;?>" class="nav-link p-0" title="<?= ucwords($row->business_name) ." ".  $row->city . ", " . $row->state . " - " . $category_name; ?>">
                                        <div class="card border-0 rounded-0 box-shadow box-shadow2 text-center">
                                            <div class="b-cards" style="background-image:url(<?= $photo; ?>)"></div>
                                            <div class=" d-none d-lg-block">
                                                <div class="b-cate">
                                                    <p class="mb-0 p-0">
                                                        <?= $category_name;?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-body businesscard mt-2">
                                                <h6 class="text-brand text-truncate">
                                                    <?= ucwords($row->business_name);?>
                                                </h6>
                                                <p class="card-text text-truncate mb-1">
                                                    <?= "$row->address, $row->city";?>
                                                </p>
                                                <p class="card-text">
                                                    <span class="bg-warning pl-2 pr-2 pt-1 pb-1 text-white mr-2">
                                        <?= $message; ?>
                                    </span>
                                                    <?php 
                                        $input = $row->pageview;

                                        $k = pow(10,3);
                                        $mil = pow(10,6);
                                        $bil = pow(10,9);

                                        if($input >= $bil){
                                             $output = $input / $bil . 'B';
                                        }
                                        elseif($input >= $mil){
                                             $output = round($input / $mil, 1) . 'M';
                                        }
                                        elseif($input >= $k){
                                             $output = round($input / $k, 1) . 'K';
                                        }
                                        else{
                                             $output = $input;
                                        }
                                    ?>
                                                    <span> <strong><?= $output; ?></strong> views</span>
                                                </p>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
</div>
<!-- event end -->

<!-- education start -->
<div class="col-lg-12">
    <hr>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-8 col-10">
            <span class="text-uppercase mb-0 headings">Education</span>
        </div>
        <div class="col-lg-2 d-none d-lg-block">
            <span class="text-uppercase text-right mb-0"><a href="<?= base_url(); ?>education" class="headings">View More</a></span>
        </div>
        <div class="col-lg-2 d-md-none col-2">
            <span class="text-uppercase headings text-right mb-0"><a href="<?= base_url(); ?>education" class=""><i class="fa fa-plus"></i></a></span>
        </div>
        <div class="col-lg-1"></div>
    </div>
    <hr>
</div>
<div class="col-lg-12 mb-3 d-none d-lg-block">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="row">
                <?php foreach($education as $rows):?>
                <div class="col-lg-2 text-center col-6 p-0">
                    <div class="text-center col-12 p-0">
                        <a href="<?= base_url(); ?>services/category/<?= $rows->title_slug; ?>" class="nav-link p-0">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <img src="<?= base_url(); ?>assets/image/category/<?= $rows->pic; ?>" alt="<?= $cats->title; ?>" class="img-fluid">
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                            <p class="mt-3">
                                <?= $rows->title; ?>
                            </p>
                        </a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
</div>
<section class="education-category bg-white d-md-none">
    <div class="container pt-3 pb-3">
        <div id="education" class="owl-carousel owl-theme col-12 p-0">
            <?php foreach($education as $rows): ?>
            <article class="thumbnail item" itemscope="" itemtype="">
                <a class="blog-thumb-img nav-link p-0" href="<?= base_url(); ?>education/category/<?= $rows->title_slug; ?>" title="<?= $rows->title ;?> - BNM">
                   <img src="<?= base_url(); ?>assets/image/category/<?= $rows->pic; ?>" alt="<?= $rows->title ;?>" class="img-fluid rounded-circle">
                    <div class="caption text-center mt-2">
                        <p itemprop="text" class="text-muted mb-0 text-truncate">
                            <?= $rows->title ;?>
                        </p>
                    </div>
                </a>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- .container -->
    <script>
        jQuery(document).ready(function($) {
            var owl = $("#education");
            owl.owlCarousel({
                items: 6,
                itemsDesktop: [992, 6],
                itemsDesktopSmall: [768, 5],
                itemsTablet: [480, 4],
                itemsMobile: [320, 3]
            });
            $(".next").click(function() {
                owl.trigger('owl.next');
            });
            $(".prev").click(function() {
                owl.trigger('owl.prev');
            });
            $('.education-category .thumbnail.item').matchHeight();
        });

    </script>
</section>
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="row">
                <?php foreach($educationbusiness as $row): ?>
                <?php
                    $photo1 = $row->pic;
                    if($photo1 == NULL){
                        $photo = base_url() . "assets/image/bnmdef.png";
                    }
                    else {
                    $photo = base_url() . "assets/clients/" . $photo1;
                    }
                ?>
                    <?php 
                if($this->datawork->count_data('rating',['r_bizzid' => $row->id]) > 0){
                    $c = $this->datawork->count_data('rating', ['r_bizzid' => $row->id]);
                }
                else{
                    $c = 0;
                }
                ?>
                    <?php
                    if($c == 0){
                        $message = "<i class='fa fa-thumbs-up'></i> 0";
                    }
                    elseif($c == 1){
                        $message = " <i class='fa fa-thumbs-up'></i> " . $c;
                    }
                    else{
                        $message = " <i class='fa fa-thumbs-up'></i> " . $c;
                    }
                ?>
                        <?php 
                    // rate count in average
                    foreach ($totalrat as $totalrate){
                        if($row->id == $totalrate->r_bizzid){
                            $array[] = $totalrate->rate;
                        }
                        else{
                            $i = 0;
                        }
                    }
                ?>
                        <?php
                if((!empty($array)) && ($c > 0)){
                    $totalbizzrate = array_sum($array);
                    $avg = $totalbizzrate / $c;
                }
                else{
                    $avg = 0;
                }
                ?>
                            <?php
                    $data['cate'] = $this->datawork->get_id('category', ['title_slug' => $row->category]);
                    $category_name = $data['cate']['title'];
                ?>
                                <div class="col-lg-3 col-6 mb-4">
                                    <a href="<?= base_url(); ?>home/business/<?= $row->name_slug;?>" class="nav-link p-0" title="<?= ucwords($row->business_name) ." ".  $row->city . ", " . $row->state . " - " . $category_name; ?>">
                                        <div class="card border-0 rounded-0 box-shadow box-shadow2 text-center">
                                            <div class="b-cards" style="background-image:url(<?= $photo; ?>)"></div>
                                            <div class=" d-none d-lg-block">
                                                <div class="b-cate">
                                                    <p class="mb-0 p-0">
                                                        <?= $category_name;?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-body businesscard mt-2">
                                                <h6 class="text-brand text-truncate">
                                                    <?= ucwords($row->business_name);?>
                                                </h6>
                                                <p class="card-text text-truncate mb-1">
                                                    <?= "$row->address, $row->city";?>
                                                </p>
                                                <p class="card-text">
                                                    <span class="bg-warning pl-2 pr-2 pt-1 pb-1 text-white mr-2">
                                        <?= $message; ?>
                                    </span>
                                                    <?php 
                                        $input = $row->pageview;

                                        $k = pow(10,3);
                                        $mil = pow(10,6);
                                        $bil = pow(10,9);

                                        if($input >= $bil){
                                             $output = $input / $bil . 'B';
                                        }
                                        elseif($input >= $mil){
                                             $output = round($input / $mil, 1) . 'M';
                                        }
                                        elseif($input >= $k){
                                             $output = round($input / $k, 1) . 'K';
                                        }
                                        else{
                                             $output = $input;
                                        }
                                    ?>
                                                    <span> <strong><?= $output; ?></strong> views</span>
                                                </p>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
</div>
<!-- education end -->

<!-- shops and showroom start -->
<div class="col-lg-12 p-2">
    <div class="h4 text-center headings text-uppercase"><a class="nav-link" href="<?= base_url(); ?>ShopsAndShowroom">Shops & Showroom</a></div>
    <hr class="hrbrand">
</div>
<div class="col-lg-12 mb-3 d-none d-lg-block">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="row">
                <?php foreach($shops as $rows):?>
                <div class="col-lg-2 text-center col-6 p-0">
                    <div class="text-center col-12 p-0">
                        <a href="<?= base_url(); ?>ShopsAndShowroom/category/<?= $rows->title_slug; ?>" class="nav-link">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <img src="<?= base_url(); ?>assets/image/category/<?= $rows->pic; ?>" alt="<?= $cats->title; ?>" class="img-fluid">
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                            <p class="mt-3">
                                <?= $rows->title; ?>
                            </p>
                        </a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
</div>
<div class="col-lg-3 d-md-none">
    <div class="box-shadow card mb-3">
        <div class="card-body">
            <?php foreach($shops as $cats):?>
            <a href="<?= base_url('ShopsAndShowroom/category/'.$cats->title_slug);?>" class='nav-link text-dark p-0'>
                <div class='listbar_small col-lg-12 p-2'>
                    <div class="row">
                        <div class="col-2">
                            <img src="<?= base_url(); ?>assets/image/category/<?= $cats->pic; ?>" alt="<?= $cats->title; ?>" class="small-image">
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
<!-- shops and showroom end -->

<!-- Food and restro start -->
<div class="col-lg-12 p-2">
    <div class="h4 text-center headings text-uppercase"><a class="nav-link" href="<?= base_url(); ?>FoodsAndRestaurant">Foods & Restaurant</a></div>
    <hr class="hrbrand">
</div>
<div class="col-lg-12 mb-3 d-none d-lg-block">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="row">
                <?php foreach($food as $rows):?>
                <div class="col-lg-2 text-center col-6 p-0">
                    <div class="text-center col-12 p-0">
                        <a href="<?= base_url(); ?>FoodsAndRestaurant/category/<?= $rows->title_slug; ?>" class="nav-link">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <img src="<?= base_url(); ?>assets/image/category/<?= $rows->pic; ?>" alt="<?= $cats->title; ?>" class="img-fluid">
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                            <p class="mt-3">
                                <?= $rows->title; ?>
                            </p>
                        </a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
</div>
<div class="col-lg-3 d-md-none">
    <div class="box-shadow card mb-3">
        <div class="card-body">
            <?php foreach($food as $cats):?>
            <a href="<?= base_url('FoodsAndRestaurant/category/'.$cats->title_slug);?>" class='nav-link text-dark p-0'>
                <div class='listbar_small col-lg-12 p-2'>
                    <div class="row">
                        <div class="col-2">
                            <img src="<?= base_url(); ?>assets/image/category/<?= $cats->pic; ?>" alt="<?= $cats->title; ?>" class="small-image">
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
<!-- Food and restro end -->

<div class="col-lg-12" hidden="hidden">
    <h1>BNM</h1>
    <h1>bnm</h1>
</div>

<!-- Daily Needs start -->
<div class="col-lg-12 p-2">
    <div class="h4 text-center headings text-uppercase"><a class="nav-link" href="<?= base_url(); ?>dailyneeds">Daily Needs</a></div>
    <hr class="hrbrand">
</div>
<div class="col-lg-12 mb-3 d-none d-lg-block">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="row">
                <?php foreach($dailyneeds as $rows):?>
                <div class="col-lg-2 text-center col-6 p-0">
                    <div class="text-center col-12 p-0">
                        <a href="<?= base_url(); ?>dailyneeds/category/<?= $rows->title_slug; ?>" class="nav-link mb-0">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <img src="<?= base_url(); ?>assets/image/category/<?= $rows->pic; ?>" alt="<?= $cats->title; ?>" class="img-fluid">
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                            <p class="mt-3">
                                <?= $rows->title; ?>
                            </p>
                        </a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
</div>
<div class="col-lg-3 d-md-none">
    <div class="box-shadow card mb-3">
        <div class="card-body">
            <?php foreach($dailyneeds as $cats):?>
            <a href="<?= base_url('dailyneeds/category/'.$cats->title_slug);?>" class='nav-link text-dark p-0'>
                <div class='listbar_small col-lg-12 p-2'>
                    <div class="row">
                        <div class="col-2">
                            <img src="<?= base_url(); ?>assets/image/category/<?= $cats->pic; ?>" alt="<?= $cats->title; ?>" class="small-image">
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
<!-- Daily Needs end -->

<!-- Construction start -->
<div class="col-lg-12 p-2">
    <div class="h4 text-center headings text-uppercase"><a class="nav-link" href="<?= base_url(); ?>construction">Construction</a></div>
    <hr class="hrbrand">
</div>
<div class="col-lg-12 mb-3 d-none d-lg-block">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="row">
                <?php foreach($construction as $rows):?>
                <div class="col-lg-2 text-center col-6 p-0">
                    <div class="text-center col-12 p-0">
                        <a href="<?= base_url(); ?>construction/category/<?= $rows->title_slug; ?>" class="nav-link">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <img src="<?= base_url(); ?>assets/image/category/<?= $rows->pic; ?>" alt="<?= $rows->title; ?>" class="img-fluid">
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                            <p class="mt-3">
                                <?= $rows->title; ?>
                            </p>
                        </a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
</div>
<div class="col-lg-3 d-md-none">
    <div class="box-shadow card mb-3">
        <div class="card-body">
            <?php foreach($construction as $cats):?>
            <a href="<?= base_url('construction/category/'.$cats->title_slug);?>" class='nav-link text-dark p-0'>
                <div class='listbar_small col-lg-12 p-2'>
                    <div class="row">
                        <div class="col-2">
                            <img src="<?= base_url(); ?>assets/image/category/<?= $cats->pic; ?>" alt="<?= $cats->title; ?>" class="small-image">
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
<!-- Construction end -->
<div class="col-lg-12">
    <hr>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-8 col-10">
            <span class="text-uppercase mb-0 headings">Most viewed business</span>
        </div>
        <div class="col-lg-2 d-none d-lg-block">
            <span class="text-uppercase mb-0"><a href="<?= base_url(); ?>" class="headings text-right">View More</a></span>
        </div>
        <div class="col-lg-2 d-md-none col-2">
            <span class="text-uppercase headings mb-0"><a href="<?= base_url(); ?>" class="text-right"><i class="fa fa-plus"></i></a></span>
        </div>
        <div class="col-lg-1"></div>
    </div>
    <hr>
</div>
<div class="col-lg-12 p-0 m-0">
    <section class="latest-blog-posts bg-white">
        <div class="container pt-3 pb-3">
            <div id="owl-demo-2" class="owl-carousel owl-theme col-12 p-0">
                <?php foreach($owl as $row): ?>
                <?php
                    $photo1 = $row->pic;
                    if($photo1 == NULL){
                        $photo = base_url() . "assets/image/default.png";
                    }
                    else {
                    $photo = base_url() . "assets/clients/" . $photo1;
                    }
                ?>
                    <?php 
                if($this->datawork->count_data('rating',['r_bizzid' => $row->id]) > 0){
                    $c = $this->datawork->count_data('rating', ['r_bizzid' => $row->id]);
                }
                else{
                    $c = 0;
                }
                ?>
                    <?php
                    if($c == 0){
                        $message = "<i class='fa fa-thumbs-up'></i> 0";
                    }
                    elseif($c == 1){
                        $message = " <i class='fa fa-thumbs-up'></i> " . $c;
                    }
                    else{
                        $message = " <i class='fa fa-thumbs-up'></i> " . $c;
                    }
                ?>
                        <?php
                    $data['cate'] = $this->datawork->get_id('category', ['title_slug' => $row->category]);
                    $category_name = $data['cate']['title'];
                ?>
                            <article class="thumbnail item" itemscope="" itemtype="">
                                <a class="blog-thumb-img nav-link p-0" href="<?= base_url(); ?>home/business/<?= $row->name_slug;?>" title="<?= ucwords($row->business_name) ." ".  $row->city . ", " . $row->state . " - " . $category_name; ?>">
					        <div class="b-cards" style="background-image:url(<?= $photo; ?>)"></div>
                        <div class="caption text-center">
                            <h6 itemprop="headline" class="mt-2">
                                <div class="text-brand text-truncate"><?= ucwords($row->business_name);?>
                                </div>
                            </h6>
                            <p itemprop="text" class="flex-text text-muted mb-0 text-truncate">
                                <?= "$row->address, $row->city";?>
                            </p>
                            <p class="card-text mt-2">
                                    <span class="bg-warning pl-2 pr-2 pt-1 pb-1 text-white mr-2">
                                        <?= $message; ?>
                                    </span>
                                    <?php 
                                        $input = $row->pageview;

                                        $k = pow(10,3);
                                        $mil = pow(10,6);
                                        $bil = pow(10,9);

                                        if($input >= $bil){
                                             $output = $input / $bil . 'B';
                                        }
                                        elseif($input >= $mil){
                                             $output = round($input / $mil, 1) . 'M';
                                        }
                                        elseif($input >= $k){
                                             $output = round($input / $k, 1) . 'K';
                                        }
                                        else{
                                             $output = $input;
                                        }
                                    ?>
                                    <span> <strong><?= $output; ?></strong> views</span>
                                </p>
                        </div>
                        </a>
                            </article>
                            <?php endforeach; ?>
            </div>
            <!-- #owl-demo-2 -->
            <div class="customNavigation  d-none d-lg-block">
                <span class="pager-left"><a class="btn btn-default prev"><span class="fa fa-chevron-left"></span></a>
                </span>
                <span class="pager-right"><a class="btn btn-default next"><span class="fa fa-chevron-right"></span></a>
                </span>
            </div>
        </div>
        <!-- container -->

    </section>

    <script>
        jQuery(document).ready(function($) {

            var owl = $("#owl-demo-2");
            owl.owlCarousel({
                items: 5,
                itemsDesktop: [992, 3],
                itemsDesktopSmall: [768, 3],
                itemsTablet: [480, 2],
                itemsMobile: [320, 1]
            });
            $(".next").click(function() {
                owl.trigger('owl.next');
            });
            $(".prev").click(function() {
                owl.trigger('owl.prev');
            });

            $('.latest-blog-posts .thumbnail.item').matchHeight();

        });

    </script>
</div>
