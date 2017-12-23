<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {
	private $table = 'berita';

	public function get_berita()
	{
		return $this->db->get($this->table)->result();
	}

	public function get_berita_where($id_berita)
	{
		return $this->db->from($this->table)
				->where('id_berita', $id_berita)
				->get()->row();
	}

	public function insert_berita($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function delete_berita($id_berita)
	{
		$this->db->where('id_berita', $id_berita)
			->delete($this->table);

		if ($this->db->affected_rows() > 0 ) {
			return true;
		}

	}

}

/* End of file Berita_model.php */
/* Location: ./application/models/Berita_model.php */