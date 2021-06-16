<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_model extends CI_Model
{
    // fungsi cek login
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
