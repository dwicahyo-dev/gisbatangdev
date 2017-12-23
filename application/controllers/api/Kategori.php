<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/api/Restdata.php';
use \Firebase\JWT\JWT;

class Kategori extends Restdata {

	public function __construct()
	{
		parent::__construct();
		$this->cektoken();
	}

	public function index_get($id = NULL)
	{
		$kategori = $this->Kategori_model->get_kategori();
		if($kategori){
			return $this->response($kategori, 200);
		}else{
			return $this->badreq('Data Kategori Tidak Ditemukan');
		}
	}

	public function index_post()
	{
		$data = [
			'kategori' => $this->input->post('kategori'),
			'icon' => $this->input->post('icon')
		];

		$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required', 'Kategori Wajib Diisi');

		if ($this->form_validation->run() == FALSE) {
			$this->badreq($this->validation_errors());
		} else {
			if($this->Kategori_model->insert_kategori($data)){
				$this->response($data,Restdata::HTTP_CREATED);
			}
		}

	}

	public function show_get($id)
	{
		$kategori = $this->Kategori_model->get_kategori_where($id);
		if($kategori != NULL){
			return $this->response($kategori, 200);
		}else{
			return $this->badreq('Data Kategori Tidak Ditemukan');
		}
		
	}

	public function search_get($search)
	{
		$kategori = $this->Kategori_model->search_kategori($search);
		if($kategori != NULL){
			return $this->response($kategori, 200);
		}else{
			return $this->badreq('Pencarian Kategori Tidak Ditemukan');
		}
	}



}

/* End of file Kategori.php */
/* Location: ./application/controllers/api/Kategori.php */