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

// halaman Admin 

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



	public function pengaturanmenu()
	{
		$data = [
			'title' => 'PengaturanMenu | STI Admin',
			'pages' => [
				'page_1' => 'PengaturanMenu'
			],
		];


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin', $data);
		$this->load->view('Admin/pengaturanmenu', $data);
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

// Halaman Fungsi Galeri

	public function tambahgaleri(){
		$data = array();
		if($this->input->post('submit')){
		$config['upload_path'] = './assets/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('admin/tambahgaleri', $error);
        } else {
            $data = array('image_metadata' => $this->upload->data());
			$model = $this->Model_galeri->save($this->input->post(), $this->upload->data());
			var_dump($model);
	}
}
          
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin', $data);
		$this->load->view('admin/tambahgaleri', $data);
		$this->load->view('templates/footer', $data);
	}

 	public function store(){
		$config['upload_path'] = './assets/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 2000;
		$config['max_width'] = 1500;
		$config['max_height'] = 1500;
	
			$this->load->library('upload', $config);
	
			if (!$this->upload->do_upload('gambar')) {
				$error = array('error' => $this->upload->display_errors());
	
				$this->load->view('admin/tambahgaleri', $error);
			} else {
				$data = array('image_metadata' => $this->upload->data());
				$model = $this->Model_galeri->save($this->input->post(), $this->upload->data());
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar_admin', $data);
				$this->load->view('admin/tambahgaleri', $data);
				$this->load->view('templates/footer', $data);
		}
  }


	public function ubah($id_galeri = null)
    {

        $data = [
            'title' => 'Admin',
            'galeri' => $this->Model_galeri->getById($id_galeri)
        ];

        if (!isset($id_galeri)) {
            redirect('admin/galeri');
        }

        if (isset($_POST['simpan'])) {
				$post = $this->input->post();
				if(!empty($_FILES["gambar"]["name"])){
					$data1 = array(
						"nama_galeri" => $post['nama_galeri'],
						"gambar" =>  $this->_uploadImage2(),
						"status" => $post['status']
					);
				}else{
					$data1 = array(
						"nama_galeri" => $post['nama_galeri'],
						"gambar" =>  $post['galeri_lama'],
						// "gambar" => $this->_uploadImage2(),
						"status" => $post['status']
					);
				}
                $where = array(
                    'id_galeri' => $post['id_galeri']
                );

                $this->Model_galeri->update_galeri($where, $data1);
                $this->session->set_flashdata('success_ubah', 'Berhasil diubah');
                redirect('admin/galeri');
            } else {
                $this->session->set_flashdata('danger_ubah', 'Gagal diubah');
            }

			$data = [
				'title' => 'Admin',
				'galeri' => $this->Model_galeri->getById($id_galeri)
			];

        if (!$data["galeri"]) show_404();
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar_admin', $data);
				$this->load->view('Admin/ubahgaleri', $data);
				$this->load->view('templates/footer', $data);
    }

	private function _uploadImage2()
    {
		$config['upload_path']          = './assets/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		$config['overwrite']            = true;
		$config['encrypt_name']         = TRUE;
		$config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('gambar')) {
			return $this->upload->data("file_name");
		} else {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/galeri', $error);

		}
		return "thumbnail-boot-svg";
    }

		public function detailgaleri($id)
		{
			$data['title'] = 'Admin';
			$data['galeri'] = $this->Model_galeri->getById($id);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar_admin', $data);
			$this->load->view('Admin/detailgaleri', $data);
			$this->load->view('templates/footer', $data);
		}


		function hapusGaleri($id_galeri){
			$this->Model_galeri->hapusGaleri($id_galeri);
			redirect('admin/galeri');
		}
	
// Halaman Fungsi Berita

	public function tambah()
	{

		$data = [

			'title' => 'Tambah Berita | STI Admin',
			'pages' => [
				'page_1' => 'Tambah Berita'
			],
		];

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin', $data);
		$this->load->view('Admin/tambahberita', $data);
		$this->load->view('templates/footer', $data);
		if (isset($_POST['simpan'])) {

			$this->form_validation->set_rules('judul_berita', 'Judul Berita', 'trim|required');
			$this->form_validation->set_rules('kategori', 'Kategori', 'required');
			$this->form_validation->set_rules('isi_berita', 'Isi Berita', 'trim|required');
			$this->form_validation->set_rules('url_foto', 'Foto', 'trim|required');
			$this->form_validation->set_rules('status', 'Status', 'required');


			if ($this->form_validation->run() != false) {

				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Data Gagal Ditambah </div>');
			} else {
				$data2 = [
					'judul_berita' => htmlspecialchars($this->input->post('judul_berita', true)),
					'kategori' => htmlspecialchars($this->input->post('kategori', true)),
					'isi_berita' => htmlspecialchars($this->input->post('isi_berita', true)),
					'url_foto' => htmlspecialchars($this->_uploadImage()),
					'status' => htmlspecialchars($this->input->post('status', true)),

				];
				$this->db->insert('berita', $data2);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                 Congratulation! your account has been created. Please Login </div>');
				redirect('admin/berita');
			}
		}

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


	// public function detailberita($id)
	// {

	// 	$data = [

	// 		'title' => 'Detail Berita | STI Admin',
	// 		'pages' => [
	// 			'page_1' => 'Detail Berita'
	// 		],
	// 		'details' => $this->Berita_admin_model->getById($id)

	// 	];

	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('templates/sidebar_admin', $data);
	// 	$this->load->view('Admin/detailberita', $data);
	// 	$this->load->view('templates/footer', $data);
	// }

	public function detailberita($id)
		{
			$data['title'] = 'Admin';
			$data['berita'] = $this->Berita_admin_model->getById($id);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar_admin', $data);
			$this->load->view('Admin/detailberita', $data);
			$this->load->view('templates/footer', $data);
		}

		function hapus($id){
			$this->Berita_admin_model->hapusBerita($id);
			redirect('admin/berita');
		}

		public function ubahBerita($id = null){

        $data = [
            'title' => 'Admin',
            'berita' => $this->Berita_admin_model->getById($id)
        ];

        if (!isset($id)) {
            redirect('admin/berita');
        }

        if (isset($_POST['simpan'])) {
				$post = $this->input->post();
				if(!empty($_FILES["url_foto"]["name"])){
					$data1 = array(
						"judul_berita" => $post['judul_berita'],
						"kategori" => $post['kategori'],
						"isi_berita" => $post['isi_berita'],
						"url_foto" =>  $this->_uploadImage2(),
						"status" => $post['status']
					);
				}else{
					$data1 = array(
						"judul_berita" => $post['judul_berita'],
						"kategori" => $post['kategori'],
						"isi_berita" => $post['isi_berita'],
						"gambar" =>  $post['galeri_lama'],
						// "gambar" => $this->_uploadImage2(),
						"status" => $post['status']
					);
				}
                $where = array(
                    'id' => $post['id']
                );

                $this->Berita_admin_model->update_berita($where, $data1);
                $this->session->set_flashdata('success_ubah', 'Berhasil diubah');
                redirect('admin/berita');
            } else {
                $this->session->set_flashdata('danger_ubah', 'Gagal diubah');
            }

			$data = [
				'title' => 'Admin',
				'berita' => $this->Berita_admin_model->getById($id)
			];

        if (!$data["berita"]) show_404();
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar_admin', $data);
				$this->load->view('Admin/ubahberita', $data);
				$this->load->view('templates/footer', $data);
    }
}
