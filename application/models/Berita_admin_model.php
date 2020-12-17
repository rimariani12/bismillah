<?php defined('BASEPATH') or exit('No direct script access allowed');

class Berita_admin_model extends CI_Model
{
	private $_table = 'berita';

	public $id_berita;
	public $judul_berita;
	public $kategori;
	public $isi_berita;
	public $foto;
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



	// public function add()
	// {
	// 	$post = $this->input->post();
	// 	$this->id_berita = '';
	// 	$this->judul_berita = $post["judul_berita"];
	// 	$this->kategori = $post["kategori"];
	// 	$this->isi_berita = $post["isi_berita"];
	// 	$this->url_foto = $post["url_foto"];
	// 	$this->status = 'Aktif';
	// 	return $this->db->insert($this->_table, $this);
	// }

	// public function save($data)
	// {
	// 	return $this->db->insert($this->_table, $data);
	// }


	// public function getupdate($data)
	// {

	// 	$this->db->update('berita', $data);
	// }

	// public function getinsert($data)
	// {
	// 	$this->db->insert('berita', $data);
	// }


	// public function inputData()
	// {
	// 	$data = [
	// 		// "username" => $this->input->post('username', true), //mengamankan data dengan parameter true, pake XSS filter seperti binding
	// 		// "email" => $this->input->post('email', true),
	// 		// "password" => $this->input->post('password', true),

	// 		'judul_berita' => $this->input->post('judul_berita', true),
	// 		'kategori' => $this->input->post('kategori', true),
	// 		'isi_berita' => $this->input->post('isi_berita', true),
	// 		'url_foto' => $this->input->post('url_foto', true),
	// 		'status' => $this->input->post('status', true),
	// 	];
	// 	$this->db->insert('berita', $data);
	// }

	// public function tambahProduk($data, $table)
	// {
	// 	$this->db->insert($table, $data);
	// }



	// public function save($table, $data)
	// {
	// 	//Insert Akun
	// 	// $query = "INSERT INTO sti_global.akun_user(nama_user, kata_sandi, level_akun, tgl_buat) VALUES ('$guru->nama_user', md5('$guru->kata_sandi'), '$guru->level_akun', '$guru->tgl_buat')";
	// 	// $this->db->query($query);
	// 	// $id_akun = $this->db->insert_id();

	// 	//Insert Guru
	// 	// $query = "INSERT INTO sti.guru(nama_lengkap, tgl_lahir, jenis_kelamin, alamat, no_telepon, foto, status, id_regional, id_user)
	// 	// VALUES ('$guru->nama_lengkap', '$guru->tgl_lahir', '$guru->jenis_kelamin', '$guru->alamat', '$guru->no_telepon','$guru->foto', '$guru->status', $guru->id_regional, $id_akun)";
	// 	$this->db->insert($table, $data);
	// 	return $this->db->insert($this->_table, $this);
	// }


	public function save()
	{
		$post = $this->input->post();

		return $this->db->insert($this->_table, $this);
	}
}
