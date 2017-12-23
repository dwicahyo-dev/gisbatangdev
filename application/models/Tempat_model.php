<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tempat_model extends CI_Model {
	private $table = 'tempat';
	
	public function get_tempat()
	{
		return $this->db->get($this->table)->result();
	}

	public function get_tempat_where($id_tempat)
	{
		return $this->db->from($this->table)
				->where('id_tempat', $id_tempat)
				->get()->row();
	}

	public function insert_tempat($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function delete_tempat($id_tempat)
	{
		$this->db->where('id_tempat', $id_tempat)
			->delete($this->table);

		if ($this->db->affected_rows() > 0 ) {
			return true;
		}
	}

	public function search_tempat($search)
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->like('nama_tempat', $search)
                    ->get()->result();
    }

}

/* End of file Tempat_model.phg */
/* Location: ./application/models/Tempat_model.phg */