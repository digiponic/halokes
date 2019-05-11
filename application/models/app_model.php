<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App_Model extends CI_Model {

	/**
	 * @author : Bima Indra
	 * @web : All
	 * @keterangan : Model pusat untuk menangani sebuah website
	 **/

	// CRUD Data

		public function manualQuery($query) {
			return $this->db->query($query);
		}

		public function getAllData($table) {
			return $this->db->get($table);
		}

		public function getAllDataLimited($table,$offset,$limit) {
			return $this->db->get($table, $offset, $limit);
		}

		public function getSelectedData($table,$column,$data) {
			return $this->db->get_where($table, array($column => $data));
		}

		function getLastID($name_id,$table) {
			$query =  $this->db->query("SELECT MAX($name_id)+1 AS newid FROM $table");
			foreach($query->result() as $row) {
				$idid = $row->newid;
			}

			return $idid;
		}

		function insertData($table,$data) {
			return $this->db->insert($table, $data);
		}

		function updateAllData($table,$column,$data) {
			return $this->db->update($table, array($column => $data));
		}

		function updateData($table,$data,$field_key) {
			return $this->db->update($table, $data, $field_key);
		}

		function deleteAllData($table) {
			return $this->db->delete($table);
		}

		function deleteData($table,$column,$data) {
			return $this->db->delete($table, array($column => $data));
		}

	// Upload Data

		function saveImage($url,$name) {
			date_default_timezone_set("Asia/Jakarta");
			if($url == NULL || $url == "") {
				$confUrl = "./assets/images/";
			} else {
				$confUrl = $url;
			}

			$config['upload_path'] = $confUrl;
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['file_name'] = date("dmYhis");
			$config['max_size']	= '100000000';
		    $this->load->library('upload', $config);
		    $this->upload->do_upload($name);
		    $data = $this->upload->data();
		}

		function saveImageMultiple($url,$name,$much) {
			date_default_timezone_set("Asia/Jakarta");
			if($url == NULL || $url == "") {
				$confUrl = "./assets/images/";
			} else {
				$confUrl = $url;
			}
			$config['upload_path'] = $confUrl;
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size']	= '100000000';
			$files = $_FILES;

			for($i=0; $i < $much; $i++) {
				$this->load->library('upload', $config);
				$_FILES[$name]['name'] = $files[$name]['name'][$i];

			    $this->upload->do_upload($name);
                $data = $this->upload->data();
			}
		}

		function saveDocument($url, $name, $type) {
			date_default_timezone_set("Asia/Jakarta");
			$config['upload_path'] = $url;
			$config['allowed_types'] = $type;
			$config['file_name'] = date("dmYhis");
			$config['max_size']	= '100000000';
		    $this->load->library('upload', $config);
		    $this->upload->do_upload($name);
		    $data = $this->upload->data();
		}

	// Kalender

		public function datetimeNow() {
			date_default_timezone_set("Asia/Jakarta");
			$datetime = date("Y-m-d H:i:s");
			return $datetime;
		}

		public function dateNow() {
			date_default_timezone_set("Asia/Jakarta");
			$date = date("Y-m-d");
			return $date;
		}

		public function timeNow() {
			date_default_timezone_set("Asia/Jakarta");
			$time = date("H:i:s");
			return $time;
		}

		public function dayIndo() {
			date_default_timezone_set("Asia/Jakarta");
			$mgg = array("Minggu","Senin","Selasa","Rabu","Kamis","Jum\'at","Sabtu");
			$day = date("w");
			$dayNow = $mgg[$day];
			return $dayNow;
		}

		public function monthIndo() {
			date_default_timezone_set("Asia/Jakarta");
			$bln = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
			$mnth = date("n"); 
			$monthNow = $bln[$mnth];
			return $monthNow;
		}

		public function dateIndo() {
			date_default_timezone_set("Asia/Jakarta");
			$hari = $this->dayIndo();
			$tggl = date("d");
			$buln = $this->monthIndo();
			$thun = date("Y");
			return $hari.", ".$tggl." ".$buln." ".$thun;
		}

	// Get IP, Browser, and OS

		function ip_user() {
		  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		    $ip = $_SERVER['HTTP_CLIENT_IP'];
		  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		  } else {
		    $ip = $_SERVER['REMOTE_ADDR'];
		  }
		 
		  return $ip;
		}

		function browser_user() {
			$browser = $this->App_Model->_userAgent();
			return $browser['name'] . ' v.'.$browser['version'];
		}

		function _userAgent() {
		  	$u_agent = $_SERVER['HTTP_USER_AGENT']; 
		    $bname = 'Unknown';
		    $platform = 'Unknown';
		    $version = "";
 
  			$os_array = array(
                        '/windows nt 6.2/i'     =>  'Windows 8',
                        '/windows nt 6.1/i'     =>  'Windows 7',
                        '/windows nt 6.0/i'     =>  'Windows Vista',
                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                        '/windows nt 5.1/i'     =>  'Windows XP',
                        '/windows xp/i'         =>  'Windows XP',
                        '/windows nt 5.0/i'     =>  'Windows 2000',
                        '/windows me/i'         =>  'Windows ME',
                        '/win98/i'              =>  'Windows 98',
                        '/win95/i'              =>  'Windows 95',
                        '/win16/i'              =>  'Windows 3.11',
                        '/macintosh|mac os x/i' =>  'Mac OS X',
                        '/mac_powerpc/i'        =>  'Mac OS 9',
                        '/linux/i'              =>  'Linux',
                        '/ubuntu/i'             =>  'Ubuntu',
                        '/iphone/i'             =>  'iPhone',
                        '/ipod/i'               =>  'iPod',
                        '/ipad/i'               =>  'iPad',
                        '/android/i'            =>  'Android',
                        '/blackberry/i'         =>  'BlackBerry',
                        '/webos/i'              =>  'Mobile'
                    );
 
			foreach ($os_array as $regex => $value) { 
			    if (preg_match($regex, $u_agent)) {
			        $platform    =   $value;
			    }
			}

		    // Next get the name of the useragent yes seperately and for good reason
		    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) { 
		        $bname = 'Internet Explorer'; 
		        $ub = "MSIE"; 
		    } elseif(preg_match('/Firefox/i',$u_agent)) { 
		        $bname = 'Mozilla Firefox'; 
		        $ub = "Firefox"; 
		    } elseif(preg_match('/Chrome/i',$u_agent)) { 
		        $bname = 'Google Chrome'; 
		        $ub = "Chrome"; 
		    } elseif(preg_match('/Safari/i',$u_agent)) { 
		        $bname = 'Apple Safari'; 
		        $ub = "Safari"; 
		    } elseif(preg_match('/Opera/i',$u_agent)) { 
		        $bname = 'Opera'; 
		        $ub = "Opera"; 
		    } elseif(preg_match('/Netscape/i',$u_agent)) { 
		        $bname = 'Netscape'; 
		        $ub = "Netscape"; 
		    } 
   
		    // finally get the correct version number
		    $known = array('Version', $ub, 'other');
		    $pattern = '#(?<browser>' . join('|', $known) .
		    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
		    if (!preg_match_all($pattern, $u_agent, $matches)) {
		        // we have no matching number just continue
		    }
    
		    // see how many we have
		    $i = count($matches['browser']);
		    if ($i != 1) {
		        //we will have two since we are not using 'other' argument yet
		        //see if version is before or after the name
		        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
		            $version= $matches['version'][0];
		        } else {
		            $version= $matches['version'][1];
		        }
		    } else {
		        $version= $matches['version'][0];
		    }
		    
		    // check if we have a number
		    if ($version==null || $version=="") {$version="?";}
		    return array(
		        'userAgent' => $u_agent,
		        'name'      => $bname,
		        'version'   => $version,
		        'platform'  => $platform,
		        'pattern'   => $pattern
		    );
		}
 
		function os_user() {
		  $OS = $this->App_Model->_userAgent();
		  return $OS['platform'];
		}

	// Session

		function get_session(){
			$data['session_userid'] = $this->session->userdata('session_userid');
			$data['session_status'] = $this->session->userdata('session_status');
			$data['session_kode'] = $this->session->userdata('session_kode');
			return $data;
		}

		function store_session($userid,$status){
			$this->session->set_userdata('session_userid', $userid);
			$this->session->set_userdata('session_status', $status);
			$this->session->set_userdata('session_kode',$status);

		}

		function destroy_session(){
			$this->session->unset_userdata('session_userid');
			$this->session->unset_userdata('session_status');
			$this->session->unset_userdata('session_kode');
		}

	// Misc

		function backupDB() {
			$dbhost = 'localhost';
			$dbuser = 'your_user';
			$dbpass = 'your_pass';
			$dbname = 'your_db'; // Setting dulu
			$tables = '*';
			
			if($tables == '*') {
				$tables = array();
				$result = mysql_query("SHOW TABLES");
				while($row = mysql_fetch_row($result)) {
					$tables[] = $row[0];
				}
			} else {
				$tables = is_array($tables) ? $tables : explode(',', $tables);
			}

			$return = '';

			foreach($tables as $table) {
				$result = mysql_query('SELECT * FROM '.$table);
				$num_fields = mysql_num_fields($result);

				$return .= 'DROP TABLE '.$table.';';
				$row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
				$return .= "\n\n".$row2[1].";\n\n";

				for($i = 0; $i < $num_fields; $i++) {
					while($row = mysql_fetch_row($result)) {
						$return .= 'INSERT INTO '.$table.' VALUES(';
						for($j = 0; $j < $num_fields; $j++) {
							$row[$j] = addslashes($row[$j]);
							$row[$j] = str_replace("\n", "\\n", $row[$j]);
							if(isset($row[$j])) { $return .= '"'.$row[$j].'"'; } else { $return .= '""'; }
							if($j < ($num_fields - 1)) { $return .= ','; }
						}

						$return .= ");\n";
					}
				}

				$return .= "\n\n\n";
			}

			// Save File
			$handle = fopen('db-backup-'.time().'-'.(md5(implode(',', $tables))).'.sql','w+');
			fwrite($handle, $return);
			fclose($handle);
		}

		public function fetch_data($limit,$id,$table,$columnID) {
			$this->db->limit($limit);
			$this->db->where($columnID, $id);
			$query = $this->db->get($table);
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		
			return false;
		}

		function passwordGen($long) {
			$length = $long;
			$char = "abcdefghijklmnopqrstuvwxyz123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$str_len = strlen($char) - 1;
			$out = "";
			for($i=0;$i<$length;$i++) {
				$out .= $char[mt_rand(0, $str_len)];
			}
			return $out;
		}
	}
?>