<h6>Account</h6>
<hr>
<div class="d-none d-lg-block bg-white" id="navlist">
    <a class="list-groups" href="<?= base_url(); ?>user">My Business</a>
    <a class="list-groups" href="<?= base_url(); ?>user/profile">My Profile</a>
    <a class="list-groups" href="<?= base_url(); ?>user/myAds">My Advertisements</a>
    <a class="list-groups" href="<?= base_url(); ?>user/services">My Product/ Services</a>
    <a class="list-groups" href="<?= base_url(); ?>user/blogs">My Blogs</a>
    <?php 
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

        $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
        $u_id = $data['users']['user_id'];

        $total_row = $this->datawork->count_all_note($session_id); 
        
    ?>
    <a class="list-groups" href="<?= base_url(); ?>user/notification">Notification <span class='badge badge-pill badge-danger'><?= $total_row; ?></span></a>
    <a class="list-groups" href="<?= base_url(); ?>user/addNew">List my Business</a>
    <a class="list-groups" href="<?= base_url(); ?>user/addBlog">Post Blog</a>
    <a class="list-groups" href="<?= base_url(); ?>user/servicesStep1">Add Product / Services</a>
    <a class="list-groups" href="<?= base_url(); ?>user/addAdvertisement">Advertise now</a>
    <a class="list-groups" href="<?= base_url(); ?>user/gallery">Gallery</a>
    <h6 class="p-2">Account</h6>
    <a class="list-groups" href="<?= base_url(); ?>user/setting">Setting</a>
</div>
<script>
    $("#navlist").on('click', 'a', function() {
        $("#navlist a.selected").removeClass("selected");
        // adding classname 'active' to current click li 
        $(this).addClass("selected");
    });

</script>
