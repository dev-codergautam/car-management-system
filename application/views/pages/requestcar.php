 <div class="col-lg-12 mt-4">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card shadow-sm rounded-0 d-none d-md-block">
                        <div class="card-header">
                            <p><i class="fa fa-search"></i> <b>What are you looking for botswana</b></p>
                        </div>
                        <div class="card-body p-3">
                            <?php foreach($cartype2 as $cartype2): ?>
                            <a href="<?= base_url(); ?>home/cartype/<?php echo $cartype2->cartypeSlug; ?>" class='nav-link text-dark p-0'>
                                <div class='listbar_small col-12'>
                                    <p>
                                    <?php echo $cartype2->cartypeName; ?>
                                    <?php $countcartype = $this->admin_datawork->count_data('car', ['carType' => $cartype2->cartypeId]); ?>
                                        (<?php echo $countcartype; ?>)
                                    </p>
                                </div>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="card shadow-sm rounded-0 mt-3 d-none d-md-block">
                        <div class="card-header">
                            <p><i class="fa fa-map-marker"></i> <b>Botswana car for sale by City/Town</b></p>
                        </div>
                        <div class="card-body p-3">
                            <div class="row">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                    <?= form_open('home/addReaquestCar'); ?>
                    <?= $this->session->flashdata('success') ?>
                    <div class="card box-shadow">
                        <div class="card-header">Request Used Car</div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-sm" name="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="name">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control form-control-sm" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="name">Contact No <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-sm" name="contact" placeholder="Contact No">
                                </div>
                                <div class="form-group">
                                    <label for="name">Message <span class="text-danger">*</span></label>
                                    <textarea class="form-control form-control-sm" name="message" placeholder="Name" rows="4" cols="30"></textarea>
                                </div>
                                <div class="form-group col-6 offset-lg-6">
                                    <input type="submit" class="btn btn-danger btn-sm float-right btn-block" value="Submit">
                                </div>
                            </div>
                    </div>
                    <?php form_close(); ?>
                </div>
                <div class="col-lg-3">
                      <div class="card box-shadow card mb-3 d-none d-md-block">
                        <div class="card-header">
                            <p><i class="fa fa-car"></i> <b>Botswana Vehicle Sales</b></p>
                        </div>
                        <div class="card-body">
                            <?php $data['brand'] = $this->datawork->get_data('brand'); ?>
                            <?php foreach($data['brand'] as $brand): ?>
                            <a href="<?= base_url() .'home/brand/'. $brand->brandSlug; ?>" class='nav-link text-dark p-0'>
                                <div class='listbar_small col-12'>
                                    <p><?= $brand->brandName; ?> 
                                <?php $countcarbrand = $this->admin_datawork->count_data('car', ['carBrand' => $brand->brandId]) ?>
                                    (<?php echo $countcarbrand; ?>)</p>
                                </div>
                            </a>
                    <?php endforeach;?>
                    
                </div>
            </div>
                </div>
            </div>
        </div>
