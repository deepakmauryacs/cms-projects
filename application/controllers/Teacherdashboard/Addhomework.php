<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Addhomework  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }


          public function index(){

    
        $this->load->view('teacherdashboard/header');
        $this->load->view('teacherdashboard/add_home_work');
        $this->load->view('teacherdashboard/footer');
          }

     public function view_home_work(){
        

        // $stddata=$this->session->userdata('StudentData');
        // print_r($stddata);die;
        $data['h']=$this->Adminuser ->select_Record('home_work');
     
        $this->load->view('teacherdashboard/header');
        $this->load->view('teacherdashboard/viewall_home_work',$data);
        $this->load->view('teacherdashboard/footer');
                 
       }

       public function view_student_home_work(){
        
        $data['h']=$this->Adminuser ->select_Record('student_homework');
     
        $this->load->view('teacherdashboard/header');
        $this->load->view('teacherdashboard/viewall_student_homework',$data);
        $this->load->view('teacherdashboard/footer');
                 
       }




   
    public function add_home_work() {

    $this->form_validation->set_rules('subjectname', 'Subjectname', 'required');
 

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

        $teadata=$this->session->userdata('TeacherData');

        $formArray['teacher_id']=$teadata['id'];
        $formArray['class']=$this->input->post('class');
        $formArray['subjectname']=$this->input->post('subjectname');
        $formArray['teachername']=$this->input->post('teachername');
        $formArray['note']=$this->input->post('note');
        $formArray['date']=$this->input->post('date');
      
  
        $this->Adminuser->insert_Record('home_work',$formArray);
        $this->session->set_flashdata('success', 'Home Work Add Succcessfully !');
        redirect(base_url().'Teacherdashboard/Addhomework');
    }
    
  }

   public function update_home_work()
        {
           $id = $this->input->post('id');
          $this->form_validation->set_rules('class', 'Class', 'required');
 

          if($this->form_validation->run())
          {
           
            // $teadata=$this->session->userdata('TeacherData');
            // $teacher_id=$teadata['id'];
            $class = $this->input->post('class');
            $subjectname = $this->input->post('subjectname');
            $teachername = $this->input->post('teachername');
            $note = $this->input->post('note');
            $date = $this->input->post('date');
            $pdf = $this->input->post('oldpdf');
            
            if($_FILES['pdf']['name']){
                // unlink("uploads/course".$pdf);
                $config = array(
                    'upload_path'=>'uploads/course',
                    'allowed_types'=>'gif|jpg|png|docx|doc|txt|rtf|pdf',
                    );
                $this->load->library('upload',$config);
                $this->upload->do_upload('pdf');
                $img=$this->upload->data();
                $pdf = $img['file_name'];
            }


    
            $updateArray = array('class'=>$class,'subjectname'=>$subjectname,'teachername'=>$teachername,'note'=>$note,'date'=>$date,'pdf'=>$pdf);
            // print_r($updateArray);
            // die();
            $this->Adminuser->update_global_Record('home_work',$id,$updateArray);
            $this->session->set_flashdata('update','Your details has been updated');
            redirect(base_url().'Teacherdashboard/Addhomework/view_home_work');
          }
          else
          {
              echo "hello";
          }
        }

        public function delete_home_work($id)
         {
          
         $this->Adminuser->delete_Record('home_work',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Teacherdashboard/Addhomework/view_home_work');

         }





}
 ?>