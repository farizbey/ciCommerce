<?php 

/**
* 
*/
class Home extends CI_Controller
{

	// public function __construct() {
	// parent::__construct();

	// 	if(isset($this->session->cart)) {
	// 		if(!$this->utility_model->isarrayempty($this->session->cart)) {
				
	// 			$data['cart'] =  $this->shoppingcart_model->getTotalQty();
	// 		}
	// 		else {
	// 			echo "0";
	// 		}
	// 	}
	// 	else {
	// 		echo "0";
	// 	}
	// }
	
	public function index() {

		$data['sql'] = $this->home_model->get_home_blog();
		$data['sql2'] = $this->home_model->get_home_collections();

		$data['main_view'] = "home/home_layout";

		$this->load->view('layouts/main', $data);

	}
}

?>