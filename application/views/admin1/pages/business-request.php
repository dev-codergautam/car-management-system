<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Requested Business List</h3>
            <div class="panel">
                <div class="panel-body">
                    <?php foreach($request as $rows): ?> 
                    <div class="col-lg-12">
                        <div class="col-lg-2">
                            <?php
                    $photo1 = $rows->pic;
                    if($photo1 == NULL){
                        $photo = base_url() . "assets/image/default.png";
                    }
                    else {
                    $photo = base_url() . "assets/clients/" . $photo1;
                    }
                ?>
                        <img src="<?= $photo; ?>" alt="<?= $rows->business_name;?>" style="width:100px;height:100px;">
                        </div>
                        <div class="col-lg-10 text-dark">
                            <h6 class="h4">
                                <?= $rows->business_name; ?>
                            </h6>
                            <h6 class="h6">
                                Lists id :
                                <?= $rows->id; ?>
                            </h6>
                            <h6>Prop : <b>dgh</b>
                               
                                <a href="<?= base_url(); ?>admin/deleteBusiness/<?= $rows->id; ?>" class="m-r-2 btn btn-danger btn-sm pull-right m-r-3"><i class="fa fa-trash"></i> Delete</a>
                                <a href="<?= base_url(); ?>admin/update_request/<?= $rows->id; ?>" class="btn btn-success btn-sm pull-right m-l-3"><i class="fa fa-check-square-o"></i> Approve</a>
                                <a href="<?= base_url(); ?>admin/view/<?= $rows->id; ?>" class="btn btn-info btn-sm pull-right m-r-3"><i class="fa fa-check"></i> View</a>
                            </h6>
                        </div>
                        <hr>
                    </div>
                    
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="panel">
                <div class="panel-body">
                    <div class="col-md-6">
                        <h6></h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <?= $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>