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

		$this->load->model('log');

		$data = $this->log->auth($acount, $password);

		if($data->clave == $password){
			$sesData = array(
				'user' => $acount,
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