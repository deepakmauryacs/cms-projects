<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Addacademicvideo  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }
   
    public function index(){
     
      $this->load->view('teacherdashboard/header');
        $this->load->view('teacherdashboard/addacademicvideo');
        $this->load->view('teacherdashboard/footer');

    }


     public function viewallacademicvideo(){
    
        $data['h']=$this->Adminuser ->select_Record('academicvideo');
     
        $this->load->view('teacherdashboard/header');
        $this->load->view('teacherdashboard/viewall_academicvideo',$data);
        $this->load->view('teacherdashboard/footer');
                 
       }


    public function addacademicvideo() {

     $this->form_validation->set_rules('teachername','Teachername','required');

    if ($this->form_validation->run() == FALSE) {
      // $this->load->view(base_url().'Onlineadmission');
      echo("hello");
    }else{

        $formArray= array();
        
        if($_FILES['image']['name'])
        {
            $config = array(
                'upload_path'=>'uploads/course',
                'allowed_types'=>'jpg|jpeg|gif|png',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('image');
            $img=$this->upload->data();
            $formArray['image'] = $img['file_name'];
        }


        $formArray['class']=$this->input->post('class');
        $formArray['board']=$this->input->post('board');
        $formArray['subject']=$this->input->post('subject');
        $formArray['videolink']=$this->input->post('videolink');
        $formArray['description']=$this->input->post('description'); 
        $formArray['teachername']=$this->input->post('teachername'); 
        $formArray['status']=$this->input->post('status');
        

       

        $this->Adminuser->insert_Record('academicvideo',$formArray);
        $this->session->set_flashdata('success', 'course Add Succcessfully !');
        redirect('Teacherdashboard/Addacademicvideo');
    }
    
  }
 

   public function update_academicvideo()
        {
           $id = $this->input->post('id');
          $this->form_validation->set_rules('teachername', 'Teachername', 'required');
 

          if($this->form_validation->run())
          {
           

            $class = $this->input->post('class');
            $board = $this->input->post('board');
            $subject = $this->input->post('subject');
            $videolink = $this->input->post('videolink');
            $description = $this->input->post('description');
            $teachername = $this->input->post('teachername');
            $status = $this->input->post('status');
            

            $image = $this->input->post('oldImage');
            
            if($_FILES['image']['name']){
                unlink("upload/".$image);
                $config = array(
                    'upload_path'=>'uploads/course',
                    'allowed_types'=>'jpg|jpeg|gif|png',
                    );
                $this->load->library('upload',$config);
                $this->upload->do_upload('image');
                $img=$this->upload->data();
                $image = $img['file_name'];
            }

    
            $updateArray = array('class'=>$class,'board'=>$board,'subject'=>$subject,'videolink'=>$videolink,'description'=>$description,'teachername'=>$teachername,'status'=>$status,'image'=>$image);
            $this->Adminuser->update_global_Record('academicvideo',$id,$updateArray);
            $this->session->set_flashdata('update','Your details has been updated');

            redirect(base_url().'Teacherdashboard/Addacademicvideo/viewallacademicvideo');


          }
          else
          {
              echo "hello";
          }
        }

        public function delete_academicvideo($id)
         {
          
         $this->Adminuser->delete_Record('academicvideo',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Teacherdashboard/Addacademicvideo/viewallacademicvideo');

         }
}
 ?>