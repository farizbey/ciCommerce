<?php 

/**
* 
*/
class Collections extends CI_Controller
{
	
	public function index() {
		
		$data['num_rows'] = $this->collections_model->get_numrows();

		$data['results'] = $this->collections_model->get_collections_data();


		$data['main_view'] = 'collections/collections_layout';

		$this->load->view('layouts/main', $data);
	}

	public function display($collection_id) {

		$data['result'] = $this->collections_model->get_collection($collection_id);

		$data['main_view'] = "collections/collectionsDetail_layout";

		$this->load->view('layouts/main', $data);
	}
}



?>