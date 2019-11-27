<?php

class T_model extends CI_Model{

  function get_teacher($limit, $offset){               
      return $this->db->get('teacher',$limit,$offset)->result();
  }
 

  function file_upload($data){
     $query= $this->db->insert('teacher',$data);
     if($query){
         echo "success";
     }else{
         echo "error";
     }
  }
    function add($data){
              $this->db->insert('teacher',$data);
        return $this->db->insert_id();
    }
    function all(){
        return $teachers= $this->db->get('teacher')->result(); 
    }
    function getTeacher($t_id){
        $this->db->where('t_id',$t_id);
         return $teacher = $this->db->get('teacher')->row_array(); 
    }
    function updateTeacher($t_id,$forenkey){ 
        $this->db->where('t_id',$t_id);
        $this->db->update('teacher',$forenkey); 
    }
    function deleteTeacher($t_id){
        $this->db->where('t_id',$t_id);
        $this->db->delete('teacher');

    }
    function can_login( $username,$password){
        $data=array(
            'username'=>$username,
            'password'=>$password
        );
        $this->db->select()->from('user')->where($data);
             $query=$this->db->get();
        return $query->first_row('array');

    }
  
    function resgerster_model($data){
         $this->db->insert('user',$data);
         
    }
    public function search_teacher($key){
        $this->db->like('name',$key);
        $query=$this->db->get('teacher');
        return $query->result();

    }
}