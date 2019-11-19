<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta property="fb:page_id" content="210289026237346" />  -->
    <meta property="fb:app_id" content="210289026237346" />
    <?php foreach($names as $rows):?>
    <meta property="og:url" content="<?= base_url(); ?>home/business/<?= $rows->name_slug; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= ucwords($rows->business_name); ?>" />
    <meta property="og:description" content="<?= $rows->description;?>" />
    <meta property="og:image" content="<?= base_url(); ?>assets/clients/<?= $rows->pic; ?>" />
    <?php endforeach; ?>
    <?php
        $data['cate'] = $this->datawork->get_id('category', ['title_slug' => $rows->category]);
        $category_name = $data['cate']['title'];
    ?>
        <title>
            <?= ucwords($rows->business_name) ." ".  $rows->city . ", " . $rows->state . " - " . $category_name; ?>
        </title>
        <meta name="description" content="<?= $rows->description;?>">
        <meta name="author" content="<?= $rows->business_name;?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= base_url('assets/css/litera.min.css');?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/style.css');?>">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/default-skin.css" type="text/css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/photoswipe.css" type="text/css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/card.css" type="text/css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/webnirmanam.css" type="text/css">

        <link rel="shortcut icon" href="<?= base_url(); ?>/assets/image/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?= base_url(); ?>/assets/image/favicon.ico" type="image/x-icon">

        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Google Add Sense -->
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-2867182879802044",
                enable_page_level_ads: true
            });

        </script>
