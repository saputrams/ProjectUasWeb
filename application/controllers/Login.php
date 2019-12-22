<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('Login/index');
	}

	public function checkLogin()
	{
		$user_name = $this->input->post('user_name');
		$user_password = $this->input->post('user_password');

		$row = $this->login_m->CheckLogin($user_name,$user_password);

		if($row->o_code == 1){
			$data_session = array(
				'userid' => $row->o_userid,
				'username' => $row->o_username,
				'userrole' => $row->o_userrole,
				'fullname' => $row->o_full_name,
				'useremail' => $row->o_email
				);
 
			$this->session->set_userdata($data_session);
			redirect('home');
		}else{
			$data["message"] = $row->o_message;
			$this->load->view('Login/index',$data);
		}
	}
}
