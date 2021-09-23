<?php defined('BASEPATH') OR exit('No direct script access allowed');
 


    class Admin  extends CI_Controller {
        public function __construct(){
            parent::__construct();
            
        }
  
    public function index(){
        
       $this->load->view('admins/login');
    }

    public function login(){

        $result=$this->db->get_where('superadminlogin', $_POST)->row_array();

        if(!empty($result)){
            $this->session->set_userdata('AdminData',$result);
            redirect('Admins/Admin');
        }else{
            $this->session->set_flashdata('adminnotlogin',"Email or Password is not Correct. Try Again...");
            $this->session->set_flashdata('msg_class','alert-danger');
            redirect('Admin');
        }
    }

    public function logout()
    {
        //echo "string";die;
        $this->session->unset_userdata('AdminData');
        $this->session->set_flashdata('adminnotlogin',"Logout Successfully.");
        $this->session->set_flashdata('msg_class','alert-success');
        redirect('Login');
    }


    }
?>