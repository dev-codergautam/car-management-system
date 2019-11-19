<div class="col-lg-12 d-none d-lg-block mt-4 mb-3">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <p class="mb-0"><strong>CAR BRANDS</strong></p>
            <p class="text-dark">
                <?php $data['brand'] = $this->datawork->get_data('brand'); ?>
                <?php foreach($data['brand'] as $brand): ?>
                <a href="<?= base_url() .'home/brand/'. $brand->brandSlug; ?>" class="text-white text-dark"><?= $brand->brandName; ?></a><span class="mr-2 ml-2">|</span>
                <?php endforeach; ?>
            </p>
            <p class="mb-0"><strong>CAR MODEL</strong></p>
            <p class="text-dark">
                <?php $models = $this->datawork->get_data('model', ['modelStatus' => '1']); ?>
                <?php foreach($models as $models): ?>
                <?php $modelName = $models->modelName; ?>
                <?php $modelSlug = $models->modelSlug; ?>

                <a href="<?= base_url().'/carmodel/' . $modelSlug; ?>" class="text-white text-dark"><?php echo $modelName; ?></a><span class="mr-2 ml-2">|</span>
    
            <?php endforeach; ?>
            </p>
        </div>
        <div class="col-lg-1"></div>
    </div>
</div>
<?php
date_default_timezone_set('Asia/Calcutta');
$hour = date('H');
if($hour < 6):
    $dayTerm = "night.mov";
elseif($hour > 6):
    $dayTerm = "day.mov";
elseif($hour > 17):
    $dayTerm = "night.mov";
else:
    $dayTerm = "day.mov";
endif;
// $dayTerm = ($hour > 17) ? "night.mov" : ($hour > 12) ? "day.mov" : "day.mov";
?>
<div id="fullScreenDiv" class="d-none d-lg-block">
    <div id="videoDiv">           
        <video preload="preload" id="video" autoplay="autoplay" loop="loop">  
            <source src="<?= base_url(); ?>assets/video/<?php echo $dayTerm; ?>" type="video/webm"></source>
            <source src="<?= base_url(); ?>assets/video/<?php echo $dayTerm; ?>" type="video/mp4"></source>
        </video>
    </div>
