<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title"><i class="lnr lnr-car"></i>  Dashboard</h3>
            <div class="row">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="row">
                           <a href="<?= base_url(); ?>admin/users">
                            <div class="col-md-6">
                                <div class="metric">
                                    <span class="icon"><i class="lnr lnr-user"></i></span>
                                    <p>
                                        <span class="number" style="font-size:40px;"><?= $users; ?></span>
                                        <span class="title text-danger">Dealer</span>
                                    </p>
                                </div>
                            </div>
                            </a>
                            <a href="<?= base_url(); ?>admin/all_business">
                            <div class="col-md-6">
                                <div class="metric">
                                    <span class="icon"><i class="lnr lnr-car"></i></span>
                                    <p>
                                        <span class="number" style="font-size:40px;"><?= $bizz; ?></span>
                                        <span class="title text-danger">Listed Car</span>
                                    </p>
                                </div>
                            </div>
                            </a>
                            <a href="<?= base_url(); ?>admin/business_request">
                            
                            <div class="col-md-6">
                                <div class="metric">
                                    <span class="icon"><i class="lnr lnr-question-circle"></i></span>
                                    <p>
                                        <span class="number" style="font-size:40px;"><?= $request; ?></span>
                                        <span class="title text-danger">Query</span>
                                    </p>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
