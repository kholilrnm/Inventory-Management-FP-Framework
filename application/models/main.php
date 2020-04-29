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
}