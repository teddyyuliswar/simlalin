<?php
	/* File : ajax.php
	 * Author : Manish Kumar Jangir
	*/
	class AJAX {
		
		private $database = NULL;
		private $_query = NULL;
		private $_fields = array();
		public  $_index = NULL;
		const DB_HOST = "localhost";
		const DB_USER = "root";
		const DB_PASSWORD = "";
		const DB_NAME = "simbansos";
		
		
		public function __construct(){
			$this->db_connect();					// Initiate Database connection
			$this->process_data();
		}
		
		/*
		 *  Connect to database
		*/
		private function db_connect(){
			$this->database = mysql_connect(self::DB_HOST,self::DB_USER,self::DB_PASSWORD);
			if($this->database){
				$db =  mysql_select_db(self::DB_NAME,$this->database);
			} else {
				echo mysql_error();die;
			}
		}
		
		private function process_data(){
			$this->_index = ($_REQUEST['index'])?$_REQUEST['index']:NULL;
			$id = ($_REQUEST['id'])?$_REQUEST['id']:NULL;
			switch($this->_index){
				case 'kecamatan':
					$this->_query = "SELECT * FROM kecamatan";
					$this->_fields = array('id','nm_kecamatan');
					break;
				case 'nagari':
					$this->_query = "SELECT * FROM nagari WHERE id_kec=$id";
					$this->_fields = array('id','nm_nagari');
					break;
				
				default:
					break;
			}
			$this->show_result();
		}
		
		public function show_result(){
			echo '<option value="">Pilih '.$this->_index.'</option>';
			$query = mysql_query($this->_query);
			while($result = mysql_fetch_array($query)){
				$entity_id = $result[$this->_fields[0]];
				$enity_name = $result[$this->_fields[1]];
				echo "<option value='$entity_id'>$enity_name</option>";
			}
		}
	}
	
	$obj = new AJAX;
	
?>