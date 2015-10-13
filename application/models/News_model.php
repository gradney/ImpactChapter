<?php
class News_model extends CI_Model {
	
	public function __construct() {
		$this->load->database();	//makes available $this->db.
	}
	
	/** Get all news records, or get a news item by its slug. **/
	public function get_news($slug = FALSE) {
		
		if ($slug === FALSE) {
			$query = $this->db->get('news');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('news', array('slug'=> $slug));
		return $query->row_array();
	}
}
?>