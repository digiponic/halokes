<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');
class M_mapel extends CI_Model {
	public function __construct() {
		parent::__construct();
        $this->load->model("App_Model");
    }
    
    function getAllData($table="") {
        if($table == "") {
            $db = $this->db->query("SELECT * FROM mata_pelajaran");
        } else {
            $db = $this->db->query("SELECT * FROM $table");
        }
        
        return $db;
    }

    function insertMapel() {
        // Get Last ID Kelas
        $que_mapel = $this->db->query("SELECT MAX(id_mapel) AS lastid FROM mata_pelajaran")->row();
        if($que_mapel == null) {
            $idmapel = "MP001";
        } else {
            $id = str_replace("MP", "", $que_mapel->lastid) + 1;
            $idmapel = "MP".str_pad($id,3,"0",STR_PAD_LEFT);
        }

        $data = array(
            "id_mapel" => $idmapel,
            "nama_mapel" => $this->input->post("nama_mapel"),
            "created_at" => $this->App_Model->datetimeNow()
        );

        $this->db->insert("mata_pelajaran", $data);
    }
}