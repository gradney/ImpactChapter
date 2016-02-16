<?php

    class Form extends CI_Controller {

    	private $form = "signup";
    	
		public function __construct()
		{
			parent::__construct();
			$this->load->model('accounts_model');
			$this->load->model('events_model');
		}

		/** Display default form. **/
		public function index()
		{
			# Show error if page does not exist.
			if (!file_exists(APPPATH.'/views/form/'.$this->form.'.php'))
			{
				# Whoops, we don't have a page for that!
				show_404();
			}
			
			# DataMapping: Map page's value to key 'title'.
			$data['title'] = ucfirst($this->form); // Capitalize the first letter.
			
			# View Loader: Load views in order including the selected page.
			$this->load->view('header', $data);
			// FIX: According to page displayed, the menu should display menu item active highlight.
			$this->load->view('menu', $data);
			$this->load->view('form/'.$this->form, $data);
			$this->load->view('footer', $data);
		}

		/** Process form action. **/
		public function process($action = 'createaccount')
		{
			# Force case sensitivity on parameter value for security purposes.
			# If commented, then forcing hacker to know case value.
			//$action = strtolower($action);

			# Create User Account (New User)
			if (strcmp($action, 'createaccount') == 0) { $this->createAccount(); } 
			
			# Create Conference Registration for User
			if (strcmp($action, 'registerforevent') == 0) { $this->registerForEvent(); }

			# Show error 
			return show_error('Unable to process your request, sorry buddy.'.$action);
		}

		protected function createAccount()
		{
				# Set appropriate response page.
				$this->form = 'confirmation';

				# Submit data, show confirmation.
				$result = $this->accounts_model->add(); // Result is 1 (success) or an error message.
				$data['confirmation_message'] = ($result == 1) 
							? 'Congratulations, your account is added!'
							: $result;

				# DataMapping: Map page's value to key 'title'.
				$data['title'] = ucfirst($this->form); // Capitalize the first letter.
				$data['username'] = $this->input->post('username');
				$data['firstname'] = $this->input->post('firstname');
				$data['lastname'] = $this->input->post('lastname');
				
				# View Loader: Load views in order including the selected page.
				$this->load->view('header', $data);
				$this->load->view('menu', $data);
				$this->load->view('form/'.$this->form, $data);
				$this->load->view('footer', $data);			
		}

		protected function registerForEvent()
		{
				# Set appropriate response page.
				$this->form = 'confirmation';

				# Submit data, show confirmation.
				$result = $this->events_model->register(); // Result is 1 (success) or an error message.
				$data['confirmation_message'] = ($result == 1) 
							? 'Congratulations, you are registered for the event!'
							: $result;

				# DataMapping: Map page's value to key 'title'.
				$data['title'] = ucfirst($this->form); // Capitalize the first letter.
				$data['event'] = $this->input->post('event');
				$data['firstname'] = $this->input->post('firstname');
				$data['lastname'] = $this->input->post('lastname');
				
				# View Loader: Load views in order including the selected page.
				$this->load->view('header', $data);
				$this->load->view('menu', $data);
				$this->load->view('form/'.$this->form, $data);
				$this->load->view('footer', $data);			
		}

    } //end class
?>