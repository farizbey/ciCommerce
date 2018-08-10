<?php 


/**
* 
*/
class Home_model extends CI_Model
{
	
	public function get_home_blog()	{

		$this->db->order_by('create_date', 'ASC');

		$query = $this->db->get('blogs_tbl');

		return $query->result();
	}

	public function get_home_collections() {

		$this->db->order_by('create_date', 'ASC');

		$this->db->limit(2);

		$query = $this->db->get('collections_tbl');

		return $query->result();
	}

}


?>