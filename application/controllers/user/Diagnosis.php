<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Diagnosis');
        $this->load->model('M_Riwayat');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['data'] = $this->M_Diagnosis->tampil()->result();
        $data['no_pengguna'] = $this->M_Diagnosis->get_no_pengguna();

        $this->load->view('user/template/header');
        $this->load->view('user/diagnosis/v_nama', $data);
        $this->load->view('user/template/footer');
    }

    public function diagnosis()
    {
        if (!$this->session->userdata('no_pengguna')) {
            redirect(base_url("user/Diagnosis"));
        }

        $data['data'] = $this->M_Diagnosis->tampil()->result();
        $data['kondisi'] = $this->M_Diagnosis->kondisi()->result();

        $this->load->view('user/template/header');
        $this->load->view('user/diagnosis/v_diagnosis', $data);
        $this->load->view('user/template/footer');
    }

    public function simpan_nama()
    {
        $nama['nama'] = $this->input->post('nama');
        $nama['id'] = $this->input->post('no_pengguna');

        $this->session->set_userdata('no_pengguna', $this->input->post('no_pengguna'));
        $this->session->set_userdata('nama', $this->input->post('nama'));

        $save_nama = $this->M_Diagnosis->simpan_nama($nama);

        if ($save_nama) {
            redirect('user/Diagnosis/diagnosis');
        }
    }

    public function hasil()
    {      
        //kondisi untuk memeriksa apakah session user ada atau tidak     
        if (!$this->session->userdata('no_pengguna')) {
            redirect(base_url("user/Diagnosis"));
        }

        //PROSES PENGAMBILAN DATA 
        $counter = count($this->input->post('kondisi[]')); # hitung jumlah berapa gejala yang dipilih (digunakan untuk looping)
        $input_tanggal = date('Y-m-d H:i:s');
        $arbobot = array('0', '1.0', '0.8', '0.6', '0.4', '0.2'); #nilai bobot dari kondisi yang dipilih user

        $arkondisisave = array();
        // Ambil gejala dan kondisi yang dipilih user
        for ($i = 0; $i < $counter; $i++) {
            $kondisi = explode("_", $_POST['kondisi'][$i]); //untuk memecah string setiap tanda petik
            //mengambil nilai kondisi
            if (strlen($_POST['kondisi'][$i]) > 1) { // strlen = untuk menghitung jumlah string atau karakter
                $argejala[] = $kondisi[0]; // array gejala di pilih user
                $arkondisi[] = $kondisi[1]; // array kondisi yang dipilih user
                $arkondisisave += array($kondisi[0] => $kondisi[1]); //array gejala dan kondisi yang dipilih user
            } 
        }
        if ($argejala == NULL){
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan pilih kondisi untuk melihat hasil Diagnosis!</div>');
            redirect(base_url("user/Diagnosis/diagnosis"));
        }

        // var_dump($argejala);
        // die;


        // //PROSES PENGAMBILAN DATA 
        // $counter = count($this->input->post('kondisi[]')); # hitung jumlah berapa gejala yang dipilih (digunakan untuk looping)
        // $input_tanggal = date('Y-m-d H:i:s');
        // $arbobot = array('0', '1.0', '0.8', '0.6', '0.4', '0.2'); #nilai bobot dari kondisi yang dipilih user

        // $arkondisisave = array();

        // // Ambil gejala dan kondisi yang dipilih user
        // for ($i = 0; $i < $counter; $i++) {
        //     $kondisi = explode("_", $_POST['kondisi'][$i]); //untuk memecah string setiap tanda petik
        //     //mengambil nilai kondisi
        //     if (strlen($_POST['kondisi'][$i]) > 1) { // strlen = untuk menghitung jumlah string atau karakter
        //         $argejala[] = $kondisi[0]; // array gejala di pilih user
        //         $arkondisi[] = $kondisi[1]; // array kondisi yang dipilih user
        //         $arkondisisave += array($kondisi[0] => $kondisi[1]); //array gejala dan kondisi yang dipilih user
        //     } 
        // }

        //PERHITUNGAN NILAI CF
        $sql_penyakit = $this->db->query("SELECT * FROM hp order by kode_hp ASC");
        $array_penyakit = array();
        foreach ($sql_penyakit->result_array() as $key) {
            $cftotal_temp = 0;
            $cf = 0;

            $cflama = 0;

            $query_gejala = $this->db->select('*')->where('kode_hp', $key['kode_hp'])->get('basis_pengetahuan');

            foreach ($query_gejala->result_array() as $key => $value) { // foreach = perulangan data yang sudah ada pada tabel database

                for ($i = 0; $i < $counter; $i++) { //for = perulangan data yang belum ada pada tabel seperti hasil perkalian,dsb.
                    $array_kondisi = explode("_", $_POST['kondisi'][$i]); //untuk memecah string setiap tanda petik
                    $gejala = $array_kondisi[0]; // isinya kode gejala
                    if ($value['kode_gejala'] == $gejala) {
                        $cf = $value['cf_pakar'] * $arbobot[$array_kondisi[1]];

                        // Rumus Cf Combine
                        if (($cf >= 0) && ($cf * $cflama >= 0)) {
                            $cflama = $cflama + ($cf * (1 - $cflama));
                        }
                    }
                }
            }
            if ($cflama > 0) {
                # hasil dari semua perhitungan cf dalam bentuk array
                $array_penyakit += array($value['kode_hp'] => number_format($cflama, 4));
            }
        }

        arsort($array_penyakit); # urutkan hasil perhitungan per penyakit dari nilai yang tertinggi sampai terendah
        $input_gejala = serialize($argejala); # ubah array menjadi varchar agar bisa disimpan di database
        $input_penyakit = serialize($array_penyakit); # ubah array menjadi varchar agar bisa disimpan di database
        $input_kondisi = serialize($arkondisisave); # ubah array menjadi varchar agar bisa disimpan di database


        $np1 = 0;
        foreach ($array_penyakit as $key1 => $value1) {
            $np1++;
            $penyakit_1[$np1] = $key1;
            $nilai[$np1] = $value1;
        }

        //INSERT DATA HASIL PERHITUNGAN KE DATABASE

        $data_hasil = [
            'tanggal' => $input_tanggal,
            'id' => $this->session->userdata('no_pengguna'),
            'hp' => $input_penyakit,
            // 'kode_hp' => $input_penyakit,
            'kode_gejala' => $input_kondisi,
            'kode_hp' => $penyakit_1[1],
            'cf_hasil' => $nilai[1],
        ];
        $this->db->insert('hasil', $data_hasil);

        //PARSING DATA KE HALAMAN VIEW

        $data['hasil'] = round($nilai[1], 3); //membatasi jumlah digit dibelakang koma
        $data['persentasi'] = round($nilai[1] * 100);
        $data['penyakit'] = $array_penyakit;
        $data['penyakit_lain'] = $array_penyakit;

        $data['kondisi'] = $arkondisi;
        $data['penyakit_terpilih'] = $penyakit_1[1];
        $data['gejala'] = $argejala;

        $this->load->view('user/template/header');
        $this->load->view('user/diagnosis/v_hasil_diagnosis', $data);
        $this->load->view('user/template/footer');

        $this->session->unset_userdata('no_pengguna'); // Menghapus Session kode pengguna
        $this->session->unset_userdata('nama'); // Menghapus Session nama pengguna
    }

    public function cetakpdf($id)
    {    
        $data['detail'] = $this->M_Diagnosis->m_cetakpdf($id)->row();
        $this->load->view('user/diagnosis/cetak', $data);
    }
}