<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('M_Riwayat');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['data'] = $this->M_Riwayat->tampil()->result();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/v_riwayat', $data);
        $this->load->view('admin/template/footer');
    }

    public function detail($id)
    {
        $data['detail'] = $this->M_Riwayat->tampil_detail($id)->row();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/v_detail_riwayat', $data);
        $this->load->view('admin/template/footer');
    }
    
    public function cetakpdf($id)
    {
        $data['detail'] = $this->M_Riwayat->m_cetakpdf($id)->row();
        $this->load->view('admin/cetak', $data);
    }

}