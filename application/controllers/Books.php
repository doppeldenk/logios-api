<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Books extends REST_Controller {
	public function index_get()
	{
		$this->load->helper('url');

		$this->load->view('welcome_message');
	}
}
