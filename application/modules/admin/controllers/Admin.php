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
            if($this->clientlib->save()){
                die("success");
            }else{
                die("error");
            }
        }

//	    $this->view("add_client",array("footer"=>"footer text"));
    }

    public function add_property(){
        $property_type = $_GET['pt'];
        $this->load->helper(array('form','url'));
        $this->load->library('PropertyLib',array("property_type"=>$property_type));
        if($this->is_get_request()) {
            $this->view("add_property",array());
            return;
        }

        //post request validation
        if($this->propertylib->is_valid() == false){
            $this->view('add_property',array());
            return;
        }else{
            $this->propertylib->init_from_post();
            $this->propertylib->build_insert_array();

            if($this->propertylib->save()){
                die("success");
            }else{
                die("error");
            }
        }
    }

}
