<?php foreach($car as $car): ?>
   <main class="card p-2">
    <div class="col-md-12 mt-3">
        <h4><?= $car->carName ?> <?= $car->carModel ?></h4>
        <hr>
    </div>
    <div class="col-lg-12 mt-2">
        <div class="row">
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
                            <label for="" class=" ">Menufecturer</label>
                             <?php $data['carMenufecturerData'] = $this->admin_datawork->get_id('menufecturer', ['menufecturerId' => $car->carMenufecturer]); ?>
                            <h3 class="text-muted h6 ml-3"><?php echo $data['carMenufecturerData']['menufecturerName']; ?></h3>
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
        </div>
    </div>
</main>
<?php endforeach; ?>