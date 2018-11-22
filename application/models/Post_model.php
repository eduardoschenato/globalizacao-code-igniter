<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

    public function getAll() {
        return $this->db->get("posts")->result_array();
    }

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

    public function insert($post) {
        $this->db->insert("posts", $post);
    }

    public function update($post, $id) {
        $this->db->update("posts", $post, array("id" => $id));
    }

    public function delete($id) {
        $this->db->where("id", $id);
        $this->db->delete("posts");
    }

}
