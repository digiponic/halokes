<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');
class Ortu extends MX_Controller {
	function __construct() {
    	parent::__construct();
		$this->load->model("App_Model");
		$this->load->model("M_ortu");
	}
	

	function akademik($val) {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 4) {
				$data['siswa'] = $this->M_ortu->getSelectedData("nisn",$val);
				$data['namamodule'] = "ortu";
				$data['namafileview'] = "v-ortu-siswa-dakademik";
				echo Modules::run('template/ortu_template', $data);	
			} else {
				redirect('login');
			}
		}
	}

	function kehadiran($val) {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 4) {
				$data['siswa'] = $this->M_ortu->getSelectedData("nisn",$val);
				$data['namamodule'] = "ortu";
				$data['namafileview'] = "v-ortu-siswa-kehadiran";
				echo Modules::run('template/ortu_template', $data);	
			} else {
				redirect('login');
			}
		}
	}
	function sanksi($val) {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 4) {
				$data['siswa'] = $this->M_ortu->getSelectedData("nisn",$val);
				$data['namamodule'] = "ortu";
				$data['namafileview'] = "v-ortu-siswa-dsanksi";
				echo Modules::run('template/ortu_template', $data);	
			} else {
				redirect('login');
			}
		}
	}

	function rapor($val) {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 4) {
				$data['siswa'] = $this->M_ortu->getSelectedData("nisn",$val);
				$data['namamodule'] = "ortu";
				$data['namafileview'] = "v-ortu-siswa-rapor";
				echo Modules::run('template/ortu_template', $data);	
			} else {
				redirect('login');
			}
		}
	}

	function pengumuman($val) {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 4) {
				$data['siswa'] = $this->M_ortu->getSelectedData("nisn",$val);
				$data['namamodule'] = "ortu";
				$data['namafileview'] = "v-ortu-siswa-pengumuman";
				echo Modules::run('template/ortu_template', $data);	
			} else {
				redirect('login');
			}
		}
	}

	function prestasi_internal($val) {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 4) {
				$data['siswa'] = $this->M_ortu->getSelectedData("nisn",$val);
				$data['namamodule'] = "ortu";
				$data['namafileview'] = "v-ortu-siswa-prestasi_internal";
				echo Modules::run('template/ortu_template', $data);	
			} else {
				redirect('login');
			}
		}
	}

	function prestasi_external($val) {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 4) {
				$data['siswa'] = $this->M_ortu->getSelectedData("nisn",$val);
				$data['namamodule'] = "ortu";
				$data['namafileview'] = "v-ortu-siswa-prestasi_external";
				echo Modules::run('template/ortu_template', $data);	
			} else {
				redirect('login');
			}
		}
	}

}