<?php
class Admin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('car_authenticate')){
            redirect(base_url('auth/authenticate'));
        }   
    }

    // DASHBOARD
    public function index(){
        $data['title'] = 'Admin Panel Homepage | Car Management System';
        $data['TITLE'] = '<i class="fa fa-dashboard"></i> Dashboard';
        $data['BREADCRUMB'] = '
        <li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a></li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/page/home');
        $this->load->view('admin/include/footer');
    }
    
    // ADD DEALERS
    public function addDealer(){
        $data['title'] = 'Add Dealer | Car Management System';
        $data['TITLE'] = '<i class="fa fa-university"></i> Add Dealer';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a> / Add Dealer</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/page/add-dealer', $data);
        $this->load->view('admin/include/footer');
    }

    // INSERTION FUNCTION OF DEALER
    public function addNewDealer(){
        $data['title'] = 'Add Dealer | Car Management System';
        $data['TITLE'] = '<i class="fa fa-university"></i> Add Dealer';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a> / Add Dealer</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        $time = date("h:i:s");

        $this->form_validation->set_rules('fname','First Name','required');
        $this->form_validation->set_rules('lname','Last Name','required');
        $this->form_validation->set_rules('city','City','required');
        $this->form_validation->set_rules('state','State','required');
        $this->form_validation->set_rules('landmark','Landmark','required');
        $this->form_validation->set_rules('bio','Bio','required');
        $this->form_validation->set_rules('contact','contact','required|is_unique[dealer.dealerContact]|is_natural|exact_length[10]');
        $this->form_validation->set_rules('altcontact','contact','required|is_unique[dealer.dealerContact]|is_natural|exact_length[10]');
        $this->form_validation->set_rules('email','email','required|is_unique[dealer.dealerEmail]|valid_email');


        $slug = dealerCheckSlug(url_title($this->input->post('fname'), 'dash', TRUE));
        //$slug = url_title($this->input->post('orgname'), 'dash', TRUE);
        if($this->form_validation->run()==TRUE){
            $config['upload_path'] = './assets/image/dealer/';
            $config['allowed_types'] = "jpg|png|jpeg";
            $this->load->library('upload',$config);
            $this->upload->do_upload('dealerImage');
        $fields = [
            'dealerImage' => $_FILES['dealerImage']['name'],
            'dealerFname'   => $_POST['fname'],
            'dealerLname'   => $_POST['lname'],
            'dealerEmail'   => $_POST['email'],
            'dealerContact'   => $_POST['contact'],
            'dealerAltContact'   => $_POST['altcontact'],
            'dealerCity'   => $_POST['city'],
            'dealerState'   => $_POST['state'],
            'dealerLandmark'   => $_POST['landmark'],
            'dealerBio'   => $_POST['bio'],
            'dealerDate' => $date,
            'dealerTime' => $time,
            'dealerSlug' => $slug,
            'dealerStatus' => '1',
        ];
         $this->session->set_flashdata('success', '<script>swal("wow !", "Dealer Added successfully !", "success",);</script>');
        $this->admin_datawork->insert_data('dealer', $fields);
        redirect(base_url('admin/addDealer/'));
    }
    else{
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/page/add-dealer', $data);
        $this->load->view('admin/include/footer');
        }
    }

    public function addNewDealerCompany($id=null){
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/page/add-dealer-company', $data);
        $this->load->view('admin/include/footer');
    }

    // ACTIVE DEALER
    public function activatedDealer(){
        $data['title'] = 'Activated Dealer | Car management Sysstem';
        $data['TITLE'] = '<i class="fa fa-user"></i> Dealer';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a> /<a href="' . base_url() . 'admin/addDealer">Dealer</a> / Activated Dealer</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        
        $data['dealer'] = $this->datawork->get_data('dealer',['dealerStatus'=>"1"]);
        
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/page/active-dealer', $data);
        $this->load->view('admin/include/footer');
    }
    
    // DEACTIVE DEALER
    public function deactivatedDealer(){
        $data['title'] = 'Deactivated Dealer | Car management System';
        $data['TITLE'] = '<i class="fa fa-user"></i> Dealer';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a> /<a href="' . base_url() . 'admin/addDealer">Dealer</a> / Deactivated Dealer</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        
        $data['dealer'] = $this->datawork->get_data('dealer',['dealerStatus'=>"0"]);
        
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/page/deactive-dealer', $data);
        $this->load->view('admin/include/footer');
    }


    // INDIVISUAL DEALER VIEW
    public function viewdealer($id=NULL){
        $data['title'] = 'View Dealer | Car Management system';
        $data['TITLE'] = '<i class="fa fa-user"></i> Dealer';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a> /<a href="' . base_url() . 'admin/addDealer">Dealer</a> / View Dealer</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        
        $data['dealer'] = $this->datawork->get_data('dealer',['dealerId'=>$id]);
        
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/page/view-dealer', $data);
        $this->load->view('admin/include/footer');
    }

    // EDIT DEALER 
    public function editdealer($id = NULL){
        $data['title'] = 'Edit Dealer | Car Management System';
        $data['TITLE'] = '<i class="fa fa-building"></i>Edit  Dealers Details';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a> / <a href="' . base_url() . 'admin/activeDealer">Dealer</a> / Edit Dealer/</li>';
        
        date_default_timezone_set('Asia/Calcutta');       
        
        $date = date("d-m-Y");
        $time = date("h:i:s");

        $data['dealer'] = $this->datawork->get_data('dealer',['dealerId'=>$id]);
        
        $this->form_validation->set_rules('fname','First Name','required|alpha_numeric_spaces');
        $this->form_validation->set_rules('lname','Last Name','required|alpha_numeric_spaces');
        $this->form_validation->set_rules('contact','contact','is_natural|exact_length[10]');
        $this->form_validation->set_rules('email','email','required|valid_email');
        $this->form_validation->set_rules('aadhar','aadhar','required|is_natural|exact_length[12]');
        $this->form_validation->set_rules('pan','pan','required');
        $this->form_validation->set_rules('address','address','required|alpha_numeric_spaces');


        $slug = url_title($this->input->post('fname'), 'dash', TRUE);
        
        if($this->form_validation->run()==FALSE){
            $this->load->view('admin/include/header', $data);
            $this->load->view('admin/page/edit-dealer', $data);
            $this->load->view('admin/include/footer');
        }
        else{
            $fields = [
            'dealerFname'   => $_POST['fname'],
            'dealerLname'   => $_POST['lname'],
            'dealerEmail'   => $_POST['email'],
            'dealerContact'   => $_POST['contact'],
            'dealerAadhar'   => $_POST['aadhar'],
            'dealerPan'   => $_POST['pan'],
            'dealerAddress'   => $_POST['address'],
            'dealerSlug' => $slug,
        ];
         $this->session->set_flashdata('success', '<script>swal("wow !", "Dealer Details Edit successfully !", "success",);</script>');
        $this->admin_datawork->update_data('dealer', $fields, ['dealerId'=>$id]);
        redirect(base_url('admin/activatedDealer/'));
        }
    }


    // DELETE DEALER
    public function dealerDelete($id)
    {
        $this->admin_datawork->ajaxDelete('dealer', ['dealerId' => $id]);
        echo json_encode(array("status" => TRUE));
    }
    public function approveDealer($id){
        $this->admin_datawork->update_data('dealer', ['dealerStatus'=>'1'], ['dealerId'=>$id]);
        redirect(base_url('admin/activatedDealer/'));
    }
    public function deapproveDealer($id){
        $this->admin_datawork->update_data('dealer', ['dealerStatus'=>'0'], ['dealerId'=>$id]);
        redirect(base_url('admin/activatedDealer/'));
    }
    // ADD CAR
    public function addCar(){
        $data['title'] = 'Add Car | Car Management System';
        $data['TITLE'] = '<i class="fa fa-car"></i> Add Car';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a> / Add Car</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");

        $data['menufecturer'] = $this->admin_datawork->get_data('menufecturer',['menufecturerStatus'=>'1']);
        $data['transmission'] = $this->admin_datawork->get_data('transmission',['transmissionStatus'=>'1']);
        $data['traction'] = $this->admin_datawork->get_data('traction',['tractionStatus'=>'1']);
        $data['cartype'] = $this->admin_datawork->get_data('cartype',['cartypeStatus'=>'1']);
        $data['fuel'] = $this->admin_datawork->get_data('fuel',['fuelStatus'=>'1']);
        $data['brand'] = $this->admin_datawork->get_data('brand',['brandStatus'=>'1']);
        $data['model'] = $this->admin_datawork->get_data('model',['modelStatus'=>'1']);
        $data['year'] = $this->admin_datawork->get_data('year');

        
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/page/add-car', $data);
        $this->load->view('admin/include/footer');
    }

    // INSERTION FUNCTION OF CAR
    public function addNewCar(){
        $data['title'] = 'Add Car | Car Management System';
        $data['TITLE'] = '<i class="fa fa-university"></i> Add Car';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a> / Add Car</li>';

    $data['menufecturer'] = $this->admin_datawork->get_data('menufecturer',['menufecturerStatus'=>'1']);
    $data['transmission'] = $this->admin_datawork->get_data('transmission',['transmissionStatus'=>'1']);
        $data['traction'] = $this->admin_datawork->get_data('traction',['tractionStatus'=>'1']);
        $data['cartype'] = $this->admin_datawork->get_data('cartype',['cartypeStatus'=>'1']);
        $data['fuel'] = $this->admin_datawork->get_data('fuel',['fuelStatus'=>'1']);
        $data['brand'] = $this->admin_datawork->get_data('brand',['brandStatus'=>'1']);
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        $time = date("h:i:s");

        $this->form_validation->set_rules('carname','Car Name','required|alpha_numeric_spaces');
        $this->form_validation->set_rules('carbrand','Car Brand','required');
        $this->form_validation->set_rules('carmodel','Car Name','required|alpha_numeric_spaces');
        $this->form_validation->set_rules('milage','milage','required');
        $this->form_validation->set_rules('carfuel','fuel','required');
        $this->form_validation->set_rules('enginecapicity','Engine Capicity','required');
        $this->form_validation->set_rules('carstock','stock','required');
        $this->form_validation->set_rules('cartype','Type of car','required');
        $this->form_validation->set_rules('cartransmission','Transmission','required');
        $this->form_validation->set_rules('cartraction','Traction','required');
        $this->form_validation->set_rules('cardrivingside','Driving Side','required');
        $this->form_validation->set_rules('carmenufectureyear','Menufecrure Year','required');
        // $this->form_validation->set_rules('carmenufecturer','Menufecturer','required');
        $this->form_validation->set_rules('carprice','Price','required');
        $this->form_validation->set_rules('carfinance','Finance','required');
        $this->form_validation->set_rules('cardescription','Description','required|alpha_numeric_spaces');

        $slug = cars_slug(url_title($this->input->post('carname'), 'dash', TRUE));

        if($this->form_validation->run()==TRUE){
        $fields = [
            'carName'   => $_POST['carname'],
            'carBrand'   => $_POST['carbrand'],
            'carModel'   => $_POST['carmodel'],
            'carMilage'   => $_POST['milage'],
            'carFuel'   => $_POST['carfuel'],
            'carEngineCapicity' => $_POST['enginecapicity'],
            'carStock' => $_POST['carstock'],
            'carType' => $_POST['cartype'],
            'carTransmission' => $_POST['cartransmission'],
            'carTraction' => $_POST['cartraction'],
            'carDrivingSide' => $_POST['cardrivingside'],
            'carMenufectureYear' => $_POST['carmenufectureyear'],
            'carPrice' => $_POST['carprice'],
            'carFinance' => $_POST['carfinance'],
            'carDescription' => $_POST['cardescription'],
            'carUniqueId'=>'0',
            'carDate' => $date,
            'carKm' => $_POST['carkm'],
            'carTime' => $time,
            'carSlug' => $slug,
            'carStatus' => '1',
            'carApprove' => '1',
        ];
        $this->admin_datawork->insert_data('car', $fields);
        $lastCarId = $this->admin_datawork->get_id_lasts();
        redirect(base_url('admin/uploadCarImage/'.$lastCarId));
    }
    else{
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/page/add-car', $data);
        $this->load->view('admin/include/footer');
        }
    }

   // UPLOAD CAR IMAGE
    public function uploadCarImage($id){
        $row['title'] = 'Upload Car Image | Car Management System';
        $row['TITLE'] = '<i class="fa fa-car"></i> Add Car';
        $row['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a> / Add Car</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        $time = time("H:m:s");

        $data['car'] = $this->mmodal->get_data('car', ['carId' => $id]);
        $data['carimg'] =$this->mmodal->get_data('carimage', ['carProdId' => $id]);
/*
       
        $this->load->library('upload');
        $image = array();
        $ImageCount = count($_FILES['image_name']['name']);
        for($i = 0; $i < $ImageCount; $i++){
            $_FILES['file']['name']       = $_FILES['image_name']['name'][$i];
            $_FILES['file']['type']       = $_FILES['image_name']['type'][$i];
            $_FILES['file']['tmp_name']   = $_FILES['image_name']['tmp_name'][$i];
            $_FILES['file']['error']      = $_FILES['image_name']['error'][$i];
            $_FILES['file']['size']       = $_FILES['image_name']['size'][$i];

            // File upload configuration
            $uploadPath = './assets/image/car-image/';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            // Load and initialize upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            // Upload file to server
            if($this->upload->do_upload('file')){
                // Uploaded file data
                $imageData = $this->upload->data();
                 $uploadImgData[$i]['image_name'] = $imageData['file_name'];

            }
        }
         if(!empty($uploadImgData)){
            // Insert files data into the database
            $this->admin_datawork->multiple_images($uploadImgData);              
        }
  
        else{           
        // Pass the files data to view
        $this->load->view('admin/include/header',$row);
        $this->load->view('admin/page/upload-car-image');
        $this->load->view('admin/include/footer');

    }
    */
    $this->load->view('admin/include/header',$row);
        $this->load->view('admin/page/upload-car-image', $data);
        $this->load->view('admin/include/footer');
    }

    function ajax_upload_catimage($id){
        $timeF  = time('h:i:s');
        $hash   = md5($timeF);
        $encode = substr($hash, 0, 15);
        $encode1 = substr($hash, 0, 14);
        
        $config['upload_path']      = './assets/image/car-image/';  
        $config['allowed_types']    = 'jpg|jpeg|png|gif';
        $config['file_name']        = $encode;
        
        $this->load->library('upload', $config);
        if($this->upload->do_upload('photo')){

            $data = $this->upload->data();
            $data['prod_image'] = $data['file_name'];

            $config['image_library']    = 'gd2';
            $config['source_image']     = './assets/image/car-image/'.$data["file_name"];  
            $config['create_thumb']     = FALSE;
            $config['maintain_ratio']   = FALSE;
            $config['quality']          = '30%';
            $config['width']            = 700;
            $config['height']           = 500;
            $config['new_image']        = './assets/image/car-image/'.$data["file_name"];

            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $image_data = array(
                'carimageImage' =>  $data['file_name'],
                'carProdId'     =>  $id
            );
            $this->admin_datawork->insert_data('carimage', $image_data);

            $this->session->set_flashdata('error', '
            <div class="alert alert-success text-white bg-success alert-dismissible fade show text-center" role="alert">Product image was uploaded successfully
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        else
        {
            $this->session->set_flashdata('error', '
            <div class="alert alert-danger bg-danger text-white alert-dismissible fade show text-center" role="alert">
                Your Image wasn\'t uploaded ! Please try again
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

    function ajaxDeleteImage($id){
        $data['carimg'] = $this->admin_datawork->get_id('carimage', ['carimageId' => $id]);
        $imgname = $data['carimg']['carimageImage'];

        @unlink('./assets/image/car-image/' . $imgname);
        $this->admin_datawork->ajaxDelete('carimage', ['carimageId' => $id]);
        echo json_encode(array("status" => TRUE));
    }
    
    // ACTIVE CAR
    public function activatedCar(){
        $data['title'] = 'Activated Car | Car management Sysstem';
        $data['TITLE'] = '<i class="fa fa-car"></i> Car';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a> /<a href="' . base_url() . 'admin/addDealer">Car</a> / Activated Car</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        
        $data['car'] = $this->datawork->get_data('car',['carStatus'=>"1"]);
        
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/page/active-car', $data);
        $this->load->view('admin/include/footer');
    }
    
    // DEACTIVE CAR
    public function deactivatedCar(){
        $data['title'] = 'Deactivated car | Car management System';
        $data['TITLE'] = '<i class="fa fa-car"></i> car';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a> /<a href="' . base_url() . 'admin/addDealer">car</a> / Deactivated car</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        
         $data['car'] = $this->datawork->get_data('car',['carStatus'=>"0"]);
        
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/page/deactive-car', $data);
        $this->load->view('admin/include/footer');
    }
    
    
    // INDIVISUAL CAR VIEW
    public function viewCar($id=NULL){
        $data['title'] = 'View car | Car Management system';
        $data['TITLE'] = '<i class="fa fa-car"></i> car';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a> /<a href="' . base_url() . 'admin/addCar">car</a> / View car</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        
        $data['car'] = $this->datawork->get_data('car',['carId'=>$id]);

        $data['menufecturer'] = $this->admin_datawork->get_data('menufecturer',['menufecturerStatus'=>'1']);
        $data['transmission'] = $this->admin_datawork->get_data('transmission',['transmissionStatus'=>'1']);
        $data['traction'] = $this->admin_datawork->get_data('traction',['tractionStatus'=>'1']);
        $data['cartype'] = $this->admin_datawork->get_data('cartype',['cartypeStatus'=>'1']);
        $data['fuel'] = $this->admin_datawork->get_data('fuel',['fuelStatus'=>'1']);
        $data['brand'] = $this->admin_datawork->get_data('brand',['brandStatus'=>'1']);
        $data['model'] = $this->admin_datawork->get_data('model',['modelStatus'=>'1']);
        
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/page/view-car', $data);
        $this->load->view('admin/include/footer');
    }
    
    // EDIT CAR 
    public function editCar($id = NULL){
        $data['title'] = 'Edit Car Details | Car Management System';
        $data['TITLE'] = '<i class="fa fa-car"></i> Edit  Car Details';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a> / <a href="' . base_url() . 'admin/activeCar">Car</a> / Edit Car/</li>';
        
        date_default_timezone_set('Asia/Calcutta');       
        
        $date = date("d-m-Y");
        $time = date("h:i:s");

        $data['car'] = $this->datawork->get_data('car',['carId'=>$id]);
        $data['menufecturer'] = $this->admin_datawork->get_data('menufecturer',['menufecturerStatus'=>'1']);
        $data['transmission'] = $this->admin_datawork->get_data('transmission',['transmissionStatus'=>'1']);
        $data['traction'] = $this->admin_datawork->get_data('traction',['tractionStatus'=>'1']);
        $data['cartype'] = $this->admin_datawork->get_data('cartype',['cartypeStatus'=>'1']);
        $data['fuel'] = $this->admin_datawork->get_data('fuel',['fuelStatus'=>'1']);
        $data['brand'] = $this->admin_datawork->get_data('brand',['brandStatus'=>'1']);
        $data['model'] = $this->admin_datawork->get_data('model',['modelStatus'=>'1']);
        $data['carmodel'] = $this->admin_datawork->get_data('model',['modelStatus'=>'1']);
        
        $this->form_validation->set_rules('carname','Car Name','required|alpha_numeric_spaces');
        $this->form_validation->set_rules('carbrand','Car Brand','required');
        $this->form_validation->set_rules('carmodel','Car Modal','required|alpha_numeric_spaces');
        $this->form_validation->set_rules('milage','milage','required');
        $this->form_validation->set_rules('carfuel','fuel','required');
        $this->form_validation->set_rules('enginecapicity','Engine Capicity','required');
        $this->form_validation->set_rules('carstock','stock','required');
        $this->form_validation->set_rules('cartype','Type of car','required');
        $this->form_validation->set_rules('cartransmission','Transmission','required');
        $this->form_validation->set_rules('cartraction','Traction','required');
        $this->form_validation->set_rules('cardrivingside','Driving Side','required');
        $this->form_validation->set_rules('carmenufectureyear','Menufecrure Year','required');
        $this->form_validation->set_rules('carmenufecturer','Menufecturer','required');
        $this->form_validation->set_rules('carprice','Price','required');
        $this->form_validation->set_rules('carfinance','Finance','required');
        $this->form_validation->set_rules('cardescription','Description','required|alpha_numeric_spaces');

        $slug = url_title($this->input->post('fname'), 'dash', TRUE);
        
        if($this->form_validation->run()==FALSE){
            $this->load->view('admin/include/header', $data);
            $this->load->view('admin/page/edit-car', $data);
            $this->load->view('admin/include/footer');
        }
        else{
            $fields = [
                'carName'   => $_POST['carname'],
                'carBrand'   => $_POST['carbrand'],
                'carModel'   => $_POST['carmodel'],
                'carMilage'   => $_POST['milage'],
                'carFuel'   => $_POST['carfuel'],
                'carEngineCapicity' => $_POST['enginecapicity'],
                'carStock' => $_POST['carstock'],
                'carType' => $_POST['cartype'],
                'carTransmission' => $_POST['cartransmission'],
                'carTraction' => $_POST['cartraction'],
                'carDrivingSide' => $_POST['cardrivingside'],
                'carMenufectureYear' => $_POST['carmenufectureyear'],
                'carMenufecturer' => $_POST['carmenufecturer'],
                'carPrice' => $_POST['carprice'],
                'carFinance' => $_POST['carfinance'],
                'carDescription' => $_POST['cardescription'],
                'carSlug' => $slug,
            ];
            $this->session->set_flashdata('success', '<script>swal("wow !", "Car Details Edited successfully !", "success",);</script>');
            $this->admin_datawork->update_data('car', $fields, ['carId'=>$id]);
            redirect(base_url('admin/activatedCar/'));
        }
    }
        
    // DELETE CAR
    public function dealeteCar($id)
    {
        $this->admin_datawork->ajaxDelete('car', ['carId' => $id]);
        echo json_encode(array("status" => TRUE));
    }

    // Requested CAR
    public function requestedCar($id=NULL){
        $data['title'] = 'Requested Car | Car management Sysstem';
        $data['TITLE'] = '<i class="fa fa-car"></i> Car';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a> /<a href="' . base_url() . 'admin/addDealer">Car</a> / Requested Car</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        
        $data['car'] = $this->datawork->get_data('car',['carApprove'=>"0"]);
        $data['carDealerData'] = $this->datawork->get_id('car', ['carDealer' => $id]);
        $carDealerId = $data['carDealerData']['carDealerId'];
        
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/page/requested-car', $data);
        $this->load->view('admin/include/footer');
    }

    // Approve Car
    public function approveCar($id=NULL)
    {
       $fields = [
            'carApprove' => '1',
       ];
        $this->admin_datawork->update_data('car', $fields, ['carId'=>$id]);
        redirect(base_url('admin/activatedCar/'));
    }
    
    // Reject Car
    public function rejectCar($id=NULL)
    {
       $fields = [
            'carApprove' => '2',
       ];
        $this->admin_datawork->update_data('car', $fields, ['carId'=>$id]);
        redirect(base_url('admin/activatedCar/'));
    }
    

    // TRACTIONS
    public function traction($id=NULL){
        $data['title'] = 'Manage traction';
        $data['TITLE'] = '<i class="fa fa-car"></i> traction';
        $data['BREADCRUMB'] = '
        <li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a></li>
        <li class="breadcrumb-item"><a>traction</a></li>';
        
        $data['traction'] = $this->datawork->get_data('traction', ['tractionStatus' => '1']);
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");

        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/page/traction', $data);
        $this->load->view('admin/include/footer');
    }
    
    // INSERT FUNCTION OF TRACTION
    public function addNewTraction(){
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        $time = date("h:i:s");
        
        $slug = url_title($this->input->post('tractionname'), 'dash', TRUE);  
        $fields = [
            'tractionName'  => $_POST['tractionname'],
            'tractionSlug'   => $slug,
            'tractionStatus'   =>'1',
            'tractionDate'   => $date,
            'tractionTime' => $time
        ];
        $this->session->set_flashdata('success', '<script>swal("wow!", "traction added successfully !", "success",);</script>');
        $this->admin_datawork->insert_data('traction', $fields);
        redirect('admin/traction');
    }

    // traction Edit 
    public function tractionEdit($id)
    {
        $data = $this->admin_datawork->AjaxCall('traction', ['tractionId' => $id]);
        echo json_encode($data);
    }
    // Traction edit function
    public function updatetraction()
    {
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        $time = date("h:i:s");
        
        $slug = url_title($this->input->post('tractionName'), 'dash', TRUE);  

        $data = array(
            'tractionName'   => $this->input->post('tractionName'),
            'tractionSlug'   => $slug,
        );
        $this->session->set_flashdata('success', '<script>swal("wow!", "Traction Edited successfully !", "success",);</script>');
        $this->admin_datawork->update_data('traction', $data, 'tractionId', $this->input->post('tractionId'));
        echo json_encode(array("status" => TRUE));
    }


    // Delete Traction function
    public function tractionDelete($id)
    {
        $this->admin_datawork->ajaxDelete('traction', ['tractionId' => $id]);
        echo json_encode(array("status" => TRUE));
    }


    // model
    public function model($id=NULL){
        $data['title'] = 'Manage model';
        $data['TITLE'] = '<i class="fa fa-car"></i> model';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a></li>
        <li class="breadcrumb-item"><a>model</a></li>';
        
        $data['model'] = $this->admin_datawork->get_data('model', ['modelStatus' => '1']);
        $data['brand'] = $this->admin_datawork->get_data('brand',['brandStatus'=>'1']);
        $data['brand1'] = $this->admin_datawork->get_data('brand',['brandStatus'=>'1']);

        $data['modelBrandData'] = $this->admin_datawork->get_id('model', ['modelBrand' => $id]);
        $modelBrandId = $data['modelBrandData']['modelBrand'];
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");

        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/page/model', $data);
        $this->load->view('admin/include/footer');
    }
    
    // INSERT FUNCTION OF Model
    public function addNewModel(){
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        $time = date("h:i:s");
        
        $slug = url_title($this->input->post('modelname'), 'dash', TRUE);  
        $fields = [
            'modelName'  => $_POST['modelname'],
            'modelBrand'  => $_POST['modelbrand'],
            'modelSlug'   => $slug,
            'modelStatus'   =>'1',
        ];
        $this->session->set_flashdata('success', '<script>swal("wow!", "model added successfully !", "success",);</script>');
        $this->admin_datawork->insert_data('model', $fields);
        redirect('admin/model');
    }

    // model Edit 
    public function modelEdit($id)
    {
        $data = $this->admin_datawork->AjaxCall('model', ['modelId' => $id]);
        echo json_encode($data);
    }
    // model edit function
    public function updatemodel()
    {
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        $time = date("h:i:s");
        
        $slug = url_title($this->input->post('modelName'), 'dash', TRUE);  

        $data = array(
            'modelName'   => $this->input->post('modelName'),
            'modelBrand'   => $this->input->post('modelBrand'),
            'modelSlug'   => $slug,
        );
        $this->session->set_flashdata('success', '<script>swal("wow!", "model Edited successfully !", "success",);</script>');
        $this->admin_datawork->update_data('model', $data, 'modelId', $this->input->post('modelId'));
        echo json_encode(array("status" => TRUE));
    }


    // Delete model function
    public function modelDelete($id)
    {
        $this->admin_datawork->ajaxDelete('model', ['modelId' => $id]);
        echo json_encode(array("status" => TRUE));
    }




    // Manufecturar
    public function menufecturer($id=NULL){
        $data['title'] = 'Manage menufecturer';
        $data['TITLE'] = '<i class="fa fa-car"></i> menufecturer';
        $data['BREADCRUMB'] = '
        <li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a></li>
        <li class="breadcrumb-item"><a>menufecturer</a></li>';
        
        $data['menufecturer'] = $this->datawork->get_data('menufecturer', ['menufecturerStatus' => '1']);
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");

        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/page/menufecturer', $data);
        $this->load->view('admin/include/footer');
    }
    
    // INSERT FUNCTION OF MENUFECTURER
    public function addNewMenufecturer(){
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        $time = date("h:i:s");
        
        $slug = url_title($this->input->post('menufecturername'), 'dash', TRUE);  
        $fields = [
            'menufecturerName'  => $_POST['menufecturername'],
            'menufecturerWebsite'  => $_POST['menufecturerwebsite'],
            'menufecturerSlug'   => $slug,
            'menufecturerStatus'   =>'1',
            'menufecturerDate'   => $date,
            'menufecturerTime' => $time
        ];
         $this->session->set_flashdata('success', '<script>swal("wow!", "Menufecturer added successfully !", "success",);</script>');
        $this->admin_datawork->insert_data('menufecturer', $fields);
        redirect('admin/menufecturer');
    }

    // menufecturer Edit 
    public function menufecturerEdit($id)
    {
        $data = $this->admin_datawork->AjaxCall('menufecturer', ['menufecturerId' => $id]);
        echo json_encode($data);
    }
    // menufecturer edit function
    public function updatemenufecturer()
    {
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        $time = date("h:i:s");
        
        $slug = url_title($this->input->post('menufecturerName'), 'dash', TRUE);  

        $data = array(
            'menufecturerName'   => $this->input->post('menufecturerName'),
            'menufecturerWebsite'   => $this->input->post('menufecturerWebsite'),
            'menufecturerSlug'   => $slug,
        );
        $this->session->set_flashdata('success', '<script>swal("wow!", "Menufecturer Edited successfully !", "success",);</script>');
        $this->admin_datawork->update_data('menufecturer', $data, 'menufecturerId', $this->input->post('menufecturerId'));
        echo json_encode(array("status" => TRUE));
    }


    // Delete menufecturer function
    public function menufecturerDelete($id)
    {
        $this->admin_datawork->ajaxDelete('menufecturer', ['menufecturerId' => $id]);
        echo json_encode(array("status" => TRUE));
    }



    // Brand
    public function brand($id=NULL){
        $data['title'] = 'Manage brand';
        $data['TITLE'] = '<i class="fa fa-car"></i> brand';
        $data['BREADCRUMB'] = '
        <li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a></li>
        <li class="breadcrumb-item"><a>brand</a></li>';
        
        $data['brand'] = $this->datawork->get_data('brand', ['brandStatus' => '1']);
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");

        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/page/brand', $data);
        $this->load->view('admin/include/footer');
    }
    
    // INSERT FUNCTION OF MENUFECTURER
    public function addNewBrand(){
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        $time = date("h:i:s");
        
        $slug = url_title($this->input->post('brandname'), 'dash', TRUE);  
         $config['upload_path'] = './assets/image/brand/';
            $config['allowed_types'] = "jpg|png|jpeg";
            $this->load->library('upload',$config);
            $this->upload->do_upload('brandicon');
        $fields = [
            'brandName'  => $_POST['brandname'],
            'brandIcon'  => $_FILES['brandicon']['name'],
            'brandSlug'   => $slug,
            'brandStatus'   =>'1',
        ];
         $this->session->set_flashdata('success', '<script>swal("wow!", "Brand added successfully !", "success",);</script>');
        $this->admin_datawork->insert_data('brand', $fields);
        redirect('admin/brand');
    }

    // brand Edit 
    public function brandEdit($id)
    {
        $data = $this->admin_datawork->AjaxCall('brand', ['brandId' => $id]);
        echo json_encode($data);
    }
    // brand edit function
    public function updatebrand()
    {
        date_default_timezone_set('Asia/Calcutta');
       
        $slug = url_title($this->input->post('brandName'), 'dash', TRUE);  

        $data = array(
            'brandName'   => $this->input->post('brandName'),
            'brandIcon'   => $this->input->post('brandicon'),
            'brandSlug'   => $slug,
        );
        $this->session->set_flashdata('success', '<script>swal("wow!", "Brand Edited successfully !", "success",);</script>');
        $this->admin_datawork->update_data('brand', $data, 'brandId', $this->input->post('brandId'));
        echo json_encode(array("status" => TRUE));
    }


    // Delete brand function
    public function brandDelete($id)
    {
        $this->admin_datawork->ajaxDelete('brand', ['brandId' => $id]);
        echo json_encode(array("status" => TRUE));
    }




    // TRANSMISSION
    public function transmission($id=NULL){
        $data['title'] = 'Manage transmission';
        $data['TITLE'] = '<i class="fa fa-car"></i> transmission';
        $data['BREADCRUMB'] = '
        <li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a></li>
        <li class="breadcrumb-item"><a>Transmission</a></li>';
        
        $data['transmission'] = $this->datawork->get_data('transmission', ['transmissionStatus' => '1']);
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");

        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/page/transmission', $data);
        $this->load->view('admin/include/footer');
    }
    
    // INSERT FUNCTION OF TRANSMISSION
    public function addNewTransmission(){
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        $time = date("h:i:s");
        
        $slug = url_title($this->input->post('transmissionname'), 'dash', TRUE);  
        $fields = [
            'transmissionName'  => $_POST['transmissionname'],
            'transmissionSlug'   => $slug,
            'transmissionStatus'   =>'1',
            'transmissionDate'   => $date,
            'transmissionTime' => $time
        ];
         $this->session->set_flashdata('success', '<script>swal("wow!", "Transmission added successfully !", "success",);</script>');
        $this->admin_datawork->insert_data('transmission', $fields);
        redirect('admin/transmission');
    }

    // Transmission Edit 
    public function transmissionEdit($id)
    {
        $data = $this->admin_datawork->AjaxCall('transmission', ['transmissionId' => $id]);
        echo json_encode($data);
    }
    // Transmission edit function
    public function updatetransmission()
    {
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        $time = date("h:i:s");
        
        $slug = url_title($this->input->post('transmissionName'), 'dash', TRUE);  

        $data = array(
            'transmissionName'   => $this->input->post('transmissionName'),
            'transmissionSlug'   => $slug,
        );
        $this->session->set_flashdata('success', '<script>swal("wow!", "transmission Edited successfully !", "success",);</script>');
        $this->admin_datawork->update_data('transmission', $data, 'transmissionId', $this->input->post('transmissionId'));
        echo json_encode(array("status" => TRUE));
    }


    // Delete transmission function
    public function transmissionDelete($id)
    {
        $this->admin_datawork->ajaxDelete('transmission', ['transmissionId' => $id]);
        echo json_encode(array("status" => TRUE));
    }


    // CARTYPE
    public function cartype($id=NULL){
        $data['title'] = 'Manage cartype';
        $data['TITLE'] = '<i class="fa fa-car"></i> cartype';
        $data['BREADCRUMB'] = '
        <li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a></li>
        <li class="breadcrumb-item"><a>Transmission</a></li>';
        
        $data['cartype'] = $this->datawork->get_data('cartype', ['cartypeStatus' => '1']);
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");

        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/page/car-type', $data);
        $this->load->view('admin/include/footer');
    }
    
    // INSERT FUNCTION OF CARTYPE
    public function addNewCartype(){
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        $time = date("h:i:s");
        
        $slug = url_title($this->input->post('cartypename'), 'dash', TRUE);  
        $fields = [
            'cartypeName'  => $_POST['cartypename'],
            'cartypeSlug'   => $slug,
            'cartypeStatus'   =>'1',
            'cartypeDate'   => $date,
            'cartypeTime' => $time
        ];
         $this->session->set_flashdata('success', '<script>swal("wow!", "cartype added successfully !", "success",);</script>');
        $this->admin_datawork->insert_data('cartype', $fields);
        redirect('admin/cartype');
    }

    // CARTYPECARTYPE Edit 
    public function cartypeEdit($id)
    {
        $data = $this->admin_datawork->AjaxCall('cartype', ['cartypeId' => $id]);
        echo json_encode($data);
    }
    // CARTYPE edit function
    public function updatecartype()
    {
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        $time = date("h:i:s");
        
        $slug = url_title($this->input->post('cartypeName'), 'dash', TRUE);  

        $data = array(
            'cartypeName'   => $this->input->post('cartypeName'),
            'cartypeSlug'   => $slug,
        );
        $this->session->set_flashdata('success', '<script>swal("wow!", "cartype Edited successfully !", "success",);</script>');
        $this->admin_datawork->update_data('cartype', $data, 'cartypeId', $this->input->post('cartypeId'));
        echo json_encode(array("status" => TRUE));
    }


    // Delete CARTYPE function
    public function cartypeDelete($id)
    {
        $this->admin_datawork->ajaxDelete('cartype', ['cartypeId' => $id]);
        echo json_encode(array("status" => TRUE));
    }


    // FUEL
    public function fuel($id=NULL){
        $data['title'] = 'Manage fuel';
        $data['TITLE'] = '<i class="fa fa-car"></i> fuel';
        $data['BREADCRUMB'] = '
        <li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a></li>
        <li class="breadcrumb-item"><a>fuel</a></li>';
        
        $data['fuel'] = $this->datawork->get_data('fuel', ['fuelStatus' => '1']);
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");

        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/page/fuel', $data);
        $this->load->view('admin/include/footer');
    }
    
    // INSERT FUNCTION OF FUEL
    public function addNewFuel(){
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        $time = date("h:i:s");
        
        $slug = url_title($this->input->post('fuelname'), 'dash', TRUE);  
        $fields = [
            'fuelName'  => $_POST['fuelname'],
            'fuelSlug'   => $slug,
            'fuelStatus'   =>'1',
            'fuelDate'   => $date,
            'fuelTime' => $time
        ];
         $this->session->set_flashdata('success', '<script>swal("wow!", "fuel added successfully !", "success",);</script>');
        $this->admin_datawork->insert_data('fuel', $fields);
        redirect('admin/fuel');
    }

    // FUEL Edit 
    public function fuelEdit($id)
    {
        $data = $this->admin_datawork->AjaxCall('fuel', ['fuelId' => $id]);
        echo json_encode($data);
    }
    // FUEL edit function
    public function updatefuel()
    {
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        $time = date("h:i:s");
        
        $slug = url_title($this->input->post('fuelName'), 'dash', TRUE);  

        $data = array(
            'fuelName'   => $this->input->post('fuelName'),
            'fuelSlug'   => $slug,
        );
        $this->session->set_flashdata('success', '<script>swal("wow!", "fuel Edited successfully !", "success",);</script>');
        $this->admin_datawork->update_data('fuel', $data, 'fuelId', $this->input->post('fuelId'));
        echo json_encode(array("status" => TRUE));
    }


    // Delete FUEL function
    public function fuelDelete($id)
    {
        $this->admin_datawork->ajaxDelete('fuel', ['fuelId' => $id]);
        echo json_encode(array("status" => TRUE));
    }


    // ======== CAR BRAND CATEGORY ====================================
    // -------------------------------------------------------------------------
    
    // INSERT FUNCTION OF CATEGORY
    function addNewCategory(){
        $slug = url_title($this->input->post('title'), 'dash', TRUE);  
        $fields = [
            'catTitle'  => $_POST['title'],
            'catSlug'   => $slug,
            'catParent' => $_POST['parent']
        ];
        $insert = $this->admin_datawork->ajaxInsert('categories', $fields);
        echo json_encode(array("status" => TRUE));
    }
    // INSERT FUNCTION OF CATEGORY
    function addNewCategory2(){
        $slug = url_title($this->input->post('title'), 'dash', TRUE);  
        $fields = [
            'catTitle'  => $_POST['title'],
            'catSlug'   => $slug,
            'catParent' => $_POST['parent'],
            'catSubparent' => $_POST['subparent']
        ];
        $insert = $this->admin_datawork->insert_data('categories', $fields);
        echo json_encode(array("status" => TRUE));
    }
    // MAIN CATEGORY
    function ajaxDeleteCategory($id){
        $this->admin_datawork->ajaxDelete('categories', ['catId' => $id]);
        echo json_encode(array("status" => TRUE));
    }
    // CATEGORY
    function ajaxDeleteCategory2($id){
        $this->admin_datawork->ajaxDelete('categories', ['catId' => $id]);
        echo json_encode(array("status" => TRUE));
    }
    // SUB CATEGORY
    function ajaxDeleteCategory3($id){
        $this->admin_datawork->ajaxDelete('categories', ['catId' => $id]);
        echo json_encode(array("status" => TRUE));
    }
    // UPDATE CATEGORY IMAGE PAGE
    public function updatecatimage($slug){
        $data['category'] = $this->admin_datawork->get_id('categories', ['catSlug' => $slug]);
        $catname = $data['category']['catTitle'];
        $catId = $data['category']['catId'];

        $data['title'] = 'Update Category Image';
        $data['TITLE'] = '<i class="fa fa-dashboard"></i> Category';
        $data['BREADCRUMB'] = '
        <li class="breadcrumb-item"><a href="' . base_url() . 'admin/index">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="' . base_url() . 'catelog/category">'.$catname.'</a></li>
        <li class="breadcrumb-item"><a href="' . base_url() . 'catelog/manageCategory">Manage Category</a></li>
        <li class="breadcrumb-item"><a>Update Image</a></li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");

        $data['cats'] = $this->admin_datawork->get_data('categories', ['catSlug' => $slug]);
        
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/catelog/update-category-image', $data);
        $this->load->view('admin/include/footer');
    }

    // LEAD GENERATE
    public function lead(){
        $data['title'] = 'Genrated Lead | Car management Sysstem';
        $data['TITLE'] = '<i class="fa fa-graph"></i> Car';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'dealer/index">Dashboard</a> / Generated Lead</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");

        $data['lead'] = $this->datawork->get_data('lead');
        
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/page/generated-lead', $data);
        $this->load->view('admin/include/footer');
    }
    
    // Requested Used Car
    public function requestedUsedCar(){
        $data['title'] = 'Requested Used Car | Car management Sysstem';
        $data['TITLE'] = '<i class="fa fa-car"></i> Car';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'dealer/index">Dashboard</a> / Generated Lead</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        

        $data['requestcar'] = $this->datawork->get_data('requestcar');
        
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/page/requested-used-car', $data);
        $this->load->view('admin/include/footer');
    }


    // ======== LOGOUT FUNCTION AND SESSION ====================================
    public function logout(){
      $this->session->unset_userdata('car_authenticate');
      redirect(base_url('auth/authenticate'));
    }
}
