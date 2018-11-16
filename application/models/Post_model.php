<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

    public function getByLanguage($language_id) {
        return $this->db->get_where("posts", array(
            "language_id" => $language_id
        ))->result_array();
    }

    public function getById($id) {
        return $this->db->get_where("posts", array(
            "id" => $id
        ))->row_array();
    }

}
