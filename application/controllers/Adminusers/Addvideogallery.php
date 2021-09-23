<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Addvideogallery  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }
          public function index(){

    
        $this->load->view('adminuser/header');
        $this->load->view('adminuser/addvideogallery');
        $this->load->view('adminuser/footer');
 }

     public function viewvideogallery(){
    
        $data['h']=$this->Adminuser ->select_Record('videogallery');
     
        $this->load->view('adminuser/header');
        $this->load->view('adminuser/viewallvideogallery',$data);
        $this->load->view('adminuser/footer');
                 
       }

    public function addvideogallery() {

    $this->form_validation->set_rules('videolink', 'Videolink', 'required');

    if ($this->form_validation->run() == FALSE) {
      // $this->load->view(base_url().'Banner');
      echo("hello");
    }else{

        $formArray= array();
        
        if($_FILES['image']['name'])
        {
            $config = array(
                'upload_path'=>'uploads/gallery',
                'allowed_types'=>'jpg|jpeg|gif|png',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('image');
            $img=$this->upload->data();
            $formArray['image'] = $img['file_name'];
        }
        $formArray['videolink']=$this->input->post('videolink');

        $this->Adminuser->insert_Record('videogallery',$formArray);
        $this->session->set_flashdata('success', 'Gallery Image and Video Add Succcessfully !');
        redirect('Adminusers/Addvideogallery');
    }
    
  }
 

   public function update_videogallery()
        {
           $id = $this->input->post('id');
          $this->form_validation->set_rules('videolink', 'Videolink', 'required');
 

          if($this->form_validation->run())
          {
           
           
            $videolink = $this->input->post('videolink');
            $image = $this->input->post('oldImage');
            
            if($_FILES['image']['name']){
                unlink("upload/gallery".$image);
                $config = array(
                    'upload_path'=>'uploads/gallery',
                    'allowed_types'=>'jpg|jpeg|gif|png',
                    );
                $this->load->library('upload',$config);
                $this->upload->do_upload('image');
                $img=$this->upload->data();
                $image = $img['file_name'];
            }

    
            $updateArray = array('videolink'=>$videolink,'image'=>$image);
            $this->Adminuser->update_global_Record('videogallery',$id,$updateArray);
            $this->session->set_flashdata('update','Your details has been updated');
            redirect('Adminusers/Addvideogallery/viewvideogallery');
          }
          else
          {
              echo "hello";
          }
        }

        public function delete_videogallery($id)
         {
          
         $this->Adminuser->delete_Record('videogallery',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Adminusers/Addvideogallery/viewvideogallery');

         }





}
 ?>