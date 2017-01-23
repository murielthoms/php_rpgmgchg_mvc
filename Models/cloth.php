<?php
require_once 'product.php';
require_once'vegetable.php';

class Cloth extends Product{

	private $brand;

	public function __construct($bId,$nom,$prix,$marque){
		$this->setBrand($marque);
		parent::__construct($bId,$nom,$prix);
			
	}

	public function getBrand(){
		return $this->brand;
	}
	public function setBrand($marque){
		$this->brand=$marque;
	}
	



	public function try(){

	}


}



?>