<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Course  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }
        public function index(){
        $data['h']=$this->Adminuser ->select_Record('academy_book');
        $this->load->view('header');
        $this->load->view('course/academic',$data);
        $this->load->view('footer');
 }


  public function academicbook(){

  $data['h']=$this->Adminuser ->select_Record('academy_book');
  $this->load->view('header');
  $this->load->view('course/academic_book',$data);
  $this->load->view('footer');

   } 

   public function academicbook_deatails(){

    $data['h']=$this->Adminuser ->select_Record('academy_book');
    $this->load->view('header');
    $this->load->view('course/academic_book',$data);
    $this->load->view('footer');
  
     } 
   
  public function academicnote(){

    $data['h']=$this->Adminuser ->select_Record('academy_note');
    $this->load->view('header');
    $this->load->view('course/academic_note',$data);
    $this->load->view('footer');
  
     } 


   
     public function academicnote_deatails(){

      $data['h']=$this->Adminuser ->select_Record('academy_note');
      $this->load->view('header');
      $this->load->view('course/academic_note',$data);
      $this->load->view('footer');
    
       } 

  public function academicvideo(){

      $data['h']=$this->Adminuser ->select_Record('academicvideo');
      $this->load->view('header');
      $this->load->view('course/academic_video',$data);
      $this->load->view('footer');
    
       } 

       public function academicvideo_deatails(){

        $data['h']=$this->Adminuser ->select_Record('academicvideo');
        $this->load->view('header');
        $this->load->view('course/academic_video',$data);
        $this->load->view('footer');
      
         } 
    
  public function academicprevious_years_papers(){

        $data['h']=$this->Adminuser ->select_Record('previous_years_papers');
        $this->load->view('header');
        $this->load->view('course/academic_previous_years_papers',$data);
        $this->load->view('footer');
      
         } 

  public function academicprevious_sample_papers(){

  $data['h']=$this->Adminuser ->select_Record('samplepapers');
  $this->load->view('header');
  $this->load->view('course/academic_sample_papers',$data);
  $this->load->view('footer');
        
           } 
           
          

  public function competitiveexams_book(){

   $data['h']=$this->Adminuser ->selectRecord('exam_book', ['examtype'=>'Competitive_Exams']);
   $this->load->view('header');
   $this->load->view('course/competitiveexam_book',$data);
   $this->load->view('footer');
          
             } 
       
   public function competitiveexams_note(){

    $data['h']=$this->Adminuser ->selectRecord('exam_note', ['examtype'=>'Competitive_Exams']);
    $this->load->view('header');
    $this->load->view('course/competitiveexam_note',$data);
    $this->load->view('footer');
            
               } 

   public function competitiveexams_video(){

    $data['h']=$this->Adminuser ->selectRecord('examvideo', ['examtype'=>'Competitive_Exams']);
    $this->load->view('header');
    $this->load->view('course/competitiveexams_video',$data);
    $this->load->view('footer');
              
                 } 
            
    public function entranceexams_book(){

    $data['h']=$this->Adminuser ->selectRecord('exam_book', ['examtype'=>'Entrance_Exams']);
    $this->load->view('header');
    $this->load->view('course/entranceexams_book',$data);
    $this->load->view('footer');
                
      }

    public function entranceexams_note(){

      $data['h']=$this->Adminuser ->selectRecord('exam_note', ['examtype'=>'Entrance_Exams']);
      $this->load->view('header');
      $this->load->view('course/entranceexams_note',$data);
      $this->load->view('footer');
                  
      }
                
    public function entranceexams_video(){

      $data['h']=$this->Adminuser ->selectRecord('examvideo', ['examtype'=>'Entrance_Exams']);
      $this->load->view('header');
      $this->load->view('course/entranceexams_video',$data);
      $this->load->view('footer');
                    
       }
                 

          

   



}
 ?>