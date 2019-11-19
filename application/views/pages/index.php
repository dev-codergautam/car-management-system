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
                <?= form_open(); ?>
                <div class="container">
                    <div class="input-group mb-3 mt-5">
                        <div class="input-group-prepend">
                            <select name="city" id="city" class="form-control rounded-0">
                                <?php foreach($cities as $cities): ?>
                                    <option value="<?= $cities->city_name; ?>"><?= $cities->city_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <input type="text" name="query" class="form-control rounded-0" placeholder="Search any Car here" autocomplete="off">
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
                                <option value="<?= $cities->city_name; ?>"><?= $cities->city_name; ?></option>  
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
    <div class="row w-100 d-none d-md-block">
        <div class="col-8 offset-lg-2">
            <div class="card shadow">
                <div class="card-body">
                    <form action="<?= base_url(); ?>home/filter" class="form" method="get">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <select name="bodytype" id="bodytype" class="form-control form-control-sm">
                                        <option value=""  selected disabled1>Any Body Type</option>
                                        <?php foreach($cartype as $cartype): ?>
                                        <option value="<?= $cartype->cartypeId ?>">
                                            <?= $cartype->cartypeName ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <select name="brand" id="brand" class="form-control form-control-sm">
                                        <option value=""  selected disabled1>Any Brand</option>
                                        <?php foreach($brand as $brand): ?>
                                        <option id="<?= $brand->brandId ?>" value="<?= $brand->brandId ?>"><?= $brand->brandName ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <select name="model" id="model" class="form-control form-control-sm">
                                        <option value="" selected disabled1>Any Modal</option>
                                        <?php foreach($model as $model): ?>
                                        <option id="<?= $model->modelBrand ?>" value="<?= $model->modelId ?>"><?= $model->modelName ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <select name="transmission" id="transmission" class="form-control form-control-sm">
                                        <option value=""  selected disabled1>Any Transmission</option>
                                         <?php foreach($transmission as $transmission): ?>
                                        <option value="<?= $transmission->transmissionId ?>"><?= $transmission->transmissionName ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <select name="fuel" id="fuel" class="form-control form-control-sm">
                                        <option value=""  selected disabled1>Any Type of fuel</option>
                                        <?php foreach($fuel as $fuel): ?>
                                        <option value="<?= $fuel->fuelId ?>"><?= $fuel->fuelName ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                <select name="year" id="year" class="form-control form-control-sm">
                                    <option value=""  selected disabled1>Any Year</option>
                                    <?php foreach($year as $year): ?>
                                        <option value="<?= $year->yearName; ?>"><?= $year->yearName; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                   <input type="text" class="form-control form-control-sm" name="keyword" id="searchcar" placeholder="Keyword">
                                </div>
                            </div>
                            <div class="col-lg-4 offset-lg-4">
                                <div class="">
                                   <input type="submit" class="btn-block btn btn-sm btn-danger">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--
    <div class="h6 text-center mt-3 text-uppercase mb-2">Select Cars</div>
    <hr class="hrbrand">
    <div class="container pt-3 pb-3">
        <div id="maincategory" class="owl-carousel owl-theme col-12 p-0">
            <?php foreach($brand1 as $brand1): ?>
                <article class="thumbnail item" itemscope="" itemtype="">
                    <a class="blog-thumb-img nav-link p-0" href="<?= base_url(); ?>home/brand/<?php echo $brand1->brandSlug; ?>">
                     <img src="<?= base_url(); ?>assets/image/brand/<?php echo $brand1->brandIcon; ?>" alt="<?php $brand1->brandName ;?>" class="img-fluid">
                     <div class="caption text-center mt-2">
                        <p itemprop="text" class="text-muted mb-0 text-truncate">
                            <?php echo $brand1->brandName; ?>
                        </p>
                    </div>
                </a>
            </article>
        <?php endforeach; ?>
    </div>
-->
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

<style>
    .pll {
        padding: 4px 4px 4px 10px;
        color: white;
    }
