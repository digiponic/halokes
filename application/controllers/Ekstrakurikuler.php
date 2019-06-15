<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ekstrakurikuler extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view("template/kurikulum_header");
        $this->load->view("kurikulum/ekskul");
        $this->load->view("template/kurikulum_footer");
    }

    function detail() {
    	$this->load->view("template/kurikulum_header");
    	$this->load->view("kurikulum/ekskul_detail");
		$this->load->view("template/kurikulum_footer");
    }
}