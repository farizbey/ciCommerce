<?php 

/**
* 
*/
class Blogs extends CI_Controller
{
	
	public function index() {
		
		$data['num_rows'] = $this->blogs_model->get_numrows();

		$data['results'] = $this->blogs_model->get_blogs_data();


		$data['main_view'] = 'blogs/blog_layout';

		$this->load->view('layouts/main', $data);
	}

	public function display($blog_id) {

		$data['result'] = $this->blogs_model->get_blog($blog_id);
		
		$data['sql2'] = $this->blogs_model->get_blogcomment($blog_id);

		
		$data['code'] = $this->blogs_model->get_blogcommentcode($blog_id);

		foreach ($data['code'] as $codex) {

			$code = $codex->code;

			$data['chi_count'] = $this->blogs_model->get_blogchildcommentnumrows($code);

		}

		

		$data['chi_result'] = $this->blogs_model->get_blogchildcomment($blog_id);

		$data['main_view'] = "blogs/blogDetail_layout";

		$this->load->view('layouts/main', $data);
	}
}


?>