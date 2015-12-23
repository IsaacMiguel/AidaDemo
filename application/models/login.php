<?php
/**
* 
*/
class Login extends CI_Model
{
	public function auth($acount, $password){
		$data = $this->db->query("select clave from secr where usuario='" . $acount . "'");

		if ($data == $password) {
			return TRUE;
		}else{
			return FALSE;
		}
	}
}
?>