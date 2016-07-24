<?php
class Mod_transaksi extends CI_Model{
	
	function selectAll(){
		$query="SELECT tb1.*, tb2.nama_lengkap 
		FROM tabel_transaksi as tb1, tabel_member as tb2 WHERE tb1.member_id=tb2.member_id";
		return $this->db->query($query);
	}

	function delete($id){
		$this->db->where('transaksi_id',$id);
		$this->db->delete('tabel_transaksi');
	}
	function showOrder($id){
		return $this->db->get_where('tabel_transaksi',array('transaksi_id'=>$id));
	}
	function selectOne($id){
		return $this->db->get_where('tabel_member',array('member_id'=>$id));
	}

	function update(){
		$data=array('status'=>$this->input->post('status'),
					'no_resi'=>$this->input->post('resi')
					);
		$this->db->where('transaksi_id',$this->input->post('idx'));
		$this->db->update('tabel_transaksi',$data);
	}
}

?>