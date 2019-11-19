<div class="col-lg-9 mb-3">
    <div class="card bg-white box-shadow p-3">
        <div class="row">
            <div class="col-lg-12">
                <h5><a href="<?= base_url(); ?>user/index" class="fa fa-arrow-circle-left fa-lg nav-link"></a> Notifications</h5>
                <div class="hr-brand mb-4"></div>
            </div>
            <div class="col-lg-12">
                <div class="list-group list-group-flush">
                    <?php foreach($noti as $row): ?>
                    <?php
                        $data['bizz'] = $this->datawork->get_id('bizz', ['id' => $row->n_bizzid]);
                        $slug = $data['bizz']['name_slug'];
                    ?>

                        <?php
                    if($row->n_status == 0){
                        $color = "style='background:#eee'";
                    }
                    else{
                        $color = "style='background:transparent'";
                    }
                    ?>
                    
                                <?= form_open('user/seen/'); ?>

                                    <?php  if($row->n_bizzid == NULL): ?>

                                    <a href="<?= base_url(); ?>home/view_advertisement/<?= $row->n_postid; ?>" class="list-group-item list-group-item-action" <?= $color; ?>><?= $row->n_message; ?><br>
                            <span><i class="fa fa-clock-o"></i> <?= $row->n_doc; ?></span>
                        </a>
                                    <div style="border-bottom: 1px solid #e7e7e7;"></div>

                                    <?php elseif($row->n_bizzid == 0):  ?>
                                    <a href="<?= base_url(); ?>user/newnotification/<?= $row->n_id; ?>" class="list-group-item list-group-item-action" <?= $color; ?>><?= $row->n_message; ?><br>
                            <span><i class="fa fa-clock-o"></i> <?= $row->n_doc; ?></span>
                        </a>

                                    <?php else: ?>

                                    <a href="<?= base_url(); ?>home/business/<?= $slug; ?>" class="list-group-item list-group-item-action" <?= $color; ?>><?= $row->n_message; ?><br>
                            <span><i class="fa fa-clock-o"></i> <?= $row->n_doc; ?></span>
                        </a>
                                    <div style="border-bottom: 1px solid #e7e7e7;"></div>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-lg-1"></div>
</div>