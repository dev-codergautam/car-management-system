<div class="col-lg-9 mb-3">
    <div class="card p-3">
        <div class="row">
            <div class="col-lg-12">
               <h4><a href="<?= base_url(); ?>user/profile" class="fa fa-arrow-circle-left fa-lg nav-link"></a> Update profile
               </h4>
                <div class="hr-brand mb-4"></div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-8">

                <?php foreach($profile as $row){} ?>
                <?= form_open('user/update_profile/' . $row->user_id ); ?>
                    <div class="row">
                        <div class="form-group col-lg-12 col-12">
                            <label for="text">Name</label>
                            <input class="form-control form-control-sm" type="text" name="name" placeholder="Enter your full name..." value="<?= $row->u_name;?>">
                            <?= form_error('name');?>
                        </div>
                        <?php if(empty($row->u_email)) { ?>
                        <div class="form-group col-lg-12 col-12">
                            <label for="text">Email Id</label>
                            <input class="form-control form-control-sm" type="email" placeholder="Enter your email..." value="<?= set_value('email'); ?>" name="email">
                         <?= form_error('email');?>
                        </div>
                        <?php }else{?> 
                        <div class="form-group col-lg-12 col-12">
                            <label for="text">Email Id</label>
                            <input class="form-control form-control-sm" type="email" placeholder="Enter your email..." value="<?= $row->u_email;?>" name="email" readonly>
                        </div>
                        <?php } ?>
                        
                        <div class="form-group col-lg-6 col-12">
                            <label for="text">Contact</label>
                            <input class="form-control form-control-sm" type="number" name="contact" placeholder="Enter your contact number..." value="<?= $row->u_contact;?>" readonly>
                            <?= form_error('contact');?>
                        </div>
                        
                        <div class="form-group col-lg-6 col-12">
                            <label for="text">Whatsapp</label>
                            <input class="form-control form-control-sm" type="number" name="whatsapp" placeholder="Enter your Whatsapp number" value="<?= $row->u_whatsapp;?>">
                            <?= form_error('whatsapp');?>
                        </div>
                        <div class="form-group col-lg-12 col-12">
                            <label for="">Select your Gender</label>
                            <select name="gender" id="" class="form-control form-control-sm">
                            <option selected value="<?= $row->u_gender; ?>"><?= $row->u_gender; ?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                        </div>
                        <div class="form-group col-lg-12 col-12">
                            <label for="text">Address</label>
                            <input class="form-control form-control-sm" type="text" name="address" placeholder="Enter your full  address here..." value="<?= $row->u_address;?>">
                            <?= form_error('address');?>
                        </div>
                        <div class="form-group col-lg-6 col-12">
                            <label for="text">District</label>
                            <input class="form-control form-control-sm" type="text" name="dist" value="Purnea">
                            <?= form_error('dist');?>
                        </div>
                        <div class="form-group col-lg-6 col-12">
                            <label for="text">State</label>
                            <input class="form-control form-control-sm" type="text" name="state" value="Bihar">
                            <?= form_error('state');?>
                        </div>
                        <!--
                        <div class="form-group col-lg-6 col-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text pl-3 pr-3" id="basic-addon1"><i class="fa fa-facebook text-brand"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" placeholder="Facebook URL" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text pl-3 pr-3" id="basic-addon1"><i class="fa fa-twitter text-brand"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" placeholder="Facebook URL" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text pl-3 pr-3" id="basic-addon1"><i class="fa fa-instagram text-brand"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" placeholder="Facebook URL" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text pl-3 pr-3" id="basic-addon1"><i class="fa fa-youtube text-brand"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" placeholder="Facebook URL" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        -->
                        <div class="form-group col-lg-12 text-center">
                            <input type="submit" class="btn btn-outline-dark btn-block" value="Update Profile">
                        </div>

                        <?= form_close(); ?>
                    </div>
                    <div class="col-lg-2"></div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-lg-1"></div>
</div>