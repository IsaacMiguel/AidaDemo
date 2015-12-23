<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$this->load->model('billboard');
		$data['data'] = $this->billboard->getSector();

		$this->load->view('welcome', $data);
	}

	public function reload(){
		/*$dom = $DOM->loadHTML();
		$dom = $DOM->getElementByTagName('input');

		for ($i=0; $dom->length > $i; $i++) { 
			echo $dom->length($i);
		}*/

		// Create DOM from URL or file
/*		$dom = new DOMDocument;
		$body = $this->input->post('body');
		$dom->loadHTML($body);

		$html = $dom->getElementsByTagName('input');

		foreach($html as $e) {
      		$vi[] = array( 'num' => $e->getAttribute('value'));
		}*/
		$this->load->model('billboard');
		$data['data'] = $this->billboard->getSector();

		//print_r($data);
		foreach ($data['data'] as $d) {
			//print_r($d);
			//echo $d->turnoult;
			echo "clock = new FlipClock($('#" . $d->codigo . "'), " . $d->turnoult . ", {";
				echo "clockFace: 'Counter'";
			echo "});\n";
		}
	}
}
