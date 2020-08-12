<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{
    public function numRows()
    {
        return $this->db->get('tb_master_users')->num_rows();
    }

    public function insert($table, $data)
    {
        if ($this->db->insert($table, $data)) {
            return true;
        }
    }
}
