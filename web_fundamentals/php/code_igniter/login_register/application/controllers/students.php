<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class students extends CI_Controller {

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

    public function register()
	{
        $this->session->flashdata("errors");
        $this->load->model("student");

        $user_details = array(
            "fullname" => $this->input->post("fullname"),
            "email" => $this->input->post("email"),
            "password" => $this->input->post("password"),
            "confirm" => $this->input->post("confirm")
        );
        

        $this->load->library('form_validation');
        $this->form_validation->set_rules('fullname', 'Full name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('confirm', 'Password Confirmation', 'trim|required|matches[password]');

        if ($this->form_validation->run() == FALSE)
        {
            $errors = validation_errors();
            $this->session->set_flashdata('errors', $errors);
            redirect('/');
        }
        else
        {
                $register = $this->student->register_user($user_details);
                if($register === TRUE) {
                    $errors = "registered successsfully";
                    $this->session->set_flashdata('errors', $errors);
                }
                redirect('/');
        }
	}

    public function login()
    {
        $this->session->flashdata("login_message");
        $user_details = array(
            "email" => $this->input->post("email"),
            "password" => $this->input->post("password")
        );

        $this->load->model("student");
        $student = $this->student->login($user_details);
        if($student > 0){

            $user = array(
                'id' => $student['id'],
                'fullname' => $student['fullname'],
                'email' => $student['email'],
                'is_logged_in' => true
            );
            $this->session->userdata("user_info");
            $this->session->set_userdata('user_info', $user);
            redirect("/profile");
        }
        else{
            $this->session->set_flashdata('login_message', "user not found");
            redirect('/');
        }
    }

    public function profile()
    {
        if(empty($this->session->user_info)){
            echo "please login first";
        }
        else{
            $this->load->view('profile');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}
