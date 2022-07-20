<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');

class M_Index extends CI_Model
{
  function __construct()
  {
	 parent::__construct();

	}

  function gejala()
  {
    $this->db->select('*, COUNT(kode_gejala) as total');
    $this->db->from('gejala');
    $hasil = $this->db->get();
    return $hasil;
  }

  function pengetahuan()
  {
    $this->db->select('*, COUNT(kode_pengetahuan) as total');
    $this->db->from('basis_pengetahuan');
    $hasil = $this->db->get();
    return $hasil;
  }

  function hama()
  {
    $this->db->select('*, COUNT(kode_penyakit) as total');
    $this->db->from('penyakit');
    $this->db->where('kategori="Hama"');
    $hasil = $this->db->get();
    return $hasil;
  }

  function penyakit()
  {
    $this->db->select('*, COUNT(kode_penyakit) as total');
    $this->db->from('penyakit');
    $this->db->where('kategori="Penyakit"');
    $hasil = $this->db->get();
    return $hasil;
  }

  function riwayat()
  {
    $this->db->select('*');
    $this->db->from('hasil');
    $this->db->where('id_hasil');
    $query = $this->db->get();
    return $query;
  }


 }
