<?php
class App extends CI_Controller
{
	public function index()
	{
		$this->load->helper('url');

		# DataMapping: Map page's value to key 'title'.
		$data['title'] = 'App';

		# View Loader: Load views in order including the selected page.
//			$this->load->view('header', $data);
		$this->load->view('test/app', $data);
//			$this->load->view('footer', $data);
	}
}
?>