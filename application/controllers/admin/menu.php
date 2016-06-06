<?php
class Menu extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Mod_menu');
	}

	function index(){
		
		$data['record']=$this->Mod_menu->selectAll()->result();
		$this->template->load('templateadmin','admin/menu/view',$data);	
	}

	function post(){
		if(isset($_POST['simpan'])){
				$this->Mod_menu->save();
				redirect('admin/kategori');
		}else{
				$data['parent']=$this->Mod_menu->selectParent()->result();
				$this->template->load('templateadmin','admin/kategori/post',$data);
		}
	}

	function edit(){
			if(isset($_POST['ubah'])){
						$this->Mod_menu->update();
						redirect('admin/kategori');
			}else{
					$param=$this->uri->segment(4);
					echo $param;
					$data['kategori']=$this->Mod_menu->selectOne($param)->row_array();
					$data['parent']=$this->Mod_menu->selectParent()->result();
					$this->template->load('templateadmin','admin/kategori/edit',$data);
			}
	}

	function delete(){
		$id=$this->uri->segment(4);
		$this->db->where('kategori_id',$id);
		$this->db->delete('tabel_kategori');
		redirect('admin/kategori');
	}
}

?>