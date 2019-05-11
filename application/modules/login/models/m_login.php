<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');
class M_login extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	public function getUser($u,$p) {
		$sql = $this->db->query("
			SELECT g.email, g.password, g.status_user FROM guru g WHERE g.email='$u' AND g.password='$p' UNION
			SELECT s.email, s.password, s.status_user FROM siswa s WHERE s.email='$u' AND s.password='$p' UNION
			SELECT o.username, o.password, o.status_user FROM orang_tua o WHERE o.username='$u' AND o.password='$p'");

		return $sql;
	}
}
?>