<?php  
 class Event_model extends CI_Model  
 {  

      

      function __construct() { 
          parent :: __construct();
          $this->table = 'events'; 
      } //__construct ends here



      
       /* 
       * Returns rows from the database based on the conditions 
       * @param array filter data based on the passed parameters 
       */ 
      public function getRowsEvent($params = array()){ 
          $this->db->select('*'); 
          $this->db->order_by('event_id', 'desc');
          $this->db->from($this->table); 


                    if(array_key_exists("event_id", $params)){ 
                        $this->db->where('event_id', $params['event_id']); 
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
      }//getRowsEvent ends here
      
      
      
      

    /* 
     * Insert event data into the database 
     * @param $data data to be insert based on the passed parameters 
     */ 
    public function insert($data = array()) { 
     if(!empty($data)){           
         // Insert event data 
         $insert = $this->db->insert($this->table, $data); 
         
         // Return the status 
         return $insert?true:false; 
     }
    } //insert ends here

 



    /* 
     * Update event data into the database 
     * @param $data array to be update based on the passed parameters 
     * @param $id num filter data 
     */ 
    public function update($data, $id) { 

     if(!empty($data) && !empty($id)){ 
         
         // Update event data 
         $update = $this->db->update($this->table, $data, array('event_id' => $id)); 
          
         // Return the status 
         return $update?true:false; 
     } 
     
    } //update ends here

      



    public function delete($id){
        
        $delete = $this->db->delete($this->table, array('event_id' => $id)); 
      
        return $delete?true:false; 

    } //delete ends here




 



 }  //Model ends here