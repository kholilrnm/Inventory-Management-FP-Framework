<?php 
 
class agustus extends CI_Model {   

    function calc_mejaAgustus($meja) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','08');
        $this->db->where('tipeBarang', $meja);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }

    function calc_kursiAgustus($kursi) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','08');
        $this->db->where('tipeBarang', $kursi);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }

    function calc_lemariAgustus($lemari) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','08');
        $this->db->where('tipeBarang', $lemari);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }

    function calc_kitchenAgustus($kitchen) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','08');
        $this->db->where('tipeBarang', $kitchen);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }

    function calc_pintuAgustus($pintu) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','08');
        $this->db->where('tipeBarang', $pintu);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }

    function calc_bedAgustus($bed) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','08');
        $this->db->where('tipeBarang', $bed);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }

    function calc_triplekAgustus($triplek) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','08');
        $this->db->where('tipeBarang', $triplek);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }

    function calc_rakAgustus($rak) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','08');
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