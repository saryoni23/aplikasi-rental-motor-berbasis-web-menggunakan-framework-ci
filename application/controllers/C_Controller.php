<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Controller extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'Rmotor',
            'active_login' => 'active',
            'nama_aplikasi' => $this->model_App->getAllData('tbl_nama_aplikasi')
        );

        $this->load->view('elements/vHeaderCustomer', $data);
        $this->load->view('pages/');
    }
}
