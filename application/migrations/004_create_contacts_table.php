<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_contacts_table extends CI_Migration {
    
    public function up() {
		$this->dbforge->add_field(array(
			"id" => array(
				"type" => "INT",
				"auto_increment" => true
			),
			"name" => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			"email" => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			"message" => array(
				'type' => 'TEXT'
			)
		));
		$this->dbforge->add_key("id", true);
		$this->dbforge->create_table("contacts");
	}

	public function down() {
		$this->dbforge->drop_table("contacts");
	}

}