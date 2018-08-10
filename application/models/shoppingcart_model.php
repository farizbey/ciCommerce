<?php 


/**
* 
*/
class Shoppingcart_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();

		if (!isset($this->session->cart)) 
		{
			$this->session->cart = array();
		}	
	}

	public function getTotalQty()
	{
		$total = 0;

		for ($i=0; $i<=count($this->session->cart)-1; $i++) 
		{ 
			# code...
			$total = $total + $this->session->cart[$i]["qty"];
		}
		return $total;
	}

	function clearCart()
	{
		$_SESSION["cart"]=array();
	}
}

?>