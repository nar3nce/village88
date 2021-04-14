<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

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
        
        $this->load->model('Customer');
        $data = $this->Customer->select();
        $customer = $this->session->userdata('customer');
        $this->session->set_userdata('customer', $data);

		$this->load->view('index', array('customer' => $customer));
	}

    public function change_date()
	{
        $this->load->model('Customer');
        $date_deatails = array(
            "from_date" => $this->input->post("from_date"),
            "to_date" => $this->input->post("to_date")
        );
        $customer = $this->Customer->select_customers($date_deatails);

        $this->session->userdata('customer');
		$this->session->set_userdata('customer', $customer);
        redirect('/');
	}
}
