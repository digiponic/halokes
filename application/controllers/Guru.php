<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    function pengajar() {
        $this->load->view("template/kurikulum_header");
        $this->load->view("kurikulum/guru_pengajar");
        $this->load->view("template/kurikulum_footer");
    }

    function silabus() {}

    function promes() {}
}