<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class frontend_cart_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the session library
        $this->load->library('session');
        // Optionally, load the product model if you want to get product details from the database
        $this->load->model('Product');
    }

    public function add($product_id) {
        // Assuming you have a Product model that gets product details by product_id
        $product = $this->Product->get_product_by_id($product_id);

        if ($product) {
            $cart = $this->session->userdata('cart');

            // If cart doesn't exist, initialize it as an empty array
            if (!$cart) {
                $cart = array();
            }

            // Check if product is already in the cart
            if (isset($cart[$product_id])) {
                // If product already exists, increment quantity
                $cart[$product_id]['quantity']++;
            } else {
                // Add product to cart
                $cart[$product_id] = array(
                    'product_id' => $product_id,
                    'name' => $product['name'],
                    'price' => $product['price'],
                    'quantity' => 1
                );
            }

            // Save the cart back to session
            $this->session->set_userdata('cart', $cart);

            // Redirect or show success message
            redirect('cart/view');
        } else {
            // Product doesn't exist, handle error
            echo "Product not found!";
        }
    }

    public function view() {
        // Get the cart data from session
        $cart = $this->session->userdata('cart');

        // Load the cart view and pass cart data
        $this->load->view('cart/view', compact('cart'));
    }

    public function remove($product_id) {
        $cart = $this->session->userdata('cart');

        if (isset($cart[$product_id])) {
            unset($cart[$product_id]);
            $this->session->set_userdata('cart', $cart);
        }

        // Redirect to cart view
        redirect('cart/view');
    }

    public function update_quantity($product_id, $quantity) {
        $cart = $this->session->userdata('cart');

        if (isset($cart[$product_id])) {
            $cart[$product_id]['quantity'] = $quantity;
            $this->session->set_userdata('cart', $cart);
        }

        // Redirect to cart view
        redirect(base_url('cart'));
    }
}
