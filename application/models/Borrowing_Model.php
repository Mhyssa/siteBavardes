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

    /**
     * Returns rows from the database based on the conditions
     * @param array filter data based on the passed parameters
     */
    public function getRowsBorrowing($params = array()){
        $this->db->select('*');
        $this->db->from('borrowing');
        $this->db->join('articles', 'articles.article_id =borrowing.borrowing_id');
        $this->db->join('users', 'users.us_id =borrowing.us_id');
        $this->db->join('events', 'events.event_id =borrowing.event_id');

        if(array_key_exists("conditions", $params)){
            foreach($params['conditions'] as $key => $val){
                $this->db->where($key, $val);
            }
        }

        if(!empty($params['searchKeywordAdmin'])){
            $search = $params['searchKeywordAdmin'];
            $likeArr = array(
                'article_name' => $search,
                'event_name' =>$search,
                'us_fname'=>$search,
                'us_lname'=>$search
            );
            $this->db->or_like($likeArr);
        }

        if(array_key_exists('returnType', $params) && $params['returnType'] == 'count'){
            $result = $this->db->count_all_results();
        } else {
            if(array_key_exists("borrowing_id", $params)){
                $this->db->where('borrowing_id', $params['borrowing_id']);
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
    }//getRowsBorrowing ends here

    /**
     * @param $data
     * @param $id
     * @return bool
     */
    public function update($data, $id)
    {
        $this->db->where('borrowing_id', $id);
        return (bool)$this->db->update('borrowing',$data);
    }

    /**
     * delete borrowing by id
     * @param $id
     * @return bool
     */
    public function delete($id){

        $delete = $this->db->delete('borrowing', array('borrowing_id' => $id));

        return $delete?true:false;

    } //delete ends here


}
