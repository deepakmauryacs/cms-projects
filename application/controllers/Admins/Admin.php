<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Admin  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }
   
    public function index(){
     
      $this->load->view('admins/header');
        $this->load->view('admins/index');
        $this->load->view('admins/footer');

    }


     // public function viewallonlineaddmission(){
    
     //    $data['h']=$this->Adminuser ->select_Record('onlineadmission');
     
     //    $this->load->view('admins/header');
     //    $this->load->view('admins/viewallonlineaddmission',$data);
     //    $this->load->view('admins/footer');
                 
     //   }

  //   public function addonlineadmission() {

    

  //    $this->form_validation->set_rules('email','Email','required');

  //   if ($this->form_validation->run() == FALSE) {
      
  //     echo("hello");
  //   }else{

  //       $formArray= array();
        
  //       if($_FILES['image']['name'])
  //       {
  //           $config = array(
  //               'upload_path'=>'uploads/Onlineadmission',
  //               'allowed_types'=>'jpg|jpeg|gif|png',
  //               );
  //           $this->load->library('upload',$config);
  //           $this->upload->do_upload('image');
  //           $img=$this->upload->data();
  //           $formArray['image'] = $img['file_name'];
  //       }


  //       if($_FILES['image1']['name']){
  //               $config = array(
  //                   'upload_path'=>'uploads/Onlineadmission',
  //                   'allowed_types'=>'jpg|jpeg|gif|png',
  //                   );
  //               $this->load->library('upload',$config);
  //               $this->upload->do_upload('image1');
  //               $img=$this->upload->data();
  //               $formArray['image1'] = $img['file_name'];
  //         }


  //       $formArray['enumber']=mt_rand(100000,999999);
  //       $formArray['admission_date']=$this->input->post('admission_date');
  //       $formArray['firstname']=$this->input->post('firstname');
  //       $formArray['lastname']=$this->input->post('lastname');
  //       $formArray['gender']=$this->input->post('gender');
  //       $formArray['dob']=$this->input->post('dob');
  //       $formArray['religion']=$this->input->post('religion');
  //       $formArray['cast']=$this->input->post('cast');
  //       $formArray['aadhar_number']=$this->input->post('aadhar_number');
  //       $formArray['community']=$this->input->post('community');
  //       $formArray['res_address']=$this->input->post('res_address');
  //       $formArray['cor_address']=$this->input->post('cor_address');
  //       $formArray['contactnumber']=$this->input->post('contactnumber');
  //       $formArray['fathercontact']=$this->input->post('fathercontact');
  //       $formArray['email']=$this->input->post('email');
  //       $formArray['fathername']=$this->input->post('fathername');
  //       $formArray['age']=$this->input->post('age');
  //       $formArray['edu']=$this->input->post('edu');
  //       $formArray['occupation']=$this->input->post('occupation');
  //       $formArray['annual_income']=$this->input->post('annual_income');
  //       $formArray['fathernumber']=$this->input->post('fathernumber');
  //       $formArray['fatheraadharnumber']=$this->input->post('fatheraadharnumber');

  //       $session_data = array(
  //            'email' => $email
  //            );
    

  //       $this->Adminuser->insert_Record('onlineadmission',$formArray);
  //       $this->session->set_flashdata('success', 'Gallery Image Add Succcessfully !');
  //       redirect('Web');
  //   }
    
  // }
 

   // public function update_gallery()
   //      {
   //         $id = $this->input->post('id');
   //        $this->form_validation->set_rules('datafilterid', 'Datafilterid', 'required');
 

   //        if($this->form_validation->run())
   //        {
           
           
   //          $datafilterid = $this->input->post('datafilterid');
   //          $image = $this->input->post('oldImage');
            
   //          if($_FILES['image']['name']){
   //              unlink("upload/gallery".$image);
   //              $config = array(
   //                  'upload_path'=>'uploads/gallery',
   //                  'allowed_types'=>'jpg|jpeg|gif|png',
   //                  );
   //              $this->load->library('upload',$config);
   //              $this->upload->do_upload('image');
   //              $img=$this->upload->data();
   //              $image = $img['file_name'];
   //          }

    
   //          $updateArray = array('datafilterid'=>$datafilterid,'image'=>$image);
   //          $this->Adminuser->update_global_Record('galleryimage',$id,$updateArray);
   //          $this->session->set_flashdata('update','Your details has been updated');
   //          redirect('Adminusers/Addgallery/viewgallery');
   //        }
   //        else
   //        {
   //            echo "hello";
   //        }
   //      }

        // public function delete_gallery($id)
        //  {
          
        //  $this->Adminuser->delete_Record('galleryimage',$id);
        //  $this->session->set_flashdata('delete','Your details has been deleted');
        //  redirect(base_url().'Adminusers/Addgallery/viewgallery');

        //  }





}
 ?>