<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Admin extends CI_Controller{
	
		public function __construct() {
			
			parent::__construct();
			$this->load->model(array('user_model','product_model'));
            $this->load->library(array('session'));
			
		
		}
		public function index(){
			if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true){
			    show_404();

			}

		}



		public function list_users(){
			$data = new stdClass();


			if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true){
                show_404();

            }
            $data->users = $this->user_model->get_users();
            $data->title = 'Users';
            $this->load->view('header2',$data);
            $this->load->view('/user/users',$data);
            $this->load->view('footer2');


			
		}
		
		public function delete_user($id = false){
            if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true){
                show_404();
            }else{
                if ($id === false || $this->user_model->get_user($id) == null){
                    $data->error = "User not found";
                    $data->title = "Delete User";
                    $this->load->view('header2',$data);
                    $this->load->view('/errors/error_page',$data);
                    $this->load->view('footer2');
                }else{
                    if ($this->user_model->delete_user($id)){
                        redirect('./admin/index');
                    }
                }
            }
		}

		public function delete_product($id = false){
            if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true){
                show_404();
            }else{

                if ($id === false || $this->product_model->get_product($id) == null){
                    $error = "Product not found";
                    redirect('./user/error'.$error );
                }else{
                    if ($this->product_model->delete_product($id)){
                        redirect('./admin/index');
                    }
                }
            }
		}

		public function create_category($category = false){
            if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true){
                if ($category === false){

                }
            }


        }

        public function create_admin(){

        }

        public function edit_category(){

        }

        public function delete_category(){

        }

        public function test(){
            $error = "Hello Hi";
            redirect('./user/show_error/'.$error);
        }
		
	}
?>