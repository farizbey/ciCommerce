<?php 

/**
 * 
 */
class ShoppingCart extends CI_Controller
{
	
	public function index()
	{
		$data['cart'] = $this->utility_model->isarrayempty($carts);
	}
}

?>