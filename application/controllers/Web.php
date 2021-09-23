<?php defined('BASEPATH') OR exit('No direct script access allowed');
 


    class Web  extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('Adminuser'); 
        }


  
    public function index(){
        
       
         $data['banners']=$this->Adminuser ->select_Record('banner');
         $data['indexabouts']=$this->Adminuser ->select_Record('indexabout');
         $data['indexawhys']=$this->Adminuser ->select_Record('indexawhy');
         $data['indexstudents']=$this->Adminuser ->select_Record('indexstudent');
         $data['notice']=$this->Adminuser ->select_Record('notice');

        $this->load->view('header');
        $this->load->view('index',$data);
        $this->load->view('footer');

    }

    public function about(){
        
        $data['abouts']=$this->Adminuser ->select_Record('about');
        $data['Whys']=$this->Adminuser ->select_Record('Why');
        $this->load->view('header');
        $this->load->view('about',$data);
        $this->load->view('footer');

    } 
   
    public function teacher(){
         
        $data['teams']=$this->Adminuser ->select_Record('team');
        $this->load->view('header');
        $this->load->view('teacher',$data);
        $this->load->view('footer');

    } 

   public function gallery(){

        $data['galleryheadings']=$this->Adminuser ->select_Record('galleryheading');
        $data['galleryimages']=$this->Adminuser ->select_Record('galleryimage');
        $this->load->view('header');
        $this->load->view('gallery',$data);
        $this->load->view('footer');

    } 


       public function videogallery(){
        
        $this->load->view('header');
        $this->load->view('videogallery');
        $this->load->view('footer');

    } 


     public function contact(){
        
        $this->load->view('header');
        $this->load->view('contact');
        $this->load->view('footer');

    } 

  
    public function studentsingup(){
        
        $this->load->view('header');
        $this->load->view('studentsingup');
        $this->load->view('footer');

    }

   public function studentlogin(){
        
        $this->load->view('header');
        $this->load->view('studentlogin');
        $this->load->view('footer');

    }

  public function teachersingup(){
        
        $this->load->view('header');
        $this->load->view('teachersingup');
        $this->load->view('footer');

    }

   public function teacherlogin(){
        
        $this->load->view('header');
        $this->load->view('teacherlogin');
        $this->load->view('footer');

    }

   
  
     public function visitersingup(){
        
        $this->load->view('header');
        $this->load->view('visitersingup');
        $this->load->view('footer');

    }
    
     public function visiterlogin(){
        
        $this->load->view('header');
        $this->load->view('visiterlogin');
        $this->load->view('footer');

    }

    public function online_admission(){

        $this->load->view('header');
        $this->load->view('onlinadmission');
        $this->load->view('footer');

    }  

    

        public function student_document_verification(){

        $this->load->view('header');
        $this->load->view('student_document_verification');
        $this->load->view('footer');

    }  

   
    
    public function apply_online(){

        $this->load->view('header');
        $this->load->view('applyonline');
        $this->load->view('footer');

    }
   
     public function job(){

        $this->load->view('header');
        $this->load->view('job');
        $this->load->view('footer');

    }

     public function result(){

        $this->load->view('header');
        $this->load->view('studentresult');
        $this->load->view('footer');

    }

    

  public function admission_verification(){

        $this->load->view('header');
        $this->load->view('admission_verification');
        $this->load->view('footer');

    }

    

  public function addmisson_procedure(){

        $this->load->view('header');
        $this->load->view('addmisson_procedure');
        $this->load->view('footer');

    }  





   public function   print_studentack(){

        $this->load->view('header');
        $this->load->view('print_studentack');
        $this->load->view('footer');

    }  

    
   
     public function  print_identity_card(){

        $this->load->view('header');
        $this->load->view('print_identity_card');
        $this->load->view('footer');

    }  

    


     public function  verificationpage(){

        $this->load->view('header');
        $this->load->view('verificationpage');
        $this->load->view('footer');

    } 

   

      public function   vision_mission(){
       
       $data['missions']=$this->Adminuser ->select_Record('mission');
       $data['goalss']=$this->Adminuser ->select_Record('goals');
        $this->load->view('header');
        $this->load->view('vision_mission',$data);
        $this->load->view('footer');

    } 


      public function   faq(){

        $this->load->view('header');
        $this->load->view('faq');
        $this->load->view('footer');

    } 

     public function   blog(){

        $this->load->view('header');
        $this->load->view('blog');
        $this->load->view('footer');

    } 

     public function   event(){

        $this->load->view('header');
        $this->load->view('event');
        $this->load->view('footer');

    } 
   

     public function   exampaper(){

        $this->load->view('header');
        $this->load->view('exampaper');
        $this->load->view('footer');

    } 

    
   
    public function   video_academic1(){
            
        $data['video1']=$this->Adminuser ->select_Record('video_course1');
        $this->load->view('header');
        $this->load->view('course/video_academic1',$data);
        $this->load->view('footer');

    } 
 
    }
?>