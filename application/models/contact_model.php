<?php 


/**
* 
*/
class Contact_model extends CI_Model
{
	
	public function send_contact($data) {
		
		$insert_query = $this->db->insert('contact_tbl', $data);

		return $insert_query;
	}
}



?>