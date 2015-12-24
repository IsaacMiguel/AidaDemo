<?php
/**
* 
*/
class Log extends CI_Model
{
	public function auth($acount, $password){
		$data = $this->db->query("select clave from secr where usuario='" . $acount . "'");

		return $data->row();
	}
}
?>