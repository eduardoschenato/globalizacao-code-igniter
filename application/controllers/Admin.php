<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index() {
		$this->load->view('admin/login');
	}

	public function home() {
		authorizate();
		$this->load->view('admin/home');
	}

	public function posts($lang = "") {
		authorizate();

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

	public function form($id = 0) {
		authorizate();

		$this->load->model("language_model");

		$languages = $this->language_model->getAll();

		if($id != 0) {
			$this->load->model("post_model");
			$post = $this->post_model->getById($id);
		} else {
			$post = null;
		}

		$dados = array(
			"languages" => $languages,
			"post" => $post
		);

		$this->load->view('admin/form', $dados);
	}

	public function save() {
		authorizate();

		$this->load->model("post_model");

		$this->form_validation->set_rules("author", "Autor", "trim|required|min_length[5]");
		$this->form_validation->set_rules("date", "Data", "required");
		$this->form_validation->set_rules("title", "Título", "trim|required|min_length[5]");
		$this->form_validation->set_rules("subtitle", "Subtítulo", "trim|required|min_length[5]");
		$this->form_validation->set_rules("text", "Texto", "trim|required|min_length[10]");
		$this->form_validation->set_error_delimiters("<li>", "</li>");

		$sucesso = $this->form_validation->run();

		if($sucesso) {
			$post = array(
				"language_id" => $this->input->post("language_id"),
				"author" => $this->input->post("author"),
				"date" => getDateDatabaseFormat($this->input->post("date")),
				"title" => $this->input->post("title"),
				"subtitle" => $this->input->post("subtitle"),
				"text" => $this->input->post("text")
			);

			if($this->input->post("id") == 0) {
				$retorno = $this->post_model->insert($post);
				$this->session->set_flashdata("success", "Inserido com sucesso!");
			} else {
				$retorno = $this->post_model->update($post, $this->input->post("id"));
				$this->session->set_flashdata("success", "Alterado com sucesso!");
			}

			redirect("admin/posts");
		} else {
			$this->session->set_flashdata("error", "Não foi possível salvar o registro: <br><ul>" . $this->form_validation->error_string() . "</ul>");
			redirect("admin/form");
		}
	}

	public function remove($id) {
		authorizate();

		$this->load->model("post_model");

		$retorno = $this->post_model->delete($id);
		
		$this->session->set_flashdata("success", "Removido com sucesso!");

		redirect("admin/posts");
	}

	public function login() {
		$this->load->model("user_model");
		
		$user = $this->user_model->getByLoginAndPassword($this->input->post("login"), md5($this->input->post("password")));
		
		if($user) {
			$this->session->set_userdata("user", $user);	
			redirect("admin/posts");
		} else {
			redirect("admin/index");	
		}
	}

	public function logout() {
		$this->session->unset_userdata("user");
		$this->session->set_flashdata("success", "Deslogado com sucesso!");
		redirect("admin/index");
	}

}
