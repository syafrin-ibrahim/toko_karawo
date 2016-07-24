<?php
class Mod_member extends CI_Model{
	
	function selectAll(){
		return $this->db->get('tabel_member');
	}

	function selectOne($id){
		return $this->db->get_where('tabel_member',array('member_id'=>$id));
	}

	function update(){

	}

	function save(){

	}

	function showOrder($id){
			return $this->db->get_where('tabel_transaksi',array('member_id'=>$id));
	}
	function delete($id){
		$this->db->where('member_id',$id);
		$this->db->delete('tabel_member');
	}
}

?>