<?php
/**
* 
*/
class App extends CI_Model
{
	public function getByScanner($s, $bus){
		$db = $this->load->database($s, true);
		$data = $db->query("select top 1 st_interno, st_codigo2, st_baja, '" . $s . "', st_larga, st_precio1, convert(int, st_actual1) as st_actual1 From stock where st_codigo2='" . $bus ."' or st_codigo1='".$bus."'");

		return $data->row();
	}

	public function ordProduct($date, $st_interno, $usr, $cant, $store, $leido){
		$db = $this->load->database('CENTRAL', true);

		$data = $db->query("insert into PideApp values ('".$date."',".$st_interno.",".$usr.",".$cant.",'".$store."','')");
		return $data;
	}

	public function insertOutdate($usr, $interno, $tipo, $fevence){
		$db = $this->load->database('CENTRAL', true);

		$data = $db->query("insert into ETI_WEB (usuario, st_interno, tipo, fevence) values (".$usr.",".$interno.",'".$tipo."','".$fevence."')");

		if ($data) {
			return true;
		}else{
			return false;
		}
	}

	public function insertPrintSticker($usr, $interno, $tipo, $fevence){
		$db = $this->load->database('CENTRAL', true);

		$data = $db->query("insert into ETI_WEB (usuario, st_interno, tipo, fevence) values (".$usr.",".$interno.",'".$tipo."','".$fevence."')");

		if ($data) {
			return true;
		}else{
			return false;
		}
	}

	public function getMinStock($suc, $interno){
		$db = $this->load->database($suc, true);

		$data = $db->query("select st_minimo, st_minimoi from stock where st_interno=" . $interno);

		return $data->result();
	}

	public function setMinStock($suc, $interno, $cWinter, $cSummer){
		$db = $this->load->database($suc, true);

		$data = $db->query("update stock set st_minimo=".$cSummer.", st_minimoi=".$cWinter." where st_interno=".$interno);

		if ($data) {
			return true;
		}else{
			return false;
		}
	}

	public function getMaxStock($suc, $interno){
		$db = $this->load->database($suc, true);

		$data = $db->query("select st_maximoI, st_maximoV from stock where st_interno=" . $interno);

		return $data->result();
	}

	public function setMaxStock($suc, $interno, $cWinter, $cSummer){
		$db = $this->load->database($suc, true);

		$data = $db->query("update stock set st_maximoV=".$cSummer.", st_maximoI=".$cWinter." where st_interno=".$interno);

		if ($data) {
			return true;
		}else{
			return false;
		}
	}
}
?>