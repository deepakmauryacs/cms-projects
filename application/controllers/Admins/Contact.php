<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Contact  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }
   
    public function index(){
     
      $this->load->view('admins/header');
        $this->load->view('admins/addstudent');
        $this->load->view('admins/footer');

    }


     public function viewallstudent(){
    
        $data['h']=$this->Adminuser ->select_Record('student');
     
        $this->load->view('admins/header');
        $this->load->view('admins/viewallstudent',$data);
        $this->load->view('admins/footer');
                 
       }


    public function addstudent() {

     $this->form_validation->set_rules('email','Email','required');

    if ($this->form_validation->run() == FALSE) {
      // $this->load->view(base_url().'Onlineadmission');
      echo("hello");
    }else{

        $formArray= array();
        
        if($_FILES['image']['name'])
        {
            $config = array(
                'upload_path'=>'uploads/student',
                'allowed_types'=>'jpg|jpeg|gif|png',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('image');
            $img=$this->upload->data();
            $formArray['image'] = $img['file_name'];
        }


        $fourRandomDigit = mt_rand(1000,9999);
        $nineRandomDigit = mt_rand(100000000,999999999);


        $formArray['enumber']=$this->input->post('enumber');
        $formArray['rollno']=$fourRandomDigit; 
        $formArray['examid']=$nineRandomDigit;
        $formArray['studentname']=$this->input->post('studentname');
        $formArray['class']=$this->input->post('class');
        $formArray['contactnumber']=$this->input->post('contactnumber');
        $formArray['email']=$this->input->post('email');
        $formArray['password']=$this->input->post('password');  
        $formArray['status']=$this->input->post('status');
        

        $session_data = array(
             'email' => $email
             );
    

        $this->Adminuser->insert_Record('student',$formArray);
        $this->session->set_flashdata('success', 'Student Add Succcessfully !');
        redirect('Admins/Addstudent');
    }
    
  }
 

   public function update_student()
        {
           $id = $this->input->post('id');
          $this->form_validation->set_rules('studentname', 'Studentname', 'required');
 

          if($this->form_validation->run())
          {
           

            $studentname = $this->input->post('studentname');
            $class = $this->input->post('class');
            $contactnumber = $this->input->post('contactnumber');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $status = $this->input->post('status');
            

            $image = $this->input->post('oldImage');
            
            if($_FILES['image']['name']){
                unlink("upload/".$image);
                $config = array(
                    'upload_path'=>'uploads/student',
                    'allowed_types'=>'jpg|jpeg|gif|png',
                    );
                $this->load->library('upload',$config);
                $this->upload->do_upload('image');
                $img=$this->upload->data();
                $image = $img['file_name'];
            }

    
            $updateArray = array('studentname'=>$studentname,'class'=>$class,'contactnumber'=>$contactnumber,'email'=>$email,'password'=>$password,'status'=>$status,'image'=>$image);
            $this->Adminuser->update_global_Record('student',$id,$updateArray);
            $this->session->set_flashdata('update','Your details has been updated');

            redirect(base_url().'Admins/Addstudent/viewallstudent');


          }
          else
          {
              echo "hello";
          }
        }

        public function delete_student($id)
         {
          
         $this->Adminuser->delete_Record('student',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admins/Addstudent/viewallstudent');

         }





}
 ?>