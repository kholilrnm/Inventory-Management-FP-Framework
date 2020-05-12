<?php 
 
class maret extends CI_Model {   

    function calc_mejaMaret($meja) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','03');
        $this->db->where('tipeBarang', $meja);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }

    function calc_kursiMaret($kursi) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','03');
        $this->db->where('tipeBarang', $kursi);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }

    function calc_lemariMaret($lemari) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','03');
        $this->db->where('tipeBarang', $lemari);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }

    function calc_kitchenMaret($kitchen) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','03');
        $this->db->where('tipeBarang', $kitchen);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }

    function calc_pintuMaret($pintu) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','03');
        $this->db->where('tipeBarang', $pintu);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }

    function calc_bedMaret($bed) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','03');
        $this->db->where('tipeBarang', $bed);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }

    function calc_triplekMaret($triplek) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','03');
        $this->db->where('tipeBarang', $triplek);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }

    function calc_rakMaret($rak) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','03');
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