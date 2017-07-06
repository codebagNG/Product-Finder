<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->model(array('user_model','product_model'));

	}
	
	public function index($username = false){
		$data = new stdClass();
		

		if ($username == false ){
			if (!isset($_SESSION['username'])){
				//not logged in and wants to check his profile
				show_404();
			}else{
				$data->username = $_SESSION['username'];
			}
		}else{
			$data->username = $username;
		}
		$data->products = $this->product_model->get_user_product($this->user_model->get_user_id_from_username($data->username));
		
		$this->load->view('header2');
		$this->load->view('user/dashboard3', $data);
		$this->load->view('footer2');
	}
	
	public function register(){
		$data = new stdClass();
		
		$this->load->helper('form');
		
		
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|max_length[20]|is_unique[users.username]', array('is_unique' => 'This username already exists. Please choose another one.'));
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');
		
		if ($this->form_validation->run() === false){
			
			// validation not ok, send validation errors to the view
			$this->load->view('header');
			$this->load->view('user/register', $data);
			$this->load->view('footer');
			
		}else{
			
			// set variables from the form
			$username = $this->input->post('username');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			
			if ($this->user_model->create_user($username, $email, $password)){
				
				// user creation ok
				$this->load->view('header');
				$this->load->view('user/reg_success', $data);
				$this->load->view('footer');
				
			}else{
				
				// user creation failed, this should never happen
				$data->error = 'There was a problem creating your new account. Please try again.';
				
				// send error to the view
				$this->load->view('header');
				$this->load->view('user/register', $data);
				$this->load->view('footer');
				
			}
			
		}
	}
	
	public function login(){
		
		$data = new stdClass();
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == false) {
			
			// validation not ok, send validation errors to the view
			$this->load->view('header');
			$this->load->view('user/login');
			$this->load->view('footer');
			
		} else {
			
			// set variables from the form
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			if ($this->user_model->resolve_user_login($username, $password)) {
				
				$user_id = $this->user_model->get_user_id_from_username($username);
				$user    = $this->user_model->get_user($user_id);
				
				// set session user datas
				$_SESSION['user_id']      = (int)$user->id;
				$_SESSION['username']     = (string)$user->username;
				$_SESSION['logged_in']    = (bool)true;
				//$_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
				$_SESSION['is_admin']     = (bool)$user->is_admin;
				
				// user login ok
				// $this->load->view('header');
				// $this->load->view('user/dashboard', $data);
				// $this->load->view('footer');
				redirect('./product/index');
				
			} else {
				
				// login failed
				$data->error = 'Wrong username or password.';
				
				// send error to the view
				$this->load->view('header');
				$this->load->view('user/login', $data);
				$this->load->view('footer');
				
			}
			
		}
	}
	
	public function logout(){
		// create the data object
		$data = new stdClass();
		
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
			
			// user logout ok
			$this->load->view('header');
			$this->load->view('user/dashboard', $data);
			$this->load->view('footer');
			
		} else {
			
			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('home');
			
		}
		
	}
	
	public function tests($id){
		// $this->load->view('header');
		// $this->load->view('user/create_product');
		// $this->load->view('footer');
		echo $id;
	}
	
	public function edit_profile(){
		// create the data object
		$data = new stdClass();
		
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			
			$this->load->helper('form');
		
			
			$this->form_validation->set_rules('name', 'Name', 'trim|required|alpha_numeric_spaces|min_length[4]|max_length[40]');
			$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|max_length[20]');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
			
			
			if ($this->form_validation->run() === false){
				
				$user = $this->user_model->get_user($_SESSION['user_id']);
				// echo($user->username);
				$data->name = $user->name;
				$data->username = $user->username;
				$data->email = $user->email;
				
				$this->load->view('header');
				$this->load->view('user/edit_profile', $data);
				$this->load->view('footer');
			}else{
				$username = $this->input->post('username');
				$email = $this->input->post('email');
				$name = $this->input->post('name');
			//  ### TODO: check if user changed his username or email
				
				
			
			
			
			}
		}else{
			show_404();
		}
	
		
	}

    public function show_error($error){
        $data = new stdClass();

        $data->error = str_replace("%20", " ", $error);
        $data->title = "Error";

        $this->load->view('header',$data);
        $this->load->view('/errors/error_page',$data);
        $this->load->view('footer');
    }
	
	
}