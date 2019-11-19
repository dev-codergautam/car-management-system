<mian class="card p-3">
    <div class="col-md-12 mt-3">
        <h4>Generated Lead</h4>
        <?= $this->session->flashdata('success') ?>
        <hr>
    </div>
    <?php if($this->admin_datawork->count_all('lead') != "0"): ?>
        <div class="col-lg-12 mt-3">
            <table id="pass" class="table table-hover table-sm table-bordered dataTable no-footer" cellspacing="0" role="grid" aria-describedby="enquiry_info">
                <thead>
                    <tr role="row">
                        <th width="20%" class="sorting">
                            <div class="">Name</div>
                        </th>
                        <th width="20%" class="sorting">
                            <div class="">Email</div>
                        </th>
                        <th width="15%" class="sorting">
                            <div class="">Contact</div>
                        </th>
                        <th width="45%" class="sorting">
                            <div class="">Message</div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($lead as $lead): ?>
                        <tr class="even" role="row">
                            <td class="align-middle"><?= $lead->leadName ?></td>
                            <td class="align-middle"><?= $lead->leadEmail ?></td>
                            <td class="align-middle"><?= $lead->leadContact ?></td>
                            <td class="align-middle"><?= $lead->leadMessage ?></td>
                            
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php else: ?>
            <div class="col-12">
                <div class="bs-component">
                  <div class="jumbotron">
                    <h1>Theare are no any Lead Generated</h1>
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
