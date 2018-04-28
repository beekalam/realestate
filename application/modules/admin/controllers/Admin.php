<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends MX_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model("Settings_model");
		$this->load->helper("utils");
//		$this->checkAuth();
	}

	public function index() {
        $this->view("index",array("footer"=>"footer text"));
	}

}
