<?php
class Session{
	
	public function delete($userSession){
		unset($_SESSION[$userSession]);
	}
	
	
}
?>