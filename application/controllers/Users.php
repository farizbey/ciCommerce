<?php 


/**
* 
*/
class Users extends CI_Controller
{
	
	public function signup() {
		

		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');


		if ($this->form_validation->run() == FALSE) {
			
			$data['main_view'] = 'users/signUp_layout';
			$this->load->view('layouts/main', $data);
		
		} else {

			if ($this->user_model->create_user()) {

				$this->session->set_flashdata('user_registered', 'User has been registered');
				
				redirect('home');	
			
			} else {

			}


		}
	}


	public function signin() {


		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');


		if ($this->form_validation->run() == FALSE) {
			
			$data['main_view'] = 'users/signIn_layout';
			$this->load->view('layouts/main', $data);

		}

		else {

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user_data = $this->user_model->login_user($email, $password);

			if ($user_data) {

				$user_data += ['logged_in' => TRUE];

				$this->session->set_userdata($user_data);

				$this->session->set_flashdata('login_success', 'You are now logged in');

				redirect('home');
			
			} else {

				$this->session->set_flashdata('login_failed', 'Sorry you are not logged in');
				
				redirect('home');
			}
		}
	}

	public function signout() {

		$this->session->sess_destroy();
		redirect('home');
	}
}

?>