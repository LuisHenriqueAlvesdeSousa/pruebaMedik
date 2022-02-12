<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b1ddcfb77a5494";$this->pass="bb32d051";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_2ad7720dd8528f8";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
