<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index() {
		$this->load->view('launcher');
	}
	
	public function select_team() {
		
	}
	
	public function home_game() {
		$this->load->view('home_game');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */