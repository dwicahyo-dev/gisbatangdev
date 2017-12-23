<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_berita_model extends CI_Model {
    private $table = 'kategori_berita';

    public function get_kategori_berita()
    {
        return $this->db->get($this->table)->result();
    }

    public function get_kategori_berita_where($id_kategori_berita)
    {
        return $this->db->from($this->table)
                    ->where('id_kategori_berita', $id_kategori_berita)
                    ->get()->row();
    }

    public function insert_kategori_berita($data)
    {
        return $this->db->insert($this->table, $data);
    }    

    public function search_kategori_berita($search)
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->like('kategori_berita', $search)
                    ->get()->result();
    }
	

}

/* End of file Kategori_berita_model.php */
/* Location: ./application/models/Kategori_berita_model.php */