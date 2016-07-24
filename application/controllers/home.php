<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('mod_produk');
	}

	function index(){
		$data['top']=$this->mod_produk->topProduk();
		$this->template->load('template','home',$data);
	}
}

?>