<div class="col-lg-9 mt-3 mb-3">
    <div class="col-lg-12">
        <h6><a href="<?= base_url(); ?>user/blogs" class="fa fa-arrow-circle-left fa-lg nav-link"></a>My Blog</h6>
        <div class="hr-brand mb-4"></div>
    </div>
    <div class="container-fluid">
        <?php foreach($viewblog as $rows){} ?>
        <h6 class="text-uppercase font-weight-light mb-1">
            <?= $rows->bl_cat; ?>
        </h6>
        <h4>
            <b><?= $rows->bl_title; ?></b>
        </h4>
        <h6 class="mt-3">
            <?php
                $data['profile'] = $this->datawork->get_id('users', ['user_id' => $rows->bl_userid]);
                $name = $data['profile']['u_name'];
            ?>
                <b><?= $name; ?></b>
        </h6>
        <p>
            Posted on
            <?= $rows->bl_date; ?>
        </p>
        <p>
            <?= $rows->bl_desc; ?>
        </p>
    </div>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <?php $i = 1; ?>
                        <?php foreach($blogimage as $blogimage): ?>
                        <?php
                        if($blogimage->bi_image == ""){
                            $p_image = base_url() . "assets/image/default.png";
                        }
                        else {
                            $p_image = base_url() . "assets/image/myblog/" . $blogimage->bi_image;
                        }
                        ?>
                            <?php $item_class = ($i == 1) ? 'carousel-item active' : 'carousel-item'; ?>
                            <div class="<?php echo $item_class; ?>">
                                <img class="d-block w-100" src="<?= $p_image; ?>" alt="dgh" />
                            </div>
                            <?php $i++; ?>
                            <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>
</div>
<div class="col-lg-1"></div>
</div>