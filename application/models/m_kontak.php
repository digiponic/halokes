<?php
class m_kontak extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function getKontak($param = "") {
		$this->db->select("*");

		if($param != "") {	
			$this->db->where("id_kontak", $param);
		}
		
		$db = $this->db->get("kontak");
		return $db;
	}
}
?>