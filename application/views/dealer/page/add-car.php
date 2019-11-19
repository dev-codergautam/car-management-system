<main class="card p-2">
    <div class="col-md-12 mt-3">
        <h4>Step 1 of 2</h4>
        <?= $this->session->flashdata('success') ?>
        <hr>
    </div>
    <div class="col-lg-12 mt-2">
        <script src="<?= base_url(); ?>assets/js/nicEdit-latest.js" type="text/javascript"></script>
        <form name="myForm" class="form-horizontal" id="myForm" action="<?= base_url('dealer/addNewCar'); ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="tile-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class=" ">Car Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-sm" name="carname" placeholder="Car Name" value="<?= set_value('carname') ?>">
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('carname') ?></small></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class=" ">Car Brand<span class="text-danger">*</span></label>
                                    <select name="carbrand" id="brand" class="form-control form-control-sm">
                                        <option value="">Select Car Brand</option>
                                        <?php foreach ($brand as $brand): ?>
                                            <option value="<?= $brand->brandId ?>"><?= $brand->brandName ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('brand') ?></small></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class=" ">Model <span class="text-danger">*</span></label>
                                    <select name="carmodel" id="model" class="form-control form-control-sm">
                                        <option value="" selected disabled1>Car Modal</option>
                                        <?php foreach($model as $model): ?>
                                        <option id="<?= $model->modelBrand ?>" value="<?= $model->modelId ?>"><?= $model->modelName ?></option>
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
                                        <option value="">Select Transmission</option>
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
                                        <option value="">Select Traction</option>
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
                                        <option value="">Select Driving Side</option>
                                        <option value="right">Right Hand Side</option>
                                        <option value="left">Left Hand Side</option>
                                    </select>
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('cardrivingside') ?></small></label>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class=" ">Manufecturing Year<span class="text-danger">*</span></label>
                                    <select name="carmenufectureyear" id="" class="form-control form-control-sm">
                                        <?php foreach($year as $year): ?>
                                            <option value="<?= $year->yearName; ?>"><?= $year->yearName; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('carmenufectureyear') ?></small></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class=" ">Km <span class="text-danger">*</span></label>
                                    <input type="text" name="carkm" class="form-control form-control-sm" placeholder="">
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('carkm') ?></small></label>
                                </div>
                            </div> 
                        </div>  
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class=" ">Price <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control form-control-sm" placeholder="Car Price" id="price" name="carprice" value="<?= set_value('carprice') ?>">
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('carprice') ?></small></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group ">
                                    <label for="" class=" ">Milage <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-sm" name="milage" placeholder="Milage" value="<?= set_value('milage') ?>">
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('milage') ?></small></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group ">
                                    <label for="" class=" ">Fuel<span class="text-danger">*</span></label>
                                    <select name="carfuel" id="" class="form-control form-control-sm">
                                        <option value="" disabled selected>Type of Fuel</option>
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
                                    <input type="text" class="form-control form-control-sm" name="carstock" placeholder="Car Name" value="<?= set_value('carstock') ?>">
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('carstock') ?></small></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group ">
                                    <label for="" class=" ">Engine Capicity<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control form-control-sm" name="enginecapicity" placeholder="Engine Capicity" id="capivity" value="<?= set_value('enginecapicity') ?>">
                                    <label for="" class="m-0 p-0"><small class="text-danger"><?= form_error('enginecapicity') ?></small></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="form-group ">
                                    <label for="" class=" ">Finace Available<span class="text-danger">*</span></label>
                                    <select name="carfinance" id="" class="form-control form-control-sm">
                                        <option value="" disabled selected>Finance available</option>
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
                                    <textarea type="text" class="form-control form-control-sm" name="cardescription" placeholder="Car Description with Features ..."><?= set_value('cardescription') ?></textarea>
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
