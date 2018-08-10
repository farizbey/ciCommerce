<?php 

/**
* 
*/
class Collections_model extends CI_Model
{
	
	public function get_numrows() {

		$this->db->order_by('create_date', 'DESC');

		$query = $this->db->get('collections_tbl');

		return $query->num_rows();		
	}

	public function get_collections_data() {

		$this->db->order_by('create_date', 'DESC');

		$query = $this->db->get('collections_tbl');

		return $query->result();
	}

	public function get_collection($id) {

		$this->db->where('collections_id', $id);
		
		$query = $this->db->get('collections_tbl');	

		return $query->row();
	}
}

?>