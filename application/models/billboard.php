<?php
/**
* 
*/
class Billboard extends CI_Model
{
	public function getSector(){
		$data = $this->db->query('select * from sectores where activo=1');

		return $data->result();
	}
}
?>