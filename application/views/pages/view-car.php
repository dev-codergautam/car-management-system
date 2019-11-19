<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta property="fb:page_id" content="210289026237346" />  -->
    <meta property="fb:app_id" content="210289026237346" />
    <?php foreach($cars as $rows){} ?>
    <meta property="og:url" content="<?= base_url(); ?>home/cars/<?= $rows->carName; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= ucwords($rows->carName); ?>" />
    <meta property="og:description" content="<?= $rows->carName;?>" />
    <meta property="og:image" content="<?= base_url(); ?>assets/clients/<?= $rows->carName; ?>" />
    <title><?= ucwords($rows->carName); ?></title>
    <meta name="description" content="<?= $rows->carName;?>">
    <meta name="author" content="<?= $rows->carName;?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= base_url('assets/css1/litera.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css1/style.css');?>">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css1/default-skin.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css1/photoswipe.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css1/card.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css1/webnirmanam.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css1/login.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css1/newnav.css" type="text/css">
    <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>

    <!--
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= base_url(); ?>/assets/image/favicon.ico" type="image/x-icon">
-->

    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    

    <link href="https://cdn.jsdelivr.net/g/jquery.owlcarousel@1.31(owl.carousel.css+owl.theme.css)" type="text/css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/g/jquery@2.1.4,jquery.migrate@1.4.1,bootstrap@3.3.7,jquery.matchheight@0.7.0,jquery.owlcarousel@1.31"></script>
</head>

<?php $data['brand'] = $this->admin_datawork->get_id('brand', ['brandId' => $rows->carBrand]); ?>
<?php include_once(APPPATH."views/includes/navbar.php"); ?>

<div class="col-lg-12 mt-4 mb-4">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url(); ?>home/index">Home</a></li>
    <li class="breadcrumb-item"><a href="<?= base_url(); ?>home/brand/<?php echo $data['brand']['brandSlug']; ?>"><?php echo $data['brand']['brandName']; ?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $rows->carName; ?></li>
  </ol>
