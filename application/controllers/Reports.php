<?php

class Reports extends CI_Controller
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

		$data['products'] = $this->mod->get('barang');
		$data['suppliers'] = $this->mod->get('supplier');

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/navbar.php', $data);
		$this->load->view('pages/report/index.php', $data);
		$this->load->view('templates/footer.php', $data);
	}
}
