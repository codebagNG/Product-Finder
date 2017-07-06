<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class User_model extends CI_Model{
		
		public function __construct(){
			parent::__construct();
			
			$this->load->database();
		
		}
		
		public function create_user($username, $email, $password) {
		
			$data = array(
				'username'   => $username,
				'email'      => $email,
				'password'   => $this->hash_password($password),
				'created_at' => date('Y-m-j H:i:s'),
				'is_admin' => '0',
			);
		
			if ($this->db->insert('users', $data)) {
				
				//send confirmation email
				//return $this->send_confirmation_email($username, $email);
				return true;
				
			}
		
		}
		
		public function resolve_user_login($username, $password) {
		
			$this->db->select('password');
			$this->db->from('users');
			$this->db->where('username', $username);
			$hash = $this->db->get()->row('password');
			
			return $this->verify_password_hash($password, $hash);
			
		}

		public function get_user_id_from_username($username) {
		
			$this->db->select('id');
			$this->db->from('users');
			$this->db->where('username', $username);

			return $this->db->get()->row('id');
			
		}

		public function get_username_from_user_id($user_id) {
		
			$this->db->select('username');
			$this->db->from('users');
			$this->db->where('id', $user_id);

			return $this->db->get()->row('username');
			
		}
		
		public function get_name_from_user_id($user_id) {
		
			$this->db->select('name');
			$this->db->from('users');
			$this->db->where('id', $user_id);

			return $this->db->get()->row('name');
			
		}
		
		public function get_user($user_id) {
		
			$this->db->from('users');
			$this->db->where('id', $user_id);
			return $this->db->get()->row();
			
		}
		
		public function get_users() {
		
			$this->db->from('users');
			return $this->db->get()->result();
			
		}
		
		public function update_user($user_id, $update_data){
			$this->db->select('password');
			$this->db->from('users');
			$this->db->where('id', $user_id);
			$hash = $this->db->get()->row('password');
			
			if ($this->verify_password_hash($update_data->password, $hash)){
				$this->db->where('id', $user_id);
				return $this->db->update('users', $update_data);
			}
			return false;
		}

		public function delete_user($id){
            $this->db->where('id', $id);
            return $this->db->delete('users');
        }

        private function hash_password($password) {
		
			return password_hash($password, PASSWORD_BCRYPT);
		
		}
				
		private function verify_password_hash($password, $hash) {
			
			return password_verify($password, $hash);
			
		}
				
		private function send_confirmation_email($username, $email) {
			
			// load email library and url helper
			$this->load->library('email');
			$this->load->helper('url');
			
			// get the site email address
			$email_address = $this->config->item('site_email');
			
			// initialize the email configuration
			$this->email->initialize(array(
				'mailtype' => 'html',
				'charset'  => 'utf-8'
			));
			
			// get user registration date
			$registration_date = $this->db->select('created_at')->from('users')->where('username', $username)->get()->row('created_at');
			
			// create a user email hash with user email and user registration date
			$hash = sha1($email . $registration_date);
			
			// prepare the email
			$this->email->from($email_address, $email_address);
			$this->email->to($email);
			$this->email->subject('Please confirm your email to validate your new user account.');
			$message  = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body>';
			$message .= "Hi " . $username . ",<br><br>";
			$message .= "Please click the link below to confirm your account on " . base_url() . "<br><br>";
			$message .= "Click this link: <a href=\"" . base_url() . "user/email_validation/" . $username . "/" . $hash . "\">Confirm your email and validate your account</a>";
			$message .= "</body></html>";
			$this->email->message($message);
			
			// send the email and return status
			return $this->email->send();
			
		}
		
		
		
	}
?>