<?php

class M_data extends CI_Model
{

    public function insert($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function getAll($table)
    {
        return $this->db->get($table);
    }

    public function getID($detUji)
    {
        return $this->db->get_where('uji_coba', ['id_uji_coba' => $detUji])->row_array();
    }

    public function getID2($detUji)
    {
        return $this->db->get_where('suhu', ['id_uji_coba' => $detUji])->row_array();
    }

    public function getID3($detUji)
    {
        return $this->db->get_where('tds', ['id_uji_coba' => $detUji])->row_array();
    }

    public function getID4($detUji)
    {
        return $this->db->get_where('do', ['id_uji_coba' => $detUji])->row_array();
    }
    public function getID5($detUji)
    {
        return $this->db->get_where('hasil', ['id_uji_coba' => $detUji])->row_array();
    }
}
