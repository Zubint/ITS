<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller
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
			//no index action
		}

		public function processEnquiry()
		{
				//at this point you'll have access to CI session information

				var_dump($this->input->post());
		}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
