<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->model('events_model');
		$this->load->model('home_model');
    }

    public function index() {
        $data['all_events'] = $this->events_model->getEvents();
        $this->load->view('events_view', $data);
    }
	public function detail($id = NULL) {
		$data['snews'] = $this->events_model->getEventsById($id);
		$data['news'] = $this->home_model->getNews();
        $data['events'] = $this->home_model->getEvents();
        //$data['all_news'] = $this->news_model->getNews();
        $this->load->view('events_detail', $data);
    }


}
?>