</head>
<?php include_once(APPPATH."views/includes/navbar.php"); ?>
<div class="col-lg-12 mt-3 mb-3">
    <div class="row m-0">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <?= $this->session->flashdata('error'); ?>
                        <?= $this->session->flashdata('comment'); ?>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <div class="col-lg-9 box-shadow bg-white" style="margin-top:50px;padding:30px;">
            <div class="row">
                <?php foreach($cat as $rows):?>
                <?php
                if($rows->website == NULL){
                    $website = "N/A";
                }
                else {
                    $website = $rows->website;
                }
                $data =  $this->datawork->get_data('users',"user_id = '$rows->u_id'");
                    foreach($data as $row){}
                    $photo1 = $row->u_image;
                    if($photo1 == NULL){
                        $photo = base_url() . "assets/image/user.jpg";
                    }
                    else {
                        $photo = base_url() . "assets/image/users/" . $row->u_image;
                    }
                ?>
                    <div class="col-lg-8" style="margin-top:-60px;">
                        <div class="mybizzpic box-shadow" style="background-image:url(<?= base_url('assets/clients/'.$rows->pic);?>);">
                        </div>
                    </div>
                    <div class="col-lg-4 pt-3 mb-3">
                        <h5 class="mb-3">
                            <?= ucwords($rows->business_name);?>
                        </h5>
                        <p class="h5">
                            <a href="<?= base_url(); ?>home/profile/<?= $rows->u_id; ?>" class="nav-link p-0"><img src="<?= $photo; ?>" alt="<?= $row->u_image; ?>" class="small-image"> <?= $row->u_name;?></a>
                        </p>
                        <hr>
                        <p class="ellipses">
                            <?= $rows->description;?>
                        </p>
                        <?php
                            $session_id = $this->session->userdata('user');
                            $data['rating'] = $this->datawork->get_id('rating', ['r_userid' => $session_id, 'r_bizzid' => $rows->id]);
                            $r_bizzid = $data['rating']['r_bizzid'];
                            $r_userid = $data['rating']['r_userid'];
                        
                            $bizz_id = $rows->id;
                            $user_id = $rows->u_id;
                            $c = $this->datawork->count_data('rating',['r_bizzid' => $bizz_id]); ?>
                            <?php 
                            // rate count in average
                                foreach ($totalrate as $totalrate){
                                    if($rows->id == $totalrate->r_bizzid){
                                         $array[] = $totalrate->rate;
                                    }
                                    else{
                                        $i = 0;
                                    }
                                }
                        if(!empty($array)){
                            $totalbizzrate = array_sum($array);
                                $avg = $totalbizzrate / $c;
                        }else{
                            $avg = 0;
                        }
                        
                        if($avg == ""){
                            $avgstar = "<i class='fa fa-star-o fa-2x text-danger ml-2'></i>
                            <i class='fa fa-star-o fa-2x text-danger ml-2'></i>
                            <i class='fa fa-star-o fa-2x text-danger ml-2'></i>
                            <i class='fa fa-star-o fa-2x text-danger ml-2'></i>
                            <i class='fa fa-star-o fa-2x text-danger ml-2'></i>";
                        }
                        elseif($avg <= 1){
                            $avgstar = "<i class='fa fa-star fa-2x text-danger ml-2'></i>
                            <i class='fa fa-star-o fa-2x text-danger ml-2'></i>
                            <i class='fa fa-star-o fa-2x text-danger ml-2'></i>
                            <i class='fa fa-star-o fa-2x text-danger ml-2'></i>
                            <i class='fa fa-star-o fa-2x text-danger ml-2'></i>";
                        }
                        elseif($avg <= 1.5){
                            $avgstar = "<i class='fa fa-star fa-2x text-danger ml-2'></i>
                            <i class='fa fa-star-half-o fa-2x text-danger ml-2'></i>
                            <i class='fa fa-star-o fa-2x text-danger ml-2'></i>
                            <i class='fa fa-star-o fa-2x text-danger ml-2'></i>
                            <i class='fa fa-star-o fa-2x text-danger ml-2'></i>";
                        }
                        elseif($avg <= 2){
                            $avgstar = "<i class='fa fa-star fa-2x text-danger ml-2'></i>
                            <i class='fa fa-star fa-2x text-danger ml-2'></i>
                            <i class='fa fa-star-o fa-2x text-danger ml-2'></i>
                            <i class='fa fa-star-o fa-2x text-danger ml-2'></i>
                            <i class='fa fa-star-o fa-2x text-danger ml-2'></i>";
                        }
                        elseif($avg <= 2.5){
                            $avgstar = "<i class='fa fa-star fa-2x text-green ml-2'></i>
                            <i class='fa fa-star fa-2x text-green ml-2'></i>
                            <i class='fa fa-star-half-o fa-2x text-green ml-2'></i>
                            <i class='fa fa-star-o fa-2x text-green ml-2'></i>
                            <i class='fa fa-star-o fa-2x text-green ml-2'></i>";
                        }
                        elseif($avg <= 3){
                            $avgstar = "<i class='fa fa-star fa-2x text-green ml-2'></i>
                            <i class='fa fa-star fa-2x text-green ml-2'></i>
                            <i class='fa fa-star fa-2x text-green ml-2'></i>
                            <i class='fa fa-star-o fa-2x text-green ml-2'></i>
                            <i class='fa fa-star-o fa-2x text-green ml-2'></i>";
                        }
                        elseif($avg <= 3.5){
                            $avgstar = "<i class='fa fa-star fa-2x text-green ml-2'></i>
                            <i class='fa fa-star fa-2x text-green ml-2'></i>
                            <i class='fa fa-star fa-2x text-green ml-2'></i>
                            <i class='fa fa-star-half-o fa-2x text-green ml-2'></i>
                            <i class='fa fa-star-o fa-2x text-green ml-2'></i>";
                        }
                        elseif($avg <= 4){
                            $avgstar = "<i class='fa fa-star fa-2x text-warning ml-2'></i>
                            <i class='fa fa-star fa-2x text-warning ml-2'></i>
                            <i class='fa fa-star fa-2x text-warning ml-2'></i>
                            <i class='fa fa-star fa-2x text-warning ml-2'></i>
                            <i class='fa fa-star-o fa-2x text-warning ml-2'></i>";
                        }
                        elseif($avg <= 4.5){
                            $avgstar = "<i class='fa fa-star fa-2x text-warning ml-2'></i>
                            <i class='fa fa-star fa-2x text-warning ml-2'></i>
                            <i class='fa fa-star fa-2x text-warning ml-2'></i>
                            <i class='fa fa-star fa-2x text-warning ml-2'></i>
                            <i class='fa fa-star-half-o fa-2x text-warning ml-2'></i>";
                        }
                        else{
                            $avgstar = "<i class='fa fa-star fa-2x text-warning ml-2'></i>
                            <i class='fa fa-star fa-2x text-warning ml-2'></i>
                            <i class='fa fa-star fa-2x text-warning ml-2'></i>
                            <i class='fa fa-star fa-2x text-warning ml-2'></i>
                            <i class='fa fa-star fa-2x text-warning ml-2'></i>";
                        }
                        ?>
                            <?php
                        // star rated by user
                        $data['myrate'] = $this->datawork->get_id('rating', ['r_userid' => $session_id, 'r_bizzid' => $rows->id]);
                        $showmyrate = $data['myrate']['rate'];
                        // show the star given by the user
                        if($showmyrate == 1){
                            $myrate = "<i class='fa fa-star fa-lg text-danger ml-2'></i>
                            <i class='fa fa-star-o fa-lg text-danger ml-2'></i>
                            <i class='fa fa-star-o fa-lg text-danger ml-2'></i>
                            <i class='fa fa-star-o fa-lg text-danger ml-2'></i>
                            <i class='fa fa-star-o fa-lg text-danger ml-2'></i>";
                        }
                        elseif($showmyrate == 2){
                            $myrate = "<i class='fa fa-star fa-lg text-danger ml-2'></i>
                            <i class='fa fa-star fa-lg text-danger ml-2'></i>
                            <i class='fa fa-star-o fa-lg text-danger ml-2'></i>
                            <i class='fa fa-star-o fa-lg text-danger ml-2'></i>
                            <i class='fa fa-star-o fa-lg text-danger ml-2'></i>";
                        }
                        elseif($showmyrate == 3){
                            $myrate = "<i class='fa fa-star fa-lg text-green ml-2'></i>
                            <i class='fa fa-star fa-lg text-green ml-2'></i>
                            <i class='fa fa-star fa-lg text-green ml-2'></i>
                            <i class='fa fa-star-o fa-lg text-green ml-2'></i>
                            <i class='fa fa-star-o fa-lg text-green ml-2'></i>";
                        }
                        elseif($showmyrate == 4){
                            $myrate = "<i class='fa fa-star fa-lg text-warning ml-2'></i>
                            <i class='fa fa-star fa-lg text-warning ml-2'></i>
                            <i class='fa fa-star fa-lg text-warning ml-2'></i>
                            <i class='fa fa-star fa-lg text-warning ml-2'></i>
                            <i class='fa fa-star-o fa-lg text-warning ml-2'></i>";
                        }
                        else{
                            $myrate = "
                            <i class='fa fa-star fa-lg text-warning ml-2'></i>
                            <i class='fa fa-star fa-lg text-warning ml-2'></i>
                            <i class='fa fa-star fa-lg text-warning ml-2'></i>
                            <i class='fa fa-star fa-lg text-warning ml-2'></i>
                            <i class='fa fa-star fa-lg text-warning ml-2'></i>";
                        }
                        ?>
                                <?php 
                        if($this->session->userdata('user')){
                            if($bizz_id == $r_bizzid && $session_id == $r_userid) { ?>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-12"><span class="h1"><?= substr($avg, 0, 3); ?> </span><span class="h6">out of 5 (<?= $c ?> Ratings)</span>
                                        </div>
                                        <div class="col-12">
                                            <?= $avgstar; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 h6 mt-3"> Your rate
                                    <?= $myrate; ?>
                                </div>
                                <?php } else { ?>
                                <div class="stars">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-12"><span class="h1"><?= substr($avg, 0, 3); ?> </span><span class="h6">out of 5 (<?= $c ?> Ratings)</span>
                                            </div>
                                            <div class="col-12">
                                                <?= $avgstar; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?= form_open('home/rate/' . $rows->name_slug); ?>
                                        <!--
                                            <input type="submit" class="btn btn-sm btn-outline-dark float-right" value="Rate">
                                            -->
                                        <input class="star star-5" id="star-5" type="radio" value="5" name="star" onchange="this.form.submit()" />
                                        <label class="star star-5" for="star-5" title="Excellent"></label>
                                        <input class="star star-4" id="star-4" type="radio" value="4" name="star" onchange="this.form.submit()" />
                                        <label class="star star-4" for="star-4" title="Good"></label>
                                        <input class="star star-3" id="star-3" type="radio" value="3" name="star" onchange="this.form.submit()" />
                                        <label class="star star-3" for="star-3" title="Average"></label>
                                        <input class="star star-2" id="star-2" type="radio" value="2" name="star" onchange="this.form.submit()" />
                                        <label class="star star-2" for="star-2" title="Awful"></label>
                                        <input class="star star-1" id="star-1" type="radio" value="1" name="star" onchange="this.form.submit()" />
                                        <label class="star star-1" for="star-1" title="Bad"></label>

                                        <input type="text" value="<?= $session_id; ?>" name="userid" hidden>
                                        <input type="text" value="<?= $rows->id; ?>" name="bizzid" hidden>
                                        <!-- for notification of rating -->
                                        <?php 
                                        $data['raters_name'] = $this->datawork->get_id('users', ['user_id' => $this->session->userdata('user')]);
                                        $rater_name = $data['raters_name']['u_name'];                                  
                                        ?>
                                        <input type="text" value='<?= $rater_name; ?> has rated on your business "<?= $rows->business_name; ?>"' name="notification" hidden>
                                        <input type="text" value="<?= $rows->u_id;  ?>" name="biz_userid" hidden="hidden">
                                        <?= form_close(); ?>
                                </div>
                                <?php } } else { ?>
                                <div class="stars">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-12"><span class="h1"><?= substr($avg, 0, 3); ?> </span><span class="h6">out of 5 (<?= $c ?> Ratings)</span>
                                            </div>
                                            <div class="col-12">
                                                <?= $avgstar; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?= form_open('home/rate/'  . $rows->name_slug); ?>
                                        <!--
                                            <button type="button" class="btnbtn btn-sm btn-outline-dark float-right mt-3" data-toggle="modal" data-target="#exampleModal"> Rate </button>
                                            -->
                                        <input class="star star-5" id="star-5" type="radio" value="5" name="star" data-toggle="modal" data-target="#exampleModal" />
                                        <label class="star star-5" for="star-5" title="Excellent"></label>
                                        <input class="star star-4" id="star-4" type="radio" value="4" name="star" data-toggle="modal" data-target="#exampleModal" />
                                        <label class="star star-4" for="star-4" title="Good"></label>
                                        <input class="star star-3" id="star-3" type="radio" value="3" name="star" data-toggle="modal" data-target="#exampleModal" />
                                        <label class="star star-3" for="star-3" title="Average"></label>
                                        <input class="star star-2" id="star-2" type="radio" value="2" name="star" data-toggle="modal" data-target="#exampleModal" />
                                        <label class="star star-2" for="star-2" title="Poor"></label>
                                        <input class="star star-1" id="star-1" type="radio" value="1" name="star" data-toggle="modal" data-target="#exampleModal" />
                                        <label class="star star-1" for="star-1" title="Awful"></label>

                                        <input type="text" value="<?= $session_id; ?>" name="userid" hidden>
                                        <input type="text" value="<?= $rows->id; ?>" name="bizzid" hidden>

                                        <?= form_close(); ?>
                                </div>
                                <?php } ?>


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">You need to login here</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                            </div>
                                            <div class="modal-body">
                                                <?= form_open('home/rate_login/' . $rows->name_slug); ?>
                                                    <div class="form-group col-12">
                                                        <label for="text" class="text-dark">Email or Phone no</label>
                                                        <input class="form-control bg-white" type="text" name="username" value="<?= set_value('username');?>" id="example-text-input" required>
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label for="text" class="text-dark">Password</label>
                                                        <input class="form-control bg-white" type="password" name="password" id="example-text-input">
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <a href="<?= base_url(); ?>home/signup"><span class="float-right"><i class="fa fa-check text-muted"></i> Don't have an account yet! Click here to have one</span></a>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <input class="btn btn-outline-primary" type="submit" name="submit" value="Login">
                                                <?= form_close(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end modal -->
                    </div>
                    <div class="col-lg-12 mt-3 mb-3 d-md-none">
                        <div class="row">
                            <?php if(!empty($rows->contact1)): ?>
                            <div class="col-6 col-lg-3 p-1">
                                <a class="btn btn-outline-info btn-block rounded-0" href="https://api.whatsapp.com/send?phone=+91<?= $rows->contact1;?>"><i class="fa fa-whatsapp"></i> Message</a>
                            </div>
                            <?php else: ?>
                            <?php endif; ?>
                            <?php if(!empty($rows->contact)): ?>
                            <div class="col-6 col-lg-3 p-1">
                                <a class="btn btn-info btn-block rounded-0" href="tel:<?= $rows->contact;?>"><i class="fa fa-phone"></i> Call Now</a>
                            </div>
                            <?php else: ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-12 p-lg-5 p-2">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <h2 class="h6 text-brand">Business Details</h2>
                                <div class="hrbrand"></div>
                                <p><i class="fa fa-check"></i> Business :
                                    <span class="text-uppercase"><?= $rows->category;?></span>
                                </p>
                                <p><i class="fa fa-check"></i> Working Experience :
                                    <?= $rows->experience;?>
                                </p>
                                <p><i class="fa fa-check"></i> Address :
                                    <?= $rows->address;?>
                                </p>
                                <p><i class="fa fa-check"></i> City :
                                    <?= $rows->city;?>
                                </p>
                                <p><i class="fa fa-check"></i> State :
                                    <?= $rows->state;?>
                                </p>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <h2 class="h6 text-brand">Contact Details</h2>
                                <div class="hrbrand"></div>
                                <p><i class="fa fa-phone"></i>
                                    <a class="" href="tel:<?= $rows->contact;?>"><?= $rows->contact;?></a>
                                </p>
                                <p><i class="fa fa-whatsapp"></i>
                                    <?= $rows->contact1;?>
                                </p>
                                <p><i class="fa fa-envelope"></i>
                                    <a href="mailto:<?= $rows->email; ?>"><?= $rows->email; ?></a>
                                </p>
                                <p><i class="fa fa-globe"></i>
                                    <a href="<?= $website; ?>" target="_blank">
                                        <?= $website; ?>
                                    </a>
                                </p>
                            </div>

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h6 class="text-brand">Share Now</h6>
                                        <div class="hrbrand"></div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <a href="whatsapp://send?text=<?= base_url(); ?>home/business/<?= $rows->name_slug; ?>" class="mr-3"><img src="<?= base_url(); ?>assets/image/square-whatsapp.svg" alt="Share" style="width:40px;"></a>

                                            <!--
                                                <a class="mr-3" href="http://www.facebook.com/sharer.php?u=<?= base_url(); ?>home/business/<?= $rows->name_slug; ?>" target="_blank">
                                                <img src="<?= base_url(); ?>assets/image/square-facebook.svg" alt="Share" style="width:40px;">
                                            </a>
-->
                                            <div class="fb-share-button mr-3" data-href="<?= base_url(); ?>home/business/<?= $rows->name_slug; ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?= base_url(); ?>home/business/<?= $rows->name_slug; ?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><img src="<?= base_url(); ?>assets/image/square-facebook.svg" alt="Share" style="width:40px;"></a></div>

                                            <a class="mr-3" href="http://twitter.com/share?text=[<?= $rows->business_name; ?>]&url=<?= base_url(); ?>home/business/<?= $rows->name_slug; ?>" target="_blank">
                                                <img src="<?= base_url(); ?>assets/image/square-twitter.svg" alt="Share" style="width:40px;">
                                            </a>

                                            <a class="mr-3" href="https://plus.google.com/share?url=<?= base_url(); ?>home/business/<?= $rows->name_slug; ?>" target="_blank">
                                                <img src="<?= base_url(); ?>assets/image/square-gp.svg" alt="Share" style="width:40px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
            </div>

        </div>
        <div class="col-lg-3 d-none d-lg-block">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Business -->
            <ins class="adsbygoogle" style="display:inline-block;width:300px;height:600px" data-ad-client="ca-pub-2867182879802044" data-ad-slot="1341917395"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});

            </script>

            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- event home box -->
            <ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-2867182879802044" data-ad-slot="6778911050"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});

            </script>
        </div>
    </div>
