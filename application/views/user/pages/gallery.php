<div class="col-lg-9 mb-3">
    <div class="card p-3">
        <div class="row">
            <div class="col-lg-12">
                <h5><a href="<?= base_url(); ?>user/index" class="fa fa-arrow-circle-left fa-lg nav-link"></a> My Business Gallery</h5>
                <div class="hr-brand mb-4"></div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <?php if(count($gallery) != 0){ ?>
                    <?php foreach($gallery as $img): ?>
                    <div class="col-lg-4 mt-3">
                        <img src="<?= base_url(); ?>assets/image/gallery/<?= $img->g_image; ?>" alt="Image description" class="img-fluid mb-3" />
                        <a href="" class="btn btn-outline-dark btn-sm btn-block" data-toggle="modal" data-target="#myModal/<?= $img->g_id; ?>"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                    <!-- Delete Modal Start-->
                    <div id="myModal/<?= $img->g_id; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-dialog-centered">
                            <!-- Delete Modal content-->
                            <div class="modal-content">
                                <div class="modal-header bg-brand text-white">
                                    <h5 class="modal-title text-uppercase" id="exampleModalLabel">Delete Image
                                        <?= $img->g_title; ?>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body text-dark">
                                    <p class="h4">Are you sure want to delete? </p>
                                    <p class="">Are you sure want to delete this Image from tha Gallery of Your Event Business <b><?= $img->g_title; ?></b>
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <a href="<?= base_url(); ?>user/delete_picture/<?= $img->g_id; ?>" class="btn btn-dark">Yes</a>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Delete Modal content End-->
                    <?php endforeach; ?>
                    <?php } else { ?>
                    <div class="col-lg-12">
                        <div class='alert alert-light p-lg-5 p-3'>
                            <h2 class='h5'><i class='fa fa-meh-o fa-lg'></i> Your Business Gallery is not updated</h2>
                            <p class='m-0 p-0 mt-4'> Please update your gallery</p>
                            <ol>
                                <li>Go to My Business <a href='index' class='alert-link text-danger'>Click View button </a></li>
                                <li>Next click on <span class="text-danger">Add Gallery</span> Button </li>
                                <li>Then your Gallery will be updated...</li>
                            </ol>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-lg-1"></div>
</div>