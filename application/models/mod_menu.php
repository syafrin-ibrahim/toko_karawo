<?php
class Mod_menu extends CI_Model{

	function selectAll(){
		return $this->db->get('tabel_menu');
	}

	function selectParent(){
		return $this->db->get_where('tabel_menu',array('parent'=>0));
	}
	function save(){
		$data=array('menu_title'=>$this->input->post('nama'),
			        'menu_eng'=>$this->input->post('nama'),
			        'link'=>$this->input->post('link'),
			        'parent'=>$this->input->post('parent'),
			        'menu_title_seo'=>seo_title($this->input->post('nama')));
		$this->db->insert('tabel_menu',$data);
		return true;
	}

	function selectOne($id){
		return $this->db->get_where('tabel_menu',array('menu_id'=>$id));
	}

	function update(){
			$data=array('menu_title'=>$this->input->post('nama'),
			        'menu_eng'=>$this->input->post('nama'),
			        'link'=>$this->input->post('link'),
			        'parent'=>$this->input->post('parent'),
			        'menu_title_seo'=>seo_title($this->input->post('nama')));
			$this->db->where('menu_id',$this->input->post('idx'));
			$this->db->update('tabel_menu',$data);
	}

	function delete($id){
			$this->db->where('menu_id',$id);
			$this->db->delete('tabel_menu');
			return true;
	}
}

?>