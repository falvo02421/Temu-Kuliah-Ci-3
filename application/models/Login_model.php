<?php
class Login_model extends CI_Model{
    //cek username dan password admin
    function auth_admin($username,$password){
        $query=$this->db->query("SELECT * FROM login_user WHERE username='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }
 
    //cek nis dan password siswa
    function auth_siswa($username,$password){
        $query=$this->db->query("SELECT * FROM siswa WHERE nis='$username' AND pass=MD5('$password') LIMIT 1");
        return $query;
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

    public function save($data){
        
        $this->db->insert('siswa', $data); // Untuk mengeksekusi perintah insert data
      }
}
 