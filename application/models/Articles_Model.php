<?php


class Articles_Model extends CI_Model
{
    /**
     * get all articles defined by type
     */
    public function getArticles($id)
    {
        return $this->db->get_where('articles', array('type_id' => $id))->result();
    }

}
