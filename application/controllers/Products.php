<?php

class Products extends CI_Controller
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

		$data['products'] = $this->mod->get('barang');

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/navbar.php', $data);
		$this->load->view('pages/product/index.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function create()
	{
		$data['kode_barang'] = $this->mod->kode();

		$this->form_validation->set_rules('nama_barang', 'Product Name', 'required');
		$this->form_validation->set_rules('merk_barang', 'Merk Product', 'required');
		$this->form_validation->set_rules('jenis_barang', 'Product Type', 'required');
		$this->form_validation->set_rules('stok_barang', 'Stok', 'required');
		$this->form_validation->set_rules('harga_barang', 'Price', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/navbar.php', $data);
			$this->load->view('pages/product/create.php', $data);
			$this->load->view('templates/footer.php', $data);
		} else {

			$val = [
				'kode_barang' => $this->input->post('kode_barang'),
				'nama_barang' => $this->input->post('nama_barang'),
				'merk_barang' => $this->input->post('merk_barang'),
				'jenis_barang' => $this->input->post('jenis_barang'),
				'stok_barang' => $this->input->post('stok_barang'),
				'harga_barang' => $this->input->post('harga_barang'),
				'gambar' => $this->mod->uploadImage()
			];

			if ($this->mod->add('barang', $val)) {
				$this->session->set_flashdata('success', 'Data has been added!');
				return redirect('products');
			} else {
				$this->session->set_flashdata('gagal', 'Data failed!');
				return redirect('products');
			}
		}
	}

	public function update($id)
	{
		$data['product'] = $this->mod->get('barang', ['kode_barang' => $id], true);

		$this->form_validation->set_rules('nama_barang', 'Product Name', 'required');
		$this->form_validation->set_rules('merk_barang', 'Merk Product', 'required');
		$this->form_validation->set_rules('jenis_barang', 'Product Type', 'required');
		$this->form_validation->set_rules('stok_barang', 'Stok', 'required');
		$this->form_validation->set_rules('harga_barang', 'Price', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/navbar.php', $data);
			$this->load->view('pages/product/edit.php', $data);
			$this->load->view('templates/footer.php', $data);
		} else {

			$image = $this->input->post('old_image');
			if (!empty($_FILES["gambar"]["name"])) {
				$image = $this->mod->uploadImage($id);
				// unlink(base_url() . 'assets/img/product/' . $this->input->post('old_image'));
			}

			$val = [
				'nama_barang' => $this->input->post('nama_barang'),
				'merk_barang' => $this->input->post('merk_barang'),
				'jenis_barang' => $this->input->post('jenis_barang'),
				'stok_barang' => $this->input->post('stok_barang'),
				'harga_barang' => $this->input->post('harga_barang'),
				'gambar' => $image,
			];

			if ($this->mod->edit('barang', $val, ['kode_barang' => $id])) {
				$this->session->set_flashdata('success', 'Data has been updated!');
				return redirect('products');
			} else {
				$this->session->set_flashdata('gagal', 'Data failed!');
				return redirect('products');
			}
		}
	}

	public function delete($id)
	{
		$img = $this->mod->get('barang', ['kode_barang' => $id], true);
		unlink('./assets/img/product/' . $img['gambar']);
		$this->mod->trash('barang', ['kode_barang' => $id]);
		$this->session->set_flashdata('success', 'Data has been deleted!');
		return redirect('products');
	}
}
