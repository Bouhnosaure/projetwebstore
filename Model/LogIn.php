<?php

class LogInModel extends Model {

		function selectUserPass($user, $pass) {
			$user = $this->secureAntiSQLInjections($user);
			/*$pass = $this->encryptMD5($pass);*/
				
			$sql = "SELECT IDCUSTOMER, USERNAME, PASSWORD FROM customers WHERE USERNAME= '" . $user . "' AND PASSWORD= '" . $pass . "'";
			return parent::query($sql);
		}
		
		function selectUser($user) {
			$user = $this->secureAntiSQLInjections($user);

			$sql = "SELECT IDCUSTOMER, USERNAME FROM customers WHERE USERNAME= '" . $user . "'";
			return parent::query($sql);
		}
		
		function selectIdUser($user) {
			$user = $this->secureAntiSQLInjections($user);

			$sql = "SELECT IDCUSTOMER FROM customers WHERE USERNAME= '" . $user . "'";
			return parent::query($sql);
		}

		function secureAntiSQLInjections ($instr) {
			return addslashes($instr);
		}
		
 		function encryptMD5($value){
			return md5($value);
		}
}

?>