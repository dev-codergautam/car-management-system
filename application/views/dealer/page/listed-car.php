<mian class="card">
    <?php 
    $sessionid = $_SESSION['dealer_authenticate'];
    $data['userid'] = $this->admin_datawork->get_id('dealer',['dealerEmail'=> $sessionid]);
    $dealid =  $data['userid']['dealerId'];  
    ?>
    <div class="col-md-12 mt-3">
        <h5>Listed Car ( <?php echo $this->admin_datawork->count_data('car',['carStatus'=>'1','carDealer'=>$dealid]) ?> )</h5>
        <?= $this->session->flashdata('success') ?>
        <hr>
    </div>
    <?php if($this->admin_datawork->count_data('car',['carStatus'=>'1']) != "0"): ?>
        <div class="col-lg-12 mt-3">
            <table id="pass" class="table table-hover table-sm small table-bordered dataTable no-footer" cellspacing="0" role="grid" aria-describedby="enquiry_info">
                <thead>
                    <tr role="row">
                        <th width="8%" class="sorting">
                            <div class="p"><b>Ref. No.</b></div>
                        </th>
                        <th width="8%" class="sorting">
                            <div class="p"><b>Stock No.</b></div>
                        </th>
                        <th width="18%" class="sorting">
                            <div class="p"><b>Manufacturer and model</b></div>
                        </th>
                        <th width="8%" class="sorting">
                            <div class="p"><b>Year</b></div>
                        </th>
                        <th width="5%" class="sorting">
                            <div class="p"><b>Milage Km</b></div>
                        </th>
                        <th width="5%" class="sorting">
                            <div class="p"><b>Own Click</b></div>
                        </th>
                        <th width="5%" class="sorting">
                            <div class="p"><b>Net Click</b></div>
                        </th>
                        <th width="5%" class="sorting">
                            <div class="p"><b>Lead</b></div>
                        </th>
                        <th width="10%" class="sorting">
                            <div class="p"><b>Price P</b></div>
                        </th>
                        <th width="8%" class="sorting">
                            <div class="p"><b>Date Added</b></div>
                        </th>
                        <th width="15%" class="sorting">
                            <div class="p"><b>Action</b></div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($car as $car): ?>
                        <tr class="even" role="row">
                            <td class="align-middle">
                                <?= $car->carId; ?>
                            </td>
                            <td class="align-middle">
                                <?= $car->carStock; ?>
                            </td>
                            <td class="align-middle">
                                <?php $data['carBrandData'] = $this->admin_datawork->get_id('brand', ['brandId' => $car->carBrand]); ?>
                                <?php $data['carModelData'] = $this->admin_datawork->get_id('model', ['modelId' => $car->carModel]); ?>

                                 <?php $data['carDealerlData'] = $this->admin_datawork->get_id('dealer', ['dealerId' => $car->carDealer]); ?>

                                <?php
                                    $data['carimgs'] =  $this->mmodal->get_id('carimage', ['carProdId' => $car->carId]);
                                        $carimg1 = $data['carimgs']['carimageImage'] ;
                                ?>
                                <?php if($carimg1==NULL): ?>
                                    <a href="<?= base_url('dealer/viewCar/'.$car->carSlug) ?>" data-toggle="tooltip" data-placement="top" data-html="true" class="nav-link text-dark" title="<img src='http://via.placeholder.com/150x150' />">
                                        <?php echo $data['carBrandData']['brandName']; ?> ( <?php echo $data['carModelData']['modelName']; ?> )
                                    <?php if($car->carStatus == "1"): ?>
                                            <i class="fa fa-check text-success"></i>
                                        <?php else: ?>
                                            <i class="fa fa-times text-danger"></i>
                                        <?php endif; ?>
                                    </a>
                                <?php else: ?>
                                     <a href="<?= base_url('dealer/viewCar/'.$car->carSlug) ?>" data-toggle="tooltip" data-placement="top" data-html="true" class="nav-link text-dark" title="<img src='<?= base_url("assets/image/car-image/".$carimg1);?>' style='width:150px;height:150px;'>">
                                        <?php echo $data['carBrandData']['brandName']; ?> ( <?php echo $data['carModelData']['modelName']; ?> )
                                     <?php if($car->carStatus == "1"): ?>
                                            <i class="fa fa-check text-success"></i>
                                        <?php else: ?>
                                            <i class="fa fa-times text-danger"></i>
                                        <?php endif; ?>
                                    </a>
                             <?php endif; ?>
                         </td>

                         <td class="align-middle">
                            <?= $car->carMenufectureYear; ?>
                        </td>
                        <td class="align-middle">
                            <?= $car->carMilage ?>
                        </td>
                        <td class="align-middle">
                           0
                        </td>
                        <td class="align-middle">
                             <?php $cid = $car->carId; ?>
                            <?php $countreview =  $this->admin_datawork->count_data('review',['reviewDealer'=>$dealid,'reviewCar'=>$cid]); ?>
                           <?= $countreview ?>
                        </td>
                        <td class="align-middle">
                            <?php $cid = $car->carId; ?>
                        <?php $countlead = $this->admin_datawork->count_data('lead',['leadDealer'=>$dealid,'leadCar'=>$cid]); ?>
                          <a href="<?= base_url('dealer/lead') ?>" class="nav-item nav-link"><?= $countlead; ?></a>
                        </td>
                        <td class="align-middle">
                            <?= $car->carPrice ?>
                        </td>
                        <td class="align-middle">
                            <?= $car->carDate ?>
                        </td>
                        <td class="text-center">
                            <a href="<?= base_url('dealer/viewCar/'.$car->carSlug) ?>" class="small p-1 btn btn-sm btn-outline-info btn-circle btn-circle" title="View Details"><i class="fa fa-eye"></i></a>

                            <a href="<?= base_url('dealer/editCar/'.$car->carId) ?>" class="small p-1 btn btn-sm btn-outline-success btn-circle btn-circle" title="Edit Details"><i class="fa fa-pencil"></i></a>

                            <a href="<?= base_url('dealer/uploadCarImage/'.$car->carId) ?>" class="small p-1 btn btn-sm btn-outline-success btn-circle btn-circle" title="Upload Images"><i class="fa fa-picture-o"></i></a>

                            <button class="small p-1 btn btn-sm btn-outline-danger btn-circle btn-circle" onclick="CarDelete(<?= $car->carId; ?>)"><i class="fa fa-trash"></i></button>
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
                url: "<?= base_url('dealer/dealeteCar/')?>" + id,
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
<script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
  })
</script>