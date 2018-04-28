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

	public function add_client(){
        $this->load->library('ClientLib');
        $this->load->helper(array('form','url'));

        if($this->is_get_request()) {
            $this->view("add_client",array());
            return;
        }

        //post request validation
        if($this->clientlib->is_valid() == false){
            $this->view('add_client',array());
            return;
        }else{
            $this->clientlib->init_from_post();
//            var_dump($this->clientlib->build_vm());
            die($this->clientlib->save());
        }

//	    $this->view("add_client",array("footer"=>"footer text"));
    }


}
