<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');
class M_ortu extends CI_Model {
	public function __construct() {
		parent::__construct();
    }
    
    function getAllData($table="") {
        if($table == "") {
            $db = $this->db->query("SELECT * FROM siswa");
        } else {
            $db = $this->db->query("SELECT * FROM $table");
        }
        
        return $db;
    }

    function getSelectedData($col, $val) {
        $db = $this->db->query("SELECT * FROM siswa WHERE $col='$val'");
        return $db;
    }

    function getLastRecSanksi() {
        $db = $this->db->query("SELECT id_sanksi FROM sanksi ORDER BY id_sanksi DESC LIMIT 1");
        $num = $db->num_rows();

        if($num == 0) {
            $out = "001";
        } else {
            $res = $db->row();
            $lastRec = $res->id_sanksi;
            $lr = str_replace("SNK-","",$lastRec) + 1;
            $out = str_pad($lr,3,"0",STR_PAD_LEFT);
        }
        
        return $out;
    }

    function insert($data, $table="") {
        if($table == "") {
            $db = $this->db->insert("siswa", $data);
        } else {
            $db = $this->db->insert($table, $data);
        }

        ($db) ? $out=true : $out=false;
        return $out;
    }

    function update($table, $data, $col, $val) {
        $db = $this->db->update($table, $data, array($col => $val));
        ($db) ? $out=true : $out=false;
        return $out;
    }

    function delete($table="",$col="",$val) {
        if($table == "") {
            $db = $this->db->delete("siswa", array("nisn" => $val));
        } else {
            $db = $this->db->delete($table, array($col => $val));
        }

        ($db) ? $out=true : $out=false;
        return $out;
    }
}
?>