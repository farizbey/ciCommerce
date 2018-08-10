<?php 


/**
* 
*/
class User_model extends CI_Model
{

	public function login_user($email, $password) {

		$this->db->where('member_email', $email);

		$result = $this->db->get('member_tbl');

		$db_password = $result->row(4)->member_password;			

		if (password_verify($password, $db_password)) {

			$data = array(

				'user_id' => $result->row(0)->member_id,
				'first_name' => $result->row(1)->first_name,
				'last_name' => $result->row(2)->last_name,
				'email' => $result->row(3)->member_email
			);

			return $data;

		} else {

			return false;
		}	

	}	

	public function create_user() {
		

		$options = ['cost' => 12];

		$encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

		$data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'member_email' => $this->input->post('email'),
			'member_password' => $encripted_pass
		);
		$this->db->set('create_date', 'NOW()', FALSE);
		$insert_data = $this->db->insert('member_tbl', $data);

		return $insert_data;
	}
}


?>