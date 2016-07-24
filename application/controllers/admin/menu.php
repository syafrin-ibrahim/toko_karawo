<?php
class Menu extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Mod_menu');
		$this->load->library('session');
	}

	function index(){
		
		$data['record']=$this->Mod_menu->selectAll()->result();
		$this->template->load('templateadmin','admin/menu/view',$data);	
	}

	function post(){
		if(isset($_POST['simpan'])){
				$simpan=$this->Mod_menu->save();

				if($simpan == true ){
					echo $this->session->set_flashdata('pesan','data berhasil disimpan');
				    redirect('admin/menu');
				}else{
					echo $this->session->set_flashdata('pesan','data gagal disimpan');
				    redirect('admin/menu');
				}
				
		}else{
				$data['parent']=$this->Mod_menu->selectParent()->result();
				$this->template->load('templateadmin','admin/menu/post',$data);
		}
	}

	function edit(){
			if(isset($_POST['ubah'])){
						$this->Mod_menu->update();
						redirect('admin/menu');
			}else{
					$param=$this->uri->segment(4);
					echo $param;
					$data['menu']=$this->Mod_menu->selectOne($param)->row_array();
					$data['parent']=$this->Mod_menu->selectParent()->result();
					$this->template->load('templateadmin','admin/menu/edit',$data);
			}
	}

	function delete(){
		$id=$this->uri->segment(4);
		$hapus=$this->Mod_menu->delete($id);
		if($hapus == true){
			echo $this->session->set_flashdata('pesan','data berhasil dihapus');	
			redirect('admin/menu');
		}else{
			echo $this->session->set_flashdata('pesan','data gagal dihapus');
			redirect('admin/menu');
		}
	}
}

?>