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
		$data['all_student'] = $this->search_model->searchStudent($filterby,$keyword);
		
		$config['base_url'] = base_url().'search';
		$config['total_rows'] = count($data['all_student']);
		$config['per_page'] = 10;
		
		$this->pagination->initialize($config);

		
		
		
        $this->load->view('search_view',$data);
    }

}
?>