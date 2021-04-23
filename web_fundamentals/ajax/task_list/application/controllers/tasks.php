<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tasks extends CI_Controller {

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
	public function __construct() {
		parent::__construct();
		$this->load->model("task");
	}

	public function index()
	{
		$data = $this->task->get_tasks();
		$this->load->view('index', array('tasks' => $data));
	}

	public function process_add_task()
	{
		$this->task->add_task($this->input->post('task'));
		redirect(base_url());
	}

	public function process_edit_task()
	{
		if($this->input->post('edit'))
		{
			$this->task->edit_task($this->input->post());
		    redirect(base_url());
		}
		
		$this->task->complete_task($this->input->post());
		redirect(base_url());
	}
	
}
