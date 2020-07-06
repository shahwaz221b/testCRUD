<?php

class Course_model extends CI_Model 
{
	
	function create($formArray)
	{
		$this->db->insert('course',$formArray);
	}
	
	function get_all()
	{
			return $this->db->get("course")->result_array();
	}
	
	function get_single_course($id)
	{
			   $this->db->where('id',$id);
			   return $this->db->get('course')->row_array(); 
	}
	
	function updateCourse($id,$formArray)
	{
			   $this->db->where('id',$id);
			   return $this->db->Update('course',$formArray);
	}

	function deleteCourse($id)
	{
			   $this->db->where('id',$id);
		       $this->db->delete('course');
	}
}
?>