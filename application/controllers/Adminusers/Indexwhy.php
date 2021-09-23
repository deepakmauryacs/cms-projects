<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Indexwhy  extends CI_Controller 
{  
      function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }

    public function index(){
    
        $data['h']=$this->Adminuser ->select_Record('indexawhy');
        $this->load->view('adminuser/header');
        $this->load->view('adminuser/indexwhy',$data);
        $this->load->view('adminuser/footer');
                  }

  
   public function update_indexwhy()
        {
           $id = $this->input->post('id');
           // $this->form_validation->set_rules('image', 'Image', 'trim|required');
           // $this->form_validation->set_rules('heading', 'Heading', 'trim|required');
           $this->form_validation->set_rules('description', 'description', 'required');

          if($this->form_validation->run())
          {
            
            
            $description = $this->input->post('description');
            $heading1 = $this->input->post('heading1');
            $description1 = $this->input->post('description1');
            $heading2 = $this->input->post('heading2');
            $description2 = $this->input->post('description2');
            $heading3 = $this->input->post('heading3');
            $description3 = $this->input->post('description3');
            $image = $this->input->post('oldImage');
            
          
            
            if($_FILES['image']['name']){
                unlink("uploads/".$image);
                $config = array(
                    'upload_path'=>'uploads',
                    'allowed_types'=>'jpg|jpeg|gif|png',
                    );
                $this->load->library('upload',$config);
                $this->upload->do_upload('image');
                $img=$this->upload->data();
                $image = $img['file_name'];
            }

            $updateArray = array('description'=>$description,'heading1'=>$heading1,'description1'=>$description1,'heading2'=>$heading2,'description2'=>$description2,'heading3'=>$heading3,'description3'=>$description3, 'image'=>$image);
            $this->Adminuser->update_global_Record('indexawhy',$id,$updateArray);
            $this->session->set_flashdata('update','Your details has been updated');
            redirect('Adminusers/Indexwhy');
          }
          else
          {
            echo "hello";
          }
 }
  


}
?>