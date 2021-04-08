<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class process_money extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$gold = $this->session->gold;
        $activity = (array)$this->session->userdata("activity");
		$this->load->view('index', array('gold' => $gold,'activity' => $activity));
	}

	public function process()
	{
		$activity = (array)$this->session->userdata("activity");

		if($this->input->post('find_farm')){
			$rand = rand(10, 20);
			$this->session->gold += $rand;
			$activity[] = "You Entered a farm. And earned $rand Gold";
            $this->session->set_userdata("activity",$activity);
			redirect('/');
		}

		if($this->input->post('find_cave')){
			$rand = rand(5, 10);
			$this->session->gold += $rand;
			$activity[] = "You Entered a cave. And earned $rand Gold";
            $this->session->set_userdata("activity",$activity);
			redirect('/');
		}

		if($this->input->post('find_house')){
			$rand = rand(2, 5);
			$this->session->gold += $rand;
			$activity[] = "You Entered a house. And earned $rand Gold";
            $this->session->set_userdata("activity",$activity);
			redirect('/');
		}

		if($this->input->post('find_casino')){
			$rand = rand(0, 50);
			
			$value = array('earn', 'take');
			$action = $value[array_rand($value)];
			
			if($action == "earn"){
				$this->session->gold += $rand;
				$activity[] = "You Entered a casino. And earned $rand Gold";
                $this->session->set_userdata("activity",$activity);
				redirect('/');
			}
			else if($action == "take"){
				$this->session->gold -= $rand;
				$activity[] = "You Entered a casino. And lost $rand Gold";
                $this->session->set_userdata("activity",$activity);
				redirect('/');
			}
		}
		
	}
}
