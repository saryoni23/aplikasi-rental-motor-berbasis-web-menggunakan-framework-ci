<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('LEVEL') != 'admin') {
            redirect('');
        };
        $this->load->helper('currency_format_helper');
    }

    public function index()
    {
        $data = array(
            'title' => 'Rmotor',
            'headerTitle' => 'Dashboard',
            'formTitle' => 'Halaman Admin',
            'namaAplikasi'=>'Rental Motor Online',


            'data_contact' => $this->Model_App->getAllData('tbl_contact'),

        );

        $this->load->view('elements/vHeaderAdmin', $data);
        $this->load->view('pages/admin/home');
        $this->load->view('elements/vFooterAdmin');
    }

    //  motor

    public function motor()
    {
        $data = array(
            'title' => 'Rmotor',
            'headerTitle' => 'Motor',
            'formTitle' => 'Halaman Motor',
            'namaAplikasi' => 'Rental Motor Online',


            'data_motor' => $this->Model_App->getAllmotor(),
        );

        $this->load->view('elements/vHeaderAdmin', $data);
        $this->load->view('pages/admin/motor/motor');
        $this->load->view('elements/vFooterAdmin');
    }

    public function tambahmotor()
    {
        $data = array(
            'title' => 'Rmotor',
            'headerTitle' => 'Tambah Motor',
            'formTitle' => 'Halaman Motor',
            'namaAplikasi' => 'Rental Motor Online',


            'jenis_motor' => $this->Model_App->getAllData('tbl_jenis'),
        );

        $this->load->view('elements/vHeaderAdmin', $data);
        $this->load->view('pages/admin/motor/tambahmotor');
        $this->load->view('elements/vFooterAdmin');
    }

    function prosesTambahmotor()
    {

        $this->load->helper(array('form', 'file', 'url'));

        $config_image = array();
        $config_image['upload_path']    = './uploads';
        $config_image['allowed_types']  = 'jpg|png|gif';
        $config_image['max_size']       = '1024';

        $this->load->library('upload', $config_image);

        $this->upload->do_upload();
        $data = array('upload_data' => $this->upload->data());

        $products = array(
            'id_jenis' => $this->input->post('id_jenis'),
            'nm_motor' => $this->input->post('nm_motor'),
            'harga_rental' => $this->input->post('harga_rental'),
            'no_polisi' => $this->input->post('no_polisi'),
            'nm_warna' => $this->input->post('nm_warna'),
            'nm_merek' => $this->input->post('nm_merek'),
            'thn_buat' => $this->input->post('thn_buat'),
            'cc_motor' => $this->input->post('cc_motor'),
        );
        $this->Model_App->insertData('tbl_motor', $products);
        redirect("Admin_Controller/motor");
    }


    function editmotor()
    {
        $id = $this->uri->segment(3);
        $data = array(
            'title' => 'Edit motor',
            'formTitle' => 'Edit Data Motor',
            'headerTitle' => 'Data motor',
            'namaAplikasi' => 'Rental Motor Online',


            'data_motor' => $this->Model_App->getIdmotor($id),
        );
        $this->load->view('elements/vHeaderAdmin', $data);
        $this->load->view('pages/admin/motor/editMotor1');
        $this->load->view('elements/vFooterAdmin');
    }

    function prosesEditmotor()
    {
        $id['id_user'] = $this->input->post('id_user');
        $data = array(
            'nm_user' => $this->input->post('nm_user'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'email_user' => $this->input->post('email_user'),
            'notelp_user' => $this->input->post('notelp_user'),
            'lvl_user' => $this->input->post('lvl_user'),
        );
        $this->Model_App->updateData('tbl_user', $data, $id);
        redirect("Admin_Controller/pegawai");
    }


    // function editmotor()
    // {
    //     $id = $this->uri->segment(3);
    //     $data = array(
    //         'title' => 'Edit motor',
    //         'formTitle' => 'Edit Data motor',
    //         'headerTitle' => 'Data motor',
    //         'namaAplikasi' => 'Rental Motor Online',
    //         'data_customer' => $this->Model_App->getIdmotor($id),
    //         // 'jenis_motor' => $this->Model_App->getAllData('tbl_jenis'),
    //     );
    //     $this->load->view('elements/vHeaderAdmin', $data);
    //     $this->load->view('pages/admin/motor/editMotor');
    //     $this->load->view('elements/vFooterAdmin');
    // }

    // function prosesEditmotor()
    // {
    //     $id['id_motor'] = $this->input->post('id_motor');
    //     $data = array(
    //         'nm_motor' => $this->input->post('nm_motor'),
    //         'harga_rental' => $this->input->post('harga_rental'),
    //         'no_polisi' => $this->input->post('no_polisi'),
    //         'nm_warna' => $this->input->post('nm_warna'),
    //         'nm_merek' => $this->input->post('nm_merek'),
    //         'thn_buat' => $this->input->post('thn_buat'),
    //         'cc_motor' => $this->input->post('cc_motor'),

    //     );
    //     $this->Model_App->updateData('tbl_motor', $data, $id);
    //     redirect("Admin_Controller/motor");
    // }

    function prosesHapusmotor()
    {
        $id['id_motor'] = $this->uri->segment(3);
        $this->Model_App->deleteData('tbl_motor', $id);
        redirect("Admin_Controller/motor");
    }



    //  Customer
    function customer()
    {
        $data = array(
            'title' => 'Kelola customer',
            'formTitle' => 'Kelola customer',
            'headerTitle' => 'Data customer',
            'namaAplikasi' => 'Rental Motor Online',

            'data_customer' => $this->Model_App->getAllCutomer(),
        );
        $this->load->view('elements/vHeaderAdmin', $data);
        $this->load->view('pages/admin/customer/customer');
        $this->load->view('elements/vFooterAdmin');
    }

    function tambahCustomer()
    {
        $data = array(
            'title' => 'Tambah customer',
            'formTitle' => 'Tambah customer',
            'headerTitle' => 'Form Tambah customer',
            'namaAplikasi' => 'Rental Motor Online',

            'nm_identitas' => $this->Model_App->getAllData('tbl_identitas'),

        );
        $this->load->view('elements/vHeaderAdmin', $data);
        $this->load->view('pages/admin/customer/tambahcustomer');
        $this->load->view('elements/vFooterAdmin');
    }

    function prosesTambahcustomer()
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
            'id_user'       => $this->input->post('id_user'),
            'username'      => $this->input->post('username'),
            'password'      => $this->input->post('password'),
            'lvl_user'      => $this->input->post('lvl_user'),
            'nm_user'       => $this->input->post('nm_user'),
            'id_identitas'  => $this->input->post('id_identitas'),
            'almt_user'     => $this->input->post('almt_user'),
            'email_user'    => $this->input->post('email_user'),
            'notelp_user'   => $this->input->post('notelp_user'),
            // 'pt_identitas'  => $this->input->post('pt_identitas'),
        );

        $this->Model_App->insertData('tbl_user', $data);
        redirect("Admin_Controller/customer");
    }

    function editCustomer()
    {
        $id = $this->uri->segment(3);
        $data = array(
            'title' => 'Edit Customer',
            'formTitle' => 'Edit Data Customer',
            'headerTitle' => 'Data Customer',
            'namaAplikasi' => 'Rental Motor Online',

            'data_customer' => $this->Model_App->getIdCustomer($id),
            
            
        );
        $this->load->view('elements/vHeaderAdmin', $data);
        $this->load->view('pages/admin/Customer/editCustomer');
        $this->load->view('elements/vFooterAdmin');
    }

    function prosesEditCustomer()
    {
        $id['id_user'] = $this->input->post('id_user');
        $data = array(
            'nm_user'       => $this->input->post('nm_user'),
            'username'      => $this->input->post('username'),
            'password'      => $this->input->post('password'),
            'almt_user'     => $this->input->post('almt_user'),
            'email_user'    => $this->input->post('email_user'),
            'notelp_user'   => $this->input->post('notelp_user'),
            'lvl_user'      => $this->input->post('lvl_user'),
            'id_identitas'  => $this->input->post('id_identitas'),

        );
        $this->Model_App->updateData('tbl_user', $data, $id);
        redirect("Admin_Controller/customer");
    }

    function prosesHapusCustomer()
    {
        $id['id_user'] = $this->uri->segment(3);
        $this->Model_App->deleteData('tbl_user', $id);
        redirect("Admin_Controller/customer");
    }

    //  Pemesanan

    function pemesanan()
    {
        $data = array(
            'title' => 'Pemesanan',
            'headerTitle' => 'Data Laporan Pemesanan',
            'formTitle' => 'Pemesanan',
            'namaAplikasi' => 'Rental Motor Online',


            'hitung_motor' => $this->Model_App->hitungDatamotor(),
            'data_pemesanan' => $this->Model_App->getAllDataPemesanan(),

        );
        $this->load->view('elements/vHeaderAdmin', $data);
        $this->load->view('pages/admin/pemesanan/kelolaPemesanan');
        $this->load->view('elements/vFooterAdmin');
    }

    function prosesPemesanan()
    {
        $status = 'Proses';
        $id['id_pemesanan'] = $this->uri->segment(3);
        $data = array(
            'status_pemesanan' => $status,
        );
        $this->Model_App->updateData('tbl_pemesanan', $data, $id);
        redirect('Admin_Controller/pemesanan');
    }

    function direntalPemesanan()
    {
        $status = 'Dirental';
        $id['id_pemesanan'] = $this->uri->segment(3);
        $data = array(
            'status_pemesanan' => $status,
        );
        $this->Model_App->updateData('tbl_pemesanan', $data, $id);
        redirect('Admin_Controller/pemesanan');
    }

    function dikembalikanPemesanan()
    {
        $status = 'Dikembalikan';
        $id['id_pemesanan'] = $this->uri->segment(3);
        $data = array(
            'status_pemesanan' => $status,
        );
        $this->Model_App->updateData('tbl_pemesanan', $data, $id);
        redirect('Admin_Controller/pemesanan');
    }
    function finishPemesanan()
    {
        $status = 'Selesai';
        $id['id_pemesanan'] = $this->uri->segment(3);
        $data = array(
            'status_pemesanan' => $status,
        );
        $this->Model_App->updateData('tbl_pemesanan', $data, $id);
        redirect('Admin_Controller/pemesanan');
    }

    function detailPemesanan()
    {
        $id = $this->uri->segment(3);
        $data = array(
            'title' => 'Pemesanan',
            'headerTitle' => 'Detail Laporan Pemesanan',
            'formTitle1' => 'Data Pemesanan',
            'formTitle2' => 'Detail Pesanan',
            'namaAplikasi' => 'Rental Motor Online',


            'data_pemesanan' => $this->Model_App->getDetailDataPemesanan($id),
            'data_barang' => $this->Model_App->getDetailDataBarang($id),
        );
        $this->load->view('elements/vHeaderAdmin', $data);
        $this->load->view('pages/admin/pemesanan/kelolaDetailPemesanan');
    }

    function printPemesanan()
    {
        $id = $this->uri->segment(3);
        $data = array(
            'title' => 'Pemesanan',

            'data_pemesanan' => $this->Model_App->getDetailDataPemesanan($id),
            'data_barang' => $this->Model_App->getDetailDataBarang($id),
            'data_contact' => $this->Model_App->getAllData('tbl_contact'),
        );
        $this->load->view('pages/admin/pemesanan/printPemesanan', $data);
    }


    public function laporan()
    {
        $data = array(
            'title' => 'Grafik',
            'headerTitle' => 'Grafik Motor',
            'formTitle' => 'Halaman Grafik',
            'namaAplikasi' => 'Rental Motor Online',
        );

        $data['graph'] = $this->Model_App->graph();


        $this->load->view('elements/vHeaderAdmin', $data);
        $this->load->view('pages/admin/laporan/laporan');
        $this->load->view('elements/vFooterAdmin');
    }
    //  Pegawai

    function pegawai()
    {
        $data = array(
            'title' => 'Kelola Pegawai',
            'formTitle' => 'Kelola Pegawai',
            'headerTitle' => 'Data Pegawai',
            'namaAplikasi' => 'Rental Motor Online',


            'data_pegawai' => $this->Model_App->getAllDataPegawai(),
        );
        $this->load->view('elements/vHeaderAdmin', $data);
        $this->load->view('pages/admin/pegawai/pegawai');
        $this->load->view('elements/vFooterAdmin');
    }


    function tambahPegawai()
    {
        $data = array(
            'title' => 'Tambah Pegawai',
            'formTitle' => 'Tambah Pegawai',
            'headerTitle' => 'Form Tambah Pegawai',
            'namaAplikasi' => 'Rental Motor Online',

        );
        $this->load->view('elements/vHeaderAdmin', $data);
        $this->load->view('pages/admin/pegawai/tambahPegawai');
        $this->load->view('elements/vFooterAdmin');
    }

    function prosesTambahPegawai()
    {
        $nm_user     = $this->input->post('nm_user');
        $username    = $this->input->post('username');
        $password    = $this->input->post('password');
        $lvl_user    = $this->input->post('lvl_user');
        $email_user  = $this->input->post('email_user');
        $notelp_user = $this->input->post('notelp_user');

        $data = array(
            'nm_user' => $this->input->post('nm_user'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'email_user' => $this->input->post('email_user'),
            'notelp_user' => $this->input->post('notelp_user'),
            'lvl_user' => $this->input->post('lvl_user'),
        );

        $this->Model_App->insertData('tbl_user', $data);
        redirect("Admin_Controller/pegawai");
    }

    function editPegawai()
    {
        $id = $this->uri->segment(3);
        $data = array(
            'title' => 'Edit Pegawai',
            'formTitle' => 'Edit Data Pegawai',
            'headerTitle' => 'Data Pegawai',
            'namaAplikasi' => 'Rental Motor Online',


            'data_pegawai' => $this->Model_App->getIdPegawai($id),
        );
        $this->load->view('elements/vHeaderAdmin', $data);
        $this->load->view('pages/admin/pegawai/editPegawai');
        $this->load->view('elements/vFooterAdmin');
    }

    function prosesEditPegawai()
    {
        $id['id_user'] = $this->input->post('id_user');
        $data = array(
            'nm_user' => $this->input->post('nm_user'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'email_user' => $this->input->post('email_user'),
            'notelp_user' => $this->input->post('notelp_user'),
            'lvl_user' => $this->input->post('lvl_user'),
        );
        $this->Model_App->updateData('tbl_user', $data, $id);
        redirect("Admin_Controller/pegawai");
    }

    function prosesHapusPegawai()
    {
        $id['id_user'] = $this->uri->segment(3);
        $this->Model_App->deleteData('tbl_user', $id);
        redirect("Admin_Controller/pegawai");
    }
}
