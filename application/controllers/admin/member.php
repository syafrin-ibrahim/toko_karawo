<?php
class Member extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Mod_member');
	}

	function index(){
			$data['member']=$this->Mod_member->selectAll()->result();
			$this->template->load('templateadmin','admin/member/view',$data);
	}

	function detail(){
		
				$d=$this->uri->segment(4);
				$data['member']=$this->Mod_member->selectOne($d)->row_array();
				$data['order']=$this->Mod_member->showOrder($d)->result();
				$this->template->load('templateadmin','admin/member/detail',$data);
		
	}

	function post(){

	}

	function delete(){
		$f=$this->uri->segment(4);
		$this->Mod_member->delete($f);
		redirect('admin/member');
	}
}

?>