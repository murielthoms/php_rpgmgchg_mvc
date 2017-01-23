<?php
require_once'DB.php';
class Product extends DB{

	private $id;
	private $name;
	private $price;

	public function __construct($bId){
		parent:: __construct('products');

		$this->setId($bId);
		$this->setName($nom);
		$this->setPrice($prix);
	}

	public function getId(){
		return $this->id;
	}
	public function setId($bId){
		$this->id=$bId;
	}
	public function getName(){
		return $this->name;
	}
	public function setName($nom){
		$this->name=$nom;
	}
	public function getPrice(){
		return $this->price;
	}
	public function setPrice($prix){
		$this->price=$prix;
	} 

}


?>