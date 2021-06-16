<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle"></i> Harap login terlebih dahulu</div>');
            redirect(base_url("login_mahasiswa"));
        }
    }

    public function dashboard()
    {
        //load view form login
        $data = array(
            'id_kampus'       =>  'F1l9',
            'nim'      =>  $this->session->userdata('nim_encrypt')
        );
        $insert =  $this->curl->simple_post('http://app.siakad.org/admin_android/android/dashboardMahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10));

        $hasil['dashboard'] = json_decode($insert);

        $this->load->view('headerMahasiswa', $hasil);
        $this->load->view('dashboard', $hasil);
    }

    public function profile()
    {
        $data = array(
            'id_kampus'       =>  'F1l9',
            'nim'      =>  $this->session->userdata('nim_encrypt')
        );
        $insert =  $this->curl->simple_post('http://app.siakad.org/admin_android/android/dashboardMahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10));
        $insertBio =  $this->curl->simple_post('http://app.siakad.org/admin_android/android/biodataMahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10));

        $hasil['dashboard'] = json_decode($insert);
        $hasilBio['biodata'] = json_decode($insertBio);

        $this->load->view('headerMahasiswa', $hasil);
        $this->load->view('profileMahasiswa', $hasilBio);
    }

    public function kuliah()
    {
        //load view form login
        $data = array(
            'id_kampus'       =>  'F1l9',
            'nim'      =>  $this->session->userdata('nim_encrypt')
        );
        $insert =  $this->curl->simple_post('http://app.siakad.org/admin_android/android/dashboardMahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10));
        $insertJadwal =  $this->curl->simple_post('http://app.siakad.org/admin_android/android/jadwalKuliahMahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10));

        $hasil['dashboard'] = json_decode($insert);
        $hasilJadwal['jadwal'] = json_decode($insertJadwal);

        $this->load->view('headerMahasiswa', $hasil);
        $this->load->view('kuliah', $hasilJadwal);
    }

    public function uts()
    {
        //load view form login
        $data = array(
            'id_kampus'       =>  'F1l9',
            'nim'      =>  $this->session->userdata('nim_encrypt')
        );
        $insert =  $this->curl->simple_post('http://app.siakad.org/admin_android/android/dashboardMahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10));
        $insertJadwal =  $this->curl->simple_post('http://app.siakad.org/admin_android/android/lihatJadwalUts', $data, array(CURLOPT_BUFFERSIZE => 10));

        $hasil['dashboard'] = json_decode($insert);
        $hasilJadwal['jadwal'] = json_decode($insertJadwal);

        $this->load->view('headerMahasiswa', $hasil);
        $this->load->view('uts', $hasilJadwal);
    }

    public function uas()
    {
        //load view form login
        $data = array(
            'id_kampus'       =>  'F1l9',
            'nim'      =>  $this->session->userdata('nim_encrypt')
        );
        $insert =  $this->curl->simple_post('http://app.siakad.org/admin_android/android/dashboardMahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10));
        $insertJadwal =  $this->curl->simple_post('http://app.siakad.org/admin_android/android/lihatJadwalUas', $data, array(CURLOPT_BUFFERSIZE => 10));

        $hasil['dashboard'] = json_decode($insert);
        $hasilJadwal['jadwal'] = json_decode($insertJadwal);

        $this->load->view('headerMahasiswa', $hasil);
        $this->load->view('uas', $hasilJadwal);
    }

    public function generateMatkul()
    {
        $data = array(
            'id_kampus'       =>  'F1l9',
            'nim'      =>  $this->session->userdata('nim_encrypt')
        );
        $insert =  $this->curl->simple_post('http://app.siakad.org/admin_android/android/generateMatakuliahMhs', $data, array(CURLOPT_BUFFERSIZE => 10));

        if ($this->input->post('value')) {
            $id = $this->input->post('value');
            $data_session = array(
                'id_kampus'       =>  'F1l9',
                'nim'      =>  $this->session->userdata('nim_encrypt'),
                'value' => $id
            );
            $this->session->set_userdata($data_session);
            redirect(base_url('mahasiswa/dataPresensi'));
        }
        $hasil['generate'] = json_decode($insert);
        $this->load->view('generate', $hasil);
    }

    public function dataPresensi()
    {
        $data = array(
            'id_kampus'       =>  'F1l9',
            'nim'      =>  $this->session->userdata('nim_encrypt'),
            'id_enrollments' => $this->session->userdata('value')
        );
        $insert =  $this->curl->simple_post('http://app.siakad.org/admin_android/android/dashboardMahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10));
        $insertData =  $this->curl->simple_post('http://app.siakad.org/admin_android/android/dataPresensiMahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10));

        $hasil['dashboard'] = json_decode($insert);
        $hasilData['data'] = json_decode($insertData);

        $this->load->view('headerMahasiswa', $hasil);
        $this->load->view('dataPresensi', $hasilData);
    }
}
