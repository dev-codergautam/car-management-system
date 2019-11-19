<div class="col-lg-9 mb-3">
    <?php foreach($oldimg as $rows){} ?>
    <?php
        if($rows->pic == NULL){
            $photo = base_url() . "assets/image/default.png";
        }
        else {
            $photo = base_url() . "assets/clients/" . $rows->pic;
        }
    ?>
        <div class="card p-3">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <img src="<?= $photo; ?>" alt="Your profile picture" id="blah" class="img-fluid w-100">
                        <?= form_open_multipart('user/update_businessimage/'. $rows->id) ?>
                            <div class="card-footer p-0">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="newimage" onchange="readURL1(this);">
                                    <label class="custom-file-label" for="customFile">Choose New Business Image</label>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" class="btn btn-outline-dark btn-block" value="Update Image">
                            </div>
                        <?= form_close(); ?>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
            <script>
                function readURL1(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('#blah').attr('src', e.target.result).class('img-fluid').height(auto);
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                }

            </script>
        </div>
</div>
</div>
<div class="col-lg-1"></div>
</div>