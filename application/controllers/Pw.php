
<?php
class Pw extends CI_Controller{
    // DASHBOARD
    public function index($slug){
       $data['dlr'] = $this->admin_datawork->get_id('dealer',['dealerSlug'=>$slug]);
       $dlrId = $data['dlr']['dealerId'];
       $data['dealerImage'] = $data['dlr']['dealerImage'];
       $data['dslug'] = $slug;

       $this->load->view('pw/include/header');
       $this->load->view('pw/include/dealernavbar',$data);
       $this->load->view('pw/index');
       $this->load->view('pw/include/footer');
   }
    // Dealer Contact Us
   public function dealerContact($slug){
    $data['dlr'] = $this->admin_datawork->get_id('dealer',['dealerSlug'=>$slug]);
    $dlrId = $data['dlr']['dealerId'];
    $data['dealerImage'] = $data['dlr']['dealerImage'];
    $data['dslug'] = $slug;

    $this->load->view('pw/include/header');
    $this->load->view('pw/include/dealernavbar',$data);
    $this->load->view('pw/contact');
    $this->load->view('pw/include/footer');
}

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

    // Dealer Car View
public function viewCar($slug,$carslug){
    $data['dlr'] = $this->admin_datawork->get_id('dealer',['dealerSlug'=>$slug]);
    $data['clr'] = $this->admin_datawork->get_id('car',['carSlug'=>$carslug]);
    $dlrId = $data['dlr']['dealerId'];
    $data['dealerImage'] = $data['dlr']['dealerImage'];
    $data['dslug'] = $slug;

    $clrId = $data['clr']['carId'];
    $data['cslug'] = $data['clr']['carSlug'];


     $data['cara'] = $this->mmodal->get_id('car', ['carSlug' => $slug]);
        $carId      = $data['cara']['carId'];
        $dealerid   = $data['cara']['carDealer'];
        $carBrand   = $data['cara']['carBrand'];
        $carModel   = $data['cara']['carModel'];

        //$this->carView($carId, $dealerid);

        $data['cars']   = $this->mmodal->get_data('car', ['carSlug' => $slug]);
        $data['img']    = $this->mmodal->get_data('carimage', ['carProdId' => $carId]);

        $data['owlcars'] = $this->mmodal->get_data('car', ['carSlug !=' => $slug, 'carModel' => $carModel]);

        $data['countowlcars'] = $this->admin_datawork->count_all_con('car', ['carSlug !=' => $slug, 'carModel' => $carModel]);

   $this->load->view('pw/include/header');
   $this->load->view('pw/include/dealernavbar',$data);
   $this->load->view('pw/view-car',$data);
   $this->load->view('pw/include/footer');
}
}
?>