<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');
class Ta_semester extends MX_Controller {
	public function __construct() {
    parent::__construct();
        $this->load->model("App_Model");
        $this->load->model("M_tasemester");        
    }

    function data() {
        $session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 1) {
				$data['tasmt'] = $this->M_tasemester->getAllData();
				$data['tasmt_active'] = $this->M_tasemester->anyoneIsActive();
				$data['namamodule'] = "ta_semester";
				$data['namafileview'] = "v-waka-tasmt";
				echo Modules::run('template/wakasis_template', $data);	
			} else {
				redirect('login');
			}
		}
	}

	function detail() {

	}
	
	function tambah_tas() {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 1) {
				$this->M_tasemester->insertTAS();
				redirect("ta_semester/data");
			} else {
				redirect('login');
			}
		}
	}

	function aktifkanTapel() {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 1) {
				$this->M_tasemester->tapelAktif();
				redirect("ta_semester/data");
			} else {
				redirect('login');
			}
		}
	}

	function nonaktifkanTapel() {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 1) {
				$this->M_tasemester->tapelNonaktif();
				redirect("ta_semester/data");
			} else {
				redirect('login');
			}
		}
	}
}
?>