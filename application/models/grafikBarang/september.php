<?php 
 
class september extends CI_Model {   

    function calc_mejaSeptember($meja) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','09');
        $this->db->where('tipeBarang', $meja);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_kursiSeptember($kursi) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','09');
        $this->db->where('tipeBarang', $kursi);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_lemariSeptember($lemari) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','09');
        $this->db->where('tipeBarang', $lemari);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_kitchenSeptember($kitchen) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','09');
        $this->db->where('tipeBarang', $kitchen);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_pintuSeptember($pintu) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','09');
        $this->db->where('tipeBarang', $pintu);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_bedSeptember($bed) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','09');
        $this->db->where('tipeBarang', $bed);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_triplekSeptember($triplek) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','09');
        $this->db->where('tipeBarang', $triplek);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_rakSeptember($rak) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','09');
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