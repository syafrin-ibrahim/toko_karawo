<?php
class Kategori extends CI_Controller{
	
	function showKategori(){
		$uri=$this->uri->segment(2);
		$kategori=$this->db->get_where('tabel_kategori',array('nama_kategori_seo'=>$uri))->row_array();
		$id=$kategori['kategori_id'];
		$data['produk']=$this->db->get_where('tabel_product',array('kategori_id'=>$id));
		//print_r($data);
		$this->template->load('template','show_kategori',$data);
		//echo $uri;
	}
}

?>