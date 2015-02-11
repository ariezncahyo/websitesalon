<?php

class User{
	private $_db;
	
	

	
	public function getUser($table, $field, $value){
		$this->_db = new DB();
		$data = $this->_db->getone($table, $field, $value);
		$f1 = mysqli_fetch_array($data);
		$user = 0;
		if($f1['username']){
        		// set user to 1, user already exist in db
				$user = 1;
		}
		return $user;
	}
	

 
}
?>