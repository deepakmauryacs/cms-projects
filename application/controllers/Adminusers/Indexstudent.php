<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Indexstudent  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }
          public function index(){

    
        $this->load->view('adminuser/header');
        $this->load->view('adminuser/indexstudent');
        $this->load->view('adminuser/footer');
 }

     public function viewstudent(){
    
        $data['h']=$this->Adminuser ->select_Record('indexstudent');
     
        $this->load->view('adminuser/header');
        $this->load->view('adminuser/viewallindexstudent',$data);
        $this->load->view('adminuser/footer');
                 
       }

    public function addstudent() {
    $this->form_validation->set_rules('name', 'Name', 'required');
    if ($this->form_validation->run() == FALSE) {
      // $this->load->view(base_url().'Banner');
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

        $formArray['name']=$this->input->post('name');
        $formArray['subject']=$this->input->post('subject');
        $formArray['description']=$this->input->post('description');
        $this->Adminuser->insert_Record('indexstudent',$formArray);
        $this->session->set_flashdata('success', 'student Add Succcessfully !');
        redirect('Adminusers/Indexstudent');
    }
    
  }
 

   public function update_student()
        {
           $id = $this->input->post('id');
          $this->form_validation->set_rules('name', 'Name', 'required');
 

          if($this->form_validation->run())
          {
           
            $name = $this->input->post('name');
            $subject = $this->input->post('subject');
            $description = $this->input->post('description');
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

    
            $updateArray = array('name'=>$name,'subject'=>$subject,'description'=>$description,'image'=>$image);
            $this->Adminuser->update_global_Record('indexstudent',$id,$updateArray);
            $this->session->set_flashdata('update','Your details has been updated');
            redirect('Adminusers/Indexstudent/viewstudent');
          }
          else
          {
              echo "hello";
          }
        }

        public function delete_student($id)
         {
          
         $this->Adminuser->delete_Record('indexstudent',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Adminusers/Indexstudent/viewstudent');

         }





}
 ?>