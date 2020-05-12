<?php 
 
class juni extends CI_Model {   

    function calc_mejaJuni($meja) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','06');
        $this->db->where('tipeBarang', $meja);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_kursiJuni($kursi) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','06');
        $this->db->where('tipeBarang', $kursi);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_lemariJuni($lemari) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','06');
        $this->db->where('tipeBarang', $lemari);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_kitchenJuni($kitchen) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','06');
        $this->db->where('tipeBarang', $kitchen);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_triplekJuni($triplek) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','06');
        $this->db->where('tipeBarang', $triplek);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_pintuJuni($pintu) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','06');
        $this->db->where('tipeBarang', $pintu);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_bedJuni($bed) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','06');
        $this->db->where('tipeBarang', $bed);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_rakJuni($rak) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','06');
        $this->db->where('tipeBarang', $rak);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }














}