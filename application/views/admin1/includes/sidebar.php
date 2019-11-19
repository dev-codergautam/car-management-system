<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li>
                    <a href="<?= base_url('admin/index'); ?>" class="active"><i class="lnr lnr-car"></i> <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="#delear" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>Dealer</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="delear" class="collapse ">
                        <ul class="nav">
                            <li><a href="<?= base_url(); ?>" class="">Add Dealer</a></li>
                            <li><a href="<?= base_url(); ?>" class="">Activated Dealer</a></li>
                            <li><a href="<?= base_url(); ?>" class="">Deactivated Dealer</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#car" data-toggle="collapse" class="collapsed"><i class="lnr lnr-car"></i> <span>Car</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="car" class="collapse ">
                        <ul class="nav">
                            <li><a href="<?= base_url(); ?>admin/cat" class="">Add Car</a></li>
                            <li><a href="<?= base_url(); ?>admin/addBlogcat" class="">Requested Car</a></li>
                            <li><a href="<?= base_url(); ?>admin/addBlogcat" class="">Activated Car</a></li>
                            <li><a href="<?= base_url(); ?>admin/addBlogcat" class="">Deactivated Car</a></li>
                        </ul>
                    </div>
                </li>
                 <li>
                    <a href="<?= base_url('admin/index'); ?>"><i class="lnr lnr-question-circle"></i> <span>Query</span></a>
                </li>
           </ul>
        </nav>
    </div>
</div>
