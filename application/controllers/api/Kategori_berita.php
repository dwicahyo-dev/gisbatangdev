<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/api/Restdata.php';
use \Firebase\JWT\JWT;

class Kategori_berita extends Restdata {

	public function __construct()
	{
		parent::__construct();
		$this->cektoken();
	}

	public function index_get()
	{
		$kategori_berita = $this->Kategori_berita_model->get_kategori_berita();
		if($kategori_berita){
			return $this->response($kategori_berita, 200);
		}else{
			return $this->badreq('Data Kategori Berita Tidak Ditemukan');
		}
	}

	public function index_post()
	{
		$data = [
			'kategori_berita' => $this->input->post('kategori_berita')
		];

		$this->form_validation->set_rules('kategori_berita', 'Kategori Berita', 'trim|required', 'Kategori Berita Wajib Diisi');

		if ($this->form_validation->run() == FALSE) {
			$this->badreq($this->validation_errors());
		} else {
			if($this->Kategori_berita_model->insert_kategori_berita($data)){
				$this->response($data,Restdata::HTTP_CREATED);
			}
		}
	}

	public function show_get($id)
	{
		$kategori_berita = $this->Kategori_berita_model->get_kategori_berita_where($id);
		if($kategori_berita != NULL){
			return $this->response($kategori_berita, 200);
		}else{
			return $this->badreq('Data Kategori Berita Tidak Ditemukan');
		}
	}

	public function search_get($search)
	{
		$kategori_berita = $this->Kategori_berita_model->search_kategori_berita($search);
		if($kategori_berita != NULL){
			return $this->response($kategori_berita, 200);
		}else{
			return $this->badreq('Pencarian Kategori Berita Tidak Ditemukan');
		}
	}

}

/* End of file Kategori_berita.php */
/* Location: ./application/controllers/api/Kategori_berita.php */