<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Addsolutions  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }


          public function index(){

    
        $this->load->view('teacherdashboard/header');
        $this->load->view('teacherdashboard/addsolutions');
        $this->load->view('teacherdashboard/footer');
          }

     public function view_solutions(){
    
        $data['h']=$this->Adminuser ->select_Record('solutions');
     
        $this->load->view('teacherdashboard/header');
        $this->load->view('teacherdashboard/viewall_solutions',$data);
        $this->load->view('teacherdashboard/footer');
                 
       }

   
    public function add_solutions() {

    $this->form_validation->set_rules('class', 'Class', 'required');
 

    if ($this->form_validation->run() == FALSE) {

      // $this->load->view(base_url().'Coursepdf');
      echo("hello");
      
       }else{

        $formArray= array();
        

        if($_FILES['pdf']['name'])
        {
            $config = array(
                'upload_path'=>'uploads/course',
                'allowed_types'=>'gif|jpg|png|docx|doc|txt|rtf|pdf',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('pdf');
            $img=$this->upload->data();
            $formArray['pdf'] = $img['file_name'];
          
        }

        $formArray['class']=$this->input->post('class');
        $formArray['board']=$this->input->post('board');
        $formArray['subjectname']=$this->input->post('subjectname');
        $formArray['note']=$this->input->post('note');
        $formArray['date']=$this->input->post('date');
      
        $this->Adminuser->insert_Record('solutions',$formArray);
        $this->session->set_flashdata('success', 'Note Add Succcessfully !');
        redirect(base_url().'Teacherdashboard/Addsolutions');
    }
    
  }

   public function update_solutions()
        {
           $id = $this->input->post('id');
          $this->form_validation->set_rules('class', 'Class', 'required');
 

          if($this->form_validation->run())
          {
          
            $class = $this->input->post('class');
            $board = $this->input->post('board');
            $subjectname = $this->input->post('subjectname');
            $note = $this->input->post('note');
            $date = $this->input->post('date');
            $pdf = $this->input->post('oldpdf');
            
            if($_FILES['pdf']['name']){
                // unlink("uploads/course/".$pdf);
                $config = array(
                    'upload_path'=>'uploads/course',
                    'allowed_types'=>'gif|jpg|png|docx|doc|txt|rtf|pdf',
                    );
                $this->load->library('upload',$config);
                $this->upload->do_upload('pdf');
                $img=$this->upload->data();
                $pdf = $img['file_name'];
            }

    
            $updateArray = array('class'=>$class,'board'=>$board,'subjectname'=>$subjectname,'note'=>$note,'date'=>$date,'pdf'=>$pdf);
            // print_r($updateArray);
            // die();
            $this->Adminuser->update_global_Record('solutions',$id,$updateArray);
            $this->session->set_flashdata('update','Your details has been updated');
            redirect(base_url().'Teacherdashboard/Addsolutions/view_solutions');
          }
          else
          {
              echo "hello";
          }
        }

        public function delete_solutions($id)
         {
          
         $this->Adminuser->delete_Record('solutions',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Teacherdashboard/Addsolutions/view_solutions');

         }

}
 ?>