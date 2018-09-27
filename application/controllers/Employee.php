<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
        public function index()
	{
                $this->load->view('Employee_view');
                redirect('Employee/showDept','refresh');
                $this->load->helper(array('form'));
	}
        public function showDept(){
            $data = array();
            $this->load->model('Employee_model');
            $query = $this->Employee_model->getDept();
            if ($query){
                 $data['records'] = $query;  
            } 
            $query1 = $this->Employee_model->getDetails();
            if ($query1){
                 $data['recordss'] = $query1;  
            } 
            $this->load->view('Employee_view',$data); 
        }
        public function empReg()
	{
            $this->load->model('Employee_model');
    
    
            $emp_name=$this->input->post('emp_name');
            $dept_name=$this->input->post('dept_name');
    
            $datas=array("emp_name"=>$emp_name,"dept_id"=>$dept_name);
            $this->Employee_model->addEmp($datas);
            redirect('Employee/showDept','refresh');
        }
}          
