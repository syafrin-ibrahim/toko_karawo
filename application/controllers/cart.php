<?php
class Cart extends CI_Controller{
	
	function index(){

	}

	function addtocart(){
		$databeli=array('product_id'=>$this->input->post('idproduk'),
						'qty'=>$this->input->post('qty'),
						'transaksi_id'=>0);
		//print_r($databeli);
		$this->db->insert('tabel_transaksi_detail',$databeli);
		redirect('cart/shopcart');
	}
	
	function shopcart(){
		$query="select tb1.*, tb2.nama_product, tb2.harga,tb2.gambar from tabel_transaksi_detail as tb1, tabel_product as tb2 
				where tb1.product_id=tb2.product_id and tb1.transaksi_id=0 order by tb1.detail_id";
		//$data['item']=$this->db->get_where('tabel_transaksi_detail',array('transaksi_id'=>0))->result();
		$data['item']=$this->db->query($query)->result();
		$this->template->load('template','shopcart',$data);
	}

	function delete($id){
		$this->db->where('detail_id', $id);
		$this->db->delete('tabel_transaksi_detail');
		redirect('cart/shopcart');
	} 

	function updatestock(){
			$s=$this->db->query("select * from tabel_transaksi_detail order by detail_id");
			foreach($s->result() as $d){
				echo $d->detail_id.'<br/>';
				$ids=$this->input->post('id'.$d->detail_id);
				$new_qty=$this->input->post('quantity'.$d->detail_id);
				$this->db->where('detail_id',$ids);
				$this->db->update('tabel_transaksi_detail',array('qty'=>$new_qty));
			}

			redirect('cart/shopcart');
	}

	function login(){
			$this->template->load('template','loginmember');
	}

	function checkout(){
			echo"siap cekout";
	}

	function signup(){
			$data=array(
					'nama_lengkap' =>$this->input->post('nama'),
					'email'        =>$this->input->post('email'),
					'no_hp'        =>$this->input->post('hp'),
					'no_telpon'    =>$this->input->post('telpon'),
					'alamat'	   =>$this->input->post('alamat')
				);
			$this->db->insert('tabel_member',$data);
			redirect('cart/login');
	}

	function login_proses(){
			//echo"siap login proses";
			$nama=$this->input->post('nama');
			$email=$this->input->post('email');
			$query=$this->db->get_where('tabel_member',array('nama_lengkap'=>$nama,'email'=>$email));
			if($query->num_rows() > 0){
					$this->session->set_userdata(array('nama'=>$nama,'status'=>'log-in'));
			}

			redirect('cart/checkout');
		}

}

?>