<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Galleryheading  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }
          public function index(){

    
        $this->load->view('adminuser/header');
        $this->load->view('adminuser/galleryheading');
        $this->load->view('adminuser/footer');
 }

     public function viewgalleryheading(){
    
        $data['h']=$this->Adminuser ->select_Record('galleryheading');
     
        $this->load->view('adminuser/header');
        $this->load->view('adminuser/viewallgalleryheading',$data);
        $this->load->view('adminuser/footer');
                 
       }

    public function addgalleryheading() {
    $this->form_validation->set_rules('heading', 'Heading', 'required');
    if ($this->form_validation->run() == FALSE) {
      // $this->load->view(base_url().'Banner');
      echo("hello");
    }else{

        $formArray= array();
        
       

        $formArray['heading']=$this->input->post('heading');
        $formArray['datafilterid']=$this->input->post('datafilterid');
      
        $this->Adminuser->insert_Record('galleryheading',$formArray);
        $this->session->set_flashdata('success', 'Banner Add Succcessfully !');
        redirect('Adminusers/Galleryheading');
    }
    
  }
 

   public function update_galleryheading()
        {
           $id = $this->input->post('id');
          $this->form_validation->set_rules('heading', 'Heading', 'required');
 

          if($this->form_validation->run())
          {
            
            $heading = $this->input->post('heading');
            $datafilterid = $this->input->post('datafilterid');
      
            $updateArray = array('heading'=>$heading,'datafilterid'=>$datafilterid);
            $this->Adminuser->update_global_Record('galleryheading',$id,$updateArray);
            $this->session->set_flashdata('update','Your details has been updated');
            redirect('Adminusers/Galleryheading/viewgalleryheading');
            
          }
          else
          {
              echo "hello";
          }
        }

        public function delete_galleryheading($id)
         {
          
         $this->Adminuser->delete_Record('galleryheading',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Adminusers/Galleryheading/viewgalleryheading');

         }





}
 ?>