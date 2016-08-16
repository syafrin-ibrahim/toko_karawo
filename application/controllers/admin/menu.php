<?php
class Menu extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Mod_menu');
		$this->load->library('session');
	}

	function index(){
		
		$data['record']=$this->Mod_menu->selectAll()->result();
		$this->template->load('templateadmin','admin/menu/view',$data);	
	}

	function post(){
		if(isset($_POST['simpan'])){
				$this->form_validation->set_rules('nama','nama menu','required');
				$this->form_validation->set_rules('link','link menu','required');
				if($this->form_validation->run() == TRUE){
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
				
				
		}else{
				$data['parent']=$this->Mod_menu->selectParent()->result();
				$this->template->load('templateadmin','admin/menu/post',$data);
		}
	}

	function edit(){
			if(isset($_POST['ubah'])){
						$this->form_validation->set_rules('nama','nama menu','required');
						$this->form_validation->set_rules('link','link menu','required');
						if($this->form_validation->run()== TRUE){
								$ubah=$this->Mod_menu->update();
								if($ubah == true){
									echo $this->session->set_flashdata('pesan','data berhasil dirubah');
									redirect('admin/menu');
								}else{
									echo $this->session->set_flashdata('pesan','data gagal dirubah');
									redirect('admin/menu');
								}
						}
						
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