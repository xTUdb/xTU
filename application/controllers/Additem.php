<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Additem extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('ion_auth', 'form_validation'));
		if (!$this->ion_auth->logged_in())
		{
			redirect('/login');
		}
		else{
			$this->load->view('templates/header');
			$this->load->view('additem');
			$this->load->view('templates/footer');
			$this->load->model('Additem');
		}
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('additem');
		$this->load->view('templates/footer');
	}

	public function post_item() {
		$name = $this->input->post('restuarant_name');
	}
}
