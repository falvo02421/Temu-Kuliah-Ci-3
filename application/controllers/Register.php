<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
	    parent:: __construct();    
	    $this->load->model('login_model');
	    $this->load->helper('url','form');
	    $this->load->library(array('form_validation','session'));
    }

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/login');
        $this->load->view('templates/footer');
	}

	public function tambah(){
	     $data = array(
          "nis" => $this->input->post('nis'),
          "nama" => $this->input->post('nama'),
          "pass" => md5($this->input->post('pass')),
          "email" => $this->input->post('email'),
        );

	    $this->login_model->save($data);
 
        redirect('page/siswa');
	  }
}