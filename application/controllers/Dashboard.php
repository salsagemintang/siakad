<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle"></i> Harap login terlebih dahulu</div>');
            redirect(base_url("login_mahasiswa"));
        }
    }



    public function index()
    {
        //load view form login
        $data = array(
            'id_kampus'       =>  'F1l9',
            'nim'      =>  $this->session->userdata('nim_encrypt')
        );
        $insert =  $this->curl->simple_post('http://app.siakad.org/admin_android/android/dashboardMahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10));

        $hasil['dashboard'] = json_decode($insert);

        $this->load->view('header', $hasil);
        $this->load->view('dashboard', $hasil);
    }

    function profile()
    {
        $data = array(
            'id_kampus'       =>  'F1l9',
            'nim'      =>  $this->session->userdata('nim_encrypt')
        );
        $insert =  $this->curl->simple_post('http://app.siakad.org/admin_android/android/dashboardMahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10));
        $insertBio =  $this->curl->simple_post('http://app.siakad.org/admin_android/android/biodataMahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10));

        $decode = json_decode($insert);
        $decodeBio = json_decode($insertBio);

        if ($decode->STATUS == "TRUE") {
            $hasil['dashboard'] = $decode;
        }

        if ($decodeBio->STATUS == "TRUE") {
            $hasilBio['biodata'] = $decodeBio;
        }

        $this->load->view('header', $hasil);
        $this->load->view('profile', $hasilBio, $hasil);
    }
}
