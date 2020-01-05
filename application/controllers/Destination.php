<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destination extends CI_Controller {

    function __construct(){
		parent::__construct();
		if(!$this->session->has_userdata('username')){
			redirect('/login/index');
		}
    }
	public function index()
	{
        $data["row"] = $this->getMenu();
        $data["destinasi"] = $this->destination_m->GetDestinationAll();
		//redirect('/login/index');
		$this->load->view('shared/top');
		$this->load->view('shared/header');
		$this->load->view('shared/menu',$data);
		$this->load->view('destination/index',$data);
		$this->load->view('shared/bottom');
	}
	
	private function getMenu(){
		$row = $this->menu_m->GetMenu($this->session->userrole);
		return $row;
    }
    
	public function invoice(){
		$id = $this->input->get("id");
		$data["row"] = $this->getMenu();
		$data["destination"] = $this->destination_m->GetDestinationInvoice($id);
		//redirect('/login/index');
		$this->load->view('shared/top');
		$this->load->view('shared/header');
		$this->load->view('shared/menu',$data);
		$this->load->view('destination/invoice',$data);
		$this->load->view('shared/bottom');
	}

	public function transaction(){
		$size = $this->input->post("size");
		$des_id = $this->input->post("id");
		$user_id = $this->session->userid;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		do{
			$randomString = '';
			for ($i = 0; $i < 5; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
	
			$count = $this->destination_m->CheckCode($randomString);
		}while($count->jumlah >= 1);
		
		$result = $this->destination_m->Transaction($user_id,$des_id,$size,$randomString);
		$data["message"] =  $result->o_message;
		if($result->o_code == 1){
			$data["row"] = $this->getMenu();
			$data["destinasi"] = $this->destination_m->GetDestinationAll();
			//redirect('/login/index');
			$this->load->view('shared/top');
			$this->load->view('shared/header');
			$this->load->view('shared/menu',$data);
			$this->load->view('destination/index',$data);
			$this->load->view('shared/bottom');
		}else{
			$data["row"] = $this->getMenu();
			$data["destination"] = $this->destination_m->GetDestinationInvoice($des_id);
			//redirect('/login/index');
			$this->load->view('shared/top');
			$this->load->view('shared/header');
			$this->load->view('shared/menu',$data);
			$this->load->view('destination/invoice',$data);
			$this->load->view('shared/bottom');
		}
	}

	public function destinationList(){
		$data["row"] = $this->getMenu();
		$data["destination"] = $this->destination_m->GetDestination();
		//redirect('/login/index');
		$this->load->view('shared/top');
		$this->load->view('shared/header');
		$this->load->view('shared/menu',$data);
		$this->load->view('destination/destinationList',$data);
		$this->load->view('shared/bottom');
	}

	public function destinationScheduleList(){
		$id = $this->input->get("id");

		$data["row"] = $this->getMenu();
		$data["id"] = $id;
		$data["destination"] = $this->destination_m->GetDestinationSchedule($id);
		//redirect('/login/index');
		$this->load->view('shared/top');
		$this->load->view('shared/header');
		$this->load->view('shared/menu',$data);
		$this->load->view('destination/destinationScheduleList',$data);
		$this->load->view('shared/bottom');
	}

	public function addForm(){
		$data["destination_id"] = $this->input->get("destination_id");
		$data["row"] = $this->getMenu();
		//redirect('/login/index');
		$this->load->view('shared/top');
		$this->load->view('shared/header');
		$this->load->view('shared/menu',$data);
		$this->load->view('destination/destinationScheduleForm',$data);
		$this->load->view('shared/bottom');
	}

	public function add(){
		$destination_id = $this->input->post("destination_id");
		$time_start = $this->input->post("mulai");
		$time_end = $this->input->post("sampai");
		$slot = $this->input->post("slot");
		$last_register = $this->input->post("last");
		$price = $this->input->post("harga");

		$this->destination_m->AddDestination($destination_id,$time_start,$time_end,$slot,$last_register,$price);

		$data["row"] = $this->getMenu();
		$data["id"] = $destination_id;
		$data["destination"] = $this->destination_m->GetDestinationSchedule($destination_id);
		//redirect('/login/index');
		$this->load->view('shared/top');
		$this->load->view('shared/header');
		$this->load->view('shared/menu',$data);
		$this->load->view('destination/destinationScheduleList',$data);
		$this->load->view('shared/bottom');
	}

}
