<?php


class Poster_Model extends CI_Model
{
    function __construct() {
        parent :: __construct();
        $this->table = 'poster';
    } //__construct ends here

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

    /**
      * Returns rows from the database based on the conditions
      * @param array filter data based on the passed parameters
      */
    public function getRowsPoster($params = array()){
        $this->db->select('*');
        $this->db->from($this->table);

        if(array_key_exists("conditions", $params)){
            foreach($params['conditions'] as $key => $val){
                $this->db->where($key, $val);
            }
        }

        if(!empty($params['searchKeywordAdmin'])){
            $search = $params['searchKeywordAdmin'];
            $likeArr = array('poster_name' => $search);
            $this->db->or_like($likeArr);
        }

        if(array_key_exists('returnType', $params) && $params['returnType'] == 'count'){
            $result = $this->db->count_all_results();
        } else {
            if(array_key_exists("poster_id", $params)){
                $this->db->where('poster_id', $params['poster_id']);
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
    }//getRowsPoster ends here

    /**
    * Insert poster data into the database
    * @param $data data to be insert based on the passed parameters
    */
    public function insert($data = array()) {
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

            // Update poster data
            $update = $this->db->update($this->table, $data, array('poster_id' => $id));

            // Return the status
            return $update?true:false;
        }

    } //update ends here

    /**
     * delete poster by id
     * @param $id
     * @return bool
     */
    public function delete($id){

        $delete = $this->db->delete($this->table, array('poster_id' => $id));

        return $delete?true:false;

    } //delete ends here






}
