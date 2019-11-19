<?php
class User extends CI_controller{
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('user')){
            redirect(base_url('home/login'));
        }
    }
    /*
    function verification(){
        $data['users'] = $this->datawork->get_id('users', ['user_id' => $this->session->userdata('user')]);
        $otpCode = $data['users']['otp_code'];
        $otp = $data['users']['otp_verify'];
        
        if(empty($otpCode)){
            redirect('user/verifyEmail/' . $sessionid);
        }
        elseif($otp != 1){
            redirect('user/verify');
        }
    }
    
    public function verify(){
        $sessionid = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $sessionid]);
        
        $data['users'] = $this->datawork->get_id('users', ['user_id' => $sessionid]);
        $otp = $data['users']['otp_code'];
        $verified = $data['users']['otp_verify'];
        
        $this->form_validation->set_rules('newotp','OTP', 'required');
        
        $this->form_validation->set_error_delimiters('<p class="text-danger small">','</p>');
                
        if($this->form_validation->run()===TRUE){
            $newotp = $_POST['newotp'];
            if($otp == $newotp){
                 $fields = [
                'otp_verify' => '1'
            ];
                $this->datawork->update_data('users', $fields, ['user_id'=> $sessionid]);
                $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
                Your Account has been verified successfully !</div>');
                redirect(base_url() . 'user');
            }else{
                $this->session->set_flashdata('error', '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Failed!</strong> Your OTP was wrong. Check your email.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect(base_url() . 'user/verify');
            }
        }
        else {
            if($verified == 1){
                redirect(base_url() . 'user');
            }
            else {
                $this->load->view('includes/header');
                $this->load->view('includes/navbar');
                $this->load->view('pages/verify', $data);
                $this->load->view('includes/footer');
            }
        }
    }
    */
    // homepage
    public function index(){
        // $this->verification();
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

        $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
        $u_id = $data['users']['user_id'];
        
       
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/home', $data);
        $this->load->view('includes/footer'); 
    }
    // list of business in deactive page
    public function deactivate_mybusiness(){
          
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

        $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
        $u_id = $data['users']['user_id'];
        
        $data['mybusiness'] = $this->datawork->get_data('bizz', ['u_id' => $u_id]);
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/deactivate-bizz', $data);
        $this->load->view('includes/footer'); 
    }
    // My Business View
    public function mybusiness($id){
          
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

        $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
        $u_id = $data['users']['user_id'];
        // data call for user id
        $data['bizz'] = $this->datawork->get_id('bizz', ['name_slug' => $id]);
        $img_id = $data['bizz']['id'];
        
        $data['mybusiness'] = $this->datawork->get_data('bizz', ['u_id' => $u_id, 'name_slug' => $id]);
        $data['img'] = $this->datawork->get_data('gallery', ['g_userid' => $u_id, 'g_bizzid' => $img_id]);
        
        $data['button'] = $this->datawork->get_data('bizupdate', ['up_userid' => $u_id, 'up_businessid' => $img_id]);
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/mybusiness', $data);
        $this->load->view('includes/footer'); 
    }
    // My Profile
    public function profile(){
        // $this->verification();
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

        $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
        $u_id = $data['users']['user_id'];
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/profile', $data);
        $this->load->view('includes/footer'); 
    }
    // Gallery View Page
    public function gallery(){
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

        $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
        $u_id = $data['users']['user_id'];
        // Gallery
        $data['gallery'] = $this->datawork->get_data('gallery', ['g_userid' => $u_id]);
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/gallery', $data);
        $this->load->view('includes/footer'); 
    }
    // Gallery View Page
    public function setting(){
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

        $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
        $u_id = $data['users']['user_id'];
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/setting', $data);
        $this->load->view('includes/footer');
    }
    // list of services or product View Page
    public function services(){
          
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
        
        $data['services'] = $this->datawork->get_data('services', ['s_userid' => $session_id]);
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/services', $data);
        $this->load->view('includes/footer');
    }
    // single view of services or product
    public function service($slug){
          
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
        
        $data['service'] = $this->datawork->get_data('services', ['s_nameslug' => $slug]);
        
        $data['services'] = $this->datawork->get_id('services', ['s_nameslug' => $slug]);
        $productid = $data['services']['s_id'];
        
        $data['productimage'] = $this->datawork->get_data('productgallery', ['pg_productid' => $productid]);
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/view-service', $data);
        $this->load->view('includes/footer');
    }
    // Insert page of Gallery
    public function add_gallery($id){
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

        $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
        $u_id = $data['users']['user_id'];
        
        $data['id'] = $id;
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/add-gallery', $data);
        $this->load->view('includes/footer');
    }
    // Request for update
    public function request($id){
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

        $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
        $u_id = $data['users']['user_id'];
        
        $data['bizz_id'] = $id;
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/request', $data);
        $this->load->view('includes/footer'); 
    }
    // Update password page
    public function password(){
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

        $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
        $u_id = $data['users']['user_id'];
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/update-password', $data);
        $this->load->view('includes/footer'); 
    }
    // notification
    public function notification(){  
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

        $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
        $u_id = $data['users']['user_id'];
        
        $data['noti'] = $this->datawork->get_notification('notification', ['n_userid' => $u_id], 'n_id DESC');
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/notification', $data);
        $this->load->view('includes/footer'); 
    }
    // notification
    public function newnotification($id){
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
        
        $data['view'] = $this->datawork->get_data('notification', ['n_id' => $id]);
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/mynoti', $data);
        $this->load->view('includes/footer'); 
    }
    // insert business step 1
    public function addNew(){
        // $this->verification();
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

        $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
        $u_id = $data['users']['user_id'];
        // main category
        $data['main'] = $this->datawork->get_data('maincategory');
        // category
        $data['cat'] = $this->datawork->get_data('category', ['cat_id' => '']);
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/add-business',$data);
        $this->load->view('includes/footer');
    }
    // insert business step 2
    public function addNewStep2($newid){
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
        
        // foreach loop is called for condition
        $data['subcate'] = $this->datawork->get_data('bizz', ['id' => $newid]);
        
        $data['newid'] = $newid;
        
        $data['subcat_opt'] = $this->datawork->get_id('bizz', ['id' => $newid]);
        $subcate_1 = $data['subcat_opt']['category'];
        $data['c'] = $this->datawork->get_id('category', ['title_slug' => $subcate_1]);
        $category_id = $data['c']['id'];

        $data['displaycate'] = $this->datawork->get_data('category', ['cat_id' => $category_id]);
        $data['allcate'] = $this->datawork->get_data('category');
        
        $data['states'] = $this->datawork->get_data('cities' , ['state_id' => '0']);
        $data['cities'] = $this->datawork->get_data('cities' , ['parent_id' => '']);
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/add-business2', $data);
        $this->load->view('includes/footer');
    }
    // change business image
    public function changeimage($id){ 
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

        $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
        $u_id = $data['users']['user_id'];
        
        $data['oldimg'] = $this->datawork->get_data('bizz', ['id' => $id]);
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/change-image', $data);
        $this->load->view('includes/footer'); 
    }
    // Update services or product view page
    public function updateService($id){
        $data['services'] = $this->datawork->get_id('services', ['s_id' => $id]);
        $slug = $data['services']['s_nameslug'];
        
        $this->form_validation->set_rules('title','title','trim|required|is_unique[bizz.name_slug]');
        $this->form_validation->set_rules('price','price','required');
        $this->form_validation->set_rules('discount','discounted price','required');
        $this->form_validation->set_rules('maincat','main category','required');
        $this->form_validation->set_rules('category','category','required');
        $this->form_validation->set_rules('descr','description','trim|required|min_length[10]|max_length[500]');
                
        $this->form_validation->set_error_delimiters('<p class="text-danger small">','</p>');
                
        if($this->form_validation->run()=== TRUE):
            $slug = check_slug(url_title($this->input->post('title')));
        
            $fields = [
                's_name' => ucfirst($_POST['title']),
                's_nameslug' => $slug,
                's_price' => $_POST['price'],
                's_discountprice' => $_POST['discount'],
                's_desc' => $_POST['descr'],
                's_maincat' => $_POST['maincat'],
                's_category' => $_POST['category']
            ];
            $this->datawork->update_data('services', $fields, ['s_id' => $id]);
        
            $this->session->set_flashdata('updateSuccess', '<div class="alert alert-info alert-dismissible fade show" role="alert">Your Product/ Services has been updated successfully !. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect(base_url() . 'user/service/' . $slug);
        else:
            $session_id = $this->session->userdata('user');
            $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
            // main category
            $data['main'] = $this->datawork->get_data('maincategory');
            // category
            $data['cat'] = $this->datawork->get_data('category', ['cat_id' => '']);

            $data['updateSer'] = $this->datawork->get_data('services', ['s_id' => $id]);

            $this->load->view('includes/header');
            $this->load->view('includes/navbar');
            $this->load->view('user/include/sidenav');
            $this->load->view('user/pages/updateService', $data);
            $this->load->view('includes/footer');
        endif;
    }
    
    /*  BLOG FUNCTION
    ================================================ */
    // Add blog page
    public function addBlog(){
        $this->form_validation->set_rules('title','title','trim|required');
        $this->form_validation->set_rules('desc','desc','trim|required|min_length[20]');
        $this->form_validation->set_rules('category','category','trim|required');
        $this->form_validation->set_rules('meta','meta description','trim|required');
        $this->form_validation->set_rules('keyword','meta keyword','trim|required');

        $this->form_validation->set_error_delimiters('<p class="text-danger small">','</p>');
        $date = date('M d Y'); 
        $session_id = $this->session->userdata('user');
        
        if($this->form_validation->run() === TRUE){
            $slug = blogCheckSlug(url_title($this->input->post('title'), 'dash', TRUE));
            $fields = [
                'bl_userid' => $session_id,
                'bl_cat' => $_POST['category'],
                'bl_title' => ucfirst($_POST['title']),
                'bl_titleslug' => $slug,
                'bl_desc' => $_POST['desc'],
                'bl_meta' => $_POST['meta'],
                'bl_keyword' => $_POST['keyword'],
                'bl_date' => $date,
            ];
            $run = $this->datawork->insert_data('blogs', $fields);
            $n_id = $this->datawork->get_new_blogid($session_id);
            redirect(base_url() . 'user/addBlogStep2/' . $n_id);
        }
        else {
            $session_id = $this->session->userdata('user');
            $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
            $data['blogcat'] = $this->datawork->get_data('blogcategory');
            $this->load->view('includes/header');
            $this->load->view('includes/navbar');
            $this->load->view('user/include/sidenav');
            $this->load->view('user/pages/insertBlog', $data);
            $this->load->view('includes/footer'); 
        }
    } 
    
    // update blog page and function
    public function updateBlog($id){
        $this->form_validation->set_rules('title','title','trim|required');
        $this->form_validation->set_rules('desc','desc','trim|required|min_length[20]');
        $this->form_validation->set_rules('category','category','trim|required');
        $this->form_validation->set_error_delimiters('<p class="text-danger small">','</p>');
        
        if($this->form_validation->run() === TRUE){
            $slug = blogCheckSlug(url_title($this->input->post('title'), 'dash', TRUE));
            $field = [
                'bl_cat' => $_POST['category'],
                'bl_title' => ucfirst($_POST['title']),
                'bl_titleslug' => $slug,
                'bl_desc' => $_POST['desc'],
                'bl_meta' => $_POST['meta'],

            ];
            $this->admin_datawork->update_data('blogs', $field, 'bl_id', $id);
            
            $data['blogs'] = $this->datawork->get_id('blogs', ['bl_id' => $id]);
            $blogslug = $data['blogs']['bl_titleslug'];
            
            redirect(base_url() . 'user/myBlog/' . $blogslug);
        }
        else {
            $session_id = $this->session->userdata('user');
            $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
            $data['blogcat'] = $this->datawork->get_data('blogcategory');
            
            $data['viewblog'] = $this->datawork->get_data('blogs', ['bl_id' => $id]);
            
            $this->load->view('includes/header');
            $this->load->view('includes/navbar');
            $this->load->view('user/include/sidenav');
            $this->load->view('user/pages/updateBlog', $data);
            $this->load->view('includes/footer'); 
        }
    }
    // Add blog page
    public function addBlogStep2($id){
        $data = array();
        // If file upload form submitted
        if(!empty($_FILES['files']['name'])){
            $filesCount = count($_FILES['files']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error']    = $_FILES['files']['error'][$i];
                $_FILES['file']['size']     = $_FILES['files']['size'][$i];
                
                // File upload configuration
                $uploadPath                 = './assets/image/myblog';
                $config['upload_path']      = $uploadPath;
                $config['allowed_types']    = 'jpg|jpeg|png|gif';
                
                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                // Upload file to server
                if($this->upload->do_upload('file')){
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['bi_image'] = $fileData['file_name'];
                    $uploadData[$i]['bi_blogid'] = $id;                    
                }
            }
            if(!empty($uploadData)){
                // Insert files data into the database
                $insert = $this->datawork->insertBlogImage($uploadData);
                $data['blogs'] = $this->datawork->get_id('blogs', ['bl_id' => $id]);
                $slug = $data['blogs']['bl_titleslug'];
                // Upload status message
                $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
                redirect(base_url() . 'user/myBlog/'. $slug);
            }
        }
        else {
            $session_id = $this->session->userdata('user');
            $data['newid'] = $id;
            $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
            $this->load->view('includes/header');
            $this->load->view('includes/navbar');
            $this->load->view('user/include/sidenav');
            $this->load->view('user/pages/insertBlogStep2', $data);
            $this->load->view('includes/footer'); 
        }
    }
    // all blog inserted by user
    public function blogs(){
        // $this->verification();
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
        
        $this->load->library('pagination');
        
        $config['base_url'] = base_url('user/blogs');
        $data['total_row'] = $config['total_rows'] = $this->admin_datawork->count_all('blogs', ['bl_userid' => $session_id]);
        $config['per_page'] = 9;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = "<li class='page-item'>";
        $config['num_tag_close'] = "</li>";
        $config['cur_tag_open'] = "<li class='page-item active'><a href='#' class='page-link'>";
        $config['cur_tag_close'] = "</a></li>";
        $config['next_tag_open'] = "<li class='page-item'>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li class='page-item'>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li class='page-item'>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li class='page-item'>";
        $config['last_tagl_close'] = "</li>";
        $config['attributes'] = array('class' => 'page-link font-weight-bold');
        $this->pagination->initialize($config);
        
        $data['allblogs'] = $this->admin_datawork->get_table('blogs', ['bl_userid' => $session_id], 'bl_id DESC', $config['per_page'], $this->uri->segment(3));
        $data['count'] = $this->admin_datawork->count_data('blogs', ['bl_userid' => $session_id], 'bl_id ASC');
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/blogs', $data);
        $this->load->view('includes/footer'); 
    }
    // single blog view
    public function myBlog($slug){
        $data['viewblog'] = $this->datawork->get_data('blogs', ['bl_titleslug' => $slug]);
        
        $data['blogs'] = $this->datawork->get_id('blogs', ['bl_titleslug' => $slug]);
        $blog_id = $data['blogs']['bl_id'];
        $data['blogimage'] = $this->datawork->get_data('blogimage', ['bi_blogid' => $blog_id]);
        
        // for share on social
        $data['names'] = $this->datawork->get_data('blogs', ['bl_titleslug' => $slug]);
                
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/viewblog', $data);
        $this->load->view('includes/footer'); 
    }
    /*  CONFIRM DELETE BLOGGER
    ================================================ */
    // confirm page of Blog
    public function deleteBlog($id){
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

        $data['blogs'] = $this->datawork->get_id('blogs', ['bl_id' => $id]);
        $data['confirmid'] = $id;
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/confirmDelete-Blog', $data);
        $this->load->view('includes/footer');
    }        
    // confirm fuction of delete blog
    public function delBlog($id){
          
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
        
        $this->load->helper("file");
        
        //$data['services'] = $this->datawork->get_id('services', ['s_id' => $id]);
        //$imgname = $data['services']['s_image'];
        $this->db->where('bl_id', $id);
        $this->db->delete('blogs');
        
        $data['blogid'] = $this->datawork->get_data('blogimage', ['bi_blogid' => $id]);
        foreach($data['blogid'] as $blogid){
            $imgname = $blogid->bi_image;
            $this->db->where('bi_blogid', $id);
            $this->db->delete(' blogimage');
            @unlink('./assets/image/myblog/' . $imgname);
        }
        $this->session->set_flashdata('success', '
            <div class="alert alert-info alert-dismissible fade show text-center" role="alert">
                Your Product or Service was deleted successfully !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        ');
        redirect(base_url() . "user/blogs");
    }
    /*  AD FUNCTION
    ================================================ */
    // Add ad page
    public function myAds(){
          
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
        
        $data['myads'] = $this->datawork->get_data('myads', ['b_userid' => $session_id]);
                
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/myAds', $data);
        $this->load->view('includes/footer'); 
    }
    // Add blog page
    public function addAdvertisement(){
        // $this->verification();
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
        $data['cat'] = $this->datawork->get_data('category',['parent_id'=>000]);
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/add-blog', $data);
        $this->load->view('includes/footer'); 
    }
    // single view of my blog 
    public function viewAdvertisement($id){
          
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
        
        $data['myads'] = $this->datawork->get_data('myads',['b_id' => $id]);
        
        $data['myadslimit'] = $this->datawork->get_ads($session_id, $id);
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/view-ads', $data);
        $this->load->view('includes/footer'); 
    }
    // add gallery
    public function insert_blog(){
          
        $this->form_validation->set_rules('title','title','trim|required');
        $this->form_validation->set_rules('desc','desc','trim|required|min_length[20]');
        $this->form_validation->set_rules('meta','meta description','trim|required');
        
        $this->form_validation->set_error_delimiters('<p class="text-danger small">','</p>');
        
        $session_id = $this->session->userdata('user');
                
        if($this->form_validation->run() === TRUE){
            $config['upload_path']      = './assets/image/blogs';
            $config['allowed_types']    = 'jpeg|jpg|png';
            $config['file_name']        = date('hisM-d-Y');
            $config['create_thumb'] = FALSE;  
            $config['maintain_ratio'] = FALSE;  
            $config['quality'] = '60%';  
            $config['width'] = 200;
            $config['height'] = 200;
            $date = date('M d Y');        
            
            $this->load->library('upload', $config);
            
            if(empty($this->upload->do_upload('pic'))){
                $fields = [
                    'b_userid' => $session_id,
                    'b_category' => $_POST['category'],
                    'b_title' => ucfirst($_POST['title']),
                    'b_desc' => $_POST['desc'],
                    'b_date' => $date,
                ];
            }
            else {
                $this->upload->do_upload('pic');
                $fields = [
                    'b_userid' => $session_id,
                    'b_category' => $_POST['category'],
                    'b_title' => ucfirst($_POST['title']),
                    'b_desc' => $_POST['desc'],
                    'b_date' => $date,
                    'b_img' => $this->upload->data('file_name')
                ];
            }
            $run = $this->datawork->insert_data('myads',$fields);
            redirect(base_url() . 'user/myAds');
        }
        else {
            $session_id = $this->session->userdata('user');
            $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
            $data['cat'] = $this->datawork->get_data('category',['parent_id'=>000]);
            $this->load->view('includes/header');
            $this->load->view('includes/navbar');
            $this->load->view('user/include/sidenav');
            $this->load->view('user/pages/add-blog', $data);
            $this->load->view('includes/footer'); 
        }
    }
    // confirm page of delete blog
    public function delete_blog($id){
          
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

        $data['confirmid'] = $id;
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/delete-blog', $data);
        $this->load->view('includes/footer');
    }
    // delete funtion
    public function del_blog($id){
          
        $this->db->where('b_id', $id);
        $this->db->delete('myads');
        
        $this->db->where('pc_postid', $id);
        $this->db->delete('postcomments');
        
        $this->db->where('n_postid', $id);
        $this->db->delete('notification');
        
        redirect(base_url() . "user/myAds");
    }
    // update blog
    public function edit_blog($id){
          
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
        $data['cat'] = $this->datawork->get_data('category',['parent_id'=>000]);
        
        $data['myads'] = $this->datawork->get_data('myads', ['b_id' => $id]);
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/edit-blog', $data);
        $this->load->view('includes/footer');
    }
    // update function of single blog
    public function update_blog($id){
          
        $this->form_validation->set_rules('title','title','required|trim');
        $this->form_validation->set_rules('category','category','required|trim');
        $this->form_validation->set_rules('desc','description','required|trim');
        
        $this->form_validation->set_error_delimiters('<p class="text-danger small">','</p>');
                
        if($this->form_validation->run()===TRUE){
            $fields = [
                'b_title' => $_POST['title'],
                'b_category' => $_POST['category'],
                'b_desc' => $_POST['desc']
            ];
            $this->datawork->update_data('myads', $fields, 'b_id', $id);
            redirect(base_url() . 'user/my_blogs');
        }
        else {
            $session_id = $this->session->userdata('user');
            $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
            $data['cat'] = $this->datawork->get_data('category',['parent_id'=>000]);

            $data['myads'] = $this->datawork->get_data('myads', ['b_id' => $id]);

            $this->load->view('includes/header');
            $this->load->view('includes/navbar');
            $this->load->view('user/include/sidenav');
            $this->load->view('user/pages/edit-blog', $data);
            $this->load->view('includes/footer');
        }
    }
    
    /*  INSERT FUNCTION
    ================================================ */
    // add busines step 1
    public function insert_step1(){
          
        $this->form_validation->set_rules('business_name','business Name','trim|required');
        $this->form_validation->set_rules('m_category','main category','required');
        $this->form_validation->set_rules('category','category','required');
        $this->form_validation->set_rules('experience','experience','trim|required');
        $this->form_validation->set_rules('description','description','trim|required|min_length[10]|max_length[500]');
        
        $id = $this->input->post('userid');
        
        $this->form_validation->set_error_delimiters('<p class="text-danger small">','</p>');
                
        if($this->form_validation->run()=== TRUE):
        $slug = check_slug(url_title($this->input->post('business_name')));
    
                $fields = [
                    'u_id' => $_POST['userid'],
                    'business_name' => ucfirst($_POST['business_name']),
                    'name_slug' => $slug,
                    'category' => $_POST['category'],
                    'parent_cate' => $_POST['m_category'],
                    'experience' => $_POST['experience'],
                    'description' => ucfirst($_POST['description']),
                    'status' => '1',
                    'step_status' => '1'
                ];
            $run = $this->datawork->insert_data('bizz',$fields);
            $this->auto_mail($slug);
            $n_id = $this->datawork->get_new_bizzid($id);
            redirect(base_url() . 'user/addNewStep2/' . $n_id);
        else:
            $session_id = $this->session->userdata('user');
            $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
            
            $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
            $u_id = $data['users']['user_id'];
            // main category
            $data['main'] = $this->datawork->get_data('maincategory');
            // category
            $data['cat'] = $this->datawork->get_data('category', ['cat_id' => '']);
            
            $this->load->view('includes/header');
            $this->load->view('includes/navbar');
            $this->load->view('user/include/sidenav');
            $this->load->view('user/pages/add-business',$data);
            $this->load->view('includes/footer'); 
        endif;
    }
    // add busines step 1
    public function insert_step2($id){
          
        $this->form_validation->set_rules('category','Category');
        $this->form_validation->set_rules('contact','contact','trim|required|numeric|exact_length[10]');
        $this->form_validation->set_rules('contact1','contact1','trim|numeric|exact_length[10]');
        $this->form_validation->set_rules('email','email','trim|valid_email');
        $this->form_validation->set_rules('website','website','trim|prep_url');
        $this->form_validation->set_rules('address','address','trim|required');
        $this->form_validation->set_rules('city','city','trim|required');
        $this->form_validation->set_rules('state','state','trim|required');
        
        $this->form_validation->set_error_delimiters('<p class="text-danger small">','</p>');
        if(!empty($_POST['state'])){
        $data['states'] = $this->datawork->get_id('cities', ['parent_id' => $_POST['state']]);
        $state_name = $data['states']['state_name'];
        }
        else {
            "";
        }
        if($this->form_validation->run()=== TRUE){            
            $fields = [
                'sub_cate' => $_POST['category'],
                'contact' => $_POST['contact'],
                'contact1' => $_POST['contact1'],
                'email' => $_POST['email'],
                'website' => $_POST['website'],
                'address' => $_POST['address'],
                'city' => $_POST['city'],
                'state' => $state_name,
                'step_status' => '0'
            ];
            $this->datawork->update_data('bizz', $fields, ['id' => $id]);
            redirect(base_url() . 'user/changeimage/'. $id);
        }
        else 
        {
            $session_id = $this->session->userdata('user');
            $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

            // foreach loop is called for condition
            $data['subcate'] = $this->datawork->get_data('bizz', ['id' => $id]);

            $data['newid'] = $id;

            $data['subcat_opt'] = $this->datawork->get_id('bizz', ['id' => $id]);
            $subcate_1 = $data['subcat_opt']['category'];
            $data['c'] = $this->datawork->get_id('category', ['title_slug' => $subcate_1]);
            $category_id = $data['c']['id'];

            $data['displaycate'] = $this->datawork->get_data('category', ['cat_id' => $category_id]);
            $data['allcate'] = $this->datawork->get_data('category');
            
            $data['states'] = $this->datawork->get_data('cities' , ['state_id' => '0']);
            $data['cities'] = $this->datawork->get_data('cities' , ['parent_id' => '']);

            $this->load->view('includes/header');
            $this->load->view('includes/navbar');
            $this->load->view('user/include/sidenav');
            $this->load->view('user/pages/add-business2', $data);
            $this->load->view('includes/footer');
        }
    }
    // add gallery
    public function add_image($id){
          
        $this->form_validation->set_rules('title','Title','trim|required');
        $this->form_validation->set_error_delimiters('<p class="text-danger small">','</p>');
        
        $session_id = $this->session->userdata('user');
        // data call for user id
        $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
        $u_id = $data['users']['user_id'];
                
        if($this->form_validation->run()=== FALSE){
            $session_id = $this->session->userdata('user');
            $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

            $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
            $u_id = $data['users']['user_id'];

            $data['id'] = $id;
            
            $this->session->set_flashdata('error', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Please select an image. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            
            $this->load->view('includes/header');
            $this->load->view('includes/navbar');
            $this->load->view('user/include/sidenav');
            $this->load->view('user/pages/add-gallery', $data);
            $this->load->view('includes/footer');
        }

        else {
            $config['upload_path']      = './assets/image/gallery';
            $config['allowed_types']    = 'jpeg|jpg|png';
            $config['file_name']        = $_POST['title'];
            $config['create_thumb'] = FALSE;  
            $config['maintain_ratio'] = FALSE;  
            $config['quality'] = '60%';  
            $config['width'] = 200;
            $config['height'] = 200;
    
            $this->load->library('upload', $config);
            $done = $this->upload->do_upload('pic');
                
            if($done){
            $fields = [
                'g_title' => $_POST['title'],
                'g_bizzid' => $_POST['bizzid'],
                'g_userid' => $u_id,
                'g_image' => $this->upload->data('file_name')
            ];
            
            $this->session->set_flashdata('success', '<div class="alert alert-info alert-dismissible fade show" role="alert">Your image has been submitted successfully !<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                
            $run = $this->datawork->insert_data('gallery',$fields);
            redirect(base_url() . 'user/index');
            }
            
            else {
                $session_id = $this->session->userdata('user');
                $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

                $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
                $u_id = $data['users']['user_id'];

                $data['id'] = $id;
                
                $this->session->set_flashdata('error', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Please insert an image. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                
                $this->load->view('includes/header');
                $this->load->view('includes/navbar');
                $this->load->view('user/include/sidenav');
                $this->load->view('user/pages/add-gallery', $data);
                $this->load->view('includes/footer');
            }            
        }
    }
    // Request for update bizz
    public function biz_update($id){
          
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

        $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
        $u_id = $data['users']['user_id'];
        $u_name = $data['users']['u_name'];
        
        $data['bizz_id'] = $id;
        
        $this->form_validation->set_rules('title','title','trim|required');
        $this->form_validation->set_rules('reason','reason','trim|required');
        $this->form_validation->set_error_delimiters('<p class="text-danger small">','</p>');
        
         if($this->form_validation->run()=== TRUE){            
            $fields = [
                'up_title' => $_POST['title'],
                'up_message' => $_POST['reason'],
                'up_businessid' => $_POST['biz_id'],
                'up_userid' => $u_id,
                'up_status' => '0'
            ];
            $this->datawork->insert_data('bizupdate',$fields);
            $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Dear,' . $u_name . '</strong> Your business update request has been submitted. We will contact you as soon as possible.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect(base_url() . 'user/index/');
        }
        else{
            $session_id = $this->session->userdata('user');
            $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

            $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
            $u_id = $data['users']['user_id'];
                     
            $this->load->view('includes/header');
            $this->load->view('includes/navbar');
            $this->load->view('user/include/sidenav');
            $this->load->view('user/pages/request', $data);
            $this->load->view('includes/footer'); 
         }
    }
    // services page 1 with insert function
    public function servicesStep1(){
          
        $session_id = $this->session->userdata('user');
        
        $this->form_validation->set_rules('title','title','trim|required|is_unique[bizz.name_slug]');
        $this->form_validation->set_rules('price','price','required');
        $this->form_validation->set_rules('discount','discounted price','required');
        $this->form_validation->set_rules('maincat','main category','required');
        $this->form_validation->set_rules('category','category','required');
        $this->form_validation->set_rules('descr','description','trim|required|min_length[10]|max_length[500]');
        
        $id = $this->input->post('userid');
        
        $this->form_validation->set_error_delimiters('<p class="text-danger small">','</p>');
                
        if($this->form_validation->run()=== TRUE):
            $slug = serviceCheckSlug(url_title($this->input->post('title'), 'dash', TRUE));
            $fields = [
                's_name' => ucfirst($_POST['title']),
                's_nameslug' => $slug,
                's_price' => $_POST['price'],
                's_discountprice' => $_POST['discount'],
                's_desc' => $_POST['descr'],
                's_maincat' => $_POST['maincat'],
                's_category' => $_POST['category'],
                's_userid' => $session_id
            ];
            $run = $this->datawork->insert_data('services', $fields);
            $n_id = $this->datawork->get_new_servicesid($id);
            redirect(base_url() . 'user/servicesStep2/' . $n_id);
        else:
            $session_id = $this->session->userdata('user');
            $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
            
            $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
            $u_id = $data['users']['user_id'];
            // main category
            $data['main'] = $this->datawork->get_data('maincategory');
            // category
            $data['cat'] = $this->datawork->get_data('category', ['cat_id' => '']);
            
            $this->load->view('includes/header');
            $this->load->view('includes/navbar');
            $this->load->view('user/include/sidenav');
            $this->load->view('user/pages/services1',$data);
            $this->load->view('includes/footer'); 
        endif;
    }
    // services page 2 with insert function
    public function servicesStep2($id){
          
        $data = array();
        // If file upload form submitted
        if(!empty($_FILES['files']['name'])){
            $filesCount = count($_FILES['files']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error']    = $_FILES['files']['error'][$i];
                $_FILES['file']['size']     = $_FILES['files']['size'][$i];
                
                // File upload configuration
                $uploadPath                 = './assets/image/services';
                $config['upload_path']      = $uploadPath;
                $config['allowed_types']    = 'jpg|jpeg|png|gif';
                
                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                // Upload file to server
                if($this->upload->do_upload('file')){
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['pg_image'] = $fileData['file_name'];
                    $uploadData[$i]['pg_productid'] = $id;                    
                }
            }
            if(!empty($uploadData)){
                // Insert files data into the database
                $insert = $this->datawork->insert($uploadData);
                $data['services'] = $this->datawork->get_id('services', ['s_id' => $id]);
                $slug = $data['services']['s_nameslug'];
                // Upload status message
                $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
                redirect(base_url() . 'user/service/'. $slug);
            }
        }
        else {
            // Get files data from the database
            $session_id = $this->session->userdata('user');
            $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
            $data['newid'] = $id;

            $this->load->view('includes/header');
            $this->load->view('includes/navbar');
            $this->load->view('user/include/sidenav');
            $this->load->view('user/pages/services2',$data);
            $this->load->view('includes/footer'); 
        }
    }
    /*  UPDATE FUNCTION
    ================================================ */
    // user profile Image
    public function imgupload($id){
          
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

        $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
        $u_id = $data['users']['user_id'];
        $name = $data['users']['u_name'];
        
        $config['upload_path']   = './assets/image/users';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name']     = "$name $id";
        $config['overwrite'] = TRUE;
        
        $this->load->library('upload', $config);
        if($this->upload->do_upload('pic')){
            $fields = [
                'u_image' => $this->upload->data('file_name'),
            ];
        
        $this->datawork->update_image('users', $fields, ['user_id' => $id]);
        redirect(base_url() . 'user/profile/'. $id);
        }
        else {
            echo "Try Again !";
        }
    }
    // Upload Business Image function
    public function update_businessimage($id){
          
        $data['bizz'] = $this->datawork->get_id('bizz', ['id' => $id]);
        $name = $data['bizz']['pic'];
        $name_slug = $data['bizz']['name_slug'];
        
        $config['upload_path']   = './assets/clients';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name']     = "$name_slug" . $id;
        $config['overwrite']     = TRUE;
        $config['quality']       = '50%';
        
        $this->load->library('upload', $config);
        if($this->upload->do_upload('newimage')){
            $fields = [
                'pic' => $this->upload->data('file_name')
            ];
        
        $this->datawork->update_image('bizz', $fields, ['id' => $id]);
        redirect(base_url() . 'user/mybusiness/'. $name_slug);
        }
        else {
            echo "<h1>Fail</h1>";
        }
    }
    // Update Profile
    public function update_profile($id){
          
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('contact','Contact','numeric|exact_length[10]');
        $this->form_validation->set_rules('whatsapp','whatsapp','numeric|exact_length[10]');
        $this->form_validation->set_rules('email','email','valid_email');
        $this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('address','Address');
        $this->form_validation->set_rules('dist','District');
        $this->form_validation->set_rules('state','State');
        
        $this->form_validation->set_error_delimiters('<p class="text-danger small">','</p>');
                
        if($this->form_validation->run()===TRUE){
            $fields = [
                'u_name' => $_POST['name'],
                'u_contact' => $_POST['contact'],
                'u_whatsapp' => $_POST['whatsapp'],
                'u_gender' => $_POST['gender'],
                'u_address' => $_POST['address'],
                'u_dist' => $_POST['dist'],
                'u_state' => $_POST['state'],
                'u_email' => $_POST['email']
            ];
            $this->datawork->update_data('users', $fields, 'user_id', $id);
            redirect(base_url() . 'user/profile');
        }
        else {
            $session_id = $this->session->userdata('user');
            $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

            $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
            $u_id = $data['users']['user_id'];

            $this->load->view('includes/header');
            $this->load->view('includes/navbar');
            $this->load->view('user/include/sidenav');
            $this->load->view('user/pages/update-profile', $data);
            $this->load->view('includes/footer'); 
        }
    }
    // Update Profile
    public function verifyEmail($id = NULL){
        $sessionid = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $sessionid]);
        
        $data['users'] = $this->datawork->get_id('users', ['user_id' => $this->session->userdata('user')]);
        $otpCode = $data['users']['otp_code'];
        if($id == NULL){
            redirect(base_url() . 'user/verifyEmail/' . $this->session->userdata('user'));
        }
        elseif($otpCode != ""){
            $this->load->view('includes/header');
            $this->load->view('includes/navbar');
            $this->load->view('pages/verify', $data);
            $this->load->view('includes/footer');
        }
        else{
            $this->form_validation->set_rules('email','email','valid_email|trim|required');
            $this->form_validation->set_error_delimiters('<p class="text-danger small">','</p>');

            $email = $this->input->post('email');
            $otp = $this->input->post('otp');

            if($this->form_validation->run()===TRUE){
                $fields = [
                    'u_email' => $_POST['email'],
                    'otp_code' => $_POST['otp']
                ];
                $this->datawork->update_data('users', $fields, ['user_id' => $id]);
                $this->verification_mail($email, $otp);
                redirect(base_url() . 'user/verify');
            }
            else {
                $session_id = $this->session->userdata('user');
                $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
                $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);

                $this->load->view('includes/header');
                $this->load->view('includes/navbar');
                $this->load->view('user/include/sidenav');
                $this->load->view('user/pages/verifyEmail', $data);
                $this->load->view('includes/footer'); 
            }
        }
    }
    
    function resendOTP(){
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
        $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
        
        $this->form_validation->set_rules('email','email','valid_email|trim|required');
        $this->form_validation->set_error_delimiters('<p class="text-danger small">','</p>');

        $email = $this->input->post('email');
        $otp = $this->input->post('otp');

        if($this->form_validation->run()===TRUE){
            $fields = [
                'u_email' => $_POST['email'],
                'otp_code' => $_POST['otp']
            ];
            $this->datawork->update_data('users', $fields, ['user_id' => $session_id]);
            $this->verification_mail($email, $otp);
            redirect(base_url() . 'user/verify');
        }
        else {
            $this->load->view('includes/header');
            $this->load->view('includes/navbar');
            $this->load->view('user/include/sidenav');
            $this->load->view('user/pages/resendOTP', $data);
            $this->load->view('includes/footer'); 
        }
    }
    // Update Password
    public function update_password($id){
          
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

        $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
        $u_id = $data['users']['user_id'];
        $pass = $data['users']['u_password'];
        
        $this->form_validation->set_rules('pass','password','trim|required');
        $this->form_validation->set_rules('new_pass','new password','trim|required|min_length[6]|max_length[20]');
        $this->form_validation->set_rules('conf_pass','confirm password','trim|required|matches[new_pass]');
        
        $this->form_validation->set_error_delimiters('<p class="text-danger small">','</p>');
        
        if($this->form_validation->run()===TRUE){
            $fields = [
                'u_password' => $_POST['new_pass'],
            ];

            $old_pass = $_POST['pass'];
            if($pass == $old_pass){
                $this->datawork->update_data('users', $fields, 'user_id', $id);
                $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
                Your password is updated successfully !</div>');
                redirect(base_url() . 'user/password');
            }else{
                $this->session->set_flashdata('success', '<div class="alert alert-danger" role="alert">
                Your old password is not correct</div>');
                redirect(base_url() . 'user/password');
            }
        }
        else {
            $session_id = $this->session->userdata('user');
            $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

            $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
            $u_id = $data['users']['user_id'];  
            $u_id = $data['users']['user_id'];
            $pass = $data['users']['u_password'];

            $this->load->view('includes/header');
            $this->load->view('includes/navbar');
            $this->load->view('user/include/sidenav');
            $this->load->view('user/pages/update-password', $data);
            $this->load->view('includes/footer'); 
        }
    }
    /*  DELETE FUNCTION
    ================================================ */
    //delete function of Gallery Images
    public function delete_picture($id){
          
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

        $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
        $u_id = $data['users']['user_id'];
        
        $this->load->helper("file");
        
        $data['gallery'] = $this->datawork->get_id('gallery', ['g_id' => $id]);
        $imgname = $data['gallery']['g_image'];
        
        $this->db->where('g_id', $id);
        $this->db->delete('gallery');
        @unlink('./assets/image/gallery/' . $imgname);
        redirect(base_url() . "user/gallery");
    }
    /*  CONFIRM PAGE
    ================================================ */
    // confirm page of services or product
    public function confirmDelete($id){
          
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

        $data['services'] = $this->datawork->get_id('services', ['s_id' => $id]);
        $data['confirmid'] = $id;
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/confirmDelete-service', $data);
        $this->load->view('includes/footer');
    }        
    // confirm fuction of services or product
    public function delService($id){
          
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);
        
        $this->load->helper("file");
        $this->db->where('s_id', $id);
        $this->db->delete('services');
        
        $data['productid'] = $this->datawork->get_data('productgallery', ['pg_productid' => $id]);
        foreach($data['productid'] as $productid){
            $imgname = $productid->pg_image;
            $this->db->where('pg_productid', $id);
            $this->db->delete('productgallery');
            @unlink('./assets/image/services/' . $imgname);
        }
        $this->session->set_flashdata('success', '
            <div class="alert alert-info alert-dismissible fade show text-center" role="alert">
                Your Product or Service was deleted successfully !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        ');
        redirect(base_url() . "user/services");
    }
    
    public function confirm($id){
          
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

        $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
        $u_id = $data['users']['user_id'];
        $data['confirmid'] = $id;
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('user/include/sidenav');
        $this->load->view('user/pages/confirm', $data);
        $this->load->view('includes/footer');
    }
    // confirm now
    public function deactive_biz($id){
        
        $session_id = $this->session->userdata('user');
        $data['profile'] = $this->datawork->get_data('users', ['user_id' => $session_id]);

        $data['users'] = $this->datawork->get_id('users', ['user_id' => $session_id]);
        $u_id = $data['users']['user_id'];
        $data['bizz_id'] = $id;
        
        $fields = [
            'status' => '2'
        ];
        
        $this->datawork->update_data('bizz', $fields, 'id', $id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
        Your business is deactivated successfully !</div>');
        redirect(base_url() . 'user/deactivate_mybusiness');
    }
    // automail
    public function auto_mail($name){
         $from_email = "biznirmanam@gmail.com";
         $to_email = "log@gmail.com"; 
         $name = $name;
         $subject = "user request for new bizz";
         $message = "Review the users business.";
        
            $this->load->library('email'); 
            $this->email->from($to_email, $name); 
            $this->email->to($from_email);
            $this->email->subject($subject); 
            $this->email->message($message);
        $this->email->send();
    }
    
    public function verification_mail($email, $otp){
        $to_email = $email;
        $from_email = 'biznirmanam@gmail.com';
        $name = "BNM - Business Nirmanam";
        $subject = 'BNM account verification OTP';
        $message = '<div class="col-lg-12 bg-default text-dark">';
        $message .= '<div class="col-lg-12" style="text-align:center;">';
        $message .= '<img src="https://biznirmanam.com/assets/bnmm.png">';
        $message .= '</div>';
        $message .= '<p>Thanks for registering with BNM. Please enter this OTP to complete your registration. <br>';
        $message .= '<p>Your Business Nirmanam account verification One Time Password is';
        $message .= '<h2 style="text-align:center;">';
        $message .= $otp;
        $message .= '</h2>';
        $message .= '<p>Please do not share this OTP anywhere. <br></p>';
        $message .= '<p>Best Reguards <br> ';
        $message .= '<b>Team <br> Business Nirmanam</b> </p>';
        $message .= '<p><a href="https://www.biznirmanam.com">https://www.biznirmanam.com</a></p>';
        $message .= '<p>If any query call us on : <a href="tel:+917979085586"> +91 79 790 85 586</a></p>';
        $message .= '</div>';
        
        $this->load->library('email'); 
        $this->email->set_mailtype("html"); 
        $this->email->from($from_email, $name); 
        $this->email->to($to_email);
        $this->email->subject($subject); 
        $this->email->message($message);
        $this->email->send();
    }
    // log out function
    public function logout(){
        $this->session->unset_userdata('user');
        $this->session->sess_destroy();
        redirect(base_url('home/login'));
    }
} 
?>