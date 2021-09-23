<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Addliveclass  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }


          public function index(){

    
        $this->load->view('teacherdashboard/header');
        $this->load->view('teacherdashboard/addlive_class');
        $this->load->view('teacherdashboard/footer');
          }

     public function view_liveclass(){
    
        $data['h']=$this->Adminuser ->select_desc_Record('liveclass');
     
        $this->load->view('teacherdashboard/header');
        $this->load->view('teacherdashboard/viewall_live',$data);
        $this->load->view('teacherdashboard/footer');
                 
       }

   
    public function add_liveclass() {

    $this->form_validation->set_rules('class', 'Class', 'required');
 

    if ($this->form_validation->run() == FALSE) {

      // $this->load->view(base_url().'Coursepdf');
      echo("hello");
      
       }else{

        $formArray= array();
        


        $formArray['class']=$this->input->post('class');
        $formArray['subject']=$this->input->post('subject');
        $formArray['link']=$this->input->post('link');
   
      
        $this->Adminuser->insert_Record('liveclass',$formArray);
        $this->session->set_flashdata('success', 'live class Add Succcessfully !');
        redirect('Teacherdashboard/Addliveclass');
    }
    
  }

   
        public function delete_liveclass($id)
         {
          
         $this->Adminuser->delete_Record('liveclass',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Teacherdashboard/Addliveclass/view_liveclass');

         }





}
 ?>