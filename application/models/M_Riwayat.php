<?php if (!defined('BASEPATH')) exit('No direct script acess allowed');

class M_Riwayat extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  public function tampil()
  {
    $this->db->select('*');
    $this->db->from('hasil');
    $this->db->join('hp', 'hp.kode_hp=hasil.kode_hp');
    $this->db->join('pengguna', 'pengguna.id=hasil.id');
    $query = $this->db->get();
    return $query;
  }
  public function tampil_detail($id)
  {
    $this->db->select('*');
    $this->db->from('hasil');
    //$this->db->join('hp', 'hp.kode_hp=hasil.kode_hp');
    $this->db->join('pengguna', 'pengguna.id=hasil.id');
    $this->db->where("id_hasil", $id);
    $query = $this->db->get();
    return $query;
  }

  public function m_cetakpdf($id)
    {
      $this->db->select('*');
      $this->db->from('hasil');
      //$this->db->join('hp', 'hp.kode_hp=hasil.kode_hp');
      $this->db->join('pengguna', 'pengguna.id=hasil.id');
      $this->db->where("id_hasil", $id);
      $query = $this->db->get();
      return $query;
    }

  public function hapus_gejala($id)
  {
    return $this->db->where('kode_gejala', $id)->delete('gejala');
  }

  public function save_data($data)
  {
    return $this->db->insert('gejala', $data);
  }

  public function detail($id)
  {
    $this->db->select('*');
    $this->db->from("gejala");
    $this->db->where("kode_gejala", $id);
    $query = $this->db->get();
    return $query;
  }

  public function update_gambar($id, $data)
  {
    return $this->db->where('kode_gejala', $id)->update('gejala', $data);
  }

  public function update_data($data, $id)
  {
    return $this->db->where('kode_gejala', $id)->update('gejala', $data);
  }

  public function cekkodeG()
  {
    $this->db->select('RIGHT(gejala.kode_gejala,3) as kode_gejala', FALSE);
    $this->db->order_by('kode_gejala', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get('gejala');
    if ($query->num_rows() <> 0) {
      $data = $query->row();
      $kode = intval($data->kode_gejala) + 1;
    } else {
      $kode = 1;
    }
    $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
    $kodetampil = "G" . $batas;
    return $kodetampil;
  }
}