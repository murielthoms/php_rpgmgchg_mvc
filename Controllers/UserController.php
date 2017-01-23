<?php

require_once __DIR__.'/../Models/DB.php';
require_once __DIR__.'/../Models/User.php';

class UserController {
	
	public function home(){
		$nBclient= (new DB('users'))->count();
		$client= [];
		for ($i=0; $i <$nBclient ; $i++) { 
			$client[]=new User($i+1);
		}
		require __DIR__.'/../Views/UserTable.php';
	}
}
?>