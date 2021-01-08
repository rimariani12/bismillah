<?php defined('BASEPATH') or exit('No direct script access allowed');

class Berita_admin_model extends CI_Model
{
	private $_table = 'berita';

	public $id;
	public $judul_berita;
	public $kategori;
	public $isi_berita;
	public $url_foto;
	public $status;

	public function getAll()
	{
		$query = "SELECT * FROM $this->_table";
		return $this->db->query($query)->result();
	}

	public function getById($id)
	{
		$query = "SELECT * FROM $this->_table WHERE id = $id";
		return $this->db->query($query)->row();
	}

	public function save()
	{
		$post = $this->input->post();

		return $this->db->insert($this->_table, $this);
	}

	public function hapusBerita($id){
		$this->db->delete('berita', ['id' => $id]);
	}

	public function update_berita($where, $data){
        $query = $this->db->where($where);
        $query = $this->db->update($this->_table,$data);
        return $query;
      }
}
