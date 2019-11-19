<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-12 p-0 m-0">
            <div class="bg-brand p-2 ">
                <div class="card-body text-center">
                    <div class="d-none d-lg-block">
                        <?= form_open('home/query',['method'=>'get']); ?>
                            <div class="container">
                                <div class="input-group mb-3 mt-5">
                                    <div class="input-group-prepend">
                                        <select name="city" id="city" class="form-control rounded-0">
                            <?php foreach($cities as $cities): ?>
                            <option value="<?= $cities->city_name ?>"><?= $cities->city_name ?></option>     
                            <?php endforeach; ?>
                        </select>
                                    </div>
                                    <input type="text" name="query" class="form-control rounded-0" placeholder="Search any business here" autocomplete="off">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-default bg-white rounded-0 searchdes" type="submit"><i class="fa fa-search"></i></button>
                                    </div>

                                </div>
                                <script>
                                    $('select').select2();

                                </script>
                            </div>
                            <?= form_close(); ?>
                    </div>
                    <div class="d-md-none">
                        <?= form_open('home/query',['method'=>'get']); ?>
                            <div class="container mt-5">
                                <div class="input-group-prepend">
                                    <select name="city" id="city" class="form-control rounded-0 img-fluid">
                            <?php foreach($citi as $cities): ?>
                            <option value="<?= $cities->city_name ?>"><?= $cities->city_name ?></option>     
                            <?php endforeach; ?>
                        </select>
                                </div>
                                <div class="input-group mb-3 col-lg-12 m-0 p-0">
                                    <input type="text" name="query" class="form-control rounded-0" placeholder="Search any business here" autocomplete="off">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-default bg-white rounded-0 searchdes" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>

                            <script>
                                $('select').select2();

                            </script>
                            <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
        <div class="col-lg-8 mt-3 mb-3">
            <div class="row">

                <?php foreach($bizz as $row):?>
                <?php
                    $photo1 = $row->pic;
                    if($photo1 == NULL){
                        $photo = base_url() . "assets/image/default.png";
                    }
                    else {
                        $photo = base_url() . "assets/clients/" . $photo1;
                    }
                $b_id = $row->id;
                ?>
                    <!-- Rating -->
                    <?php 
                if($this->datawork->count_data('rating',['r_bizzid' => $row->id]) > 0){
                    $c = $this->datawork->count_data('rating',['r_bizzid' => $row->id]);
                }
                else{
                    $c = 0;
                }
                ?>
                    <?php
                if($c == 0){
                    $message = "Not rated yet";
                }
                elseif($c == 1){
                    $message = $c . " Rating";
                }
                else{
                    $message = $c . " Ratings";
                }
                ?>
                        <?php 
                            // rate count in average
                            foreach ($totalrat as $totalrate){
                                if($b_id == $totalrate->r_bizzid){
                                     $array[] = $totalrate->rate;
                                }
                                else{
                                    $i = 0;
                                }
                            }
                        ?>
                        <?php
                        if((!empty($array)) && ($c > 0)){
                            $totalbizzrate = array_sum($array);
                                $avg = $totalbizzrate / $c;
                        } else{
                            $avg = 0;
                        }
                        ?>

                            <?php
                        if($avg == ""){
                            $avgstar = "<i class='fa fa-star-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>";
                        }
                        elseif($avg <= 1){
                            $avgstar = "<i class='fa fa-star text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>";
                        }
                        elseif($avg <= 1.5){
                            $avgstar = "<i class='fa fa-star text-danger ml-lg-1'></i>
                            <i class='fa fa-star-half-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>";
                        }
                        elseif($avg <= 2){
                            $avgstar = "<i class='fa fa-star text-danger ml-lg-1'></i>
                            <i class='fa fa-star text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>
                            <i class='fa fa-star-o text-danger ml-lg-1'></i>";
                        }
                        elseif($avg <= 2.5){
                            $avgstar = "<i class='fa fa-star text-green ml-lg-1'></i>
                            <i class='fa fa-star text-green ml-lg-1'></i>
                            <i class='fa fa-star-half-o text-green ml-lg-1'></i>
                            <i class='fa fa-star-o text-green ml-lg-1'></i>
                            <i class='fa fa-star-o text-green ml-lg-1'></i>";
                        }
                        elseif($avg <= 3){
                            $avgstar = "<i class='fa fa-star text-green ml-lg-1'></i>
                            <i class='fa fa-star text-green ml-lg-1'></i>
                            <i class='fa fa-star text-green ml-lg-1'></i>
                            <i class='fa fa-star-o text-green ml-lg-1'></i>
                            <i class='fa fa-star-o text-green ml-lg-1'></i>";
                        }
                        elseif($avg <= 3.5){
                            $avgstar = "<i class='fa fa-star text-green ml-lg-1'></i>
                            <i class='fa fa-star text-green ml-lg-1'></i>
                            <i class='fa fa-star text-green ml-lg-1'></i>
                            <i class='fa fa-star-half-o text-green ml-lg-1'></i>
                            <i class='fa fa-star-o text-green ml-lg-1'></i>";
                        }
                        elseif($avg <= 4){
                            $avgstar = "<i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star-o text-warning ml-lg-1'></i>";
                        }
                        elseif($avg <= 4.5){
                            $avgstar = "<i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star-half-o text-warning ml-lg-1'></i>";
                        }
                        else{
                            $avgstar = "<i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star text-warning ml-lg-1'></i>
                            <i class='fa fa-star text-warning ml-lg-1'></i>";
                        }
                        ?>
                                <div class="col-lg-12">
                                    <a href="<?= base_url(); ?>home/business/<?= $row->name_slug;?>" class="mb-3 nav-link bg-white box-shadow2" title="<?= $row->business_name . ' ' . $row->address . ', ' . $row->city .' - ' . $row->category; ?>">
                                        <div class="row">
                                            <div class="col-lg-4 col-6">
                                                <div class="mysearch" style="background-image:url(<?= $photo; ?>);">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-6 mt-lg-4">
                                                <div class="text-dark">
                                                    <p class="srch-1 mb-0">
                                                        <?= $row->business_name;?>
                                                    </p>
                                                    <p class="srch-2 text-danger mb-0">
                                                        <?= "$row->address, $row->city";?>
                                                    </p>
                                                    <p class="d-none d-lg-block mb-0">
                                                        Contact :
                                                        <?= $row->contact;?>
                                                    </p>
                                                    <p class="d-none d-lg-block mb-0">
                                                        Business Category :
                                                        <b><?= $row->category;?></b>
                                                    </p>
                                                    <p class="d-md-none mb-0">
                                                        <b><?= $row->category;?></b>
                                                    </p>
                                                    <p class="card-text">
                                                        <?= $avgstar; ?> <br> <small>(<?= $message; ?>)</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
</div>
