<?php
class Dashboard_model extends CI_Model{
	public function getsiswa() {
		return $this->db->get('siswa')->result();// Untuk menampilkan data
	}

	public function siswa_by($nis){
    	$this->db->where('nis', $nis);
    	return $this->db->get('siswa')->row();
  	}

	public function deletesiswa($nis){
	    $this->db->where('nis', $nis);
	    $this->db->delete('siswa'); // Untuk mengeksekusi perintah delete data
	}

	public function validation($mode){
	    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
	    
	    // Tambahkan if apakah $mode save atau update
	    // Karena ketika update, NIS tidak harus divalidasi
	    // Jadi NIS di validasi hanya ketika menambah data siswa saja
	    if($mode == "save")
	      $this->form_validation->set_rules('nis', 'nis', 'required|numeric|max_length[11]');
	    
	    $this->form_validation->set_rules('nama', 'nama', 'required|max_length[50]');
	    $this->form_validation->set_rules('email', 'email', 'required');
	    $this->form_validation->set_rules('pass', 'pass', 'required|max_length[8]');
	      
	    if($this->form_validation->run()) // Jika validasi benar
	      return TRUE; // Maka kembalikan hasilnya dengan TRUE
	    else // Jika ada data yang tidak sesuai validasi
	      return FALSE; // Maka kembalikan hasilnya dengan FALSE
	}

	public function editsiswa($nis) {
		$data = array(
	      "nama" => $this->input->post('nama'),
	      "email" => $this->input->post('email'),
	    );
	    
	    $this->db->where('nis', $nis);
	    $this->db->update('siswa', $data); // Untuk mengeksekusi perintah update data
	}

	public function getsoal() {
        $this->db->select('soal_tryout.id_soal, soal_tryout.bobot, mapel.nama')
         ->from('soal_tryout')
         ->join('mapel', 'soal_tryout.id_mapel = mapel.id_mapel');
		 $query = $this->db->get();
		  return $query->result();
	}
}