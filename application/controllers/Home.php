<?php
class Home extends CI_Controller{
	public function __construct(){
	parent::__construct();
	$this->load->model('Data_model');
	$this->load->library('form_validation');
}
	public function index($nama = ''){
		$data['nama'] = $nama;
		$data['judul'] = 'Halaman Utama';
		$this->load->view('templates/header',$data);
		$this->load->view('home/index');
		$this->load->view('templates/footer');

	}
	public function tampilan(){
		$data['aa'] = '';
		$this->load->view('data/index',$data);
	}
	public function tambah(){
		$data['a'] = '';
		$this->load->view('data/tambah',$data);
	}
	public function healthy(){
		$data['b'] = '';
		$this->load->view('templates/healthy',$data);
	}
	public function partyfood(){
		$data['bb'] = '';
		$this->load->view('templates/partyfood',$data);
	}
}
?>