</style>
        <div class="col-lg-12 mt-4">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card shadow-sm rounded-0 mt-3 d-none d-md-block">
                        <div class="card-header">
                            <p><i class="fa fa-search"></i> <b>What are you looking for botswana</b></p>
                        </div>
                        <div class="card-body p-3">
                            <?php foreach($cartype2 as $cartype2): ?>
                            <a href="<?= base_url(); ?>home/cartype/<?php echo $cartype2->cartypeSlug; ?>" class='nav-link text-dark p-0'>
                                <div class='listbar_small col-12'>
                                    <p>
                                    <?php echo $cartype2->cartypeName; ?>
                                    <?php $countcartype = $this->admin_datawork->count_data('car', ['carType' => $cartype2->cartypeId]); ?>
                                        (<?php echo $countcartype; ?>)
                                    </p>
                                </div>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="card shadow-sm rounded-0 mt-3 d-none d-md-block">
                        <div class="card-header">
                            <p><i class="fa fa-map-marker"></i> <b>Botswana car for sale by City/Town</b></p>
                        </div>
                        <div class="card-body p-3">
                            <div class="row">
                                
                            </div>
                        </div>
                    </div>

                    <div class="card box-shadow card mb-3 mt-3 d-none d-md-block">
                        <div class="card-header">
                            <p><i class="fa fa-car"></i> <b>Botswana Vehicle Sales</b></p>
                        </div>
                        <div class="card-body">
                            <?php $data['brand'] = $this->datawork->get_data('brand'); ?>
                            <?php foreach($data['brand'] as $brand): ?>
                            <a href="<?= base_url() .'home/brand/'. $brand->brandSlug; ?>" class='nav-link text-dark p-0'>
                                <div class='listbar_small col-12'>
                                    <p><?= $brand->brandName; ?> 
                                <?php $countcarbrand = $this->admin_datawork->count_data('car', ['carBrand' => $brand->brandId]) ?>
                                    (<?php echo $countcarbrand; ?>)</p>
                                </div>
                            </a>
                    <?php endforeach;?>
                    
                </div>
            </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <?php foreach($car as $car): ?>
                            <?php $countcarimg = $this->admin_datawork->count_all('carimage', ['carProdId' => $car->carId]); ?>
                            <?php $data['carimg'] = $this->datawork->get_id('carimage', ['carProdId' => $car->carId]); ?>
                            <?php
                            $photo1 = $data['carimg']['carimageImage'];
                            if($countcarimg > 0){
                                $photo = base_url() . "assets/image/car-image/" . $photo1;
                            }
                            else {
                                $photo = base_url() . "assets/image/bnmdef.png";
                            }
                            ?>
                            <div class="col-lg-4 col-6 mb-4">
                                <a href="<?= base_url(); ?>home/cars/<?= $car->carSlug;?>" class="nav-link p-0" title="<?= ucwords($car->carName); ?>">
                                    <div class="card border-0 rounded-0 box-shadow box-shadow2 text-center">
                                        <div class="b-cards" style="background-image:url(<?= $photo; ?>)"></div>
                                        <div class=" d-none d-lg-block">
                                            <div class="b-cate">
                                                <p class="mb-0 p-0"><?php echo $car->carMenufectureYear;?> </p>
                                            </div>
                                        </div>
                                        <div class="card-body businesscard mt-2">
                                            <h6 class="text-brand text-truncate">
                                                <?php echo $car->carName;?>
                                            </h6>
                                            <p class="card-text text-truncate mb-1">
                                                <b>
                                                <?php $data['trans'] = $this->datawork->get_id('transmission', ['transmissionId' => $car->carTransmission]); ?>

                                                <?php $data['fuel'] = $this->datawork->get_id('fuel', ['fuelId' => $car->carFuel]); ?>

                                                P <?php echo number_format($car->carPrice);?> &nbsp; | &nbsp;
                                                <?php // echo $data['trans']['transmissionName'];?>
                                                <?php echo number_format($car->carKm); ?> KM
                                                 &nbsp; | &nbsp;
                                                <?php echo $data['fuel']['fuelName'];?>
                                                </b>
                                            </p>
                                            <p class="card-text">
                                                <span class="bg-warning pl-2 pr-2 pt-1 pb-1 text-white mr-2">
                                                    <i class="fa fa-eye"></i> <?php echo $car->carView; ?>
                                                </span>
                                            </p>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-12 p-0 m-0">
            <section class="latest-blog-posts bg-white">
                <div class="container pt-3 pb-3">
                    <div id="owl-demo-2" class="owl-carousel owl-theme col-12 p-0">
                        <?php foreach($car2 as $car2): ?>
                            <?php $countcarimg = $this->admin_datawork->count_all('carimage', ['carProdId' => $car2->carId]); ?>
                            <?php $data['carimg'] = $this->datawork->get_id('carimage', ['carProdId' => $car2->carId]); ?>
                            <?php
                            $photo12 = $data['carimg']['carimageImage'];
                            if($countcarimg > 0){
                                $photo_p = base_url() . "assets/image/car-image/" . $photo12;
                            }
                            else {
                                $photo_p = base_url() . "assets/image/bnmdef.png";
                            }
                            ?>
                    <article class="thumbnail item" itemscope="" itemtype="">
                        <a class="blog-thumb-img nav-link p-0" href="<?= base_url(); ?>home/cars/<?= $car2->carSlug;?>">
                           <div class="b-cards" style="background-image:url(<?php echo $photo_p; ?>)"></div>
                           <div class="caption text-center">
                            <h6 itemprop="headline" class="mt-2">
                                <div class="text-brand text-truncate">
                                    <?php echo $car2->carName;?>
                                </div>
                            </h6>
                        <p class="card-text text-truncate mb-1">
                            <b>
                            <?php $data['trans2'] = $this->datawork->get_id('transmission', ['transmissionId' => $car2->carTransmission]); ?>

                            <?php $data['fuel2'] = $this->datawork->get_id('fuel', ['fuelId' => $car2->carFuel]); ?>

                            P <?php echo $car2->carPrice;?>     <br>
                            <?php echo number_format($car2->carKm); ?> KM &nbsp; | &nbsp;
                            <?php echo $data['fuel2']['fuelName'];?>
                            </b>
                        </p>
                        <p class="card-text">
                            <span class="bg-warning pl-2 pr-2 pt-1 pb-1 text-white mr-2">
                                <i class="fa fa-eye"></i> <?php echo $car2->carView; ?>
                            </span>
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

<!--<script>
    $(document).ready(function($){
        $("#cartype").onChange(function(){
            var cartypeData = $this.getElementById
        });
    });
</script>-->

<script type="text/javascript">
    $("#brand").change(function() {
        if ($(this).data('options') === undefined) {
            $(this).data('options', $('#model option').clone());
        }
        var id = $(this).val();
        var options = $(this).data('options').filter('[id=' + id + ']');
        $('#model').html(options);
    });

</script>

</div>
