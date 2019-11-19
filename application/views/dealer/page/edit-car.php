<?php foreach ($car as $car): ?>
<main class="card p-2">
    <div class="col-md-12 mt-3">
        <h4>Edit <?= $car->carName ?>  <?= $car->carModel ?>'s Details</h4>
        <?= $this->session->flashdata('success') ?>
        <hr>
    </div>
    <div class="col-lg-12 mt-2">
        <script src="<?= base_url(); ?>assets/js/nicEdit-latest.js" type="text/javascript"></script>
        <form name="myForm" class="form-horizontal" id="myForm" action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="tile-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class=" ">Car Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-sm" name="carname" placeholder="Car Name" value="<?= $car->carName ?>">
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('carname') ?></small></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class=" ">Car Brand<span class="text-danger">*</span></label>
                                    <select name="carbrand" id="brand" class="form-control form-control-sm">
                                        <option value="">Select Car Brand</option>
                                         <?php $data['carBrandData'] = $this->admin_datawork->get_id('brand', ['brandId' => $car->carBrand]); ?>
                                        <option value=" <?php echo $data['carBrandData']['brandId']; ?>" selected>  <?php echo $data['carBrandData']['brandName']; ?></option>
                                        <?php foreach ($brand as $brand): ?>
                                            <option value="<?= $brand->brandId ?>"><?= $brand->brandName; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('carbrand') ?></small></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class=" ">Model <span class="text-danger">*</span></label>
                                    <select name="carmodel" id="model" class="form-control form-control-sm">
                                        <option value="">Select Car Model</option>
                                          <?php $data['carModelData'] = $this->admin_datawork->get_id('model', ['modelId' => $car->carModel]); ?>
                                        <option value="  <?php echo $data['carModelData']['modelId']; ?>" selected>   <?php echo $data['carModelData']['modelName']; ?></option>
                                        <?php foreach ($carmodel as $carmodel): ?>
                                            <option value="<?= $carmodel->modelId ?>"><?= $carmodel->modelName; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('carmodel') ?></small></label>
                                </div>
                            </div>                
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class=" ">Type of car <span class="text-danger">*</span></label>
                                    <select name="cartype" id="" class="form-control form-control-sm">
                                        <option value="">Select Car type</option>
                                         <?php $data['carTypeData'] = $this->admin_datawork->get_id('cartype', ['cartypeId' => $car->carType]); ?>
                                        <option value=" <?php echo $data['carTypeData']['cartypeId']; ?>" selected>  <?php echo $data['carTypeData']['cartypeName']; ?></option>
                                        <?php foreach ($cartype as $cartype): ?>
                                            <option value="<?= $cartype->cartypeId ?>"><?= $cartype->cartypeName; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('cartype') ?></small></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class=" ">Transmission <span class="text-danger">*</span></label>
                                    <select name="cartransmission" id="" class="form-control form-control-sm">
                                        <option value="">Select Car transmission</option>
                                         <?php $data['carTransmissionData'] = $this->admin_datawork->get_id('transmission', ['transmissionId' => $car->carTransmission]); ?>
                                        <option value=" <?php echo $data['carTransmissionData']['transmissionId']; ?>" selected> <?php echo $data['carTransmissionData']['transmissionName']; ?></option>
                                         <?php foreach ($transmission as $transmission): ?>
                                            <option value="<?= $transmission->transmissionId ?>"><?= $transmission->transmissionName; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('cartransmission') ?></small></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class=" ">Traction <span class="text-danger">*</span></label>
                                    <select name="cartraction" id="" class="form-control form-control-sm">
                                        <option value="">Select traction</option>
                                         <?php $data['carTractionData'] = $this->admin_datawork->get_id('traction', ['tractionId' => $car->carTraction]); ?>
                                        <option value="<?php echo $data['carTractionData']['tractionId']; ?>" selected><?php echo $data['carTractionData']['tractionName']; ?></option>
                                         <?php foreach ($traction as $traction): ?>
                                            <option value="<?= $traction->tractionId ?>"><?= $traction->tractionName; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('cartraction') ?></small></label>
                                </div>
                            </div> 
                        </div>
                        <div class="row">   
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class=" ">Driving Side <span class="text-danger">*</span></label>
                                    <select name="cardrivingside" id="" class="form-control form-control-sm">
                                        <option value="<?= $car->carDrivingSide ?>" selected=""><?= $car->carDrivingSide ?></option>
                                        <option value="right">Right Hand Side</option>
                                        <option value="left">Left Hand Side</option>
                                    </select>
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('cardrivingside') ?></small></label>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class=" ">Manufectur Year<span class="text-danger">*</span></label>
                                    <input type="number" name="carmenufectureyear" id="menufectureyear" class="form-control form-control-sm" placeholder="Menufecturer Year" value="<?= $car->carMenufectureYear ?>">
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('carmenufectureyear') ?></small></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class=" ">Manufecturer <span class="text-danger">*</span></label>
                                    <select name="carmenufecturer" id="" class="form-control form-control-sm">
                                         <?php $data['carMenufecturerData'] = $this->admin_datawork->get_id('menufecturer', ['menufecturerId' => $car->carMenufecturer]); ?>
                                        <option value="<?php echo $data['carMenufecturerData']['menufecturerId']; ?>" selected><?php echo $data['carMenufecturerData']['menufecturerName']; ?></option>
                                        <option value="">Select Menufecturer</option>
                                         <?php foreach ($menufecturer as $menufecturer): ?>
                                            <option value="<?= $menufecturer->menufecturerId ?>"><?= $menufecturer->menufecturerName; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('carmenufecturer') ?></small></label>
                                </div>
                            </div> 
                        </div>  
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class=" ">Price <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control form-control-sm" id="price" name="carprice" value="<?= $car->carPrice ?>">
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('carprice') ?></small></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group ">
                                    <label for="" class=" ">Milage <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-sm" name="milage" placeholder="Milage" value="<?= $car->carMilage ?>">
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('milage') ?></small></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group ">
                                    <label for="" class=" ">Fuel<span class="text-danger">*</span></label>
                                    <select name="carfuel" id="" class="form-control form-control-sm">
                                        <option value="" disabled selected>Type of Fuel</option>
                                        <?php $data['carFuelData'] = $this->admin_datawork->get_id('fuel', ['fuelId' => $car->carFuel]); ?>
                                        <option value="<?php echo $data['carFuelData']['fuelId']; ?>" selected><?php echo $data['carFuelData']['fuelName']; ?></option>
                                        <?php foreach ($fuel as $fuel): ?>
                                            <option value="<?= $fuel->fuelId ?>"><?= $fuel->fuelName; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('carfuel') ?></small></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class=" ">Stock No. <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-sm" name="carstock" placeholder="Car Name" value="<?= $car->carStock ?>">
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('carstock') ?></small></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 col-sm-12">
                                <div class="form-group ">
                                    <label for="" class=" ">Engine Capicity<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control form-control-sm" name="enginecapicity" id="capivity" value="<?= $car->carEngineCapicity ?>">
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('enginecapicity') ?></small></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 col-sm-12">
                                <div class="form-group ">
                                    <label for="" class=" ">Finace Available<span class="text-danger">*</span></label>
                                    <select name="carfinance" id="" class="form-control form-control-sm">
                                        <option value="<?= $car->carFinance ?>" selected><?= $car->carFinance ?></option>
                                        <option value="yes" class="text-capitalize">yes</option>
                                        <option value="no" class="text-capitalize">no</option>
                                    </select>
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('carfinance') ?></small></label>
                                </div>
                            </div>  
                        </div>
                         <div class="row">
                            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                                <div class="form-group ">
                                    <label for="" class=" ">Description <span class="text-danger">*</span></label>
                                    <textarea type="text" class="form-control form-control-sm" name="cardescription" placeholder="Description"><?= $car->carDescription ?></textarea>
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('cardescription') ?></small></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                         <div class="col-lg-12 col-md-12 col-12 col-sm-12 mt-4">
                            <div class="form-group ">
                             <button type="submit" class="btn-primary btn float-right"><i class="fa fa-check"></i> Submit</button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </form>
