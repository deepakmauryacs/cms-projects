<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Mission  extends CI_Controller 
{  
      function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }

    public function index(){
    
        $data['h']=$this->Adminuser ->select_Record('mission');
        $this->load->view('adminuser/header');
        $this->load->view('adminuser/mission',$data);
        $this->load->view('adminuser/footer');
                  }

  
   public function update_mission()
        {
           $id = $this->input->post('id');
           // $this->form_validation->set_rules('image', 'Image', 'trim|required');
           $this->form_validation->set_rules('heading', 'Heading', 'trim|required');
           $this->form_validation->set_rules('description', 'description', 'required');

          if($this->form_validation->run())
          {
            
            
        
            $heading = $this->input->post('heading');
            $description = $this->input->post('description');
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

            $updateArray = array('heading'=>$heading,'description'=>$description, 'image'=>$image);
            $this->Adminuser->update_global_Record('mission',$id,$updateArray);
            $this->session->set_flashdata('update','Your details has been updated');
            redirect('Adminusers/Mission');
          }
          else
          {
            echo "hello";
          }
 }
  


}
?>