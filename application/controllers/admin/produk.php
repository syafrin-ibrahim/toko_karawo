<?php
class Produk extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model(array('Mod_produk','Mod_kategori'));
		$this->load->library('session');
	}

	function index(){
		$data['r']=$this->Mod_produk->selectAll()->result();
		$this->template->load('templateadmin','admin/produk/view',$data);
	}

	function post(){
		if(isset($_POST['simpan'])){

			$config['upload_path']='./template/AdminLTE/gambarproduk/';
			$config['allowed_types']='jpg|png';
			$this->load->library('upload',$config);
			$this->upload->do_upload();
			$data=$this->upload->data();
			$simpan=$this->Mod_produk->save($data['file_name']);

			if($simpan == true ){
				echo $this->session->set_flashdata('pesan','data berhasil disimpan');
			    redirect('admin/produk');
			}else{
				echo $this->session->set_flashdata('pesan','data gagal disimpan');
			    redirect('admin/produk');
			}
		}else{
				$data['kategori']=$this->Mod_kategori->selectAll()->result();
				$this->template->load('templateadmin','admin/produk/post',$data);
		}
	}

	function edit(){
		if(isset($_POST['update'])){
			$config['upload_path']='./template/AdminLTE/gambarproduk/';
			$config['allowed_types']='jpg|png';
			$this->load->library('upload',$config);
			$this->upload->do_upload();
			$data=$this->upload->data();
		    $this->Mod_produk->update($data['file_name']);
			redirect('admin/produk');
		}else{
			$id=$this->uri->segment(4);
			$data['produk']=$this->Mod_produk->selectOne($id)->row_array();
			$data['kategori']=$this->Mod_kategori->selectAll()->result();
			$this->template->load('templateadmin','admin/produk/edit',$data);
		}
	}

	function delete($id){
		$id=$this->uri->segment(4);
		
		$this->Mod_produk->delete($id);
		redirect('admin/produk');
	}


}

?>