</div>



<script type="text/javascript">
    (function($, W, D) {
        var JQUERY4U = {};
        JQUERY4U.UTIL = {
            setupFormValidation: function() {
                    //form validation rules
                    $("#myForm").validate({
                        rules: {
                            fname: "required",
                            lname: "required",
                            contact: {
                                required: true,
                                minlength: 10,
                                maxlength: 10,
                                number: true
                            },
                            email: {
                                required: true,
                                email: true
                            },
                            aadhar: {
                                required:true,
                                minlength: 12,
                                maxlength: 12,
                                number:true
                            },
                            pan: "required",
                            address: "required"
                        },
                        messages : {},
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
        var number = document.getElementById('menufectureyear');

// Listen for input event on numInput.
number.onkeydown = function(e) {
    if(!((e.keyCode > 95 && e.keyCode < 106)
      || (e.keyCode > 47 && e.keyCode < 58) 
      || e.keyCode == 8)) {
        return false;
    }
}
    </script>

    <script>
        var price = document.getElementById('price');

// Listen for input event on numInput.
price.onkeydown = function(e) {
    if(!((e.keyCode > 95 && e.keyCode < 106)
      || (e.keyCode > 47 && e.keyCode < 58) 
      || e.keyCode == 8)) {
        return false;
    }
}
    </script>

    <script>
        var capicity = document.getElementById('capicity');

// Listen for input event on numInput.
capicity.onkeydown = function(e) {
    if(!((e.keyCode > 95 && e.keyCode < 106)
      || (e.keyCode > 47 && e.keyCode < 58) 
      || e.keyCode == 8)) {
        return false;
    }
}
    </script>
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
</main>
<?php endforeach; ?>