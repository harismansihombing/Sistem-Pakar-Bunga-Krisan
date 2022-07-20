<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Postingan extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('M_Postingan');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['data'] = $this->M_Postingan->tampil()->result();
        
        $data['title'] = 'Semua';
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/postingan/v_postingan', $data);
        $this->load->view('admin/template/footer');
    }

    public function tampil_hama()
    {
        $data['data'] = $this->M_Postingan->tampil_hama()->result();

        $data['title'] = 'Hama';
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/postingan/v_postingan', $data);
        $this->load->view('admin/template/footer');
    }

    public function tampil_penyakit()
    {
        $data['data'] = $this->M_Postingan->tampil_penyakit()->result();

        $data['title'] = 'Penyakit';
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/postingan/v_postingan', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah_post()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/postingan/v_tambahPostingan');
        $this->load->view('admin/template/footer');
    }

    public function edit_post($id)
    {
        $data['edit'] = $this->M_Postingan->detail($id)->row();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/postingan/v_editPostingan', $data);
        $this->load->view('admin/template/footer');
    }

    public function hapus_post($id)
    {
        $delete = $this->M_Postingan->hapus_postingan($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak bisa hapus data</div>');
        }
        redirect('admin/Postingan');
    }
    

    public function save_post()
    {
        $this->form_validation->set_rules('nama_post', 'nama_post', 'required|trim', [
            'required' => '<div class="alert alert-danger" role="alert">Nama Postingan tidak boleh kosong!</div>'
        ]);
        $this->form_validation->set_rules('det_post', 'det_post', 'required|trim', [
            'required' => '<div class="alert alert-danger" role="alert">Silahkan isi Detail Postingan!</div>'
        ]);
        $this->form_validation->set_rules('srn_post', 'srn_post', 'required|trim', [
            'required' => '<div class="alert alert-danger" role="alert">Silahkan isi Saran Postingan!</div>'
        ]);
        $this->form_validation->set_rules('kategori', 'kategori', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('link', 'link', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->tambah_post();
        } else {
        $nama_post = $this->input->post('nama_post');
        $det_post = $this->input->post('det_post');
        $srn_post = $this->input->post('srn_post');
        $kategori = $this->input->post('kategori');
        $gambar = $_FILES['gambar']['name'];
        $link = $this->input->post('link');
        

        $config['upload_path']        =    './aset/gambar/';
        $config['allowed_types']    =    'jpg|jpeg|png';
        $config['max_size']            =    10000;

        $this->load->library('upload', $config);

        if ($gambar) {
            if ($this->upload->do_upload('gambar')) {

                $data = [
                    'nama_post' => $nama_post,
                    'det_post' => $det_post,
                    'srn_post' => $srn_post,
                    'kategori' => $kategori,
                    'gambar' => preg_replace("/\s+/", "_", $gambar),
                    'link' => $link,

                ];

                $tambah_post = $this->M_Postingan->tambah_post($data);

                if ($tambah_post) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
                    redirect('admin/Postingan', $data);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah. Semua form harus di isi!</div>');
                    redirect('admin/Postingan', $data);
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                redirect('admin/Postingan', $error);
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
            redirect('admin/Postingan');
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

                $update = $this->M_Postingan->update_gambar($id, $data);

                if ($update) {
                    $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Gambar Berhasil di Update</div>');
                    redirect('admin/Postingan/edit_post/' . $id);
                } else {
                    $this->session->set_flashdata('alert', '<div class="alert alert-warning" role="alert">Gambar tidak berhasil di Update</div>');
                    redirect('admin/Postingan/edit_post/' . $id);
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Upload Gambar tidak sesuai format</div>');
                redirect('admin/Gejala/tambah_gejala', $error);
            }
        }
    }

    public function update_post($id)
    {
        $this->form_validation->set_rules('nama_post', 'nama_post', 'required|trim', [
            'required' => '<div class="alert alert-danger" role="alert">Nama Postingan tidak boleh kosong!</div>'
        ]);
        $this->form_validation->set_rules('det_post', 'det_post', 'required|trim', [
            'required' =>'<div class="alert alert-danger" role="alert">Detail Postingan tidak boleh kosong!</div>'
        ]);
        $this->form_validation->set_rules('srn_post', 'srn_post', 'required|trim', [
            'required' => '<div class="alert alert-danger" role="alert">Saran Postingan tidak boleh kosong!</div>'
        ]);
        $this->form_validation->set_rules('kategori', 'kategori', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->edit_post($id);
        } else {
            $nama_post = $this->input->post('nama_post');
            $det_post = $this->input->post('det_post');
            $srn_post = $this->input->post('srn_post');
            $kategori = $this->input->post('kategori');
            $link = $this->input->post('link');

            $data = [
                'nama_post' => $nama_post,
                'det_post' => $det_post,
                'srn_post' => $srn_post,
                'kategori' => $kategori,
                'link' => $link,
            ];

            $update = $this->M_Postingan->update_data($data, $id);

            if ($update) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
            }
            redirect('admin/Postingan/', $data);
        }

    }

  


   

   


 


}
