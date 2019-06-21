<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Auth extends REST_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("m_auth");
    }

    function login_post() {
        $user = $this->post('username');
        $pass = sha1($this->post('password'));

        $proc = $this->m_auth->login($user,$pass);

    	if($proc['status'] == TRUE) {
    		$this->response([
                'data' => $proc['value'],
                'status' => TRUE
            ], REST_Controller::HTTP_OK);
    	} else {
    		$this->response([
                'message' => "Proses gagal",
    			'status' => FALSE
        	], REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
    	}
    }
}