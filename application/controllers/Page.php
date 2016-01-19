<?php

/**REDIRECT URL
 * To get this stupid redirect server working, I had to play with the .htaccess file.
 * I used a combination of 
 * http://stackoverflow.com/questions/19183311/codeigniter-removing-index-php-from-url (file content)
 * and
 * http://stackoverflow.com/questions/19183311/codeigniter-removing-index-php-from-url (where to place file)
 * CodeIgniter site was useless.
 * I'm still interested in details: http://httpd.apache.org/docs/2.2/howto/htaccess.html
 */

    class Page extends CI_Controller {
    	
		public function index()
		{
			$this->view();
		}

		/* View 'Home' page by default. */
		public function view($page = 'home')
		{
			
			# Show error if page does not exist.
			if (!file_exists(APPPATH.'/views/page/'.$page.'.php'))
			{
				# Whoops, we don't have a page for that!
				show_404();
			}
			
			# DataMapping: Map page's value to key 'title'.
			$data['title'] = ucfirst($page); // Capitalize the first letter.
			
			# View Loader: Load views in order including the selected page.
			$this->load->view('header', $data);
			// FIX: According to page displayed, the menu should display menu item active highlight.
			$this->load->view('menu', $data);
			$this->load->view('page/'.$page, $data);
			$this->load->view('footer', $data);
		}
    }
?>