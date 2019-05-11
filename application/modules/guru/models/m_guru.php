<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');
class M_guru extends CI_Model {
	public function __construct() {
		parent::__construct();
    }
    
    function getAllData($table="") {
        if($table == "") {
            $db = $this->db->query("SELECT * FROM guru");
        } else {
            $db = $this->db->query("SELECT * FROM $table");
        }
        
        return $db;
    }

    function getSelectedData($col, $val) {
        $db = $this->db->query("SELECT * FROM guru WHERE $col='$val'");
        return $db;
    }

    function getPiketGuru($hari) {
        $db = $this->db->query("SELECT g.nama_guru FROM jadwal_guru_piket j
                                JOIN guru g ON j.nip = g.nip
                                WHERE j.hari='$hari'");
        return $db;            
    }

    function insert($data, $table="") {
        if($table == "") {
            $db = $this->db->insert("guru", $data);
        } else {
            $db = $this->db->insert($table, $data);
        }

        if($db) {
            return true;
        } else {
            return false;
        }
    }

    function update($data, $table, $col, $val) {
        $db = $this->db->update($table, $data, array($col => $val));
        if($db) {
            return true;
        } else {
            return false;
        }
    }

    function delete($table,$col,$val) {
        $db = $this->db->delete($table, array($col => $val));

        if($db) {
            return true;
        } else {
            return false;
        }
    }
}
?>