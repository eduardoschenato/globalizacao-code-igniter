<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language_model extends CI_Model {

    public function getAll() {
        return $this->db->get("languages")->result_array();
    }

}
