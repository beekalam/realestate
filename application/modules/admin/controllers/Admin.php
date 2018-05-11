<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("Settings_model");
		$this->load->helper("utils");
        $this->load->helper(array('form','url'));
//		pre($_SESSION);
		$this->checkAuth();
	}

	public function index() {
//	    pc("in index");
        $this->load->library('PropertyLib');
        $data = $this->propertylib->property_stats();
        $this->set_data("active_menu","m-dashboard")
            ->view('index',$data);

//        $this->view("index",$data);
	}

    public function test_function()
    {
        $q = "select properties.* from properties inner join on properties.property_feature_id on property_features.id";
        $res= $this->db->query($q)->result_array();
        pre($res);
        die("...............");
	}

	public function add_client(){
	    $this->addcomponent("inputmask")->set_data("active_menu","m-add-client");
        $this->load->library('ClientLib');
        $data["post_back"] = base_url("admin/add_client");
        if($this->is_get_request()) {
            $this->view("add_client",$data);
            return;
        }

        //post request validation
        if($this->clientlib->is_valid() == false){
            $this->view('add_client',$data);
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
    }

    public function edit_client()
    {
        $this->addcomponent("inputmask")
             ->set_data("active_menu","m-add-client")
             ->set_data("form_title","تغییر مشخصات");
        $this->load->library('ClientLib');
        $id =$this->get("GET.id");
        if($this->is_get_request()) {
            $res = $this->clientlib->find_by_id($id);
            $res["post_back"] = base_url("admin/edit_client?id=$id");
            $this->view("add_client",$res);
            return;
        }

        if($this->clientlib->is_valid() == false){
            $this->view('add_client',array("post_back"=>base_url("admin/edit_client")));
            return;
        }else{
            $this->clientlib->init_from_post();
            if($this->clientlib->update()){
                $this->success_msg();
            }else{
                $this->err_msg();
            }
            redirect("admin/index");
        }
    }

    public function edit_property(){
	    $this->addcomponent('inputmask');
        $this->load->library('PropertyLib',array("property_type"=>'',"deal_type"=>''));
        $id = $this->get("GET.id");
        if($this->is_get_request()){
            $res = $this->propertylib->find_by_id($id);
//            pre($res);
            $res["post_back"] = base_url("admin/edit_property");
            $res["pt"] = $this->propertylib->get_property_type();
            $res["dt"] = $this->propertylib->get_deal_type();
            $this->view('add_property',$res);
            return;
        }

        $this->propertylib->init_from_post();
        if($this->propertylib->is_valid() == false){
            $data["pt"] = $this->propertylib->get_property_type();
            $data["dt"] =  $this->propertylib->get_deal_type();
            $data["post_back"] = base_url("admin/edit_property");
            $this->view('add_property',$data);
            return;
        }else{
            if($this->propertylib->update()){
                $this->success_msg();
            }else{
                $this->err_msg();
            }
            redirect("admin/index");
        }
    }

    public function add_property(){
        $this->addcomponent("inputmask");
        $property_type = $_REQUEST['pt'];
        $deal_type = $_REQUEST['dt'];
//        pre($_REQUEST);
        $this->load->library('PropertyLib',array("property_type"=>$property_type,"deal_type"=>$deal_type));

        if($this->is_get_request()) {
            $this->view("add_property",array("pt"=>$property_type,"dt"=>$deal_type,
                             "post_back"=>base_url("admin/add_property?pt=$property_type&dt=$deal_type")));
            return;
        }

        //post request validation
        if($this->propertylib->is_valid() == false){
            $this->view('add_property',array("pt"=>$property_type,"dt"=>$deal_type,
                            "post_back"=>base_url("admin/add_property?pt=$property_type&dt=$deal_type")));
            return;
        }else{
//                    pre($_POST);
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
        $start = $this->input->get("start");
        $length = $this->input->get("length");

        if(!$start) $start = 0;
        if(!$length) $length = 10;

        $total  = count($this->db->get("properties")->result());
        $data   = $this->db->get("properties",$length,$start)->result();

        ejson(array("data" => $data,
            "recordsTotal" => $total,
            "draw" => $this->input->get("draw"),
            "recordsFiltered"=> $total));
    }

    public function property_list()
    {
        $this->set_data("active_menu","m-property-list")
             ->view("properties");
    }

    public function clients(){
        $this->view("clients",["active_menu"=>"m-clients"]);
    }

    public function clients_list()
    {
        $start  = $this->input->get("start");
        $length = $this->input->get("length");
        if(!$start) $start = 0;
        if(!$length) $length = 10;
        $total  = count($this->db->get("clients")->result());
        $data   = $this->db->get("clients",$length,$start)->result();
        pc("start:$start, length:$length, total:$total,dataLength:".count($data));
        ejson(array("data" => $data,
                    "recordsTotal" => $total,
                    "draw" => $this->input->get("draw"),
                    "recordsFiltered"=> $total));
    }

    public function find_client_modal()
    {
      $this->load->view("find_client_modal");
    }

    public function find_client(){
        $this->load->library('ClientLib');
        $res = $this->clientlib->search(["limit"=>10]);
        echo json_encode($res);
    }


}
