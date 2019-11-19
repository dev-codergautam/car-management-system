<mian class="card p-3">
    <div class="col-md-12 mt-3">
        <h4>Deactivated Dealer</h4>
        <?= $this->session->flashdata('success') ?>
        <hr>
    </div>
    <?php if($this->admin_datawork->count_data('dealer',['dealerStatus !='=>'1']) != "0"): ?>
        <div class="col-lg-12 mt-3">
            <table id="pass" class="table table-hover table-sm table-bordered dataTable no-footer" cellspacing="0" role="grid" aria-describedby="enquiry_info">
                <thead>
                    <tr role="row">
                        <th width="25%" class="sorting">
                            <div class="">Name</div>
                        </th>
                        <th width="15%" class="sorting">
                            <div class="">Contact</div>
                        </th>
                        <th width="25%" class="sorting">
                            <div class="">Email</div>
                        </th>
                        <th width="20%" class="sorting">
                            <div class="">Action</div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($dealer as $dealer): ?>
                        <tr class="even" role="row">
                            <td class="align-middle">
                                <?= $dealer->dealerFname ?> <?= $dealer->dealerLname ?>
                            </td>
                            <td class="align-middle">
                                <?= $dealer->dealerContact ?>
                            </td>
                            <td class="align-middle">
                                <?= $dealer->dealerEmail ?>
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('admin/viewdealer/'.$dealer->dealerId) ?>" class="btn btn-sm btn-outline-info btn-circle btn-circle" title="View Details"><i class="fa fa-eye"></i></a>

                                <a href="<?= base_url('admin/editdealer/'.$dealer->dealerId) ?>" class="btn btn-sm btn-outline-success btn-circle btn-circle" title="Edit Details"><i class="fa fa-pencil"></i></a>

                                <button class="btn btn-sm btn-outline-danger btn-circle btn-circle" onclick="deleteDealer(<?= $dealer->dealerId; ?>)"><i class="fa fa-trash"></i></button>
                                <button class="btn btn-sm btn-outline-success btn-circle btn-circle" onclick="dealerApprove(<?= $dealer->dealerId; ?>)"><i class="fa fa-check"></i></button>
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
                    <h1>Theare are no any active Dealer</h1>
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


    function deleteDealer(id) {
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
                url: "<?= base_url('admin/dealerDelete/')?>" + id,
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
    function dealerApprove(id) {
        swal({
            title: "Are you sure?",
            text: "You really want to approve",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, Approve it!",
            closeOnConfirm: false
        }, function(isConfirm) {
            if (!isConfirm) return;
            $.ajax({
                url: "<?= base_url('admin/approveDealer/')?>" + id,
                type: "POST",

                success: function() {
                    location.reload();
                    swal("Done!", "It was succesfully approved!", "success");
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    swal("Error approve!", "Please try again", "error");
                }
            });
        });
    }

</script>
