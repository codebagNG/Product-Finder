<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Product extends CI_Controller{
	
	private $data = array();

	public function __construct(){
		
		parent::__construct();
		$this->load->library(array('session','form_validation','pagination'));
		$this->load->model(array('product_model', 'user_model'));
		

	}
	public function index($page = false){
		// create the data object
		$data = new stdClass();
		
		/*if ($page === false) {
			
			//$products = $this->product_model->get_products();
			$products = $this->product_model->test('2');
			foreach ($products as $product) {
				//$product->permalink = "";
				//$product->created_at = "10";
				
				//$product->name = 
			}
			$data->products = $products;
			
			$this->load->view('header2');
			$this->load->view('/user/dashboard2', $data);
			$this->load->view('footer2');
			
		}*/
		
		
		if ($page === false || $page < 1 ){
			$data->this_page = 1;
		} else {
			$data->this_page = (int)$page;
		}
		$data->the_page = $data->this_page*10 - 10;
		$products = $this->product_model->get_products_from($data->the_page);
		//$products = $this->product_model->get_products();
		foreach ($products as $product) {
			$product->seller = $this->user_model->get_username_from_user_id($product->owner_id);
			
		}
		$data->products = $products;		
		$data->total_pages = ceil($this->product_model->get_total_products() / 10);
		
		$this->load->view('header');
		$this->load->view('/user/home', $data);
		$this->load->view('footer');
		
		
		
	}
	
	public function create(){
		if (!isset($_SESSION['username'])){	//not logged in
			$this->load->view('header');
			$this->load->view('/user/home');
			$this->load->view('footer');
		}else{
		
			$data = new stdClass();
			
			
			$this->load->helper(array('form','file'));
			$this->load->library('form_validation');
			
			
			
			$this->form_validation->set_rules('name', 'Product Name', 'trim|required|min_length[4]|max_length[90]');
			
			$this->form_validation->set_rules('link', 'Link', 'trim|required|valid_url|min_length[6]');
			
			$this->form_validation->set_rules('about', 'Product Description', 'trim|required|max_length[1000]');
			
			
			
			if ($this->form_validation->run() === false){
				
				// validation not ok, send validation errors to the view
				$this->load->view('header');
				$this->load->view('user/create_product', $data);
				$this->load->view('footer');
				
			}else{
				$config['upload_path']          = './images/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 2048;
				$config['max_width']            = 1024;
				$config['max_height']           = 1024;

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('userfile')){
					$error = array('error' => $this->upload->display_errors());

					$this->load->view('header');
					$this->load->view('/user/create_product', $error);
					$this->load->view('footer');
				}else{
					$data = array('upload_data' => $this->upload->data());
					
					
					// set variables from the form into an array
					$product = array(
					'name' => $this->input->post('name'),
					'owner_id' => $_SESSION['user_id'],
					'category' => $this->input->post('category'),
					'price' => $this->input->post('price'),
					'product_state' => $this->input->post('product_state'),
					'quantity' => $this->input->post('quantity'),
					'product_link' => $this->input->post('link'),
					'product_image' => $this->upload->data('file_name'),
					'description' => $this->input->post('about'),
					);
					
					if ($this->product_model->create_product($product)){
					
					// user creation ok
						$this->load->view('header');
						$this->load->view('user/dashboard', $data);
						$this->load->view('footer');
						
					}else{
						
						// user creation failed, this should never happen
						$data->error = 'There was a problem creating your new account. Please try again.';
						
						// send error to the view
						$this->load->view('header');
						$this->load->view('user/create_product', $data);
						$this->load->view('footer');
					}
					
					$this->load->view('header');
					$this->load->view('/user/dashboard', $data);
					$this->load->view('footer');
				}
							
			}
				
		}
		
	}
	
	public function create_category(){
		
		$data = new stdClass();
		
		if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
			$data->login_as_admin_needed = true;
		} else {
			$data->login_as_admin_needed = false;
		}
	}
	
	public function tests($id){
		// $products = $this->product_model->get_products();
		// foreach ($products as $product){
			// echo($product->name);
			// echo("</br>");
		// }
		$products = $this->product_model->get_user_product($id);
		var_dump($products);
	}

	public function delete_product($product_id){
		$username = $this->user_model->get_username_from_user_id($this->product_model->get_product_seller_id($product_id));
		if ($_SESSION['is_admin'] !== true || !isset($_SESSION['username']) || $username !== $_SESSION['username']){	//not admin not logged in or not the owner of the product
			show_404();
		}else{
			if($this->product_model->delete_product($product_id)){
				redirect('./product/index');
			}
		}
		//echo "Scrupulous".$this->user_model->get_username_from_user_id($this->product_model->get_product_seller_id('2'));
	}

	
	
}
	

?>