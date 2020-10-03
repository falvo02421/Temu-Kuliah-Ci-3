<?php
class Adminpage extends CI_Controller{

  public function __construct() {
    parent::__construct();
    if ($this->session->userdata('username')=="") {
      redirect('login');
    }
    $this->load->helper('text');
  }
  public function index() {
    $data['username'] = $this->session->userdata('username');
    $this->load->view('templates/header_dashboard');
    $this->load->view('pages/dashboard', $data);
    $this->load->view('templates/footer_dashboard');
  }

  public function siswa() {
      $data['username'] =$this->session->userdata('username');
      $this->load->view('templates/header_dashboard');
      $this->load->view('pages/datasiswa', $data);
      $this->load->view('templates/footer_dashboard');
    }

  public function logout() {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('level');
    session_destroy();
    redirect('home');
  }


}