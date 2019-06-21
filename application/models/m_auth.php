<?php
class m_auth extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function login($user,$pass) {
		if(empty($user) || empty($pass)) {
			$data['value'] = "";
			$data['status'] = FALSE;
		} else {
			$db = $this->db->query("SELECT tmg.id_guru_url AS id, tmg.guru_username AS username, tmg.guru_password AS password, '1' AS status 
									FROM tbl_master_guru tmg WHERE tmg.guru_username='$user' AND tmg.guru_password='$pass' 
									UNION
							  		SELECT tms.id_siswa_url AS id, tms.siswa_username AS username, tms.siswa_password AS password, '2' AS status 
							  		FROM tbl_master_siswa tms WHERE tms.siswa_username='$user' ANd tms.siswa_password='$pass'
							  		UNION
							  		SELECT tso.id_siswa_ortu_url AS id, tso.ortu_username AS username, tso.ortu_password AS password, '3' AS status 
							 		FROM tbl_siswa_ortu tso WHERE tso.ortu_username='$user' AND tso.ortu_password='$pass'");
			$res = $db->row();

			$user_db = $res->username;
			$pass_db = $res->password;
			$stts_db = $res->status;
			$id = $res->id;

			if($user == $user_db && $pass == $pass_db) {
				if($stts_db == 1) {
					$data['value'] = ["id_user" => $id, "username" => $user, "password" => $pass, "role" => "guru"];
					$data['status'] = TRUE;
				} else if($stts_db == 2) {
					$data['value'] = ["id_user" => $id, "username" => $user, "password" => $pass, "role" => "siswa"];
					$data['status'] = TRUE;
				} else if($stts_db == 3) {
					$data['value'] = ["id_user" => $id, "username" => $user, "password" => $pass, "role" => "ortu"];
					$data['status'] = TRUE;
				} else {
					$data['value'] = "";
					$data['status'] = FALSE;
				}
			} else {
				$data['value'] = "";
				$data['status'] = FALSE;
			}
		}

		return $data;
	}
}
?>