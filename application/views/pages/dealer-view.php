<div class="col-lg-12 mt-4 mb-4">
</div>
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-12 pb-5">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <img src="<?= base_url(); ?>assets/image/dealer/<?php echo $dealerImage; ?>" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </div>
        <div class="col-lg-12 mb-4 p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-1">
               <a class='nav-link ml-3 p-2 text-white' href='<?= base_url('home/selluser'); ?>'><i class="sprite sprite-sale_ico"></i> Home
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class='nav-item active'>
                            <a class='nav-link ml-3 p-2' target="_blank" href='<?= base_url(); ?>home/dealerContact/<?php echo $dslug; ?>'>
                                <i class="fa fa-phone"></i> Contact Us</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link ml-3 p-2" href="<?= base_url(); ?>dealer">
                                <i class="fa fa-sign-in"></i> Dealer Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <div class="card mb-3">
                <div class="card-header">
                    Hy
                </div>
            </div>
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
                                        <?php $data['trans'] = $this->datawork->get_id('transmission', ['transmissionId' => $car->carTransmission]); ?>

                                        <?php $data['fuel'] = $this->datawork->get_id('fuel', ['fuelId' => $car->carFuel]); ?>

                                        P <?php echo $car->carPrice;?> &nbsp; | &nbsp;
                                        <?php echo $data['trans']['transmissionName'];?> &nbsp; | &nbsp;
                                        <?php echo $data['fuel']['fuelName'];?>
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
        <div class="col-lg-3">
            
            <div class="box-shadow card mb-3">
                <div class="card-header">
                    <h6 class="card-title small text-uppercase"><b>CAR TYPE</b></h6>
                </div>
                <div class="card-body">
                    <?php $data['cartyp'] = $this->datawork->get_data('cartype'); ?>
                    <?php foreach($data['cartyp'] as $cartyp): ?>
                    <a href="<?= base_url() .'home/cartype/'. $cartyp->cartypeSlug; ?>" class='nav-link text-dark p-0'>
                        <div class='listbar_small col-12 p-1'>
                            <p><?= $cartyp->cartypeName; ?> 
                        <?php $countcarType = $this->admin_datawork->count_all_con('car', ['carType' => $cartyp->cartypeId]) ?>
                             <span class="text-danger">(<?php echo $countcarType; ?>)</span></p>
                        </div>
                    </a>
                    <?php endforeach;?>
                </div>
            </div>

            <div class="box-shadow card mb-3">
                <div class="card-header">
                    <h6 class="card-title small text-uppercase"><b>CAR BRANDS</b></h6>
                </div>
                <div class="card-body">
                    <?php $data['brand'] = $this->datawork->get_data('brand'); ?>
                    <?php foreach($data['brand'] as $brand): ?>
                    <a href="<?= base_url() .'home/brand/'. $brand->brandSlug; ?>" class='nav-link text-dark p-0'>
                        <div class='listbar_small col-12 p-1'>
                            <p><?= $brand->brandName; ?> 
                        <?php $countcarofbrand = $this->admin_datawork->count_all_con('car', ['carBrand' => $brand->brandId]) ?>
                             <span class="text-danger">(<?php echo $countcarofbrand; ?>)</span></p>
                        </div>
                    </a>
                    <?php endforeach;?>
                </div>
            </div>

        </div>
    </div>
</div>
