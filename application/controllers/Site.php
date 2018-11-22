<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function home($lang = "pt") {
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
		// require_once("gapi.class.php");
		// $ga = new gapi("globalizacaotrabalhots@gmail.com", "api-analytics-globalizacao-68b14d980084.p12");

		// $ga->requestReportData(185454076, "country", "visits");

		// foreach($ga->getResults() as $result)
		// {
		// echo '<strong>'.$result.'</strong><br />';
		// echo 'Visits: ' . $result->getVisits() . '<br />';
		// }

		// echo '<p>Total pageviews: ' . $ga->getPageviews() . ' total visits: ' . $ga->getVisits() . '</p>';
		// die;

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

	public function send($lang) {
		$this->load->library("email");
		$this->load->model("contact_model");

		$this->form_validation->set_rules("name", "Nome", "trim|required|min_length[5]");
		$this->form_validation->set_rules("email", "E-Mail", "required|valid_email");
		$this->form_validation->set_rules("message", "Mensagem", "trim|required|min_length[10]");
		$this->form_validation->set_error_delimiters("<li>", "</li>");

		$sucesso = $this->form_validation->run();

		if($sucesso) {
			$contact = array(
				"name" => $this->input->post("name"),
				"email" => $this->input->post("email"),
				"message" => $this->input->post("message")
			);

			$retorno = $this->contact_model->insert($contact);

			// E-Mail
			$config["protocol"] = "smtp";
			$config["smtp_host"] = "ssl://smtp.gmail.com";
			$config["smtp_user"] = "globalizacaotrabalhots@gmail.com";
			$config["smtp_pass"] = "ads2018IFRS";
			$config["charset"] = "utf-8";
			$config["mailtype"] = "html";
			$config["newline"] = "\r\n";
			$this->email->initialize();

			$dados = array(
				"nome" => $this->input->post("name"),
				"email" => $this->input->post("email"),
				"mensagem" => $this->input->post("message")
			);

			$conteudo = $this->load->view("email.php", $dados, true);

			$this->email->from("globalizacaotrabalhots@gmail.com", "Site Globalização");
			$this->email->to("globalizacaotrabalhots@gmail.com");
			$this->email->subject("Contato Site Globalização");
			$this->email->message($conteudo);
			$success = $this->email->send();

			$this->session->set_flashdata("success", "Mensagem enviada com sucesso!");
		} else {
			$this->session->set_flashdata("error", "Não foi possível enviar a mensagem: <br><ul>" . $this->form_validation->error_string() . "</ul>");
		}

		redirect($lang . "/contact");
	}

}
