<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_posts_table extends CI_Migration {
    
    public function up() {
		$this->dbforge->add_field(array(
			"id" => array(
				"type" => "INT",
				"auto_increment" => true
			),
			"language_id" => array(
				"type" => "INT"
			),
			"title" => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			"subtitle" => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			"author" => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			"date" => array(
				'type' => 'DATE'
			),
			"text" => array(
				'type' => 'TEXT'
			)
		));
		$this->dbforge->add_key("id", true);
		$this->dbforge->create_table("posts");
	}

	public function down() {
		$this->dbforge->drop_table("posts");
	}

}