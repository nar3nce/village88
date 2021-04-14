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

    public function new()
	{
		$this->load->view('new');
	}

    public function create()
	{
        if($this->input->post('submit')){
            echo "This feature is coming soon!";
        }
        else{
            redirect('users');
        }
		
	}

    public function count()
	{
		$count = $this->session->userdata("count");
        $count +=1;
        $this->session->set_userdata("count", $count);
        echo $count;
	}

    public function reset()
	{
		$this->session->unset_userdata('count');
        $this->load->view('reset');
	}

    public function say($word, $number)
	{
        $this->load->view('say', array('word' => $word, 'number' => $number));
	}

    //final challenge
    public function mprep()
    {
        $view_data = array(
            'name' => "Michael Choi",
            'age'  => 40,
            'location' => "Seattle, WA",
            'hobbies' => array( "Basketball", "Soccer", "Coding", "Teaching", "Kdramas", "added")
        );
        $this->load->view('mprep', $view_data);
    }
}
