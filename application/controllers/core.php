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
	      $this->load->model('main');
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

	public function data_input()
	{
		$data = array(
			'title' => "Data Input"
		);
		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php');
		$this->load->view('input/data-input.php');
		$this->load->view('templates/footer.php');
	}

	public function history()
	{

		$view['data'] = $this->main->ambil_data()->result();
		// $this->load->view('v_user.php',$data);

		$data = array(
			'title' => "Stock Items"
		);
		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php');
		$this->load->view('dashboard/history.php',$view);
		$this->load->view('templates/footer.php');
	}

	public function stock()
	{
		$data = array(
			'title' => "Stock Furniture"
		);
		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php');
		$this->load->view('dashboard/stock.php');
		$this->load->view('templates/footer.php');
	}

	public function editstock()
	{
		$view['data'] = $this->main->ambil_data()->result();

		$data = array(
			'title' => "Edit Stock"
		);
		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php');
		$this->load->view('dashboard/edit.php',$view);
		$this->load->view('templates/footer.php');
	}

	public function data_edit()

	{
		// $edit = $this->input->post('edit');
		// $edit =$kirim;

		
		$view['data'] = $this->main->ambil_data()->result();

		$data = array(
			'title' => "Edit Stock"
		);
		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php');
		$this->load->view('input/data-edit.php',$view);
		$this->load->view('templates/footer.php');
	}




}
