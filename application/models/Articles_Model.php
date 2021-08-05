<?php


class Articles_Model extends CI_Model
{
    function __construct() {
        parent :: __construct();
        $this->table = 'articles';
    } //__construct ends here
    /**
     * get articles  by type
     */
    public function getArticles($id)
    {
        return $this->db->get_where('articles', array('type_id' => $id))->result();
    }

    /**
     * get  article by id
     */
    public function getArticle($id)
    {
        return $this->db->get_where('articles', array('article_id' => $id))->result();
    }

    /**
     * Returns rows from the database based on the conditions
     * @param array filter data based on the passed parameters
     */
    public function getRowsArticle($params = array()){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('type', 'type.type_id =articles.type_id');

        if(array_key_exists("conditions", $params)){
            foreach($params['conditions'] as $key => $val){
                $this->db->where($key, $val);
            }
        }

        if(!empty($params['searchKeywordAdmin'])){
            $search = $params['searchKeywordAdmin'];
            $likeArr = array('article_name' => $search);
            $this->db->or_like($likeArr);
        }

        if(array_key_exists('returnType', $params) && $params['returnType'] == 'count'){
            $result = $this->db->count_all_results();
        } else {
            if(array_key_exists("article_id", $params)){
                $this->db->where('article_id', $params['article_id']);
                $query = $this->db->get();
                $result = $query->row_array();
            }else{
                if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                    $this->db->limit($params['limit'],$params['start']);
                }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                    $this->db->limit($params['limit']);
                }

                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;

            }
        }

        // Return fetched data
        return $result;
    }//getRowsPeople ends here

    /**
     * return all types of articles
     */
    public function getType()
    {
        return $this->db->get('type')->result();
    }

    /**
     * Insert article data into the database
     * @param $data data to be insert based on the passed parameters
     */
    public function insert($data) {
        if(!empty($data)){
            // Insert poster data
            $insert = $this->db->insert($this->table, $data);

            // Return the status
            return $insert?true:false;
        }
    } //insert ends here

    /**
     * Update poster data into the database
     * @param $data array to be update based on the passed parameters
     * @param $id num filter data
     */
    public function update($data, $id) {

        if(!empty($data) && !empty($id)){

            // Update article data
            $update = $this->db->update($this->table, $data, array('article_id' => $id));

            // Return the status
            return $update?true:false;
        }

    } //update ends here

    /**
     * delete article by id
     * @param $id
     * @return bool
     */
    public function delete($id){

        $delete = $this->db->delete($this->table, array('article_id' => $id));

        return $delete?true:false;

    } //delete ends here

}
