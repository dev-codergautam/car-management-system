<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <?php foreach($confirm as $rows){}  ?>
            <h3 class="page-title">Delete <b> <?= $rows->business_name;?></b></h3>
            <div class="panel">
                <div class="panel-body">
                    <div class="col-lg-12">
        <div class="card border-0">
            <div class='text-dark p-lg-5 p-3'>
                <h2 class='text-center text-danger' style="font-size:80px;"><span class="lnr lnr-sad"></span></h2>
                <h2 class='h5 text-center'>Are you sure want to Delete?</h2>
                <p class='text-center'> After deleting this buiness, it cannot be recover.</p>
                <p class='text-center'> All Ratings, Review, Business Gallery, Business Profile all was trashed.</p>
                <a href="<?= base_url(); ?>admin/confirmDeleteBusiness/<?= $confirmid; ?>" class="btn btn-dark">Yes</a>
                <a href="<?= base_url(); ?>admin/view/<?= $confirmid; ?>" class="btn btn-outline-success">No</a>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
</div>
</div>