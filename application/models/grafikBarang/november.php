<?php 
 
class november extends CI_Model {   

    function calc_mejaNovember($meja) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','11');
        $this->db->where('tipeBarang', $meja);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_kursiNovember($kursi) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','11');
        $this->db->where('tipeBarang', $kursi);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_lemariNovember($lemari) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','11');
        $this->db->where('tipeBarang', $lemari);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_kitchenNovember($kitchen) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','11');
        $this->db->where('tipeBarang', $kitchen);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_pintuNovember($pintu) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','11');
        $this->db->where('tipeBarang', $pintu);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_bedNovember($bed) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','11');
        $this->db->where('tipeBarang', $bed);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_triplekNovember($triplek) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','11');
        $this->db->where('tipeBarang', $triplek);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_rakNovember($rak) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','11');
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