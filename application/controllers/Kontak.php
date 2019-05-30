<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    function getKontak() {
    	$ch = curl_init();
    	curl_setopt($ch, CURLOPT_URL, "http://localhost/rest_ci/index.php/api/kontak/all");
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    	$parsed_json = curl_exec($ch); 
    	$parsed_json = json_decode($parsed_json); 
    	print_r($parsed_json);
    }
}