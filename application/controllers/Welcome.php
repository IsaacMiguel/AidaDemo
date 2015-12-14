<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
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
			//echo $d->turnoul;
			echo "clock = new FlipClock($('#" . $d->codigo . "'), " . $d->turnoul . ", {";
				echo "clockFace: 'Counter'";
			echo "});\n";
		}
	}
}
