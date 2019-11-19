<div class="main">
    <div class="main-content">
        <?php foreach($bizz as $bizz){} ?>
        <div class="container-fluid">
            <h3 class="page-title">Update <b> <?= $bizz->business_name; ?></b></h3>

            <div class="panel">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="col-lg-12">
                            <h3>Update Here</h3>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="" class="h5"> Business name</label>
                            <?= form_open('admin/update_name/'. $bizz->id);?>
                                <div class="col-lg-10">
                                    <input type="text" name="business_name" class="form-control form-control-sm" value="<?= $bizz->business_name; ?>">
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" class="btn btn-dark btn-block" value="Update">
                                </div>
                                <?= form_error('business_name');?>
                                    <?= form_close();?>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="" class="h5"> Category</label>
                            <?= form_open('admin/update_cate/'. $bizz->id);?>
                                <div class="col-lg-10">
                                    <select name="category" class="form-control form-control-sm" id="">
                                        <option value="<?= $bizz->category; ?>"><?= $bizz->category; ?></option>
                                        <?php foreach($cat as $main):?>
                                        <option value="<?= $main->title_slug;?>"><?= $main->title;?> </option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" class="btn btn-dark btn-block" value="Update">
                                </div>
                                <?= form_error('business_name');?>
                                    <?= form_close(); ?>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="" class="h5"> Contact</label>
                            <?= form_open('admin/update_contact/'. $bizz->id);?>
                                <div class="col-lg-10">
                                    <input type="text" name="contact" class="form-control form-control-sm" value="<?= $bizz->contact; ?>">
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" class="btn btn-dark btn-block" value="Update">
                                </div>
                                <?= form_error('contact');?>
                                    <?= form_close();?>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="" class="h5"> Contact 2</label>
                            <?= form_open('admin/update_contact1/'. $bizz->id);?>
                                <div class="col-lg-10">
                                    <input type="text" name="contact1" class="form-control form-control-sm" value="<?= $bizz->contact1; ?>">
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" class="btn btn-dark btn-block" value="Update">
                                </div>
                                <?= form_error('contact1');?>
                                    <?= form_close();?>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="" class="h5"> website</label>
                            <?= form_open('admin/update_web/'. $bizz->id);?>
                                <div class="col-lg-10">
                                    <input type="text" name="website" class="form-control form-control-sm" value="<?= $bizz->website; ?>">
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" class="btn btn-dark btn-block" value="Update">
                                </div>
                                <?= form_error('website');?>
                                    <?= form_close();?>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="" class="h5"> Email</label>
                            <?= form_open('admin/update_email/'. $bizz->id);?>
                                <div class="col-lg-10">
                                    <input type="text" name="email" class="form-control form-control-sm" value="<?= $bizz->email; ?>">
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" class="btn btn-dark btn-block" value="Update">
                                </div>
                                <?= form_error('email');?>
                                    <?= form_close();?>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="" class="h5"> Address</label>
                            <?= form_open('admin/update_address/'. $bizz->id);?>
                                <div class="col-lg-10">
                                    <input type="text" name="address" class="form-control form-control-sm" value="<?= $bizz->address; ?>">
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" class="btn btn-dark btn-block" value="Update">
                                </div>
                                <?= form_error('address');?>
                                    <?= form_close();?>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="" class="h5"> City</label>
                            <?= form_open('admin/update_city/'. $bizz->id);?>
                                <div class="col-lg-10">
                                    <input type="text" name="city" class="form-control form-control-sm" value="<?= $bizz->city; ?>">
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" class="btn btn-dark btn-block" value="Update">
                                </div>
                                <?= form_error('city');?>
                                    <?= form_close();?>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="" class="h5"> State</label>
                            <?= form_open('admin/update_state/'. $bizz->id);?>
                                <div class="col-lg-10">
                                    <input type="text" name="state" class="form-control form-control-sm" value="<?= $bizz->state; ?>">
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" class="btn btn-dark btn-block" value="Update">
                                </div>
                                <?= form_error('state');?>
                                    <?= form_close();?>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="" class="h5"> Experience</label>
                            <?= form_open('admin/update_expr/'. $bizz->id);?>
                                <div class="col-lg-10">
                                    <input type="text" name="experience" class="form-control form-control-sm" value="<?= $bizz->experience; ?>">
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" class="btn btn-dark btn-block" value="Update">
                                </div>
                                <?= form_error('experience');?>
                                    <?= form_close();?>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="" class="h5"> Description</label>
                            <?= form_open('admin/update_desc/' . $bizz->id);?>
                                <div class="col-lg-10">
                                    <textarea name="description" id="" rows="3" class="form-control form-control-sm" placeholder="Description about your Business"><?= $bizz->description; ?></textarea>
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" class="btn btn-dark btn-block" value="Update">
                                </div>
                                <?= form_error('description');?>
                                    <?= form_close();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
