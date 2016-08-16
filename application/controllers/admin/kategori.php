<?php
class Kategori extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Mod_kategori');
	}

	function index(){
		
		$data['record']=$this->Mod_kategori->selectAll()->result();
		$this->template->load('templateadmin','admin/kategori/view',$data);	
	}

	function post(){
		if(isset($_POST['simpan'])){
				$this->form_validation->set_rules('nama','name','required');
				$this->form_validation->set_rules('link','link','required');
				if($this->form_validation->run() == TRUE){
					$simpan=$this->Mod_kategori->save();
					if($simpan == true){
						echo $this->session->set_flashdata('pesan','data berhasil disimpan');
						redirect('admin/kategori');
					}else{
						echo $this->session->set_flashdata('pesan','data gagal disimpan');
						redirect('admin/kategori');
					}
					
				}else{
					$data['parent']=$this->Mod_kategori->selectParent()->result();
					$this->template->load('templateadmin','admin/kategori/post',$data);
				}
				
		}else{
				$data['parent']=$this->Mod_kategori->selectParent()->result();
				$this->template->load('templateadmin','admin/kategori/post',$data);
		}
	}

	function edit(){
			if(isset($_POST['ubah'])){
						$this->form_validation->set_rules('nama','names','required');
						$this->form_validation->set_rules('link','linkes','required');
						if($this->form_validation->run() == TRUE){
								$simpan=$this->Mod_kategori->update();
								if($simpan==true){
									echo $this->session->set_flashdata('pesan','data berhasil diubah');
									redirect('admin/kategori');
								}else{
									echo $this->session->set_flashdata('pesan','data gagal diubah');
									redirect('admin/kategori');
								}
								
						}else{
							$param=$this->uri->segment(4);
							$data['kategori']=$this->Mod_kategori->selectOne($param)->row_array();
							$data['parent']=$this->Mod_kategori->selectParent()->result();
							$this->template->load('templateadmin','admin/kategori/edit',$data);
						}
						
			}else{
					$param=$this->uri->segment(4);
					$data['kategori']=$this->Mod_kategori->selectOne($param)->row_array();
					$data['parent']=$this->Mod_kategori->selectParent()->result();
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