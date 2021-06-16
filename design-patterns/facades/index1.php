<?php

/**
*	1. Add product to cart.
*	2. Calculate shipping charge.
*	3. Calculate discount.
*	4. Generate order.
*
*	In order to complete the simple checkout process 
*	if we use the code below repeatedly, it grows complex
*	To reduce this we use facades. 
*/
$productID = $_GET['productId'];
$qtyCheck = new productQty();
 
if( $qtyCheck->checkQty( $productID ) > 0 ) {

	// Add Product to Cart
	$addToCart = new addToCart($productID);

	// Calculate Shipping Charge
	$shipping = new shippingCharge();
	$shipping->updateCharge();

	// Calculate Discount Based on 
	$discount = new discount();
	$discount->applyDiscount();

	$order = new order();
	$order->generateOrder();
}


/**
*	Facades are custom raw code snippets wrapped 
*	in a class to reduce complexity of redundant code 
*	if we put above code inside a facade and then use it
*	it reduces complexity of code.
*/
class productOrderFacade {
         
    public $productID = '';
     
    public function __construct($pID) {
        $this->productID = $pID;
    }
     
    public function generateOrder() {
         
        if($this->qtyCheck()) {
             
            // Add Product to Cart
            $this->addToCart();
             
            // Calculate Shipping Charge
            $this->calulateShipping();
             
            // Calculate Discount if any
            $this->applyDiscount();
             
            // Place and confirm Order
            $this->placeOrder();
             
        }
         
    }
     
    private function addToCart () {
        /* .. add product to cart ..  */
    }
     
    private function qtyCheck() {
         
        $qty = 'get product quantity from database';
         
        if($qty > 0) {
            return true;
        } else {
            return true;
        }
    }
     
     
    private function calulateShipping() {
        $shipping = new shippingCharge();
        $shipping->calculateCharge();
    }
     
    private function applyDiscount() {
        $discount = new discount();
        $discount->applyDiscount();
    }
     
    private function placeOrder() {
        $order = new order();
        $order->generateOrder();
    }

}


// Note: We should not use direct get values for Database queries to prevent SQL injection
$productID = $_GET['productId'];
 
// Just 2 lines of code in all places, instead of a lengthy process everywhere
$order = new productOrderFacade($productID);
$order->generateOrder();