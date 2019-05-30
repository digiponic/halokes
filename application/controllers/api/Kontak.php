<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Kontak extends REST_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("m_kontak");
    }

    function all_get() {
    	$db = $this->m_kontak->getKontak();

    	if($db) {
    		$this->response([
                'status' => TRUE,
                'data' => $db->result()
            ], REST_Controller::HTTP_OK);
    	} else {
    		$this->response([
    			'status' => FALSE,
    			'message' => "data tidak ditemukan"
    		], REST_Controller::HTTP_NOT_FOUND);
    	}
    }
}