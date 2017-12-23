<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

    private $table = 'kategori';

    public function get_kategori()
    {
        return $this->db->get($this->table)->result();
    }

    public function get_kategori_where($id_kategori)
    {
        return $this->db->from($this->table)
                    ->where('id_kategori', $id_kategori)
                    ->get()->row();
    }

    public function insert_kategori($data)
    {
        return $this->db->insert($this->table, $data);
    }    

    public function search_kategori($search)
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->like('kategori', $search)
                    ->get()->result();
    }

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */