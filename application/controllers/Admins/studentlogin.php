<?php defined('BASEPATH') OR exit('No direct script access allowed');

class studentlogin extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->helper('url');
		
	}


	
	// public function index()
	// {
	// 	$this->load->view('adminuser/login');
	// }
	
	

	public function login(){

		$result=$this->db->get_where('student', $_POST)->row_array();
		
		if(!empty($result)){
			$this->session->set_userdata('StudentData',$result);
			redirect('Studentdashboard/Studentdashboard');
		}else{
			$this->session->set_flashdata('adminnotlogin',"Email or Password is not Correct. Try Again...");
			$this->session->set_flashdata('msg_class','alert-danger');
			redirect('Web/studentlogin');
		}
	}

	public function logout()
	{
		//echo "string";die;
		$this->session->unset_userdata('StudentData');
		$this->session->set_flashdata('adminnotlogin',"Logout Successfully.");
		$this->session->set_flashdata('msg_class','alert-success');
		redirect();
	}
	
}

?>