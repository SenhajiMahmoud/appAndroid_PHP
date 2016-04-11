<?php
class Database{
	private $host;
	private $source;
	private $user;
	private $password;
	private $url;
	private $db;
	
	public function Database($host,$source,$user,$password){
		$this->host=$host;
		$this->source=$source;
		$this->user=$user;
		$this->password=$password;
		
		$this->url="mysql:host=$host;dbname=$source";
		try{
			$this->db=new PDO($this->url,$user,$password);
		}
		catch(PDOException $e){
			echo "Erreur de connexion :" . $e->Message();
		}
	}
	
	public function selectAll($tablename){
		$req="SELECT * FROM $tablename";
		$rs=$this->db->query($req);
		return $rs;
	}
	
	public function select($tablename,$key,$value){
		$req="SELECT * FROM " . $tablename . " WHERE " . $key . "='" . $value . "'";
		$rs=$this->db->query($req);
		$row= $rs->fetch();
		return $row;
	}
	public function select2($tablename,$key1,$key2,$value1,$value2){
		$req="SELECT * FROM " . $tablename . " WHERE " . $key1 . "='" . $value1 . "'" . " AND " . $key2 . "='" . $value2 . "'";
		$rs=$this->db->query($req);
		$row= $rs->fetch();
		return $row;
	}
	
	public function insert($tableName,$row ){
		$req= "INSERT INTO " . $tableName . " VALUES('" . $row[0] . "'";
		for ($i = 1; $i < count($row); $i++) {
			$req= $req . ", '" . $row[$i] . "'";
		}
		$req= $req . ")";
		$res=$this->db->exec($req);
		return $res;
	}
	
	public function Fields($tableName){
		$rs=$this->db->query("SELECT * FROM $tableName");
		$nc=$rs->columnCount();
		$f=Array();
		for ($i = 0; $i < $nc; $i++) {
			$info=$rs->ColumnMeta($i);
			$f[]=$info["name"];
		}
		return $f;
	}
	public function update($tableName, $row){
		$f=$this->Fields($tableName);
		$req = "UPDATE $tableName SET " . $f[1] . " = '" . $row[1] . "'";
		for ($i=2;$i<count($f);$i++){
			$req = $req . ", " . $f[$i]. " = '" . $row[$i] . "'";
		}
		$req = $req . " WHERE " . $f[0] . " = '" . $row[0] ."'";
		return $this->db->exec($req);
	}
	public function LastIndex($tableName){
		$url="mysql:host=localhost;dbname=etableau"; //Chaine de connexion
		$user="root";
		$password="";
		
		$db=new PDO($url, $user, $password);
		$rs=$db->query("SELECT * FROM evenement");
		$n=$rs->columnCount();
		
		foreach ($rs as $row){
		 $res=$row[0];
		}
		return $res+1;
	}
	
	
	
}