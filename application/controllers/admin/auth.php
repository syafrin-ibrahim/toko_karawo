<?php
class Auth extends CI_Controller{
	
	function index(){
		if(isset($_POST['login'])){
			echo"siap login";
		}else{
			$this->load->view('admin/login');
		}
	}

	function logout(){
		redirect('admin/auth');
	}
}
?>