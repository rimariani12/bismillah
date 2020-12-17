<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Berita_admin_model');
		$this->load->model('Model_galeri');
		$this->load->library('form_validation');
		// $this->load->helper(array('form', 'url'));
	}



	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Login Page';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer', $data);
		} else {
			//validasi success
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		//user ada
		if ($user) {
			//jika user aktif
			if ($user['is_active'] == 1) {
				//cek password
				if (password_verify($password, $user['password'])) {
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1) {
						redirect('Admin/dashboard');
					} else {
						redirect('Admin/dashboard');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
					redirect('admin');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
				redirect('admin');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
			redirect('admin');
		}
	}

	public function registration()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');

		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'This email has already registered!'
		]);

		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!'
		]);

		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'User Registration';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/auth_footer', $data);
		} else {
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'datte_created' => time()
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login</div>');
			redirect('admin');
		}
	}

	public function dashboard()
	{
		$data['title'] = 'Admin';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin', $data);
		$this->load->view('Admin/dashboard', $data);
		$this->load->view('templates/footer', $data);
	}

	public function galeri()
	{
		$data = [
			'title' => 'Galeri | STI Admin',
			'pages' => [
				'page_1' => 'Galeri'
			],
			'galeris' => $this->Model_galeri->getAll()
		];


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin', $data);
		$this->load->view('Admin/galeri', $data);
		$this->load->view('templates/footer', $data);
	}

	public function admin2()
	{
		$data = [
			'title' => 'Admin2 | STI Admin',
			'pages' => [
				'page_1' => 'Admin2'
			],
		];

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin2', $data);
		$this->load->view('admin2/admin_2', $data);
		$this->load->view('templates/footer', $data);
	}

	// public function tambahgaleri()
	// {
	// 	$data['judul'] = 'Form Tambah Data Galeri';

	//     $this->form_validation->set_rules('nama_galeri', 'Nama Galeri', 'required');

	//     if ($this->form_validation->run() == false) {
	//         $this->load->view('templates/header', $data);
	// 		$this->load->view('templates/sidebar_admin', $data);
	// 		$this->load->view('Admin/tambahgaleri', $data);
	// 		$this->load->view('templates/footer', $data);    
	//     } else {
	//         $this->Model_galeri->tambahglr();
	//         $this->session->set_flashdata('flash', 'Ditambahkan');
	//         redirect('user/galeri');
	//     }
	// }

	public function tambahgaleri()
	{
		$galeri = $this->Model_galeri;
		$validation = $this->form_validation;
		// $validation->set_rules($galeri->rules());

		if ($validation->run()) {
			$galeri->tambahglr();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect('user/galeri');
		}

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('Admin/tambahgaleri');
		$this->load->view('templates/footer');
	}



	public function ubahgaleri()
	{
		$data['title'] = 'Admin';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin', $data);
		$this->load->view('Admin/ubahgaleri', $data);
		$this->load->view('templates/footer', $data);
	}

	public function detailgaleri()
	{
		$data['title'] = 'Admin';

		$this->load->view('Admin/detailgaleri', $data);
	}

	public function berita()
	{
		$data = [
			'title' => 'Berita | STI Admin',
			'pages' => [
				'page_1' => 'Berita'
			],
			'beritas' => $this->Berita_admin_model->getAll()
		];

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin', $data);
		$this->load->view('Admin/berita', $data);
		$this->load->view('templates/footer', $data);
	}


	// public function tambahBerita()
	// {

	// 	$data = [
	// 		'title' => 'TAmbah Berita | STI Admin',
	// 		'pages' => [
	// 			'page_1' => 'Tambah Berita'
	// 		],
	// 		// 'beritas' => $this->Berita_admin_model->save()
	// 	];

	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('templates/sidebar_admin', $data);
	// 	$this->load->view('Admin/tambahberita', $data);
	// 	$this->load->view('templates/footer', $data);

	// 	if (isset($_POST['simpan'])) {


	// 		$this->form_validation->set_rules('judul_berita', 'Isi Berita', 'trim|required');
	// 		$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
	// 		$this->form_validation->set_rules('isi_berita', 'Isi Berita', 'trim|required');
	// 		$this->form_validation->set_rules('foto', 'Foto', 'trim|required');
	// 		$this->form_validation->set_rules('status', 'Status', 'trim|required');


	// 		if ($this->form_validation->run() == false) {
	// 			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
	// 			Congratulation! your account has been created. Please Login </div>');
	// 		} else {

	// 			$data2 = [

	// 				'judul_berita' => htmlspecialchars($this->input->post('judul_berita', true)),
	// 				'kategori' => htmlspecialchars($this->input->post('kategori', true)),
	// 				'isi_berita' => htmlspecialchars($this->input->post('isi_berita', true)),
	// 				'foto' => htmlspecialchars($this->input->post('foto', true)),
	// 				'status' => htmlspecialchars($this->input->post('status', true)),
	// 			];

	// 			$this->db->insert('berita', $data2);
	// 			$this->session->set_flashdata('message', '<div> gelut </div>');
	// 			redirect('login');
	// 		}
	// 	}
	// }


	// $data1 = array(
	// 	'judul_berita' => $post['judul_berita'],
	// 	'kategori' => $post['kategori'],
	// 	'isi_berita' => $post['isi_berita'],
	// 	'foto' =>  $post['foto'],
	// 	'status' => $post['status'],
	// 	// 'foto' => $this->_uploadImage(),

	public function tambah()
	{

		$data = [

			'title' => 'Tambah Berita | STI Admin',
			'pages' => [
				'page_1' => 'Tambah Berita'
			],
			// 'beritas' => $this->Berita_admin_model->save()
		];

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin', $data);
		$this->load->view('Admin/tambahberita', $data);
		$this->load->view('templates/footer', $data);
		if (isset($_POST['simpan'])) {

			$this->form_validation->set_rules('judul_berita', 'Judul Berita', 'trim|required');
			$this->form_validation->set_rules('kategori', 'Kategori', 'required');
			$this->form_validation->set_rules('isi_berita', 'Isi Berita', 'trim|required');
			$this->form_validation->set_rules('foto', 'Foto', 'trim|required');
			$this->form_validation->set_rules('status', 'Status', 'required');
			// $post = $this->input->post();

			// $berita = $this->Berita_admin_model;


			if ($this->form_validation->run() != false) {

				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Data Gagal Ditambah </div>');
			} else {
				$data2 = [
					'judul_berita' => htmlspecialchars($this->input->post('judul_berita', true)),
					'kategori' => htmlspecialchars($this->input->post('kategori', true)),
					'isi_berita' => htmlspecialchars($this->input->post('isi_berita', true)),
					'foto' => htmlspecialchars($this->_uploadImage()),
					'status' => htmlspecialchars($this->input->post('status', true)),

				];
				$this->db->var_dump('berita', $data2);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                 Congratulation! your account has been created. Please Login </div>');
				redirect('admin/berita');
			}


			// $data1 = array(

			// 	'judul_berita' => $post['judul_berita'],
			// 	'kategori' => $post['kategori'],

			// 	'isi_berita' => $post['isi_berita'],
			// 	'foto' => $this->_uploadImage(),
			// 	'status' => $post['status']

			// );
			// $berita->save('berita', $data1);
			// $this->session->set_flashdata('success', 'Berhasil ditambahkan');

			// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			// Berhasil ditambahkan </div>');
			// } else {


			// 	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			//     Gagal ditambahkan </div>');
			// }
		}

		// $data = [

		// 	'title' => 'Tambah Berita | STI Admin',
		// 	'pages' => [
		// 		'page_1' => 'Tambah Berita'
		// 	],
		// 	// 'beritas' => $this->Berita_admin_model->save()
		// ];

		// $this->load->view('templates/header', $data);
		// $this->load->view('templates/sidebar_admin', $data);
		// $this->load->view('Admin/tambahberita', $data);
		// $this->load->view('templates/footer', $data);
	}

	private function _uploadImage()
	{
		$config['upload_path']          = './assets/img/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		// $config['file_name']            = $this->id_guru;
		$config['overwrite']            = true;
		$config['max_size']             = 1024; // 1MB
		$config['encrypt_name']            = TRUE;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto')) {
			return $this->upload->data("file_name");
		} else {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/tambahberita', $error);
		}
		return "thumbnail-boot-svg";
	}


	public function detailberita($id)
	{

		$data = [

			'title' => 'Detail Berita | STI Admin',
			'pages' => [
				'page_1' => 'Detail Berita'
			],
			'details' => $this->Berita_admin_model->getById($id)
		];

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin', $data);
		$this->load->view('Admin/detail_berita', $data);
		$this->load->view('templates/footer', $data);
	}










	// 	public function ubahberita()
	// 	{
	// 		$data['title'] = 'Admin';

	// 		$this->load->view('templates/header', $data);
	// 		$this->load->view('templates/sidebar_admin', $data);
	// 		$this->load->view('Admin/ubahberita', $data);
	// 		$this->load->view('templates/footer', $data);
	// 	}

	// 	public function pengaturanmenu()
	// 	{
	// 		$data['title'] = 'Admin';


	// 		$this->load->view('templates/header', $data);
	// 		$this->load->view('templates/sidebar_admin', $data);
	// 		$this->load->view('Admin/pengaturanmenu', $data);
	// 		$this->load->view('templates/footer', $data);
	// 	}

	// 	public function addBerita()
	// 	{
	// 		if (isset($_POST['simpan'])) {
	// 			$berita = $this->Berita_admin_model;
	// 			$validation = $this->form_validation;
	// 			$validation->set_rules($berita->rules());

	// 			if ($validation->run()) {
	// 				$berita->add();
	// 				$this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
	// 			} else {
	// 				$this->session->set_flashdata('danger', 'Gagal Ditambahkan');
	// 			}
	// 		}
	// 	}
	// }
}
