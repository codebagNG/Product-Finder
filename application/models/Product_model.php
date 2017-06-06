<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product_model extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function create_product($product){
		return $this->db->insert('products', $product);
		
	}
	
	public function get_product_id_from_name($name){
		$this->db->select('id');
		$this->db->from('products');
		$this->db->where('name', $name);

		return $this->db->get()->row('id');
	}
	
	public function get_product_name_from_id($id){
		$this->db->select('name');
		$this->db->from('products');
		$this->db->where('id', $id);

		return $this->db->get()->row('name');
	}
	
	public function get_product($id) {
	
		$this->db->from('users');
		$this->db->where('id', $id);
		return $this->db->get()->row();
		
	}
	
	public function get_products() {
	
		$this->db->from('products');
		return $this->db->get()->result();
		
	}
	
	public function create_category($category){
		return $this->db->insert('categories', $category);
		
	}
	
	public function get_categories(){
		$this->db->from('categories');
		return $this->db->get()->result();
	}
	
	public function get_category($id){
		$this->db->from('categories');
		$this->db->where('id', $id);
		return $this->db->get()->row('category_name');
	}
	
	public function get_products_from($page_start){
		$this->db->from('products');
		$this->db->limit('10', $page_start);
		return $this->db->get()->result();
	}
	
	public function get_total_products(){
		return $this->db->count_all('products');
	}
	
	public function get_product_seller_id($id){
		$this->db->select('owner_id');
		$this->db->from('products');
		$this->db->where('id', $id);

		return $this->db->get()->row('owner_id');
	}
	
	public function delete_product($id){
		$this->db->where('id', $id);
		return $this->db->delete('products');
	}
	
	public function get_user_product($user_id){
		$this->db->from('products');
		$this->db->where('owner_id', $user_id);
		return $this->db->get()->result();
	}
}

?>