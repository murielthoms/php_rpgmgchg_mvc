<?php 

require 'User.php';

class Client extends User{


	public function __construct($mail, $nId, $date){
		parent::setEmail($mail);
		parent::setId($nId);
		parent::setCreatedAt($date);

	}
	
	public function buy() {

	}
};

