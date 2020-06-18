<?php  
 class Team_Model extends CI_Model  
 {  

      

      function __construct() { 
          parent :: __construct();
          $this->table = 'team'; 
      } //__construct ends here



      
      /* 
       * Returns rows from the database based on the conditions 
       * @param array filter data based on the passed parameters 
       */ 
      public function getRowsTeam($params = array()){ 
          $this->db->select('*'); 
          $this->db->from($this->table);
          
          if(array_key_exists("conditions", $params)){
              foreach($params['conditions'] as $key => $val){
                  $this->db->where($key, $val);
              }
          }

          if(!empty($params['searchKeywordAdmin'])){
              $search = $params['searchKeywordAdmin'];
              $likeArr = array('team_name' => $search);
              $this->db->or_like($likeArr);
          }

          if(array_key_exists('returnType', $params) && $params['returnType'] == 'count'){
              $result = $this->db->count_all_results();
          } else {
            if(array_key_exists("team_id", $params)){ 
                $this->db->where('team_id', $params['team_id']); 
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
      }//getRowsTeam ends here
      
      
      
      

    /* 
     * Insert team data into the database 
     * @param $data data to be insert based on the passed parameters 
     */ 
    public function insert($data = array()) { 
     if(!empty($data)){ 
         
         // Insert team data 
         $insert = $this->db->insert($this->table, $data); 
          
         // Return the status 
         return $insert?true:false; 
     }
    } //insert ends here

 



    /* 
     * Update team data into the database 
     * @param $data array to be update based on the passed parameters 
     * @param $id num filter data 
     */ 
    public function update($data, $id) { 
     if(!empty($data) && !empty($id)){ 
          
         // Update team data 
         $update = $this->db->update($this->table, $data, array('team_id' => $id)); 
          
         // Return the status 
         return $update?true:false; 
     } 
     
    } //update ends here

      



    public function delete($id){ 
     // Delete team data 
     $delete = $this->db->delete($this->table, array('team_id' => $id)); 
      
     // Return the status 
     return $delete?true:false; 
    } //delete ends here




 



 }  //Model ends here
 ?>