</nav>
</div>
<div class="col-lg-12 mb-3">
    <div class="row m-0">
        <div class="col-lg-9 box-shadow bg-white" style="margin-top:50px;padding:30px;">
            <div class="row">
                <?php
                $data['carimgs'] =  $this->mmodal->get_id('carimage', ['carProdId' => $rows->carId]);
                    $carimg11 = $data['carimgs']['carimageImage'] ;
                    if($carimg11 == NULL){
                        $carimg1 = "user.jpg";
                    }
                    else {
                        $carimg1 = $carimg11;
                    }
                    $dealer = $rows->carDealer;
                ?>
                    <div class="col-lg-8" style="margin-top:-60px;">
                        <div class="mybizzpic box-shadow" style="background-image:url(<?= base_url('assets/image/car-image/'.$carimg1);?>);">
                        </div>
                        <div class="col-lg-12 my-2 mt-3">
                            <p class="h5">Description</p>
                            <p><?= $rows->carDescription ?> </p>
                        </div>
                        <div class="col-lg-12 mt-3 card border-0 rounded-0">
                            <div class="row my-gallery">
                                <?php foreach($img as $img): ?>
                                <?php list($width, $height, $type, $attr) = getimagesize(base_url() . "assets/image/car-image/" . $img->carimageImage); ?>
                                <figure class="col-lg-4 col-6 mt-3" itemprop="associatedMedia" itemscope>
                                    <a href="<?= base_url(); ?>assets/image/car-image/<?= $img->carimageImage; ?>" itemprop="contentUrl" data-size="<?= $width ." x ". $height ?>">
                                            <img src="<?= base_url(); ?>assets/image/car-image/<?= $img->carimageImage; ?>" itemprop="thumbnail" alt="Image description" class="img-fluid"/>
                                            </a>
                                    <figcaption itemprop="caption description" class="text-center">

                                    </figcaption>
                                </figure>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pt-3 mb-3">
                        <h5 class="mb-3">
                            <?= ucwords($rows->carName);?>
                        </h5>
                        
                        <hr>
                    <div class="col-lg-12 p-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="h6 text-brand">Car Details</h2>
                                <div class="hrbrand"></div>
                                <p>
                                
                                    <i class="fa fa-check"></i> Brand :
                                    <?php $data['carBrandData'] = $this->admin_datawork->get_id('brand', ['brandId' => $rows->carBrand]); ?>
                            <?php echo $data['carBrandData']['brandName']; ?>
                                </p>
                                <p><i class="fa fa-check"></i> Model :
                                     <?php $data['carModelData'] = $this->admin_datawork->get_id('model', ['modelId' => $rows->carModel]); ?>
                            <?php echo $data['carModelData']['modelName']; ?>
                                </p>
                                <p><i class="fa fa-check"></i> Milage :
                                    <?= $rows->carFinance;?>
                                </p>
                                <p><i class="fa fa-check"></i> Fuel :
                                    <?php $data['carFuelData'] = $this->admin_datawork->get_id('fuel', ['fuelId' => $rows->carFuel]); ?>
                            <?php echo $data['carFuelData']['fuelName']; ?>
                                </p>
                                <p><i class="fa fa-check"></i> Transmission :
                                    <?php $data['carTransmissionData'] = $this->admin_datawork->get_id('transmission', ['transmissionId' => $rows->carTransmission]); ?>
                                    <?= $data['carTransmissionData']['transmissionName']; ?>
                                </p>
                                <p><i class="fa fa-check"></i> Traction :
                                     <?php $data['carTractionData'] = $this->admin_datawork->get_id('traction', ['tractionId' => $rows->carTraction]); ?>
                            <?php echo $data['carTractionData']['tractionName']; ?>
                                </p>
                                <p><i class="fa fa-check"></i> Driving Side :
                                    <?= $rows->carDrivingSide;?>
                                </p>
                                <p><i class="fa fa-check"></i> Engine Capicity :
                                    <?= $rows->carEngineCapicity;?>
                                </p>
                                <p><i class="fa fa-check"></i> Car Stock :
                                    <?= $rows->carStock;?>
                                </p>
                                <p><i class="fa fa-check"></i> Kelometer :
                                    <?= $rows->carKm;?>
                                </p>
                                <p><i class="fa fa-check"></i> Car Finance :
                                    <?= $rows->carFinance;?>
                                </p>
                                <button class="btn btn-danger btn-block rounded-0"><span class="h5">P <?= number_format($rows->carPrice);?></span></button>
                                
                                
                                
                                
                            </div>

                            <div class="col-lg-12 mt-3">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h6 class="text-brand">Share Now</h6>
                                        <div class="hrbrand"></div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <a href="whatsapp://send?text=<?= base_url(); ?>home/cars/<?= $rows->carSlug; ?>" class="mr-3"><img src="<?= base_url(); ?>assets/image/square-whatsapp.svg" alt="Share" style="width:40px;"></a>

                                            <div class="fb-share-button mr-3" data-href="<?= base_url(); ?>home/cars/<?= $rows->carSlug; ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?= base_url(); ?>home/cars/<?= $rows->carSlug; ?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><img src="<?= base_url(); ?>assets/image/square-facebook.svg" alt="Share" style="width:40px;"></a></div>

                                            <a class="mr-3" href="http://twitter.com/share?text=[<?= $rows->carName; ?>]&url=<?= base_url(); ?>home/cars/<?= $rows->carSlug; ?>" target="_blank">
                                                <img src="<?= base_url(); ?>assets/image/square-twitter.svg" alt="Share" style="width:40px;">
                                            </a>

                                            <a class="mr-3" href="https://plus.google.com/share?url=<?= base_url(); ?>home/cars/<?= $rows->carSlug; ?>" target="_blank">
                                                <img src="<?= base_url(); ?>assets/image/square-gp.svg" alt="Share" style="width:40px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

        </div>
        </div>
        <div class="col-lg-3 mt-4">
            <!-- IF DEALER -->
            <?php if($dealer != ""){ ?>
            
            <?php
    $data['dealer'] =  $this->mmodal->get_id('dealer', ['dealerId' => $rows->carDealer]);
        $dealerphoto1 = $data['dealer']['dealerImage'];
        if($dealerphoto1 == NULL){
            $dealerphoto = base_url() . "assets/image/em-boy-1.svg";
        }
        else {
            $dealerphoto = base_url() . "assets/image/dealer/" . $dealerphoto1;
        }
    ?>
            <div class="card">
                <div class="card-header">
                    <h6>Dealer Information</h6>
                </div>
                <div class="card-body">
              <img class="card-img-top img-fluid" src="<?php echo $dealerphoto; ?>" alt="<?php echo $data['dealer']['dealerFname']; ?>" >
              <div class="card-body">
                <h5 class="card-title"><?php echo $data['dealer']['dealerFname']; ?> <?php echo $data['dealer']['dealerLname']; ?></h5>
                <p class="card-text"><i class="fa fa-phone"></i> <?php echo $data['dealer']['dealerEmail']; ?></p>
                <p class="card-text"><i class="fa fa-envelope"></i> <?php echo $data['dealer']['dealerContact']; ?></p>
                <a href="<?= base_url(); ?>home/viewDealer/<?php echo $data['dealer']['dealerSlug']; ?> " class="btn btn-primary btn-sm">Enquiry</a>
              </div>
              </div>
            </div>
            <?php } ?>
            <!-- IF DEALER -->
            <!-- CAR MODEL -->
            <div class="card mt-3">
                <div class="card-header">
                    <h6><?php echo $data['brand']['brandName']; ?> Cars</h6>
                    <h6><?php $brandId = $data['brand']['brandId']; ?></h6>
                </div>
                <div class="card-body">
                        <?php $data['models'] = $this->datawork->get_data('model', ['modelBrand' => $brandId]); ?>
                        <?php foreach($data['models'] as $models): ?>
                        <a href="<?= base_url() .'home/brand/'. $models->modelSlug; ?>" class='nav-link text-dark p-0'>
                            <div class='listbar_small col-12'>
                                <p><?= $models->modelName; ?> 
                            <?php $countcarmodel = $this->admin_datawork->count_all_con('car', ['carModel' => $models->modelId]) ?>
                                 <span class="text-danger">(<?php echo $countcarmodel; ?>)</span></p>
                            </div>
                        </a>
                        <?php endforeach;?>
                    </div>
                </div>
            <!-- CAR MODEL -->
            <!-- brand -->
            <div class="card mt-3">
                <div class="card-header">
                    <h6>Manufacturing Cars Company</h6>
                </div>
                <div class="card-body">
                        <?php $data['brand'] = $this->datawork->get_data('brand'); ?>
                        <?php foreach($data['brand'] as $brand): ?>
                        <a href="<?= base_url() .'home/brand/'. $brand->brandSlug; ?>" class='nav-link text-dark p-0'>
                            <div class='listbar_small col-12'>
                                <p><?= $brand->brandName; ?> 
                            <?php $countcarofbrand = $this->admin_datawork->count_all_con('car', ['carBrand' => $brand->brandId]) ?>
                                 <span class="text-danger">(<?php echo $countcarofbrand; ?>)</span></p>
                            </div>
                        </a>
                        <?php endforeach;?>
                    </div>
                </div>
            <!-- brand -->
        </div>    
