<?php


class CrudModel extends CI_Model{


    public function get_itemCRUD(){
        if(!empty($this->input->get("search"))){
          $this->db->like('title', $this->input->get("search"));
          $this->db->or_like('description', $this->input->get("search")); 
        }
        $query = $this->db->get("affiches");
        return $query->result();
    }


    public function insert_item()
    {    
        $data = array(
            'aff_nom' => $this->input->post('name'),
            'aff_description' => $this->input->post('description'),
            'aff_stock'=> $this->input->post('stock'),
            'aff_prix'=> $this->input->post('price')
        );
        return $this->db->insert('affiches', $data);
    }


    public function update_item($id) 
    {
        $data=array(
            'aff_nom' => $this->input->post('name'),
            'aff_description'=> $this->input->post('description'),
            'aff_stock'=> $this->input->post('stock'),
            'aff_prix'=> $this->input->post('price')
        );
        if($id==0){
            return $this->db->insert('affiches',$data);
        }else{
            $this->db->where('aff_id',$id);
            return $this->db->update('affiches',$data);
        }        
    }


    public function find_item($id)
    {
        return $this->db->get_where('affiches', array('aff_id' => $id))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('affiches', array('aff_id' => $id));
    }
}
?>