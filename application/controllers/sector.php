<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Sector extends CI_Controller
{
	public function index(){
		if ($this->session->userdata('log') == true) {
			$this->load->model('sectores');

			$data['data'] = $this->sectores->getSector();

			$this->load->view('sectores', $data);
		}else{
			header('Location: ' . SITE_URL);
		}
	}

	public function loadBoardSector(){
		if ($this->session->userdata('log') == true) {
			$id = $this->input->post('sector');

			$this->load->model('sectores');
			$data['data'] = $this->sectores->getSectorById($id);

			$this->load->view('sector', $data);
		}else{
			header('Location: ' . SITE_URL);
		}
	}

	public function RecordDataSector(){
		if ($this->session->userdata('log') == true) {
			$codigo = $this->input->post('codigo');
			$turnoact = $this->input->post('turnoact');

			if ($turnoact > 999) {
				$turnoact = 1;
			}

			$this->load->model('sectores');
			$this->sectores->RecordDataSector($codigo, $turnoact);

			echo $codigo."\n";
			echo $turnoact;
		}else{
			header('Location: ' . SITE_URL);
		}
	}
}
?>