</div>



<?php if($countowlcars > '0'){ ?>
<div class="col-lg-12 p-0 mt-4">
    <h4 class="text-center">Related Cars</h4>
    <section class="latest-blog-posts bg-white">
        <div class="container pt-3 pb-3">
            <div id="owl-demo-2" class="owl-carousel owl-theme col-12 p-0">
                <?php foreach($owlcars as $car2): ?>
                    <?php $countcarimg2 = $this->admin_datawork->count_all('carimage', ['carProdId' => $car2->carId]); ?>
                    <?php $data['carimg'] = $this->admin_datawork->get_id('carimage', ['carProdId' => $car2->carId]); ?>
                    <?php
                    $photo12 = $data['carimg']['carimageImage'];
                    if($countcarimg2 > 0){
                        $photo_p2 = base_url() . "assets/image/car-image/" . $photo12;
                    }
                    else {
                        $photo_p2 = base_url() . "assets/image/bnmdef.png";
                    }
                    ?>
                    <article class="thumbnail item" itemscope="" itemtype="">
                        <a class="blog-thumb-img nav-link p-0" href="">
                           <div class="b-cards" style="background-image:url(<?php echo $photo_p2; ?>)"></div>
                           <div class="caption text-center">
                            <h6 itemprop="headline" class="mt-2">
                                <div class="text-brand text-truncate">
                                    <?php echo $car2->carName;?>
                                </div>
                            </h6>
                        <p class="card-text text-truncate mb-1">
                            <?php $data['trans2'] = $this->mmodal->get_id('transmission', ['transmissionId' => $car2->carTransmission]); ?>

                            <?php $data['fuel2'] = $this->mmodal->get_id('fuel', ['fuelId' => $car2->carFuel]); ?>

                            P <?php echo $car2->carPrice;?> &nbsp; | &nbsp;
                            <?php echo $data['trans2']['transmissionName'];?> &nbsp; | &nbsp;
                            <?php echo $data['fuel2']['fuelName'];?>
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
<!-- container -->
</section>
</div>
<?php } ?>
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
<!--<script>
    $(document).ready(function($){
        $("#cartype").onChange(function(){
            var cartypeData = $this.getElementById
        });
    });