</div>

<div class="col-lg-12 d-none d-lg-block text-center">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- business-gallery -->
    <ins class="adsbygoogle" style="display:inline-block;width:970px;height:90px" data-ad-client="ca-pub-2867182879802044" data-ad-slot="2686912360"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});

    </script>
</div>

<div class="col-lg-12 d-md-none text-center">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- mobile banner -->
    <ins class="adsbygoogle" style="display:inline-block;width:320px;height:50px" data-ad-client="ca-pub-2867182879802044" data-ad-slot="9427865948"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});

    </script>
</div>

<div class="col-lg-12 mt-3 card border-0 rounded-0">
    <div class="col-lg-12 mt-2 text-center p-2">
        <h5 class="text-uppercase">Gallery</h5>
        <hr class="hrbrand">
    </div>
    <div class="row my-gallery">
        <?php foreach($img as $img): ?>
        <?php list($width, $height, $type, $attr) = getimagesize(base_url() . "assets/image/gallery/" . $img->g_image); ?>
        <figure class="col-lg-3 col-6 mt-3" itemprop="associatedMedia" itemscope>
            <a href="<?= base_url(); ?>assets/image/gallery/<?= $img->g_image; ?>" itemprop="contentUrl" data-size="<?= $width ." x ". $height ?>">
                    <img src="<?= base_url(); ?>assets/image/gallery/<?= $img->g_image; ?>" itemprop="thumbnail" alt="Image description" class="img-fluid"/>
                    </a>
            <figcaption itemprop="caption description" class="text-center">

            </figcaption>
        </figure>
        <?php endforeach; ?>
    </div>
