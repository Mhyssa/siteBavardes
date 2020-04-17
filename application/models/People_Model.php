<?php

defined('BASEPATH') or exit('No direct script access allowed');

    class People_Model extends CI_Model{
        
                function __construct(){
                    parent :: __construct();
                    $this->table = 'people';
                } //__construct ends here



                /* 
                * Returns rows from the database based on the conditions 
                * @param array filter data based on the passed parameters 
                */ 
                function getRowsPeople($params = array()){

                    $this->db->select('*');
                    $this->db->from($this->table);

                            if(array_key_exists('people_id', $params)){
                                $this->db->where('people_id', $params['people_id']);
                                $query = $this->db->get();
                                $result = $query->row_array();
                            } else {
                                if(array_key_exists('start', $params) && array_key_exists('limit', $params)){
                                    $this->db->limit($params['limit'], $params['start']);
                                } elseif (!array_key_exists('start', $params) && array_key_exists('limit', $params)){
                                    $this->db->limit($params['limit']);
                                } else {
                                    $query = $this->db->get();
                                    $result = ($query->num_rows() > 0) ? $query->result_array():FALSE;
                                }
                                                                  
                        }

                        return $result;

                } //getRowsPeople ends here





                /* 
                * Insert people data into the database 
                * @param $data data to be insert based on the passed parameters 
                */ 
                function insert($data = array()){
                    if(!empty($data)){
                        //Insert people data
                        $insert = $this->db->insert($this->table, $data);

                        //Return the status
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
                        $update = $this->db->update($this->table, $data, array('people_id' => $id)); 
                        
                        // Return the status 
                        return $update?true:false; 
                    } 
                    
                } //update ends here





                function delete($id){
                    //Delete people data
                    $delete = $this->db->delete($this->table, array('people_id'=>$id));

                    //Return the status
                    return $delete?true:false;

                } //delete ends here






                



    } //model ends here


?>