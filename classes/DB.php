<?php
class DB{
	
	public $server = '';
	public $user = '';
	public $passwd = '';
	public $db = '';

	

	
	public $dbCon;
	
	public function __construct(){
		//create a connection whenever the object is created
	   $this->dbCon = mysqli_connect($this->server, $this->user, $this->passwd, $this->db);
	}

	public function getall($table, $sortorder){
		//get all the records from a certain table
		$myQuery = "SELECT * FROM {$table} ORDER BY id {$sortorder}";
		$results = mysqli_query($this->dbCon, $myQuery);
		return $results;
	}
	
	public function search($table, $field, $searchstring){
		//get all the records from a certain table
		$myQuery = "SELECT * FROM {$table} WHERE {$field} LIKE '%".$searchstring."%'";
		$results = mysqli_query($this->dbCon, $myQuery);
		return $results;
	}
	
	public function insert($table, $fields, $values){
		//insert new data into certain table
		$myQuery = "INSERT INTO {$table} ($fields) VALUES ({$values})";
		$results = mysqli_query($this->dbCon, $myQuery);
	}
	
	public function delete($table, $id){
		//delete record with id from a certain table
		$myQuery = "DELETE FROM {$table} WHERE id = {$id}";
		$results = mysqli_query($this->dbCon, $myQuery); 
	}
	
	public function update($table, $fieldsandvalues, $id){
		$sql = "UPDATE {$table} SET {$fieldsandvalues} WHERE ID={$id}";
		$results = mysqli_query($this->dbCon, $sql);
		$fieldsandvalues = mysqli_real_escape_string($this->dbCon, $fieldsandvalues);

		if($results){
			print 'Updated '; 
		}else{
			print 'Error : ('. mysqli_errno($this->dbCon) .') '. mysqli_error($this->dbCon);
		}
	}
	
	public function getone($table, $field, $value){
		//go find the record with this id
		$myQuery = "SELECT * FROM {$table} WHERE {$field} = ".$value."";
		$results = mysqli_query($this->dbCon, $myQuery);
		return $results;
	}
	

 
}
?>