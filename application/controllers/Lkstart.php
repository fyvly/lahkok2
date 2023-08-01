<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lkstart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->_ceklogin();
        $this->load->model('Global_model');
    }
    public function index()
    {
        $data = array(
            'title'                 => 'LAHKOK',
            'test'           => '',
        );
        /*  print_r($data['nosurat']);
        die; */
        $this->load->view('dashboard/login', $data, FALSE);
    }
}
