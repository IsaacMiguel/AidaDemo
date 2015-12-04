<?php
/**
* 
*/
class Sectores extends CI_Model
{
	public function getSector(){
		$data = $this->db->query('select * from sectores');

		return $data->result();
	}

	public function getSectorById($id){
		$data = $this->db->query('select * from sectores where codigo='.$id);

		return $data->row();
	}
}
?>