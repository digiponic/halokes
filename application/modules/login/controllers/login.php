<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');
class Login extends MX_Controller {
	public function __construct() {
    parent::__construct();
		$this->load->model("App_Model");
	}

	function index() {
		$this->load->view('v_login');
	}

	function proses() {
		$this->load->model("M_login");

		$userid = $_POST['username'];
		$password = sha1($_POST['password']);

		if($userid == "" || $password == "") {
			redirect('login');
		} else {
			// validasi form
			$this->form_validation->set_rules('username', 'Userid', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->run();
			
			//  inisialisasi variabel
			$data['userid'] = '';
			$data['password'] = '';
			$data['status'] = '';

			// ambil record dari tabel user
			$result = $this->M_login->getUser($userid,$password);
			
			foreach ($result->result() as $row) {
				$data['userid'] = $row->email;
				$data['password'] = $row->password;
				$data['status'] = $row->status_user;
			}
			
			// bandingkan inputan form dengan record tabel
			if ($userid == $data['userid'] and $password == $data['password']) {
				$user = $data['userid'];
				$status = $data['status'];
				$stts = array(1,2,3,4,5);

				$this->App_Model->store_session($userid,$status); // simpan session userid
				$this->session->set_userdata("session_kode","");	

				if(in_array($data['status'], $stts)) {
					redirect('dashboard');
				} else {
					redirect('login');
				}
			} else {
	            //$this->session->set_flashdata('msg_error', 'gagal');
	            redirect('login');
			}
		}
	}
}