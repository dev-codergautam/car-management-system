<div class="col-lg-9 mb-3">
    <div class="card box-shadow p-3">
        <div class="row">
            <div class="col-lg-12">
                <h5><a href="<?= base_url(); ?>user/index" class="fa fa-arrow-circle-left fa-lg nav-link"></a>Add Your Business</h5>
                <div class="hr-brand mb-4"></div>
            </div>
            <input type="text" name="last_biz_id" value="<?= $newid; ?>" hidden="hidden">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <?php
                foreach($subcate as $subcate){}
                    $subcate = $subcate->category; 
                    $data['c'] = $this->datawork->get_id('category', ['title_slug' => $subcate]);
                    $category_id = $data['c']['id'];
                ?>
                    <?php
                    foreach($allcate as $allcate){
                        if($allcate->cat_id == $category_id){
                            $subcat_id = 1;
                            break;
                        }
                        else{
                            $subcat_id = 0;
                        }
                    }
                ?>

                        <div class="form-group col-md-12">
                            <?= form_open('user/insert_step2/' . $newid);?>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <legend>Step 2 of 3</legend>
                                <div class="hrbrand"></div>
                            </div>

                            <?php if($subcat_id == 1){ ?>
                            <div class="form-group col-md-12">
                                <select name="category" class="form-control form-control-sm">
                                <option value="" selected disabled>Sub Category</option>
                                <?php foreach($displaycate as $subcat):?>
                                <option value="<?= $subcat->title_slug;?>"><?= $subcat->title;?> </option>
                                <?php endforeach;?>
                            </select>
                            </div>
                            <?php } else { ?>
                            <input type="text" value="" name="category" hidden="hidden">
                            <?php } ?>
                            <div class="form-group col-md-6">
                                <label for="Contact">Contact</label>
                                <input type="text" name="contact" class="form-control form-control-sm" value="<?= set_value('contact');?>" placeholder="Contact Number">
                                <?= form_error('contact');?>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="Contact">Whatsapp</label>
                                <input type="text" name="contact1" class="form-control form-control-sm" value="<?= set_value('contact1');?>" placeholder="Whatsapp Number (Optional)">
                                <?= form_error('contact1');?>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="Contact">Website</label>
                                <input type="text" placeholder="Website URL (optional)" name="website" class="form-control form-control-sm" value="<?= set_value('website');?>">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="Contact">Email Id</label>
                                <input type="email" name="email" class="form-control form-control-sm" value="<?= set_value('email');?>" placeholder="Your Business Email ID">
                                <?= form_error('email');?>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="Contact">Address</label>
                                <input type="text" name="address" class="form-control form-control-sm" value="<?= set_value('address');?>" placeholder="Business Address">
                                <?= form_error('address');?>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="State">State</label>
                                <select name="state" class="form-control form-control-sm" id="select1">
                                    <option value="" selected disabled>Select State</option>
                                    <?php foreach($states as $states): ?>
                                    <option value="<?= $states->parent_id; ?>"><?= $states->state_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('state');?>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="City">City</label>
                                <select name="city" class="form-control form-control-sm" id="select2">
                                   <option value="" selected disabled>Select City</option>
                                    <?php foreach($cities as $cities): ?>
                                    <option id="<?= $cities->state_id; ?>" value="<?= $cities->city_name; ?>"><?= $cities->city_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('city');?>
                            </div>

                            <div class="form-group col-md-12 text-center">
                                <input type="submit" class="btn btn-outline-dark" value="Save & Continue">
                            </div>
                        </div>
            </div>
        </div>
        <?= form_close();?>
            <div class="col-lg-2"></div>
    </div>
</div>
</div>
<div class="col-lg-1"></div>
</div>
<!-- Script -->
<script type="text/javascript">
    $("#select1").change(function() {
        if ($(this).data('options') === undefined) {
            $(this).data('options', $('#select2 option').clone());
        }
        var id = $(this).val();
        var options = $(this).data('options').filter('[id=' + id + ']');
        $('#select2').html(options);
    });

</script>
<!-- Script -->
