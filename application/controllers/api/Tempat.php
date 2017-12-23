<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/api/Restdata.php';
use \Firebase\JWT\JWT;

class Tempat extends Restdata {
	
	public function __construct()
	{
		parent::__construct();
		$this->cektoken();
	}

	public function index_get()
	{
		$tempat = $this->Tempat_model->get_tempat();

		if ($tempat != NULL) {
			return $this->response($tempat, 200);
		} else {
			return $this->badreq('Data Tempat Tidak Ditemukan');
		}
	}

	public function index_post()
	{
		$data = [
			'kategori_id' => $this->input->post('kategori_id'),
			'nama_tempat' => $this->input->post('nama_tempat'),
			'lokasi' => $this->input->post('lokasi'),
			'deskripsi' => $this->input->post('deskripsi'),
			'telepon' => $this->input->post('telepon')
		];

		$this->form_validation->set_rules('kategori_id', 'Kategori Id', 'trim|required', 'Kategori Id Wajib Diisi');
		$this->form_validation->set_rules('nama_tempat', 'Nama Tempat', 'trim|required', 'Nama Tempat Wajib Diisi');
		$this->form_validation->set_rules('lokasi', 'Lokasi Tempat', 'trim|required', 'Lokasi Tempat Wajib Diisi');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Tempat', 'trim|required', 'Lokasi Tempat Wajib Diisi');
		$this->form_validation->set_rules('telepon', 'Nomor Telepon', 'trim|required', 'Nomor Telepon Wajib Diisi');

		if ($this->form_validation->run() == FALSE) {
			$this->badreq($this->validation_errors());
		} else {
			if($this->Tempat_model->insert_tempat($data)){
				$this->response($data,Restdata::HTTP_CREATED);
			}
		}

	}

	public function show_get($id)
	{
		$tempat = $this->Tempat_model->get_tempat_where($id);

		if ($tempat != NULL) {
			return $this->response($tempat, 200);
		} else {
			return $this->badreq('Data Tempat Tidak Ditemukan');
		}
	}

	public function tempat_delete($id)
	{
		$delete_tempat = $this->Tempat_model->delete_tempat($id);
		
		if ($delete_tempat){
			$this->response([
				'id' => $id,
				'status' => 'Data Tempat Berhasil Di Delete'
			],Restdata::HTTP_OK);
		} else {
			$this->badreq('Failed To Delete ID ' .$id);
		}
	}

}

/* End of file Tempat.php */
/* Location: ./application/controllers/api/Tempat.php */