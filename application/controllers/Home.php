<?php

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['judul']='Home';
		$this->load->view('template/header',$data);
		$this->load->view('home/index',$data);
		$this->load->view('template/footer',$data);
	}
	
}