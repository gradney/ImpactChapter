<?php
	$dbstr = "Testing database connection...\n";
	echo nl2br($dbstr);
	
	/*************************************************
	 * Bitnami WAMPSTACK: MYSQL information, see 
	 * https://wiki.bitnami.com/Components/MySQL 
	 * Configuration file @ 
	 * <install_dir>/mysql/my.ini
	 * 
	 * To connect, see
	 * http://www.codeigniter.com/user_guide/database/connecting.html
	 * - AUTOMATICALLY CONNECT TO A DATABASE -
	 * Step 1) In autoload.php, add 'database' into library array.
	 * Step 2) Set property values in database.php.
	 * Step 3) Query database to confirm connection.
	 * 
	 * - MANUALLY CONNECT TO A DATABASE -
	 * Step 1) define the databasae properties into an array.
	 * Step 2) load the database.
	 * Step 3) query database to confirm connection.
	 *************************************************/

	/** AUTOMATIC DATABASE CONNECTION **********/
	// List the database schemas offered from the database server.
	$query = $this->db->query('SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA;');
	foreach ($query->result() as $row)
	{
		// Convert random object into printable string for display.
		$text = "row: ".print_r($row, TRUE)."\n";
		echo nl2br($text);
	}
		 
	/** MANUAL DATABASE CONNECTION - TODO: Couldn't get this working. *************/
/*	 
	$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => 'NuPa$$word2015',
	'database' => '',
	'dbdriver' => 'mysqli',	// database type
	'dbprefix' => '',
	'port' => '',		// default: 5432
	'schema' => 'public',	// default: public
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,	// Whether to use client compression (MySQL only).
	'stricton' => FALSE,	// Whether to force "Strict Mode" connections, good
							// for ensuring strict SQL while developing app.
	'save_queries' => TRUE,
	'failover' => array()
	);
 
	$this->load->database($dsn);
*/

	/** Connect via Data Source Name. (works!) ********/
	/** TODO: How do we query once connection via DSN successful? ****/
	$dsn = 'mysqli://root:NuPa$$word2015@localhost/test';
	$this->load->database($dsn);	
?>