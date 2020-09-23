<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
 
    function index(){
        $this->load->view('templates/header');
        $this->load->view('pages/login');
        $this->load->view('templates/footer');
    }
 
    function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_dosen=$this->login_model->auth_admin($username,$password);
        $log_ale =array();
        if($cek_dosen->num_rows() > 0){ //jika login sebagai admin
                        $data=$cek_dosen->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['level_user']=='1'){ //Akses super
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_id',$data['username']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('page');
 
                 }else{ //akses admin biasa
                    $this->session->set_userdata('akses','2');
                                $this->session->set_userdata('ses_id',$data['username']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('page');
                 }
 
        }else{ //jika login sebagai siswa
                    $cek_mahasiswa=$this->login_model->auth_siswa($username,$password);
                    if($cek_mahasiswa->num_rows() > 0){
                            $data=$cek_mahasiswa->row_array();
                    $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('akses','3');
                            $this->session->set_userdata('ses_id',$data['niS']);
                            $this->session->set_userdata('ses_nama',$data['nama']);
                            redirect('page/siswa');
                    }else{  // jika username dan password tidak ditemukan atau salah
                            $url=base_url();
                            redirect('login');
                            echo '<script language="javascript">';
                            echo 'console.log("message successfully sent")';
                            echo '</script>';
                    }
        }
 
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
 
}