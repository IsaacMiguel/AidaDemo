<?php
/**
* 
*/
class Turn extends CI_Model
{
	public function getSector(){
		$data = $this->db->query('select * from sectores where activo=1');

		return $data->result();
	}

	public function getLastTurnBySector($id){
		$data = $this->db->query('select * from sectores where codigo = ' . $id);

		return $data->result();
	}

	public function updateTurnoUl($id){
		$this->db->query('update sectores set turnoult=turnoult+1 where codigo='.$id);
	}
}
?>