<div id="messageBox"> 
    <footer id="">

    <div class="container row m-0">
        <div class="col-lg-12 mt-5">
            <img src="<?= base_url(); ?>assets/image/demologo.png" alt="logo" style="width:150px;">
        </div>
        <div class="col-lg-8 mt-3">
            <p class="small text-justify">AutoGuide Botswana is Botswana's No 1 website of choice focused on the advertising of cars and other vehicle types across the country. Since it launch in 2010, AutoGuide has become the country’s most popular website for selling and buying used cars in Botswana. AutoGuide showcases hundreds of used cars from car dealers across the entire country. The mission of AutoGuide is to provide listings that best represent the second hand and pre-owned car and vehicle market. AutoGuide is a simple to use and trusted website that focuses purely on vehicle sales to bring you a dedicated portal for all car buying needs. The used vehicles in AutoGuide include a wide arrange of demo cars and other vehicles from trusted car dealers. AutoGuide provides the widest selection of automobiles in the used and pre-owned sector and includes all major and minor brands and vehicle types SUVs, sedans, bikes, Microbuses, and even tractors amongst other kinds of motor vehicle. The second-hand cars available on Auto Guide fulfil all price ranges for those wishing to purchase their next used vehicle, pre-owned car, or second hand automobile in Botswana. Auto Guide aims to provide listing of high quality to meet the car buying needs of all those wishing to purchase a used, pre-owned, or second hand car in Botswana.</p>
        </div>
        <div class="col-lg-2 mt-3">
            <h6 class="text-dark">Quick Links</h6>
            <hr class="hr-white">
            <a href="#" class="text-dark nav-link p-1 a">Car Hire</a>
            <a href="<?= base_url('home/selluser'); ?>" class="text-dark nav-link p-1 a">Sell a Vehicle</a>
            <a href="#" class="text-dark nav-link p-1 a">Edit/Remove</a>
            <a href="<?= base_url('home/requestUsedCar'); ?>" class="text-dark nav-link p-1 a">Request a used car</a>
            <a href="#" class="text-dark nav-link p-1 a">Support</a>
        </div>
        <div class="col-lg-2 mt-3">
            <h6 class="text-dark">Dealer Account</h6>
            <hr class="hr-white">
            <a href="<?= base_url('auth/dealerauthenticate'); ?>" target="_blank" class="text-dark nav-link p-1 a">My Account</a>
            <a href="<?= base_url('dealer/addCar'); ?>" class="text-dark nav-link p-1 a">Add Car</a>
        </div>
        </div>
        <!--
        <div class="col-lg-6 mt-3">
            <div class="col-lg-12 m-0 p-0">
                <div class="row justify-content-center text-center">
                    <a class="col-lg-6 col-12" href="<?= base_url(); ?>home">
                    <img src="<?= base_url(); ?>assets/image/biznirmanamnewwhite.svg" alt="Business Nirmanam" class="img-fluid">
                    </a>
                    <h5 class="font-weight-light mt-3 m-lg-3">BNM | India get connected freely with Biznirmanam</h5>
                </div>
            </div>
            <div class="col-lg-12 mt-3 m-0 p-0">
                <ul class="nav justify-content-center">
                    <ul class="nav mb-4 mb-lg-0">
                        <li class="mr-2">
                            <a href="https://www.facebook.com/webnirmanam">
                            <img src="<?= base_url(); ?>assets/social/facebook.svg" alt="facebook" style="width:40px">
                            </a>
                        </li>
                        <li class="mr-2">
                            <a href="https://www.linkedin.com/in/webnirmanam">
                            <img src="<?= base_url(); ?>assets/social/linkedin.svg" alt="linkedin" style="width:40px">
                            </a>
                        </li>
                        <li class="mr-2">
                            <a href="https://www.twitter.com/webnirmanam">
                            <img src="<?= base_url(); ?>assets/social/twitter.svg" alt="facebook" style="width:40px">
                            </a>
                        </li>
                        <li class="mr-2">
                            <a href="https://www.instagram.com/webnirmanam">
                            <img src="<?= base_url(); ?>assets/social/insta.svg" alt="instagram" style="width:40px">
                            </a>
                        </li>
                        <li class="mr-2">
                            <a href="https://plus.google.com/u/0/115145326568155447622">
                            <img src="<?= base_url(); ?>assets/social/googleplus.svg" alt="instagram" style="width:40px">
                            </a> 
                        </li>
                        <li class="mr-2">
                            <a href="https://www.youtube.com/channel/UCOSNYQ609tYMF9ZIR-TDDhQ">
                            <img src="<?= base_url(); ?>assets/social/youtube.svg" alt="instagram" style="width:40px">
                            </a>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    -->
</footer>
</div> 
</div> 


