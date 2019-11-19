<body>
    <?php 
    /*
        $session_id = $this->session->userdata('user');            
        $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
        $u_id = $data['users']['user_id'];
        $pro_name = $data['users']['u_name'];
        $images = $data['users']['u_image'];

        $total_row = $this->datawork->count_all_note($session_id); 
        */
    ?>
    <?php
    /*
        $pro_image = $images;
        if($pro_image == NULL){
            $photo = base_url() . "assets/image/user.jpg";
        }
        else {
            $photo = base_url() . "assets/image/users/" . $pro_image;
        }
        */
        ?>
        
        <div class="d-none d-md-block sticky-top">
            <nav class="navbar navbar-expand-lg navbar-light bg-light p-1">
                <a class="navbar-brand ml-5 p-2 img-logo" href="<?= base_url(); ?>home">
                            <img src="<?= base_url('assets/image/demologo.png') ?>" class="img-logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link ml-3 p-2" href="<?= base_url(); ?>">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link ml-3 p-2" href="<?= base_url(); ?>">Used Cars</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link ml-3 p-2" href="<?= base_url('pw/contact/neeraj'); ?>">Contact Us</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="<?= base_url(); ?>dealer">Dealer Login</a>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>


        
        <div class="main col-lg-12 p-0 m-0 bg-light d-md-none fixed-top" id="main">
            <div class="">
                <div class="homeHeader">
                    <div class="wrapper">
                        <header class="headerBlock">
                            <div class="mobileMenu"></div>
                        </header>
                    </div>
                    <a href="<?= base_url(); ?>home">
                    <img src="<?= base_url('assets/image/demologo.png') ?>" class="img-logo">
                    </a>
                    <ul class="row nav mr-2 float-right">
                        <li class="nav-item">
                            <a class="nav-link p-3 mr-2 cursor-pointer" id="showitem"><i class="fa fa-search fa-lg"></i></a>
                        </li>
                        <li class="nav-item">
                            <!-- filter -->
                            <style>
                                .cursor-pointer {
                                    cursor: pointer;
                                }
                                .kaethik {
                                    margin-top: 60px;
                                }
                                .closebtn {
                                    float: right;
                                    cursor: pointer;
                                }
                              </style>
                              <!-- filter -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="d-md-none">
            <div class="wrapper">
                <div class="footerNavBlocks mobHide">
                    <div class="mobileNavBlocks">
                        <div class="footerEachNavCol">
                            <ul class="footerNavList">
                                <li class=""><a href="<?= base_url('home/index'); ?>" class="mobHome">Home</a></li>
                                <li><a class="" href="#">Hire Car</a></li>
                                <li><a class="" href="<?= base_url('home/selluser'); ?>">Sell a Vehicle</a></li>
                                <li><a class="" href="#">Edit/ Remove</a></li>
                                <li><a class="" href="<?= base_url('home/requestUsedCar'); ?>">Request a car</a></li>
                                <li><a class="" href="#">Support</a></li>
                                <li><a class="" href="<?= base_url('auth/dealerauthenticate'); ?>">Login</a></li>
                            </ul>
                        </div>
                        <style>
                            .nav-link[data-toggle].collapsed:after {
                                content: "▾";
                            }
                            .nav-link[data-toggle]:not(.collapsed):after {
                                content: "▴";
                            }
                        </style>
                        <?php $cartype222 = $this->admin_datawork->get_data('cartype',['cartypeStatus'=>'1']); ?>
                        <div class="footerEachNavCol businessMenu">
                            <h6 class="footerHeading ypFooterHeading">Cars</h6>
                            <ul class="nav flex-column flex-nowrap">

                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#submenu1" data-toggle="collapse" data-target="#submenu1">What are you looking for</a>
                                <div class="collapse" id="submenu1" aria-expanded="false">
                                    <ul class="footerNavList flex-column pl-2 nav">
                                        <?php foreach($cartype222 as $cartype222): ?>
                                        <li class="nav-item"><a class="nav-links" href="#">
                                        <?php echo $cartype222->cartypeName; ?>
                                        <?php $countcartype22 = $this->admin_datawork->count_data('car', ['carType' => $cartype222->cartypeId]); ?>
                                        (<?php echo $countcartype22; ?>)
                                        </a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </li>


                                
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#submenu2" data-toggle="collapse" data-target="#submenu2">Botswana City/Town</a>
                                <div class="collapse" id="submenu2" aria-expanded="false">
                                    <ul class="footerNavList flex-column pl-2 nav">
                                        <li class="nav-item"><a class="nav-links" href="#">

                                        </a></li>
                                    </ul>
                                </div>
                            </li>


                                
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#submenu3" data-toggle="collapse" data-target="#submenu3">Botswana Vehicle Sales</a>
                                <div class="collapse" id="submenu3" aria-expanded="false">
                                    <ul class="footerNavList flex-column pl-2 nav">
                                        <?php $data['brand22'] = $this->datawork->get_data('brand'); ?>
                            <?php foreach($data['brand22'] as $brand22): ?>
                                        <li class="nav-item"><a class="nav-links" href="#">
                                            <?= $brand22->brandName; ?> 
                                <?php $countcarbrand22 = $this->admin_datawork->count_data('car', ['carBrand' => $brand22->brandId]) ?>
                                    (<?php echo $countcarbrand22; ?>)
                                        </a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </li>



                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-margin-bottom"></div>
        <div class="clearfix"></div>

    <div id="b3" class="containerTab" style="display:none;">
        <div class="kaethik col-lg-12 p-3">
        <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h6>Filter</h6>
                </div>
                <div class="col-4">
                    <!--
                    <span onclick="this.parentElement.style.display='none'" class="closebtn text-dark"><i class="fa fa-times"></i></span>
                -->
                <a class="closebtn text-dark" id="hideitem"><i class="fa fa-times" ></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
        <form action="<?= base_url(); ?>home/filter" class="form" method="get">
        <div class="row">
            <?php 
        $navmenufecturer = $this->admin_datawork->get_data('menufecturer',['menufecturerStatus'=>'1']);
        $navtransmission = $this->admin_datawork->get_data('transmission',['transmissionStatus'=>'1']);
        $navcartype = $this->admin_datawork->get_data('cartype',['cartypeStatus'=>'1']);
        $navfuel = $this->admin_datawork->get_data('fuel',['fuelStatus'=>'1']);
        $navbrand = $this->admin_datawork->get_data('brand',['brandStatus'=>'1']);
        $navmodel = $this->admin_datawork->get_data('model',['modelStatus'=>'1']);
                            ?>
                            <div class="col-lg-3 col-6">
                                <div class="form-group">
                                    <select name="bodytype" id="bodytype" class="form-control form-control-sm">
                                        <option value=""  selected disabled1>Any Body Type</option>
                                        <?php foreach($navcartype as $navcartype): ?>
                                        <option value="<?= $navcartype->cartypeId ?>">
                                            <?= $navcartype->cartypeName ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="form-group">
                                    <select name="brand" id="brand" class="form-control form-control-sm">
                                        <option value=""  selected disabled1>Any Brand</option>
                                        <?php foreach($navbrand as $navbrand): ?>
                                        <option id="<?= $navbrand->brandId ?>" value="<?= $navbrand->brandId ?>"><?= $navbrand->brandName ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="form-group">
                                    <select name="model" id="model" class="form-control form-control-sm">
                                        <option value="" selected disabled1>Any Modal</option>
                                        <?php foreach($navmodel as $navmodel): ?>
                                        <option id="<?= $navmodel->modelBrand ?>" value="<?= $navmodel->modelId ?>"><?= $navmodel->modelName ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="form-group">
                                    <select name="transmission" id="transmission" class="form-control form-control-sm">
                                        <option value=""  selected disabled1>Any Transmission</option>
                                         <?php foreach($navtransmission as $navtransmission): ?>
                                        <option value="<?= $navtransmission->transmissionId ?>"><?= $navtransmission->transmissionName ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="form-group">
                                    <select name="fuel" id="fuel" class="form-control form-control-sm">
                                        <option value=""  selected disabled1>Any Type of fuel</option>
                                        <?php foreach($navfuel as $navfuel): ?>
                                        <option value="<?= $navfuel->fuelId ?>"><?= $navfuel->fuelName ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="form-group">
                                <select name="year" id="year" class="form-control form-control-sm">
                                    <option value=""  selected disabled1>Any Year</option>
                                    <?php foreach($navyear as $navyear): ?>
                                        <option value="<?= $navyear->yearName; ?>"><?= $navyear->yearName; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                   <input type="text" class="form-control form-control-sm" name="keyword" id="searchcar" placeholder="Keyword">
                                </div>
                            </div>
                            <div class="col-lg-4 offset-lg-4">
                                <div class="">
                                   <input type="submit" class="btn-block btn btn-sm btn-danger" value="Search">
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>
                <script>
                 $("#showitem").click(function(){
                        $('.containerTab').css('display','block');
                      });   
                 $("#hideitem").click(function(){
                        $('.containerTab').css('display','none');
                      });
                </script>
            