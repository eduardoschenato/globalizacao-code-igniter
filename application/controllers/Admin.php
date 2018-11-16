<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$this->load->view('admin/login');
	}

	public function home() {
		$this->load->helper('url');
		$this->load->view('admin/home');
	}

	public function list($lang = "") {
		$this->load->helper('url');
		$this->load->helper('date');

		$this->load->model("language_model");
		$this->load->model("post_model");

		$languages = $this->language_model->getAll();

		if($lang == "") {
			$posts = $this->post_model->getAll();
		} else {
			foreach($languages as $language) {
				if($language["prefix"] == $lang) {
					$language_id = $language["id"];
				}
			}

			$posts = $this->post_model->getByLanguage($language_id);
		}

		$dados = array(
			"languages" => $languages,
			"posts" => $posts,
			"lang" => $lang
		);

		$this->load->view('admin/list', $dados);
	}

	public function form() {
		$this->load->helper('url');

		$this->load->model("language_model");

		$languages = $this->language_model->getAll();

		$dados = array(
			"languages" => $languages
		);

		$this->load->view('admin/form', $dados);
	}

}
