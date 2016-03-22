<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Login extends CI_Controller
{
	public function index(){
		$this->load->view('login');
	}

	public function auth(){
		$acount = $this->input->post('acount');
		$password = $this->input->post('password');

		$acount = urldecode($acount);

		$acount = strtoupper($acount);
		$password = strtoupper($password);

		$this->load->model('log');

		$data = $this->log->auth($acount);

		if ($data != false) {
			$pass = strtoupper($data->pass);
		}else{
			$pass = false;
		}

		if($pass == $password && $pass != false){
			$sesData = array(
				'user' => $acount,
				'num_oferta' => -1,
				'log' => TRUE);

			$this->session->set_userdata($sesData);
			$this->load->view('goTo');
		}else{
			header('Location: ' . SITE_URL);
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		header('Location: ' . SITE_URL);
	}
}
?>