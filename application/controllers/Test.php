<?php
    class Test extends CI_Controller {
    	
		public function index()
		{
			echo "Hello, what are you trying to test? ;-)";
		}
		
		public function connect_db($page = 'testdbconnection')
		{	
			// Show error if page does not exist.
			if (!file_exists(APPPATH.'/views/tests/'.$page.'.php'))
			{
				// Whoops, we don't have a page for that!
				show_404();
			}
			//view($page);
			
			// DataMapping: Map page's value to key 'title'.
			$data['title'] = ucfirst($page); // Capitalize the first letter.
			
			// View Loader: Load views in order.
			$this->load->view('templates/header', $data);
			$this->load->view('tests/'.$page, $data);
			$this->load->view('templates/footer', $data);			
		}
		
		public function simple_connect_db($page = 'testsimpledbconnection')
		{	
			// Show error if page does not exist.
			if (!file_exists(APPPATH.'/views/tests/'.$page.'.php'))
			{
				// Whoops, we don't have a page for that!
				show_404();
			}
			//view($page);
			
			// DataMapping: Map page's value to key 'title'.
			$data['title'] = ucfirst($page); // Capitalize the first letter.
			
			// View Loader: Load views in order.
			$this->load->view('templates/header', $data);
			$this->load->view('tests/'.$page, $data);
			$this->load->view('templates/footer', $data);			
		}
		
		function view($testpage)
		{
			// DataMapping: Map page's value to key 'title'.
			$data['title'] = ucfirst($testpage); // Capitalize the first letter.
			
			// View Loader: Load views in order.
			$this->load->view('templates/header', $data);
			$this->load->view('tests/'.$testpage, $data);
			$this->load->view('templates/footer', $data);			
		}
    }
?>