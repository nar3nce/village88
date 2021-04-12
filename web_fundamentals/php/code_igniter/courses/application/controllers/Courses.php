<?php

class Courses extends CI_Controller {

    public function index()
	{
        $this->load->model("Course");
        $courses = $this->Course->get_all_courses();
        $this->load->view('index',array('courses' => $courses));
	}

    public function show($id)
    {   
        $this->output->enable_profiler(TRUE); //enables the profiler
        $this->load->model("Course"); //loads the model
        $course = $this->Course->get_course_by_id($id);  //calls the get_course_by_id method
        var_dump($course);
    }

    public function add()
    {
        $this->load->model("Course");
        $course_details = array(
            "title" => $this->input->post("name"),
            "description" => $this->input->post("description")
        ); 

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('description', 'description', 'trim|required|min_length[5]');
        if ($this->form_validation->run() == FALSE)
        {
            $this->session->flashdata("errors");
            $errors = validation_errors();
            $this->session->set_flashdata('errors', $errors);
            redirect('/');
        }
        else
        {
                $add_course = $this->Course->add_course($course_details);
                if($add_course === TRUE) {
                    redirect('/');
                }
        }

        
    }

    public function destroy($id)
    {   
        $this->load->model("Course");
        $this->Course->destroy_course($id);
        redirect('/');
    }
}

?>