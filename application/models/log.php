<?php
/**
* 
*/
class Log extends CI_Model
{
	public function auth($acount){
		$data = $this->db->query("");

		if ($data->num_rows() > 0) {
			return $data->row();
		}else{
			return false;
		}
	}
}
?>