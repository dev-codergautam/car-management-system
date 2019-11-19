<mian class="card p-3">
    <div class="col-md-12 mt-3">
        <h4>Requested Car</h4>
        <?= $this->session->flashdata('success') ?>
        <hr>
    </div>
    <?php if($this->admin_datawork->count_data('car',['carApprove'=>'0']) != "0"): ?>
        <div class="col-lg-12 mt-3">
            <table id="pass" class="table table-hover table-sm table-bordered dataTable no-footer" cellspacing="0" role="grid" aria-describedby="enquiry_info">
                <thead>
                    <tr role="row">
                        <th width="15%" class="sorting">
                            <div class="">Name</div>
                        </th>
                        <th width="25%" class="sorting">
                            <div class="">Model</div>
                        </th>
                        <th width="25%" class="sorting">
                            <div class="">Dealer</div>
                        </th>
                        <th width="15%" class="sorting">
                            <div class="">Contact</div>
                        </th>
                        <th width="15%" class="sorting">
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
                                <?= $car->carModel ?>
                            </td>
                            <td class="align-middle">
                                <?php $data['carDealerData'] = $this->admin_datawork->get_id('dealer', ['dealerId' => $car->carDealer]); ?>
                                <?php echo $data['carDealerData']['dealerFname']; ?> <?php echo $data['carDealerData']['dealerLname']; ?>
                            </td>
                            <td class="align-middle">
                                <?php echo $data['carDealerData']['dealerContact']; ?>
                            </td>
                            <td class="text-center">

                                <a href="#" class="btn btn-sm btn-outline-success btn-circle btn-circle" title="Approve Car" onclick="carApprove(<?= $car->carId; ?>)"><i class="fa fa-check-square-o"></i></a>

                                <a href="#" class="btn btn-sm btn-outline-danger btn-circle btn-circle" title="Reject Car" onclick="carReject(<?= $car->carId; ?>)"><i class="fa fa-times"></i></a>

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
                    <h1>Theare are no any Requested Car</h1>
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


    function carApprove(id) {
        swal({
            title: "Are you sure?",
            text: "Do you Really want to approve this car!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, approve it!",
            closeOnConfirm: false
        }, function(isConfirm) {
            if (!isConfirm) return;
            $.ajax({
                url: "<?= base_url('admin/approveCar/')?>" + id,
                type: "POST",

                success: function() {
                    location.reload();
                    swal("Done!", "It was succesfully Approved!", "success");
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    swal("Error approving!", "Please try again", "error");
                }
            });
        });
    }


    function carReject(id) {
        swal({
            title: "Are you sure?",
            text: "Do you Really want to rejected this car!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, rejected it!",
            closeOnConfirm: false
        }, function(isConfirm) {
            if (!isConfirm) return;
            $.ajax({
                url: "<?= base_url('admin/rejectCar/')?>" + id,
                type: "POST",

                success: function() {
                    location.reload();
                    swal("Done!", "It was succesfully Rejected!", "success");
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    swal("Error Rejection!", "Please try again", "error");
                }
            });
        });
    }

</script>
