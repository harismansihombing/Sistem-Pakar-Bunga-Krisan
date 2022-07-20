<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');

class M_Pengetahuan extends CI_Model
{
  function __construct()
  {
	 parent::__construct();

	}
    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('basis_pengetahuan');
        $this->db->join('hp', 'hp.kode_hp=basis_pengetahuan.kode_hp');
        $this->db->join('gejala','gejala.kode_gejala=basis_pengetahuan.kode_gejala');
        //$this->db->where('basis_pengetahuan.kode_pengetahuan');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_edit($id)
    {
        $this->db->select('*');
        $this->db->from('basis_pengetahuan');
        $this->db->join('hp', 'hp.kode_hp=basis_pengetahuan.kode_hp');
        $this->db->join('gejala','gejala.kode_gejala=basis_pengetahuan.kode_gejala');
        $this->db->where('basis_pengetahuan.kode_pengetahuan', $id);
        $query = $this->db->get();
        return $query;
    }

  public function penyakit()
  {
    $this->db->select('*');
    $this->db->from('hp');
    $this->db->order_by("nama_penyakit","esc");
    $query = $this->db->get();
    return $query;
  }
  public function gejala()
  {
    $this->db->select('*');
    $this->db->from('gejala');
    $this->db->order_by("nama_gejala", "esc");
    $query = $this->db->get();
    return $query;
  }

  public function save_pengetahuan($data)
  {
    return $this->db->insert('basis_pengetahuan', $data);
  }

  public function hapus_data($id)
  {
    return $this->db->where('kode_pengetahuan', $id)->delete('basis_pengetahuan');
  }

  public function update_data($data, $id)
  {
    return $this->db->where('kode_pengetahuan', $id)->update('basis_pengetahuan', $data);
  }


 }
