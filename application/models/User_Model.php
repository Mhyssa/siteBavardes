<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class User_Model extends CI_Model{ 
    function __construct() { 
        // Set table name 
        $this->table = 'users'; 
    } 
     
    /* 
     * Fetch user data from the database 
     * @param array filter data based on the passed parameters 
     */ 
    function getRowsUser($params = array()){ 
        $this->db->select('*'); 
        $this->db->from($this->table); 
         
        if(array_key_exists("conditions", $params)){ 
            foreach($params['conditions'] as $key => $val){ 
                $this->db->where($key, $val); 
            } 
        } 
         
        if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){ 
            $result = $this->db->count_all_results(); 
        }else{ 
            if(array_key_exists("us_id", $params) || $params['returnType'] == 'single'){ 
                if(!empty($params['us_id'])){ 
                    $this->db->where('us_id', $params['us_id']); 
                } 
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
    } // getRowsUsers



    /* 
    * Returns rows from the database based on the conditions 
    * @param array filter data based on the passed parameters 
    */ 
    public function getRowsAdmin($params = array()){ 
    $this->db->select('*'); 
    $this->db->from($this->table); 
        

                if(array_key_exists("us_id", $params)){ 
                    $this->db->where('us_id', $params['us_id']); 
                    $query = $this->db->get(); 
                    $result = $query->row_array(); 
                }else{ 
                    if(array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                        $this->db->limit($params['limit'],$params['start']); 
                    }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                        $this->db->limit($params['limit']); 
                    } else {
                        $query = $this->db->get(); 
                        $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
                    }
                                            
                } 
            
    // Return fetched data 
    return $result; 
    }//getRowsAdmin ends here
     


    /* 
     * Insert user data into the database 
     * @param $data data to be inserted 
     */ 
    public function insert($data = array()) { 
        if(!empty($data)){ 
            
            // Insert member data 
            $insert = $this->db->insert($this->table, $data); 
             
            // Return the status 
            return $insert?true:false; 
        } 
        return false; 
    } // insert ends here



    /* 
     * Update users data into the database 
     * @param $data array to be update based on the passed parameters 
     * @param $id num filter data 
     */ 
    public function update($data, $id) { 
        if(!empty($data) && !empty($id)){ 
             
            // Update users data 
            $update = $this->db->update($this->table, $data, array('us_id' => $id)); 
             
            // Return the status 
            return $update?true:false; 
        } 
        
       } //update ends here
   
         
   
   
   
       public function delete($id){ 
        // Delete users data 
        $delete = $this->db->delete($this->table, array('us_id' => $id)); 
         
        // Return the status 
        return $delete?true:false; 
       } //delete ends here


}