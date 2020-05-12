<?php 
 
class main extends CI_Model {   

    // start dashboard
    function hitung_totalStock() {
        $this->db->select_sum('stock');
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $query->row()->stock;
        }
        else {
            return 0;
        }

    }

    function hitung_currStock() {
        $query = $this->db->query("SELECT * FROM stockbarang");
       if ($query->num_rows() > 0) {
            return $query->num_rows();
        }
        else {
            return 0;
        }

    }

    function new_stock() {
        $date = new DateTime("now");
        $curr_date = $date->format('yy-m-d');

        $query = $this->db->query('SELECT SUBSTRING(tanggalInput, 1, 10) AS tanggalInput FROM stockbarang ORDER BY tanggalInput DESC LIMIT 1');
        
        if ($query->num_rows() > 0) {
            $SubstringQuery = $query->row()->tanggalInput;
        
            if ($SubstringQuery == $curr_date) {
                $this->db->select_sum('jumlahBarang');
                $queryResult = $this->db->get('stockbarang');
                return $queryResult->row()->jumlahBarang;
    
            } else {
                return 0;
            }
        }
        else{
            return 0;
        }
        

    }
    
    function out_stock() {
        $date = new DateTime("now");
        $curr_date = $date->format('yy-m-d');

        $query = $this->db->query('SELECT SUBSTRING(tanggalInput, 1, 10) AS tanggalInput FROM out_barang ORDER BY tanggalInput DESC LIMIT 1');
        
        if ($query->num_rows() > 0) {
            $SubstringQuery = $query->row()->tanggalInput;
        
            if ($SubstringQuery == $curr_date) {
                $this->db->select_sum('stock');
                $queryResult = $this->db->get('out_barang');
                return $queryResult->row()->stock;
    
            } else {
                return 0;
            }
        } 
        else{
            return 0;
        }        
    }    

    function check_supplier() {
        $this->db->select("*");
        $getQuery = $this->db->get('suppliers');
        if ($getQuery->num_rows() > 0) {
            return $getQuery = $this->db->count_all_results('suppliers');
        }
        else{
            return 0;
        }
    }

    // end dashboard



    function insertdata($data) {
        // Param 1: nama table, param 2: data berupa assosiatif array
        $this->db->insert("stockbarang", $data);
        return $this->db->insert_id();
    }

    function ambil_data() {
        return $this->db->get('stockbarang');
    }

    function hapus_barang($kode) {
        $hasil = $this->db->query("DELETE FROM stockbarang WHERE id='$kode'");
        return $hasil;
    }

    function show_barang(){
        $hasil=$this->db->query("SELECT * FROM stockbarang");
        return $hasil;
    }
    function edit_barang($namaBarang,$asalBarang,$jumlahBarang,$stock,$id){
        $hasil=$this->db->query("UPDATE stockbarang SET namaBarang='$namaBarang',asalBarang='$asalBarang',jumlahBarang='$jumlahBarang',stock='$stock' WHERE id='$id'");
        return $hasil;
    }

    function penguranganstock($stock,$id){
        $hasil=$this->db->query("UPDATE stockbarang SET stock='$stock' WHERE id='$id'");
        return $hasil;
    }

    function show_out_stock(){
        $hasil=$this->db->query("SELECT * FROM out_barang");
        return $hasil;
    }
    function inserthistory($data)
    {
        // Param 1: nama table, param 2: data berupa assosiatif array
        $this->db->insert("out_barang", $data);

        return $this->db->insert_id();  // return ID yang disimpan barusan
    }









}