<?php
/**
* Post Class
*/
class Post extends BaseModel{

	public function allPost($postTable, $categoryTable){
		$sql = "SELECT $postTable.*, $categoryTable.name FROM $postTable
				INNER JOIN $categoryTable 
				ON $postTable.category_id = $categoryTable.id";
		return $this->db->select($sql);
	}

	public function postDetails($postTable, $categoryTable, $id){
		$sql = "SELECT $postTable.*, $categoryTable.name FROM $postTable
				INNER JOIN $categoryTable 
				ON $postTable.category_id = $categoryTable.id
				WHERE $postTable.id = $id";
		return $this->db->select($sql);		
	}

	public function postByCategory($postTable, $categoryTable, $id){
		$sql = "SELECT $postTable.*, $categoryTable.name FROM $postTable
				INNER JOIN $categoryTable 
				ON $postTable.category_id = $categoryTable.id
				WHERE $categoryTable.id = $id";
		return $this->db->select($sql);		
	}
	
}