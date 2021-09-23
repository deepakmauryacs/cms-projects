<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Banner  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }
          public function index(){

    
        $this->load->view('adminuser/header');
        $this->load->view('adminuser/addbanner');
        $this->load->view('adminuser/footer');
 }

     public function viewbanner(){
    
        $data['h']=$this->Adminuser ->select_Record('banner');
     
        $this->load->view('adminuser/header');
        $this->load->view('adminuser/viewallbanner',$data);
        $this->load->view('adminuser/footer');
                 
       }

    public function addbanner() {
    $this->form_validation->set_rules('heading', 'Heading', 'required');
    if ($this->form_validation->run() == FALSE) {
      // $this->load->view(base_url().'Banner');
      echo("hello");
    }else{

        $formArray= array();
        
        if($_FILES['image']['name'])
        {
            $config = array(
                'upload_path'=>'uploads/banner',
                'allowed_types'=>'jpg|jpeg|gif|png',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('image');
            $img=$this->upload->data();
            $formArray['image'] = $img['file_name'];
        }

        $formArray['heading ']=$this->input->post('heading');
        $formArray['subheading ']=$this->input->post('subheading');
        $formArray['status ']=$this->input->post('status');
        $this->Adminuser->insert_Record('banner',$formArray);
        $this->session->set_flashdata('success', 'Banner Add Succcessfully !');
        redirect('Adminusers/Banner');
    }
    
  }
 

   public function update_banner()
        {
           $id = $this->input->post('id');
          $this->form_validation->set_rules('heading', 'Heading', 'required');
 

          if($this->form_validation->run())
          {
            $this->load->model('Adminuser');
        
     
            $heading = $this->input->post('heading');
            $subheading = $this->input->post('subheading');
            $status = $this->input->post('status');
           
            $image = $this->input->post('oldImage');
            
            if($_FILES['image']['name']){
                unlink("upload/".$image);
                $config = array(
                    'upload_path'=>'uploads/banner',
                    'allowed_types'=>'jpg|jpeg|gif|png',
                    );
                $this->load->library('upload',$config);
                $this->upload->do_upload('image');
                $img=$this->upload->data();
                $image = $img['file_name'];
            }

    
            $updateArray = array('heading'=>$heading,'subheading'=>$subheading,'status'=>$status,'image'=>$image);
            $this->Adminuser->update_global_Record('banner',$id,$updateArray);
            $this->session->set_flashdata('update','Your details has been updated');
            redirect('Adminusers/Banner/viewbanner');
          }
          else
          {
              echo "hello";
          }
        }

        public function delete_banner($id)
         {
          
         $this->Adminuser->delete_Record('banner',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Adminusers/Banner/viewbanner');

         }





}
 ?>