<?php
class Demo extends CI_Controller{
	
	function index(){
		$this->template->load('templateadmin','dashboard');
	}
}

?>