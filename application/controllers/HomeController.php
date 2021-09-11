<?php


class HomeController extends CI_Controller
{

	public function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('MyModel', 'mod');
		$this->load->library('form_validation');
		$this->load->library('session');

		date_default_timezone_set('Asia/Jakarta');
		if (!$this->session->userdata('user')) {
			redirect('auth');
		}
	}

	public function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/navbar.php');
		$this->load->view('pages/dashboard/index.php');
		$this->load->view('templates/footer.php');
	}
}
