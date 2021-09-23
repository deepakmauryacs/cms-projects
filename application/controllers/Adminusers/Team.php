<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class  Team   extends CI_Controller 
{  
      function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }

      public function index(){
    
        $this->load->view('adminuser/header');
        $this->load->view('adminuser/team');
        $this->load->view('adminuser/footer');
                  }

    public function viewteam(){
    
        $data['h']=$this->Adminuser ->select_Record('team');
       
        $this->load->view('adminuser/header');
        $this->load->view('adminuser/viewallteacher',$data);
        $this->load->view('adminuser/footer');
                 
       }

    public function addteam() {
     

    $this->form_validation->set_rules('name', 'Name', 'trim|required');
    $this->form_validation->set_rules('profession', 'Profession', 'required');

    if ($this->form_validation->run() == FALSE) {

      $this->load->view('Team');


    }else{

        $formArray= array();
        if($_FILES['image']['name'])
        {
            $config = array(
                'upload_path'=>'uploads/teacher',
                'allowed_types'=>'jpg|jpeg|gif|png',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('image');
            $img=$this->upload->data();
            $formArray['image'] = $img['file_name'];
           
        }
        else{

          $this->load->view('Team');

        }

        
        $formArray['name']=$this->input->post('name');
        $formArray['profession']=$this->input->post('profession');
        $formArray['fecebooklink']=$this->input->post('fecebooklink');
        $formArray['twitterlink']=$this->input->post('twitterlink');
        $formArray['instagramlink']=$this->input->post('instagramlink');   
        $formArray['linkedinurl']=$this->input->post('linkedinurl');

       $this->Adminuser->insert_Record('team',$formArray);
        $this->session->set_flashdata('success', 'Teacher  Add  Succcessfully !');
        redirect('Adminusers/Team');
    }
    
  }


   public function update_team()
        {
           $id = $this->input->post('id');
          $this->form_validation->set_rules('name', 'Name', 'trim|required');
          $this->form_validation->set_rules('profession', 'Profession', 'required');

         
          if($this->form_validation->run())
          {
            
            
            $name = $this->input->post('name');
            $profession = $this->input->post('profession');
            $fecebooklink = $this->input->post('fecebooklink');
            $twitterlink = $this->input->post('twitterlink');
            $instagramlink = $this->input->post('instagramlink');
            $linkedinurl  =$this->input->post('linkedinurl');
            $image = $this->input->post('oldImage');
            
            if($_FILES['image']['name']){
                unlink("uploads/teacher".$image);
                $config = array(
                    'upload_path'=>'uploads/teacher',
                    'allowed_types'=>'jpg|jpeg|gif|png',
                    );
                $this->load->library('upload',$config);
                $this->upload->do_upload('image');
                $img=$this->upload->data();
                $image = $img['file_name'];
            }
          


          
            $updateArray = array('image'=>$image,'name'=>$name,'profession'=>$profession,'fecebooklink'=>$fecebooklink,'twitterlink'=>$twitterlink,'instagramlink'=>$instagramlink,'linkedinurl'=>$linkedinurl);
            $this->Adminuser->update_global_Record('team',$id,$updateArray);
            $this->session->set_flashdata('update','Your details has been updated');
            redirect('Adminusers/Team/viewteam');
          }
          else
          {
              echo "hello";
          }
        }

       public function delete_team($id)
          {

          $this->Adminuser->delete_Record('team',$id);
          $this->session->set_flashdata('delete','Your details has been deleted');
           redirect(base_url().'Adminusers/Team/viewteam');

         }



}
?>