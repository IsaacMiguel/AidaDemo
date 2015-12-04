<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Sector extends CI_Controller
{
	public function index(){
		$this->load->model('sectores');

		$data['data'] = $this->sectores->getSector();

		$this->load->view('sectores', $data);
	}

	public function loadBoardSector(){
		$id = $this->input->post('sector');

		$this->load->model('sectores');
		$data['data'] = $this->sectores->getSectorById($id);

		$this->load->view('sector', $data);
	}
}
?>