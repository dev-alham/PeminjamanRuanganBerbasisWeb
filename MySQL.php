<?php
class MySQL
{
    private $db;
    private $host;
    private $user;
    private $password;
    private $database;
    private $query;
    private $result;
    private $row;
    private $num_rows;
        
        
    function __construct (){
        /*$this->host = "localhost";
        $this->user = "root";
        $this->password = "";
        $this->database = "ruangan";*/
            
        $this->host = "ap-cdbr-azure-east-c.cloudapp.net";
        $this->user = "b308b551c688c6";
        $this->password = "4ab6d693";
        $this->database = "ruangan";
            
            
    }
        
    function connect() {
        $this->db = mysql_connect ($this->host,$this->user,$this->password) or die (mysql_error());
        mysql_select_db($this->database,$this->db) or die (mysql_error());
    }
        
    function execute($query) {
        $this->query = $query;
        $this->result = mysql_query($this->query, $this->db) or die (mysql_error());
    }
	
    function select($namaTabel, $colom, $where){
        $nilaiquery = "SELECT ".$colom." FROM ".$namaTabel." WHERE ".$where;
	$this->execute($nilaiquery);
    }
        
    function selectgroupby($namaTabel, $colom, $where, $groupby){
        $nilaiquery = "SELECT ".$colom." FROM ".$namaTabel." WHERE ".$where. " GROUP BY ".$groupby;
	$this->execute($nilaiquery);
    }
	
    function delete($namaTabel, $where){
    	$nilaiquery = "DELETE FROM ".$namaTabel." WHERE ".$where;
	$this->execute($nilaiquery);
    }
	
    function insert($namaTabel, $colom, $value){
	$nilaiquery = "INSERT INTO ".$namaTabel."(".$colom.") VALUES (".$value.")";
	$this->execute($nilaiquery);
    }
	
    function update($namaTabel, $colomDanValue, $where){
   	$nilaiquery = "UPDATE ".$namaTabel." SET ".$colomDanValue." WHERE ".$where;
	$this->execute($nilaiquery);
    }
	
    function getResult(){
        return $this->result;
    }
        
    function get_array() {
        if($this->row = mysql_fetch_array($this->result)){
            return $this->row;
        }else{
            return false;
        }
    }
        
    function get_num_rows() {
        $this->num_rows = mysql_num_rows($this->result);
        return $this->num_rows;
    }
        
    function close_connection(){
        mysql_close($this->db);
    }
        
}
?>