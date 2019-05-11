<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');
class Mapel extends MX_Controller {
	public function __construct() {
    parent::__construct();
        $this->load->model("App_Model");
        $this->load->model("M_mapel");        
    }

    function data() {
        $session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 1) {
				$data['mapel'] = $this->M_mapel->getAllData();
				$data['numMapel'] = $this->M_mapel->getAllData()->num_rows();
				$data['namamodule'] = "mapel";
				$data['namafileview'] = "v-waka-mapel";
				echo Modules::run('template/wakasis_template', $data);	
			} else {
				redirect('login');
			}
		}
    }

    function tambah_mapel() {
    	$session = $this->App_Model->get_session();
		if (!$session['session_userid'] && !$session['session_status']){
			redirect('login');
		} else {
			$id_user = $session['session_userid'];
			$status = $session['session_status'];
			if($status == 1) {
				$this->M_mapel->insertMapel();	
				redirect('mapel/data');
			} else {
				redirect('login');
			}
		}
    }
}