<?php 
 
class stock extends CI_Model{	

    function kursi(){
        $tipeBarang='Kursi';
        $hasil=$this->db->query("SELECT * FROM stockbarang where tipeBarang='$tipeBarang'");
        return $hasil;
    }

    function meja(){
        $tipeBarang='Meja';
        $hasil=$this->db->query("SELECT * FROM stockbarang where tipeBarang='$tipeBarang'");
        return $hasil;
    }

    function lemari(){
        $tipeBarang='Lemari';
        $hasil=$this->db->query("SELECT * FROM stockbarang where tipeBarang='$tipeBarang'");
        return $hasil;
    }

    function kitchen(){
        $tipeBarang='Kitchen Set';
        $hasil=$this->db->query("SELECT * FROM stockbarang where tipeBarang='$tipeBarang'");
        return $hasil;
    }

    function pintu(){
        $tipeBarang='Pintu';
        $hasil=$this->db->query("SELECT * FROM stockbarang where tipeBarang='$tipeBarang'");
        return $hasil;
    }

    function tempattidur(){
        $tipeBarang='Tempat Tidur';
        $hasil=$this->db->query("SELECT * FROM stockbarang where tipeBarang='$tipeBarang'");
        return $hasil;
    }

    function triplek(){
        $tipeBarang='Triplek';
        $hasil=$this->db->query("SELECT * FROM stockbarang where tipeBarang='$tipeBarang'");
        return $hasil;
    }

    function rakbuku(){
        $tipeBarang='Rak Buku';
        $hasil=$this->db->query("SELECT * FROM stockbarang where tipeBarang='$tipeBarang'");
        return $hasil;
    }

    function invoice(){
        $hasil=$this->db->query("SELECT * FROM invoice ORDER BY id DESC LIMIT 1");
        return $hasil;
    }

}