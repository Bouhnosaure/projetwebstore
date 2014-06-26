<?php 

class UserModel extends Model {
	
	public function getInfosActualUser ($email) {
		$sql = "SELECT IDCUSTOMER, IDCIVILITY, IDADDRESS, PASSWORD, LASTNAME, FIRSTNAME, EMAIL FROM customers where EMAIL='".$email."'";
		return parent::query($sql)
	}
	

	public function updatePassword ($email,$newPassword) {
		$sq l= "UPDATE customers SET PASSWORD='".$newPassword."' WHERE IDCUSTOMER='".$email."'";
		return self::actionRows($sql);	
	}
	
	public function addAddress ($id,$address1,$address2,$city,$cp) {
		$sql = "INSERT INTO addresss ( IDADDRESS, IDCITY, ADDRESS1 , ADRESS2) VALUES ( '".$id."', '".$address1."', '".$address2."', '".$city."', '".$cp."' )";
		return parent::query($sql);
	}

	public function addCity ($id,$city,$cp,$country) {
		$sql = "INSERT INTO addresss ( IDCITY, CITY, ZIPCODE, COUNTRY) VALUES ( '".$id."', '".$city."', '".$cp."', '".$country."' )";
		return parent::query($sql);
	}

	public function getDefaultAddress($email) {

		$sql="SELECT ADDRESS1, ADDRESS2, CITY , ZIPCODE, COUNTRY FROM city INNER JOIN address ON   city.IDCITY= address.IDCITY INNER JOIN customers ON address.IDADRESS = customers.IDADRESS WHERE EMAIL = '".$email."'";
		return parent::query($sql);
	}
	
	public function setInfosActualUser($email) {
		$sql ="UPDATE customers SET LASTNAME='" . $_POST['last_name'] . "',  FIRSTNAME='" . $_POST['firstname'] . "', EMAIL='" . $_POST['email'] .  "' WHERE login='".$email."'";
		return parent::query($sql);
	}
	
	public function getUserId($email) {
		$sql = "SELECT IDCUSTOMER FROM customers WHERE EMAIL='" . $email . "'";
		return parent::query($sql);
	}
	

	public function setDefaultAddress($idcustomer) {
		$sql = "UPDATE address SET address1='" . $_POST['address1'] . "', address2='" . $_POST['address2'] . "' WHERE id_user='".$idcustomer."' ";
		return self::actionRows($sql);	
	}
	
	public function setDefaultCity($idcity) {
		$sql = "UPDATE city SET CITY='" . $_POST['city'] . "', ZIPCODE='" . $_POST['zipcode'] . "', COUNTRY='" . $_POST['country'] . "' WHERE IDCITY='".$idcity."' ";
		return self::actionRows($sql);	
	}
}
