<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class v_stock extends CI_Controller {

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
	      $this->load->model('stock');
          $this->load->model('main');
	  }

	public function v_kursi()
    {
        $xxx['data']=$this->stock->kursi();

        $data = array(
            'title' => "Stock Furniture"
        );

        $this->load->view('templates/header.php',$data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('stock/kursi.php',$xxx); 
        $this->load->view('templates/footer.php');

    }
    public function v_meja()
    {
        $xxx['data']=$this->stock->meja();

        $data = array(
            'title' => "Stock Furniture"
        );

        $this->load->view('templates/header.php',$data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('stock/meja.php',$xxx); 
        $this->load->view('templates/footer.php');

    }

     public function v_lemari()
    {
        $xxx['data']=$this->stock->lemari();

        $data = array(
            'title' => "Stock Furniture"
        );

        $this->load->view('templates/header.php',$data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('stock/lemari.php',$xxx); 
        $this->load->view('templates/footer.php');

    }
     public function v_tempat_tidur()
    {
        $xxx['data']=$this->stock->tempattidur();

        $data = array(
            'title' => "Stock Furniture"
        );

        $this->load->view('templates/header.php',$data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('stock/tempat-tidur.php',$xxx); 
        $this->load->view('templates/footer.php');

    }

     public function v_triplek()
    {
        $xxx['data']=$this->stock->triplek();

        $data = array(
            'title' => "Stock Furniture"
        );

        $this->load->view('templates/header.php',$data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('stock/triplek.php',$xxx); 
        $this->load->view('templates/footer.php');

    }

     public function v_rakbuku()
    {
        $xxx['data']=$this->stock->rakbuku();

        $data = array(
            'title' => "Stock Furniture"
        );

        $this->load->view('templates/header.php',$data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('stock/rakbuku.php',$xxx); 
        $this->load->view('templates/footer.php');

    }

     public function v_kitchen()
    {
        $xxx['data']=$this->stock->kitchen();

        $data = array(
            'title' => "Stock Furniture"
        );

        $this->load->view('templates/header.php',$data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('stock/kitchen.php',$xxx); 
        $this->load->view('templates/footer.php');

    }

     public function v_pintu()
    {
        $xxx['data']=$this->stock->pintu();

        $data = array(
            'title' => "Stock Furniture"
        );

        $this->load->view('templates/header.php',$data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('stock/pintu.php',$xxx); 
        $this->load->view('templates/footer.php');

    }

     public function invoice()
    {
        $data = array(
            'title' => "Invoice"
        );


        $this->load->view('templates/header.php',$data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('invoice/input_invoice.php',); 
        $this->load->view('templates/footer.php');


    }


    public function addinvoice()
    {
        // Mempersiapkan validasi form
        // Param 1: name pada input, 2: caption ketika terjadi kesalahan, 3: rule
        $this->form_validation->set_rules("nama", "nama", "required");
        $this->form_validation->set_rules("suplay", "suplay", "required");
        $this->form_validation->set_rules("email", "email", "required");
         // $this->form_validation->set_rules("uploadFoto", "uploadFoto", "required");
        // $this->form_validation->set_rules("content", "Konten", "required");


        if ($this->form_validation->run() === true) {  // Cek validasi, return true jika lolos validasi
            
            $data = array(
                'namapengantar' => $this->input->post("nama"),
                'suppliers'      => $this->input->post("suplay"),
                'email'         => $this->input->post("email"),
                'hp'            => $this->input->post("hp"),
                'alamat'        => $this->input->post("alamat"),
                'namabarang'    => $this->input->post("namabarang"),
                'jumlahbarang'        => $this->input->post("jumlah")
            );

            // // Konfigurasi upload file
            // $config = array(
            //     'upload_path'   => './uploads/',
            //     'allowed_types' => 'gif|jpg|png|jpeg',
            //     'max_size'      => 0,
            //     'max_width'     => 0,
            //     'max_height'    => 0
            // );

            // $this->load->library('upload', $config);    // Load library upload & pasang config

            // // Menangkap file yang diupload
            // if (!$this->upload->do_upload('uploadFoto')) {
            //     echo $this->upload->display_errors();   // Menangkap pesan error
            // } else {
            //     $data["uploadFoto"] = $this->upload->data()["file_name"];    // Mengambil nama file upload

            // }

            $id = $this->main->insertdatainvoice($data);

        }

        redirect('v_stock/showinvoice');
    }

    public function showinvoice()
    {
      

        $xxx['data']=$this->stock->invoice();
        $this->load->view('invoice/invoice.php',$xxx); 


    }


}


