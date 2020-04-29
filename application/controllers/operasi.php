<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class operasi extends CI_Controller {

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

	   public function add()
    {
        // Mempersiapkan validasi form
        // Param 1: name pada input, 2: caption ketika terjadi kesalahan, 3: rule
        $this->form_validation->set_rules("type", "type", "required");
        $this->form_validation->set_rules("nama", "nama", "required");
        $this->form_validation->set_rules("asal", "asal", "required");
        $this->form_validation->set_rules("jumlah", "jumlah", "required");
        $this->form_validation->set_rules("tanggal", "tanggal", "required");
        // $this->form_validation->set_rules("content", "Konten", "required");


        if ($this->form_validation->run() === true) {  // Cek validasi, return true jika lolos validasi
            
            $data["tipeBarang"] = $this->input->post("type");
            $data["namaBarang"] = $this->input->post("nama");
            $data["asalBarang"] = $this->input->post("asal");
            $data["jumlahBarang"] = $this->input->post("jumlah");
            $data["tanggalInput"] = $this->input->post("tanggal");

            // Konfigurasi upload file
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 0;
            $config['max_width']            = 0;
            $config['max_height']           = 0;

            $this->load->library('upload', $config);    // Load library upload & pasang config

            // Menangkap file yang diupload
            if (!$this->upload->do_upload('uploadFoto')) {
                echo $this->upload->display_errors();   // Menangkap pesan error
            } else {
                $data["uploadFoto"] = $this->upload->data()["file_name"];    // Mengambil nama file upload

            }

            $id = $this->main->insertdata($data);
            echo "success";
        }


        redirect('core/data_input');
    }




     public function delete()
     {
        $kode=$this->input->post('hapus');

        echo "$kode";
        $this->main->hapus_barang($kode);
        redirect('core/editstock');
    }



}