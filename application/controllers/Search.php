<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Home.php
 * @author Imron Rosdiana
 */
class Search extends CI_Controller
{

    function __construct() {
        parent::__construct();
		$this->load->model('postgrad_alumni_model','search_model');
    }

    public function index() {
		$this->load->library('pagination');
		
		
		$filterby 		= $this->input->post('filterby');
		$keyword 		= $this->input->post('keyword');
		
		
		$config['base_url'] = base_url().'search/';
		$config['total_rows'] = count(@$data['all_student']);
		$config['per_page'] = 10;
		$config['uri_segment'] = '2'; 
		$start = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
		$limit = $config["per_page"];
		$this->pagination->initialize($config);
		
		$data["pagination_links"] = $this->pagination->create_links();
		$data['all_student'] = $this->search_model->searchStudent($filterby,$keyword,$start,$limit);
		//echo $this->pagination->create_links();
		//exit;
		
		
		
        $this->load->view('search_view',$data);
    }

}
?>