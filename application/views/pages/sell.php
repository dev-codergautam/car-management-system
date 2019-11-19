<style>
fieldset { border:none; }
legend { font-size:18px; margin:0px; padding:10px 0px; color:#0fb9b1; font-weight:bold;}
label { display:block; margin:15px 0 5px;}

button, .prev, .next { background-color:#0fb9b1; padding:5px 10px; color:#fff; text-decoration:none;}
button:hover, .prev:hover, .next:hover { background-color:#000; text-decoration:none;}
button { border: none; }
#controls { background: #eee; box-shadow: 0 0 16px #999; height: 30px; position: fixed; padding: 10px; top: 0; left: 0; width: 100%; z-index: 1 }
#controls h1 { color: #666; display: inline-block; margin: 0 0 8px 0 }
#controls input[type=text] { border-color: #999; margin: 0 25px; width: 120px }

#steps { margin: 80px 0 0 0 }
.prev{float:left}
.next{float:right}
.steps{list-style:none;width:100%;overflow:hidden;margin:0;padding:0}
.steps li{color:#b0b1b3;font-size:24px;float:left;padding:10px;transition:all .3s;-moz-transition:all .3s;-webkit-transition:all .3s;-o-transition:all .3s}
.steps li span{font-size:11px;display:block}
.steps li.current{color:#000}
.breadcrumb{height:37px}
.breadcrumb li{background:#eee;font-size:14px}
.breadcrumb li.current:after{border-top:18px solid transparent;border-bottom:18px solid transparent;border-left:6px solid #666;content:' ';position:absolute;top:0;right:-6px}
.breadcrumb li.current{background:#666;color:#eee;position:relative}
.breadcrumb li:last-child:after{border:none}

</style>
<div class="row w-100">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
     <form id="SignupForm" method="post" action="<?= base_url('home/uploadSell') ?>" enctype="multipart/form-data">
        <?= $this->session->flashdata('success'); ?>
        <div class="card">
            <div class="card-body">
               <fieldset>
                    <legend>Veichle information</legend>
                    <div class="form-group">
                        <label for="">Veichle Name</label>
                        <input type="text" class="form-control form-control-sm" name="carname" placeholder="Veichle Name">
                    </div>
                    <div class="form-group">
                        <label for="">Veichle Type</label>
                        <select name="veichletype" id="veichletype" class="form-control form-control-sm validate[required]">
                            <option value="">Select Veichle Type</option>
                            <?php foreach($cartype as $ct): ?>
                            <option value="<?= $ct->cartypeId ?>"><?= $ct->cartypeName ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Manufecturer</label>
                        <select name="manufacturer" id="manufecturer" class="form-control form-control-sm validate[required]">
                            <option value="">Select Manufecturer</option>
                                <?php foreach($brand as $brand): ?>
                            <option value="<?= $brand->brandId ?>"><?= $brand->brandName ?></option>
                        <?php endforeach; ?>
                       
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Model</label>
                        <select name="model" id="model" class="form-control form-control-sm validate[required]">
                            <option value="">Select Veichle Modal</option>
                                <?php foreach($model as $model): ?>
                            <option value="<?= $model->modelId ?>"><?= $model->modelName ?></option>
                        <?php endforeach; ?>
                       
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Manufectured Year</label>
                        <select name="manufectureyear" id="manufectureryear" class="form-control form-control-sm validate[required]">
                            <option value="">Select Manufectured Year</option>
                               <?php foreach($year as $year): ?>
                            <option value="<?= $year->yearName ?>"><?= $year->yearName ?></option>
                        <?php endforeach; ?>
                       
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">transmission</label>
                        <select name="transmission" id="transmission" class="form-control form-control-sm validate[required]">
                            <option value="">Select transmission Year</option>
                               <?php foreach($transmission as $transmission): ?>
                            <option value="<?= $transmission->transmissionId ?>"><?= $transmission->transmissionName ?></option>
                        <?php endforeach; ?>
                       
                        </select>
                        <input type="text" name="userid" value="<?= $this->uri->segment(3); ?>" hidden>
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" class="form-control form-control-sm form-control form-control-sm-sm validate[required]" name="price" placeholder="Enter Car Price">
                    </div>
                    <div class="form-group">
                        <label for="">Engine Capicity</label>
                        <input type="text" class="form-control form-control-sm form-control form-control-sm-sm validate[required]" name="enginecapicity" placeholder="Enter Engine Capicity">
                    </div>

                    <div class="form-group">
                        <label for="">Milage</label>
                        <input type="text" name="milage" placeholder="Milage" class="form-control form-control-sm validate[required]" id="milage">
                    </div>
                    <div class="form-group">
                        <label for="">Type of Fuel</label>
                        <select name="typeoffuel" id="typeoffuel" class="form-control form-control-sm validate[required]">
                            <option value="">Select Type of Fuel</option>
                                 <?php foreach($fuel as $fuel): ?>
                            <option value="<?= $fuel->fuelId ?>"><?= $fuel->fuelName ?></option>
                        <?php endforeach; ?>
                       
                        </select>
                    </div>  
                    <div class="form-group">
                        <label for="">Driving Side</label>
                        <select name="drivingside" id="drivingside" class="form-control form-control-sm validate[required]">
                            <option value="">Select Driving Side</option>
                            <option value="left">Left Hand</option>
                            <option value="right">Right Hand</option>
                        </select>
                    </div>  
                    <div class="form-group">
                        <label for="">Other Details</label>
                        <textarea name="otherdetails" id="otherdetails" cols="30" rows="4" class="form-control form-control-sm validate[required] form-control form-control-sm-sm"></textarea>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Upload Car Images</legend>
                    <div class="form-group">
                        <label for="">Upload Picture</label>
                        <input type="file" name="carimage" class="form-control form-control-sm validate[required] form-control form-control-sm-sm" id="carimage">
                    </div>
                </fieldset>
                <p>
                    <input id="SaveAccount" type="Submit" value="Submit form" />
                </p>

            </div>
        </div>
    </form>

</div>
<div class="col-lg-3"></div>
</div>
<script>
    $( function() {
        var $signupForm = $( '#SignupForm' );

        $signupForm.validationEngine();

        $signupForm.formToWizard({
            submitButton: 'SaveAccount',
                showProgress: true, //default value for showProgress is also true
                nextBtnName: 'Forward >>',
                prevBtnName: '<< Previous',
                showStepNo: false,
                validateBeforeNext: function() {
                    return $signupForm.validationEngine( 'validate' );
                }
            });


        $( '#txt_stepNo' ).change( function() {
            $signupForm.formToWizard( 'GotoStep', $( this ).val() );
        });

        $( '#btn_next' ).click( function() {
            $signupForm.formToWizard( 'NextStep' );
        });

        $( '#btn_prev' ).click( function() {
            $signupForm.formToWizard( 'PreviousStep' );
        });
    });

</script>