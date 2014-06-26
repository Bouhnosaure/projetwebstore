<?php

class SignUpModel extends Model {
	private $loginData;

	public function addUser($civility, $login, $pass, $firstName, $lastName, $emailCustomer) {
	
		$login = $this->loginData->secureAntiSQLInjections($login);
		$pass = $this->loginData->encriptMD5($pass);
		
		$sql = "INSERT INTO customers ( IDCIVILITY , USERNAME , PASSWORD , LASTNAME , FIRSTNAME , EMAIL )
			  VALUES ( '".$civility."', '".$login."', '".$pass."', '".$lastName."', '".$firstName."','".$emailCustomer."')";
		return parent::query($sql);

	}
	
	public function selectMail($mail) {
		$mail = $this->loginData->secureAntiSQLInjections($mail);
			
		$sql = "SELECT DISTINCT EMAIL FROM customers WHERE EMAIL ='".$emailCustomer."'";
		return parent::query($sql);
	}		
	
	public function getCivility() {
		$sql = "SELECT IDCIVILITY, NAMECIVILITY FROM civility";
		return parent::query($sql);
	}
}
?>