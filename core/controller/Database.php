<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b04093d684a84f";$this->pass="8f4ac7a8";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_fdf0012e3284d0b";
	}

	function connect(){
		$this->user="b04093d684a84f";$this->pass="8f4ac7a8";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_fdf0012e3284d0b";
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
