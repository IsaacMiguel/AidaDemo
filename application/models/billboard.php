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

	public function getOffer(){
		$data = $this->db->query('SELECT ST_LARGA AS NOMBRE, ST_PRECIO1 AS PRECIO FROM STOCK WHERE ST_OFERTA=1 ORDER BY ST_LARGA');

		return $data->result();
	}
}
?>