<?php
class Auth extends CI_Controller{
	
	function index(){
		if(isset($_POST['login'])){
			$user=$this->input->post('username');
			$pass=$this->input->post('password');
			$cek=$this->db->get_where('tabel_users',array('username'=>$user,'password'=>md5($pass)));
			if($cek->num_rows()>0){
					redirect('admin/produk');
			}else{
					redirect('admin/auth');
			}
		}else{
			$this->load->view('admin/login');
		}
	}

	function logout(){
		redirect(base_url().'/index.php/home');
	}
}
?>