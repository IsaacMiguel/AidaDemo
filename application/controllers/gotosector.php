<?php
/**
* 
*/
class Gotosector extends CI_Controller
{
	public function index(){}

	public function sectores(){
		if ($this->session->userdata('log') == true) {
			header('Location: ' . SITE_URL . "index.php/sector");
		}else{
			header('Location: ' . SITE_URL);
		}
	}

	public function turnos(){
		if ($this->session->userdata('log') == true) {
			header('Location: ' . SITE_URL . "index.php/turno");
		}else{
			header('Location: ' . SITE_URL);
		}
	}

	public function cartel(){
		if ($this->session->userdata('log') == true) {
			header('Location: ' . SITE_URL . "index.php/welcome");
		}else{
			header('Location: ' . SITE_URL);
		}
	}
}
?>