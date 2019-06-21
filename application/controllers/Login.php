<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("m_session");
    }

    function index() {
        $this->load->view("login");
    }

    function auth() {
    	$data = [
    		'username' => $this->input->post('username'),
    		'password' => $this->input->post('password'),
    	];

    	$url = site_url().'/api/auth/login';

    	$ch = curl_init($url);
    	curl_setopt($ch, CURLOPT_POST, true);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	$response = curl_exec($ch);

    	curl_close($ch);

    	$res = json_decode($response);
    	$data = $res->data;

    	if($res->status == true) {
            $this->m_session->store_session($data->id_user, $data->role);
    		redirect("dashboard");
    	} else {
    		redirect("login");
    	}
    }
}