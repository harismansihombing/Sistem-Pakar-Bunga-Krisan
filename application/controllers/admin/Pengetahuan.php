<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengetahuan extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('M_Pengetahuan');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['data'] = $this->M_Pengetahuan->tampil()->result();
       

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/pengetahuan/v_pengetahuan', $data);
        $this->load->view('admin/template/footer');
    }
  
    public function tambah_pengetahuan()
    {
        $data['penyakit'] = $this->M_Pengetahuan->penyakit()->result();
        $data['gejala'] = $this->M_Pengetahuan->gejala()->result();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/pengetahuan/v_tambahPengetahuan' , $data);
        $this->load->view('admin/template/footer');
    }

    public function edit_data($id)
    {
        $data['penyakit'] = $this->M_Pengetahuan->penyakit()->result();
        $data['gejala'] = $this->M_Pengetahuan->gejala()->result();
        $data['edit'] = $this->M_Pengetahuan->tampil_edit($id)->row();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/pengetahuan/v_editPengetahuan' , $data);
        $this->load->view('admin/template/footer');
    }


    public function save_pengetahuan()
    {
        $nama_penyakit = $this->input->post('kode_hp');
        $nama_gejala = $this->input->post('kode_gejala');
        $mb = $this->input->post('mb');
        $md = $this->input->post('md');
        $cf_pakar = ($mb - $md);

        $data = [
            'kode_hp' => $nama_penyakit,
            'kode_gejala' => $nama_gejala,
            'mb' => $mb,
            'md' => $md,
            'cf_pakar' => $cf_pakar,

        ];
        $tambah = $this->M_Pengetahuan->save_pengetahuan($data);
        if ($tambah) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Basis Pengetahuan berhasil ditambah</div>');
            redirect('admin/Pengetahuan', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
            redirect('admin/Pengetahuan', $data);
        }
    }


    public function update_pengetahuan($id)
    {
        $this->form_validation->set_rules('mb', 'mb', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('md', 'md', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->edit_data($id);
        } else {
            
            $nama_penyakit = $this->input->post('kode_hp');
            $nama_gejala = $this->input->post('kode_gejala');
            $mb = $this->input->post('mb');
            $md = $this->input->post('md');
            $cf_pakar = ($mb - $md);

            $data = [
                'kode_hp' => $nama_penyakit,
                'kode_gejala' => $nama_gejala,
                'mb' => $mb,
                'md' => $md,
                'cf_pakar' => $cf_pakar,
            ];

            $update = $this->M_Pengetahuan->update_data($data, $id);

            if ($update) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Basis Pengetahuan berhasil diupdate</div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
            }
            redirect('admin/Pengetahuan/', $data);
        }
    }

    public function hapus_data($id)
    {
        $delete = $this->M_Pengetahuan->hapus_data($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak bisa hapus data</div>');
        }
        redirect('admin/Pengetahuan');
    }



}
