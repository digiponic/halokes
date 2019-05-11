<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');
class M_template extends CI_Model {
	public function __construct() {
		parent::__construct();
    }

    function getDataUser($id,$st) {
        if($st == 1 || $st == 2) {
            $db = $this->db->query("SELECT * FROM guru WHERE email='$id'");
        } else if($st == 3) {
            $db = $this->db->query("SELECT * FROM siswa WHERE email='$id'");
        } else if($st == 4) {
            $getNISN = $this->db->query("SELECT nisn FROM orang_tua WHERE username='$id'")->row();
            $nisn = $getNISN->nisn;

            $db = $this->db->query("SELECT * FROM siswa WHERE nisn='$nisn'");
        }

        return $db->row();
    }

    function tasmtIsActive() {
        $this->db->where("status",1);
        $db = $this->db->get("tahun_pelajaran");
        return $db;
    }
}
?>