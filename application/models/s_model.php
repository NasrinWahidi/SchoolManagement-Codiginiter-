<?php

class S_model extends CI_Model{

    function add($data){
       $this->db->insert('subject',$data);
        return $this->db->insert_id();
    }
   
    function getSubject(){
         return $this->db->get('subject')->result_array(); 
    }
   
    function deleteSubject($s_id){
        $this->db->where('s_id',$s_id);
        $this->db->delete('subject');

    }
    public function get_teachers(){
        $this->db->select("*")->from('teacher');
        $q = $this->db->get();
        return $q->result_array();
    }

    function all(){
        $this->db->select('*')->from('subject')->order_by('grade','ASC');
        $teachers= $this->db->get();
        return $teachers->result(); 
    }

    function updateSubject($s_id,$forenkey){ 
        $this->db->where('s_id',$s_id);
        $this->db->update('subject',$forenkey); 
    }







}