</script>-->
</div>
<form class="form-horizontal mForm" action="<?= base_url(); ?>home/leadGenerate"  method="POST" enctype="multipart/form-data">
<div class="col-lg-12 mt-4">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 col-12">
            <p>For more information please contact the seller directly by telephone or by completing the form below</p>
            <div class="">
                <div class="form-group row">
                    <label class="col-lg-3 col-12" for="">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm col-lg-9 col-12" name="name">
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-12" for="">E-mail address <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm col-lg-9 col-12" name="email">
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-12" for="">Contact No <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm col-lg-9 col-12" name="contact">
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-12" for="">Message <span class="text-danger">*</span></label>
                    <textarea class="form-control form-control-sm col-lg-9 col-12" rows="4" placeholder="Your Message" name="message"></textarea>
                </div>
                <div class="form-group text-center">
                    <?php if($dealer != ""){ ?>
                    <input type="text" value="<?php echo $rows->carDealer; ?>" name="dealer" hidden>
                    <?php } else { ?>
                    <input type="text" value="" name="dealer" hidden>
                    <?php } ?>
                     <input type="text" value="<?php echo $rows->carId; ?>" name="car" hidden>
                    <input type="submit" value="Submit" class="btn btn-primary">
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-2"></div>
        <div class="col-lg-8 col-12">
            <?= $this->session->flashdata('success') ?>
    </div>
        </div>
        <div class="col-lg-2"></div>

</div>
</form>

<script type="text/javascript">
    (function($, W, D) {
        var JQUERY4U = {};
        JQUERY4U.UTIL = {
            setupFormValidation: function() {
                //form validation rules
                $("#formMy").validate({
                    rules: {
                        name : "required",
                        email : "required",
                        contact : "required",
                        message : "required"
                    },
                    messages: {},
                    submitHandler: function(form) {
                        form.submit();
                    }
                });
            }
        }
        //when the dom has loaded setup form validation rules
        $(D).ready(function($) {
            JQUERY4U.UTIL.setupFormValidation();
        });
    })(jQuery, window, document);

</script>
<script>
    function save() {
        // ajax adding data to database
        $.ajax({
            url: "<?= base_url('admin/addNewCategory')?>",
            type: "POST",
            data: $('#formMy').serialize(),
            dataType: "JSON",
            success: function(data){
                $.toast({
                    title: 'Updated successfull',
                    subtitle: 'Just now',
                    content: 'Your category has updated successfully',
                    type: 'success',
                    delay: 5000
                });
                $("#mydiv").load(" #mydiv > *");
                document.getElementById("formMy").reset();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
            }
        });
    }

