<?php

class Course extends CI_Controller {

    function index()
    {
        $this->load->model("Course_model");
        $courses = $this->Course_model->get_all();
        $data = array();
        $data['courses'] = $courses;
        $this->load->view('list',$data);
    }

    function create(){
        $this->load->model("Course_model");
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('price','Price','required');
        if($this->form_validation->run() == false)
        {
            $this->load->view('create'); 
        }
        else{
              $formArray = array( );
              $formArray['course_name'] = $this->input->post('name');
              $formArray['price'] = $this->input->post('price');
              $formArray['flag'] = 1;
              $this->Course_model->create( $formArray);
              $this->session->set_flashdata('success','Record Added Successfully!');
              redirect(base_url().'index.php/course/index');
        }
        
    }

    function edit($id){
     
        $this->load->model("Course_model");
        $singleCourse = $this->Course_model->get_single_course($id);
        $data = array();
        $data['course'] = $singleCourse;

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('price','Price','required');
        if($this->form_validation->run() == false)
        {
            $this->load->view('edit',$data); 
        }
        else {
            $formArray = array( );
              $formArray['course_name'] = $this->input->post('name');
              $formArray['price'] = $this->input->post('price');
              $formArray['flag'] = 1;
              $this->Course_model->updateCourse($id,$formArray);
              $this->session->set_flashdata('success','Record Updated Successfully!');
              redirect(base_url().'index.php/course/index');

        }
       
    }

    function delete($id){
     
        $this->load->model("Course_model");
        $singleCourse = $this->Course_model->get_single_course($id);
        if(empty($singleCourse))
        {
            $this->session->set_flashdata('failure','Record not found!');
            redirect(base_url().'index.php/course/index');
        }

        else {
        
              $this->Course_model->deleteCourse($id);
              $this->session->set_flashdata('success','Record deleted Successfully!');
              redirect(base_url().'index.php/course/index');

        }
       
    }


}
?>