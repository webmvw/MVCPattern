<?php
/**
* Main Model
*/
class BaseModel{
	
	protected $db = array();

	public function __construct(){
		$dsn = 'mysql:dbname=mvc;host=localhost';
		$user = 'root';
		$pass = '';
		$this->db = new Database($dsn, $user, $pass);
	}

	public function all($table){
		$sql = "select * from $table";
		return $this->db->select($sql);
	}

	public function show($table, $id){
		$sql = "select * from $table where id =:id";
		$data = array(':id'=>$id);
		return $this->db->select($sql, $data);
	}

	public function insert($table, $data){
		return $this->db->insert($table, $data);
	}

	public function update($table, $data, $condition){
		return $this->db->update($table, $data, $condition);
	}

	public function destroy($table, $condition){
		return $this->db->destroy($table, $condition);
	}
	
}