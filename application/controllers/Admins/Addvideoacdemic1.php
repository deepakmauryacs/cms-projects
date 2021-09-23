<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Addvideoacdemic1  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }
   
    public function index(){
     
      $this->load->view('admins/header');
        $this->load->view('admins/add_video_academic1');
        $this->load->view('admins/footer');

    }


     public function viewallvideoacdemic1(){
    
        $data['h']=$this->Adminuser ->select_Record('video_course1');
     
        $this->load->view('admins/header');
        $this->load->view('admins/viewalladd_video_academic1',$data);
        $this->load->view('admins/footer');
                 
       }


    public function addvideocourse() {

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
        $formArray['subject']=$this->input->post('subject');
        $formArray['videolink']=$this->input->post('videolink');
        $formArray['description']=$this->input->post('description'); 
        $formArray['teachername']=$this->input->post('teachername'); 
        $formArray['status']=$this->input->post('status');
        

        $session_data = array(
             'email' => $email
             );
    

        $this->Adminuser->insert_Record('video_course1',$formArray);
        $this->session->set_flashdata('success', 'course Add Succcessfully !');
        redirect('Admins/Addvideoacdemic1');
    }
    
  }
 

   public function update_videocourse()
        {
           $id = $this->input->post('id');
          $this->form_validation->set_rules('teachername', 'Teachername', 'required');
 

          if($this->form_validation->run())
          {
           

            $class = $this->input->post('class');
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

    
            $updateArray = array('class'=>$class,'subject'=>$subject,'videolink'=>$videolink,'description'=>$description,'teachername'=>$teachername,'status'=>$status,'image'=>$image);
            $this->Adminuser->update_global_Record('video_course1',$id,$updateArray);
            $this->session->set_flashdata('update','Your details has been updated');

            redirect(base_url().'Admins/Addvideoacdemic1/viewallvideoacdemic1');


          }
          else
          {
              echo "hello";
          }
        }

        public function delete_videocourse($id)
         {
          
         $this->Adminuser->delete_Record('video_course1',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admins/Addvideoacdemic1/viewallvideoacdemic1');

         }





}
 ?>