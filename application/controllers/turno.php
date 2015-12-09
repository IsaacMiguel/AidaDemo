<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Turno extends CI_Controller
{
	public function index(){
		$this->load->model('turn');

		$data['data'] = $this->turn->getSector();

		$this->load->view('turno', $data);
	}

	public function printTurn($id){
		$this->load->model('turn');

		$data['data'] = $this->turn->getLastTurnBySector($id);

		foreach ($data['data'] as $d) {
			echo "Sector: " . $d->nombre . " - ";
			echo "\nNro Turno: ";
			echo $d->turnoul + 1;
		}
	}

	public function recordTurnReq(){
		$id = $this->input->post('id');

		$this->load->model('turn');
		$this->turn->updateTurnoUl($id);
	}
}
?>