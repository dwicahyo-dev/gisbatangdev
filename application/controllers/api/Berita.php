<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/api/Restdata.php';
use \Firebase\JWT\JWT;

class Berita extends Restdata {

	public function __construct()
	{
		parent::__construct();
		$this->cektoken();
	}

	/**
	 * Digunakan Untuk GET ALL Berita
	 * @return [type] [description]
	 */
	public function index_get()
	{
		$berita = $this->Berita_model->get_berita();

		if ($berita != NULL) {
			return $this->response($berita, 200);
		} else {
			return $this->badreq('Data Berita Tidak Ditemukan');
		}
	}

	/**
	 * Digunakan Untuk INSERT DATA Berita dengan Method POST
	 * @return [type] [description]
	 */
	public function index_post()
	{
		$data = [
			'id_kategori_berita' => $this->input->post('id_kategori_berita'),
			'judul_berita' => $this->input->post('judul_berita'),
			'isi_berita' => $this->input->post('isi_berita'),
			'author' => $this->input->post('author'),
		];

		$this->form_validation->set_rules('id_kategori_berita', 'Kategori Berita ID', 'trim|required', 'ID Kategori Berita Wajib Diisi');
		$this->form_validation->set_rules('judul_berita', 'Judul Berita', 'trim|required', 'Judul Berita Wajib Diisi');
		$this->form_validation->set_rules('isi_berita', 'Isi Berita', 'trim|required', 'Isi Berita Wajib Diisi');
		$this->form_validation->set_rules('author', 'Author', 'trim|required', 'Author Wajib Diisi');

		if ($this->form_validation->run() == FALSE) {
			$this->badreq($this->validation_errors());
		} else {
			if($this->Berita_model->insert_berita($data)){
				$this->response($data,Restdata::HTTP_CREATED);
			}
		}
	}

	/**
	 * Digunakan Untuk GET Single Berita Berdasarkan ID Berita
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function show_get($id)
	{
		$berita = $this->Berita_model->get_berita_where($id);

		if ($berita != NULL) {
			return $this->response($berita, 200);
		} else {
			return $this->badreq('Data Berita Tidak Ditemukan');
		}
	}

	/**
	 * Digunakan Untuk Mendelete Berita Berdasarkan ID Berita
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function berita_delete($id)
	{
		$delete_berita = $this->Berita_model->delete_berita($id);
		
		if ($delete_berita){
			$this->response([
				'id' => $id,
				'status' => 'Data Berita Berhasil Di Delete'
			],Restdata::HTTP_OK);
		} else {
			$this->badreq('Gagal Menghapus Data Berita dengan ID ' .$id);
		}
	}

	/**
	 * Digunakan Untuk Mencari Berita Berdasarkan judul_berita
	 * @param  [type] $search [description]
	 * @return [type]         [description]
	 */
	public function search_get($search)
	{
		$berita = $this->Berita_model->search_berita($search);
		if($berita != NULL){
			return $this->response($berita, 200);
		}else{
			return $this->badreq('Pencarian Berita Tidak Ditemukan');
		}
	}

}

/* End of file Berita.php */
/* Location: ./application/controllers/api/Berita.php */