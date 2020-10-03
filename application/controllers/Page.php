<?php
class Page extends CI_Controller{
  public function __construct() {
    parent::__construct();
    if ($this->session->userdata('username')=="") {
      redirect('login');
    }
    $this->load->helper('text');
  }
  public function index() {
    $data['username'] = $this->session->userdata('username');
    $this->load->view('templates/header_siswa');
    $this->load->view('pages/siswa', $data);
    $this->load->view('templates/footer');
  }

  public function logout() {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('level');
    session_destroy();
    redirect('home');
  }


}
 