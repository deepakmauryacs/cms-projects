<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Addgallery  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }
          public function index(){

    
        $this->load->view('adminuser/header');
        $this->load->view('adminuser/addgalleryimage');
        $this->load->view('adminuser/footer');
 }

     public function viewgallery(){
    
        $data['h']=$this->Adminuser ->select_Record('galleryimage');
     
        $this->load->view('adminuser/header');
        $this->load->view('adminuser/viewallgalleryimage',$data);
        $this->load->view('adminuser/footer');
                 
       }

    public function addgallery() {

    $this->form_validation->set_rules('datafilterid', 'Datafilterid', 'required');

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
        $formArray['datafilterid']=$this->input->post('datafilterid');

        $this->Adminuser->insert_Record('galleryimage',$formArray);
        $this->session->set_flashdata('success', 'Gallery Image Add Succcessfully !');
        redirect('Adminusers/Addgallery');
    }
    
  }
 

   public function update_gallery()
        {
           $id = $this->input->post('id');
          $this->form_validation->set_rules('datafilterid', 'Datafilterid', 'required');
 

          if($this->form_validation->run())
          {
           
           
            $datafilterid = $this->input->post('datafilterid');
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

    
            $updateArray = array('datafilterid'=>$datafilterid,'image'=>$image);
            $this->Adminuser->update_global_Record('galleryimage',$id,$updateArray);
            $this->session->set_flashdata('update','Your details has been updated');
            redirect('Adminusers/Addgallery/viewgallery');
          }
          else
          {
              echo "hello";
          }
        }

        public function delete_gallery($id)
         {
          
         $this->Adminuser->delete_Record('galleryimage',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Adminusers/Addgallery/viewgallery');

         }





}
 ?>