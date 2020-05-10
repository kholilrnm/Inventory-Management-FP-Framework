<?php 
 
class main extends CI_Model{	
	public function insertdata($data)
    {
        // Param 1: nama table, param 2: data berupa assosiatif array
        $this->db->insert("stockbarang", $data);

        return $this->db->insert_id();  // return ID yang disimpan barusan
    }
    function ambil_data(){
		return $this->db->get('stockbarang');
	}

	function hapus_barang($kode){
        $hasil=$this->db->query("DELETE FROM stockbarang WHERE id='$kode'");
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
    public function inserthistory($data)
    {
        // Param 1: nama table, param 2: data berupa assosiatif array
        $this->db->insert("out_barang", $data);

        return $this->db->insert_id();  // return ID yang disimpan barusan
    }
}