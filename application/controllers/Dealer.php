<?php
class Dealer extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('dealer_authenticate')){
            redirect(base_url('auth/dealerauthenticate'));
        }      
    } 
    // DASHBOARD
    public function index(){
        $data['title'] = 'Dealer Panel Homepage | Car Management System';
        $data['TITLE'] = '<i class="fa fa-dashboard"></i> Dashboard';
        $data['BREADCRUMB'] = '
        <li class="breadcrumb-item"><a href="' . base_url() . 'dealer/index">Dashboard</a></li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        
        $this->load->view('dealer/include/header', $data);
        $this->load->view('dealer/page/main');
        $this->load->view('dealer/include/footer');
    }
    // ADD CAR
/*    public function addCar(){
        $data['title'] = 'Add Car | Car Management System';
        $data['TITLE'] = '<i class="fa fa-car"></i> Add Car';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'dealer/index">Dashboard</a> / Add Car</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");

        $data['menufecturer'] = $this->admin_datawork->get_data('menufecturer',['menufecturerStatus'=>'1']);
        $data['transmission'] = $this->admin_datawork->get_data('transmission',['transmissionStatus'=>'1']);
        $data['traction'] = $this->admin_datawork->get_data('traction',['tractionStatus'=>'1']);
        $data['cartype'] = $this->admin_datawork->get_data('cartype',['cartypeStatus'=>'1']);
        $data['fuel'] = $this->admin_datawork->get_data('fuel',['fuelStatus'=>'1']);
        
        $this->load->view('dealer/include/header', $data);
        $this->load->view('dealer/page/add-car', $data);
        $this->load->view('dealer/include/footer');
    }
    

    // INSERTION FUNCTION OF CAR
    public function addNewCar(){
        $data['title'] = 'Add Car | Car Management System';
        $data['TITLE'] = '<i class="fa fa-university"></i> Add Car';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'dealer/index">Dashboard</a> / Add Car</li>';

        $data['menufecturer'] = $this->admin_datawork->get_data('menufecturer',['menufecturerStatus'=>'1']);
        $data['transmission'] = $this->admin_datawork->get_data('transmission',['transmissionStatus'=>'1']);
        $data['traction'] = $this->admin_datawork->get_data('traction',['tractionStatus'=>'1']);
        $data['cartype'] = $this->admin_datawork->get_data('cartype',['cartypeStatus'=>'1']);
        $data['fuel'] = $this->admin_datawork->get_data('fuel',['fuelStatus'=>'1']);
        
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        $time = date("h:i:s");

        $this->form_validation->set_rules('carname','Car Name','required|alpha_numeric_spaces');
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
        $this->form_validation->set_rules('carmenufecturer','Menufecturer','required');
        $this->form_validation->set_rules('carprice','Price','required');
        $this->form_validation->set_rules('carfinance','Finance','required');
        $this->form_validation->set_rules('cardescription','Description','required');

        $slug = url_title($this->input->post('carname'), 'dash', TRUE);
        //$slug = url_title($this->input->post('orgname'), 'dash', TRUE);
        if($this->form_validation->run()==TRUE){
        $fields = [
            'carName'   => $_POST['carname'],
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
            'carDate' => $date,
            'carTime' => $time,
            'carSlug' => $slug,
            'carStatus' => '1',
            'carApprove' => '0',
            'carDealerId' => $_POST['cardealer'],
        ];  
         $this->session->set_flashdata('success', '<script>swal("wow !", "Car Added successfully !", "success",);</script>');
        $this->admin_datawork->insert_data('car', $fields);
        redirect(base_url('dealer/addCar/'));
    }
    else{
        $this->load->view('dealer/include/header', $data);
        $this->load->view('dealer/page/add-car', $data);
        $this->load->view('dealer/include/footer');
        }
    }
    
    // ACTIVE CAR
    public function activatedCar($id=null){
        $data['title'] = 'Activated Car | Car management System';
        $data['TITLE'] = '<i class="fa fa-car"></i> Car';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'dealer/index">Dashboard</a> /<a href="' . base_url() . 'dealer/addCar">Car</a> / Activated Car</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        
        $data['session'] = $this->datawork->get_id('dealer', ['dealerEmail' => $this->session->userdata('dealer_authenticate')]);
        $session = $data['session']['dealerId'];
        $data['car'] = $this->datawork->get_data('car',['carDealerId'=>$session,'carStatus'=>'1']);
        
        $data['carTypeData'] = $this->datawork->get_id('car', ['carType' => $id]);
        $carTypeId = $data['carTypeData']['carType'];

        $this->load->view('dealer/include/header', $data);
        $this->load->view('dealer/page/active-car', $data);
        $this->load->view('dealer/include/footer');
    }
    
    // DEACTIVE CAR
    public function deactivatedCar(){
        $data['title'] = 'Deactivated Car | Car management Sysstem';
        $data['TITLE'] = '<i class="fa fa-car"></i> Car';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'dealer/index">Dashboard</a> /<a href="' . base_url() . 'dealer/addCar">Car</a> / Activated Car</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        
        $data['session'] = $this->datawork->get_id('dealer', ['dealerEmail' => $this->session->userdata('dealer_authenticate')]);
        $session = $data['session']['dealerId'];
        $data['car'] = $this->datawork->get_data('car',['carDealerId'=>$session,'carStatus'=>'0']);
        
        $this->load->view('dealer/include/header', $data);
        $this->load->view('dealer/page/deactive-car', $data);
        $this->load->view('dealer/include/footer');
    }
    
    
    // INDIVISUAL CAR VIEW
    public function viewCar($id=NULL){
        $data['title'] = 'View car | Car Management system';
        $data['TITLE'] = '<i class="fa fa-car"></i> car';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'dealer/index">Dashboard</a> /<a href="' . base_url() . 'dealer/addCar">car</a> / View car</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        
        $data['car'] = $this->datawork->get_data('car',['carId'=>$id]);
        $data['carTypeData'] = $this->datawork->get_id('car', ['carType' => $id]);
        $carTypeId = $data['carTypeData']['carType'];

        $data['carFuelData'] = $this->datawork->get_id('car', ['carFuel' => $id]);
        $carFuelId = $data['carFuelData']['carFuel'];

        $data['carTransmissionData'] = $this->datawork->get_id('car', ['carTransmission' => $id]);
        $carTransmissionId = $data['carTransmissionData']['carTransmission'];

        $data['carTractionData'] = $this->datawork->get_id('car', ['carTraction' => $id]);
        $carTractionId = $data['carTractionData']['carTraction'];

        $data['carMenufecturerData'] = $this->datawork->get_id('car', ['carMenufecturer' => $id]);
        $carTractionId = $data['carMenufecturerData']['carMenufecturer'];
        
        $this->load->view('dealer/include/header', $data);
        $this->load->view('dealer/page/view-car', $data);
        $this->load->view('dealer/include/footer');
    }
    
    // EDIT CAR 
    public function editCar($id = NULL){
        $data['title'] = 'Edit Car Details | Car Management System';
        $data['TITLE'] = '<i class="fa fa-car"></i> Edit  Car Details';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'dealer/index">Dashboard</a> / <a href="' . base_url() . 'dealer/activeCar">Car</a> / Edit Car/</li>';
        
        date_default_timezone_set('Asia/Calcutta');       
        
        $date = date("d-m-Y");
        $time = date("h:i:s");

        $data['car'] = $this->datawork->get_data('car',['carId'=>$id]);
        $data['menufecturer'] = $this->admin_datawork->get_data('menufecturer',['menufecturerStatus'=>'1']);
        $data['transmission'] = $this->admin_datawork->get_data('transmission',['transmissionStatus'=>'1']);
        $data['traction'] = $this->admin_datawork->get_data('traction',['tractionStatus'=>'1']);
        $data['cartype'] = $this->admin_datawork->get_data('cartype',['cartypeStatus'=>'1']);
        $data['fuel'] = $this->admin_datawork->get_data('fuel',['fuelStatus'=>'1']);


        $data['carTypeData'] = $this->datawork->get_id('car', ['carType' => $id]);
        $carTypeId = $data['carTypeData']['carType'];

        $data['carFuelData'] = $this->datawork->get_id('car', ['carFuel' => $id]);
        $carFuelId = $data['carFuelData']['carFuel'];

        $data['carTransmissionData'] = $this->datawork->get_id('car', ['carTransmission' => $id]);
        $carTransmissionId = $data['carTransmissionData']['carTransmission'];

        $data['carTractionData'] = $this->datawork->get_id('car', ['carTraction' => $id]);
        $carTractionId = $data['carTractionData']['carTraction'];

        $data['carMenufecturerData'] = $this->datawork->get_id('car', ['carMenufecturer' => $id]);
        $carTractionId = $data['carMenufecturerData']['carMenufecturer'];
        
        $this->form_validation->set_rules('carname','Car Name','required|alpha_numeric_spaces');
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
        $this->form_validation->set_rules('carmenufecturer','Menufecturer','required');
        $this->form_validation->set_rules('carprice','Price','required');
        $this->form_validation->set_rules('carfinance','Finance','required');
        $this->form_validation->set_rules('cardescription','Description','required|alpha_numeric_spaces');

        $slug = url_title($this->input->post('fname'), 'dash', TRUE);
        
        if($this->form_validation->run()==FALSE){
            $this->load->view('dealer/include/header', $data);
            $this->load->view('dealer/page/edit-car', $data);
            $this->load->view('dealer/include/footer');
        }
        else{
            $fields = [
                'carName'   => $_POST['carname'],
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
            redirect(base_url('dealer/activatedCar/'));
        }
    }
        
    // DELETE CAR
    
     public function dealeteCar($id)
    {
        $this->admin_datawork->ajaxDelete('car', ['carId' => $id]);
        echo json_encode(array("status" => TRUE));
    }
    */



    // ADD CAR
    public function addCar(){
        $data['title'] = 'Add Car | Car Management System';
        $data['TITLE'] = '<i class="fa fa-car"></i> Add Car';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'dealer/index">Dashboard</a> / Add Car</li>';
        
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

        $sessionid = $_SESSION['dealer_authenticate'];
        $data['userid'] = $this->admin_datawork->get_id('dealer',['dealerEmail'=> $sessionid]);
        $dealid =  $data['userid']['dealerId'];  

        $this->load->view('dealer/include/header', $data);
        $this->load->view('dealer/page/add-car', $data);
        $this->load->view('dealer/include/footer');
    }
    
    // INSERTION FUNCTION OF CAR
    public function addNewCar(){
        $data['title'] = 'Add Car | Car Management System';
        $data['TITLE'] = '<i class="fa fa-university"></i> Add Car';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'dealer/index">Dashboard</a> / Add Car</li>';

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
        $sessionid = $_SESSION['dealer_authenticate'];
        $data['userid'] = $this->admin_datawork->get_id('dealer',['dealerEmail'=> $sessionid]);
        $dealid =  $data['userid']['dealerId'];  

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
            'carDealer' => $dealid,
            'carPrice' => $_POST['carprice'],
            'carFinance' => $_POST['carfinance'],
            'carDescription' => $_POST['cardescription'],
            'carUniqueId' => '1',
            'carDate' => $date,
            'carKm' => $_POST['carkm'],
            'carTime' => $time,
            
            'carStatus' => '1',
            'carApprove' => '1',
        ];
        $this->admin_datawork->insert_data('car', $fields);
        $lastCarId = $this->admin_datawork->get_id_lasts();
        redirect(base_url('dealer/uploadCarImage/'.$lastCarId));
    }
    else{
        $this->load->view('dealer/include/header', $data);
        $this->load->view('dealer/page/add-car', $data);
        $this->load->view('dealer/include/footer');
        }
    }

   // UPLOAD CAR IMAGE
    public function uploadCarImage($id){
        $row['title'] = 'Upload Car Image | Car Management System';
        $row['TITLE'] = '<i class="fa fa-car"></i> Add Car';
        $row['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'dealer/index">Dashboard</a> / Add Car</li>';
        
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
        $this->load->view('dealer/include/header',$row);
        $this->load->view('dealer/page/upload-car-image');
        $this->load->view('dealer/include/footer');

    }
    */
    $this->load->view('dealer/include/header',$row);
        $this->load->view('dealer/page/upload-car-image', $data);
        $this->load->view('dealer/include/footer');
    }

    function ajax_upload_catimage($id){
        $timeF  = time('h:i:s');
        $hash   = md5($timeF);
        $encode = substr($hash, 0, 15);
        $encode1 = substr($hash, 0, 14);
        
        $config['upload_path']      = './assets/image/car-image/';  
        $config['allowed_types']    = 'jpg|jpeg|png|gif';
        $config['file_name']        = $encode;

        $sessionid = $_SESSION['dealer_authenticate'];
        $data['userid'] = $this->admin_datawork->get_id('dealer',['dealerEmail'=> $sessionid]);
        $dealid =  $data['userid']['dealerId'];  

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
                'carProdId'     =>  $id,
                'carUserId' => $dealid,
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
    
    // LISTED CAR
    public function listedCar(){
        $data['title'] = 'Listed Car | Car management Sysstem';
        $data['TITLE'] = '<i class="fa fa-car"></i> Car';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'dealer/index">Dashboard</a> /<a href="' . base_url() . 'dealer/addDealer">Car</a> / Listed Car</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        
        $sessionid = $_SESSION['dealer_authenticate'];
        $data['userid'] = $this->admin_datawork->get_id('dealer',['dealerEmail'=> $sessionid]);
        $dealid =  $data['userid']['dealerId'];  


        $data['car'] = $this->datawork->get_data('car',['carDealer'=>$dealid]);
        
        $this->load->view('dealer/include/header', $data);
        $this->load->view('dealer/page/listed-car', $data);
        $this->load->view('dealer/include/footer');
    }

    // ACTIVE CAR
    public function activatedCar(){
        $data['title'] = 'Activated Car | Car management Sysstem';
        $data['TITLE'] = '<i class="fa fa-car"></i> Car';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'dealer/index">Dashboard</a> /<a href="' . base_url() . 'dealer/addDealer">Car</a> / Activated Car</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        
        $sessionid = $_SESSION['dealer_authenticate'];
        $data['userid'] = $this->admin_datawork->get_id('dealer',['dealerEmail'=> $sessionid]);
        $dealid =  $data['userid']['dealerId'];  


        $data['car'] = $this->datawork->get_data('car',['carStatus'=>"1",'carDealer'=>$dealid]);
        
        $this->load->view('dealer/include/header', $data);
        $this->load->view('dealer/page/active-car', $data);
        $this->load->view('dealer/include/footer');
    }
    
    // DEACTIVE CAR
    public function deactivatedCar(){
        $data['title'] = 'Deactivated car | Car management System';
        $data['TITLE'] = '<i class="fa fa-car"></i> car';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'dealer/index">Dashboard</a> /<a href="' . base_url() . 'dealer/addDealer">car</a> / Deactivated car</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");

        $sessionid = $_SESSION['dealer_authenticate'];
        $data['userid'] = $this->admin_datawork->get_id('dealer',['dealerEmail'=> $sessionid]);
        $dealid =  $data['userid']['dealerId'];  

        $data['car'] = $this->datawork->get_data('car',['carStatus'=>"0",'carDealer'=>$dealid]);
        
        $this->load->view('dealer/include/header', $data);
        $this->load->view('dealer/page/deactive-car', $data);
        $this->load->view('dealer/include/footer');
    }
    
    
    // INDIVISUAL CAR VIEW
    public function viewCar($id=NULL){
        $data['title'] = 'View car | Car Management system';
        $data['TITLE'] = '<i class="fa fa-car"></i> car';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'dealer/index">Dashboard</a> /<a href="' . base_url() . 'dealer/addCar">car</a> / View car</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
            $data['cara'] = $this->mmodal->get_id('car', ['carSlug' => $id]);
        $carId      = $data['cara']['carId'];
        $dealerid   = $data['cara']['carDealer'];
        $carBrand   = $data['cara']['carBrand'];
        $carModel   = $data['cara']['carModel'];
        $data['car'] = $this->datawork->get_data('car',['carSlug'=>$id]);
         $data['img']    = $this->mmodal->get_data('carimage', ['carProdId' => $carId]);

           $data['owlcars'] = $this->mmodal->get_data('car', ['carSlug !=' => $id, 'carModel' => $carModel]);

        $data['countowlcars'] = $this->admin_datawork->count_all_con('car', ['carSlug !=' => $id, 'carModel' => $carModel]);

        $data['menufecturer'] = $this->admin_datawork->get_data('menufecturer',['menufecturerStatus'=>'1']);
        $data['transmission'] = $this->admin_datawork->get_data('transmission',['transmissionStatus'=>'1']);
        $data['traction'] = $this->admin_datawork->get_data('traction',['tractionStatus'=>'1']);
        $data['cartype'] = $this->admin_datawork->get_data('cartype',['cartypeStatus'=>'1']);
        $data['fuel'] = $this->admin_datawork->get_data('fuel',['fuelStatus'=>'1']);
        $data['brand'] = $this->admin_datawork->get_data('brand',['brandStatus'=>'1']);
        $data['model'] = $this->admin_datawork->get_data('model',['modelStatus'=>'1']);
        
        $this->load->view('dealer/include/header', $data);
        $this->load->view('dealer/page/view-car', $data);
        $this->load->view('dealer/include/footer');
    }
    
    // EDIT CAR 
    public function editCar($id = NULL){
        $data['title'] = 'Edit Car Details | Car Management System';
        $data['TITLE'] = '<i class="fa fa-car"></i> Edit  Car Details';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'dealer/index">Dashboard</a> / <a href="' . base_url() . 'dealer/activeCar">Car</a> / Edit Car/</li>';
        
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
            $this->load->view('dealer/include/header', $data);
            $this->load->view('dealer/page/edit-car', $data);
            $this->load->view('dealer/include/footer');
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
            redirect(base_url('dealer/activatedCar/'));
        }
    }
        
    // DELETE CAR
    public function dealeteCar($id)
    {
        $this->admin_datawork->ajaxDelete('car', ['carId' => $id]);
        echo json_encode(array("status" => TRUE));
    }

    // LEAD GENERATE
    public function lead(){
        $data['title'] = 'Genrated Lead | Car management Sysstem';
        $data['TITLE'] = '<i class="fa fa-graph"></i> Car';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'dealer/index">Dashboard</a> / Generated Lead</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        
        $sessionid = $_SESSION['dealer_authenticate'];
        $data['userid'] = $this->admin_datawork->get_id('dealer',['dealerEmail'=> $sessionid]);
        $dealid =  $data['userid']['dealerId'];  


        $data['lead'] = $this->datawork->get_data('lead',['leadDealer'=>$dealid]);
        
        $this->load->view('dealer/include/header', $data);
        $this->load->view('dealer/page/generated-lead', $data);
        $this->load->view('dealer/include/footer');
    }
    
    // Requested Used Car
    public function requestedUsedCar(){
        $data['title'] = 'Requested Used Car | Car management Sysstem';
        $data['TITLE'] = '<i class="fa fa-car"></i> Car';
        $data['BREADCRUMB'] = '<li class="breadcrumb-item"><a href="' . base_url() . 'dealer/index">Dashboard</a> / Generated Lead</li>';
        
        date_default_timezone_set('Asia/Calcutta');
        $date = date("d-m-Y");
        

        $data['requestcar'] = $this->datawork->get_data('requestcar');
        
        $this->load->view('dealer/include/header', $data);
        $this->load->view('dealer/page/requested-used-car', $data);
        $this->load->view('dealer/include/footer');
    }

    // ======== LOGOUT FUNCTION AND SESSION ====================================
    public function logout(){
      $this->session->unset_userdata('dealer_authenticate');
      redirect(base_url('home/index'));
    }
}
?>