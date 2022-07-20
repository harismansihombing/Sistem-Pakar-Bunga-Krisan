<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('M_Gejala');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['data'] = $this->M_Gejala->tampil()->result();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/gejala/v_gejala', $data);
        $this->load->view('admin/template/footer');
    }

    public function hapus_gejala($id)
    {
        $delete = $this->M_Gejala->hapus_gejala($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak bisa hapus data</div>');
        }
        redirect('admin/Gejala');
    }


    public function edit_gejala($id)
    {
        $data['edit'] = $this->M_Gejala->detail($id)->row();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/gejala/v_editGejala' , $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah_gejala()
    {
        $data['cekkodeG'] = $this->M_Gejala->cekkodeG();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/gejala/v_tambahGejala', $data);
        $this->load->view('admin/template/footer');
    }

    public function simpan_data()
    {
        $kode_gejala = $this->M_Gejala->cekkodeG();
        $nama_gejala = $this->input->post('nama_gejala');
        $gambar = $_FILES['gambar']['name'];


        $config['upload_path']        =    './aset/gambar/';
        $config['allowed_types']    =    'jpg|jpeg|png';
        $config['max_size']            =    10000;

        $this->load->library('upload', $config);

        if ($gambar) {
            if ($this->upload->do_upload('gambar')) {

                $data = [
                    'kode_gejala' => $kode_gejala,
                    'nama_gejala' => $nama_gejala,
                    'gambar' => preg_replace("/\s+/", "_", $gambar),

                ];

                $save_data = $this->M_Gejala->save_data($data);

                if ($save_data) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Gejala Berhasil Ditambah</div>');
                    redirect('admin/Gejala', $data);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Gejala tidak berhasil ditambah</div>');
                    redirect('admin/Gejala', $data);
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Upload, Gambar tidak sesuai format</div>');
                redirect('admin/Gejala/tambah_gejala', $error);
            }
        }
            else {

                $data = [
                    'kode_gejala' => $kode_gejala,
                    'nama_gejala' => $nama_gejala,
                ];

                $save_data = $this->M_Gejala->save_data($data);

                if ($save_data) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Gejala Berhasil Ditambah</div>');
                    redirect('admin/Gejala', $data);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Gejala tidak berhasil ditambah</div>');
                    redirect('admin/Gejala', $data);
                }
            }
        
    }

    public function simpanGambar($id)
    {
        $gambar = $_FILES['gambar']['name'];


        $config['upload_path']        =    './aset/gambar/';
        $config['allowed_types']    =    'jpg|jpeg|png';
        $config['max_size']            =    10000;

        $this->load->library('upload', $config);

        if ($gambar) {
            if ($this->upload->do_upload('gambar')) {

                $data = [
                    'gambar' => preg_replace("/\s+/", "_", $gambar),
                ];

                $update = $this->M_Gejala->update_gambar($id, $data);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Gambar Berhasil di Update</div>');
                    redirect('admin/Gejala/edit_gejala/' . $id);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Gambar tidak berhasil di Update</div>');
                    redirect('admin/Gejala/edit_gejala/' . $id);
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                redirect('admin/Gejala/edit_gejala/' . $id);
            }
        }
    }

    public function update_data($id)
    {
        $this->form_validation->set_rules('nama_gejala', 'nama_gejala', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->edit_gejala($id);
        } else {
            $nama_gejala = $this->input->post('nama_gejala');
           
            $data = [
                'nama_gejala' => $nama_gejala,
            ];

            $update = $this->M_Gejala->update_data($data, $id);

            if ($update) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
            }
            redirect('admin/Gejala/', $data);
        }
    }



}
