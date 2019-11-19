<!DOCTYPE html>
<html lang="en">
<?php foreach ($profile as $row){} 
    $photo1 = $row->u_image;
    if($photo1 == NULL){
        $photo = base_url() . "assets/image/user.jpg";
    }
    else {
        $photo = base_url() . "assets/image/users/" . $photo1;
    }
?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Business Nirmanam helps you to list your free wedding events decoration dj sound system caterers flowerist card designers drivers photographers bride groom make-up in a proffesional manner in Bihar Purnea do join us freely.">
    <meta name="keywords" content="bnm, BNM, bnm purnea, bnm bihar, bnm india, biznirmanam, business, free of cost, free, list, my business, free list my business, near me, near by, events, management, card, dj, sound system, wedding dresses, tent in purnea, best wedding sound system, event management in purnea, event management, purnea, event management purnea">
    <meta name="author" content="Business Nirmanam">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Event Business </title>
    <link rel="stylesheet" href="<?= base_url('assets/css/litera.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css');?>">

    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= base_url(); ?>/assets/image/favicon.ico" type="image/x-icon">

    <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>

    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/default-skin.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/photoswipe.css" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top p-3">
        <a class="col-md-2 col-9 d-none d-lg-block" href="<?= base_url(); ?>home">
            <img src="<?= base_url(); ?>assets/image/biznirmanamnewblack.svg" alt="Business Nirmanam" class="img-fluid">
        </a>
        <a class="col-4 d-md-none" href="<?= base_url(); ?>home">
            <img src="<?= base_url(); ?>assets/image/biznirmanamsmall.svg" alt="Business Nirmanam" class="img-fluid">
        </a>
        <?php 
            $session_id = $this->session->userdata('user');
            $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

            $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
            $u_id = $data['users']['user_id'];
            $pro_name = $data['users']['u_name'];

            $total_row = $this->datawork->count_all_note($session_id); 
        ?>
        <div class="col-2 d-md-none">
            <a class="nav-link" href="<?= base_url(); ?>user/notification"><span class="lnr lnr-alarm h3"></span></a>
            <span class="badge badge-pill badge-danger small-noti"><?= $total_row; ?></span>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon col-md-10 col-3"></span>
  </button>
        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link ml-3 p-2" href="<?= base_url(); ?>home/allServices">Services/ Products</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link ml-3 p-2" href="<?= base_url(); ?>home/advertisement">Advertisements</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link ml-3 p-2 bg-info text-white" href="<?= base_url(); ?>user/addAdvertisement">Post Ad</a>
                </li>
                <li class='nav-item active'>
                    <a class='nav-link ml-3 p-2 bg-danger text-white' href='<?= base_url(); ?>user/addNew'>Free Listing</a>
                </li>

                <li class="nav-item active d-md-none  ml-3 p-1">
                    <a class="nav-link" href="<?= base_url(); ?>user/servicesStep1">Add Product/ Service</a>
                </li>

                <?php if($this->session->userdata('user')){ ?>

                <li class="nav-item active  ml-3 p-1 d-none d-lg-block">
                    <a class="nav-link" href="<?= base_url(); ?>user/profile">
                            <img src="<?= $photo; ?>" alt="<?= $pro_name; ?>" class="small-image"> <?= $pro_name; ?></a>
                </li>
                <!--
                        <li class="nav-item active d-md-none  ml-3 mr-3 p-1">
                            <a class="nav-link" href="<?= base_url(); ?>user"><span class="lnr lnr-briefcase"></span> My Business</a>
                        </li>
                        <li class="nav-item active d-md-none  ml-3 mr-3 p-1">
                            <a class="nav-link" href="<?= base_url(); ?>user/addNew"><span class="lnr lnr-file-add"></span> Add Business</a>
                        </li>
                        -->
                <li class="nav-item active d-md-none  ml-3 p-1">
                    <a class="nav-link" href="<?= base_url(); ?>user/myAds">My Advertisements</a>
                </li>
                <li class="nav-item active d-md-none  ml-3 p-1">
                    <a class="nav-link" href="<?= base_url(); ?>user/services">My Product/ Service</a>
                </li>
                <li class="nav-item active d-md-none  ml-3 p-1">
                    <a class="nav-link" href="<?= base_url(); ?>user">My Business</a>
                </li>
                <!--
                        <li class="nav-item active d-md-none  ml-3 mr-3 p-1">
                            <a class="nav-link" href="<?= base_url(); ?>user/gallery"><span class="lnr lnr-picture"></span> Gallery</a>
                        </li>
                        -->
                <li class="nav-item active ml-3 p-1">
                    <a class="nav-link" href="<?= base_url(); ?>user/logout">Logout</a>
                </li>
                <?php  } else { ?>
                <li class='nav-item active'>
                    <a class='nav-link ml-3 p-2' href='<?= base_url(); ?>home/login'>Login</a>
                </li>
                <?php } ?>

            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-brand d-none d-lg-block">
        <ul class="navbar-nav justify-content-center">
            <li class="nav-item active mr-2">
                <a class="nav-link" href="<?= base_url(); ?>user/myAds"><span class="lnr lnr-inbox"></span> My Advertisements</a>
            </li>
            <li class="nav-item active mr-2">
                <a class="nav-link" href="<?= base_url(); ?>user"><span class="lnr lnr-briefcase"></span> My Business</a>
            </li>
            <li class="nav-item active mr-2">
                <a class="nav-link" href="<?= base_url(); ?>user/addNew"><span class="lnr lnr-file-add"></span> Add new Business</a>
            </li>
            <li class="nav-item active mr-2">
                <a class="nav-link" href="<?= base_url(); ?>user/addAdvertisement"><span class="lnr lnr-pencil"></span> Add Advertise Now</a>
            </li>
            <li class="nav-item active mr-2">
                <a class="nav-link" href="<?= base_url(); ?>user/gallery"><span class="lnr lnr-picture"></span> Gallery</a>
            </li>
            <li class="nav-item active mr-2">
                <a class="nav-link" href="<?= base_url(); ?>user/setting"><span class="lnr lnr-cog"></span> Setting</a>
            </li>
        </ul>
    </nav>
    <div class="col-lg-12 mt-3 mb-3">
        <div class="row">
            <div class="col-lg-3">
                <?php include_once(APPPATH."views/user/include/sidebar.php"); ?>
            </div>
