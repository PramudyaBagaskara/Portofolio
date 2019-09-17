<?php 

class Departemen_model extends CI_Model {
    public function bacaAll(){
       
        return $this->db->get('departemen');
    }
    public function insertOne($data){
        $this->db->insert('departemen',$data);
    }
}

?>