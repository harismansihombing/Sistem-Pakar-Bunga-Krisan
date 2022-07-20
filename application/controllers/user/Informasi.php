<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller{
    public function __construct()
    {
        
        parent::__construct();
        $this->load->model('M_Informasi');
        $this->load->library('form_validation');   
        $this->load->helper('url');    
      
    }

    public function index()
    {
        $data['data'] = $this->M_Informasi->tampil()->result();
       
        $this->load->view('user/template/header');
        $this->load->view('user/v_informasi' , $data);
        $this->load->view('user/template/footer');
    }

    public function Hama()
    {
        $data['data'] = $this->M_Informasi->tampil_hama()->result();
       
        $this->load->view('user/template/header');
        $this->load->view('user/v_informasi' , $data);
        $this->load->view('user/template/footer');
    }

    public function Penyakit()
    {
        $data['data'] = $this->M_Informasi->tampil_penyakit()->result();
       
        $this->load->view('user/template/header');
        $this->load->view('user/v_informasi' , $data);
        $this->load->view('user/template/footer');
    }

   
}