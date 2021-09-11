<?php

class Suppliers extends CI_Controller
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
		$data['scripts'] = ['https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js', 'https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap5.min.js'];
		$data['add_scripts'] = "<script>$(document).ready(function() {
																$('#example').DataTable();
														} );</script>";
		$data['styles'] = ['https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css', 'https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap5.min.css'];

		$data['suppliers'] = $this->mod->get('supplier');


		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/navbar.php', $data);
		$this->load->view('pages/supplier/index.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function create()
	{
		$data = '';

		$this->form_validation->set_rules('nama_supplier', 'Nama Supplier', 'required');
		$this->form_validation->set_rules('no_hp', 'Nama Supplier', 'required');
		$this->form_validation->set_rules('alamat', 'Nama Supplier', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/navbar.php', $data);
			$this->load->view('pages/supplier/create.php', $data);
			$this->load->view('templates/footer.php', $data);
		} else {
			$val = [
				'nama_supplier' => $this->input->post('nama_supplier'),
				'no_hp' => $this->input->post('no_hp'),
				'alamat' => $this->input->post('alamat'),
			];

			if ($this->mod->add('supplier', $val)) {
				$this->session->set_flashdata('success', 'Data has been added!');
				return redirect('suppliers');
			} else {
				$this->session->set_flashdata('gagal', 'Data failed!');
				return redirect('suppliers');
			}
		}
	}

	public function update($id)
	{
		$data['supplier'] = $this->mod->get('supplier', ['id_supplier' => $id], true);

		$this->form_validation->set_rules('nama_supplier', 'Nama Supplier', 'required');
		$this->form_validation->set_rules('no_hp', 'Nama Supplier', 'required');
		$this->form_validation->set_rules('alamat', 'Nama Supplier', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/navbar.php', $data);
			$this->load->view('pages/supplier/edit.php', $data);
			$this->load->view('templates/footer.php', $data);
		} else {
			$val = [
				'nama_supplier' => $this->input->post('nama_supplier'),
				'no_hp' => $this->input->post('no_hp'),
				'alamat' => $this->input->post('alamat'),
			];

			if ($this->mod->edit('supplier', $val, ['id_supplier' => $id])) {
				$this->session->set_flashdata('success', 'Data has been updated!');
				return redirect('suppliers');
			} else {
				$this->session->set_flashdata('gagal', 'Data failed!');
				return redirect('suppliers');
			}
		}
	}

	public function delete($id)
	{
		$this->mod->trash('supplier', ['id_supplier' => $id]);
		$this->session->set_flashdata('success', 'Data has been deleted!');
		return redirect('suppliers');
	}
}
