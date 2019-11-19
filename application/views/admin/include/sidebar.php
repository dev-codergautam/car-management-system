<?php
$loginuser = $this->admin_datawork->get_data('admin', ['ad_id' => $this->session->userdata('car_authenticate')]);
foreach($loginuser as $loginuser){}
    if($loginuser->image == ""){
        $photo = base_url() . "assets/image/em-boy-1.svg";
    }
    else {
        $photo = base_url() . "assets/image/admin/".$loginuser->image;
    }
    ?>

    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user">
            <img class="app-sidebar__user-avatar" src="<?= $photo; ?>" alt="User Image" style="width:50px;height:50px;">
            <div>
                <p class="app-sidebar__user-name">
                    <?= $loginuser->name; ?>
                </p>
                <p class="app-sidebar__user-designation">
                    <?= $loginuser->email; ?>
                </p>
            </div>
        </div>
        <ul class="app-menu">

            <li>
                <a class="app-menu__item" href="<?= base_url('admin/index') ?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a>
            </li>
            <li>
                <a class="app-menu__item" href="<?= base_url('admin/brand') ?>"><i class="app-menu__icon fa fa-industry"></i><span class="app-menu__label">Brand</span></a>
            </li> 
            <li>
                <a class="app-menu__item" href="<?= base_url('admin/model') ?>"><i class="app-menu__icon fa fa-modx"></i><span class="app-menu__label">Model</span></a>
            </li> 
            <li>
                <a class="app-menu__item" href="<?= base_url('admin/menufecturer') ?>"><i class="app-menu__icon fa fa-industry"></i><span class="app-menu__label">Menufecturer</span></a>
            </li> 
            <li>
                <a class="app-menu__item" href="<?= base_url('admin/fuel') ?>"><i class="app-menu__icon fa fa-filter"></i><span class="app-menu__label">fuel</span></a>
            </li>
            <li>
                <a class="app-menu__item" href="<?= base_url('admin/traction') ?>"><i class="app-menu__icon fa fa-car"></i><span class="app-menu__label">Traction</span></a>
            </li>
            <li>
                <a class="app-menu__item" href="<?= base_url('admin/cartype') ?>"><i class="app-menu__icon fa fa-car"></i><span class="app-menu__label">Car Type</span></a>
            </li>
            <li>
                <a class="app-menu__item" href="<?= base_url('admin/requestedcar') ?>"><i class="app-menu__icon fa fa-car"></i><span class="app-menu__label">Requested Car</span></a>
            </li>
            <li>
                <a class="app-menu__item" href="<?= base_url('admin/requestedUsedCar') ?>"><i class="app-menu__icon fa fa-car"></i><span class="app-menu__label">Requested Used Car</span></a>
            </li>
             <li>
                <a class="app-menu__item" href="<?= base_url('admin/transmission') ?>"><i class="app-menu__icon fa fa-car"></i><span class="app-menu__label">Transmission</span></a>
            </li>
            <li class="treeview"><a class="app-menu__item" href="d" data-toggle="treeview"><i class="app-menu__icon fa fa-car"></i><span class="app-menu__label">Car</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="<?= base_url('admin/addCar') ?>">Add Car</a></li>
                    <li><a class="treeview-item" href="<?= base_url('admin/activatedCar') ?>">Activated Car</a></li>
                    <li><a class="treeview-item" href="<?= base_url('admin/deactivatedCar') ?>"> Deactivated Car</a></li>
                </ul>
            </li>

            <li class="treeview"><a class="app-menu__item" href="dg" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Delear</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="<?= base_url('admin/addDealer') ?>">Add Dealer</a></li>
                    <li><a class="treeview-item" href="<?= base_url('admin/activatedDealer') ?>">Activated Dealer</a></li>
                    <li><a class="treeview-item" href="<?= base_url('admin/deactivatedDealer') ?>">Deactivated Dealer</a></li>
                </ul>
            </li>
            <li>
                <a class="app-menu__item" href="<?= base_url('admin/lead') ?>"><i class="app-menu__icon fa fa-bar-chart"></i><span class="app-menu__label">Lead</span></a>
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
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/index"><i class="fa fa-home fa-lg"></i></a></li>
            <?= $BREADCRUMB; ?>
        </ul>
    </div>
