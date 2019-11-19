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

