<?php


class Borrowing_Model extends CI_Model
{
    /**
     * insert new
     */
    public function new($data)
    {
        return (bool)$this->db->insert('borrowing', $data);
    }

}
