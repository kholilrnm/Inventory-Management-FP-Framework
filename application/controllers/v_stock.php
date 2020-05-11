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
}


