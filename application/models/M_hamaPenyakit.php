<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');

class M_hamaPenyakit extends CI_Model
{
  function __construct()
  {
	 parent::__construct();

	}

    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('hp');
        $query = $this->db->get();
        return $query;
    }

  public function tampil_hama()
  {
    $this->db->select('*');
    $this->db->from('hp');
    $this->db->where('kategori="Hama"');
    $query = $this->db->get();
    return $query;
  }

  public function tampil_penyakit()
  {
    $this->db->select('*');
    $this->db->from('hp');
    $this->db->where('kategori="Penyakit"');
    $query = $this->db->get();
    return $query;
  }

  public function hapus_penyakit($id)
  {
    return $this->db->where('kode_hp', $id)->delete('hp');
  }

  public function save_data($data)
  {
    return $this->db->insert('hp', $data);
  }

  public function detail($id)
  {
    $this->db->select('*');
    $this->db->from("hp");
    $this->db->where("kode_hp", $id);
    $query = $this->db->get();
    return $query;
  }

  public function update_gambar($id, $data)
  {
    return $this->db->where('kode_hp', $id)->update('hp', $data);
  }

  public function update_data($data, $id)
  {
    return $this->db->where('kode_hp', $id)->update('hp', $data);
  }

  public function cekkode()
  {
    $this->db->select('RIGHT(hp.kode_hp,3) as kode_hp', FALSE);
    $this->db->order_by('kode_hp', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get('hp');
    if ($query->num_rows() <> 0) {
      $data = $query->row();
      $kode = intval($data->kode_hp) + 1;
    } else {
      $kode = 1;
    }
    $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
    $kodetampil = "P" . $batas;
    return $kodetampil;
  }


}
