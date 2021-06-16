<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_Dosen extends CI_Controller
{
    function __construct()
    {
        parent::__construct();


        $this->load->helper('url');
    }


    function index()
    {
        // $this->load->library('curl');
        $this->load->view('loginDosen');
    }

    public function proses_login()
    {
        $data = array(
            'id_kampus'       =>  'F1l9',
            'username'      =>  $this->input->post('username'),
            'password' =>  $this->input->post('password')
        );
        $insert =  $this->curl->simple_post('http://app.siakad.org/admin_android/android/validasiLoginDosen', $data, array(CURLOPT_BUFFERSIZE => 10));

        $decode = json_decode($insert);

        if ($decode->STATUS == "TRUE") {

            //looping data user
            $data_session = array(
                'id_kampus' => $decode->ID_KAMPUS,
                'nidn' => $decode->NIDN,
                'status' => "login"
            );
            //buat session berdasarkan user yang login
            $this->session->set_userdata($data_session);
            redirect(base_url("dosen/matkul"));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle"></i> Username atau Password tidak sesuai</div>');
            redirect('login_dosen');
        }
    }
}
