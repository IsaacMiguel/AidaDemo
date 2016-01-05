<?php
/**
* 
*/
class Log extends CI_Model
{
	public function auth($acount){
		$data = $this->db->query("select rtrim(ltrim(clave)) as pass from secr where rtrim(ltrim(upper(usuario)))='" . $acount . "'");

		if ($data->num_rows() > 0) {
			return $data->row();
		}else{
			return false;
		}
	}
}
?>