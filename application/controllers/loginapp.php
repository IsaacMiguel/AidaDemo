<?php
/**
* 
*/
class Loginapp extends CI_Controller
{
	public function index($acount, $password){
		$acount = strtoupper($acount);
		$password = strtoupper($password);

		$this->load->model('log');

		$data = $this->log->auth($acount);

		echo "acount: " . $acount;
		echo "<br>pass: " . $password;
		echo "<br>data: " . $data;
	}

	public function authenticate($acount, $password){
		$acount = strtoupper($acount);
		$password = strtoupper($password);

		$acount = urldecode($acount);

		$acount = strtoupper($acount);
		$password = strtoupper($password);

		$this->load->model('log');

		$data = $this->log->auth($acount);

		if ($data != '') {
			if ($data->pass == $password) {
				echo $data->iduser;
			}else{
				echo "false";
			}
		}else{
			echo "false";
		}
	}

	public function scan($bus){
		$suc = array('CENTRAL', 'BEBIDAS', 'L-P-B', 'ALMACEN');
		$this->load->model('app');

		$inser = array();

		foreach ($suc as $s) {
			$codigo = strlen($bus);

			if ($codigo > 12) {
				$bus = substr($bus, 0, -1);
			}

			$data = $this->app->getByScanner($s, $bus);

			array_push($inser, $data);
		}
		echo json_encode($inser);
	}

	public function orderProduct($st_interno, $usr, $cant, $idstore){

		switch ($idstore) {
			case 'CENTRAL':
				$store = '1';
				break;
			
			case 'BEBIDAS':
				$store = '2';
				break;

			case 'L-P-B':
				$store = '3';
				break;

			case 'ALMACEN':
				$store = '4';
				break;

			default:
				$store = 'false';
				break;
		}

		if ($store == 'false') {
			echo "ERROR";
		}else{
			$dateAct = new DateTime("now");
			$date = $dateAct->format("Y-m-d\TH:i:s");

			$leido = '';

			$this->load->model('app');
			$data = $this->app->ordProduct($date, $st_interno, $usr, $cant, $store, $leido);

			echo "Petición realizada";
		}
	}

	public function setOutdate($interno, $usr, $date){

		$dateAct = new DateTime($date);
		$fevence = $dateAct->format("Y-m-d\TH:i:s");

		//$fevence = $date;
		$tipo = "V";

		$this->load->model('app');
		$data = $this->app->insertOutdate($usr, $interno, $tipo, $fevence);

		if ($data != true) {
			echo "Se ha producido un error.";
		}else{
			echo "Petición realizada";
		}
	}

	public function printSticker($usr, $interno){
		$dateAct = new DateTime();
		$fevence = $dateAct->format("Y-m-d\TH:i:s");
		$tipo = "E";

		$this->load->model('app');
		$data = $this->app->insertPrintSticker($usr, $interno, $tipo, $fevence);

		if ($data != true) {
			echo "Se ha producido un error.";
		}else{
			echo "Petición realizada";
		}	
	}

	public function getMinStock($suc, $interno){
		$this->load->model('app');

		$data = $this->app->getMinStock($suc, $interno);

		echo json_encode($data);
	}

	public function setMinStock($suc, $interno, $cWinter, $cSummer){
		$this->load->model('app');

		$data = $this->app->setMinStock($suc, $interno, $cWinter, $cSummer);

		echo json_encode($data);
	}

	public function getMaxStock($suc, $interno){
		$this->load->model('app');

		$data = $this->app->getMaxStock($suc, $interno);

		echo json_encode($data);
	}

	public function setMaxStock($suc, $interno, $cWinter, $cSummer){
		$this->load->model('app');

		$data = $this->app->setMaxStock($suc, $interno, $cWinter, $cSummer);

		echo json_encode($data);
	}
}
?>