<?php
class Events_model extends CI_Model {
	
	public function __construct() {
		$this->load->database();	// makes available $this->db.
	}
	
	/** Get Events by username. **/
	public function get_events($username = FALSE) {
		
		if ($username === FALSE) {
			log_message('error', 'ERROR: No user provided and, thus, no events returned!');
			return false;
		}
		
		$query = $this->db->get_where('events', array('username'=> $username));
		return $query->row_array();
	}
	
	/** Create new 'Event' record for user. **/
	public function add()
	{
		# Store key-values into 'data' array.
		$data = array(
			'event' => $this->input->post('event'),
			'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname')
		);

		# Show error if array key missing.
		if (!array_key_exists('firstname', $data)) { return "Missing 'First Name' Key: ".$data->firstname; }
		if (!array_key_exists('lastname', $data)) { return "Missing 'Last Name' Key: ".$data->lastname; }
		if (!array_key_exists('event', $data)) { return "Missing 'Event' Key: ".$data->event; }

		# Show error if array key or value is missing.
		foreach ($data as $key => $value) {
			# missing key?
			if (!array_key_exists($key, $data)) { return "Missing key: ".$key; }
			# missing value?
			if (!isset($value)) { return "Data array[".$key."] missing value (".$value.")"; }
		}

		return $this->db->insert('events', $data);
	}

} //end class
?>