<footer class="d-md-none">

    <div class="container row m-0">
        <div class="col-lg-12 mt-5">
            <img src="<?= base_url(); ?>assets/image/demologo.png" alt="" style="width:150px;">
        </div>
        <div class="col-lg-8 mt-3">
            <p class="small text-justify">AutoGuide Botswana is Botswana's No 1 website of choice focused on the advertising of cars and other vehicle types across the country. Since it launch in 2010, AutoGuide has become the country’s most popular website for selling and buying used cars in Botswana. AutoGuide showcases hundreds of used cars from car dealers across the entire country. The mission of AutoGuide is to provide listings that best represent the second hand and pre-owned car and vehicle market. AutoGuide is a simple to use and trusted website that focuses purely on vehicle sales to bring you a dedicated portal for all car buying needs. The used vehicles in AutoGuide include a wide arrange of demo cars and other vehicles from trusted car dealers. AutoGuide provides the widest selection of automobiles in the used and pre-owned sector and includes all major and minor brands and vehicle types SUVs, sedans, bikes, Microbuses, and even tractors amongst other kinds of motor vehicle. The second-hand cars available on Auto Guide fulfil all price ranges for those wishing to purchase their next used vehicle, pre-owned car, or second hand automobile in Botswana. Auto Guide aims to provide listing of high quality to meet the car buying needs of all those wishing to purchase a used, pre-owned, or second hand car in Botswana.</p>
        </div>
        <div class="col-lg-2 mt-3">
            <h6 class="text-brand">Quick Links</h6>
            <hr class="hr-white">
            <a href="#" class="text-dark nav-link p-1 a">Car Hire</a>
            <a href="<?= base_url('home/selluser'); ?>" class="text-dark nav-link p-1 a">Sell a Vehicle</a>
            <a href="#" class="text-dark nav-link p-1 a">Edit/Remove</a>
            <a href="<?= base_url('home/requestUsedCar'); ?>" class="text-dark nav-link p-1 a">Request a used car</a>
            <a href="#" class="text-dark nav-link p-1 a">Support</a>
        </div>
        <div class="col-lg-2 mt-3">
            <h6 class="text-brand">Dealer Account</h6>
            <hr class="hr-white">
            <a href="<?= base_url('auth/dealerauthenticate'); ?>" target="_blank" class="text-dark nav-link p-1 a">My Account</a>
            <a href="<?= base_url('dealer/addCar'); ?>" class="text-dark nav-link p-1 a">Add Car</a>
        </div>
        </div>
</footer>

    <div class="col-lg-12 text-white text-center p-lg-4 p-3 mb-lg-0" style="background:#03102f;">
        <span class="small text-white"><span> &copy; 2018 </span><span class="ml-2">
        <a href="" target="_blank"><img src="<?= base_url(); ?>assets/image/demowhite.png" alt="" style="width:150px;"></a></span></span>
    </div>

<!-- js files  -->
<script src="<?= base_url(); ?>assets/js/ityped.min.js"></script>
<script src="<?= base_url(); ?>assets/js/photoswipe.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<!-- js files  -->
<?php
$session_id = $this->session->userdata('user');
$data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
?>
<?php
if($session_id){
    foreach ($data['profile'] as $row){} 
    $photo1 = $row->u_image;
    if($photo1 == NULL){
        $photo = base_url() . "assets/image/user.jpg";
    }
    else {
        $photo = base_url() . "assets/image/users/" . $photo1;
    }
}
else {
    "";
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-brand fixed-bottom p-1 d-md-none" id="hidefooter">
    <ul class="nav row justify-content-center">
        <li class="nav-item col-2">
            <a class="nav-link text-white" href="<?= base_url(); ?>home"><i class="fa fa-home fa-2x"></i></a>
        </li>
        <li class="nav-item col-2">
            <a class="nav-link text-white" href="<?= base_url(); ?>home/selluser"><i class="fa fa-car fa-2x"></i></a>
        </li>
        <li class="nav-item col-2">
            <a class="nav-link text-white" id="showitem"><i class="fa fa-search fa-2x"></i></a>
        </li>
        <li class="nav-item col-2">
            <a class="nav-link text-white" href="#"><i class="fa fa-users fa-2x"></i></a>
        </li>
        <?php if($this->session->userdata('user')): ?>
        <li class="nav-item col-2">
            <a class="nav-link text-white" href="<?= base_url('auth/dealerauthenticate'); ?>">
                <img src="<?= $photo; ?>" alt="<?= $row->u_image; ?>" class="small-image"></a>
        </li>
        <?php else: ?>
        <li class="nav-item col-2">
            <a class="nav-link text-white" href="<?= base_url('auth/dealerauthenticate'); ?>">
                <img src="<?= base_url(); ?>assets/image/em-boy-1.svg" alt="Profile Image" class="small-image"></a>
        </li>
        <?php endif; ?>
    </ul>
</nav>
 <script src="https://cdn.rawgit.com/artoodetoo/formToWizard/v0.0.2/jquery.formtowizard.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-en.min.js"></script>

<script>
    $("#inputID").focus(function() {
        $("#hidefooter").hide();
    });

    $("#inputID").focusOut(function() {
        $("#hidefooter").show();
    });

</script>

</body>

</html>
