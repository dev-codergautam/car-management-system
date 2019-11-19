<div class="row">
    <div class="col-md-9">
        <div class="card shadow-sm rounded-0">
            <div class="card-body">
             <?= $this->session->flashdata('success') ?>
             <div class="row">
                <!-- TOTAL ACTIVE DEALER -->
                <div class="col-md-4 col-sm-6 col-6">
                    <div class="small-box bg-primary">
                        <div class="inner p-3">
                            <h3><?= $this->admin_datawork->count_data('dealer',['dealerStatus'=>'1']) ?></h3>
                            <h5>Active Dealer</h5>
                        </div>
                        <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                        <a href="<?= base_url('admin/activatedDealer') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- TOTAL DEACTIVE DEALER -->
                <div class="col-md-4 col-sm-6 col-6">
                    <div class="small-box bg-primary">
                        <div class="inner p-3">
                            <h3><?= $this->admin_datawork->count_data('dealer',['dealerStatus'=>'0']) ?></h3>
                            <h5>Deactive Dealer</h5>
                        </div>
                        <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                        <a href="<?= base_url('admin/deactivatedDealer') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- TOTAL TOPICS -->
                <div class="col-md-4 col-sm-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner p-3">
                            <h3>5</h3>
                            <h5>Total Car</h5>
                        </div>
                        <div class="icon"><i class="fa fa-car"></i></div>
                        <a href="<?= base_url('admin/activatedCar') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- TOTAL LESSION -->
                <div class="col-md-4 col-sm-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning mb-0">
                        <div class="inner p-3">
                            <h3>2000</h3>
                            <h5>Total Leads</h5>
                        </div>
                        <div class="icon"><i class="fa fa-question"></i></div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!--  TOTAL INCOME -->
                <div class="col-md-4 col-sm-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-secondary">
                        <div class="inner p-3">
                            <h3> 0 </h3>
                            <h5>Total Revenue</h5>
                        </div>
                        <div class="icon">
                            <i class="fa fa-rupee"></i>
                        </div>
                        <a href="https://demo.skulam.com/employee/index" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!--  TOTAL EXPENCE -->
                <div class="col-md-4 col-sm-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner p-3">
                            <h3> 0 </h3>
                            <h5>Total Expenses</h5>
                        </div>
                        <div class="icon">
                            <i class="fa fa-rupee"></i>
                        </div>
                        <a href="https://demo.skulam.com/employee/index" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-3 bg-white">
    <div class="row">
        <div class="col-md-12">
            <a class="weatherwidget-io" style="height: 280; display: block; position: relative; padding: 0px; overflow: hidden; text-align: left; text-indent: -299rem;" href="https://forecast7.com/en/25d7887d48/purnea/" data-label_1="PURNIA" data-label_2="WEATHER" data-font="Roboto Slab" data-icons="Climacons Animated" data-days="3" data-theme="pure">PURNIA WEATHER<iframe id="weatherwidget-io-0" class="weatherwidget-io-frame" scrolling="no" frameborder="0" width="100%" src="https://weatherwidget.io/w/" style="display: block; position: absolute; top: 0px; height: 280px;"></iframe></a>
            <script>
                ! function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = 'https://weatherwidget.io/js/widget.min.js';
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, 'script', 'weatherwidget-io-js');

            </script>
        </div>
    </div>
</div>
</div>
<div class="clearfix"></div>
<div class="row my-3">
    <div class="col-md-6">
      <div class="tile">
        <h3 class="tile-title">Pie Chart</h3>
        <div class="embed-responsive embed-responsive-16by9">
          <canvas class="embed-responsive-item" id="pieChartDemo" width="475" height="267" style="width: 475px; height: 267px;"></canvas>
      </div>
  </div>
</div>
</div>
