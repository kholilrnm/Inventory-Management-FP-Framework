<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class core extends CI_Controller {

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

	  function __construct() {
	      parent::__construct();
	      $this->load->helper('url');
	  }

	public function index()
	{
		$data = array(
			'title' => "Login Dashboard"
		);
		 $this->load->view('login', $data);

	}

	public function dashboard()
	{
		$data = array(
			'title' => "Dashboard Admin"
		);
		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php');
		$this->load->view('dashboard/dashboard.php');
		$this->load->view('templates/footer.php');
	
	}

	public function viewStockItems()
	{
		$data = array(
			'title' => "Stock Items"
		);
		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php');
		$this->load->view('dashboard/viewStockItems.php');
		$this->load->view('templates/footer.php');
	}



}
