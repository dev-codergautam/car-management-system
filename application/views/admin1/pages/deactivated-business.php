<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Deactivated Business List</h3>
            <div class="panel">
                <div class="panel-body">
                    <?php foreach($request as $rows): ?>
                    <div class="col-lg-12">
                        <div class="col-lg-1">
                            <i class="fa fa-user fa-4x text-danger"></i>
                        </div>
                        <div class="col-lg-11 text-dark">
                            <h6 class="h4">
                                <?= $rows->business_name; ?>
                            </h6>
                            <h6 class="h6">
                                Lists id :
                                <?= $rows->id; ?>
                            </h6>
                            <h6>Prop : <b><?= $rows->proprietor; ?></b>
                                <a href="<?= base_url(); ?>admin/activate/<?= $rows->id; ?>" class="btn btn-danger btn-sm pull-right"><i class="fa fa-check-square-o"></i> Activate</a>
                                <a href="<?= base_url(); ?>admin/view/<?= $rows->id; ?>" class="btn btn-info btn-sm pull-right m-r-3"><i class="fa fa-check"></i> View</a>
                            </h6>
                        </div>
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