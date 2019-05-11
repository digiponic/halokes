<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');
class M_kelas extends CI_Model {
	public function __construct() {
		parent::__construct();
        $this->load->model("App_Model");
    }
    
    function getAllData($table="") {
        if($table == "") {
            $db = $this->db->query("SELECT * FROM kelas");
        } else {
            $db = $this->db->query("SELECT * FROM $table");
        }
        
        return $db;
    }

    function getSelectedData($table, $col, $val) {
        $this->db->where($col,$val);
        $db = $this->db->get($table);
        return $db;
    }

    function getKelas() {
        // ambil tapel aktif
        $que_tapel = $this->db->query("SELECT id_tapel FROM tahun_pelajaran WHERE status=1")->row();

        if($que_tapel == NULL) {
            return false;
        } else {
            $idtapel = $que_tapel->id_tapel;
            $que_rkelas = $this->db->query("SELECT k.nama_kelas, k.ruang, k.tingkat, g.nama_guru FROM riwayat_kelas rk
                                            JOIN kelas k ON rk.id_kelas = k.id_kelas
                                            JOIN guru g ON rk.wali_kelas = g.nip
                                            WHERE rk.id_tapel='$idtapel'");
            return $que_rkelas;            
        }
    }

    function insertKelas() {
        $tingkat = $this->input->post("tingkat");
        $abjad = strtoupper($this->input->post("abjad"));
        
        if($tingkat == 7) {
            $romw = "VII";
        } else if($tingkat == 8) {
            $romw = "VIII";
        } else if($tingkat == 9) {
            $romw = "IX";
        }

        $nama = $romw." ".$abjad;
        
        // Get Last ID Kelas
        $que_kelas = $this->db->query("SELECT MAX(id_kelas) AS lastid FROM kelas")->row();
        if($que_kelas == null) {
            $idkelas = "KL001";
        } else {
            $id = str_replace("KL", "", $que_kelas->lastid) + 1;
            $idkelas = "KL".str_pad($id,3,"0",STR_PAD_LEFT);
        }

        $data = array(
            "id_kelas" => $idkelas,
            "nama_kelas" => $nama,
            "tingkat" => $tingkat,
            "abjad" => $abjad,
            "ruang" => $this->input->post("ruang"),
            "created_at" => $this->App_Model->datetimeNow()
        );

        var_dump($data);
        $this->db->insert("kelas", $data);
    }
}
?>