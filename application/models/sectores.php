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

	public function RecordDataSector($codigo, $turnoact){
		$data = $this->db->query("update sectores set turnoact=" . $turnoact . " where codigo='" . $codigo . "'");
	}
}
?>