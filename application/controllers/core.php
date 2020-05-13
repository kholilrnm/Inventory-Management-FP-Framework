<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class core extends CI_Controller {

	  function __construct() {
	      parent::__construct();
	      $this->load->helper('url');
	      $this->load->model('main');
	      $this->load->model('grafikBarang/januari');
	      $this->load->model('grafikBarang/februari');
	      $this->load->model('grafikBarang/maret');
	      $this->load->model('grafikBarang/april');
	      $this->load->model('grafikBarang/mei');
	      $this->load->model('grafikBarang/juni');
	      $this->load->model('grafikBarang/juli');
	      $this->load->model('grafikBarang/agustus');
	      $this->load->model('grafikBarang/september');
	      $this->load->model('grafikBarang/oktober');
	      $this->load->model('grafikBarang/november');
	      $this->load->model('grafikBarang/desember');

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
			'title' 				=> "Dashboard Admin",
			'total_stock' 			=> $this->main->hitung_totalStock(), // total stock
			'curr_stock' 			=> $this->main->hitung_currStock(), // current types stock
			'new_stock' 			=> $this->main->new_stock(), // today stock (stock baru)
			'out_stock' 			=> $this->main->out_stock(), // today stock (stock keluar)
			'suppliers'				=> $this->main->check_supplier(),
			'calc_mejaJanuari' 		=> $this->januari->calc_mejaJanuari($meja="Meja"),
			'calc_mejaFebruari' 	=> $this->februari->calc_mejaFebruari($meja="Meja"),
			'calc_mejaMaret' 		=> $this->maret->calc_mejaMaret($meja="Meja"),
			'calc_mejaApril' 		=> $this->april->calc_mejaApril($meja="Meja"),
			'calc_mejaMei' 			=> $this->mei->calc_mejaMei($meja="Meja"),
			'calc_mejaJuni' 		=> $this->juni->calc_mejaJuni($meja="Meja"),
			'calc_mejaJuli' 		=> $this->juli->calc_mejaJuli($meja="Meja"),
			'calc_mejaAgustus' 		=> $this->agustus->calc_mejaAgustus($meja="Meja"),
			'calc_mejaSeptember'	=> $this->september->calc_mejaSeptember($meja="Meja"),
			'calc_mejaOktober'		=> $this->oktober->calc_mejaOktober($meja="Meja"),
			'calc_mejaNovember'		=> $this->november->calc_mejaNovember($meja="Meja"),
			'calc_mejaDesember'		=> $this->desember->calc_mejaDesember($meja="Meja"),
			'calc_kursiJanuari' 	=> $this->januari->calc_kursiJanuari($kursi="Kursi"), 
			'calc_kursiFebruari' 	=> $this->februari->calc_kursiFebruari($kursi="Kursi"),
			'calc_kursiMaret' 		=> $this->maret->calc_kursiMaret($kursi="Kursi"),
			'calc_kursiApril' 		=> $this->april->calc_kursiApril($kursi="Kursi"),
			'calc_kursiMei' 		=> $this->mei->calc_kursiMei($kursi="Kursi"),
			'calc_kursiJuni' 		=> $this->juni->calc_kursiJuni($kursi="Kursi"),
			'calc_kursiJuli' 		=> $this->juli->calc_kursiJuli($kursi="Kursi"),
			'calc_kursiAgustus' 	=> $this->agustus->calc_kursiAgustus($kursi="Kursi"),
			'calc_kursiSeptember'	=> $this->september->calc_kursiSeptember($kursi="Kursi"),
			'calc_kursiOktober'		=> $this->oktober->calc_kursiOktober($kursi="Kursi"),
			'calc_kursiNovember'	=> $this->november->calc_kursiNovember($kursi="Kursi"),
			'calc_kursiDesember'	=> $this->desember->calc_kursiDesember($kursi="Kursi"),
			'calc_lemariJanuari' 	=> $this->januari->calc_lemariJanuari($lemari="Lemari"), 
			'calc_lemariFebruari' 	=> $this->februari->calc_lemariFebruari($lemari="Lemari"),
			'calc_lemariMaret' 		=> $this->maret->calc_lemariMaret($lemari="Lemari"),
			'calc_lemariApril' 		=> $this->april->calc_lemariApril($lemari="Lemari"),
			'calc_lemariMei' 		=> $this->mei->calc_lemariMei($lemari="Lemari"),
			'calc_lemariJuni' 		=> $this->juni->calc_lemariJuni($lemari="Lemari"),
			'calc_lemariJuli' 		=> $this->juli->calc_lemariJuli($lemari="Lemari"),
			'calc_lemariAgustus' 	=> $this->agustus->calc_lemariAgustus($lemari="Lemari"),
			'calc_lemariSeptember'	=> $this->september->calc_lemariSeptember($lemari="Lemari"),
			'calc_lemariOktober'	=> $this->oktober->calc_lemariOktober($lemari="Lemari"),
			'calc_lemariNovember'	=> $this->november->calc_lemariNovember($lemari="Lemari"),
			'calc_lemariDesember'	=> $this->desember->calc_lemariDesember($lemari="Lemari"),
			'calc_kitchenJanuari' 	=> $this->januari->calc_kitchenJanuari($kitchen="Kitchen Set"), 
			'calc_kitchenFebruari' 	=> $this->februari->calc_kitchenFebruari($kitchen="Kitchen Set"),
			'calc_kitchenMaret' 	=> $this->maret->calc_kitchenMaret($kitchen="Kitchen Set"),
			'calc_kitchenApril' 	=> $this->april->calc_kitchenApril($kitchen="Kitchen Set"),
			'calc_kitchenMei' 		=> $this->mei->calc_kitchenMei($kitchen="Kitchen Set"),
			'calc_kitchenJuni' 		=> $this->juni->calc_kitchenJuni($kitchen="Kitchen Set"),
			'calc_kitchenJuli' 		=> $this->juli->calc_kitchenJuli($kitchen="Kitchen Set"),
			'calc_kitchenAgustus' 	=> $this->agustus->calc_kitchenAgustus($kitchen="Kitchen Set"),
			'calc_kitchenSeptember'	=> $this->september->calc_kitchenSeptember($kitchen="Kitchen Set"),
			'calc_kitchenOktober'	=> $this->oktober->calc_kitchenOktober($kitchen="Kitchen Set"),
			'calc_kitchenNovember'	=> $this->november->calc_kitchenNovember($kitchen="Kitchen Set"),
			'calc_kitchenDesember'	=> $this->desember->calc_kitchenDesember($kitchen="Kitchen Set"),
			'calc_pintuJanuari' 	=> $this->januari->calc_pintuJanuari($pintu="Pintu"), 
			'calc_pintuFebruari' 	=> $this->februari->calc_pintuFebruari($pintu="Pintu"),
			'calc_pintuMaret' 		=> $this->maret->calc_pintuMaret($pintu="Pintu"),
			'calc_pintuApril' 		=> $this->april->calc_pintuApril($pintu="Pintu"),
			'calc_pintuMei' 		=> $this->mei->calc_pintuMei($pintu="Pintu"),
			'calc_pintuJuni' 		=> $this->juni->calc_pintuJuni($pintu="Pintu"),
			'calc_pintuJuli' 		=> $this->juli->calc_pintuJuli($pintu="Pintu"),
			'calc_pintuAgustus' 	=> $this->agustus->calc_pintuAgustus($pintu="Pintu"),
			'calc_pintuSeptember'	=> $this->september->calc_pintuSeptember($pintu="Pintu"),
			'calc_pintuOktober'		=> $this->oktober->calc_pintuOktober($pintu="Pintu"),
			'calc_pintuNovember'	=> $this->november->calc_pintuNovember($pintu="Pintu"),
			'calc_pintuDesember'	=> $this->desember->calc_pintuDesember($pintu="Pintu"),
			'calc_bedJanuari' 		=> $this->januari->calc_bedJanuari($bed="Tempat Tidur"), 
			'calc_bedFebruari' 		=> $this->februari->calc_bedFebruari($bed="Tempat Tidur"),
			'calc_bedMaret' 		=> $this->maret->calc_bedMaret($bed="Tempat Tidur"),
			'calc_bedApril' 		=> $this->april->calc_bedApril($bed="Tempat Tidur"),
			'calc_bedMei' 			=> $this->mei->calc_bedMei($bed="Tempat Tidur"),
			'calc_bedJuni' 			=> $this->juni->calc_bedJuni($bed="Tempat Tidur"),
			'calc_bedJuli' 			=> $this->juli->calc_bedJuli($bed="Tempat Tidur"),
			'calc_bedAgustus' 		=> $this->agustus->calc_bedAgustus($bed="Tempat Tidur"),
			'calc_bedSeptember'		=> $this->september->calc_bedSeptember($bed="Tempat Tidur"),
			'calc_bedOktober'		=> $this->oktober->calc_bedOktober($bed="Tempat Tidur"),
			'calc_bedNovember'		=> $this->november->calc_bedNovember($bed="Tempat Tidur"),
			'calc_bedDesember'		=> $this->desember->calc_bedDesember($bed="Tempat Tidur"),
			'calc_triplekJanuari' 	=> $this->januari->calc_triplekJanuari($triplek="Triplek"), 
			'calc_triplekFebruari' 	=> $this->februari->calc_triplekFebruari($triplek="Triplek"),
			'calc_triplekMaret' 	=> $this->maret->calc_triplekMaret($triplek="Triplek"),
			'calc_triplekApril' 	=> $this->april->calc_triplekApril($triplek="Triplek"),
			'calc_triplekMei' 		=> $this->mei->calc_triplekMei($triplek="Triplek"),
			'calc_triplekJuni' 		=> $this->juni->calc_triplekJuni($triplek="Triplek"),
			'calc_triplekJuli' 		=> $this->juli->calc_triplekJuli($triplek="Triplek"),
			'calc_triplekAgustus' 	=> $this->agustus->calc_triplekAgustus($triplek="Triplek"),
			'calc_triplekSeptember'	=> $this->september->calc_triplekSeptember($triplek="Triplek"),
			'calc_triplekOktober'	=> $this->oktober->calc_triplekOktober($triplek="Triplek"),
			'calc_triplekNovember'	=> $this->november->calc_triplekNovember($triplek="Triplek"),
			'calc_triplekDesember'	=> $this->desember->calc_triplekDesember($triplek="Triplek"),
			'calc_rakJanuari' 		=> $this->januari->calc_rakJanuari($rak="Rak Buku"),
			'calc_rakFebruari' 		=> $this->februari->calc_rakFebruari($rak="Rak Buku"),
			'calc_rakMaret' 		=> $this->maret->calc_rakMaret($rak="Rak Buku"),
			'calc_rakApril' 		=> $this->april->calc_rakApril($rak="Rak Buku"),
			'calc_rakMei' 			=> $this->mei->calc_rakMei($rak="Rak Buku"),
			'calc_rakJuni' 			=> $this->juni->calc_rakJuni($rak="Rak Buku"),
			'calc_rakJuli' 			=> $this->juli->calc_rakJuli($rak="Rak Buku"),
			'calc_rakAgustus' 		=> $this->agustus->calc_rakAgustus($rak="Rak Buku"),
			'calc_rakSeptember'		=> $this->september->calc_rakSeptember($rak="Rak Buku"),
			'calc_rakOktober'		=> $this->oktober->calc_rakOktober($rak="Rak Buku"),
			'calc_rakNovember'		=> $this->november->calc_rakNovember($rak="Rak Buku"),
			'calc_rakDesember'		=> $this->desember->calc_rakDesember($rak="Rak Buku")
		);

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php');
		$this->load->view('dashboard/dashboard.php', $data);
		$this->load->view('dashboard/chartStock.php', $data);
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

	public function suppliers()
	{
		$data = array(
			'title' => "Suppliers"
		);
		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php');
		$this->load->view('dashboard/suppliers.php');
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
		$stock=$this->input->post('stock');


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

		if ($ambil>$sisastock) {
			echo "data tidak masuk akal";
		
		}
		else{
		$stock=$sisastock-$ambil;

		$this->main->penguranganstock($stock,$id);
		redirect('core/barangkeluar');

		}


		
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
