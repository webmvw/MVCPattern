<?php
/**
* Database Class
*/
class Database extends PDO{
	
	public function __construct($dsn, $user, $pass)
	{
		parent::__construct($dsn, $user, $pass);
	}

	public function select($sql, $data=array(), $fetchStyle = PDO::FETCH_ASSOC){
		$stmt = $this->prepare($sql);
		foreach($data as $key=>$value){
			$stmt->bindParam($key, $value);
		}
		$stmt->execute();
		return $stmt->fetchAll($fetchStyle);
	}

	public function insert($table, $data){
		$keys = implode(',' , array_keys($data));
		$values = ":".implode(', :', array_keys($data)); 
		$sql = "INSERT INTO $table($keys) VALUES ($values)";
		$stmt = $this->prepare($sql);
		foreach($data as $key=>$value){
			$stmt->bindParam(":$key", $value);
		}
		return $stmt->execute();
	}

	public function update($table, $data, $condition){
		$keysets = null;
		foreach($data as $key=>$value){
			$keysets .= "$key=:$key,";  
		}
		$keysets = rtrim($keysets,',');
		$sql = "UPDATE $table SET $keysets WHERE $condition";
		$stmt = $this->prepare($sql);
		foreach ($data as $key => $value) {
			$stmt->bindParam(":$key", $value);
		}
		return $stmt->execute();
	}

	public function destroy($table, $condition, $limit=1){
		$sql = "DELETE FROM $table WHERE $condition LIMIT $limit";
		$stmt = $this->prepare($sql);
		return $stmt->execute();
	}

}