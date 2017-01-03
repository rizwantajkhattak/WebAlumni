<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->model('home_model');
    }

    public function index() {
        $data['news'] = $this->home_model->getNews();
        $data['events'] = $this->home_model->getEvents();
        $this->load->view('home_view', $data);
    }
	public function about() {
        $data['news'] = $this->home_model->getNews();
        $data['events'] = $this->home_model->getEvents();
        $this->load->view('about_view', $data);
    }
	public function faq() {
        $data['news'] = $this->home_model->getNews();
        $data['events'] = $this->home_model->getEvents();
        $this->load->view('faq_view', $data);
    }
	public function privacy() {
        $data['news'] = $this->home_model->getNews();
        $data['events'] = $this->home_model->getEvents();
        $this->load->view('privacy_view', $data);
    }

}
?>