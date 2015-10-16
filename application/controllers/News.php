<?php
class News extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('url_helper');	// Probably don't need this b/c autoloaded.
	}

	/** Display default 'News' page. **/
	public function index()
	{
		# Set up the data.
		$data['news'] = $this->news_model->get_news();
		$data['title'] = 'News archive';
		
		# View Loader: Load views in order.
		$this->load->view('templates/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer', $data);
	}
	
	/** Display selected 'slug', but show all news by default. **/
	public function view($slug = NULL)
	{
		$data['news_item'] = $this->news_model->get_news($slug);
		
		# Set News title.
		if (empty($data['news_item']))
		{
			show_404();
		}
		$data['title'] = $data['news_item']['title'];
		
		# View 'Specific News' page.
		$this->load->view('templates/header', $data);
		$this->load->view('news/view', $data);
		$this->load->view('templates/footer', $data);		
	}
	
	/** Display 'Create News Item' page. **/
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		
		
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');
		
		# If form is invalid, view 'Create News Item' form;
		# Else, submit new 'News Item', show 'Success' page.
		if ($this->form_validation->run() === FALSE)
		{
			# set data before viewing.
			$data['title'] = 'Create a news item';
			
			# view form.
			$this->load->view('templates/header', $data);
			$this->load->view('news/create', $data);
			$this->load->view('templates/footer', $data);			
		}
		else
		{
			# set data before viewing.
			$data['title'] = $this->input->post('title');
			$data['slug'] = url_title($this->input->post('title'), 'dash', TRUE);
			
			# submit data, view page.
			$this->news_model->set_news();
			$this->load->view('news/success', $data);
		}
	}
}
?>