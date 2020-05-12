<?php 
 
class mei extends CI_Model {   

    function calc_mejaMei($meja) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','05');
        $this->db->where('tipeBarang', $meja);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }

    function calc_kursiMei($kursi) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','05');
        $this->db->where('tipeBarang', $kursi);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_lemariMei($lemari) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','05');
        $this->db->where('tipeBarang', $lemari);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_kitchenMei($kitchen) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','05');
        $this->db->where('tipeBarang', $kitchen);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_pintuMei($pintu) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','05');
        $this->db->where('tipeBarang', $pintu);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_bedMei($bed) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','05');
        $this->db->where('tipeBarang', $bed);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_triplekMei($triplek) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','05');
        $this->db->where('tipeBarang', $triplek);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_rakMei($rak) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','05');
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