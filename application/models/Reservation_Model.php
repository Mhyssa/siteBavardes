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

    /**
     * Returns rows from the database based on the conditions
     * @param array filter data based on the passed parameters
     */
    public function getRowsReservation($params = array()){
        $this->db->select('*');
        $this->db->from('reservation');
        $this->db->join('poster', 'poster.poster_id =reservation.poster_id');
        $this->db->join('users', 'users.us_id =reservation.us_id');
        $this->db->join('events', 'events.event_id =reservation.event_id');

        if(array_key_exists("conditions", $params)){
            foreach($params['conditions'] as $key => $val){
                $this->db->where($key, $val);
            }
        }

        if(!empty($params['searchKeywordAdmin'])){
            $search = $params['searchKeywordAdmin'];
            $likeArr = array(
                'poster_name' => $search,
                'event_name' =>$search,
                'us_fname'=>$search,
                'us_lname'=>$search
            );
            $this->db->or_like($likeArr);
        }

        if(array_key_exists('returnType', $params) && $params['returnType'] == 'count'){
            $result = $this->db->count_all_results();
        } else {
            if(array_key_exists("res_id", $params)){
                $this->db->where('res_id', $params['res_id']);
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
    }//getRowsReservation ends here

    /**
     * @param $data
     * @param $id
     * @return bool
     */
    public function update($data, $id)
    {
          $this->db->where('res_id', $id);
          return (bool)$this->db->update('reservation',$data);
    }

    /**
     * delete reservation by id
     * @param $id
     * @return bool
     */
    public function delete($id){

        $delete = $this->db->delete('reservation', array('res_id' => $id));

        return $delete?true:false;

    } //delete ends here

}
