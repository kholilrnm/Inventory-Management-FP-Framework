<?php 
 
class februari extends CI_Model {   

    function calc_mejaFebruari($meja) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','02');
        $this->db->where('tipeBarang', $meja);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_kursiFebruari($kursi) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','02');
        $this->db->where('tipeBarang', $kursi);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_lemariFebruari($lemari) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','02');
        $this->db->where('tipeBarang', $lemari);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_kitchenFebruari($kitchen) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','02');
        $this->db->where('tipeBarang', $kitchen);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_pintuFebruari($pintu) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','02');
        $this->db->where('tipeBarang', $pintu);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_bedFebruari($bed) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','02');
        $this->db->where('tipeBarang', $bed);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_triplekFebruari($triplek) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','02');
        $this->db->where('tipeBarang', $triplek);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_rakFebruari($rak) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','02');
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