<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Liveclass  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }


        public function index(){
        $data['h']=$this->Adminuser ->select_desc_Record('liveclass');
        $this->load->view('studentdashbord/header');
        $this->load->view('studentdashbord/viewall_live',$data);
        $this->load->view('studentdashbord/footer');
        
          }





}
 ?>