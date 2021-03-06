<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_profile_model extends CI_Model
{

    function __construct() {
        parent::__construct();
        $this->load->database();
        if(empty($this->session->userdata('role'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');
        }
    }

    public function selectStudentById ($student_id) {
        $this->db->select("`student_id`, `full_name`, `father_name`, `mother_name`, `email`, `mobile`, `mobile_yn`, `gender`, `birth_date`, `d.district_name`, `district_yn`, `high_school_name`, `high_school_location`, `high_school_passing_year`, `college_name`, `college_location`, `college_passing_year`, `u_university_name`, `u_university_location`, `u_university_subject`, `u_university_admission_year`, `u_university_a_year_privateyn`, `u_university_passing_year`, `u_cgpa`, `p_university_name`, `p_university_location`, `p_university_subject`, `p_university_admission_year`, `p_university_a_year_privateyn`, `p_university_passing_year`, `d_university_name`, `d_university_location`, `d_university_subject`, `d_university_admission_year`, `d_university_a_year_privateyn`, `d_university_passing_year`, `designation`, `organization`, `location`, `biography`");
        $this->db->from("students s, district d");
        $this->db->where('s.district=d.district_id');
        $this->db->where('student_id', $student_id);
        $query = $this->db->get();
        return $result = $query->result();
    }


    function __destruct() {
        $this->db->close();
    }

}