<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Global_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function login($username = '', $password = '')
    {
        $this->db->select('*');
        $this->db->from('master_user');
        // Join Tabel
        $this->db->where(array(
            'username'    => $username,
            'password'    => $password
        ));
        $query = $this->db->get();
        return $query->row();
    }

    //tipe barang
    public function selectalltipe_barang()
    {
        $this->db->select('*');
        return $this->db->get('tipe_barang')->result();
    }
    public function selectidtipe_barang($param)
    {
        $this->db->select('*');
        $this->db->where($param);
        return $this->db->get('tipe_barang')->row();
    }
}

/* End of file Global_model.php */
