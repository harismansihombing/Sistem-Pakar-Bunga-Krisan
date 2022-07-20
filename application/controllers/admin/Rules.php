<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rules extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('M_Rules');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['data'] = $this->M_Rules->tampil()->result();

        $data['title'] = 'Semua';
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/v_rules' , $data);
        $this->load->view('admin/template/footer');
    }

    public function tampil_hama()
    {
        $data['data'] = $this->M_Rules->tampil_hama()->result();

        $data['title'] = 'Hama';
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/v_rules', $data);
        $this->load->view('admin/template/footer');
    }
    public function tampil_penyakit()
    {
        $data['data'] = $this->M_Rules->tampil_penyakit()->result();

        $data['title'] = 'Penyakit';
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/v_rules', $data);
        $this->load->view('admin/template/footer');
    }

    // public function rules($id)
    // {
    //     $data['rules'] = $this->M_Rules->tampil_rules($id)->result();
    //    //$data ['rules'] = $this->M_Rules->tampil_rules()->result();
    // }



   

 


}
