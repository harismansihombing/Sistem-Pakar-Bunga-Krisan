<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');

class M_Postingan extends CI_Model
{
  function __construct()
  {
	 parent::__construct();

	}
    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('post');
        $query = $this->db->get();
        return $query;
    }

  public function tampil_hama()
  {
    $this->db->select('*');
    $this->db->from('post');
    $this->db->where('kategori="Hama"');
    $query = $this->db->get();
    return $query;
  }

  public function tampil_penyakit()
  {
    $this->db->select('*');
    $this->db->from('post');
    $this->db->where('kategori="Penyakit"');
    $query = $this->db->get();
    return $query;
  }
  public function hapus_postingan($id)
  {
    return $this->db->where('kode_post', $id)->delete('post');
  }

  public function tambah_post($data)
  {
    return $this->db->insert('post', $data);
  }

  public function detail($id)
  {
    $this->db->select('*');
    $this->db->from("post");
    $this->db->where("kode_post", $id);
    $query = $this->db->get();
    return $query;
  }

  public function update_gambar($id, $data)
  {
    return $this->db->where('kode_post', $id)->update('post', $data);
  }

  public function update_data($data, $id)
  {
    return $this->db->where('kode_post', $id)->update('post', $data);
  }

 }
