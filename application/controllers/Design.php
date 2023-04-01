<?php

class Design extends CI_Controller{

	public function index($id=''){
		$data['judul']='Design Kegiatan';
		$this->load->view('template/header',$data);
		$this->load->view('design/index',$data);
		$this->load->view('template/footer');
	}

	public function ubah(){
		$data['judul']='Ubah Data';
		$this->load->view('template/header',$data);
		$this->load->view('design/index',$data);
		$this->load->view('template/footer');
	}

}