</div>

<div class="col-lg-12 mt-3">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="col-lg-12 p-3 p-lg-5">
                <div class="row">
                    <?php $count_cmmnt = $this->datawork->count_data('comments',['com_bizzid' => $bizz_id]); ?>
                    <?php
                    if($count_cmmnt == 0){
                        $com_count = "Be the first one to comment !";
                    }
                    elseif($count_cmmnt == 1){
                        $com_count = $count_cmmnt . " Comment";
                    }
                    else{
                        $com_count = $count_cmmnt . " Comments";
                    }
                    ?>
                        <div class="col-lg-12 p-3">
                            <h5>
                                <?= $com_count; ?>
                            </h5>
                        </div>
                        <div class="col-lg-1 col-12 mb-2 text-center">
                            <img src="<?= base_url(); ?>assets/image/User2.jpg" alt="default" width="70px">
                        </div>



                        <?php if($this->session->userdata('user')){ ?>
                        <div class="col-lg-11 col-12 mb-2">
                            <?= form_open('home/do_comment_user/' . $rows->name_slug); ?>
                                <textarea id="" rows="3" class="form-control" name="c_cmmnt" placeholder="Enter your comment..."><?= set_value('c_cmmnt') ?></textarea>

                                <?php 
                        $data['cmmntr_name'] = $this->datawork->get_id('users', ['user_id' => $this->session->userdata('user')]);
                        $cmmntr_name = $data['cmmntr_name']['u_name'];                                  
                        ?>

                                <input type="text" name="cmmnt_name" value='<?= $cmmntr_name; ?> has reviewed on your business "<?= $rows->business_name; ?>"' hidden>
                                <input type="text" name="bizz_userid" value="<?= $rows->u_id; ?>" hidden>

                                <?= form_error('c_cmmnt'); ?>
                                    <input type="text" value="<?= $session_id; ?>" name="c_userid" hidden>
                                    <input type="text" value="<?= $rows->id; ?>" name="c_bizzid" hidden>
                                    <div class="form-group mt-4">
                                        <input type="submit" class="btn btn-outline-primary" Value="Submit Comment">
                                    </div>
                        </div>
                        <?= form_close(); ?>
                            <?php } else { ?>
                            <div class="col-lg-11 col-12 mb-2">
                                <?= form_open('home/do_comment/' . $rows->name_slug); ?>
                                    <textarea id="" rows="3" class="form-control" name="c_cmmnt" placeholder="Enter your comment..."><?= set_value('c_cmmnt'); ?></textarea>
                                    <?= form_error('c_cmmnt'); ?>
                            </div>
                            <div class="col-lg-1 col-2">
                            </div>
                            <div class="col-lg-11">
                                <div class="row">
                                    <div class="col-lg-8 p-lg-3 p-3">
                                        <div class="form-group">
                                            <h5 class="text-muted">Comment as a guest</h5>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="c_name" placeholder="Name" value="<?= set_value('c_name'); ?>">
                                            <?= form_error('c_name'); ?>
                                                <input type="text" name="c_bizzid" value="<?= $rows->id; ?>" hidden>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="c_email" placeholder="Email / Contact" value="<?= set_value('c_email'); ?>">
                                            <?= form_error('c_email'); ?>
                                                <input type="text" name="cmmnt_name" value='<?= set_value(' c_name '); ?> has reviewed on your business "<?= $rows->business_name; ?>"' hidden>
                                                <input type="text" name="bizz_userid" value="<?= $rows->u_id; ?>" hidden>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-outline-primary" Value="Submit Comment">
                                        </div>
                                        <?= form_close(); ?>
                                    </div>
                                    <div class="col-lg-4 text-center">
                                        <p class="mt-lg-5"><b>or,</b></p>
                                        <div class="text-center">
                                            <button type="button" class="text-brand" data-toggle="modal" data-target="#exampleModal" style="background:none;border:0;font-size:20px;font-weight:700;padding:5px;"> Login on website </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                </div>
            </div>
            <?php foreach($comments as $rows): ?>
            <?php 
            $data['users'] = $this->datawork->get_id('users', ['user_id' => $rows->com_userid]);
            $username = $data['users']['u_name'];
            $com_userimage = $data['users']['u_image'];
            ?>
            <?php 
            if(empty($rows->com_name && $rows->com_email)){
                $name = $username;
            } else {
                $name = $rows->com_name;
            } ?>
            <?php 
            if($com_userimage == NULL){
                $cmmtr_image = base_url() . "assets/image/User2.jpg";
            } else {
                $cmmtr_image = base_url() . "assets/image/users/" . $com_userimage;
            } ?>
            <div class="col-lg-12 card box-shadow p-3 p-lg-4 pl-lg-5 mt-3">
                <div class="row">
                    <div class="col-lg-12 col-12 mb-2 p-2">
                        <div class="row">
                            <div class="col-lg-1 col-3">
                                <img src="<?= $cmmtr_image; ?>" class="rounded-circle" alt="" width="70px" height="70px">
                            </div>
                            <div class="col-lg-11 col-8">
                                <h5 class="mt-3">
                                    <?= $name; ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12 mb-2">
                        <p>
                            <?= $rows->com_message; ?>
                        </p>
                        <p><i class="fa fa-clock-o fa-lg"></i>
                            <?= $rows->com_date; ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="col-lg-1"></div>
    </div>
</div>

<div class="col-lg-12 mt-3 mb-3">
    <div class="bg-white">
        <div class="row">
            <div class="col-lg-12 p-lg-5 text-center">
                <h6 class="text-uppercase">MORE <?= $category_name;?></h6>
                <hr class="hrbrand">
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="row">
                    <?php foreach($all as $row): ?>
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
                        $message = "<i class='fa fa-thumbs-up'></i> 0";
                    }
                    elseif($c == 1){
                        $message = " <i class='fa fa-thumbs-up'></i> " . $c;
                    }
                    else{
                        $message = " <i class='fa fa-thumbs-up'></i> " . $c;
                    }
                ?>
                       <?php
                    $data['cate'] = $this->datawork->get_id('category', ['title_slug' => $row->category]);
                    $category_name = $data['cate']['title'];
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
                        }else{
                            $avg = 0;
                        }
                        ?>

                                <div class="col-lg-3 col-6 mb-4">
                                    <a href="<?= base_url(); ?>home/business/<?= $row->name_slug;?>" class="nav-link p-0" title="<?= ucwords($row->business_name) ." ".  $row->city . ", " . $row->state . " - " . $category_name; ?>">
                                        <div class="card border-0 rounded-0 box-shadow box-shadow2 text-center">
                                            <div class="b-cards" style="background-image:url(<?= $photo; ?>)"></div>
                                            <div class=" d-none d-lg-block">
                                                <div class="b-cate">
                                                    <p class="mb-0 p-0">
                                                        <?= $category_name;?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-body businesscard mt-2">
                                                <h6 class="text-brand text-truncate">
                                                    <?= ucwords($row->business_name);?>
                                                </h6>
                                                <p class="card-text text-truncate mb-1">
                                                    <?= "$row->address, $row->city";?>
                                                </p>
                                                <p class="card-text">
                                                    <span class="bg-warning pl-2 pr-2 pt-1 pb-1 text-white mr-2">
                                        <?= $message; ?>
                                    </span>
                                                    <?php 
                                        $input = $row->pageview;

                                        $k = pow(10,3);
                                        $mil = pow(10,6);
                                        $bil = pow(10,9);

                                        if($input >= $bil){
                                             $output = $input / $bil . 'B';
                                        }
                                        elseif($input >= $mil){
                                             $output = round($input / $mil, 1) . 'M';
                                        }
                                        elseif($input >= $k){
                                             $output = round($input / $k, 1) . 'K';
                                        }
                                        else{
                                             $output = $input;
                                        }
                                    ?>
                                                    <span> <strong><?= $output; ?></strong> views</span>
                                                </p>
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
</div>

