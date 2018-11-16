<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_languages_table extends CI_Migration {
    
    public function up() {
		$this->dbforge->add_field(array(
			"id" => array(
				"type" => "INT",
				"auto_increment" => true
			),
			"prefix" => array(
				'type' => 'VARCHAR',
				'constraint' => '3'
			),
			"name" => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			)
		));
		$this->dbforge->add_key("id", true);
		$this->dbforge->create_table("languages");
	}

	public function down() {
		$this->dbforge->drop_table("languages");
	}

}