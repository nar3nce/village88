<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
		$this->load->view('index');
	}

    public function search_player()
	{
		$search_player = array(
            "name" => $this->input->post('name'),
            "gender" =>$this->input->post('gender'),
            "sport" => $this->input->post('sport')
        );
		
		$this->load->model("user");
        $players = $this->user->search_player($search_player);
		$this->session->flashdata('players');
		$this->session->set_flashdata('players', $players);
		redirect('/');
	}
}
