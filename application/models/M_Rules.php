<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');

class M_Rules extends CI_Model
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
    $this->db->join('gejala', 'gejala.kode_gejala=basis_pengetahuan.kode_gejala');
    $this->db->group_by('basis_pengetahuan.kode_hp');
    $query = $this->db->get();
    return $query;
  }
  public function tampil_hama()
  {
    $this->db->select('*');
    $this->db->from('basis_pengetahuan');
    $this->db->join('hp', 'hp.kode_hp=basis_pengetahuan.kode_hp');
    $this->db->join('gejala', 'gejala.kode_gejala=basis_pengetahuan.kode_gejala');
    $this->db->group_by('basis_pengetahuan.kode_hp');
    $this->db->where('kategori="Hama"');
    $query = $this->db->get();
    return $query;
  }
  public function tampil_penyakit()
  {
    $this->db->select('*');
    $this->db->from('basis_pengetahuan');
    $this->db->join('hp', 'hp.kode_hp=basis_pengetahuan.kode_hp');
    $this->db->join('gejala', 'gejala.kode_gejala=basis_pengetahuan.kode_gejala');
    $this->db->group_by('basis_pengetahuan.kode_hp');
    $this->db->where('kategori="Penyakit"');
    $query = $this->db->get();
    return $query;
  }

  //  public function tampil_rules($id)
  // {
  //   $this->db->select('*');
  //   $this->db->from('basis_pengetahuan');
  //   $this->db->join('hp', 'hp.kode_hp=basis_pengetahuan.kode_hp');
  //   $this->db->join('gejala', 'gejala.kode_gejala=basis_pengetahuan.kode_gejala');
  //   $this->db->where('basis_pengetahuan.kode_hp',$id);
  //   $query = $this->db->get();
  //   return $query;
  // }



 }
