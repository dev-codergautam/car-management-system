<?php foreach($car as $car): ?>
 <main class="">

  <div class="col-lg-12 box-shadow bg-white" style="margin-top:50px;padding:30px;">
    <div class="row">
        <?php
        $data['carimgs'] =  $this->mmodal->get_id('carimage', ['carProdId' => $car->carId]);
        $carimg11 = $data['carimgs']['carimageImage'] ;
        if($carimg11 == NULL){
            $carimg1 = "user.jpg";
        }
        else {
            $carimg1 = $carimg11;
        }
        $dealer = $car->carDealer;
        ?>
        <div class="col-lg-8" style="margin-top:-60px;">
            <div class="mybizzpic box-shadow" style="background-image:url(<?= base_url('assets/image/car-image/'.$carimg1);?>);">
            </div>
            <div class="col-lg-12 my-2 mt-3">
                <p class="h5">Description</p>
                <p><?= $car->carDescription ?> </p>
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
                <?= ucwords($car->carName);?>
            </h5>

            <hr>
            <div class="col-lg-12 p-3">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h6 text-brand">Car Details</h2>
                        <div class="hrbrand"></div>
                        <p>

                            <i class="fa fa-check"></i> Brand :
                            <?php $data['carBrandData'] = $this->admin_datawork->get_id('brand', ['brandId' => $car->carBrand]); ?>
                            <?php echo $data['carBrandData']['brandName']; ?>
                        </p>
                        <p><i class="fa fa-check"></i> Model :
                           <?php $data['carModelData'] = $this->admin_datawork->get_id('model', ['modelId' => $car->carModel]); ?>
                           <?php echo $data['carModelData']['modelName']; ?>
                       </p>
                       <p><i class="fa fa-check"></i> Milage :
                        <?= $car->carFinance;?>
                    </p>
                    <p><i class="fa fa-check"></i> Fuel :
                        <?php $data['carFuelData'] = $this->admin_datawork->get_id('fuel', ['fuelId' => $car->carFuel]); ?>
                        <?php echo $data['carFuelData']['fuelName']; ?>
                    </p>
                    <p><i class="fa fa-check"></i> Transmission :
                        <?php $data['carTransmissionData'] = $this->admin_datawork->get_id('transmission', ['transmissionId' => $car->carTransmission]); ?>
                        <?= $data['carTransmissionData']['transmissionName']; ?>
                    </p>
                    <p><i class="fa fa-check"></i> Traction :
                       <?php $data['carTractionData'] = $this->admin_datawork->get_id('traction', ['tractionId' => $car->carTraction]); ?>
                       <?php echo $data['carTractionData']['tractionName']; ?>
                   </p>
                   <p><i class="fa fa-check"></i> Driving Side :
                    <?= $car->carDrivingSide;?>
                </p>
                <p><i class="fa fa-check"></i> Engine Capicity :
                    <?= $car->carEngineCapicity;?>
                </p>
                <p><i class="fa fa-check"></i> Car Stock :
                    <?= $car->carStock;?>
                </p>
                <p><i class="fa fa-check"></i> Kelometer :
                    <?= $car->carKm;?>
                </p>
                <p><i class="fa fa-check"></i> Car Finance :
                    <?= $car->carFinance;?>
                </p>
                <button class="btn btn-danger btn-block rounded-0"><span class="h5">P <?= number_format($car->carPrice);?></span></button>




            </div>

            <div class="col-lg-12 mt-3">
                <div class="row">
                    <div class="col-lg-12">
                        <h6 class="text-brand">Share Now</h6>
                        <div class="hrbrand"></div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <a href="whatsapp://send?text=<?= base_url(); ?>home/cars/<?= $car->carSlug; ?>" class="mr-3"><img src="<?= base_url(); ?>assets/image/square-whatsapp.svg" alt="Share" style="width:40px;"></a>

                            <div class="fb-share-button mr-3" data-href="<?= base_url(); ?>home/cars/<?= $car->carSlug; ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?= base_url(); ?>home/cars/<?= $car->carSlug; ?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><img src="<?= base_url(); ?>assets/image/square-facebook.svg" alt="Share" style="width:40px;"></a></div>

                            <a class="mr-3" href="http://twitter.com/share?text=[<?= $car->carName; ?>]&url=<?= base_url(); ?>home/cars/<?= $car->carSlug; ?>" target="_blank">
                                <img src="<?= base_url(); ?>assets/image/square-twitter.svg" alt="Share" style="width:40px;">
                            </a>

                            <a class="mr-3" href="https://plus.google.com/share?url=<?= base_url(); ?>home/cars/<?= $car->carSlug; ?>" target="_blank">
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
<div class="col-lg-12 mt-2">
    <div class="row">
            <!--
            <div class="col-md-6">
                <div class="tile">
                    <div class="tile-body">
                        <div class="form-group">
                            <label for="" class=" ">Name</label>
                            <h3 class="text-muted h6 ml-3"><?= $car->carName; ?></h3>
                        </div>
                        <div class="form-group">
                            <label for="" class=" ">Brand</label>
                            <?php $data['carBrandData'] = $this->admin_datawork->get_id('brand', ['brandId' => $car->carBrand]); ?>
                            <h3 class="text-muted h6 ml-3"><?php echo $data['carBrandData']['brandName']; ?></h3>
                        </div>
                        <div class="form-group">
                            <label for="" class=" ">Model</label>
                             <?php $data['carModelData'] = $this->admin_datawork->get_id('model', ['modelId' => $car->carModel]); ?>
                            <h3 class="text-muted h6 ml-3"><?php echo $data['carModelData']['modelName']; ?></h3>
                        </div>
                        <div class="form-group">
                            <label for="" class=" ">Milage</label>
                            <h3 class="text-muted h6 ml-3"><?= $car->carMilage; ?></h3>
                        </div>
                        <div class="form-group">
                            <label for="" class=" ">Type</label>
                             <?php $data['carTypeData'] = $this->admin_datawork->get_id('cartype', ['cartypeId' => $car->carType]); ?>
                            <h3 class="text-muted h6 ml-3"><?php echo $data['carTypeData']['cartypeName']; ?></h3>
                        </div>
                        <div class="form-group">
                            <label for="" class=" ">Driving Side</label>
                            <h3 class="text-muted h6 ml-3"><?= $car->carDrivingSide; ?></h3>
                        </div>
                        <div class="form-group">
                            <label for="" class=" ">EngineCapicity</label>
                            <h3 class="text-muted h6 ml-3"><?= $car->carEngineCapicity; ?></h3>
                        </div>
                        <div class="form-group">
                            <label for="" class=" ">Fuel</label>
                            <?php $data['carFuelData'] = $this->admin_datawork->get_id('fuel', ['fuelId' => $car->carFuel]); ?>
                            <h3 class="text-muted h6 ml-3"><?php echo $data['carFuelData']['fuelName']; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tile">
                    <div class="tile-body">
                        <div class="form-group">
                            <label for="" class=" ">Price</label>
                            <h3 class="text-muted h6 ml-3"><?= $car->carPrice; ?></h3>
                        </div>
                        <div class="form-group">
                            <label for="" class=" ">Stock</label>
                            <h3 class="text-muted h6 ml-3"><?= $car->carStock; ?></h3>
                        </div>
                        <div class="form-group">
                            <label for="" class=" ">Transmission</label>
                             <?php $data['carTransmissionData'] = $this->admin_datawork->get_id('transmission', ['transmissionId' => $car->carTransmission]); ?>
                            <h3 class="text-muted h6 ml-3"><?php echo $data['carTransmissionData']['transmissionName']; ?></h3>
                        </div>
                        <div class="form-group">
                            <label for="" class=" ">Traction</label>
                           <?php $data['carTractionData'] = $this->admin_datawork->get_id('traction', ['tractionId' => $car->carTraction]); ?>
                            <h3 class="text-muted h6 ml-3"><?php echo $data['carTractionData']['tractionName']; ?></h3>
                        </div>
                        <div class="form-group">
                            <label for="" class=" ">Finance Available</label>
                            <h3 class="text-muted h6 ml-3"><?= $car->carFinance; ?></h3>
                        </div>
                        <div class="form-group">
                            <label for="" class=" ">Menufecture Year</label>
                            <h3 class="text-muted h6 ml-3"><?= $car->carMenufectureYear; ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="form-group">
                            <label for="" class=" ">Description</label>
                            <h3 class="text-muted h6 ml-3"><?= $car->carDescription; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        -->        
    </div>
</div>
</main>
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
<?php endforeach; ?>