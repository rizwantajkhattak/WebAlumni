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
    }

    public function index() {
        $this->load->view('search_view');
    }

}
?>