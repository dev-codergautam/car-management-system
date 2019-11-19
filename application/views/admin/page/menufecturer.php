<main class="card p-3">
    <div class="col-lg-12 mt-3">
        <h4>Manage menufecturer</h4>
        <?= $this->session->flashdata('success'); ?>
        <hr>
    </div>
    <?php date_default_timezone_set('Asia/Calcutta'); ?>
    <?php $atime = date("h:i:s A"); ?>
    <div class="col-lg-12">
        <?php echo $this->session->flashdata('success'); ?>
        <form name="myForm" class="form-horizontal" id="myForm" action="<?= base_url('admin/addNewmenufecturer'); ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-4">
                    <label for="name">menufecturer</label>
                    <input type="text" class="form-control" name="menufecturername" autocomplete="off">
                </div> 
                <!-- <div class="form-group col-4">
                    <label for="name">Profile Website Link</label>
                    <input type="text" class="form-control" name="menufecturerwebsite" autocomplete="off">
                </div>
 -->
                <div class="form-group text-right col-2">
                    <div class="mt-4"></div>
                    <input type="submit" class="btn btn-info btn-block" value="Create Now">
                </div>
            </div>
        </form>
    </div>
    <?php if(!empty($menufecturer)): ?>
    <div class="col-lg-12 mt-4">
        <div style="overflow-x:scroll">
            <table id="pass" class="table table-hover table-sm table-bordered" cellspacing="0" width="100%">
                <thead class="text-white bg-info">
                    <tr>
                        <th width="65%">menufecturer</th>
                        <th width="35%">OPTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($menufecturer as $menufecturer): ?>
                    <?php $menufecturerId = $menufecturer->menufecturerId ?>
                    <tr>
                        <td>
                            <?= $menufecturer->menufecturerName; ?>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-sm mx-1 btn-warning" onclick="editmenufecturer(<?= $menufecturer->menufecturerId; ?>)"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-sm mx-1 btn-danger" onclick="deletemenufecturer(<?= $menufecturer->menufecturerId; ?>)"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php else: ?>
    <div class="col-lg-12">
        <div class="jumbotron text-center">
            <h4>There isn't any menufecturer available</h4>
        </div>
    </div>
    <?php endif; ?>
</main>

<script type="text/javascript">
    $(document).ready(function() {
        $('#pass').DataTable({
            "pageLength": 10
        });
    });

</script>

<script type="text/javascript">
    (function($, W, D) {
        var JQUERY4U = {};
        JQUERY4U.UTIL = {
            setupFormValidation: function() {
                //form validation rules
                $("#myForm").validate({
                    rules: {
                        menufecturername: "required",
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


<script type="text/javascript">
    $(document).ready(function() {
        $('#whour').DataTable();
    });
    var save_method; //for save method string
    var table;

    function editmenufecturer(id) {
        save_method = 'update';
        $('#myForm2')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url: "<?= base_url('admin/menufecturerEdit/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('[name="menufecturerId"]').val(data.menufecturerId);
                $('[name="menufecturerName"]').val(data.menufecturerName);
                $('[name="menufecturerWebsite"]').val(data.menufecturerWebsite);

                $('#updateData').modal('show');
                $('.modal-title').text('Edit Data');

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function saveEditedmenufecturer() {
        var url;
        if (save_method == 'add') {
            url = "<?php echo site_url('')?>";
        } else {
            url = "<?= base_url('admin/updatemenufecturer')?>";
        }
        $.ajax({
            url: url,
            type: "POST",
            data: $('#myForm2').serialize(),
            dataType: "JSON",
            success: function(data) {
                //if success close modal and reload ajax table
                $('#updateData').modal('hide');
                location.reload(); // for reload a page
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
            }
        });
    }

    function deletemenufecturer(id) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function(isConfirm) {
            if (!isConfirm) return;
            $.ajax({
                url: "<?= base_url('admin/menufecturerDelete/')?>" + id,
                type: "POST",

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


<!-- Bootstrap modal -->
<div class="modal fade" id="updateData" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Update menufecturer</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body form">
                <form action="#" id="myForm2" class="form-horizontal">
                    <input type="hidden" value="" name="menufecturerId" />
                    <div class="form-body">
                        <div class="form-group row">
                            <label class="control-label col-md-3">menufecturer</label>
                            <div class="col-md-9">
                                <input name="menufecturerName" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Profile Website</label>
                            <div class="col-md-9">
                                <input name="menufecturerWebsite" class="form-control" type="text" required>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="saveEditedmenufecturer()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- End Bootstrap modal -->

<script type="text/javascript">
    (function($, W, D) {
        var JQUERY4U = {};
        JQUERY4U.UTIL = {
            setupFormValidation: function() {
                //form validation rules
                $("#myForm2").validate({
                    rules: {
                        menufecturername: "required",
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
