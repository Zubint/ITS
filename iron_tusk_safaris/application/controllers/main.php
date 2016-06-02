<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller
{
		public function __construct()
		{
				parent::__construct();
				$this->load->model('User');
				$this->load->library('form_validation');
				$this->form_validation->set_error_delimiters("<p class='red'>", "</p>");
		}
		public function index()
		{
			$formData = [];
			$formData['all'] = $this->User->getFormData();  //consists of budget & country data for the dropdowns.
			// var_dump($formData);
			// exit;
			$this->load->view('index', $formData);
		}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
