<?php
require_once 'product.php';

class Vegetable extends Product{

	private $productorName;
	private $harvestedAt;

public function __construct($bId,$nom,$prix,$producteur,$recolte){
		parent::__construct($bId,$nom,$prix);
		$this->setProductorName($producteur);
		$this->setHarvestedAt($recolte);

	}

	public function getProductorName(){
		return $this->productorName;
	}
	public function setProductorName($producteur){
		 $this->productorName=$producteur;
	}
	public function getHarvestedAt(){
		return $this->harvestedAt;
	}
	public function setHarvestedAt($recolte){
		$this->setHarvestedAt=$recolte;
	}

	function isFresh(){
		if($harvestedAt <= date('d-m-Y',time())){
			return 'true';
		}
		else{
			return 'false';
		}

	}
}


?>