</script>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element, as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"><i class="fa fa-plus"></i></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>
<script>
    var initPhotoSwipeFromDOM = function(gallerySelector) {

        // parse slide data (url, title, size ...) from DOM elements 
        // (children of gallerySelector)
        var parseThumbnailElements = function(el) {
            var thumbElements = el.childNodes,
                numNodes = thumbElements.length,
                items = [],
                figureEl,
                linkEl,
                size,
                item;

            for (var i = 0; i < numNodes; i++) {

                figureEl = thumbElements[i]; // <figure> element

                // include only element nodes 
                if (figureEl.nodeType !== 1) {
                    continue;
                }

                linkEl = figureEl.children[0]; // <a> element

                size = linkEl.getAttribute('data-size').split('x');

                // create slide object
                item = {
                    src: linkEl.getAttribute('href'),
                    w: parseInt(size[0], 10),
                    h: parseInt(size[1], 10)
                };



                if (figureEl.children.length > 1) {
                    // <figcaption> content
                    item.title = figureEl.children[1].innerHTML;
                }

                if (linkEl.children.length > 0) {
                    // <img> thumbnail element, retrieving thumbnail url
                    item.msrc = linkEl.children[0].getAttribute('src');
                }

                item.el = figureEl; // save link to element for getThumbBoundsFn
                items.push(item);
            }

            return items;
        };

        // find nearest parent element
        var closest = function closest(el, fn) {
            return el && (fn(el) ? el : closest(el.parentNode, fn));
        };

        // triggers when user clicks on thumbnail
        var onThumbnailsClick = function(e) {
            e = e || window.event;
            e.preventDefault ? e.preventDefault() : e.returnValue = false;

            var eTarget = e.target || e.srcElement;

            // find root element of slide
            var clickedListItem = closest(eTarget, function(el) {
                return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
            });

            if (!clickedListItem) {
                return;
            }

            // find index of clicked item by looping through all child nodes
            // alternatively, you may define index via data- attribute
            var clickedGallery = clickedListItem.parentNode,
                childNodes = clickedListItem.parentNode.childNodes,
                numChildNodes = childNodes.length,
                nodeIndex = 0,
                index;

            for (var i = 0; i < numChildNodes; i++) {
                if (childNodes[i].nodeType !== 1) {
                    continue;
                }

                if (childNodes[i] === clickedListItem) {
                    index = nodeIndex;
                    break;
                }
                nodeIndex++;
            }



            if (index >= 0) {
                // open PhotoSwipe if valid index found
                openPhotoSwipe(index, clickedGallery);
            }
            return false;
        };

        // parse picture index and gallery index from URL (#&pid=1&gid=2)
        var photoswipeParseHash = function() {
            var hash = window.location.hash.substring(1),
                params = {};

            if (hash.length < 5) {
                return params;
            }

            var vars = hash.split('&');
            for (var i = 0; i < vars.length; i++) {
                if (!vars[i]) {
                    continue;
                }
                var pair = vars[i].split('=');
                if (pair.length < 2) {
                    continue;
                }
                params[pair[0]] = pair[1];
            }

            if (params.gid) {
                params.gid = parseInt(params.gid, 10);
            }

            return params;
        };

        var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
            var pswpElement = document.querySelectorAll('.pswp')[0],
                gallery,
                options,
                items;

            items = parseThumbnailElements(galleryElement);

            // define options (if needed)
            options = {

                // define gallery index (for URL)
                galleryUID: galleryElement.getAttribute('data-pswp-uid'),

                getThumbBoundsFn: function(index) {
                    // See Options -> getThumbBoundsFn section of documentation for more info
                    var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                        pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                        rect = thumbnail.getBoundingClientRect();

                    return {
                        x: rect.left,
                        y: rect.top + pageYScroll,
                        w: rect.width
                    };
                }

            };

            // PhotoSwipe opened from URL
            if (fromURL) {
                if (options.galleryPIDs) {
                    // parse real index when custom PIDs are used 
                    // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                    for (var j = 0; j < items.length; j++) {
                        if (items[j].pid == index) {
                            options.index = j;
                            break;
                        }
                    }
                } else {
                    // in URL indexes start from 1
                    options.index = parseInt(index, 10) - 1;
                }
            } else {
                options.index = parseInt(index, 10);
            }

            // exit if index not found
            if (isNaN(options.index)) {
                return;
            }

            if (disableAnimation) {
                options.showAnimationDuration = 0;
            }

            // Pass data to PhotoSwipe and initialize it
            gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
            gallery.init();
        };

        // loop through all gallery elements and bind events
        var galleryElements = document.querySelectorAll(gallerySelector);

        for (var i = 0, l = galleryElements.length; i < l; i++) {
            galleryElements[i].setAttribute('data-pswp-uid', i + 1);
            galleryElements[i].onclick = onThumbnailsClick;
        }

        // Parse URL and open gallery if it contains #&pid=3&gid=1
        var hashData = photoswipeParseHash();
        if (hashData.pid && hashData.gid) {
            openPhotoSwipe(hashData.pid, galleryElements[hashData.gid - 1], true, true);
        }
    };
    // execute above function
    initPhotoSwipeFromDOM('.my-gallery');

</script>
<script src="<?= base_url(); ?>assets/js/photoswipe-ui-default.min.js"></script>
<script src="<?= base_url(); ?>assets/js/photoswipe.min.js"></script>