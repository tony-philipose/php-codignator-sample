<?php
class Employee_model extends CI_Model
{
    public function __construct()
        {
            parent::__construct();

        }
    public function getDept(){
      $this->db->select('dept_name');
	  $this->db->select('dept_id');
      $this->db->from('dept');
      $q = $this -> db ->get();
      if ($q->num_rows() > 0){
        foreach($q->result() as $row) {
            $data[] = $row;
         }
         return $data;
       }
    }
    public function getDetails(){
      $this->db->select('e.*, d.*');
      $this->db->from('employee e');
	  $this->db->join('dept d', 'e.dept_id = d.dept_id', 'left'); 
      $q = $this -> db ->get();
      if ($q->num_rows() > 0){
        foreach($q->result() as $row) {
            $data[] = $row;
         }
         return $data;
       }
    }
    public function addEmp($datas)
    {
    $this->db->insert("employee",$datas);
    } 
}
