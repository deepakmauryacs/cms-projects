<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Studentdashboard  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }


        public function index(){
        $data['h']=$this->Adminuser ->select_Record('studentnotice');
        $this->load->view('studentdashbord/header');
        $this->load->view('studentdashbord/index',$data);
        $this->load->view('studentdashbord/footer');
        
          }
        
          public function Userprofile(){

            $stddata=$this->session->userdata('StudentData');
            $data['h']=$this->Adminuser ->selectRecord('student', ['email'=>$stddata['email']]);
            // print_r($data);die;
         
            $this->load->view('studentdashbord/header');
            $this->load->view('studentdashbord/user_profile',$data);
            $this->load->view('studentdashbord/footer');
           }







        

  //    public function viewgallery(){
    
  //       $data['h']=$this->Adminuser ->select_Record('galleryimage');
     
  //       $this->load->view('adminuser/header');
  //       $this->load->view('adminuser/viewallgalleryimage',$data);
  //       $this->load->view('adminuser/footer');
                 
  //      }

   
  //   public function add_academi_cnote() {

  //   $this->form_validation->set_rules('class', 'Class', 'required');
 

  //   if ($this->form_validation->run() == FALSE) {

  //     // $this->load->view(base_url().'Coursepdf');
  //     echo("hello");
      
  //      }else{

  //       $formArray= array();
        

  //       if($_FILES['pdf']['name'])
  //       {
  //           $config = array(
  //               'upload_path'=>'upload/course',
  //               'allowed_types'=>'gif|jpg|png|docx|doc|txt|rtf|pdf',
  //               );
  //           $this->load->library('upload',$config);
  //           $this->upload->do_upload('pdf');
  //           $img=$this->upload->data();
  //           $formArray['pdf'] = $img['file_name'];
          
  //       }

  //       $formArray['class']=$this->input->post('class');
  //       $formArray['subjectname']=$this->input->post('subjectname');
  //       $formArray['teachername']=$this->input->post('teachername');
  //       $formArray['date']=$this->input->post('date');
      
  
  //       $this->Adminuser->insert_Record('galleryimage',$formArray);
  //       $this->session->set_flashdata('success', 'Note Add Succcessfully !');
  //       redirect('Teacherdashboard/Teacherdashboard');
  //   }
    
  // }

  //  public function update_gallery()
  //       {
  //          $id = $this->input->post('id');
  //         $this->form_validation->set_rules('datafilterid', 'Datafilterid', 'required');
 

  //         if($this->form_validation->run())
  //         {
           
           
  //           $datafilterid = $this->input->post('datafilterid');
  //           $image = $this->input->post('oldImage');
            
  //           if($_FILES['image']['name']){
  //               unlink("upload/gallery".$image);
  //               $config = array(
  //                   'upload_path'=>'uploads/gallery',
  //                   'allowed_types'=>'jpg|jpeg|gif|png',
  //                   );
  //               $this->load->library('upload',$config);
  //               $this->upload->do_upload('image');
  //               $img=$this->upload->data();
  //               $image = $img['file_name'];
  //           }

    
  //           $updateArray = array('datafilterid'=>$datafilterid,'image'=>$image);
  //           $this->Adminuser->update_global_Record('galleryimage',$id,$updateArray);
  //           $this->session->set_flashdata('update','Your details has been updated');
  //           redirect('Adminusers/Addgallery/viewgallery');
  //         }
  //         else
  //         {
  //             echo "hello";
  //         }
  //       }

  //       public function delete_gallery($id)
  //        {
          
  //        $this->Adminuser->delete_Record('galleryimage',$id);
  //        $this->session->set_flashdata('delete','Your details has been deleted');
  //        redirect(base_url().'Adminusers/Addgallery/viewgallery');

  //        }





}
 ?>