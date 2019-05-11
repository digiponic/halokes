<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');
class Kelas extends MX_Controller {
	public function __construct() {
    parent::__construct();
        $this->load->model("App_Model");
        $this->load->model("M_kelas");        
    }

    function data() {
        $session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 1) {
				$data['kelas'] = $this->M_kelas->getKelas();
				$data['kelas7'] = $this->M_kelas->getSelectedData("kelas","tingkat",7);
				$data['kelas8'] = $this->M_kelas->getSelectedData("kelas","tingkat",8);
				$data['kelas9'] = $this->M_kelas->getSelectedData("kelas","tingkat",9);
				$data['tapel'] = $this->M_kelas->getAllData("tahun_pelajaran");
				$data['namamodule'] = "kelas";
				$data['namafileview'] = "v-waka-kelas";
				echo Modules::run('template/wakasis_template', $data);	
			} else {
				redirect('login');
			}
		}
    }
    
    function detail() {

    }

    function tambah_kelas() {
    	$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 1) {
				$this->M_kelas->insertKelas();

				redirect("kelas/data");	
			} else {
				redirect('login');
			}
		}
    }
}
?>