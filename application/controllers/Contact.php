<?php 

/**
* 
*/
class Contact extends CI_Controller
{
	
	public function index() {
		
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('message', 'Message', 'trim|required|min_length[3]');


		if ($this->form_validation->run() == FALSE) {
			
			$data['main_view'] = 'contact/contact_layout';
			$this->load->view('layouts/main', $data);
		
		} else {

			$data = array(

			'contact_name' => $this->input->post('name'),
			'contact_email' => $this->input->post('email'),
			'contact_subject' => $this->input->post('subject'),
			'contact_message' => $this->input->post('message'),
			'ip_address' => $this->input->ip_address(),

			);	
			
			$this->db->set('create_date', 'NOW()', FALSE);
			if($this->contact_model->send_contact($data)) {
				
				$this->session->set_flashdata('web_contact', 'Your message has been sent');
				redirect('home');	
			
			} else {

			
			}

			
		}
	}
}


?>