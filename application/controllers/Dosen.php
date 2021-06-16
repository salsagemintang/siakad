<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

    private $_header = 'headerDosen';
    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle"></i> Harap login terlebih dahulu</div>');
            redirect(base_url("login_dosen"));
        }
    }



    public function matkul()
    {
        //load view form login
        $data = array(
            'id_kampus'       =>  'F1l9',
            'nidn'      =>  $this->session->userdata('nidn')
        );
        $insert =  $this->curl->simple_post('http://app.siakad.org/admin_android/android/dataDosen', $data, array(CURLOPT_BUFFERSIZE => 10));
        $insertMatkul =  $this->curl->simple_post('http://app.siakad.org/admin_android/android/dataMatakuliahDosen', $data, array(CURLOPT_BUFFERSIZE => 10));

        $hasil['data'] = json_decode($insert);
        $hasil['matkul'] = json_decode($insertMatkul);
        $hasil['page'] = 'matkul';
        // $this->load->view('headerDosen', $hasil);
        $this->load->view($this->_header, $hasil);
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

    public function detail($id)
    {
        $data = array(
            'id_kampus'       =>  'F1l9',
            'nidn'      =>  $this->session->userdata('nidn'),
            'id_mk' => $id
        );
        $insert =  $this->curl->simple_post('http://app.siakad.org/admin_android/android/dataDosen', $data, array(CURLOPT_BUFFERSIZE => 10));
        $insertDetail =  $this->curl->simple_post('http://app.siakad.org/admin_android/android/detailMatakuliah', $data, array(CURLOPT_BUFFERSIZE => 10));

        $hasil['data'] = json_decode($insert);
        $hasil['detail'] = json_decode($insertDetail);
        $hasil['page'] = 'detail';

        $this->load->view($this->_header, $hasil);
    }
}
