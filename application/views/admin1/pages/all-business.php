<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">All Business Lists</h3>
            <div class="panel">
                <div class="panel-body">
                    <?php foreach($allbusiness as $rows): ?>
                    <div class="col-lg-12 m-b-1">
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
                            <h6>Prop : <b>S</b>
                                <a href="<?= base_url(); ?>admin/view/<?= $rows->id; ?>" class="btn btn-info btn-sm pull-right m-r-3"><i class="fa fa-check"></i> View</a>
                                <a href="<?= base_url(); ?>admin/deleteBusiness/<?= $rows->id; ?>" class="m-r-2 btn btn-danger btn-sm pull-right m-r-3"><i class="fa fa-trash"></i> Delete</a>
                                <a href="<?= base_url(); ?>admin/updateBusiness/<?= $rows->id; ?>" class="m-r-2 btn btn-info btn-sm pull-right m-r-3"><i class="fa fa-check"></i> Update</a>
                            </h6>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="panel">
                <div class="panel-body">
                    <div class="col-md-6">
                        <h4>Total Business (
                            <?= $total_row; ?>)</h4>
                    </div>
                    <div class="col-md-6 text-right">
                        <?= $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
