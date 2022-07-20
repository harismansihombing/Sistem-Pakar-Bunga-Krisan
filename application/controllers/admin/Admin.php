<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('M_admin');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }
// Controler Fitur Admin
    public function index()
    {
        $data['admin'] = $this->M_admin->tampil()->result();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/admin/v_admin', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah_admin()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/admin/v_tambahAdmin');
        $this->load->view('admin/template/footer');
    }

    public function proses_tambah()
    {
            $nama_lengkap = $this->input->post('nama_lengkap');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
           
                    $data = [
                        'nama_lengkap' => $nama_lengkap,
                        'username' => $username,
                        'password' => md5($password),
                        'email' => $email,       
                        
                    ];
                    $tambah = $this->M_admin->save_admin($data);
                    if ($tambah) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
                        redirect('admin/Admin', $data);
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
                        redirect('admin/Admin', $data);
                    }
        
    }

    public function edit_akun($id)
    {
        $data['edit'] = $this->M_admin->detail($id)->row();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/admin/v_editAkun', $data);
        $this->load->view('admin/template/footer');
    }

    public function update_akun($id)
    {
        $this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->edit_akun($id);
        } else {
            $nama_lengkap = $this->input->post('nama_lengkap');
            $username = $this->input->post('username');
            $email = $this->input->post('email');

            $data = [
                'nama_lengkap' => $nama_lengkap,
                'username' => $username,
                'email' => $email,
            ];

            $update = $this->M_admin->update_data($data, $id);

            if ($update) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun berhasil diupdate</div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
            }
            redirect('admin/Admin/edit_akun/' . $id);
        }
    }

    public function ubah_password($id)
    {
        $this->form_validation->set_rules('pabar', 'pabar', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('ulpa', 'ulpa', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Update Password! Field tidak boleh kosong</div>');
            $this->edit_akun($id);
        } else {
            $pabar = md5($this->input->post('pabar'));
            $ulpa = md5($this->input->post('ulpa'));

            if ($pabar == $ulpa) {
                $data = [
                    'password' => $pabar,
                ];

                $update = $this->M_admin->update_data($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diupdate</div>');
                   redirect('admin/Admin/edit_akun/' . $id);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Password tidak berhasil diupdate</div>');
                    redirect('admin/Admin/edit_akun/' . $id);
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Update Password! Password baru tidak sama dengan ulang password</div>');
                redirect('admin/Admin/edit_akun/' . $id);
            }
        }
    }

    public function hapus_akun($id)
    {
        $delete = $this->M_admin->hapus_akun($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun anda Berhasil Dihapus, anda tidak memiliki akses Login.</div>');
            $this->session->unset_userdata('username');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak bisa hapus data</div>');
        }
        redirect('Auth/login');
    }
    

}
