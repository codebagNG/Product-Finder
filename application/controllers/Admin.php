<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Admin extends CI_Controller{
	
		public function __construct() {
			
			parent::__construct();
			$this->load->models(array('user_model','product_model','admin_model'));
			
		
		}
		public function index(){
			if (!isset$_SESSION['is_admin'] || $_SESSION['is_admin'] !== true){
				
			}
		}
		public function list_users(){
			
		}
		
		public function delete_user(){
			
		}
		public function delete_product(){
			
		}
		
	}
?>