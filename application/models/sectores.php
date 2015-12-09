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

	public function RecordDataSector($nombre, $turnoac){
		$this->db->query("update sectores set turnoac=" . $turnoac . " where nombre='" . $nombre . "'");
	}
}
?>