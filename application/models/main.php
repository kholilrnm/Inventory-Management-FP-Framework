<?php 
 
class main extends CI_Model {	

    // start dashboard
    function hitung_totalStock() {
        $this->db->select_sum('stock');
        $query = $this->db->get('stockbarang');
        
        if($query->num_rows() > 0) {
            return $query->row()->stock;
        }
        else {
            return 0;
        }

    }

    function hitung_currStock() {
        $query = $this->db->query("SELECT * FROM stockbarang");
        return $query->num_rows();
    }

    function todayStock(){
        $date = new DateTime("now");
        $curr_date = $date->format('yy-m-d');

        $this->db->select('SUBSTRING(tanggalInput, 1, 10)');
        $this->db->limit(1);
        $query_substringTanggal = $this->db->get('stockbarang');

        return $query_substringTanggal->row();

                
        // return $query->row();
        // $tes = '2020-05-11 08:51:31';
        // var_dump($result);
        // $date = new DateTime("now");
        // $curr_date = $date->format('yy-m-d');

        // // mengambil tanggal saja tanpa jam (date today)
        // $substringTanggal = $this->db->query("SELECT SUBSTRING($curr_date, 1, 10) AS jumlahBarang");
        // $result = $substringTanggal

        // $this->db->select_sum('jumlahBarang');
        // $this->db->where('tanggalInput', print_r($result));
        // $query = $this->db->get('stockbarang');
        // // $query = $this->db->query("SELECT jumlahBarang FROM stockbarang WHERE tanggalInput = '$substringTanggal'");

        // if($query->num_rows() > 0) {
        //     return $query->row()->jumlahBarang;
        // }
        // else {
        //     return 0;
        // }

    }

    function chart_meja(){
        # code...
    }

    // end dashboard



	function insertdata($data) {
        // Param 1: nama table, param 2: data berupa assosiatif array
        $this->db->insert("stockbarang", $data);

        return $this->db->insert_id();  // return ID yang disimpan barusan
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