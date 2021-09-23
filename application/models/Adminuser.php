<?php
class Adminuser extends CI_model
{    

	function __construct() {
        parent::__construct();
        $this->load->database();
    }

	
	 public function select_Record($table){
	    $this->db->select('*');
		$this->db->from($table);
	    $query= $this->db->get();
		return $query->result();
	 }
	 public function selectRecord($table, $con){
	 	$this->db->order_by("id", "desc");
	    return $this->db->get_where($table, $con)->result_array();
	 }


	 public function select_desc_Record($table){
	    $this->db->select('*');
		$this->db->from($table);
		
		$this->db->order_by("id", "desc");
	    $query= $this->db->get();
		return $query->result();
	 }

	
 
	public function select_profile_Record($table){
	return $this->db->get_where($table, array('email' =>'deepak@gmail.com'))->row_array();
	    }



	public function select_desc_limit_Record($table){
	    $this->db->select('*');
		$this->db->from($table);
		$this->db->order_by("id", "desc");
		$this->db->limit(4);
	    $query= $this->db->get();
		return $query->result();
	 }







       public  function insert_Record($table,$formArray){
		$this->db->insert($table,$formArray);
	    }

	   public function update_Record($id,$updateArray)
	      {
		$this->db->where('id',$id);
		$this->db->update('banner',$updateArray);
	      }
       public function delete_Record($table,$id)
        {
         $this->db->where('id', $id);
         $this->db->delete($table); 
        }

       

        public function update_global_Record($table,$id,$updateArray)
	      {
		$this->db->where('id',$id);
		$this->db->update($table,$updateArray);
	      }




	   public function update_helping_section_Record($id,$updateArray)
	      {
		$this->db->where('id',$id);
		$this->db->update('helping_section',$updateArray);
	      }
      
       public function update_socialmedial_link_Record($id,$updateArray)
	      {
		$this->db->where('id',$id);
		$this->db->update('socialmedia_link',$updateArray);
	      }

	   public function update_news_Record($id,$updateArray)
	      {
		$this->db->where('id',$id);
		$this->db->update('news',$updateArray);
	      }

	    public function update_blog_Record($table,$id,$updateArray)
	      {
		$this->db->where('id',$id);
		$this->db->update($table,$updateArray);
	      }


        public function find_row($table,$id)
         {
            return $this->db->get_where($table, array('id' => $id))->row_array();
         }
      
      



	
}
?>