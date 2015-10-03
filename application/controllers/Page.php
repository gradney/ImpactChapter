<?php
    class Page extends CI_Controller {
    	
		public function index()
		{
			$this->load->view('pages/home');
		}
		
		/* View 'Home' page. */
		public function view($page = 'home')
		{
			
			// Show error if page does not exist.
			if (!file_exists(APPPATH.'/views/pages/'.$page.'.php'))
			{
				// Whoops, we don't have a page for that!
				show_404();
			}
			
			// DataMapping: Map page's value to key 'title'.
			$data['title'] = ucfirst($page); // Capitalize the first letter.
			
			// View Loader: Load views in order.
			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer', $data);
		}

		// /* View 'News' page. */		
		// public function view($page = 'news')
		// {
// 			
		// }
    }
?>