<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->model('news_model');
		$this->load->model('home_model');
    }

    public function index() {
        $data['all_news'] = $this->news_model->getNews();
        $this->load->view('news_view', $data);
    }
	public function detail($id = NULL) {
		$data['snews'] = $this->news_model->getNewsById($id);
		$data['news'] = $this->home_model->getNews();
        $data['events'] = $this->home_model->getEvents();
        $data['all_news'] = $this->news_model->getNews();
        $this->load->view('news_detail', $data);
    }

}
?>