<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Addteacher  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }
   
    public function index(){
     
      $this->load->view('admins/header');
        $this->load->view('admins/addteacher');
        $this->load->view('admins/footer');

    }


     public function viewallteacher(){
    
        $data['h']=$this->Adminuser ->select_Record('teacher');
     
        $this->load->view('admins/header');
        $this->load->view('admins/viewallteacher',$data);
        $this->load->view('admins/footer');
                 
       }


    public function addteacher() {

     $this->form_validation->set_rules('teachername','Teachername','required');

    if ($this->form_validation->run() == FALSE) {
      // $this->load->view(base_url().'Onlineadmission');
      echo("hello");
    }else{

        $formArray= array();
        
        if($_FILES['image']['name'])
        {
            $config = array(
                'upload_path'=>'uploads/teacher',
                'allowed_types'=>'jpg|jpeg|gif|png',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('image');
            $img=$this->upload->data();
            $formArray['image'] = $img['file_name'];
        }


        $fourRandomDigit = mt_rand(1000,9999);
       

       
        $formArray['teacherid']=$fourRandomDigit; 
       
        $formArray['teachername']=$this->input->post('teachername');
        $formArray['specialist']=$this->input->post('specialist');
        $formArray['aadharnumber']=$this->input->post('aadharnumber');
        $formArray['contactnumber']=$this->input->post('contactnumber');
        $formArray['emailid']=$this->input->post('emailid');
        $formArray['password']=$this->input->post('password');  
        $formArray['status']=$this->input->post('status');
        

        
    

        $this->Adminuser->insert_Record('teacher',$formArray);
        $this->session->set_flashdata('success', 'Teacher Add Succcessfully !');
        redirect('Admins/Addteacher');
    }
    
  }
 

   public function update_teacher()
        {
           $id = $this->input->post('id');
          $this->form_validation->set_rules('teachername', 'Teachername', 'required');
 

          if($this->form_validation->run())
          {
           

            $teachername = $this->input->post('teachername');
            $specialist = $this->input->post('specialist');
            $contactnumber = $this->input->post('contactnumber');
            $aadharnumber = $this->input->post('aadharnumber');
            $emailid = $this->input->post('emailid');
            $password = $this->input->post('password');
            $status = $this->input->post('status');
            
            $image = $this->input->post('oldImage');
  
            if($_FILES['image']['name']){
                unlink("upload/".$image);
                $config = array(
                    'upload_path'=>'uploads/teacher',
                    'allowed_types'=>'jpg|jpeg|gif|png',
                    );
                $this->load->library('upload',$config);
                $this->upload->do_upload('image');
                $img=$this->upload->data();
                $image = $img['file_name'];
            }

    
            $updateArray = array('teachername'=>$teachername,'specialist'=>$specialist,'aadharnumber'=>$aadharnumber,'contactnumber'=>$contactnumber,'emailid'=>$emailid,'password'=>$password,'status'=>$status,'image'=>$image);
            $this->Adminuser->update_global_Record('teacher',$id,$updateArray);
            $this->session->set_flashdata('update','Your details has been updated');

            redirect(base_url().'Admins/Addteacher/viewallteacher');


          }
          else
          {
              echo "hello";
          }
        }

        public function delete_student($id)
         {
          
         $this->Adminuser->delete_Record('teacher',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admins/Addstudent/viewallstudent');

         }





}
 ?>