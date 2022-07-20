<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('M_dashboard');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['pengetahuan'] = $this->M_dashboard->pengetahuan()->row();
        $data['penyakit'] = $this->M_dashboard->penyakit()->row();
        $data['hama'] = $this->M_dashboard->hama()->row();
        $data['gejala'] = $this->M_dashboard->gejala()->row();
        $data['riwayat'] = $this->M_dashboard->riwayat()->result();
        
        $this->load->view('user/template/header');
        //$this->load->view('user/template/topbar');
        $this->load->view('user/index', $data);
        $this->load->view('user/template/footer');
    }


   
}