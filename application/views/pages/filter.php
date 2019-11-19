<?php // if(($_GET['brand'] == "") || ($_GET['model'] == "") || ($_GET['bodytype'] == "") || ($_GET['transmission'] == "") || ($_GET['manufacturer'] == "") || ($_GET['fuel'] == "") || ($_GET['traction'] == "") || ($_GET['year'] == "") || ($_GET['keyword'] == "")){ ?>


<?php // } else { ?>

<div class="row w-100 mt-4">
        <div class="col-8 offset-lg-2">
            <div class="card shadow d-none d-md-block">
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
                                        <?php if($_GET['year'] == ""){ ?>
                                        <option value="<?php echo $_GET['year']; ?>"  selected disabled1><?php echo $_GET['year']; ?></option>
                                        <?php } else { ?>
                                        <option value="" selected>Any year</option>
                                        <?php } ?>
                                        <?php foreach($year as $year): ?>
                                        <option value="<?= $year->yearName; ?>"><?= $year->yearName; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?php if($_GET['keyword'] ==""){ ?>
                                    <input type="text" class="form-control form-control-sm" name="keyword" id="searchcar" value="<?php echo $_GET['keyword']; ?>">
                                   <?php } else { ?>
                                    <input type="text" class="form-control form-control-sm" name="keyword" id="searchcar" placeholder="Keyword">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-4 offset-lg-4">
                                <div class="">
                                   <input type="submit" class="btn-block btn btn-sm btn-danger">
                                </div>
                            </div>
                            <div class="col-lg-4 float-right">
                                <a href="<?= base_url(); ?>home/filter?bodytype=&brand=&model=&transmission=&fuel=&year=&keyword=" class="btn btn-sm btn-dark">Reset</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<div class="col-lg-12 mt-4">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
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
                    <div class="col-lg-3 col-6 mb-4">
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
                                        </span>
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
<?php //} ?>

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