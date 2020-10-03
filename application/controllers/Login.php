<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('session');
    }
 
    function index(){
        $this->load->view('templates/header');
        $this->load->view('pages/login');
        $this->load->view('templates/footer');
    }

    function loguser(){
        $this->load->view('templates/header');
        $this->load->view('pages/login_admin');
        $this->load->view('templates/footer');
    }
 
    // function auth(){
    //     $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
    //     $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
    //     $cek_dosen=$this->login_model->auth_admin($username,$password);
    //     $log_ale =array();
    //     if($cek_dosen->num_rows() > 0){ //jika login sebagai admin
    //                     $data=$cek_dosen->row_array();
    //             $this->session->set_userdata('masuk',TRUE);
    //              if($data['level_user']=='1'){ //Akses super
    //                 $this->session->set_userdata('akses','1');
    //                 $this->session->set_userdata('ses_id',$data['username']);
    //                 $this->session->set_userdata('ses_nama',$data['nama']);
    //                 redirect('page');
 
    //              }else{ //akses admin biasa
    //                 $this->session->set_userdata('akses','2');
    //                             $this->session->set_userdata('ses_id',$data['username']);
    //                 $this->session->set_userdata('ses_nama',$data['nama']);
    //                 redirect('page');
    //              }
 
    //     }else{ //jika login sebagai siswa
    //                 $cek_mahasiswa=$this->login_model->auth_siswa($username,$password);
    //                 if($cek_mahasiswa->num_rows() > 0){
    //                         $data=$cek_mahasiswa->row_array();
    //                 $this->session->set_userdata('masuk',TRUE);
    //                         $this->session->set_userdata('akses','3');
    //                         $this->session->set_userdata('ses_id',$data['niS']);
    //                         $this->session->set_userdata('ses_nama',$data['nama']);
    //                         redirect('page/siswa');
    //                 }else{  // jika username dan password tidak ditemukan atau salah
    //                         $url=base_url();
    //                         redirect('login');
    //                         echo '<script language="javascript">';
    //                         echo 'console.log("message successfully sent")';
    //                         echo '</script>';
    //                 }
    //     }
 
    // }

    public function auth() {
        $data = array('username' => $this->input->post('username', TRUE),
                        'password' => md5($this->input->post('password', TRUE))
            );
        $this->load->model('login_model'); // load model_user
        $hasil = $this->login_model->cek_user($data);
        if ($hasil->num_rows() == 1) {
            foreach ($hasil->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Loggin';
                $sess_data['uid'] = $sess->uid;
                $sess_data['username'] = $sess->username;
                $sess_data['level'] = $sess->level;
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('level')=='superadmin') {
                redirect('adminpage');
            }
            elseif ($this->session->userdata('level')=='admin') {
                redirect('adminpage/admin');
            }          
        }
        else {
            echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
        }
    }

    public function auth_siswa() {
        $data = array('username' => $this->input->post('username', TRUE),
                        'pass' => md5($this->input->post('password', TRUE))
            );
        $this->load->model('login_model'); // load model_user
        $hasil = $this->login_model->cek_siswa($data);
        if ($hasil->num_rows() == 1) {
            foreach ($hasil->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Loggin';
                $sess_data['uid'] = $sess->uid;
                $sess_data['username'] = $sess->username;
                $sess_data['level'] = $sess->level;
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('level')=='siswa') {
                redirect('page');
            }         
        }
        else {
            echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
        }
    }
 
}