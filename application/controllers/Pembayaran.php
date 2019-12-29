<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	public function index()
	{
		if(!$this->session->has_userdata('username')){
			redirect('/login/index');
		}
		
        $data["row"] = $this->getMenu();
        $data["pembayaran"] = $this->destination_m->GetDestinationAll();
		//redirect('/login/index');
		$this->load->view('shared/top');
		$this->load->view('shared/header');
		$this->load->view('shared/menu',$data);
		$this->load->view('pembayaran/index',$data);
		$this->load->view('shared/bottom');
	}
	
	private function getMenu(){
		$row = $this->menu_m->GetMenu($this->session->userrole);
		return $row;
    }
    



}
