<?php


class Poster_Model extends CI_Model
{

    /*
     * get all posters
     */
    public function getAll()
    {
        return $this->db->get('poster')->result();
    }

}
