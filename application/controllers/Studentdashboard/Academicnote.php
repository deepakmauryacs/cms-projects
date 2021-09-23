<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Academicnote  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }


        //   public function index(){

    
        // $this->load->view('teacherdashboard/header');
        // $this->load->view('teacherdashboard/add_academic_note');
        // $this->load->view('teacherdashboard/footer');
        //   }

     public function view_academic_note(){
         
        $stddata=$this->session->userdata('StudentData');
        // echo($stddata['studentname']);
        // die();
        $data['h']=$this->Adminuser ->selectRecord('academy_note', ['class'=>$stddata['class']]);


        // $data['h']=$this->Adminuser ->select_Record('academy_note');
     
        $this->load->view('studentdashbord/header');
        $this->load->view('studentdashbord/viewall_enote_book',$data);
        $this->load->view('studentdashbord/footer');
                 
       }

   
    public function add_academic_note() {

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
        $formArray['subjectname']=$this->input->post('subjectname');
        $formArray['teachername']=$this->input->post('teachername');
        $formArray['note']=$this->input->post('note');
        $formArray['date']=$this->input->post('date');
      
  
        $this->Adminuser->insert_Record('academy_note',$formArray);
        $this->session->set_flashdata('success', 'Note Add Succcessfully !');
        redirect('Teacherdashboard/Addacademicnote');
    }
    
  }

   public function update_academic_note()
        {
           $id = $this->input->post('id');
          $this->form_validation->set_rules('datafilterid', 'Datafilterid', 'required');
 

          if($this->form_validation->run())
          {
           
           
            $datafilterid = $this->input->post('datafilterid');
            $image = $this->input->post('oldImage');
            
            if($_FILES['image']['name']){
                unlink("upload/gallery".$image);
                $config = array(
                    'upload_path'=>'uploads/gallery',
                    'allowed_types'=>'jpg|jpeg|gif|png',
                    );
                $this->load->library('upload',$config);
                $this->upload->do_upload('image');
                $img=$this->upload->data();
                $image = $img['file_name'];
            }

    
            $updateArray = array('datafilterid'=>$datafilterid,'image'=>$image);
            $this->Adminuser->update_global_Record('galleryimage',$id,$updateArray);
            $this->session->set_flashdata('update','Your details has been updated');
            redirect('Adminusers/Addgallery/viewgallery');
          }
          else
          {
              echo "hello";
          }
        }

        public function delete_academic_note($id)
         {
          
         $this->Adminuser->delete_Record('galleryimage',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Adminusers/Addgallery/viewgallery');

         }





}
 ?>