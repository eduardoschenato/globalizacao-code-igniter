<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function getByLoginAndPassword($login, $password) {
        $this->db->where("login", $login);
        $this->db->where("password", $password);
        return $this->db->get("users")->row_array();
    }

}
