<mian class="card p-3">
    <div class="col-md-12 mt-3">
        <h4>Generated Lead</h4>
        <?= $this->session->flashdata('success') ?>
        <hr>
    </div>
    <?php 
    $sessionid = $_SESSION['dealer_authenticate'];
    $data['userid'] = $this->admin_datawork->get_id('dealer',['dealerEmail'=> $sessionid]);
    $dealid =  $data['userid']['dealerId'];  
    if($this->admin_datawork->count_data('lead',['leadDealer'=>$dealid]) != "0"): 
        ?>
        <div class="col-lg-12 mt-3">
            <table id="pass" class="table table-hover table-sm small table-bordered dataTable no-footer" cellspacing="0" role="grid" aria-describedby="enquiry_info">
                <thead>
                    <tr role="row small">
                        <th width="12%" class="sorting">
                            <div class="">Name</div>
                        </th>
                        <th width="15%" class="sorting">
                            <div class="">Email</div>
                        </th>
                        <th width="13%" class="sorting">
                            <div class="">Contact</div>
                        </th>
                        <th width="12%" class="sorting">
                            <div class="">Veichle</div>
                        </th>
                        <th width="17%" class="sorting">
                            <div class="">Time</div>
                        </th>
                        <th width="18%" class="sorting">
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
                            <td class="align-middle">
                                <?php
                                $data['carimgs'] =  $this->mmodal->get_id('carimage', ['carProdId' => $lead->leadCar]);
                                $carimg1 = $data['carimgs']['carimageImage'] ;
                                ?>
                                <?php $data['carData'] = $this->admin_datawork->get_id('car', ['carId' => $lead->leadCar]); ?>
                                <?php $slug = $data['carData']['carSlug']; ?>
                                <?php if($carimg1==NULL): ?>
                                    <a href="<?= base_url('dealer/viewCar/'.$slug) ?>" data-toggle="tooltip" data-placement="top" data-html="true" class="nav-link text-dark" title="<img src='http://via.placeholder.com/150x150' />">
                                    <?= $data['carData']['carName']; ?>
                                   
                                </a>
                                <?php else: ?>
                                   <a href="<?= base_url('dealer/viewCar/'.$slug) ?>" data-toggle="tooltip" data-placement="top" data-html="true" class="nav-link text-dark" title="<img src='<?= base_url("assets/image/car-image/".$carimg1);?>' style='width:150px;height:150px;'>">
                                     <?= $data['carData']['carName']; ?>
                                 </a>
                             <?php endif; ?>
                         </td>

                         <td class="align-middle"><?= $lead->leadDate ?> <?= $lead->leadTime ?></td>
                         <td class="align-middle text-tuncate" title="<?= $lead->leadMessage ?>"><?= $lead->leadMessage ?></td>

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
