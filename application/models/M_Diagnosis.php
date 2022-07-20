<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');

class M_Diagnosis extends CI_Model
{
  function __construct()
  {
      parent::__construct();

  }

  public function tampil()
  {
    $this->db->select('*');
    $this->db->from('gejala');
    $query = $this->db->get();
    return $query;
}
public function kondisi()
{
    $this->db->select('*');
    $this->db->from('kondisi');
    $query = $this->db->get();
    return $query;
}

    public function simpan_nama($data)
    {
        return $this->db->insert('pengguna', $data);
    }

    function get_no_pengguna()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id,4)) AS kd_max FROM pengguna");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return "USR" . $kd;
    }

    public function save_batch($data2)
    {
        return $this->db->insert_batch('hasil', $data2);
    }

    public function tampil_data_hasil()
    {
        $this->db->select('bobot_user, kode_gejala');
        $this->db->from('hasil');
        $this->db->where('id', "USR0001");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function m_cetakpdf($id)
    {
      $this->db->select('*');
      $this->db->from('hasil');
      //$this->db->join('hp', 'hp.kode_hp=hasil.kode_hp');
      $this->db->join('pengguna', 'pengguna.id=hasil.id');
      $this->db->where("hasil.id", $id);
      $query = $this->db->get();
      return $query;
    }
}