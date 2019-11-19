<?php
class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        
        //load google login library
        $this->load->library('google');
        
        //load user model
        $this->load->model('user');
        
        // Load facebook library
        $this->load->library('facebook');
        
        //Load user model
        $this->load->model('user_f');
    }
    // Homepage
    public function index($id=NULL){
        // main category
        $data['brand1'] = $this->datawork->get_data('brand');
        // select city
        $data['citi'] = $this->datawork->get_data('cities');
        $data['cities'] = $this->datawork->get_data('cities');
        // all business
        $data['car'] = $this->datawork->getdata_lim_ord('car', ['carStatus' => '1'], 'carId', '20');
        $data['car2'] = $this->datawork->getdata_lim_ord('car', ['carStatus' => '1'], 'carView', '20');

        $data['cars'] = $this->datawork->get_data('car', ['carId'=>$id]);

        $data['menufecturer'] = $this->admin_datawork->get_data('menufecturer',['menufecturerStatus'=>'1']);
        $data['transmission'] = $this->admin_datawork->get_data('transmission',['transmissionStatus'=>'1']);
        $data['traction'] = $this->admin_datawork->get_data('traction',['tractionStatus'=>'1']);
        $data['cartype'] = $this->admin_datawork->get_data('cartype',['cartypeStatus'=>'1']);
        
        $data['fuel'] = $this->admin_datawork->get_data('fuel',['fuelStatus'=>'1']);
        $data['brand'] = $this->admin_datawork->get_data('brand',['brandStatus'=>'1']);
        $data['model'] = $this->admin_datawork->get_data('model',['modelStatus'=>'1']);
        // index
        $data['cartype2'] = $this->admin_datawork->get_data('cartype',['cartypeStatus'=>'1']);

        $data['owlevents'] = $this->datawork->get_data('category', ['parent_id' => 'E1000', 'cat_id' => '']);

        $data['year'] = $this->admin_datawork->get_data('year');
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('pages/index', $data);
        $this->load->view('includes/footer', $data);
    }
    // Lead Generate
    public function leadGenerate(){
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email Id','required|valid_email');
        $this->form_validation->set_rules('contact','Contact','required|is_natural');
        $this->form_validation->set_rules('message','Message','required');
        $date = date("d-m-Y");
        $times = date("h:i:s");
        if($this->form_validation->run()===TRUE){
            
            $fields = [
                'leadName' => $_POST['name'],
                'leadEmail' => $_POST['email'],
                'leadContact' => $_POST['contact'],
                'leadMessage' => $_POST['message'],
                'leadDealer' => $_POST['dealer'],
                'leadCar' => $_POST['car'],
                'leadDate' => $date,
                'leadTime' => $times,
            ];
            $this->admin_datawork->insert_data('lead',$fields);
            $this->session->set_flashdata('success', '
            <div class="alert alert-success text-white bg-success alert-dismissible fade show text-center" role="alert">Your query was uploaded successfully
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        else {
            $this->session->set_flashdata('success', '
            <div class="alert alert-danger text-white bg-danger alert-dismissible fade show text-center" role="alert">Something went wrong. Please Try again 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

    // SELL USER
    public function selluser(){
        $data['menufecturer'] = $this->admin_datawork->get_data('menufecturer',['menufecturerStatus'=>'1']);
        $data['transmission'] = $this->admin_datawork->get_data('transmission',['transmissionStatus'=>'1']);
        $data['traction'] = $this->admin_datawork->get_data('traction',['tractionStatus'=>'1']);
        $data['cartype'] = $this->admin_datawork->get_data('cartype',['cartypeStatus'=>'1']);
        $data['fuel'] = $this->admin_datawork->get_data('fuel',['fuelStatus'=>'1']);
        $data['brand'] = $this->admin_datawork->get_data('brand',['brandStatus'=>'1']);
        $data['model'] = $this->admin_datawork->get_data('model',['modelStatus'=>'1']);
        $data['year'] = $this->admin_datawork->get_data('year');
        $data['city'] = $this->admin_datawork->get_data('cities');

        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('pages/selluser',$data);
        $this->load->view('includes/footer');
    }

    public function uploadSellUser(){
        $data['menufecturer'] = $this->admin_datawork->get_data('menufecturer',['menufecturerStatus'=>'1']);
        $data['transmission'] = $this->admin_datawork->get_data('transmission',['transmissionStatus'=>'1']);
        $data['traction'] = $this->admin_datawork->get_data('traction',['tractionStatus'=>'1']);
        $data['cartype'] = $this->admin_datawork->get_data('cartype',['cartypeStatus'=>'1']);
        $data['fuel'] = $this->admin_datawork->get_data('fuel',['fuelStatus'=>'1']);
        $data['brand'] = $this->admin_datawork->get_data('brand',['brandStatus'=>'1']);
        $data['model'] = $this->admin_datawork->get_data('model',['modelStatus'=>'1']);
        $data['year'] = $this->admin_datawork->get_data('year');
        $data['city'] = $this->admin_datawork->get_data('cities');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','email','required|valid_email|is_unique[user.userEmail]');
        $this->form_validation->set_rules('contact','Contact','required|is_natural|is_unique[user.userContact]');
        $this->form_validation->set_rules('city','City','required');
        if($this->form_validation->run()===TRUE){
            $date = date("dmY");
            $time  = time('h:i:s');
            $hash   = md5($date.$time);
            $encode = substr($hash, 0, 20);

           
            $usertrack = $encode;
            $fields = [
                'userName'=>$_POST['name'],
                'userEmail'=>$_POST['email'],
                'userContact'=>$_POST['contact'],
                'userCity'=>$_POST['city'],
                'userTrack'=> $usertrack,

            ];
        $this->admin_datawork->insert_data('user',$fields);
        $lastUserId = $this->admin_datawork->getLastUserId($usertrack);
        redirect('home/sell/'.$lastUserId.'/'.$usertrack);
        }
        else{
            $this->load->view('includes/header');
            $this->load->view('includes/navbar');
            $this->load->view('pages/selluser',$data);
            $this->load->view('includes/footer');
        }
    }

    //SELL
    public function sell($id=NULL){

        $data['menufecturer'] = $this->admin_datawork->get_data('menufecturer',['menufecturerStatus'=>'1']);
        $data['transmission'] = $this->admin_datawork->get_data('transmission',['transmissionStatus'=>'1']);
        $data['traction'] = $this->admin_datawork->get_data('traction',['tractionStatus'=>'1']);
        $data['cartype'] = $this->admin_datawork->get_data('cartype',['cartypeStatus'=>'1']);
        $data['fuel'] = $this->admin_datawork->get_data('fuel',['fuelStatus'=>'1']);
        $data['brand'] = $this->admin_datawork->get_data('brand',['brandStatus'=>'1']);
        $data['model'] = $this->admin_datawork->get_data('model',['modelStatus'=>'1']);
        $data['year'] = $this->admin_datawork->get_data('year');
        $data['city'] = $this->admin_datawork->get_data('cities');

        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('pages/sell',$data);
        $this->load->view('includes/footer');
    }
    public function uploadSell(){
        $date = date("d-m-Y");
        $time = time("h-i-s");
        $slug = cars_slug(url_title($this->input->post('carname'), 'dash', TRUE));
        $fields1 = [
            'carName'   => $_POST['carname'],
            'carType' => $_POST['veichletype'],
            'carBrand' => $_POST['manufacturer'],
            'carModel' => $_POST['model'],
            'carMenufectureYear' => $_POST['manufectureyear'],
            'carMilage' => $_POST['milage'],
            'carFuel' => $_POST['typeoffuel'],
            'carDrivingSide' => $_POST['drivingside'],
            'carDescription' => $_POST['otherdetails'],
            'carDescription' => $_POST['otherdetails'],
            'carPrice' => $_POST['price'],
            'carSlug' => $slug,
            'carEngineCapicity' => $_POST['enginecapicity'],
            'carTransmission' => $_POST['transmission'],
            'caruserid' => $_POST['userid'],
            'carUniqueId'=> '2'
        ];
          $config['upload_path'] = './assets/image/car-image/';
            $config['allowed_types'] = "jpg|png|jpeg";
            $this->load->library('upload',$config);
            $this->upload->do_upload('carimage');
        $img = [
            'carimageImage' => $_FILES['carimage']['name'],
            'carUseId' => $_POST['userid'],
        ];
        $this->session->set_flashdata('success', '
            <div class="alert alert-success text-white bg-success alert-dismissible fade show text-center" role="alert">Your query was uploaded successfully
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        $this->admin_datawork->insert_data('car',$fields1);
        $this->admin_datawork->insert_data('carimage',$img);
        redirect('home/selluser');
    }
    // Homepage
    public function cars($slug=NULL){
        $data['cara'] = $this->mmodal->get_id('car', ['carSlug' => $slug]);
        $carId      = $data['cara']['carId'];
        $dealerid   = $data['cara']['carDealer'];
        $carBrand   = $data['cara']['carBrand'];
        $carModel   = $data['cara']['carModel'];

        $this->carView($carId, $dealerid);

        $data['cars']   = $this->mmodal->get_data('car', ['carSlug' => $slug]);
        $data['img']    = $this->mmodal->get_data('carimage', ['carProdId' => $carId]);

        $data['owlcars'] = $this->mmodal->get_data('car', ['carSlug !=' => $slug, 'carModel' => $carModel]);

        $data['countowlcars'] = $this->admin_datawork->count_all_con('car', ['carSlug !=' => $slug, 'carModel' => $carModel]);

        $this->load->view('pages/view-car', $data);
        $this->load->view('includes/footer', $data);
    }
    // get view
    function carView($carid,$dealerid){
        $date = date("d-m-Y");
        $time = time("h:i:s");
        $array = [
            'reviewDate' => $date,
            'reviewTime' => $time,
            'reviewDealer' => $dealerid,
            'reviewCar' => $carid,
        ];
        $this->mmodal->insert_data('review', $array);
    }
    // CAR BRANDWISE
    public function brand($slug=NULL){
        $data['brands'] = $this->mmodal->get_id('brand', ['brandSlug' => $slug]);
        $brand1 = $data['brands']['brandId'];
        $data['brandName'] = $data['brands']['brandName'];

        $data['car'] = $this->mmodal->get_data('car', ['carBrand' => $brand1]);
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('pages/car-brand', $data);
        $this->load->view('includes/footer', $data);
    }
    // CAR CARTYPE
    public function cartype($slug=NULL){
        $data['cartype'] = $this->mmodal->get_id('cartype', ['cartypeSlug' => $slug]);
        $cartypeId = $data['cartype']['cartypeId'];
        $data['cartype'] = $data['cartype']['cartypeName'];

        $data['car'] = $this->mmodal->get_data('car', ['carType' => $cartypeId]);
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('pages/car-type', $data);
        $this->load->view('includes/footer', $data);
    }
    // get view
    /*
    function carView($id){
        $this->db->set('carView', 'carView+1', FALSE);
        $this->db->where('carId', $id);
        $this->db->update('car');
    }
    */
    // Dealer View
    function dealerView($id){
        $this->db->set('dealerView', 'dealerView+1', FALSE);
        $this->db->where('dealerId', $id);
        $this->db->update('dealer');
    }
    // Homepage
    public function filter(){
        $data['menufecturer'] = $this->admin_datawork->get_data('menufecturer',['menufecturerStatus'=>'1']);
        $data['transmission'] = $this->admin_datawork->get_data('transmission',['transmissionStatus'=>'1']);
        $data['traction'] = $this->admin_datawork->get_data('traction',['tractionStatus'=>'1']);
        $data['cartype'] = $this->admin_datawork->get_data('cartype',['cartypeStatus'=>'1']);
        $data['fuel'] = $this->admin_datawork->get_data('fuel',['fuelStatus'=>'1']);
        $data['brand'] = $this->admin_datawork->get_data('brand',['brandStatus'=>'1']);
        $data['model'] = $this->admin_datawork->get_data('model',['modelStatus'=>'1']);

        $data['year'] = $this->admin_datawork->get_data('year');

        //if(isset(($_GET['brand']) || ($_GET['model'] == "") || ($_GET['bodytype'] == "") || ($_GET['transmission'] == "") || ($_GET['manufacturer'] == "") || ($_GET['fuel'] == "") || ($_GET['traction'] == "") || ($_GET['year'] == "") || ($_GET['keyword'] == ""))){

        //if(($_GET['brand']) || ($_GET['model'] == "") || ($_GET['bodytype'] == "") || ($_GET['transmission'] == "") || ($_GET['manufacturer'] == "") || ($_GET['fuel'] == "") || ($_GET['traction'] == "") || ($_GET['year'] == "") || ($_GET['keyword'] == "")){

            //$data['car'] = $this->datawork->get_data('car', ['carStatus' => '1']);
        //}
        //else{
            $brand = $_GET['brand'];
            $model = $_GET['model'];
            $bodytype = $_GET['bodytype'];
            $transmission = $_GET['transmission'];
            $fuel = $_GET['fuel'];
            $year = $_GET['year'];
            $keyword = $_GET['keyword'];

            $data['car'] = $this->mmodal->filter($brand, $model, $bodytype, $transmission, $fuel, $year, $keyword);
        //}
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('pages/filter', $data);
        $this->load->view('includes/footer', $data);
    }
    // signup new users
    public function signup(){
        $this->form_validation->set_rules('name','Name','trim|required');
        $this->form_validation->set_rules('contact','Contact','trim|required|numeric|exact_length[10]|is_unique[users.u_contact]');
        $this->form_validation->set_rules('email','Email','trim|is_unique[users.u_email]');
        $this->form_validation->set_rules('reg_password','Password','required|min_length[6]|max_length[20]');
        $this->form_validation->set_rules('cpassword', 'Password Confirmation', 'required|matches[reg_password]');
        $this->form_validation->set_rules('otp', 'OTP', 'required|is_unique[users.otp_code]');
        
        $this->form_validation->set_error_delimiters('<p class="text-danger small">','</p>');
        
        $username = $this->input->post('contact');
        $email = $this->input->post('email');
        $OTP = $this->input->post('otp');
        
        if($this->form_validation->run()=== TRUE){
            $fields = [
                'u_name' => $_POST['name'],
                'u_contact' => $_POST['contact'],
                'u_email' => $_POST['email'],
                'u_password' => $_POST['reg_password'],
                'otp_code' => $OTP
                // 'u_username' => $username
            ];
            $this->datawork->insert_data('users',$fields);
            $loginid = $this->datawork->getsession($username);
            $this->session->set_userdata('user', $loginid);
            //$this->auto_mail($username);
            //$this->verification_mail($email, $OTP);
            //redirect(base_url().'user/verify');
            redirect(base_url().'user/index');
        }
        else
        {
            $userDataF = array();
        
        // Check if user is logged in
        if($this->facebook->is_authenticated()){
            // Get user facebook profile details
            $fbUserProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,link,gender,locale,cover,picture');

            // Preparing data for database insertion
            //$userDataF['oauth_provider'] = 'facebook';
            $userDataF['oauth_uid'] = $fbUserProfile['id'];
            $userDataF['u_name'] = $fbUserProfile['first_name'];
            //$userDataF['last_name'] = $fbUserProfile['last_name'];
            $userDataF['u_email'] = $fbUserProfile['email'];
            //$userDataF['gender'] = $fbUserProfile['gender'];
            //$userDataF['locale'] = $fbUserProfile['locale'];
            // $userData['cover'] = $fbUserProfile['cover']['source'];
            //$userDataF['picture_url'] = $fbUserProfile['picture']['data']['url'];
            //$userDataF['link'] = $fbUserProfile['link'];
            
            // Insert or update user data
            $userID = $this->user_f->checkUserF($userDataF);
            
            // Check user data insert or update status
            if(!empty($userID)){
                //store status & user info in session
                $email = $userDataF['u_email'];
                $loginid = $this->datawork->getsession($email);
                $this->session->set_userdata('user', $loginid);
                
                //redirect to profile page
                redirect('user/index');
            }
            
            // Get logout URL
            // $data['logoutURL'] = $this->facebook->logout_url();
        }
        else
        {
            // Get login URL
            $data['authURL'] =  $this->facebook->login_url();
            // Load login & profile view
            // $this->load->view('pages/login', $data);
        }
            //google login url
            $this->gp_login();
            $data['loginURL'] = $this->google->loginURL();
            // Load login & profile view
            $this->load->view('includes/header');
            $this->load->view('includes/navbar');
            $this->load->view('pages/login', $data);
            $this->load->view('includes/footer');
                
        }
    }
    // main search page
    public function search(){
        $data['query'] = $this->datawork->get_search_main();
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('pages/searchall');
        $this->load->view('includes/footer');
    }
    // main search page
    function query(){
        // select city
        $data['citi'] = $this->datawork->get_data('cities');
        $data['cities'] = $this->datawork->get_data('cities');
        
        if(isset($_GET['query'])){
            $title = $_GET['query'];
            $city = $_GET['city'];
            $data['title'] = $title;
            // rating data
            $data['totalrat'] = $this->datawork->get_data('rating');
        
            $data['bizz'] = $this->datawork->searchCondition('bizz',$title,$city);
            $this->load->view('includes/header');
            $this->load->view('includes/navbar');
            $this->load->view('pages/search', $data);
            $this->load->view('includes/footer');
        }
    }
        
    function fetch(){
        $output = '';
        $query = '';
        if($this->input->post('query')){
            $query = $this->input->post('query');
        }
        $data = $this->datawork->fetch_data($query);
        if($data->num_rows() > 0){
            foreach($data->result() as $row){
                $photo1 = $row->pic;
                if($photo1 == NULL){
                    $photo = base_url() . "assets/image/default.png";
                }
                else {
                    $photo = base_url() . "assets/clients/" . $photo1;
                }
            $output .= '
                <div class="col-lg-12 mb-3 p-0">
                    <a href=" ' . base_url() . 'home/business/' . $row->name_slug . '" class="nav-link box-shadow2">
                        <div class="row">
                            <div class="col-lg-4 col-5 m-0 p-0">
                                <div class="mysearch" style="background-image:url( ' . $photo . ')"></div>
                            </div>
                            <div class="col-lg-6 col-7 mt-lg-4">
                                <div class="text-dark">
                                    <p class="srch-1 mb-0">' . $row->business_name . '</p>
                                    <p class="srch-2 text-danger mb-0">' . $row->address .','. $row->city .'</p>
                                    <p class="d-none d-lg-block mb-0">Contact :' . $row->contact . '</p>
                                    <p class="d-none d-lg-block mb-0">Business Category :<b> ' . $row->category . '</b></p>
                                    <p class="d-md-none mb-0"><b>' . $row->category . '</b></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>';
            }
        }
        else
        {
            $output .= '<h5 class="text-center">Not found any Business</h5>';
        }
        echo $output;
    }
    // business page view count
    function increment($id){
        $this->db->set('pageview', 'pageview+1', FALSE);
        $this->db->where('id', $id);
        $this->db->update('bizz');
    }
    // blog page view count
    function incrementBlog($id){
        $this->db->set('blogpageview', 'blogpageview+1', FALSE);
        $this->db->where('bl_id', $id);
        $this->db->update('blogs');
    }
    function requestUsedCar($id=NULL){
         // main category
        $data['brand1'] = $this->datawork->get_data('brand');
        // select city
        $data['citi'] = $this->datawork->get_data('cities');
        $data['cities'] = $this->datawork->get_data('cities');
        // all business
        $data['car'] = $this->datawork->getdata_lim_ord('car', ['carStatus' => '1'], 'carId', '20');
        $data['car2'] = $this->datawork->getdata_lim_ord('car', ['carStatus' => '1'], 'carView', '20');

        $data['cars'] = $this->datawork->get_data('car', ['carId'=>$id]);

        $data['menufecturer'] = $this->admin_datawork->get_data('menufecturer',['menufecturerStatus'=>'1']);
        $data['transmission'] = $this->admin_datawork->get_data('transmission',['transmissionStatus'=>'1']);
        $data['traction'] = $this->admin_datawork->get_data('traction',['tractionStatus'=>'1']);
        $data['cartype'] = $this->admin_datawork->get_data('cartype',['cartypeStatus'=>'1']);
        
        $data['fuel'] = $this->admin_datawork->get_data('fuel',['fuelStatus'=>'1']);
        $data['brand'] = $this->admin_datawork->get_data('brand',['brandStatus'=>'1']);
        $data['model'] = $this->admin_datawork->get_data('model',['modelStatus'=>'1']);
        // index
        $data['cartype2'] = $this->admin_datawork->get_data('cartype',['cartypeStatus'=>'1']);

        $data['owlevents'] = $this->datawork->get_data('category', ['parent_id' => 'E1000', 'cat_id' => '']);

        $data['year'] = $this->admin_datawork->get_data('year');

        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('pages/requestcar',$data);
        $this->load->view('includes/footer');
    }
    function addReaquestCar($id=NULL){
         // main category
        $data['brand1'] = $this->datawork->get_data('brand');
        // select city
        $data['citi'] = $this->datawork->get_data('cities');
        $data['cities'] = $this->datawork->get_data('cities');
        // all business
        $data['car'] = $this->datawork->getdata_lim_ord('car', ['carStatus' => '1'], 'carId', '20');
        $data['car2'] = $this->datawork->getdata_lim_ord('car', ['carStatus' => '1'], 'carView', '20');

        $data['cars'] = $this->datawork->get_data('car', ['carId'=>$id]);

        $data['menufecturer'] = $this->admin_datawork->get_data('menufecturer',['menufecturerStatus'=>'1']);
        $data['transmission'] = $this->admin_datawork->get_data('transmission',['transmissionStatus'=>'1']);
        $data['traction'] = $this->admin_datawork->get_data('traction',['tractionStatus'=>'1']);
        $data['cartype'] = $this->admin_datawork->get_data('cartype',['cartypeStatus'=>'1']);
        
        $data['fuel'] = $this->admin_datawork->get_data('fuel',['fuelStatus'=>'1']);
        $data['brand'] = $this->admin_datawork->get_data('brand',['brandStatus'=>'1']);
        $data['model'] = $this->admin_datawork->get_data('model',['modelStatus'=>'1']);
        // index
        $data['cartype2'] = $this->admin_datawork->get_data('cartype',['cartypeStatus'=>'1']);

        $data['owlevents'] = $this->datawork->get_data('category', ['parent_id' => 'E1000', 'cat_id' => '']);

        $data['year'] = $this->admin_datawork->get_data('year');
         $date = date("d-m-Y");
         $time = date("h:i:s");
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('contact','contact','required|is_natural');
        $this->form_validation->set_rules('message','message','required');
        if($this->form_validation->run()===TRUE){
            $fields = [
                'requestName' => $_POST['name'],
                'requestEmail' => $_POST['email'],
                'requestContact' => $_POST['contact'],
                'requestMessage' => $_POST['message'],
                'requestDate' => $date,
                'requestTime' => $time,
            ];
            $this->admin_datawork->insert_data('requestcar',$fields);
         $this->session->set_flashdata('success', '
            <div class="alert alert-success text-white bg-success alert-dismissible fade show text-center" role="alert">Your query was uploaded successfully
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        else {
            $this->session->set_flashdata('success', '
            <div class="alert alert-danger text-white bg-danger alert-dismissible fade show text-center" role="alert">Something went wrong. Please Try again 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
    public function viewDealer($slug=NULL){
        $data['dlr'] = $this->admin_datawork->get_id('dealer',['dealerSlug'=>$slug]);
        $dlrId = $data['dlr']['dealerId'];
        $data['dealerImage'] = $data['dlr']['dealerImage'];
        $data['dslug'] = $slug;
        // main category
        $data['brand1'] = $this->datawork->get_data('brand');
        // select city
        $data['citi'] = $this->datawork->get_data('cities');
        $data['cities'] = $this->datawork->get_data('cities');
        // all business
        $data['car'] = $this->datawork->getdata_lim_ord('car', ['carDealer' => $dlrId, 'carStatus' => '1'], 'carId', '20');
        $data['car2'] = $this->datawork->getdata_lim_ord('car', ['carDealer' => $dlrId, 'carStatus' => '1'], 'carView', '20');
        // index
        $data['cartype2'] = $this->admin_datawork->get_data('cartype',['cartypeStatus'=>'1']);

        $data['owlevents'] = $this->datawork->get_data('category', ['parent_id' => 'E1000', 'cat_id' => '']);

        $data['year'] = $this->admin_datawork->get_data('year');

        $data['dealer'] = $this->admin_datawork->get_data('dealer',['dealerSlug'=>$slug]);

        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('pages/dealer-view',$data);
        $this->load->view('includes/footer');
    }

    // Dealer Contact Us
    public function dealerContact($slug){
        $data['dlr'] = $this->admin_datawork->get_id('dealer',['dealerSlug'=>$slug]);
        $dlrId = $data['dlr']['dealerId'];
        $data['dealerImage'] = $data['dlr']['dealerImage'];
        $data['dslug'] = $slug;

        $this->load->view('includes/header');
        $this->load->view('includes/dealernavbar',$data);
        $this->load->view('pages/dealer-contact');
        $this->load->view('includes/footer');
    }

    // Dealer Car View
    public function dealerCar(){
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('pages/dealer-carview');
        $this->load->view('includes/footer');
    }
}
?>