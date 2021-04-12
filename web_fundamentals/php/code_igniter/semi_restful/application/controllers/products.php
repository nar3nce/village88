<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

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
        $this->load->model('product');
        $products = $this->product->all_products();
		$this->load->view('products', array('products' => $products));
	}

    public function new()
	{
		$this->load->view('new');
	}

    public function edit($id)
	{
        $this->load->model("product");
        $product = $this->product->product_by_id($id);
		$this->load->view('edit',array('product' => $product));
	}

    public function show($id)
	{
        $this->load->model("product");
        $product = $this->product->product_by_id($id);
		$this->load->view('show',array('product' => $product));
	}

    public function create()
	{
        $this->load->model("product");
        $product_details = array(
            "name" => $this->input->post("name"),
            "description" => $this->input->post("description"),
            "price" => $this->input->post("price")
        );
        

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('description', 'description', 'trim|required');
        $this->form_validation->set_rules('price', 'price', 'trim|required|numeric');
        if ($this->form_validation->run() == FALSE)
        {
            $this->session->flashdata("errors");
            $errors = validation_errors();
            $this->session->set_flashdata('errors', $errors);
            redirect('new');
        }
        else
        {
                $add_product = $this->product->add_product($product_details);
                if($add_product === TRUE) {
                    redirect('products');
                }
        }
	}

    public function destroy($id)
	{
        $this->load->model("product");
        $this->product->delete_product($id);
        redirect('products');
	}

    public function update($id)
	{
		$this->load->model("product");
        $product_details = array(
            "name" => $this->input->post("name"),
            "description" => $this->input->post("description"),
            "price" => $this->input->post("price"),
            "id" => $id
        );
        $this->product->update_product($product_details);
        redirect('products');
	}
}
