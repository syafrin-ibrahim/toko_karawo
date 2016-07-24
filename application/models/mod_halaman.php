<?php
class Mod_halaman extends CI_Model{
	
	function selectAll(){
		return $this->db->get('tabel_pages');
	}

	function selectOne($id){
		return $this->db->get_where('tabel_pages',array('pages_id'=>$id));
	}

	function save(){
		$data=array('judul'=>$this->input->post('judul'),
					'judul_seo'=>seo_title($this->input->post('judul')),
					'content'=>$this->input->post('content'));
		$this->db->insert('tabel_pages',$data);

	}

	function update(){
		$data=array('judul'=>$this->input->post('judul'),
					'judul_seo'=>seo_title($this->input->post('judul')),
					'content'=>$this->input->post('content'));
		$this->db->where('pages_id',$this->input->post('idx'));
		$this->db->update('tabel_pages',$data);
	}
	function delete($id){
		$this->db->where('pages_id',$id);
		$this->db->delete('tabel_pages');
	}


}

?>