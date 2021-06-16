<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    function index()
    {
        // redirect(base_url("login"));
        $this->load->view('header');
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url(""));
    }
}
