<?php
class Mod_produk extends CI_Model{
	
	function selectAll(){
		$query="select tb1.product_id, tb1.nama_product,tb1.harga,tb2.nama_kategori 
				from tabel_product as tb1, tabel_kategori as tb2
				where tb1.kategori_id=tb2.kategori_id";
		return $this->db->query($query);
		
	}

	function save($gambar){
			$data=array(
				'nama_product'=>$this->input->post('nama'),
				'nama_product_seo'=>seo_title($this->input->post('nama')),
				'harga'=>$this->input->post('harga'),
				'gambar'=>$gambar,
				'kategori_id'=>$this->input->post('kategori')
				);
			$this->db->insert('tabel_product',$data);
		return true;			
	}

	function selectOne($id){
			return $this->db->get_where('tabel_product',array('product_id'=>$id));
	}

	function update($gambar){
			if($gambar == null){
				$data=array(
				'nama_product'=>$this->input->post('nama'),
				'harga'=>$this->input->post('harga'),
				'nama_product_seo'=>seo_title($this->input->post('nama')),
				'kategori_id'=>$this->input->post('kategori')
				);	
			}else{
				$data=$this->db->where('product_id',$this->input->post('idp'))->get('tabel_product')->row();
				unlink('template/AdminLTE/gambarproduk/'.$data->gambar);
				$data=array(
				'nama_product'=>$this->input->post('nama'),
				'harga'=>$this->input->post('harga'),
				'nama_product_seo'=>seo_title($this->input->post('nama')),
				'gambar'=>$gambar,
				'kategori_id'=>$this->input->post('kategori')
				);
				
			}
			

			
			$this->db->where('product_id',$this->input->post('idp'));
			$this->db->update('tabel_product',$data);

	}

	function delete($id){
			$data=$this->db->where('product_id',$id)->get('tabel_product')->row();
			unlink('template/AdminLTE/gambarproduk/'.$data->gambar);
			$this->db->where('product_id',$id);
			$this->db->delete('tabel_product');
	}

	function topProduk(){
		return $this->db->query("select * from tabel_product limit 6");
	}


}

?>