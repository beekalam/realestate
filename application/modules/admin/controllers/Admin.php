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
                $this->success_msg();
                redirect("admin/index");
            }else{
                $this->err_msg();
            }
        }

//	    $this->view("add_client",array("footer"=>"footer text"));
    }

    public function add_property(){
        $property_type = $_REQUEST['pt'];
        $deal_type = $_REQUEST['dt'];
//        pre($_REQUEST);
        $this->load->helper(array('form','url'));
        $this->load->library('PropertyLib',array("property_type"=>$property_type,"deal_type"=>$deal_type));
        if($this->is_get_request()) {
            $this->view("add_property",array("pt"=>$property_type,"dt"=>$deal_type));
            return;
        }

        //post request validation
        if($this->propertylib->is_valid() == false){
            $this->view('add_property',array("pt"=>$property_type,"dt"=>$deal_type));
            return;
        }else{
            $this->propertylib->init_from_post();
            if($this->propertylib->save()){
                $this->success_msg();
                redirect("admin/index");
            }else{
                die("error");
            }
        }
    }

    public function properties(){
        $start = $this->input->post("start");
        $len = $this->input->post("len");

        $length = count($this->db->get("properties")->result());
        $data = $this->db->get("properties",$len,$start)->result_array();

        ejson(array("data" => $data,
                    "recordsTotal" => count($data),
                    "draw" => $this->input->post("draw"),
                    "recordsFiltered"=>$length));
    }

    public function clients()
    {
        $this->view("clients",array("footer"=>"footer text"));
    }

    public function clients_list()
    {
        $start = $this->input->post("start");
        $len = $this->input->post("len");

        $length = count($this->db->get("clients")->result());
        $data = $this->db->get("clients",$len,$start)->result_array();

        ejson(array("data" => $data,
            "recordsTotal" => count($data),
            "draw" => $this->input->post("draw"),
            "recordsFiltered"=>$length));
    }

    public function find_client_modal()
    {
      $this->load->view("find_client_modal");
    }

    public function find_client(){
        $search  = $this->get("POST.search");
        $res = $this->db->get_where("clients",array("first_name"=>$search))->result_array();
        echo json_encode($res);
    }
}
