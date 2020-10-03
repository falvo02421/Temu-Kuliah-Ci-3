<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Dashboard extends CI_Controller {
	function __construct(){
	    parent:: __construct();    
	    $this->load->model('dashboard_model');
      if ($this->session->userdata('username')=="") {
        redirect('login');
      }
    } 

    public function siswa() {
      $data['username'] =$this->session->userdata('username');
    	$data['siswa'] = $this->dashboard_model->getsiswa();
      $this->load->view('templates/header_dashboard');
      $this->load->view('pages/datasiswa', $data);
      $this->load->view('templates/footer_dashboard');
    }

    public function deletesiswa($nis){
    	$this->dashboard_model->deletesiswa($nis); // Panggil fungsi delete() yang ada di dashboard_model.php
   		redirect('dashboard/siswa');
  	}

  	public function editsiswa($nis) {
  		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
	      if($this->dashboard_model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
	        $this->dashboard_model->editsiswa($nis); // Panggil fungsi edit() yang ada di dashboard_model.php
	        redirect('dashboard/siswa');
	      }
	    }
	    
	    $data['siswa'] = $this->dashboard_model->siswa_by($nis);
	    $this->load->view('dashboard/siswa', $data);
  	}

    public function soal() {
      $data['username'] =$this->session->userdata('username');
      $data['soal'] = $this->dashboard_model->getsoal();
      $this->load->view('templates/header_dashboard');
      $this->load->view('pages/datasoal', $data);
      $this->load->view('templates/footer_dashboard');
    }
}