<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');
class Dashboard extends MX_Controller {
	function __construct() {
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
				//$this->session->unset_userdata('menu');
				//$this->session->set_userdata('menu', 'dashboard');

				$data['namamodule'] = "dashboard";
				$data['namafileview'] = "v-waka-dashboard";
				echo Modules::run('template/wakasis_template', $data);	
			} elseif($status == 2) {
				$data['namamodule'] = "dashboard";
				$data['namafileview'] = "v-guru-dashboard";
				echo Modules::run('template/guru_template', $data);	
			} elseif($status == 3) {
				$data['namamodule'] = "dashboard";
				$data['namafileview'] = "v-siswa-dashboard";
				echo Modules::run('template/siswa_template', $data);
			} elseif($status == 4) { 
				$data['namamodule'] = "dashboard";
				$data['namafileview'] = "v-ortu-dashboard";
				echo Modules::run('template/ortu_template', $data);
			} elseif($status == 5) {
				$data['namamodule'] = "dashboard";
				$data['namafileview'] = "v-admin-dashboard";
				echo Modules::run('template/admin_template', $data);
			} else {
				redirect('login');
			}
		}
	}
}