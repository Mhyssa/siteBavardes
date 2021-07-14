<?php


class Reservation_Model extends CI_Model
{
    /**
     * insert new
     */
    public function new($data)
    {
        return (bool)$this->db->insert('reservation', $data);
    }

}
