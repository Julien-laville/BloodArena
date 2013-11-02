<?php
	
	class Game extends CI_Controller {
		public function play() {
			$this->load->view('game/play');
			
		}
		
		public function start() {
			$match_result = exec("java -jar match.java");
			$data = array('result' => $match_result);
			$this->load->view('game/match_result', $data)
		}
	}

?>