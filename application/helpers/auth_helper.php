<?php

function authorizate() {
    $ci = get_instance();

    $ci->load->helper("url");

    $user = $ci->session->userdata("user");
    
	if(!$user) {
		redirect("admin/index");
    }
    
	return $user;
}