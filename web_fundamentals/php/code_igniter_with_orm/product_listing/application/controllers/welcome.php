<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->library('datamapper');
    }

	public function index()
	{
		$products = new product();
		$products->get();

		$manufacturer = new manufacturer();
		$manufacturer->get();

		$products->manufacturer_id->get_iterated();
		foreach($products->manufacturer_id as $products_){
			echo $products_->manufacturer_id;
		}
		//$this->load->view('index', array('products' => $products,'manufacturer' => $manufacturer));
	}

	public function create_product()
	{
		$products = new product();
		$products->manufacturer_id = $this->input->post('manufacturer');
		$products->name = $this->input->post('name');
		$products->description = $this->input->post('description');
		$products->price = $this->input->post('price');
		$products->save();
		$this->load->helper('url');
		redirect('/');
	}

	public function delete_product($id)
	{
		$products = new product();
		$products->where('id', $id)->get();
		$products->delete();
		$this->load->helper('url');
		redirect('/');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
