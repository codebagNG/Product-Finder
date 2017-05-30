<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library(array('session'));
	}
	
	public function index(){
		
			$this->load->view('header2');
			$this->load->view('/user/dashboard2');
			$this->load->view('footer2');
		
		
		
	}
}

?>