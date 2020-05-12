<?php 
 
class desember extends CI_Model {   

    function calc_mejaDesember($meja) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','12');
        $this->db->where('tipeBarang', $meja);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_kursiDesember($kursi) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','12');
        $this->db->where('tipeBarang', $kursi);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }

    function calc_lemariDesember($lemari) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','12');
        $this->db->where('tipeBarang', $lemari);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }

    function calc_kitchenDesember($kitchen) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','12');
        $this->db->where('tipeBarang', $kitchen);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }

    function calc_pintuDesember($pintu) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','12');
        $this->db->where('tipeBarang', $pintu);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }

    function calc_bedDesember($bed) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','12');
        $this->db->where('tipeBarang', $bed);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }

    function calc_triplekDesember($triplek) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','12');
        $this->db->where('tipeBarang', $triplek);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }

    function calc_rakDesember($rak) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','12');
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