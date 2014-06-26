<?php

class OrderModel extends Model {
	private $signUpData;

	public function addOrder() {	
		$sql = "INSERT INTO `orders`(`IDORDERSTATEMENT`, `IDCUSTOMER`, `DATEORDER`, `ADDRESS1ORDER`, `ADDRESS2ORDER`, `CITYORDER`, `ZIPCODEORDER`, `COUNTRYORDER`, `DATEPAYMENTORDER`)VALUES ('".$idStatement."','".$idcustomer."','".$dateorder."','".$address1order."','".$adress2order."','".$cityorder."'
					,'".$zipcodeorder."','".$countryorder."','".$datepaymentorder."')";
	}
}

?>