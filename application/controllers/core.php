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
		$x['data']=$this->main->show_barang();

		$data = array(
			'title' => "Edit Stock"
		);
		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php');
		$this->load->view('dashboard/edit.php',$x);
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

	public function barangkeluar()

	{
		// $edit = $this->input->post('edit');
		// $edit =$kirim;

		$x['data']=$this->main->show_barang();
		

		$xxx['ambil']=$this->main->show_out_stock();

		$view['data'] = $this->main->ambil_data()->result();

		$data = array(
			'title' => "Barang Keluar"
		);
		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php');
		$this->load->view('dashboard/barangkeluar',$x);
		$this->load->view('templates/footer.php');
	}

	function newsave(){
		$id=$this->input->post('id');
		$namaBarang=$this->input->post('namaBarang');
		$asalBarang=$this->input->post('asalBarang');
		$jumlahBarang=$this->input->post('jumlahBarang');
		$stock=$this->input->post('jumlahBarang');


		echo "$asalBarang";
		$this->main->edit_barang($namaBarang,$asalBarang,$jumlahBarang,$stock,$id);
		redirect('core/editstock');
	}

	function out(){


		$this->form_validation->set_rules("ambil", "ambil", "required");


        if ($this->form_validation->run() === true) 
        {  // Cek validasi, return true jika lolos validasi
            
            $data = array(
                'tipeBarang'    => $this->input->post("tipeBarang"),
                'namaBarang'    => $this->input->post("namaBarang"),
                'jumlahBarang'  => $this->input->post("stock"),
                'stock' 	    => $this->input->post("ambil"),
                'tanggalInput'  => $this->input->post("tanggalInput"),

            );


            $id = $this->main->inserthistory($data);
        }



		$id=$this->input->post('id');
		$sisastock=$this->input->post('stock');
		$ambil=$this->input->post('ambil');
		$stock=$sisastock-$ambil;

		$this->main->penguranganstock($stock,$id);
		redirect('core/barangkeluar');
	}

	public function data_barang_keluar()

	{
		$this->form_validation->set_rules("ambil", "ambil", "required");


        if ($this->form_validation->run() === true) 
        {  // Cek validasi, return true jika lolos validasi
            
            $data = array(
                'tipeBarang'    => $this->input->post("tipeBarang"),
                'namaBarang'    => $this->input->post("namaBarang"),
                'jumlahBarang'  => $this->input->post("stock"),
                'stock' 	    => $this->input->post("ambil"),
                'tanggalInput'  => $this->input->post("tanggalInput"),

            );


            $id = $this->main->inserthistory($data);
        }

		$xxx['data']=$this->main->show_out_stock();
		$data = array(
			'title' => "Barang Keluar"
		);
		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php');
		$this->load->view('input/data-stock.php',$xxx);
		$this->load->view('templates/footer.php');
	}

	// public function add_history()

	// {
	// 	$this->form_validation->set_rules("ambil", "ambil", "required");


 //        if ($this->form_validation->run() === true) 
 //        {  // Cek validasi, return true jika lolos validasi
            
 //            $data = array(
 //                'tipeBarang'    => $this->input->post("tipeBarang"),
 //                'namaBarang'    => $this->input->post("namaBarang"),
 //                'jumlahBarang'  => $this->input->post("stock"),
 //                'stock' 	    => $this->input->post("ambil"),
 //                'tanggalInput'  => $this->input->post("tanggalInput"),

 //            );


 //            $id = $this->main->inserthistory($data);
 //        }
 //        redirect('core/data_barang_keluar');

	// }



}
