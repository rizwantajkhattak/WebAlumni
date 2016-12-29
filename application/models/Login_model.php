<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @name: Login model
 * @author: Nazmul
 */
class Login_model extends CI_Model
{

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function validate_user($data) {
        $this->db->where('username', $data['username']);
        //$this->db->where('password', md5($data['password']));
        $this->db->where('password', $data['password']);
        return $this->db->get('users')->row();
    }
	public function check_user($regnum) {
		
        $this->db->where('username', $regnum);
		$query = $this->db->get('users');
		$rowcount = $query->num_rows();
    	return $rowcount;
		
	}
	public function add_user($data) {
        $this->db->insert('users',$data);
    }
	public function add_userinfo($data2) {
        $this->db->insert('students',$data2);
    }
	

    function __destruct() {
        $this->db->close();
    }

}