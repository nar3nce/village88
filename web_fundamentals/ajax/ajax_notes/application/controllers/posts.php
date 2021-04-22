<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class posts extends CI_Controller {

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

    public function create()
	{
		$this->load->model('post');
        $data = $this->input->post();
        $this->post->insert_post($data);
        redirect('/');
	}

	public function delete()
	{
		$this->load->model('post');
        $this->post->delete_post($this->input->post('delete_id'));
        redirect('/');
	}

    public function select()
	{
		$this->load->model('post');
        $data = $this->post->fetch_all();
        foreach($data as $data_){
			echo '<div class="notes">';
			echo '<span>click the id to delete</span><p>'.$data_['id'].' </p>';
			echo "<h3>".$data_['title']."</h3>";
            echo "<h4>".$data_['description']."</h4>";
			echo '</div>';
        }
	}
}
