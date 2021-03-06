<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surveys extends CI_Controller {

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
		$this->load->view('form');
	}
    public function process_form()
	{
        $data['fname'] = $this->input->post('fname');
        $data['location'] = $this->input->post('location');
        $data['language'] = $this->input->post('language');
        $data['comment'] = $this->input->post('comment');

        $this->session->set_userdata($data);
        redirect('/Surveys/result');
	}

    public function result()
	{
        $data = $this->session->userdata();
        $this->load->view('result', $data);
	}

}

