<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');
class Siswa extends MX_Controller {
	function __construct() {
    	parent::__construct();
		$this->load->model("App_Model");
		$this->load->model("M_siswa");
	}

	function data() {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 1) {
				$data['siswa'] = $this->M_siswa->getAllData();
				$data['namamodule'] = "siswa";
				$data['namafileview'] = "v-waka-siswa";
				echo Modules::run('template/wakasis_template', $data);	
			} else {
				redirect('login');
			}
		}
	}

	function ringkasan() {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 3) {
				$data['namamodule'] = "siswa";
				$data['namafileview'] = "v-siswa-ringkasan";
				echo Modules::run('template/siswa_template', $data);	
			} else {
				redirect('login');
			}
		}
	}

	function kehadiran() {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 3) {
				$data['namamodule'] = "siswa";
				$data['namafileview'] = "v-siswa-kehadiran";
				echo Modules::run('template/siswa_template', $data);	
			} else {
				redirect('login');
			}
		}
	}

	function rapor() {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 3) {
				$data['namamodule'] = "siswa";
				$data['namafileview'] = "v-siswa-rapor";
				echo Modules::run('template/siswa_template', $data);	
			} else {
				redirect('login');
			}
		}
	}

	function pengumuman() {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 3) {
				$data['namamodule'] = "siswa";
				$data['namafileview'] = "v-siswa-pengumuman";
				echo Modules::run('template/siswa_template', $data);	
			} else {
				redirect('login');
			}
		}
	}
	
	function mutasi() {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 1) {
				$data['siswa'] = $this->M_siswa->getSelectedData("status_siswa","4");
				$data['namamodule'] = "siswa";
				$data['namafileview'] = "v-waka-siswa-mutasi";
				echo Modules::run('template/wakasis_template', $data);	
			} else {
				redirect('login');
			}
		}
	}

	function atur_sanksi() {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 1) {
				$data['sanksi'] = $this->M_siswa->getAllData("sanksi");
				$data['lastid'] = $this->M_siswa->getLastRecSanksi();
				$data['namamodule'] = "siswa";
				$data['namafileview'] = "v-waka-siswa-sanksi";
				echo Modules::run('template/wakasis_template', $data);	
			} else {
				redirect('login');
			}
		}
	}

	function detail($val) {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 1) {
				$data['siswa'] = $this->M_siswa->getSelectedData("nisn",$val);
				$data['namamodule'] = "siswa";
				$data['namafileview'] = "v-waka-siswa-detail";
				echo Modules::run('template/wakasis_template', $data);	
			} else {
				redirect('login');
			}
		}
	}

	function akademik($val) {
		$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 1) {
				$data['siswa'] = $this->M_siswa->getSelectedData("nisn",$val);
				$data['namamodule'] = "siswa";
				$data['namafileview'] = "v-waka-siswa-dakademik";
				echo Modules::run('template/wakasis_template', $data);	
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
			if($status == 1) {
				$data['siswa'] = $this->M_siswa->getSelectedData("nisn",$val);
				$data['namamodule'] = "siswa";
				$data['namafileview'] = "v-waka-siswa-dsanksi";
				echo Modules::run('template/wakasis_template', $data);	
			} else {
				redirect('login');
			}
		}
	}

	function tambah_siswa() {
		date_default_timezone_set("Asia/Jakarta");
		$date = date("Y-m-d H:i:s");
		$tgl_lahir = date("Y-m-d", strtotime($this->input->post('tgllahir')));

		$data = array(
			"nisn" => $this->input->post('nisn'),
			"nis" => $this->input->post('nis'),
			"nama_siswa" => $this->input->post('nama'),
			"tgl_lahir" => $tgl_lahir,
			"tempat_lahir" => $this->input->post('tempat_lahir'),
			"alamat" => $this->input->post('alamat'),
			"jkel" => $this->input->post('jkel'),
			"no_hp" => $this->input->post('nohp'),
			"email" => $this->input->post('email'),
			"agama" => $this->input->post('agama'),
			"tahun_masuk" => $this->input->post('tahun'),
			"nama_ayah" => NULL,
			"no_hp_ayah" => NULL,
			"nama_ibu" => NULL,
			"no_hp_ibu" => NULL,
			"nama_wali" => NULL,
			"no_hp_wali" => NULL,
			"status_siswa" => $this->input->post('stts_sw'),
			"status_user" => 3,
			"password" => sha1('password'),
			"created_at" => $date
		);

		$this->M_siswa->insert($data);
		redirect("siswa/data");
	}
	
	function tambah_mutasi() {
		date_default_timezone_set("Asia/Jakarta");
		$date = date("Y-m-d H:i:s");
		if($this->input->post('nisn') != NULL) {
			$nisn = $this->input->post('nisn');
			$data = array(
				"status_siswa" => 4,
				"alasan_mutasi" => $this->input->post('alasan'),
				"modified_at" => $date
			);

			$this->M_siswa->update("siswa", $data, "nisn", $nisn);
		} else {
			if($this->input->post('nama') != NULL) {
				$nama = $this->input->post('nama');
				$data = array(
					"status_siswa" => 4,
					"alasan_mutasi" => $this->input->post('alasan'),
					"modified_at" => $date
				);
	
				$this->M_siswa->update("siswa", $data, "nama_siswa", $nama);
			}
		}

		redirect("siswa/mutasi");
	}

	function tambah_sanksi() {
		$data = array(
			"id_sanksi" => "SNK-".$this->input->post("no"),
			"nama_sanksi" => $this->input->post("bentuk"),
			"jenis_sanksi" => $this->input->post("jenis"),
			"poin" => $this->input->post("poin")
		);

		$this->M_siswa->insert($data, "sanksi");
		redirect("siswa/atur_sanksi");
	}

	function hapus_sanksi($id) {
		$this->M_siswa->delete("sanksi","id_sanksi",$id);
		redirect("siswa/atur_sanksi");
	}
}