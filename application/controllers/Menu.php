<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	function __construct(){
		parent::__construct();
		if(!$this->session->has_userdata('username')){
			redirect('/login/index');
		}
	}
	public function index()
	{
		$data["row"] = $this->getMenu();
		$data["dataMenu"] = $this->getMenuMaster();
		//redirect('/login/index');
		$this->load->view('shared/top');
		$this->load->view('shared/header');
		$this->load->view('shared/menu',$data);
		$this->load->view('menu/index',$data);
		$this->load->view('shared/bottom');
    }
    
	private function getMenu(){
		$row = $this->menu_m->GetMenu($this->session->userrole);
		return $row;
	}

	private function getMenuMaster(){
		$row = $this->menu_m->GetMenuMaster();
		return $row;
	}

	private function getRoleAll($id){
		$row = $this->user_m->GetRoleAll($id);
		return $row;
	}

	public function addForm(){
		
		$data["row"] = $this->getMenu();

		$this->load->view('shared/top');
		$this->load->view('shared/header');
		$this->load->view('shared/menu',$data);
		$this->load->view('menu/formMenu');
		$this->load->view('shared/bottom');
	}

	public function add(){
		$name = $this->input->post('name');
		$urls = $this->input->post('urls');
		$id = $this->input->post('id');
		
		if(empty($id) || $id == "" || $id == null){
			$this->menu_m->AddMenu($name,$urls);
		}else{
			$this->menu_m->EditMenu($id,$name,$urls);
		}
		$this->index();
		
	}
	public function editForm(){
		$id = $this->input->get('id');
		
		$data["row"] = $this->getMenu();
		$data["role"] = $this->getRoleAll($id);
		$data["menu"] = $this->menu_m->GetMenuById($id);
		$data["roleDetail"] = $this->menu_m->getRoleDetail($id);
		$data["id"] = $id;
		

		$this->load->view('shared/top');
		$this->load->view('shared/header');
		$this->load->view('shared/menu',$data);
		$this->load->view('menu/formMenu',$data);
		$this->load->view('shared/bottom');
	}

	public function setRole(){
		$role_id = $this->input->post('role_id');
		$menuid = $this->input->post('menuid');
		$this->user_m->SetRoleMenu($role_id,$menuid);
	}
	public function deleteRole(){
		$role_id = $this->input->post('role_id');
		$menuid = $this->input->post('menuid');
		$this->user_m->DeleteRoleMenu($role_id,$menuid);
	}

}
