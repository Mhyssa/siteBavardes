<?php  
 class Podcast_Model extends CI_Model  
 {  

      

      function __construct() { 
          parent :: __construct();
          $this->table = 'podcast'; 
      } //__construct ends here



      
       /* 
       * Returns rows from the database based on the conditions 
       * @param array filter data based on the passed parameters 
       */ 
      public function getRowsPodcast($params = array()){ 
          $this->db->select('*'); 
          $this->db->order_by('podcast_id', 'desc');
          $this->db->from($this->table); 


          if(array_key_exists("conditions", $params)){
              foreach($params['conditions'] as $key => $val){
                  $this->db->where($key, $val);
              }
          }

          if(!empty($params['searchKeywordAdmin'])){
              $search = $params['searchKeywordAdmin'];
              $likeArr = array('podcast_name' => $search);
              $this->db->or_like($likeArr);
          }

          if(array_key_exists('returnType', $params) && $params['returnType'] == 'count'){
              $result = $this->db->count_all_results();
          } else {
            if(array_key_exists("podcast_id", $params)){ 
                $this->db->where('podcast_id', $params['podcast_id']); 
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
      }//getRowsPodcast ends here





             /* 
       * Returns rows from the database based on the conditions 
       * @param array filter data based on the passed parameters 
       */ 
      public function getRowsPodcastAdmin($params = array()){ 
        $this->db->select('*'); 
        $this->db->from($this->table); 


        if(array_key_exists("conditions", $params)){
            foreach($params['conditions'] as $key => $val){
                $this->db->where($key, $val);
            }
        }

        if(!empty($params['searchKeywordAdmin'])){
            $search = $params['searchKeywordAdmin'];
            $likeArr = array('podcast_name' => $search);
            $this->db->or_like($likeArr);
        }

        if(array_key_exists('returnType', $params) && $params['returnType'] == 'count'){
            $result = $this->db->count_all_results();
        } else {
          if(array_key_exists("podcast_id", $params)){ 
              $this->db->where('podcast_id', $params['podcast_id']); 
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
    }//getRowsPodcastAdmin ends here
      
      
      
      

    /* 
     * Insert podcast data into the database 
     * @param $data data to be insert based on the passed parameters 
     */ 
    public function insert($data = array()) { 
     if(!empty($data)){           
         // Insert podcast data 
         $insert = $this->db->insert($this->table, $data); 
         
         // Return the status 
         return $insert?true:false; 
     }
    } //insert ends here

 



    /* 
     * Update podcast data into the database 
     * @param $data array to be update based on the passed parameters 
     * @param $id num filter data 
     */ 
    public function update($data, $id) { 

     if(!empty($data) && !empty($id)){ 
         
         // Update podcast data 
         $update = $this->db->update($this->table, $data, array('podcast_id' => $id)); 
          
         // Return the status 
         return $update?true:false; 
     } 
     
    } //update ends here

      



    public function delete($id){
        
        $delete = $this->db->delete($this->table, array('podcast_id' => $id)); 
      
        return $delete?true:false; 

    } //delete ends here




 



 }  //Model ends here
 ?>