<?php

class MyModel extends CI_Model
{
	public function add($tabel, $data)
	{
		# code...
		$this->db->insert($tabel, $data);
		return $this->db->affected_rows();
	}

	public function edit($tabel, $data, $whereClause)
	{
		# code...
		$this->db->update($tabel, $data, $whereClause);
		return $this->db->affected_rows();
	}

	public function get($tabel, $whereClause = null, $row = false)
	{
		# code...
		if ($whereClause == null) {
			return $this->db->get($tabel)->result_array();
		} else {
			if ($row == false) {
				return $this->db->get_where($tabel, $whereClause)->result_array();
			} else {
				return $this->db->get_where($tabel, $whereClause)->row_array();
			}
		}
	}

	public function trash($tabel, $whereClause)
	{
		# code...
		$this->db->delete($tabel, $whereClause);
		return $this->db->affected_rows();
	}

	public function kode()
	{
		# code...
		$this->db->select_max('kode_barang');
		$data = $this->db->get('barang')->row_array();
		$kodeNRM = $data['kode_barang'];
		$urutan = (int) substr($kodeNRM, 4, 3);
		$urutan++;
		$huruf = "BRG-";
		$nrm = $huruf . sprintf("%03s", $urutan);
		return $nrm;
	}

	// public function get_month($tabel, $whereClause)
	// {
	//     # code...
	//     $this->db->select()
	// }

	public function uploadImage($kode_barang = null)
	{
		if ($kode_barang == null) {
			$kode_barang = $this->kode();
		}

		$config['upload_path']          = './assets/img/product/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $kode_barang;
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('gambar')) {
			return $this->upload->data("file_name");
		}

		return "default.jpg";
	}
}
