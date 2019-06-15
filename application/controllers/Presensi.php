<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Presensi extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    function kbm() {
        $this->load->view("template/kurikulum_header");
        $this->load->view("kurikulum/presensi_kbm");
        $this->load->view("template/kurikulum_footer");
    }
}