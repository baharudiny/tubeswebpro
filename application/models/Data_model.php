<?php 
class Data_model extends CI_model{
	public function getAllData(){
		return $this->db->get('makanan')->result_array();
	}
	public function getpasta(){
		return $data = $this->db->get_where('makanan', array('namamakanan' => 'pasta'))->result_array();
		
	}
	public function tambahDataMakanan(){
		$data = [
        "namamakanan" => $this->input->post('namamakanan', true),
        "jenismakanan" => $this->input->post('jenismakanan', true),
        "komposisi" => $this->input->post('komposisi', true),
	];
		$this->db->insert('makanan', $data);
	}
	public function hapusDataMakanan($id){
		$this->db->where('id', $id);
		$this->db->delete('makanan');
	}
	public function getMakananById($id){
	return $this->db->get_where('makanan', ['id' => $id])->row_array();
	}
	public function ubahDataMakanan(){
		$data = [
        "namamakanan" => $this->input->post('namamakanan', true),
        "jenismakanan" => $this->input->post('jenismakanan', true),
        "komposisi" => $this->input->post('komposisi', true)
	];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('makanan', $data);
	}
	public function cariDataMahasiswa(){
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		$this->db->or_like('nim', $keyword);
		$this->db->or_like('email', $keyword);
		$this->db->or_like('jurusan', $keyword);
		return $this->db->get('mahasiswa')->result_array();
	}
}
?>