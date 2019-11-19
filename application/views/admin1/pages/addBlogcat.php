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
                                <?= form_open_multipart('admin/addBlogcat');?>
                                <div class="form-group">
                                    <label for="" class="mt-2">Category</label>
                                    <input type="text" value="" name="title" class="form-control">
                                    <?= form_error('title');?>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success form-control mt-3">
                                </div>
                                <?= form_close();?>
                            </div>
                            <div class="col-lg-5">
                                <?php foreach($blogcategory as $rows):?>
                                <div class="col-lg-6">
                                    <h5>
                                        <?= $rows->bc_category;?>
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
