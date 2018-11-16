<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function home($lang) {
		$this->load->helper('url');
		$this->load->helper('lang');
		$this->load->helper('date');

		$this->load->model("language_model");
		$this->load->model("post_model");

		$languages = $this->language_model->getAll();

		foreach($languages as $language) {
			if($language["prefix"] == $lang) {
				$language_id = $language["id"];
			}
		}
		
		$posts = $this->post_model->getByLanguage($language_id);

		$dados = array(
			"lang" => $lang,
			"languages" => $languages,
			"posts" => $posts
		);

		$dados += getMenuStaticData($lang);
		$dados += getHomeStaticData($lang);

		$this->load->view('home', $dados);
	}
	
	public function about($lang) {
		$this->load->helper('url');
		$this->load->helper('lang');

		$this->load->model("language_model");
		$languages = $this->language_model->getAll();

		$dados = array(
			"lang" => $lang,
			"languages" => $languages,
		);

		$dados += getMenuStaticData($lang);
		$dados += getAboutStaticData($lang);

		$this->load->view('about', $dados);
	}

	public function map($lang) {
		$this->load->helper('url');
		$this->load->helper('lang');

		$this->load->model("language_model");
		$languages = $this->language_model->getAll();

		$dados = array(
			"lang" => $lang,
			"languages" => $languages,
		);

		$dados += getMenuStaticData($lang);
		$dados += getMapStaticData($lang);

		$this->load->view('map', $dados);
	}

	public function references($lang) {
		$this->load->helper('url');
		$this->load->helper('lang');

		$this->load->model("language_model");
		$languages = $this->language_model->getAll();

		$dados = array(
			"lang" => $lang,
			"languages" => $languages,
		);

		$dados += getMenuStaticData($lang);
		$dados += getReferencesStaticData($lang);

		$this->load->view('references', $dados);
	}

	public function contact($lang) {
		$this->load->helper('url');
		$this->load->helper('lang');

		$this->load->model("language_model");
		$languages = $this->language_model->getAll();

		$dados = array(
			"lang" => $lang,
			"languages" => $languages,
		);

		$dados += getMenuStaticData($lang);
		$dados += getContactStaticData($lang);

		$this->load->view('contact', $dados);
	}

	public function post($lang, $id) {
		$this->load->helper('url');
		$this->load->helper('lang');
		$this->load->helper('date');

		$this->load->model("language_model");
		$this->load->model("post_model");
		
		$languages = $this->language_model->getAll();
		$post = $this->post_model->getById($id);

		$dados = array(
			"lang" => $lang,
			"languages" => $languages,
			"post" => $post
		);

		$dados += getMenuStaticData($lang);

		$this->load->view('post', $dados);
	}

}
