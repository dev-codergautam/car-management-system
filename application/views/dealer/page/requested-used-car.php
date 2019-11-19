<mian class="card p-3">
    <div class="col-md-12 mt-3">
        <h4>Requested Used car</h4>
        <?= $this->session->flashdata('success') ?>
        <hr>
    </div>
    <?php 
        if($this->admin_datawork->count_all('requestcar') != "0"): 
    ?>
        <div class="col-lg-12 mt-3">
            <table id="pass" class="table table-hover table-sm table-bordered dataTable no-footer" cellspacing="0" role="grid" aria-describedby="enquiry_info">
                <thead>
                    <tr role="row">
                        <th width="20%" class="sorting">
                            <div class="">Name</div>
                        </th>
                        <th width="15%" class="sorting">
                            <div class="">Contact</div>
                        </th>
                        <th width="20%" class="sorting">
                            <div class="">Time</div>
                        </th>
                        <th width="35%" class="sorting">
                            <div class="">Message</div>
                        </th>
                        <th width="10%" class="sorting">
                            <div>Action</div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($requestcar as $requested): ?>
                        <tr class="even" role="row">
                            <td class="align-middle"><?= $requested->requestName ?></td>
                            <td class="align-middle"><?= $requested->requestContact ?></td>
                            <td class="align-middle"><?= $requested->requestDate ?> <?= $requested->requestTime ?></td>
                            <td class="align-middle"><?= $requested->requestMessage ?></td>
                            <td class="align-middle">
                                <a href="#" class="small p-1 btn btn-sm btn-outline-info btn-circle btn-circle" title="View Details"><i class="fa fa-eye"></i></a>
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


</script>
