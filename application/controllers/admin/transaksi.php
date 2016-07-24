<?php
class Transaksi extends CI_Controller{
	
	function __construct(){
		parent::__construct();	
		$this->load->model('Mod_transaksi');		
	}

	function index(){
		$data['t']=$this->Mod_transaksi->selectAll()->result();
		$this->template->load('templateadmin','admin/transaksi/view',$data);
	}
	function delete(){
		$f=$this->uri->segment(4);
		$this->Mod_transaksi->delete($f);
		redirect('admin/transaksi');
	}
	function detail(){
		if(isset($_POST['submit'])){
			$this->Mod_transaksi->update();
			redirect('admin/transaksi/detail/'.$_POST['idx']);
		}else{
			$d=$this->uri->segment(4);
			$transaksi=$this->db->get_where('tabel_transaksi',array('transaksi_id'=>$d))->row_array();
			$data['member']=$this->db->get_where('tabel_member',array('member_id'=>$transaksi['member_id']))->row_array();
			$sql="select tb1.*, tb2.nama_product, tb2.harga from tabel_transaksi_detail as tb1, tabel_product as tb2
				  where tb1.product_id=tb2.product_id and tb1.transaksi_id=$d";
			$data['order']=$this->db->query($sql)->result();
			$data['pesanan']=$this->db->get_where('tabel_transaksi',array('transaksi_id'=>$d))->row_array();
			$this->template->load('templateadmin','admin/transaksi/detail',$data);
		}

		//$data['t']=$this->Mod_transaksi->showOrder()->result();
	}
}

?>