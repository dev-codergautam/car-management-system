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
    <div class="col-lg-3 col-12"></div>
    <div class="col-lg-6 col-12 mt-5">
     <form method="post" action="<?= base_url('home/uploadSellUser') ?>" enctype="multipart/form-data">
        <?= $this->session->flashdata('success'); ?>
        <div class="card">
            <div class="card-header">Sell a Veichle</div>
            <div class="card-body">
                    <h5>Personal information</h5>
                    <div class="form-froup">
                        <label for="">Your Name</label>
                        <input id="Name" type="text" name="name" class="validate[required] form-control form-control-sm validate[required]form-control form-control-sm-sm" value="<?= set_value('name'); ?>">
                        <?= form_error('name'); ?>
                    </div>
                    <div class="form-froup">
                        <label for="">Your Email</label>
                        <input id="Email" type="email" name="email" class="validate[required] form-control form-control-sm ]form-control form-control-sm-sm"  value="<?= set_value('email'); ?>">
                         <?= form_error('email'); ?>
                    </div>
                    <div class="form-froup">
                        <label for="">Contact</label>
                        <input id="Contact" type="number" name="contact" class="validate[required] form-control form-control-sm form-control form-control-sm-sm"  value="<?= set_value('contact'); ?>">
                         <?= form_error('contact'); ?>
                    </div>
                    <div class="form-froup">
                        <label for="">Your Location</label>
                        <select name="city" id="Location" class="form-control form-control-sm validate[required]">
                            <option value="">Select Your Nearest Town / City</option>
                            <?php foreach($city as $city): ?>
                            <option value="<?= $city->city_id ?>"><?= $city->city_name; ?></option>
                        <?php endforeach; ?>
                        </select>
                         <?= form_error('city'); ?>
                    </div>
                    <div class="form-group col-lg-6 offset-lg-6 mt-3">
                        <input type="submit" class="btn btn-sm btn-danger btn-block float-right" value="Submit">
                    </div>
            </div>
        </div>
    </form>

</div>
 <div class="col-lg-3 col-12"></div>
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