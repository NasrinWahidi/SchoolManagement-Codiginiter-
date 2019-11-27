    <?php

    class Home extends CI_Controller
    {
    function __construct(){
        parent::__construct();
        $this->load->model('t_model');
        $this->load->database();
        $this->load->helper('url');
      $this->lang->load('main',$this->session->userdata('language'));
     
    } 


    function lang_about(){
        $this->lang->load('main','english');
        echo $this->lang->line('about');
    }
    function lang_load($lang){
        $this->session->set_userdata('language',$lang);
        redirect($this->session->userdata('lastvisited'));
    }

    function index(){
    
     $this->load->view('res/header');
     $this->load->view('res/sidebar');
    $this->load->view('res/footer');
    $this->load->view('res/end');
    $this->session->set_userdata('lastvisited',current_url());
    
  

    }
      function search(){
         $key=$this->input->post('name');
         $data['teachers'] = $this->t_model->search_teacher($key);
         $this->load->view('res/search_teacher',$data);
        
      }
    function insert_teacher(){
        $this->load->view('res/add_teacher');
    }
    function show_term(){
        $this->load->view('res/term');
    }
        function show_login(){
            $this->view->load('res/login');
        }

    
   
    function show_addd(){
        $this->view->load('res/edit');
    }

    function new_teacher(){
        $this->load->view('new_teacher');
    }
    function showSidbar(){
        $this->load->view('res/sidebar');
    }




    function index1(){
        $this->load->library('pagination');
        $offset=$this->uri->segment(3);
        $config['base_url']=base_url().'index.php/home/index1';
        $config['total_rows']=$this->db->count_all('teacher');
        $config['per_page']=5;
              $this->pagination->initialize($config); 
        $data['teachers']=$this->t_model->get_teacher($config['per_page'],$offset);
         $this->load->view('res/all_teacher',$data);


    }





    function create(){
        if($_POST){
                    $config['upload_path']='./assets/upload';
                    $config['allowed_types']='gif|jpg|png|jpeg';
                    $config['max_size']=1000;
                    $config['width']=20;
                    $config['height']=30;
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    
                    if(! $this->upload->do_upload('image')){
                    echo "error";

                        $this->load->view('res/add_teacher');
                    }else{
                        $data=array(
                        'name'=>$this->input->post("name"),
                        'father_name'=>$this->input->post("father_name"),
                        'phonenum'=>$this->input->post("phonenum"),
                        'jop_date'=>$this->input->post("jop_date"),
                        'salary'=>$this->input->post("salary"),
                        'birthday'=>$this->input->post("birthday"),
                        'current_jop_location'=>$this->input->post("current_jop_location"),
                        'pervious_jop_location'=>$this->input->post("pervious_jop_location"),
                        'image'=>$this->upload->data('file_name'),
                        
                        'term_id'=>$this->input->post("shift")
                        );
                        $this->t_model->add($data);
                        redirect('home/index1');
        }
    }
    }


    function edit($t_id){
        $this->load->model("t_model");
        $data['teacher']=$this->t_model->getTeacher($t_id);   
        $this->load->view('res/edit',$data);
    }

    function edit1($t_id){
    $this->load->model("t_model");
    $data['teacher']=$this->t_model->getTeacher($t_id);


    $this->form_validation->set_rules("name","Name","required");
    $this->form_validation->set_rules("father_name","Father_Name","required"|"is_unique");
    $this->form_validation->set_rules("phonenum","Phone","required"|"valid_phonenum");
    $this->form_validation->set_rules("jop_date","Jop_date","required"|"valid_jop_date");
    $this->form_validation->set_rules("salary","Salary","required"|"valid_salary");
    $this->form_validation->set_rules("birthday","Birthday","required"|"valid_birthday");
    $this->form_validation->set_rules("current_jop_location","Current_jop_location","required"|"valid_current_jop_location");
    $this->form_validation->set_rules("pervious_jop_location","Pervious_jop_location","required"|"valid_pervious_jop_location");

    if($this->form_validation->run() == flase){
 
    }else{
    $data=array();
    $data['name']=$this->input->post("Name");
    $data['father_name']=$this->input->post("Father_Name");
    $data['phonenum']=$this->input->post("Phone");
    $data['jop_date']=$this->input->post("Jop_date");
    $data['salary']=$this->input->post("Salary");
    $data['birthday']=$this->input->post("Birthday");
    $data['current_jop_location']=$this->input->post("Current_jop_location");
    $data['pervious_jop_location']=$this->input->post("Pervious_jop_location");
        $this->t_model->updateTeacher($t_id,$data);
    
        $this->session->set_flashdata('success',"record update successfully");
        redirect('home/index1');
    }
    } 


    function delete($t_id){
     $this->load->model("t_model");
       $this->t_model->deleteTeacher($t_id);
      redirect('home/index1');

    }
    





    function login(){
         $this->load->view("res/login");
    }

    function login_validation( ){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        if( $this->form_validation->run()){
            $username=$this->input->post("username");
            $password=$this->input->post("password");
            $data=$this->t_model->can_login( $username,$password);
            if (!$data) {
                echo "<h1>"."YOU CAN NOT LOGIN"."</h1>";
            }else{
              
                $this->load->view('res/sidebar');
            }
            
        
        }else{
            echo "validation error";
        }
    }



    function enter(){

    if($this->session->userdata('username') != ''){
    echo '<h2>welcom -'.$this->session->userdata('username').'</h2>';
    echo '<lable><a href="'.base_url().'home/logout">Logout</a></lable>';

    }else{
    redirect(base_url() . 'home/login1');
    }
    }




    function logout(){
    $this->session->unset_userdata('username');
    redirect('home/loder');
    }





    function regestration(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','username','required');
        if($this->form_validation->run() == false){
               $this->load->view('res/regester');
              
        }
        else{

       
               $data=array(
                    'username'=>$this->input->post("username"),
                    'password'=>$this->input->post("password"),
                    'email'=>$this->input->post("email"),
                    'contact_number'=>$this->input->post("contact_number")
                );
                
                $this->t_model->resgerster_model($data);
               
                
        
    }
    redirect('home/login');
    }

function loder(){

    $this->load->view('res/regester');
}
    function check_teacher($email){
        $query=$this->db->where('email',$email)->get("user");
        if($query->num_rows()>0){
            $this->form_validation->set_message('check_teacher','the'.$email.'belong to an existing account');
            return FALSE;
        }else{
            return TRUE;
        }
    }



    }