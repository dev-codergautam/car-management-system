<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title"> <i class="lnr lnr-user"></i> Add Dealer</h3>
            <div class="row">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <?= form_open_multipart('');?>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="" class="mt-2">Name</label>
                                        <input type="text" value="" name="name" class="form-control">
                                        <?= form_error('name');?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="" class="mt-2">Email</label>
                                        <input type="email" value="" name="email" class="form-control">
                                        <?= form_error('email');?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="" class="mt-2">Contact</label>
                                        <input type="number" value="" name="contact" class="form-control">
                                        <?= form_error('contact');?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="" class="mt-2">Alt. Contact</label>
                                        <input type="number" value="" name="altcontact" class="form-control">
                                        <?= form_error('name');?>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="" class="mt-2">Address</label>
                                        <textarea cols="30" rows="3" name="address" class="form-control"></textarea>
                                        <?= form_error('address');?>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-6"></div>
                                <div class="col-lg-3 col-md-3 col-6">
                                    <div class="form-group">
                                        <input type="submit" name="submit" value=" Add Delear" class="btn btn-success btn-block">
                                    </div>
                                </div>
                                
                                <?= form_close();?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