<div class="col-lg-12 text-center mb-3 d-none d-lg-block">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout-key="-ct-1v+4t-h6+9t" data-ad-client="ca-pub-2867182879802044" data-ad-slot="9547339346"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});

    </script>
</div>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element, as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"><i class="fa fa-plus"></i></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>
<script>
    var initPhotoSwipeFromDOM = function(gallerySelector) {

        // parse slide data (url, title, size ...) from DOM elements 
        // (children of gallerySelector)
        var parseThumbnailElements = function(el) {
            var thumbElements = el.childNodes,
                numNodes = thumbElements.length,
                items = [],
                figureEl,
                linkEl,
                size,
                item;

            for (var i = 0; i < numNodes; i++) {

                figureEl = thumbElements[i]; // <figure> element

                // include only element nodes 
                if (figureEl.nodeType !== 1) {
                    continue;
                }

                linkEl = figureEl.children[0]; // <a> element

                size = linkEl.getAttribute('data-size').split('x');

                // create slide object
                item = {
                    src: linkEl.getAttribute('href'),
                    w: parseInt(size[0], 10),
                    h: parseInt(size[1], 10)
                };



                if (figureEl.children.length > 1) {
                    // <figcaption> content
                    item.title = figureEl.children[1].innerHTML;
                }

                if (linkEl.children.length > 0) {
                    // <img> thumbnail element, retrieving thumbnail url
                    item.msrc = linkEl.children[0].getAttribute('src');
                }

                item.el = figureEl; // save link to element for getThumbBoundsFn
                items.push(item);
            }

            return items;
        };

        // find nearest parent element
        var closest = function closest(el, fn) {
            return el && (fn(el) ? el : closest(el.parentNode, fn));
        };

        // triggers when user clicks on thumbnail
        var onThumbnailsClick = function(e) {
            e = e || window.event;
            e.preventDefault ? e.preventDefault() : e.returnValue = false;

            var eTarget = e.target || e.srcElement;

            // find root element of slide
            var clickedListItem = closest(eTarget, function(el) {
                return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
            });

            if (!clickedListItem) {
                return;
            }

            // find index of clicked item by looping through all child nodes
            // alternatively, you may define index via data- attribute
            var clickedGallery = clickedListItem.parentNode,
                childNodes = clickedListItem.parentNode.childNodes,
                numChildNodes = childNodes.length,
                nodeIndex = 0,
                index;

            for (var i = 0; i < numChildNodes; i++) {
                if (childNodes[i].nodeType !== 1) {
                    continue;
                }

                if (childNodes[i] === clickedListItem) {
                    index = nodeIndex;
                    break;
                }
                nodeIndex++;
            }



            if (index >= 0) {
                // open PhotoSwipe if valid index found
                openPhotoSwipe(index, clickedGallery);
            }
            return false;
        };

        // parse picture index and gallery index from URL (#&pid=1&gid=2)
        var photoswipeParseHash = function() {
            var hash = window.location.hash.substring(1),
                params = {};

            if (hash.length < 5) {
                return params;
            }

            var vars = hash.split('&');
            for (var i = 0; i < vars.length; i++) {
                if (!vars[i]) {
                    continue;
                }
                var pair = vars[i].split('=');
                if (pair.length < 2) {
                    continue;
                }
                params[pair[0]] = pair[1];
            }

            if (params.gid) {
                params.gid = parseInt(params.gid, 10);
            }

            return params;
        };

        var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
            var pswpElement = document.querySelectorAll('.pswp')[0],
                gallery,
                options,
                items;

            items = parseThumbnailElements(galleryElement);

            // define options (if needed)
            options = {

                // define gallery index (for URL)
                galleryUID: galleryElement.getAttribute('data-pswp-uid'),

                getThumbBoundsFn: function(index) {
                    // See Options -> getThumbBoundsFn section of documentation for more info
                    var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                        pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                        rect = thumbnail.getBoundingClientRect();

                    return {
                        x: rect.left,
                        y: rect.top + pageYScroll,
                        w: rect.width
                    };
                }

            };

            // PhotoSwipe opened from URL
            if (fromURL) {
                if (options.galleryPIDs) {
                    // parse real index when custom PIDs are used 
                    // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                    for (var j = 0; j < items.length; j++) {
                        if (items[j].pid == index) {
                            options.index = j;
                            break;
                        }
                    }
                } else {
                    // in URL indexes start from 1
                    options.index = parseInt(index, 10) - 1;
                }
            } else {
                options.index = parseInt(index, 10);
            }

            // exit if index not found
            if (isNaN(options.index)) {
                return;
            }

            if (disableAnimation) {
                options.showAnimationDuration = 0;
            }

            // Pass data to PhotoSwipe and initialize it
            gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
            gallery.init();
        };

        // loop through all gallery elements and bind events
        var galleryElements = document.querySelectorAll(gallerySelector);

        for (var i = 0, l = galleryElements.length; i < l; i++) {
            galleryElements[i].setAttribute('data-pswp-uid', i + 1);
            galleryElements[i].onclick = onThumbnailsClick;
        }

        // Parse URL and open gallery if it contains #&pid=3&gid=1
        var hashData = photoswipeParseHash();
        if (hashData.pid && hashData.gid) {
            openPhotoSwipe(hashData.pid, galleryElements[hashData.gid - 1], true, true);
        }
    };
    // execute above function
    initPhotoSwipeFromDOM('.my-gallery');

</script>
<script src="<?= base_url(); ?>assets/js/photoswipe-ui-default.min.js"></script>
<script src="<?= base_url(); ?>assets/js/photoswipe.min.js"></script>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>
