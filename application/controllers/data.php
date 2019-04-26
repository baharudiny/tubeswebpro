<?php
class data extends CI_Controller{
public function __construct(){
	parent::__construct();
	$this->load->model('Data_model');
	$this->load->library('form_validation');

}
public function index()
{
	$data['judul'] ='Daftar Makanan';
	$data['dataa'] = $this->Data_model->getAllData();
	if( $this->input->post('keyword') ) {
		$data['dataa'] = $this->Data_model->cariDataMahasiswa();
	}

	$this->load->view('data/index',$data);

}
public function pasta(){
	$data['judul'] = 'bahan untuk membuat pasta';
	$data['past'] = $this->Data_model->getpasta();
	$this->load->view('data/pasta',$data);
}
	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Mahasiswa';	
		$this->load->view('data/tambah',$data);
		$this->form_validation->set_rules('namamakanan','Namamakanan','required');
		$this->form_validation->set_rules('jenismakanan','Jenismakan','required');
		$this->form_validation->set_rules('komposisi','komposisi','required');
		if ($this->form_validation->run() == FALSE)
                {    

                }
                else
                {
                     $this->Data_model->tambahDataMakanan();
                     $this->session->set_flashdata('flash','Ditambahkan');
                     redirect('data');
                }

	}
	public function hapus($id){
		$this->Data_model->hapusDataMakanan($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('data');
	}
	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data Mahasiswa';
		$data['namamakanan'] = $this->Data_model->getMakananById($id);
		$this->load->view('data/ubah',$data);
		$this->form_validation->set_rules('namamakanan','Namamakanan','required');
		$this->form_validation->set_rules('jenismakanan','Jenismakan','required');
		$this->form_validation->set_rules('komposisi','Komposisi','required');
		if ($this->form_validation->run() == FALSE)
                {

                }
                else
                {
                     $this->Data_model->ubahDataMakanan();
                     $this->session->set_flashdata('flash','Diubah');
                     redirect('data');
                }
            }
}
?>