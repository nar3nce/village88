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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$attempt = $this->session->userdata('count');

		$letters = array("a","b","c","d","e","1","5","7","9","3");
		shuffle($letters);
        $this->load->view('random', array('attempt' => $attempt,'random' => $letters));
	}

	public function generate()
	{
		$this->session->count++;
        redirect('../');
	}
}
