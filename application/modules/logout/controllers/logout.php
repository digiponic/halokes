<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');
class Logout extends MX_Controller {
	public function __construct() {
    parent::__construct();
		$this->load->model("App_Model");
    }

    function index() {
        $this->App_Model->destroy_session();
        redirect("login");
    }
}
?>