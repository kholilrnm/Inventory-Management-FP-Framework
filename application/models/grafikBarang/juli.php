<?php 
 
class juli extends CI_Model {   

    function calc_mejaJuli($meja) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','07');
        $this->db->where('tipeBarang', $meja);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_kursiJuli($kursi) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','07');
        $this->db->where('tipeBarang', $kursi);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_lemariJuli($lemari) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','07');
        $this->db->where('tipeBarang', $lemari);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_kitchenJuli($kitchen) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','07');
        $this->db->where('tipeBarang', $kitchen);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_pintuJuli($pintu) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','07');
        $this->db->where('tipeBarang', $pintu);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_bedJuli($bed) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','07');
        $this->db->where('tipeBarang', $bed);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_triplekJuli($triplek) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','07');
        $this->db->where('tipeBarang', $triplek);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_rakJuli($rak) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','07');
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