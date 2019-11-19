<?php
$loginuser = $this->admin_datawork->get_data('dealer', ['dealerEmail' => $this->session->userdata('dealer_authenticate')]);
foreach($loginuser as $loginuser){}
    if($loginuser->dealerImage == ""){
        $photo = base_url() . "assets/image/em-boy-1.svg";
    }
    else {
        $photo = base_url() . "assets/image/dealer/".$loginuser->dealerImage;
    }
    ?>

<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar" src="<?= $photo; ?>" alt="<?= $loginuser->dealerFname ?>'s Profile" style="width:50px;height:50px;">
        <div>
            <p class="app-sidebar__user-name">
                <?= $loginuser->dealerFname; ?>  <?= $loginuser->dealerLname; ?>
                
            </p>
            <p class="app-sidebar__user-designation">
                <?= $loginuser->dealerEmail; ?>
            </p>
        </div>
    </div>
    <ul class="app-menu">

        <li>
            <a class="app-menu__item" href="<?= base_url('dealer/index') ?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a>
        </li>
        <li class="treeview"><a class="app-menu__item" href="d" data-toggle="treeview"><i class="app-menu__icon fa fa-car"></i><span class="app-menu__label">Car</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url('dealer/addCar') ?>">Add Car</a></li>
                <li><a class="treeview-item" href="<?= base_url('dealer/activatedCar') ?>">Activated Car</a></li>
                <li><a class="treeview-item" href="<?= base_url('dealer/deactivatedCar') ?>"> Deactivated Car</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="d" data-toggle="treeview"><i class="app-menu__icon fa fa-bar-chart"></i><span class="app-menu__label">Lead</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="#">Personal site leads</a></li>
                <li><a class="treeview-item" href="<?= base_url('dealer/lead') ?>">AutoGuide.co.bw leads</a></li>
            </ul>
        </li>
        <li>
            <a class="app-menu__item" href="<?= base_url('dealer/contact') ?>"><i class="app-menu__icon fa fa-bar-chart"></i><span class="app-menu__label">Contact Us</span></a>
        </li>
         <li>
            <a class="app-menu__item" href="<?= base_url('dealer/requestedUsedCar') ?>"><i class="app-menu__icon fa fa-car"></i><span class="app-menu__label">Requested Used Car</span></a>
        </li>
    </ul>

</aside>
<script>
    var url = window.location;
    //var url = window.location;
    // for sidebar menu entirely but not cover treeview
    $('.app-sidevar ul li a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');
    // for treeview
    $('ul li.treeview a').filter(function() {
        return this.href == url;
    }).parentsUntil(".app-sidebar > .treeview-menu").addClass('active is-expanded');

</script>
<script>
    $(document).ready(function() {
        var links = $('.app-sidebar ul li a');
        $.each(links, function(key, va) {
            if (va.href == document.URL) {
                $(this).addClass('active');
            }
        });
    });

</script>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1>
                <?= $TITLE; ?>
            </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>dealer/index"><i class="fa fa-home fa-lg"></i></a></li>
            <?= $BREADCRUMB; ?>
        </ul>
    </div>
