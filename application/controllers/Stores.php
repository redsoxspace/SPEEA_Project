<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stores extends CI_Controller {

	public function shop()
	{
		$this->load->view('header/header');
		$this->load->view('Store/shop');
	}


	//Temporary function. Once the products database is finalized, we can eliminate this.
	public function new_product()
	{

		//Inputs the new product into the store
		$products = array(
		"product_name" => $this->input->post('product_name'),
		"price" => $this->input->post('price'),
		"description" => $this->input->post('description'),
		"created_at" => "NOW()",
		"updated_at" => "NOW()");

		$this->db->insert('products', $products);

		// Go back to the shop
		redirect(base_url('shop'));
	}

	public function kaufen(){
		
		//create array to store products in the shopping cart
			$shopping_cart = array(
			'id' => $_POST['id'],
			'product_name' => $_POST['product_name'],
			'price' => $_POST['price']
			);

		//put the product information into the session
			$this->session->set_userdata($shopping_cart);

		//load the page where you buy your products via Stripe
		redirect(base_url('buy'));
	}

	public function buy()
	{
		$this->load->view('header/header');
		$this->load->view('Store/buy');
	}
}
?>