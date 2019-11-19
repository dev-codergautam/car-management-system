<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Create a Category</h3>
            <div class="row">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-7">
                                <?= form_open_multipart('admin/cat');?>

                                    <div class="form-group">
                                        <label for="" class="mt-2">Main category</label>
                                        <select name="parentid" id="" class="form-control">
                                        <option value="">Select Parent</option>
                                        <?php foreach($main as $rows): ?>
                                            <option value="<?= $rows->main_parentid ?>"><?= $rows->main_title ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="mt-2">Category</label> 
                                        <select name="cat_id" id="" class="form-control">
                                        <option value="">Category</option>
                                        <?php foreach($cat as $rows): ?>
                                            <option value="<?= $rows->id; ?>"><?= $rows->title; ?> | <?= $rows->parent_id; ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="mt-2">Category</label> 
                                        <input type="text" value="" name="title"  class="form-control">
                                        <?= form_error('title');?>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="m-t-2">Pic</label>
                                        <input type="file" name="pic" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="m-t-2">Icon</label>
                                        <input type="text" name="icon" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success form-control mt-3">
                                    </div>
                                    <?= form_close();?>
                            </div>
                            <div class="col-lg-5">
                                <?php foreach($cat as $cats):?>
                                <div class="col-lg-6">
                                    <h5>
                                        <?= $cats->title;?>
                                    </h5>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
