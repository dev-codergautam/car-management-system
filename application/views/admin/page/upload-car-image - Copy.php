<main class="card p-2">
    <div class="col-md-12 mt-3">
        <h4>Step 2 of 2</h4>
        <?= $this->session->flashdata('success') ?>
        <hr>
    </div>
    <!--
    <div class="col-lg-12 mt-2">
        <form name="myForm" class="form-horizontal" id="myForm" action="<?= base_url('admin/uploadCarImage'); ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                   <h4 class="h5"><i class="fa fa-info-circle"></i> Upload Car Images</h4>
                   <div class="borderbottom mb-4 ml-4"></div>
                   <div class="row">
                    <div class="form-group  col-4 offset-lg-3 text-right">
                        <input type="file" class="form-control form-control-sm" multiple id="gallery-photo-add" name="image_name[]">
                    </div>
                    <div class="col-lg-3"> 
                        <button type="submit" class="btn-primary btn float-left" id="upload"><i class="fa fa-check"></i> Upload</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="tile-body">
                <div class="row">
                 <div class="col-lg-12">
                    <p id="msg"></p>
                    <div class="gallery" style="float: left;"></div>
                </div>
            </div>
        </div>
    </div>

</div>
</form>
</div>
<script>
    $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img style="border: 2px solid black; width:150px; margin:5px; height:150px">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});
</script>
<script type="text/javascript">
    $(document).ready(function (e) {
        $('#upload').on('click', function () {
            var file_data = $('#gallery-photo-add').prop('files')[0];
            form_data.append('file', file_data);
            $.ajax({
                        url:"<?= base_url(); ?>admin/uploadCarImage", // point to server-side controller m
                        method:"POST",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: new FormData(this);,
                        success: function (response) {
                            $('#msg').html(response); // display success response from the server
                        },
                        error: function (response) {
                            $('#msg').html(response); // display error response from the server
                        }
                    });
        });
    });
</script>
-->
<div class="col-lg-12">
    
</div>
</main>
