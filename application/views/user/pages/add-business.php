<div class="col-lg-9 mb-3">
    <div class="card box-shadow p-3">
        <?php foreach($profile as $profile){} ?>
        <?php
            $name = $profile->u_name; 
            $userid = $profile->user_id; 
        ?>
            <div class="row">
                <div class="col-lg-12">
                    <h5><a href="<?= base_url(); ?>user/index" class="fa fa-arrow-circle-left fa-lg nav-link"></a>Add Your Business</h5>
                    <div class="hr-brand mb-4"></div>
                </div>
                <div class="col-lg-2"></div>
                <script src="<?= base_url(); ?>assets/js/jquery.validate.js"></script>
                <div class="col-lg-8">
                    <div class="form-group col-md-12">
                        <?= form_open('user/insert_step1');?>
                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <legend>Step 1 of 3</legend>
                        </div>

                        <div class="form-group col-md-12">
                            <input type="text" id="business_name" name="business_name" class="form-control form-control-sm" placeholder="Business Name" value="<?= set_value('business_name');?>">
                            <input type="text" name="name" value="<?= $name; ?>" hidden>
                            <input type="text" name="userid" value="<?= $userid; ?>" hidden>
                            <?= form_error('business_name');?>
                        </div>

                        <div class="form-group col-md-12">
                            <textarea name="description" id="" rows="3" class="form-control form-control-sm" placeholder="Describe your Business in more than 20 words..."><?= set_value('description');?></textarea>
                            <?= form_error('description');?>
                        </div>

                        <div class="form-group col-md-12">
                            <input type="text" name="experience" class="form-control form-control-sm" value="<?= set_value('experience');?>" placeholder="Experience in (years) or (months)">
                            <?= form_error('experience');?>
                        </div>

                        <div class="form-group col-md-12">
                            <select name="m_category" class="form-control form-control-sm" id="select1">
                                <option value="">Main business category</option>
                                <?php foreach($main as $row):?>
                                <option id="<?= $row->main_parentid;?>" value="<?= $row->main_parentid;?>"><?= $row->main_title;?> </option>
                                <?php endforeach;?>
                                
                            </select>
                            <?= form_error('m_category');?>
                        </div>

                        <div class="form-group col-md-12">
                            <select name="category" class="form-control form-control-sm" id="select2">
                                <option value="">Business Category</option>
                                <?php foreach($cat as $cat):?>
                                <option id="<?= $cat->parent_id; ?>" value="<?= $cat->title_slug;?>"><?= $cat->title;?> </option>
                                <?php endforeach;?>
                                
                            </select>
                            <?= form_error('category');?>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-12 text-center">
                    <input type="submit" class="btn btn-outline-dark" value="Save & Continue">
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
