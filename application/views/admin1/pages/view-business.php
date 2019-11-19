<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <?php foreach($view as $rows){}  ?>
            <h3 class="page-title">Business | <?= $rows->business_name;?></h3>
            <div class="panel">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <?php
                        $data =  $this->datawork->get_data('users',"user_id = '$rows->u_id'");
                            foreach($data as $row){}
                            $photo1 = $row->u_image;
                            if($photo1 == NULL){
                                $photo = base_url() . "assets/image/user.jpg";
                            }
                            else {
                                $photo = base_url() . "assets/image/users/" . $row->u_image;
                            }
                        ?>
                            <?php
                                if($rows->website == NULL){
                                    $website = "N/A";
                                }
                                else {
                                    $website = $rows->website;
                                }
                                ?>
                                <div class="col-lg-12 box-shadow bg-white mt-5 mt-lg-3 p-4">
                                    <div class="col-lg-8">
                                        <img src="<?= base_url('assets/clients/'.$rows->pic);?>" alt="<?= $rows->business_name;?>" class="img-responsive box-shadow">
                                    </div>
                                    <div class="col-lg-4 pt-3 mb-3">
                                        <h2>
                                            <?= $rows->business_name;?>
                                        </h2>
                                        <p><img src="<?= $photo; ?>" alt="<?= $row->u_image; ?>" style="width:25px; height:25px; border-radius:50px;">
                                           <?php 
                                                $data['users'] = $this->datawork->get_id('users', ['user_id' => $rows->u_id]);
                                                $proprietor = $data['users']['u_name'];
                                            ?>
                                            <?= $proprietor;?>
                                        </p>
                                        <hr>
                                        <p>
                                            <?= $rows->description;?>
                                        </p>
                                    </div>
                                    <div class="col-lg-12 p-lg-5 p-2">
                                        <div class="col-lg-6 mb-3">
                                            <h2>Business Details</h2>
                                            <div class="hrbrand"></div>
                                            <p class="h5"><i class="fa fa-check"></i> Events Business :
                                                <?= $rows->category;?>
                                            </p>
                                            <p class="h5"><i class="fa fa-check"></i> Working Experience :
                                                <?= $rows->experience;?>
                                            </p>
                                            <p class="h5"><i class="fa fa-check"></i> Address :
                                                <?= $rows->address;?>
                                            </p>
                                            <p class="h5"><i class="fa fa-check"></i> City :
                                                <?= $rows->city;?>
                                            </p>
                                            <p class="h5"><i class="fa fa-check"></i> State :
                                                <?= $rows->state; ?> 
                                            </p>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <h2>Contact Details</h2>
                                            <div class="hrbrand"></div>
                                            <p class="h5"><i class="fa fa-phone"></i>
                                                <?= $rows->contact;?>
                                            </p>
                                            <p class="h5"><i class="fa fa-phone"></i>
                                                <?= $rows->contact1;?>
                                            </p>
                                            <p class="h5"><i class="fa fa-envelope"></i>
                                                <?= $rows->email;?>
                                            </p>
                                            <p class="h5"><i class="fa fa-globe"></i>
                                                <?= $website; ?>
                                            </p>
                                        </div>
                                        <div class="col-lg-12 col-12">
                                            <h4 class="text-brand">Share Your link </h4>
                                            <p class="h5"><i class="fa fa-globe"></i>
                                                <a href="<?= base_url(); ?>home/business/<?= $rows->name_slug; ?>" class="text-dark" target="_blank">
                                                    <?= base_url(); ?>home/business/<?= $rows->name_slug; ?>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <?php if(!empty($button)) { ?>
                                    <?php foreach ($button as $but){} ?>
                                    <?php if($but->up_status == 0 || $but->up_status == ""){ ?>
                                    <div class="col-lg-12 text-right">
                                        <a href="<?= base_url(); ?>user/request/<?= $rows->id; ?>" class="btn btn-sm btn-outline-dark">Request for Update</a>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="col-lg-12 text-right">
                                        <a href="<?= base_url(); ?>user/request/<?= $rows->id; ?>" class="btn btn-sm btn-outline-danger disabled">Already Requested</a>
                                    </div>
                                    <?php } }else{ ?>
                                    <div class="col-lg-12 text-right">
                                        <a href="<?= base_url(); ?>user/request/<?= $rows->id; ?>" class="btn btn-sm btn-outline-dark">Request for Update</a>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="col-lg-12 box-shadow card mt-3">
                                    <div class="row my-gallery">
                                        <?php foreach($img as $img): ?>
                                        <figure class="col-lg-4 mt-3" itemprop="associatedMedia" itemscope>
                                            <a href="<?= base_url(); ?>assets/image/gallery/<?= $img->g_image; ?>" itemprop="contentUrl" data-size="1200x800">
                                        <img src="<?= base_url(); ?>assets/image/gallery/<?= $img->g_image; ?>" itemprop="thumbnail" alt="Image description" class="img-fluid"/>
                                        </a>
                                            <figcaption itemprop="caption description" class="text-center">
                                                <?= $img->g_title; ?>
                                            </figcaption>
                                        </figure>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
