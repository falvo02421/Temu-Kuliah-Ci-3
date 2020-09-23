<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
  }
 
  function index(){
    $this->load->view('pages/dashboard');
  }

  function siswa(){
    $this->load->view('templates/header_siswa');
    $this->load->view('pages/siswa');
    $this->load->view('templates/footer');
  }


}
 