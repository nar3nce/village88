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
        $this->load->model('product');
        $products = $this->product->all_products();
		$this->load->view('index', array('products' => $products));
	}

	public function add()
	{
		$this->load->model('product');
		$product = $this->product->product_by_id($this->input->post("id"));

        $cart = (array)$this->session->userdata("cart");
		$cart[] = array( 
			'name' => $product['name'],
			'desc' => $product['description'],
			'price' => $product['price'],
			'qty' => $this->input->post("qty"),
			'total' => $product['price'] * $this->input->post("qty"),
			'id' => $this->input->post("id")
		);
        $this->session->set_userdata("cart",$cart);
		redirect("/");
	}

	public function cart()
	{
		$this->load->view('cart');
	}

	public function remove($id)
	{
		$cart = (array)$this->session->userdata("cart");
	    unset($cart[$id]);
		$this->session->set_userdata("cart",$cart);
		redirect('cart');
	}
}
