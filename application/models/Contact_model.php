<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {

    public function getAll() {
        return $this->db->get("contacts")->result_array();
    }

    public function getById($id) {
        return $this->db->get_where("contacts", array(
            "id" => $id
        ))->row_array();
    }

    public function insert($contact) {
        $this->db->insert("contacts", $contact);
    }

    public function delete($id) {
        $this->db->where("id", $id);
        $this->db->delete("contacts");
    }

}
