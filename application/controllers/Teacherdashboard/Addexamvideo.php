<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Addexamvideo  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }
   
    public function index(){
     
      $this->load->view('teacherdashboard/header');
        $this->load->view('teacherdashboard/add_exam_video');
        $this->load->view('teacherdashboard/footer');

    }


     public function viewallexamvideo(){
    
        $data['h']=$this->Adminuser ->select_Record('examvideo');
     
        $this->load->view('teacherdashboard/header');
        $this->load->view('teacherdashboard/viewall_exam_video',$data);
        $this->load->view('teacherdashboard/footer');
                 
       }


    public function addexamvideo() {

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


        $formArray['examtype']=$this->input->post('examtype');
        $formArray['examname']=$this->input->post('examname');
        $formArray['subject']=$this->input->post('subject');
        $formArray['videolink']=$this->input->post('videolink');
        $formArray['description']=$this->input->post('description'); 
        $formArray['teachername']=$this->input->post('teachername'); 
        $formArray['status']=$this->input->post('status');
        

       

        $this->Adminuser->insert_Record('examvideo',$formArray);
        $this->session->set_flashdata('success', 'course Add Succcessfully !');
        redirect(base_url().'Teacherdashboard/Addexamvideo');
    }
    
  }
 

   public function update_examvideo()
        {
           $id = $this->input->post('id');
          $this->form_validation->set_rules('teachername', 'Teachername', 'required');
 

          if($this->form_validation->run())
          {
           

            $examtype = $this->input->post('examtype');
            $examname = $this->input->post('examname');
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

    
            $updateArray = array('examtype'=>$examtype,'examname'=>$examname,'subject'=>$subject,'videolink'=>$videolink,'description'=>$description,'teachername'=>$teachername,'status'=>$status,'image'=>$image);
            $this->Adminuser->update_global_Record('examvideo',$id,$updateArray);
            $this->session->set_flashdata('update','Your details has been updated');

            redirect(base_url().'Teacherdashboard/Addexamvideo/viewallexamvideo');


          }
          else
          {
              echo "hello";
          }
        }

        public function delete_examvideo($id)
         {
          
         $this->Adminuser->delete_Record('examvideo',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Teacherdashboard/Addexamvideo/viewallexamvideo');

         }
}
 ?>