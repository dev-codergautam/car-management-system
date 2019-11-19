<div class="col-lg-9 mb-3">
    <div class="card box-shadow p-3">
        <div class="row">
            <div class="col-lg-12">
                <h6><a href="<?= base_url(); ?>user/index" class="fa fa-arrow-circle-left fa-lg nav-link"></a>Upload images</h6>
                <div class="hr-brand mb-4"></div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-12">
                        <legend>Step 2 of 2</legend>
                        <div class="hrbrand"></div>
                    </div>
                    <input type="text" name="last_biz_id" value="<?= $newid; ?>" hidden="hidden">
                    <?= form_open_multipart('user/servicesStep2/' . $newid); ?>
                        <div class="col-lg-12">
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="files[0]">
                                <label class="custom-file-label" for="customFile">Choose file 1</label>
                            </div>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="files[1]">
                                <label class="custom-file-label" for="customFile">Choose file 2</label>
                            </div>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="files[2]">
                                <label class="custom-file-label" for="customFile">Choose file 3</label>
                            </div>
                        </div>
                        

                        <div class="form-group col-md-12 mt-3 text-center">
                            <input type="submit" class="btn btn-outline-dark" value="Save & Exit">
                        </div>
                        <?= form_close(); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
</div>
<div class="col-lg-1"></div>
</div>