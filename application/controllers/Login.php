
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
			 
			 $firstname = $this->input->post('firstname');
			 $lastname = $this->input->post('lastname');
			 $email = $this->input->post('email');
			 $telephone = $this->input->post('telephone');
			 $lastname = $this->input->post('lastname');
			 $lastname = $this->input->post('lastname');
			 $lastname = $this->input->post('lastname');
			 $lastname = $this->input->post('lastname');
			 $lastname = $this->input->post('lastname');
			 $lastname = $this->input->post('lastname');
			 $lastname = $this->input->post('lastname');
			 $lastname = $this->input->post('lastname');
			 $lastname = $this->input->post('lastname');
			 $lastname = $this->input->post('lastname');
			 $lastname = $this->input->post('lastname');
			 $lastname = $this->input->post('lastname');
			 $lastname = $this->input->post('lastname');
			 $lastname = $this->input->post('lastname');
			 $lastname = $this->input->post('lastname');
			 $lastname = $this->input->post('lastname');
			 $lastname = $this->input->post('lastname');
			 echo "Ok";
			 exit;
		}
		$this->load->view("signup_view");
    }
	

}