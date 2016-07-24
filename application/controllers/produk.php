<?php
class Produk extends CI_Controller{
	
	function detail(){
		$id=$this->uri->segment(3);
		$data['produk']=$this->db->get_where('tabel_product',array('nama_product_seo'=>$id))->row_array();
		$this->template->load('template','detail_produk',$data);
	}
}

?>