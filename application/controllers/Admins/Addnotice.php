<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Addnotice  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }
   
    public function index(){
     
      $this->load->view('admins/header');
        $this->load->view('admins/addnotice');
        $this->load->view('admins/footer');

    }


     public function viewnotice(){
    
        $data['h']=$this->Adminuser ->select_Record('notice');
     
        $this->load->view('admins/header');
        $this->load->view('admins/viewallnotice',$data);
        $this->load->view('admins/footer');
                 
       }


    public function addnotice() {

     $this->form_validation->set_rules('notice','Notice','required');

    if ($this->form_validation->run() == FALSE) {
      // $this->load->view(base_url().'Onlineadmission');
      echo("hello");
    }else{

        $formArray= array();
        
       

        $formArray['date']=$this->input->post('date');
        $formArray['notice']=$this->input->post('notice'); 
      
        

        
    

        $this->Adminuser->insert_Record('notice',$formArray);
        $this->session->set_flashdata('success', 'Notice Add Succcessfully !');
        redirect('Admins/Addnotice');
    }
    
  }
 

   public function update_notice()
        {
           $id = $this->input->post('id');
          $this->form_validation->set_rules('notice', 'Notice', 'required');
 

          if($this->form_validation->run())
          {
           

            $date = $this->input->post('date');
            $notice = $this->input->post('notice');
           

           
    
            $updateArray = array('date'=>$date,'notice'=>$notice);
            $this->Adminuser->update_global_Record('notice',$id,$updateArray);
            $this->session->set_flashdata('update','Your details has been updated');

            redirect(base_url().'Admins/Addnotice/viewnotice');


          }
          else
          {
              echo "hello";
          }
        }

        public function delete_notice($id)
         {
          
         $this->Adminuser->delete_Record('notice',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admins/Addnotice/viewnotice');

         }





}
 ?>