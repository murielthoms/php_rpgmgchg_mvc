<?php 
require_once 'DB.php';
class User extends DB {
	private $email; 
	private $id;
	private $createdAt;

	public function __construct($id){
		parent:: __construct('users');
		$data = parent::get($id-1);
		$this->email = $data['email'];
		$this->id = $data['id'];
		$this->createdAt = $data['date'];

	}

	public function getEmail(){
		return $this->email;
	}
	public function setEmail($mail){
		$this->email=$mail;
	}
	public function getId(){
		return $this->id;

	}
	public function setId($nId){
		$this ->id=$nId;
	}

	public function getCreatedAt(){
		return $this->createdAt;
	}
	public function setCreatedAt($date){
		$this->createdAt=$date;
	}

}


?>