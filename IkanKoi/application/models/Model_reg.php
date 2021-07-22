<?php

class Model_reg extends CI_Model
{
    public function register($table, $data)
    {
        return $this->db->insert($table, $data);
    }
    public function getAll($table)
    {
        return $this->db->get($table);
    }
    public function insert($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
