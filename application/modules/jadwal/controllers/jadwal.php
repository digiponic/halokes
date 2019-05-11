<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');
class Jadwal extends MX_Controller {
	public function __construct() {
    parent::__construct();
        $this->load->model("App_Model");
    }

    function index() {
        $session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 1) {
				$data['namamodule'] = "jadwal";
				$data['namafileview'] = "v-waka-jadwal";
				echo Modules::run('template/wakasis_template', $data);	
			} else {
				redirect('login');
			}
		}
    }

    function atur_jadwal() {
    	$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 1) {
				$data['namamodule'] = "jadwal";
				$data['namafileview'] = "v-waka-atur-jadwal";
				echo Modules::run('template/wakasis_template', $data);	
			} else {
				redirect('login');
			}
		}
    }
}
?>