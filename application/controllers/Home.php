<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if(!$this->session->has_userdata('username')){
			redirect('/login/index');
		}
		
		//redirect('/login/index');
		$this->load->view('shared/top');
		$this->load->view('shared/header');
		$this->load->view('shared/menu');
		$this->load->view('home/index');
		$this->load->view('shared/bottoma');
	}
}
