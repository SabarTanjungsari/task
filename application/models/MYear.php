<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MYear extends CI_Model {

    var $table = 'c_year';

    public function get_all() {
        $this->db->select('*');
        $this->db->from('c_year');
        $query = $this->db->get();
        return $query->result();
    }

    public function add($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function get_by_id($id) {
        $this->db->from($this->table);
        $this->db->where('c_year_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function update($where, $data) {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
}
