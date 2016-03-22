<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index(){
		if ($this->session->userdata('log') == true) {
			$this->load->model('billboard');
			$data['data'] = $this->billboard->getSector();

			$data['offer'] = $this->billboard->getOffer();
			$numOfertas = count($data['offer']);
			$numOferta = $this->session->userdata('num_oferta');

			if ( $numOferta < $numOfertas-1) {
				$numOferta++;
				$this->session->set_userdata('num_oferta', $numOferta);
			}else{
				$this->session->set_userdata('num_oferta', 0);
			}

			$this->load->view('welcome', $data);
		}else{
			header('Location: ' . SITE_URL);
		}
	}

	public function reload(){
		$dom = new DOMDocument;
		$body = $this->input->post('body');
		$dom->loadHTML($body);

		$html = $dom->getElementsByTagName('input');

		$i = 0;
		$this->load->model('billboard');
		$data['data'] = $this->billboard->getSector();

		foreach($html as $e) {
  		if ($e->getAttribute('value') != $data['data'][$i]->turnoult) {
  			echo "true";
  			break;
  		}
  		$i++;
		}
	}
}
