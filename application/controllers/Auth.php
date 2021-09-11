<?php

class Auth extends CI_Controller
{
	public function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('MyModel', 'mod');
		$this->load->library('form_validation');
		$this->load->library('session');

		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{

		if ($this->session->userdata('user')) {
			redirect('homeController');
		}

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('pages/auth/login.php');
		} else {
			$user = $this->mod->get('admin', ['username' => $this->input->post('username')], true);

			if ($user) {
				if ($user['password'] === $this->input->post('password')) {
					$this->session->set_userdata('user', $user);
					redirect('homeController');
				}
			}
			$this->session->set_flashdata('gagal', 'Username / Password Salah!');
			redirect('auth');
		}
	}

	public function signUp()
	{

		if ($this->session->userdata('user')) {
			redirect('homeController');
		}

		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[admin.username]');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('pages/auth/sign_up.php');
		} else {
			$val  = [
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			];

			if ($this->mod->add('admin', $val)) {
				$this->session->set_flashdata('success', 'Registrations success!');
				redirect('auth');
			} else {
				$this->session->set_flashdata('gagal', 'Registrations Failed!');
				redirect('auth/signUp');
			}
		}
	}

	public function logout()
	{
		session_destroy();
		redirect('auth');
	}
}
