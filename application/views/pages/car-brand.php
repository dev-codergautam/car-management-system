<div class="col-lg-12 mt-4 mb-4">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url(); ?>home/index">Home</a></li>
<?php $data['brand'] = $this->mmodal->get_id('brand', ['brandSlug' => $this->uri->segment(3)]); ?>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $data['brand']['brandName']; ?></li>
    </ol>
</nav>
</div>

<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-12 p-2 pb-3">
            <h6 class="text-center text-uppercase"><?php echo $brandName; ?> Cars</h6>
            <hr class="hrbrand">
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

                                        P <?php echo $car->carPrice;?> &nbsp; | &nbsp;
                                        <?php echo $data['trans']['transmissionName'];?> &nbsp; | &nbsp;
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
        <div class="col-lg-3">
            <div class="box-shadow card mb-3">
                <div class="card-header">
                    <h6 class="card-title small text-uppercase"><b>CAR BRANDS</b></h6>
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
        </div>
    </div>
</div>
