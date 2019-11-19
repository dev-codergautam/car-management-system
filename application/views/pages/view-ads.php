<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta property="fb:page_id" content="210289026237346" />  -->
    <meta property="fb:app_id" content="210289026237346" />
    <?php foreach($names as $rows):?>
    <?php
        $img = $rows->b_img;
        if($img == NULL){
            $ph = base_url() . "assets/image/bnmdef.jpg";
        }
        else {
            $ph = base_url() . "assets/image/blogs/" . $img;
        }
    ?>
        <meta property="og:url" content="<?= base_url(); ?>home/viewAdvertisement/<?= $rows->b_id; ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?= $rows->b_title;?>" />
        <meta property="og:description" content="<?= $rows->b_desc;?>" />
        <meta property="og:image" content="<?= $ph; ?>" />
        <?php endforeach; ?>
        <meta name="author" content="Business Nirmanam">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Business Nirmanam | India get connected freely with Biznirmanam.</title>

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
        <!--
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    -->
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
    <div class="col-lg-12 mb-3 mt-3">
        <div class="row">
            <div class="col-lg-8">
                <div class="col-lg-12">
                    <?= $this->session->flashdata('error'); ?>
                    <?= $this->session->flashdata('comment'); ?>
                </div>
                <div class="card bg-white box-shadow rounded-0 mb-3">
                    <div class="col-lg-12 p-3">
                        <h4><a href="<?= base_url(); ?>home/advertisement" class="fa fa-arrow-circle-left fa-lg nav-link"></a> Advertisements</h4>
                        <div class="hr-brand"></div>
                    </div>
                    <div class="row pl-lg-5 pr-lg-5 p-4">
                        <?php foreach($viewblog as $rows){} ?>
                        <?php 
                $users =  $this->datawork->get_data('users', ['user_id' => $rows->b_userid]);
                foreach($users as $users){}
                ?>
                        <?php
                $profilepic = $users->u_image;
                if($profilepic == NULL){
                    $userpic = base_url() . "assets/image/user.jpg";
                }
                else {
                    $userpic = base_url() . "assets/image/users/" . $profilepic;
                }
                ?>
                            <?php
                $photo1 = $rows->b_img;
                if($photo1 == NULL){
                    $photo = "";
                }
                else {
                    $photo = base_url() . "assets/image/blogs/" . $photo1;
                }
                ?>

                                <div class="col-lg-12 mb-lg-3">
                                    <h4 class="">
                                        <?= $rows->b_title; ?>
                                    </h4>
                                </div>
                                <div class="col-lg-12 mb-lg-3">
                                    <p class="mb-3">
                                        <a href="<?= base_url(); ?>home/profile/<?= $rows->b_userid; ?>" class="p-0" style="text-decoration:none;">
                                    <img src="<?= $userpic; ?>" alt="<?= $users->u_name; ?>" class="small-image mr-1"> <?= $users->u_name; ?></a>
                                        <i class="fa fa-clock-o ml-2"></i>
                                        <?= $rows->b_date; ?>
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <img src="<?= $photo; ?>" alt="" class="img-fluid mt-2 mb-2 mt-lg-2 mb-lg-4">
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <p class="text-justify">
                                        <?= $rows->b_desc; ?>
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h6>Share Now</h6>
                                            <div class="hrbrand"></div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <a href="whatsapp://send?text=<?= base_url(); ?>home/viewAdvertisement/<?= $rows->b_id; ?>" class="mr-3"><img src="<?= base_url(); ?>assets/image/square-whatsapp.svg" alt="Share" style="width:40px;"></a>

                                                <a class="mr-3" href="http://www.facebook.com/sharer.php?u=<?= base_url(); ?>home/viewAdvertisement/<?= $rows->b_id; ?>" target="_blank">
                                                <img src="<?= base_url(); ?>assets/image/square-facebook.svg" alt="Share" style="width:40px;">
                                            </a>

                                                <a class="mr-3" href="http://twitter.com/share?text=<?= $rows->b_title; ?>&url=<?= base_url(); ?>home/viewAdvertisement/<?= $rows->b_id; ?>" target="_blank">
                                                <img src="<?= base_url(); ?>assets/image/square-twitter.svg" alt="Share" style="width:40px;">
                                            </a>

                                                <a class="mr-3" href="https://plus.google.com/share?url=<?= base_url(); ?>home/viewAdvertisement/<?= $rows->b_id; ?>" target="_blank">
                                                <img src="<?= base_url(); ?>assets/image/square-gp.svg" alt="Share" style="width:40px;">
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>

                <div class="col-lg-12 p-3 p-lg-5">
                    <div class="row">
                        <?php $count_cmmnt = $this->datawork->count_data('postcomments', ['pc_postid' => $rows->b_id]); ?>
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
                            <div class="col-lg-2 col-12 mb-2 text-center">
                                <img src="<?= base_url(); ?>assets/image/User2.jpg" alt="default" width="70px">
                            </div>

                            <?php
                    $session_id = $this->session->userdata('user');
                    if($session_id){ ?>
                                <div class="col-lg-10 col-12 mb-2">
                                    <?= form_open('home/do_post_comment_user/' . $rows->b_id); ?>
                                        <textarea id="" rows="3" class="form-control" name="pc_cmmnt" placeholder="Enter your comment..."><?= set_value('pc_cmmnt') ?></textarea>
                                        <?= form_error('pc_cmmnt'); ?>

                                            <?php 
                                $data['cmmntr_name'] = $this->datawork->get_id('users', ['user_id' => $this->session->userdata('user')]);
                                $cmmntr_name = $data['cmmntr_name']['u_name'];                                  
                        ?>

                                            <input type="text" name="cmmnt_name" value='<?= $cmmntr_name; ?> has commented on your Advertisment post "<?= $rows->b_title; ?>"' hidden>
                                            <input type="text" name="post_userid" value="<?= $rows->b_userid; ?>" hidden>

                                            <?= form_error('c_cmmnt'); ?>
                                                <input type="text" value="<?= $session_id; ?>" name="user_id" hidden>
                                                <div class="form-group mt-4">
                                                    <input type="submit" class="btn btn-outline-primary" Value="Submit Comment">
                                                </div>
                                </div>
                                <?= form_close(); ?>


                                    <?php } else { ?>

                                    <div class="col-lg-10 col-12 mb-2">
                                        <?= form_open('home/do_post_comment/' . $rows->b_id); ?>
                                            <textarea id="" rows="3" class="form-control" name="pc_cmmnt" placeholder="Enter your comment..."><?= set_value('pc_cmmnt'); ?></textarea>
                                            <?= form_error('pc_cmmnt'); ?>
                                    </div>
                                    <div class="col-lg-2 col-2"></div>
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-lg-8 p-lg-3 p-3">
                                                <div class="form-group">
                                                    <h5 class="text-muted">Comment as a guest</h5>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="pc_name" placeholder="Name" value="<?= set_value('pc_name'); ?>">
                                                    <?= form_error('pc_name'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="pc_email" placeholder="Email / Contact" value="<?= set_value('pc_email'); ?>">
                                                    <?= form_error('pc_email'); ?>
                                                        <input type="text" name="cmmnt_name" value='<?= set_value(' pc_name '); ?> has commented on your Advertisment post "<?= $rows->b_title; ?>"' hidden>
                                                        <input type="text" name="post_userid" value="<?= $rows->b_userid; ?>" hidden>
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

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">You need to login here</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                                </div>
                                                <div class="modal-body">
                                                    <?= form_open('home/post_cmmnt_login/' . $rows->b_id); ?>
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
                </div>

                <?php foreach($comments as $rows): ?>
                <?php 
            $data['users'] = $this->datawork->get_id('users', ['user_id' => $rows->pc_userid]);
            $username = $data['users']['u_name'];
            $com_userimage = $data['users']['u_image'];
            ?>
                <?php 
            if(empty($rows->pc_name && $rows->pc_email)){
                $name = $username;
            } else {
                $name = $rows->pc_name;
            } ?>
                <?php 
            if($com_userimage == NULL){
                $cmmtr_image = base_url() . "assets/image/User2.jpg";
            } else {
                $cmmtr_image = base_url() . "assets/image/users/" . $com_userimage;
            } ?>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-10 card box-shadow p-3 p-lg-4 pl-lg-5 mt-3">
                            <div class="row">
                                <div class="col-lg-12 col-12 mb-2 p-2">
                                    <div class="row">
                                        <div class="col-lg-1 col-3">
                                            <img src="<?= $cmmtr_image; ?>" class="rounded-circle" alt="" width="60px" height="60px">
                                        </div>
                                        <div class="col-lg-11 col-8">
                                            <h5 class="mt-3 ml-lg-4">
                                                <?php if(empty($rows->pc_userid)): ?>
                                                <?= $name; ?> <span class="text-muted" style="font-size:12px;">(Guest)</span>
                                                    <?php else: ?>
                                                    <a href="<?= base_url(); ?>home/profile/<?= $rows->pc_userid; ?>" class="p-0" style="text-decoration:none;">
                                                        <?= $name; ?>
                                                    </a>
                                                    <?php endif; ?>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12 mb-2">
                                    <p>
                                        <?= $rows->pc_cmmnt; ?>
                                    </p>
                                    <p><i class="fa fa-clock-o fa-lg"></i>
                                        <?= $rows->pc_date; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="col-lg-4 mt-lg-0 mt-4">
                <div class="card border-0 box-shadow">
                    <div class="col-lg-12 p-2 bg-brand text-white">
                        <h5 class="font-weight-light">Latest Posts</h5>
                    </div>
                    <?php foreach($latest as $row): ?>
                    <?php
                $photo1 = $row->b_img;
                if($photo1 == NULL){
                    $photo = base_url() . "assets/image/default.png";
                }
                else {
                    $photo = base_url() . "assets/image/blogs/" . $photo1;
                }
            ?>
                        <div class="col-lg-12 p-0">
                            <div class="row p-2">
                                <div class="col-lg-3">
                                    <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-6 col-lg-12">
                                            <img src="<?= $photo; ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-3"></div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <p class="">
                                        <?= substr($row->b_title, 0, 45) . "..."; ?>
                                    </p>
                                    <a href="<?= base_url(); ?>home/viewAdvertisement/<?= $row->b_id; ?>" class="btn btn-brand btn-sm rounded-0">Read More</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <?php endforeach; ?>
                </div>
                <div class="card border-0 box-shadow d-none d-lg-block">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- event -->
                    <ins class="adsbygoogle" style="display:inline-block;width:300px;height:1050px" data-ad-client="ca-pub-2867182879802044" data-ad-slot="4139594836"></ins>
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
    </div>
