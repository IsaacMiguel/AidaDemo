<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Turno extends CI_Controller
{
	public function index(){
		if ($this->session->userdata('log') == true) {
			$this->load->model('turn');

			$data['data'] = $this->turn->getSector();

			$this->load->view('turno', $data);
		}else{
			header('Location: ' . SITE_URL);
		}
	}

	public function printTurn($id){
		if ($this->session->userdata('log') == true) {
			$this->load->model('turn');

			$data['data'] = $this->turn->getLastTurnBySector($id);

			foreach ($data['data'] as $d) {
				if ($d->turnoult > 998) {
					$d->turnoult = 001;
				}

				echo "Sector: " . $d->nombre . " - ";
				echo "\nNro Turno: ";
				echo $d->turnoult + 1;
			}
		}else{
			header('Location: ' . SITE_URL);
		}
	}

	public function recordTurnReq(){
		if ($this->session->userdata('log') == true) {
			$id = $this->input->post('id');

			$this->load->model('turn');
			$this->turn->updateTurnoUl($id);
		}else{
			header('Location: ' . SITE_URL);
		}
	}
}
?>