<?php

class Subject extends CI_Controller
{
function __construct(){
    parent::__construct();
    $this->load->model('s_model');
    $this->load->database();
    $this->load->helper('url');
    $this->lang->load('main',$this->session->userdata('language'));

}


 function add_subject(){
     $data['teachers'] = $this->s_model->get_teachers();
     $this->load->view('res/add_subject',$data);
 }
 
function create(){
    $data['name']=$this->input->post("name");
    $data['grade']=$this->input->post("grade");
    $data['t_id']=$this->input->post("teachers");

       
        $this->s_model->add($data);
        // $this->session->set_flashdata('success',"save was susses");
        redirect('subject/index1');
}



function index1(){
    $data['teacher']=$this->s_model->all();
    $this->load->view('res/all_subject',$data);
    $this->session->set_userdata('lastvisited',current_url());

}

function delete($s_id){
    $this->load->model("s_model");
   $teachers= $this->s_model->getSubject($s_id);
   //$this->load->view('res/all_teacher');

   if(empty($teachers)){
   $this->session->set_flashdata('failure',"record not found in the database");
   redirect(base_url(),'index.php/subject/index1');
   } else{
   $this->s_model->deleteSubject($s_id);
   $this->session->set_flashdata('success',"record delete successfull");
   redirect('subject/index1');

   }
   }



function edit($s_id){
    $this->load->model("s_model");
    $data['teacher']=$this->s_model->getSubject();   
    $this->load->view('res/edit_subject',$data);
    print_r($data);
}

function edit1($s_id){
    $this->load->model("s_model");
    $data['teacher']=$this->s_model->getSubject($s_id);

    $this->form_validation->set_rules("name","Name","required");
   
    if($this->form_validation->run() == flase){
    
    }else{
    $data=array();
    $data['name']=$this->input->post("name");
    
        $this->s_model->updateSubject($s_id,$data);
    
        $this->session->set_flashdata('success',"record update successfully");
        redirect('home/index1');
    }
    } 
}

