<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_users_table extends CI_Migration {
    
    public function up() {
		$this->dbforge->add_field(array(
			"id" => array(
				"type" => "INT",
				"auto_increment" => true
			),
			"login" => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			"password" => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			)
		));
		$this->dbforge->add_key("id", true);
		$this->dbforge->create_table("users");
	}

	public function down() {
		$this->dbforge->drop_table("users");
	}

}