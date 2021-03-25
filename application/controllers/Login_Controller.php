<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login_Controller extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'Rmotor-Login',
            'active_login' => 'active',
        );

        $this->load->view('elements/vHeaderCustomer', $data);
        $this->load->view('pages/masuk');
        $this->load->view('elements/vFooterCustomer');
        
    }
    
    public function daftar()
    {
        $data = array(
            'title' => 'Rmotor',
            'active_daftar' => 'active',

            'data_identitas' => $this->Model_App->getAllData('tbl_identitas'),
        );

        $this->load->view('elements/vHeaderCustomer', $data);
        $this->load->view('pages/daftar');
        $this->load->view('elements/vFooterCustomer');
    }

    function prosesDaftar()
    {
        $this->load->helper(array('form', 'file', 'url'));

        $config_image = array();
        $config_image['upload_path']    = './uploads';
        $config_image['allowed_types']  = 'jpg|png|gif';
        $config_image['max_size']       = '300';

        $this->load->library('upload', $config_image);

        $this->upload->do_upload();
        $data = array('upload_data' => $this->upload->data());

        $username       = $this->input->post('username');
        $password       = $this->input->post('password');
        $lvl_user       = $this->input->post('lvl_user');
        $nm_user        = $this->input->post('nm_user');
        $id_identitas   = $this->input->post('id_identitas');
        // $no_identitas   = $this->input->post('no_identitas');
        $almt_user      = $this->input->post('almt_user');
        $email_user     = $this->input->post('email_user');
        $notelp_user    = $this->input->post('notelp_user');
        $poto_identitas = $this->input->post('pt_identittas');

        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'lvl_user' => $this->input->post('lvl_user'),
            'nm_user' => $this->input->post('nm_user'),
            // 'jk' => $this->input->post('jk'),
            'id_identitas' => $this->input->post('id_identitas'),
            // 'no_identitas' => $this->input->post('no_identitas'),
            'almt_user' => $this->input->post('almt_user'),
            'email_user' => $this->input->post('email_user'),
            'notelp_user' => $this->input->post('notelp_user'),
            // 'pt_identitas' => $this->input->post('pt_identitas'),
        );

        $this->Model_App->insertData('tbl_user', $data);
        redirect("Login_Controller");
    }

    function prosesLogin()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //query the database
        $result = $this->Model_App->login($username, $password);
        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                //create the session
                $sess_array = array(
                    'ID' => $row->id_user,
                    'USERNAME' => $row->username,
                    'PASS' => $row->password,
                    'NAME' => $row->nm_user,
                    'LEVEL' => $row->lvl_user,
                    'login_status' => true,
                );
                //set session with value from database
                $this->session->set_userdata($sess_array);

                if ($this->session->userdata('LEVEL') == 'customer') {
                    redirect('Rmotor_Controller', 'refresh');
                } else {
                    redirect('Admin_Controller', 'refresh');
                }
            }
            return TRUE;
        } else {
            //jika validasi salah
            redirect('Login_Controller/', 'refresh');
            return FALSE;
        }
    }


    //  Logout

    function logout()
    {
        $this->session->unset_userdata('ID');
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('PASS');
        $this->session->unset_userdata('NAME');
        $this->session->unset_userdata('LEVEL');
        $this->session->unset_userdata('login_status');

        $this->cart->destroy();

        redirect('Rmotor_Controller');
    }

    function prosesDaftar1()
    {

        $this->load->helper(array('form', 'file', 'url'));

        $config_image = array();
        $config_image['upload_path']    = './uploads';
        $config_image['allowed_types']  = 'jpg|png|gif';
        $config_image['max_size']       = '1024';

        $this->load->library('upload', $config_image);

        $this->upload->do_upload();
        $data = array('upload_data' => $this->upload->data());


        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'lvl_user' => $this->input->post('lvl_user'),
            'nm_user' => $this->input->post('nm_user'),
            'jk' => $this->input->post('jk'),
            'id_identitas' => $this->input->post('id_identitas'),
            'no_identitas' => $this->input->post('no_identitas'),
            'almt_user' => $this->input->post('almt_user'),
            'email_user' => $this->input->post('email_user'),
            'notelp_user' => $this->input->post('notelp_user'),
            'pt_identitas' => $this->input->post('pt_identitas'),
        );
        $this->Model_App->insertData('tbl_user', $data);
        redirect("Login_Controller/daftar");
    }
}
