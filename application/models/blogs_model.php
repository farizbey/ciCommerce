<?php 

/**
* 
*/
class Blogs_model extends CI_Model
{
	
	public function get_numrows() {

		$this->db->order_by('create_date', 'DESC');

		$query = $this->db->get('blogs_tbl');

		return $query->num_rows();		
	}

	public function get_blogs_data() {

		$this->db->order_by('create_date', 'DESC');

		$query = $this->db->get('blogs_tbl');

		return $query->result();

	}

	public function get_blog($id) {

		$this->db->where('blog_id', $id);
		
		$query = $this->db->get('blogs_tbl');	

		return $query->row();
	}

	public function get_blogcomment($id) {

		$this->db->order_by('create_date', 'DESC');
		
		$this->db->where('comment_blog_id', $id);
		
		$query = $this->db->get('comment_tbl');

		return $query->result();
	}

	public function get_blogcommentcode($id) {

		$this->db->order_by('comment_tbl.create_date', 'DESC');
		
		$this->db->where('comment_tbl.comment_blog_id', $id);
		
		$query = $this->db->get('comment_tbl');

		// $row = $query->row();
		// $axl = $query->row();

		// foreach ($axl as $row) {
	 	// return $row->code;

		// }
		return $query->result();

	}

	public function get_blogchildcomment($id) {
		
		// $this->db->where('comment_blog_id', $id);
		
		// $query = $this->db->get('comment_tbl')->row();

		// // $sack = $query->result();

		// $code = $query->code;

		// $this->db->where('par_code', $code);

		// $query2 = $this->db->get('child_comment_tbl');

		// return $query2->result();



		$this->db->order_by('comment_tbl.create_date', 'DESC');
		
		$this->db->where('comment_tbl.comment_blog_id', $id);
		
		$query = $this->db->get('comment_tbl');

		// $row = $query->row();

		foreach ($query->result() as $row) {
	        $code =  $row->code;

	        $this->db->select('*');

			$this->db->from('child_comment_tbl');

			// $this->db->join('comment_tbl', 'comment_tbl.code = child_comment_tbl.par_code');

			// $this->db->where('comment_tbl.comment_blog_id', 1);
			// $this->get_blogcommentcode;

			$this->db->where('child_comment_tbl.par_code', $code);

			$query2 = $this->db->get();

			return $query2->result();

		}
	}

	public function get_blogchildcommentnumrows($code) {
		
		// $this->db->where('comment_blog_id', $id);
		
		// $query = $this->db->get('comment_tbl')->row();

		// $query->result();

		// $code = $query->code;


		// $this->db->order_by('create_date', 'DESC');
		
		// $this->db->where('comment_blog_id', $id);
		
		// $query = $this->db->get('comment_tbl');

		// $query = $query->result();

		// foreach ($query as $key) {
		// 	$code = $key->code;

		// 	$this->db->where('par_code', $code);

		// 	$query2 = $this->db->get('child_comment_tbl');

			
		// }
		// return $query2->num_rows();





		// $this->db->order_by('create_date', 'DESC');
		
		// $this->db->where('comment_blog_id', $id);
		
		// $query = $this->db->get('comment_tbl');

		// // $row = $query->row();

		// foreach ($query->result() as $row) {
	 //        $code =  $row->code;

	 //        $this->db->select('*');

		// 	$this->db->from('child_comment_tbl');

		// 	// $this->db->join('comment_tbl', 'comment_tbl.code = child_comment_tbl.par_code');

		// 	// $this->db->where('comment_tbl.comment_blog_id', 1);
		// 	// $this->get_blogcommentcode;

		// 	$this->db->where('par_code', $code);

		// 	$query2 = $this->db->get();

		// 	return $query2->num_rows();

		// }




		// $this->db->select('*');


		// $this->db->select('child_comment_tbl.comment_blog_id as cc_id', 'child_comment_tbl.create_date as cc_date', 'child_comment_tbl.par_code', 'comment_tbl.code');


		// $this->db->from('child_comment_tbl');

		// $this->db->join('comment_tbl', 'comment_tbl.comment_blog_id = "$id"');



		// foreach ($this->get_blogcommentcode($id) as $row) {
	 //        $code =  $row->code;

	 //        $this->db->order_by('child_comment_tbl.create_date', 'DESC');
		
		// 	$this->db->where('child_comment_tbl.par_code', $code);

		// 	$query = $this->db->get();

		// 	return $query->num_rows();


		
			// $query = $this->db->get('child_comment_tbl');
			// $this->db->where('child_comment_tbl.par_code', 'comment_tbl.code');

			// $query = $this->db->get();

			// return $query->num_rows();
		// }

		// $codex = array();
		// $codex = $code;


		// $this->db->select('*');

		// $this->db->from('child_comment_tbl');

		// $codex = $this->get_blogcommentcode($id);
		// return $codex;
		// $code = array();
		// if (!empty($this->get_blogcommentcode($id)) && $this->get_blogcommentcode($id) != NULL) {
		// 	foreach ($this->get_blogcommentcode($id) as $row) :

			// foreach ($codex as $row) {
		        // $code =  $row->code;

		 //        $this->db->order_by('child_comment_tbl.create_date', 'DESC');
				
		        // $this->db->where('comment_tbl.comment_blog_id', $id);
		        // $options = array('par_code' => $code);

				// $query = $this->db->get_where('child_comment_tbl', array('child_comment_tbl.par_code' => $code['code']));
			
				// $query = $this->db->get('child_comment_tbl');


			// 	// $this->db->where('par_code', $code);
		
			// 	// $query2 = $this->db->get();

				// return $query->num_rows();

				// return $code;

				// return $codex;
			// endforeach;
		// }

		// $result = array();

		$this->db->order_by('create_date', 'DESC');

		return $this->db->get_where('child_comment_tbl', array('par_code' => $code))->result();





		// $this->db->where('par_code', $code);

		// $query = $this->db->get('child_comment_tbl');
		// // var_dump($query);
		// $result = $query->num_rows();

		// return $result; //$query->num_rows();






	}
}


?>