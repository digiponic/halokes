<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');
class Guru extends MX_Controller {
	function __construct() {
    	parent::__construct();
		$this->load->model("App_Model");
		$this->load->model("M_guru");
    }

    function data() {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 1) {
                $data['guru'] = $this->M_guru->getAllData();
				$data['namamodule'] = "guru";
				$data['namafileview'] = "v-waka-guru";
				echo Modules::run('template/wakasis_template', $data);	
			} else {
				redirect('login');
			}
		}
	}

	function profil() {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 2) {
				$data['namamodule'] = "guru";
				$data['namafileview'] = "v-guru-profil";
				echo Modules::run('template/guru_template', $data);	
			} else {
				redirect('login');
			}
		}
	}

	function jadwal() {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 2) {
				$data['namamodule'] = "guru";
				$data['namafileview'] = "v-guru-jadwal";
				echo Modules::run('template/guru_template', $data);	
			} else {
				redirect('login');
			}
		}
	}

	function guru_piket() {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 1) {
				$data['gpiket'] = $this->M_guru->getSelectedData("status_guru_tugas",1);
				$data['hr_senin'] = $this->M_guru->getPiketGuru("senin");
				$data['hr_selasa'] = $this->M_guru->getPiketGuru("selasa");
				$data['hr_rabu'] = $this->M_guru->getPiketGuru("rabu");
				$data['hr_kamis'] = $this->M_guru->getPiketGuru("kamis");
				$data['hr_jumat'] = $this->M_guru->getPiketGuru("jumat");
				$data['hr_sabtu'] = $this->M_guru->getPiketGuru("sabtu");
 				$data['namamodule'] = "guru";
				$data['namafileview'] = "v-waka-guru-piket";
				echo Modules::run('template/wakasis_template', $data);	
			} else if($status == 2) {
				$data['namamodule'] = "guru";
				$data['namafileview'] = "v-guru-piket";
				echo Modules::run('template/guru_template', $data);	
			} else {
				redirect('login');
			}
		}
	}

	function wakel() {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 2) {
				$data['namamodule'] = "guru";
				$data['namafileview'] = "v-guru-wakel";
				echo Modules::run('template/guru_template', $data);	
			} else {
				redirect('login');
			}
		}
	}

	function tambah_guru() {
		date_default_timezone_set("Asia/Jakarta");
		$date = date("Y-m-d H:i:s"); // set created_at
		$tgl_lahir = date("Y-m-d", strtotime($this->input->post('tgllahir'))); // set format tgl_lahir
		
		($this->input->post('tdk_golongan') != NULL) ? $gol = NULL : $gol = $this->input->post("golongan"); // set golongan
		($this->input->post('gelar_dpn') != NULL) ? $gldpn = $this->input->post("gelar_dpn") : $gldpn = NULL; // set gelar_depan
		($this->input->post('gelar_belakang') != NULL) ? $glblkg = $this->input->post("gelar_belakang") : $glblkg = NULL; // set gelar_belakang

		$data = array(
			"nip" => $this->input->post("nip"),
			"nama_guru" => $this->input->post("nama"),
			"gelar_depan" => $gldpn,
			"gelar_belakang" => $glblkg,
			"tgl_lahir" => $tgl_lahir,
			"tempat_lahir" => $this->input->post("tempat_lahir"),
			"alamat" => $this->input->post("alamat"),
			"jkel" => $this->input->post("jkel"),
			"no_hp" => $this->input->post("nohp"),
			"email" => $this->input->post("email"),
			"agama" => $this->input->post("agama"),
			"golongan" => $gol,
			"status_guru" => $this->input->post("stts_gr"),
			"status_guru_tugas" => 0,
			"status_user" => 2,
			"password" => sha1("password"),
			"created_at" => $date
		);

		$this->M_guru->insert($data,"guru");
		redirect("guru/data");
	}

	function hapus_guru($nip) {
		$this->M_guru->delete("guru","nip",$nip);
		redirect("guru/data");
	}

	function tugas_piket() {
		$nip = $this->input->post("nip");
		$data = array("status_guru_tugas" => 1);
		$this->M_guru->update($data,"guru","nip",$nip);

		$data_hari = array(
			"id_jdgrpiket" => "",
			"nip" => $nip,
			"hari" => $this->input->post("hari")
		);
		$this->M_guru->insert($data_hari,"jadwal_guru_piket");

		//redirect("guru/guru_piket");
	}
}
?>