<?php
class Halaman extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Mod_halaman');
	}

	function index(){
			$data['halaman']=$this->Mod_halaman->selectAll()->result();
			$this->template->load('templateadmin','admin/halaman/view',$data);
	}

	function post(){
		if(isset($_POST['submit'])){
				$this->Mod_halaman->save();
				redirect('admin/halaman');
		}else{
			$this->template->load('templateadmin','admin/halaman/post');
		}

	}

	function edit(){
		if(isset($_POST['ubah'])){
			$this->Mod_halaman->update();
			redirect('admin/halaman');
		}else{
			$s=$this->uri->segment(4);
			$data['halaman']=$this->Mod_halaman->selectOne($s)->row_array();
			$this->template->load('templateadmin','admin/halaman/edit',$data);
		}
	}
	function delete(){
		$seg=$this->uri->segment(4);
		$this->Mod_halaman->delete($seg);
		redirect('admin/halaman');
	}
}

?>