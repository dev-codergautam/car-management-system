<mian class="card p-3">
    <div class="col-md-12 mt-3">
        <h4>Active Car</h4>
        <?= $this->session->flashdata('success') ?>
        <hr>
    </div>
    <?php if($this->admin_datawork->count_data('car',['carStatus'=>'1']) != "0"): ?>
        <div class="col-lg-12 mt-3">
            <table id="pass" class="table table-hover table-sm table-bordered dataTable no-footer" cellspacing="0" role="grid" aria-describedby="enquiry_info">
                <thead>
                    <tr role="row">
                        <th width="25%" class="sorting">
                            <div class="">Name</div>
                        </th>
                        <th width="15%" class="sorting">
                            <div class="">Brand</div>
                        </th>
                        <th width="20%" class="sorting">
                            <div class="">Model</div>
                        </th>
                        <th width="10%" class="sorting">
                            <div class="">Milage</div>
                        </th>
                        <th width="10%" class="sorting">
                            <div class="">Fuel</div>
                        </th>
                        <th width="20%" class="sorting">
                            <div class="">Action</div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($car as $car): ?>
                        <tr class="even" role="row">
                            <td class="align-middle">
                                <?= $car->carName ?>
                            </td>
                            <td class="align-middle">
                            <?php $data['carBrandData'] = $this->admin_datawork->get_id('brand', ['brandId' => $car->carBrand]); ?>
                            <?php echo $data['carBrandData']['brandName']; ?>
                            </td>
                            <td class="align-middle">
                            <?php $data['carModelData'] = $this->admin_datawork->get_id('model', ['modelId' => $car->carModel]); ?>
                           <?php echo $data['carModelData']['modelName']; ?>
                            </td>
                            <td class="align-middle">
                                <?= $car->carMilage ?>
                            </td>
                            <td class="align-middle">
                            <?php $data['carFuelData'] = $this->admin_datawork->get_id('fuel', ['fuelId' => $car->carFuel]); ?>
                            <?php echo $data['carFuelData']['fuelName']; ?>
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('admin/viewCar/'.$car->carId) ?>" class="btn btn-sm btn-outline-info btn-circle btn-circle" title="View Details"><i class="fa fa-eye"></i></a>

                                <a href="<?= base_url('admin/editCar/'.$car->carId) ?>" class="btn btn-sm btn-outline-success btn-circle btn-circle" title="Edit Details"><i class="fa fa-pencil"></i></a>

                                <a href="<?= base_url('admin/uploadCarImage/'.$car->carId) ?>" class="btn btn-sm btn-outline-success btn-circle btn-circle" title="Upload Images"><i class="fa fa-picture-o"></i></a>

                                <button class="btn btn-sm btn-outline-danger btn-circle btn-circle" onclick="CarDelete(<?= $car->carId; ?>)"><i class="fa fa-trash"></i></button>
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


    function CarDelete(id) {
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
                url: "<?= base_url('admin/dealeteCar/')?>" + id,
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
