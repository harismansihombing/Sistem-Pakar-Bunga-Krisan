<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HamaPenyakit extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('M_hamaPenyakit');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['data'] = $this->M_hamaPenyakit->tampil()->result();

        $data['title'] = 'Semua';
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/hamapenyakit/v_hamapenyakit', $data);
        $this->load->view('admin/template/footer');
    }
    
    public function tampil_hama()
    {
        $data['data'] = $this->M_hamaPenyakit->tampil_hama()->result();

        $data['title'] = 'Hama';
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/hamapenyakit/v_hamapenyakit', $data);
        $this->load->view('admin/template/footer');
    }

    public function tampil_penyakit()
    {
        $data['data'] = $this->M_hamaPenyakit->tampil_penyakit()->result();

        $data['title'] = 'Penyakit';
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/hamapenyakit/v_hamapenyakit', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah_penyakit()
    {
        $data['cekkode'] = $this->M_hamaPenyakit->cekkode();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/hamapenyakit/v_tambahPenyakit', $data);
        $this->load->view('admin/template/footer');
    }

    public function edit_penyakit($id)
    {
        $data['edit'] = $this->M_hamaPenyakit->detail($id)->row();
        $data['title'] = 'Edit';
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/hamapenyakit/v_editPenyakit' , $data);
        $this->load->view('admin/template/footer');
    }


    public function hapus_penyakit($id)
    {
        $delete = $this->M_hamaPenyakit->hapus_penyakit($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak bisa hapus data</div>');
        }
        redirect('admin/HamaPenyakit');
    }

    public function tambah_data()
    {
        $kode_hp = $this->M_hamaPenyakit->cekkode();
        $nama_penyakit = $this->input->post('nama_penyakit');
        $det_penyakit = $this->input->post('det_penyakit');
        $srn_penyakit = $this->input->post('srn_penyakit');
        $kategori = $this->input->post('kategori');
        $gambar = $_FILES['gambar']['name'];


        $config['upload_path']        =    './aset/gambar/';
        $config['allowed_types']    =    'jpg|jpeg|png';
        $config['max_size']            =    10000;

        $this->load->library('upload', $config);

        if ($gambar) {
            if ($this->upload->do_upload('gambar')) {

                $data = [
                    'kode_hp' => $kode_hp,
                    'nama_penyakit' => $nama_penyakit,
                    'det_penyakit' => $det_penyakit,
                    'srn_penyakit' => $srn_penyakit,
                    'kategori' => $kategori,
                    'gambar' => preg_replace("/\s+/", "_", $gambar),

                ];

                $save_data = $this->M_hamaPenyakit->save_data($data);

                if ($save_data) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
                    redirect('admin/HamaPenyakit', $data);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
                    redirect('admin/HamaPenyakit', $data);
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap Upload Gambar</div>');
                redirect('admin/HamaPenyakit', $error);
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Upload, Gambar tidak sesuai format</div>');
            redirect('admin/HamaPenyakit');
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

                $update = $this->M_hamaPenyakit->update_gambar($id, $data);

                if ($update) {
                    $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Gambar Berhasil di Update</div>');
                    redirect('admin/HamaPenyakit/edit_penyakit/' . $id);
                } else {
                    $this->session->set_flashdata('alert', '<div class="alert alert-warning" role="alert">Gambar tidak berhasil di Update</div>');
                    redirect('admin/HamaPenyakit/edit_penyakit/' . $id);
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Gagal Upload, Gambar tidak sesuai format</div>');
                redirect('admin/HamaPenyakit/edit_penyakit/' . $id);
            }
        }

    }

    public function update_data($id)
    {
        $this->form_validation->set_rules('nama_penyakit', 'nama_penyakit', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('det_penyakit', 'det_penyakit', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('srn_penyakit', 'srn_penyakit', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('kategori', 'kategori', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->edit_penyakit($id);
        } else {
            $nama_penyakit = $this->input->post('nama_penyakit');
            $det_penyakit = $this->input->post('det_penyakit');
            $srn_penyakit = $this->input->post('srn_penyakit');
            $kategori = $this->input->post('kategori');

            $data = [
                'nama_penyakit' => $nama_penyakit,
                'det_penyakit' => $det_penyakit,
                'srn_penyakit' => $srn_penyakit,
                'kategori' => $kategori,
            ];

            $update = $this->M_hamaPenyakit->update_data($data, $id);

            if ($update) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
            }
            redirect('admin/HamaPenyakit/' , $data);
        }
    }
    

    
}