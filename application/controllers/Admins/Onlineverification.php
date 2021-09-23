<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Onlineverification  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }



     public function viewonlineverification(){
    
        $data['h']=$this->Adminuser ->select_Record('online_verification');
     
        $this->load->view('admins/header');
        $this->load->view('admins/viewallonlineverification',$data);
        $this->load->view('admins/footer');
                 
       }



    public function loginonlineverification(){
         
 
    $email = $this->input->post('email');
    $enumber = $this->input->post('enumber');

     $result=$this->db->get_where('onlineadmission',$_POST)->row_array();

     $session_data = array(
             'email' => $email,
             'enumber' => $enumber
             );
         
    if(!empty($result)){
      
      $this->session->set_userdata($session_data);
      $this->session->set_userdata('AdminData',$result);
      redirect('Web/student_document_verification');

    }else{
      $this->session->set_flashdata('loginonlineverification'," Your Enrollment No is not Correct. Try Again...");
      $this->session->set_flashdata('msg_class','alert-danger');
      redirect('Web/admission_verification');
    }
  }



    public function addonlineverification() {

    

     $this->form_validation->set_rules('email','Email','required');

    if ($this->form_validation->run() == FALSE) {
      // $this->load->view(base_url().'Onlineadmission');
      echo("hello");
    }else{

        $formArray= array();
        
        if($_FILES['image']['name'])
        {
            $config = array(
                'upload_path'=>'uploads/onlineverification',
                'allowed_types'=>'jpg|jpeg|gif|png',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('image');
            $img=$this->upload->data();
            $formArray['image'] = $img['file_name'];
        }


        if($_FILES['image1']['name']){
                $config = array(
                    'upload_path'=>'uploads/onlineverification',
                    'allowed_types'=>'jpg|jpeg|gif|png',
                    );
                $this->load->library('upload',$config);
                $this->upload->do_upload('image1');
                $img=$this->upload->data();
                $formArray['image1'] = $img['file_name'];
          }


       
        $formArray['enumber']=$this->input->post('enumber');
        $formArray['email']=$this->input->post('email');
       
      

        $session_data = array(
             'email' => $email
             );
    

        $this->Adminuser->insert_Record('online_verification',$formArray);
        $this->session->set_flashdata('success', 'Gallery Image Add Succcessfully !');
        redirect('Web');
    }
    
  }
 



        // public function delete_gallery($id)
        //  {
          
        //  $this->Adminuser->delete_Record('galleryimage',$id);
        //  $this->session->set_flashdata('delete','Your details has been deleted');
        //  redirect(base_url().'Adminusers/Addgallery/viewgallery');

        //  }





}
 ?>