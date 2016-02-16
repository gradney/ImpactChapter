<?php
class Accounts_model extends CI_Model {
	
	public function __construct() {
		$this->load->database();	// makes available $this->db.
	}
	
	/** Get User Account by username. **/
	public function get_account($username = FALSE) {
		
		if ($username === FALSE) {
			log_message('error', 'ERROR: Someone tried to access the accounts!');
			return false;
		}
		
		$query = $this->db->get_where('accounts', array('username'=> $username));
		return $query->row_array();
	}
	
	/** Create new 'Account' record for new user. **/
	public function add()
	{
		# Store key-values into 'data' array.
		$data = array(
			'username' => $this->cleanUserName($this->input->post('username')),
			'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname')
		);

		# Show error if array key missing.
		if (!array_key_exists('firstname', $data)) { return "Missing 'First Name' Key: ".$data->firstname; }
		if (!array_key_exists('lastname', $data)) { return "Missing 'Last Name' Key: ".$data->lastname; }
		if (!array_key_exists('username', $data)) { return "Missing 'Username' Key: ".$data->username; }

		# Show error if array key or value is missing.
		foreach ($data as $key => $value) {
			# missing key?
			if (!array_key_exists($key, $data)) { return "Missing key: ".$key; }
			# missing value?
			if (!isset($value)) { return "Data array[".$key."] missing value (".$value.")"; }
		}

		return $this->db->insert('accounts', $data);
	}

	/** Clean username value as lowercase, alphanumeric only. **/
	protected function cleanUserName($string)
	{
    	$string = strtolower($string);
    	$string = preg_replace('[^a-z0-9]', '', $string);
    	log_message('info', 'DB Cleaned String: '.$string);
		return $string;
	}
} //end class
?>