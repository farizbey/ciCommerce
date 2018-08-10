<?php 

/**
* 
*/
class Profile extends CI_Controller
{
	public function index() {
		$data['main_view'] = "profile/profile_layout";

		$this->load->view('layouts/main', $data);
	}
}

?>