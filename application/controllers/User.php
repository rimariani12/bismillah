<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model('Model_galeri');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$data['title'] = 'User';
		$this->load->view('templates/sidebar');
		$this->load->view('templates/user_header', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/user_footer', $data);
	}

	public function sejarah()
	{
		$data['title'] = 'User';

		$this->load->view('templates/sidebar');
		$this->load->view('templates/user_header', $data);
		$this->load->view('user/sejarah', $data);
		$this->load->view('templates/user_footer', $data);
	}

	public function visi_misi()
	{
		$data['title'] = 'User';

		$this->load->view('templates/sidebar');
		$this->load->view('templates/user_header', $data);
		$this->load->view('user/visi_misi', $data);
		$this->load->view('templates/user_footer', $data);
	}

	public function organisasi()
	{
		$data['title'] = 'User';

		$this->load->view('templates/sidebar');
		$this->load->view('templates/user_header', $data);
		$this->load->view('user/organisasi', $data);
		$this->load->view('templates/user_footer', $data);
	}

	public function program()
	{
		$data['title'] = 'User';

		$this->load->view('templates/sidebar');
		$this->load->view('templates/user_header', $data);
		$this->load->view('user/program', $data);
		$this->load->view('templates/user_footer', $data);
	}

	public function berita()
	{
		$data['title'] = 'User';

		$this->load->view('templates/sidebar');
		$this->load->view('templates/user_header', $data);
		$this->load->view('user/berita', $data);
		$this->load->view('templates/user_footer', $data);
	}

	public function beritaDetail()
	{
		$data['title'] = 'User';
		$this->load->view('templates/sidebar');
		$this->load->view('templates/user_header', $data);
		$this->load->view('user/berita_detail', $data);
		$this->load->view('templates/user_footer', $data);
	}

	public function artikel()
	{
		$data['title'] = 'User';

		$this->load->view('templates/sidebar');
		$this->load->view('templates/user_header', $data);
		$this->load->view('user/artikel', $data);
		$this->load->view('templates/user_footer', $data);
	}

	public function artikelDetail()
	{
		$data['title'] = 'User';
		$this->load->view('templates/sidebar');
		$this->load->view('templates/user_header', $data);
		$this->load->view('user/artikel_detail', $data);
		$this->load->view('templates/user_footer', $data);
	}

	public function galeri()
	{
		$data['title'] = 'User';
		// $data['galeri'] = $this->Model_galeri->getAllGaleri();

		$this->load->view('templates/user_header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('user/galeri', $data);
		$this->load->view('templates/user_footer', $data);
	}

	public function kontak()
	{
		$data['title'] = 'User';

		$this->load->view('templates/sidebar');
		$this->load->view('templates/user_header', $data);
		$this->load->view('user/kontak', $data);
		$this->load->view('templates/user_footer', $data);
	}
}
