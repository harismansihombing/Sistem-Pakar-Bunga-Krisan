<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
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
    
      public function login()
      {
       $this->form_validation->set_rules('username', 'username', 'trim|required');
       $this->form_validation->set_rules('password', 'password', 'trim|required');
        if ($this->form_validation->run() == false) {
        $data['title'] = 'Login';
        $this->load->view('user/template/header');
        //$this->load->view('user/template/topbar');
        $this->load->view('user/login', $data);
        $this->load->view('user/template/footer');
    } else {
        $this->_login();
    }

    }
    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin = $this->db->get_where('admin', ['username' => $username])->row_array();

        if($admin) {           
            //jika username ada 
            if(md5($password) == $admin['password']) {
               $data = [
              'username' => $admin['username'],
              'nama_lengkap' => $admin['nama_lengkap'],
              'id_admin' => $admin['id_admin']
              ];
                 $this->session->set_userdata($data);
                 redirect('admin/Dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah</div>');
                redirect('Auth/login'); 
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak terdaftar</div>');
            redirect('Auth/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        //$this->session->sess_destroy();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terimakasih Sudah LogOut</div>');
        redirect('Auth/login','refresh');
    }

    public function bantuan()
    {
        $this->load->view('user/template/header'); 
        $this->load->view('user/v_bantuan');
        $this->load->view('user/template/footer');
    }
}
