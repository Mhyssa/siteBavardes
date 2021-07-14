<?php


class Poster_Model extends CI_Model
{

    /**
     * return all posters
     */
    public function getAll()
    {
        return $this->db->get('poster')->result();
    }

    /**
     * return one poster
     */
    public function getPoster($id)
    {
        return $this->db->get_where('poster', array('poster_id' => $id))->result();
    }

}
