<?php  
 class Presse_Model extends CI_Model  
 {  

      

      function __construct() { 
          parent :: __construct();
          $this->table = 'presse'; 
      } //__construct ends here



      
       /* 
       * Returns rows from the database based on the conditions 
       * @param array filter data based on the passed parameters 
       */ 
      public function getRowsPresse($params = array()){ 
          $this->db->select('*'); 
          $this->db->from($this->table); 


                    if(array_key_exists("presse_id", $params)){ 
                        $this->db->where('presse_id', $params['presse_id']); 
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
      }//getRowsPresse ends here
      
      
      
      

    /* 
     * Insert presse data into the database 
     * @param $data data to be insert based on the passed parameters 
     */ 
    public function insert($data = array()) { 
     if(!empty($data)){           
         // Insert presse data 
         $insert = $this->db->insert($this->table, $data); 
         
         // Return the status 
         return $insert?true:false; 
     }
    } //insert ends here

 



    /* 
     * Update presse data into the database 
     * @param $data array to be update based on the passed parameters 
     * @param $id num filter data 
     */ 
    public function update($data, $id) { 

     if(!empty($data) && !empty($id)){ 
         
         // Update presse data 
         $update = $this->db->update($this->table, $data, array('presse_id' => $id)); 
          
         // Return the status 
         return $update?true:false; 
     } 
     
    } //update ends here

      



    public function delete($id){
        
        $delete = $this->db->delete($this->table, array('presse_id' => $id)); 
      
        return $delete?true:false; 

    } //delete ends here




 



 }  //Model ends here
 ?>