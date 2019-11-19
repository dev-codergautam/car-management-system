<mian class="card p-3">
    <div class="col-md-12 mt-3">
        <h4>Deactive Car</h4>
        <?= $this->session->flashdata('success') ?>
        <hr>
    </div>
    <?php if($this->admin_datawork->count_data('car',['carStatus'=>'0']) != "0"): ?>
        <div class="col-lg-12 mt-3">
            <table id="pass" class="table table-hover table-sm table-bordered dataTable no-footer" cellspacing="0" role="grid" aria-describedby="enquiry_info">
                <thead>
                    <tr role="row">
                        <th width="5%" class="sorting_desc">#</th>
                        <th width="15%" class="sorting">
                            <div class="">Name</div>
                        </th>
                        <th width="25%" class="sorting">
                            <div class="">Model</div>
                        </th>
                        <th width="25%" class="sorting">
                            <div class="">Milage</div>
                        </th>
                        <th width="15%" class="sorting">
                            <div class="">Fuel</div>
                        </th>
                        <th width="15%" class="sorting">
                            <div class="">Action</div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($car as $car): ?>
                        <tr class="even" role="row">
                            <td class="align-middle sorting_1"><?= $car->carId ?></td>
                            <td class="align-middle">
                                <?= $car->carName ?>
                            </td>
                            <td class="align-middle">
                                <?= $car->carModel ?>
                            </td>
                            <td class="align-middle">
                                <?= $car->carMilage ?>
                            </td>
                            <td class="align-middle">
                                <?= $car->carFuel ?>
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('admin/viewCar/'.$car->carId) ?>" class="btn btn-sm btn-outline-info btn-circle btn-circle" title="View Details"><i class="fa fa-eye"></i></a>

                                <a href="<?= base_url('admin/editCar/'.$car->carId) ?>" class="btn btn-sm btn-outline-success btn-circle btn-circle" title="Edit Details"><i class="fa fa-pencil"></i></a>

                                <button class="btn btn-sm btn-outline-danger btn-circle btn-circle" onclick="deleteCar(<?= $car->carId; ?>)"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php else: ?>
            <div class="col-12">
                <div class="bs-component">
                  <div class="jumbotron">
                    <h1>Theare are no any active Car</h1>
                </div>
            </div>
        </div>
    <?php endif; ?>
</mian>

<script type="text/javascript">
    $(document).ready(function() {
        $('#pass').DataTable({
            "pageLength": 10
        });
    });


    function deleteCar(id) {
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
                url: "<?= base_url('admin/carDelete/')?>" + id,
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
