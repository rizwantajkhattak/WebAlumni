
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->model("login_model", "login");
    }

    public function index() {
        if($_POST) {
            $result = $this->login->validate_user($_POST);
            if(!empty($result)) {
                $data = [
                    'role' => $result->role,
                    'username' => $result->username
                ];

                $this->session->set_userdata($data);
                redirect('view_profile');
            } else {
                $this->session->set_flashdata('login_fail', 'Username or password is wrong!');
                redirect('login');
            }
        }
        $this->load->view("login_view");
    }
    public function logout() {
        $data = ['role', 'username'];
        $this->session->unset_userdata($data);
        redirect('home');
    }
	public function signup() {
         if($_POST) {
			 if($this->input->post('password')!= $this->input->post('cpassword')){
				 $this->session->set_flashdata('signup_fail', 'Password does not match!');
				 redirect('login/signup');	 
			}
			//check existing user
			 $registration_num 	= $this->input->post('registration_num');
			 
			 if($this->login->check_user($registration_num) > 0){
				 $this->session->set_flashdata('signup_fail', 'User Name already exists!');
				 redirect('login/signup');
			}
			$firstname 		= $this->input->post('firstname');
			$lastname 		= $this->input->post('lastname');
			$email 			= $this->input->post('email');
			$telephone 		= $this->input->post('telephone');
			$studied 		= $this->input->post('studied');
			$come 			= $this->input->post('come');
			$company 		= $this->input->post('company');
			$address 		= $this->input->post('address');
			$addresstwo 	= $this->input->post('addresstwo');
			$city 			= $this->input->post('city');
			$country_id 	= $this->input->post('country_id');
			$password 		= sha1($this->input->post('password'));
			
			 
			$data = array('username' => $registration_num,'password' => $password,'role' => 'user');
			$this->login->add_user($data);
			$data2 = array('student_id'=>$registration_num,'full_name' => $firstname." ".$lastname,'email' => $email,'mobile' => $telephone,'organization' => $company,'location' => $address." ".$addresstwo,'district' => $city,'country' => $country_id
        );
		$this->login->add_userinfo($data2);
			
			
			$this->session->set_flashdata('signup_fail', 'Signup Successfully!');
			 
		}
		$this->load->view("signup_view");
    }
	

}