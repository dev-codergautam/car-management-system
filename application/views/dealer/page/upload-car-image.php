<main class="card p-3">
    <?php foreach ($car as $cars){} ?>
    <div class="col-lg-12 mt-3">
        <h4>Update <span class="text-danger"> <?php echo $cars->carName; ?></span> category Image</h4>
        <hr>
    </div>
    <div class="col-lg-12 mt-4">
        <?php echo $this->session->flashdata('error'); ?>
        <?php echo $this->session->flashdata('success'); ?>
        <div class="row">
            <div class="col-lg-4 col-6">
                <form name="myForm" class="form-horizontal" id="myForm" action="<?= base_url('dealer/ajax_upload_catimage/'. $cars->carId); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <img src="<?= base_url(); ?>assets/image/car-image/car.png" alt="Your profile picture" id="blah" class="img-fluid w-100">
                        <div class="card-footer">
                            <input type="file" class="w-100" name="photo" required onchange="readURL(this);">
                        </div>
                        <div class="tile-footer mt-4">
                            <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Upload Photo</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-8 col-3">
                <div class="row">
                    <?php foreach($carimg as $carimg): ?>
                    <div class="col-lg-3">
                        <img src="<?= base_url(); ?>assets/image/car-image/<?= $carimg->carimageImage ?>" alt="" class="img-fluid">
                        <button class="btn btn-danger btn-block btn-sm" onclick="deleteData(<?php echo $carimg->carimageId; ?>)"><i class="fa fa-trash"></i></button>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</main>

<script type="text/javascript">
    (function($, W, D) {
        var JQUERY4U = {};
        JQUERY4U.UTIL = {
            setupFormValidation: function() {
                //form validation rules
                $("#myForm").validate({
                    rules: {
                        catimage: "required",
                    },
                    messages: {},
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
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#blah').attr('src', e.target.result).class('img-fluid').height(auto);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>

<script>
    function deleteData(id) {
        swal({
            title: "Are you sure?",
            text: "want to delete this details!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function(isConfirm) {
            if (!isConfirm) return;
            $.ajax({
                url: "<?= base_url('dealer/ajaxDeleteImage/')?>" + id,
                type: "POST",
                dataType: "JSON",
                success: function() {
                    location.reload();
                    swal("Done!", "It was succesfully deleted!", "success");
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    swal("Error deleting!", "Please try again", "error");
                }
            });
        });
    }
</script>