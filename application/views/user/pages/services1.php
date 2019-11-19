<?php foreach($profile as $profile){} ?>
<?php
    $userid = $profile->user_id; 
?>
    <div class="col-lg-9 mb-3">
        <div class="card box-shadow p-3">
            <div class="row">
                <div class="col-lg-12">
                    <h6><a href="<?= base_url(); ?>user/index" class="fa fa-arrow-circle-left fa-lg nav-link"></a>Add new services or products</h6>
                    <div class="hr-brand mb-4"></div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="form-group col-md-12">
                        <?= form_open('user/servicesStep1');?>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <legend>Step 1 of 2</legend>
                            <div class="hrbrand"></div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="Contact">Product / Services</label>
                            <input type="text" placeholder="Product or service title" name="title" class="form-control form-control-sm" value="<?= set_value('title');?>">
                            <?= form_error('title');?>
                                <input type="text" name="userid" value="<?= $userid; ?>" hidden>
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label for="Price">Price</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend border-0">
                                    <div class="input-group-text"><i class="fa fa-inr"></i></div>
                                </div>
                                <input type="number" name="price" placeholder="Price of product or services" class="form-control form-control-sm" id="" value="<?= set_value('price'); ?>">
                            </div>
                            <?= form_error('price');?>
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label for="Price">Discounted Price</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend border-0">
                                    <div class="input-group-text"><i class="fa fa-inr"></i></div>
                                </div>
                                <input type="number" name="discount" placeholder="Discounted Price of product or services" class="form-control form-control-sm" id="" value="<?= set_value('discount'); ?>">
                            </div>
                            <?= form_error('discount');?>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="Category">Main Category</label>
                            <select name="maincat" class="form-control form-control-sm" id="select1">
                            <option value="">Main business category</option>
                            <?php foreach($main as $row):?>
                            <option id="<?= $row->main_parentid;?>" value="<?= $row->main_parentid;?>"><?= $row->main_title;?> </option>
                            <?php endforeach;?>
                        </select>
                            <?= form_error('maincat');?>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="Category">Category</label>
                            <select name="category" class="form-control form-control-sm" id="select2">
                            <option value="">Business Category</option>
                            <?php foreach($cat as $cat):?>
                            <option id="<?= $cat->parent_id; ?>" value="<?= $cat->title_slug;?>"><?= $cat->title;?> </option>
                            <?php endforeach;?>
                        </select>
                            <?= form_error('category');?>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="Contact">Description</label>
                            <textarea name="descr" id="" rows="3" class="form-control form-control-sm"><?= set_value('descr');?></textarea>
                            <?= form_error('descr');?>
                        </div>

                        <div class="form-group col-md-12 text-center">
                            <input type="submit" class="btn btn-outline-dark" value="Save & Continue">
                        </div>
                    </div>
                </div>
            </div>
            <?= form_close();?>
                <div class="col-lg-2"></div>
        </div>
    </div>
</div>
<div class="col-lg-1"></div>
</div>
    <script type="text/javascript">
        $("#select1").change(function() {
            if ($(this).data('options') === undefined) {
                $(this).data('options', $('#select2 option').clone());
            }
            var id = $(this).val();
            var options = $(this).data('options').filter('[id=' + id + ']');
            $('#select2').html(options);
        });

    </script>
