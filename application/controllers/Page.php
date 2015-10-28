<?php
    class Page extends CI_Controller {
    	
		public function index()
		{
			$this->load->view('pages/home');
		}
		
		/* View 'Home' page by default. */
		public function view($page = 'home')
		{
			
			# Show error if page does not exist.
			if (!file_exists(APPPATH.'/views/pages/'.$page.'.php'))
			{
				# Whoops, we don't have a page for that!
				show_404();
			}
			
			# DataMapping: Map page's value to key 'title'.
			$data['title'] = ucfirst($page); // Capitalize the first letter.
			
			# View Loader: Load views in order including the selected page.
			$this->load->view('templates/head', $data);
			$this->load->view('css/styles', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('js/scripts', $data);
			$this->load->view('templates/feet', $data);
			$this->load->view('templates/end', $data);
		}
    }
?>