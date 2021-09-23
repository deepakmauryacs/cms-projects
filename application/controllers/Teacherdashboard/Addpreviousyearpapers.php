<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Addpreviousyearpapers  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }


          public function index(){

    
        $this->load->view('teacherdashboard/header');
        $this->load->view('teacherdashboard/add_previous _years_ papers');
        $this->load->view('teacherdashboard/footer');
          }

     public function view_previousyearpapers(){
    
        $data['h']=$this->Adminuser ->select_Record('previous_years_papers');
     
        $this->load->view('teacherdashboard/header');
        $this->load->view('teacherdashboard/viewall_previous _years_ papers',$data);
        $this->load->view('teacherdashboard/footer');
                 
       }

   
    public function add_previousyearpapers() {

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
        $formArray['year']=$this->input->post('year');
        $formArray['class']=$this->input->post('class');
        $formArray['board']=$this->input->post('board');
        $formArray['subjectname']=$this->input->post('subjectname');
        $formArray['note']=$this->input->post('note');
        $formArray['date']=$this->input->post('date');
      
        $this->Adminuser->insert_Record('previous_years_papers',$formArray);
        $this->session->set_flashdata('success', 'Previous Years Papers Add Succcessfully !');
        redirect(base_url().'Teacherdashboard/Addpreviousyearpapers');
    }
    
  }

   public function update_previousyearpapers()
        {
           $id = $this->input->post('id');
          $this->form_validation->set_rules('class', 'Class', 'required');
 

          if($this->form_validation->run())
          {
          
            $class = $this->input->post('class');
            $board = $this->input->post('board');
            $subjectname = $this->input->post('subjectname');
            $year = $this->input->post('year');
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

    
            $updateArray = array('class'=>$class,'board'=>$board,'subjectname'=>$subjectname,'year'=>$year,'note'=>$note,'date'=>$date,'pdf'=>$pdf);
            // print_r($updateArray);
            // die();
            $this->Adminuser->update_global_Record('previous_years_papers',$id,$updateArray);
            $this->session->set_flashdata('update','Your details has been updated');
            redirect(base_url().'Teacherdashboard/Addpreviousyearpapers/view_previousyearpapers');
          }
          else
          {
              echo "hello";
          }
        }

        public function delete_previousyearpapers($id)
         {
          
         $this->Adminuser->delete_Record('previous_years_papers',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Teacherdashboard/Addpreviousyearpapers/view_previousyearpapers');

         }





}
 ?>