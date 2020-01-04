<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {
    function __construct(){
		parent::__construct();
		if(!$this->session->has_userdata('username')){
			redirect('/login/index');
		}
    }
	public function index()
	{
        $id = $this->session->userid;
        
        $data["row"] = $this->getMenu();
        $data["transaction"] = $this->transaction_m->GetTransaction($id);
		//redirect('/login/index');
		$this->load->view('shared/top');
		$this->load->view('shared/header');
		$this->load->view('shared/menu',$data);
		$this->load->view('transaction/index');
		$this->load->view('shared/bottom');
	}
	
	private function getMenu(){
		$row = $this->menu_m->GetMenu($this->session->userrole);
		return $row;
	}



}
