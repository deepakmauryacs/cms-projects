<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Addexambook  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }


          public function index(){

    
        $this->load->view('teacherdashboard/header');
        $this->load->view('teacherdashboard/add_exam_book');
        $this->load->view('teacherdashboard/footer');
          }

     public function view_exam_book(){
    
        $data['h']=$this->Adminuser ->select_Record('exam_book');
     
        $this->load->view('teacherdashboard/header');
        $this->load->view('teacherdashboard/viewall_exam_book',$data);
        $this->load->view('teacherdashboard/footer');
                 
       }

   
    public function add_exam_book() {

    $this->form_validation->set_rules('examtype', 'Examtype', 'required');
 

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

        $formArray['examtype']=$this->input->post('examtype');
        $formArray['examname']=$this->input->post('examname');
        $formArray['subjectname']=$this->input->post('subjectname');
        $formArray['teachername']=$this->input->post('teachername');
        $formArray['note']=$this->input->post('note');
        $formArray['date']=$this->input->post('date');
      
        $this->Adminuser->insert_Record('exam_book',$formArray);
        $this->session->set_flashdata('success', 'E-Book Add Succcessfully !');
        redirect(base_url().'Teacherdashboard/Addexambook');
    }
    
  }

   public function update_exam_book()
        {
           $id = $this->input->post('id');
          $this->form_validation->set_rules('subjectname', 'Subjectname', 'required');
 

          if($this->form_validation->run())
          {
          
            $examtype = $this->input->post('examtype');
            $examname = $this->input->post('examname');
            $subjectname = $this->input->post('subjectname');
            $teachername = $this->input->post('teachername');
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

    
            $updateArray = array('examtype'=>$examtype,'examname'=>$examname,'subjectname'=>$subjectname,'teachername'=>$teachername,'note'=>$note,'date'=>$date,'pdf'=>$pdf);
            // print_r($updateArray);
            // die();
            $this->Adminuser->update_global_Record('exam_book',$id,$updateArray);
            $this->session->set_flashdata('update','Your details has been updated');
            redirect(base_url().'Teacherdashboard/Addexambook/view_exam_book');
          }
          else
          {
              echo "hello";
          }
        }

        public function delete_exam_book($id)
         {
          
         $this->Adminuser->delete_Record('exam_book',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Teacherdashboard/Addexambook/view_exam_book');

         }

}
 ?>