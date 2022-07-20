<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');

class M_admin extends CI_Model
{
    public $_table = "admin";

    public $nama_lengkap;
    public $username;
    public $password;
    public $email;

  function __construct()
  {
	 parent::__construct();
	 //validasi jika user belum login
	 }

    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('admin');
        $query = $this->db->get();
        return $query;
    }

    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from("admin");
        $this->db->where("id_admin", $id);
        $query = $this->db->get();
        return $query;
    }

    public function save_admin($data)
    {
        return $this->db->insert('admin', $data);
    }

    public function hapus_akun($id)
    {
        return $this->db->where('id_admin', $id)->delete('admin');
    }

    public function update_data($data, $id)
    {
        return $this->db->where('id_admin', $id)->update('admin', $data);
    }

    

  

 }
