<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');
class M_tasemester extends CI_Model {
	public function __construct() {
        parent::__construct();
        $this->load->model("App_Model");
    }
    
    function getAllData() {
        $db = $this->db->query("SELECT * FROM tahun_pelajaran");
        return $db;
    }

    function insertTAS() {
        $taw = $this->input->post("taw");
        $tak = $this->input->post("tak");
        $smt = $this->input->post("semester");

        if($smt == "ganjil") {
            $kodesmt = "GSL";
        } else if($smt == "genap") {
            $kodesmt = "GNP";
        } else {
            $kodesmt = "";
        }
        
        $nama = $taw."/".$tak." ".$kodesmt;
        $kode = str_replace("20","",$taw)."".str_replace("20","",$tak)."".$kodesmt;

        $data = array(
            "id_tapel" => $kode,
            "nama_tapel" => $nama,
            "semester" => $smt,
            "status" => 0,
            "created_at" => $this->App_Model->datetimeNow()
        );
        var_dump($data);
        $this->db->insert("tahun_pelajaran", $data);
    }

    function tapelAktif() {
        $idtapel = $this->input->post("tapel_smt");
        $data = array("status" => 1);
        $this->db->update("tahun_pelajaran", $data, array("id_tapel" => $idtapel));
    }

    function tapelNonaktif() {
        $data = array("status" => 0);
        $this->db->update("tahun_pelajaran", $data, array("status" => 1));
    }

    function anyoneIsActive() {
        $this->db->where("status",1);
        $db = $this->db->get("tahun_pelajaran");
        return $db;
    }
}
?>