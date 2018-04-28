<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends MX_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model("Settings_model");
		// $this->load->model('Countries_model');
		// $this->load->model('hotels/Hotels_model');
		// $this->load->model('hotels/Rooms_model');
		// $this->load->model('tours/Tours_model');
		$this->load->model('airline/Flights_model');
		$this->load->helper("utils");
		$this->load->helper("curl");
		$this->checkAuth();
	}

	public function index() {
		// pre($this->Flights_model->get_all_plain_types());
		// pre($this->Flights_model->get_all_airlines());
		// $this->load->view("welcome_message");
		// $this->Flights_model->initdb();

		// $res = alibaba_get_flights('SYZ','THR','1396/12/16');
		// pre($res);
		$res = $this->db->get("ticket")->result_array();
		// pre($res);
		if($this->get('GET.theme')){
			$this->session->set_userdata('theme',$this->get('GET.theme'));
			redirect('admin');			
		}
//		pre($res);
		$this->adminView("index",array("active_menu"=>"m-dashboard","latest_tickets"=>$res));
	}

	public function last_bought_flights(){

	}
	public function path_info() {
		$data["active_menu"] = "m-path-info";
		$data["flight_paths"] = $this->Flights_model->all_path_info();
		// pre($data["flight_paths"]);
		$this->view("path_info",$data);
	}

	public function flights(){
		$data["active_menu"] = "m-flights";
		$data["flights"] = $this->db->get("flight_schedules")->result_array();
		foreach($data["flights"] as &$flight){
			$flight = $this->Flights_model->get_flight_schedule($flight["id"],true);
		}
		// pre($data);
		$this->view("flights",$data);
	}

	// public function flights2(){
	// 	$data["active_menu"] = "m-flights";

	// 	$this->view("flights2",$data);
	// }

	public function add_flight(){

		$data["active_menu"]= "m-flights";
		$data["action"] 	= $this->get('POST.action')=='update' ? "update":'add';
		$data["id"] 		= $this->get('POST.id') ? $this->get('POST.id'):'';
		$data["path_id"] 	= $this->get('POST.path_id') ? $this->get('POST.path_id'):'';
		$this->load->library('form_validation');
		$in = $this->input;
		$fv = $this->form_validation;
		$fm = $this->Flights_model;
		$err = array( "required" =>"مقداری برای %s وارد نشده است");
		$fv->set_rules('flight_number','شماره پرواز','required',$err);
		$fv->set_rules('flight_type','نوع پرواز','required',$err);
		// $fv->set_rules('source_airport','فرودگاه مبدا','required',$err);
		// $fv->set_rules('destination_airport','فرودگاه مقصد','required',$err);
		$fv->set_rules('flight_datetime_out','تاریخ خروج','required',$err);
		$fv->set_rules('flight_datetime_in','تاریخ ورود','required',$err);
		$fv->set_rules('flight_time','مدت زمان پرواز','required',$err);
		$fv->set_rules('airplan','نوع هواپیما','required',$err);
		$fv->set_rules('flight_class','کلاس پروازی','required',$err);
		$fv->set_rules('airline','شرکت هواپیمایی','required',$err);

		if($this->get('POST.flight_type')=='roundtrip') {
			$err = array( "required" =>"مقداری برای %s پرواز برگشت وارد نشده است");
			$fv->set_rules('flight_number_back','شماره پرواز','required',$err);
			$fv->set_rules('flight_datetime_out_back','تاریخ خروج','required',$err);
			$fv->set_rules('flight_datetime_in_back','تاریخ ورود','required',$err);
			$fv->set_rules('flight_time_back','مدت زمان پرواز','required',$err);
			$fv->set_rules('airplan_back','نوع هواپیما','required',$err);
			$fv->set_rules('flight_class_back','کلاس پروازی','required',$err);
			$fv->set_rules('airline_back','شرکت هواپیمایی','required',$err);
		}

		// pre($data);
		// $data["show_edit_box"] = count($flight_paths) == 2 ? false:true;
		$data["show_edit_box"] = true;
		//fixme
		// $data['title'] = $fm->get_airport($fp["source_airport"])["fa_cityname"] . 
		// 				 $fm->get_airport($fp["destination_airport"])["fa_cityname"];
		$a =  $fm->get_all_airplanes();
		$a = array_combine(array_column($a,"id"),array_column($a,"fa_name"));
		$data["airplanes"]     =  $a;

		$a = $fm->get_all_flight_classes();
		$a = array_combine(array_column($a,"id"),array_column($a,"fa_name"));
		$data["flight_classes"] = $a;

		$a = $fm->get_all_airlines();
		$a = array_combine(array_column($a,"id"),array_column($a,"fa_name"));
		$data["airlines"] 		= $a;

		//validation
		if($_POST && $fv->run() == FALSE) {
               $this->view('add_edit_flight',$data);
               return;
        }
        // pre($_POST);
        $action = $this->get("POST.action");
        if($action == 'add'){
        	
        	if($fm->add_flight_schedule()){
        		$this->success_msg();
        		redirect("/admin/flights");	
        	}else{
        		$this->err_msg();
        	}
        }

        if($action == 'update'){
        	// pre('edit.......');
        	// pr("..............");
        	// pre($_POST);
        	$schedule = $this->db->get_where("flight_schedules",array("id"=>$this->get("POST.id")))->result_array();
        	$schedule = count($schedule) ? $schedule[0] : null;
        	// pre($schedule);
        	if($fm->update_flight_schedule($schedule)){
        		$this->success_msg();
        		redirect("/admin/flights");
        	}else{
        		$this->err_msg();
        		redirect("/admin/add_flight?id=".$in->post('id'));	
        	}
        }

        $fid   = $this->get("GET.id");
		if($fid){	
			$data["action"] ='update';
			$fs = $fm->get_flight_schedule($fid,true);
			// pre($fs);
			$data = array_merge($data,$fs);
		}
     	// pre($data);
		$this->view("add_edit_flight",$data);
	}

	public function add_flight2(){
		$data["active_menu"] = "m-airports";
		$data["action"] = "add";
		$this->load->library('form_validation');
		$in = $this->input;
		$fv = $this->form_validation;
		$fm = $this->Flights_model;

		$err = array( "required" =>"مقداری برای %s وارد نشده است");
		$fv->set_rules('flight_number','شماره پرواز','required',$err);
		$fv->set_rules('flight_type','نوع پرواز','required',$err);
		$fv->set_rules('source_airport','فرودگاه مبدا','required',$err);
		$fv->set_rules('destination_airport','فرودگاه مقصد','required',$err);
		$fv->set_rules('flight_datetime_out','تاریخ خروج','required',$err);
		$fv->set_rules('flight_datetime_in','تاریخ ورود','required',$err);
		$fv->set_rules('flight_time','مدت زمان پرواز','required',$err);
		$fv->set_rules('airplan','نوع هواپیما','required',$err);
		$fv->set_rules('flight_class','کلاس پروازی','required',$err);
		$fv->set_rules('airline','شرکت هواپیمایی','required',$err);

		$fpid   = $this->get("GET.fpid");
		$flight = $fm->flight_byid($fpid,true);
		$flight_paths = $fm->get_flight_flight_paths($fpid);
		// pre($flight_paths);
		
		$data["flight_paths"] 	= $flight_paths;
		// $data["show_edit_box"] = count($flight_paths) == 2 ? false:true;
		// pre($_POST);
		$data["show_edit_box"] = true;
		//fixme
		// $data['title'] = $fm->get_airport($fp["source_airport"])["fa_cityname"] . 
		// 				 $fm->get_airport($fp["destination_airport"])["fa_cityname"];
		// pre($data);
		$a =  $fm->get_all_airplanes();
		$a = array_combine(array_column($a,"id"),array_column($a,"fa_name"));
		$data["airplanes"]     =  $a;

		$a = $fm->get_all_flight_classes();
		$a = array_combine(array_column($a,"id"),array_column($a,"fa_name"));
		$data["flight_classes"] = $a;

		$a = $fm->get_all_airlines();
		$a = array_combine(array_column($a,"id"),array_column($a,"fa_name"));
		$data["airlines"] 		= $a;
		// pre($data);
		if($_POST && $fv->run() == FALSE) {
               $this->view('add_edit_flight',$data);
               return;
        }

        $action = $this->get("POST.action");
        if($action == 'add'){
        	if($fm->add_flight()){
        		$this->success_msg();
        		redirect("/admin/flights");	
        	}else{
        		$this->err_msg();
        	}
        }

     //    if($action == 'update'){
     //    	$airport = $fm->get_airport($in->post('id'));
     //    	if(!empty($airport) && $fm->update_airport($airport)){
     //    		$this->success_msg();
     //    		redirect("/admin/airports");
     //    	}else{
     //    		$this->err_msg();
     //    		redirect("/admin/add_airport?id=".$in->post('id'));	
     //    	}
     //    }

    	//  $id = $this->get("GET.id");
     //     if($id){
     //     		$airport = $fm->get_airport($id);
    	// 	if(!empty($airport)){
    	// 		$data["action"] = "update";
    	// 		$data = array_merge($data,$airport);
    	// 	}
    	// }

		$this->view("add_edit_flight",$data);
	}

	public function add_path_info(){
		$data["active_menu"] = "m-tickets";
		$data["action"] = "add";
		$this->load->library('form_validation');
		$in = $this->input;
		$fv = $this->form_validation;
		$fm = $this->Flights_model;
		$err = array( "required" =>"مقداری برای %s وارد نشده است");
		$fv->set_rules('source','مبدا','required',$err);
		$fv->set_rules('destination','مقصد','required',$err);
		$fv->set_rules('adult_price','هزینه بزرگسال','required|numeric',$err);
		$fv->set_rules('child_price','هزینه کودک','required|numeric',$err);
		$fv->set_rules('infant_price','هزینه خردسال','required',$err);

		if($_POST && $fv->run() == FALSE) {
               $this->view('add_edit_pathinfo',$data);
               return;
        }

        if($_POST && $_POST["action"] == 'add'){
        	$source_id = $fm->airport_byname($in->post("source"))["id"];
        	$dest_id   = $fm->airport_byname($in->post("destination"))["id"];

        	if($fm->add_flight_path($source_id,$dest_id)){
        		$this->success_msg();
        		redirect("/admin/path_info");	
        	}else{
        		$this->err_msg();
        	}
        }
        
        if($_POST && $_POST["action"] == 'update'){
        	$source_id = $fm->airport_byname($in->post("source"))["id"];
        	$dest_id   = $fm->airport_byname($in->post("destination"))["id"];
        	$flight = $fm->flight_path_byid($in->post('id'));
        	if(!empty($flight) && $fm->update_flight_path($flight,$source_id,$dest_id)){
        		$this->success_msg();
        		redirect("/admin/path_info");
        	}else{
        		$this->err_msg();
        		redirect("/admin/path_info?id=".$in->post('id'));	
        	}
        }

        if($_GET && isset($_GET["id"])){
    		$fpid = $this->input->get('id');
    		// $fp = $fm->flight_path_byid($fpid);
    		$fp = $fm->path_info_byid($fpid);
    		if(!empty($fp)){
    			$data["action"] = "update";
    			$data = array_merge($data,$fp);
    		}
    	}

    	$this->view("add_edit_pathinfo",$data);
	}

	public function delete_path(){
		$id = $this->get("POST.what");

		if($id){
			$success = true;
			$res = $this->db->delete('path_info',array('id'=>$id));
			// if(!$res)
			// 	pre($this->db->display_errors());
			if($res)
				return ejson(true,"عملیات با موفقیت انجام شد");
			else
				return ejson(false,"خطا در حذف");
		}
		return ejson(false,'خطا در حذف');
	}

	public function airport_info(){
		$in = $this->input;
		$ret = '';
		if($in->get('id') && $in->get('dlg')){
			$a = $this->Flights_model->get_airport($this->input->get('id'));
			$vm = new stdClass;
			$vm->label = "کد فرودگاه";
			$vm->label_class = "col-md-3 control-label";
            $vm->input_wrapper = "col-md-9";
            $vm->classes  = "form-control";
            $vm->value = $a["code"];
            $vm->attrs = 'disabled';
            $ret .= VM::input($vm);
            $vm->label = "نام انگلیسی فرودگاه";
            $vm->label_class = "col-md-3 control-label";
            $vm->input_wrapper = "col-md-9";
            $vm->value = $a["en_name"];
            $ret .= VM::input($vm);
            $vm->label = "نام فارسی فرودگاه";
            $vm->label_class = "col-md-3 control-label";
            $vm->input_wrapper = "col-md-9";
            $vm->value = $a["fa_name"];
            $ret .= VM::input($vm);
            echo $ret;
		}
	}

	public function airport_suggestions(){
		//fixme use id value
		$term = $this->input->post_get('term');
		$airports = $this->Flights_model->search_airports($term);
		return ejson(array_column($airports,"description"));
	}

	public function path_suggestions(){
		$param  = $this->input->post_get('term');

		$param= strtolower($param);
		$columns = array('en_name','en_countryname','en_cityname');
		$where = array();
		foreach($columns as $col){
			$where[] = " {$col} like '%{$param}%' ";
		}
		$q = "select * from airports where " . join(' or ',$where);
		$result = $this->db->query($q)->result_array();
		$ret = array();
		foreach ($result as &$row) {
			//$row["description"] = $row["code"]."-".$row["en_cityname"];
			$airport_id = $row["id"];
			$q ="select * from path_info where source={$airport_id} or destination={$airport_id}";
			// pre($q);
			$res = $this->db->query($q)->result_array();
			// pre($res);
			$ret = array_merge($ret,$res);
		}
		// pre(array_column($ret,"id"));
		// pre($ret);
		$ret2=array();
		foreach($ret as $r){
			// pr($r["source"]);
			// pr($r["destination"]);

			$s = $this->db->get_where("airports",array("id"=>$r['source']))->result_array();
			$d = $this->db->get_where('airports',array("id"=>$r["destination"]))->result_array();
			// pr($s);
			// pre($d);
			if(count($s)>0){
				$s=$s[0];
				$s = $s["code"] . "-" .$s["en_cityname"];
			}
			if(count($d)>0){
				$d = $d[0];
				$d = $d["code"] . "-".$d["en_cityname"];
			}
			// $ret2[$r["id"]] = $s."--->".$d;
			$ret2[] = array("name"=> $s."--->".$d,"id"=>$r['id']);
		}
		// pre($ret2);
		return ejson($ret2);
	}

	public function airports(){
		$data["active_menu"] = "m-airports";
		$data["airports"] = $this->Flights_model->get_all_airports();

		// pre($data);

		$this->view("airports",$data);
	}

	public function add_airport(){
		$data["active_menu"] = "m-airports";
		$data["action"] = "add";
		$this->load->library('form_validation');
		$in = $this->input;
		$fv = $this->form_validation;
		$fm = $this->Flights_model;

		$err = array( "required" =>"مقداری برای %s وارد نشده است");
		$fv->set_rules('code','کد','required',$err);
		$fv->set_rules('en_name','نام انگلیسی','required',$err);
		$fv->set_rules('en_cityname','نام انگلیسی شهر','required',$err);

		if($_POST && $fv->run() == FALSE) {
               $this->view('add_edit_airport',$data);
               return;
        }

        $action = $this->get("POST.action");
        if($action == 'add'){
        	if($fm->add_airport()){
        		$this->success_msg();
        		redirect("/admin/airports");	
        	}else{
        		$this->err_msg();
        	}
        }

        if($action == 'update'){
        	$airport = $fm->get_airport($in->post('id'));
        	if(!empty($airport) && $fm->update_airport($airport)){
        		$this->success_msg();
        		redirect("/admin/airports");
        	}else{
        		$this->err_msg();
        		redirect("/admin/add_airport?id=".$in->post('id'));	
        	}
        }

    	 $id = $this->get("GET.id");
         if($id){
         		$airport = $fm->get_airport($id);
    		if(!empty($airport)){
    			$data["action"] = "update";
    			$data = array_merge($data,$airport);
    		}
    	}

		$this->view("add_edit_airport",$data);
	}

	public function airlines(){
		$data["active_menu"] = "m-airlines";
		$data["airlines"] = $this->Flights_model->get_all_airlines();

		// pre($data);

		$this->view("airlines",$data);
	}

	public function flight_class(){
		$data["active_menu"] = "m-flight-class";
		$data["flight_classes"] = $this->Flights_model->get_all_flight_classes();

		 // pre($data);

		$this->view("flight_classes",$data);
	}

	public function add_flight_class(){
		$data["active_menu"] = "m-flight-class";
		$data["action"] = "add";
		$this->load->library('form_validation');
		$in = $this->input;
		$fv = $this->form_validation;
		$fm = $this->Flights_model;

		$err = array( "required" =>"مقداری برای %s وارد نشده است");
		$fv->set_rules('code','کد','required',$err);
		$fv->set_rules('en_name','نام انگلیسی','required',$err);
		$fv->set_rules('fa_name','نام فارسی','required',$err);

		if($_POST && $fv->run() == FALSE) {
               $this->view('add_edit_flight_class',$data);
               return;
        }

        $action = $this->get("POST.action");
        if($action == 'add'){
        	if($fm->add_flight_class()){
        		$this->success_msg();
        		redirect("/admin/flight_class");
        	}else{
        		$this->err_msg();
        	}
        }

        if($action == 'update'){
        	$flight_class = $fm->get_flight_class($in->post('id'));
        	if(!empty($flight_class) && $fm->update_flight_class($flight_class)){
        		$this->success_msg();
        		redirect("/admin/flight_class");
        	}else{
        		$this->err_msg();
        		redirect("/admin/add_flight_class?id=".$in->post('id'));	
        	}
        }

    	 $id = $this->get("GET.id");
         if($id){
         	$flight_class = $fm->get_flight_class($id);
         	// pre($flight_class);
    		if(!empty($flight_class)){
    			$data["action"] = "update";
    			$data = array_merge($data,$flight_class);
    		}
    	}

		$this->view("add_edit_flight_class",$data);
	}

	public function add_airline(){
		$data["active_menu"] = "m-airlines";
		$data["action"] = "add";
		//upload config
		$this->load->library('form_validation');
		$this->load->library('upload',$this->set_upload_options());
		$this->load->library('image_lib');
		$in = $this->input;
		$fv = $this->form_validation;
		$fm = $this->Flights_model;

		$err = array( "required" =>"مقداری برای %s وارد نشده است");
		$fv->set_rules('en_name','نام انگلیسی','required',$err);
		$fv->set_rules('fa_name','نام فارسی','required',$err);
   	
		if($_POST && $fv->run() == FALSE) {
               $this->view('add_edit_airline',$data);
               return;
        }
        //-------------------------------------------------------
        //add airline
        $action = $this->get("POST.action");
        if($action == 'add'){
        	//fixme check file upload max size
        	$r = $this->upload_airline_pic();
        	if(!$r["ok"]){
        		$data = array_merge($data,$r["res"]);
  				$this->view('add_edit_airline',$data);
  				return;
  			}
			$_POST['pic'] = $r['res']['file_name'];
        	if($fm->add_airline()){
        		$this->success_msg();
        		redirect("/admin/airlines");	
        	}else{
        		$this->err_msg();
        	}
        }
        //-------------------------------------------------------
        // edit airline
        if($action == 'update'){
        	$_POST["pic"] = "";//fixme
        	$airline = $fm->get_airline($in->post('id'));
        	if(empty($airline)){
        		$this->msg("شرکت هواپیمایی یافت نشدن");
        		redirect('/admin/airlines');
        	}
        	$r = $this->upload_airline_pic();
        	if(!$r["ok"]){
        		$data = array_merge($data,$r["res"]);
  				$this->view('add_edit_airline',$data);
  				return;
  			}
			$_POST['pic'] = $r['res']['file_name'];
			$old_pic = $airline['pic'];
        	if($fm->update_airline($airline)){
        		$this->delete_airline_pic($old_pic);
        		$this->success_msg();
        		redirect("/admin/airlines");
        	}else{
        		$this->delete_airline_pic($r['res']['file_name']);
        		$this->err_msg();
        		redirect("/admin/add_airline?id=".$in->post('id'));	
        	}
        }
        //---------------------------------------------------------
    	 $id = $this->get("GET.id");
         if($id){
         	$airline = $fm->get_airline($id);
    		if(!empty($airline)){
    			$data["action"] = "update";
    			try{
    				$data["img"] = base64_img_encode_from_file("uploads/airlines/".$airline['pic']);
    			}catch(Exception $e){}

    			$data = array_merge($data,$airline);
    		}
    	}

		$this->view("add_edit_airline",$data);
	}
	private function delete_airline_pic($pic){
		$path= 'uploads/airlines/'.$pic;
		if(file_exists($path)){
			@unlink($path);
		}
		$path='uploads/airlines/thumb/'.$pic;
		if(file_exists($path)){
			@unlink($path);
		}
	}
	private function upload_airline_pic(){
	    if (!$this->upload->do_upload('pic')) {
              $error = array('upload_error' => $this->upload->display_errors());
              $data = array_merge($data,$error);
              // $this->view('add_edit_airline',$data);
              return array("ok"=>false,"res"=>$error);
		}
		$file_info = $this->upload->data();
		$this->image_lib->initialize($this->set_resize_options($file_info['file_name']));
		if (!$this->image_lib->resize()) {
					//fixme delete uploaded file
                    $error = array('resize_error' => $this->image_lib->display_errors());
              		$data = array_merge($data,$error);
              		// $this->view('add_edit_airline',$data);
              		return array("ok"=>false,"res"=>$error);
        }
		$this->image_lib->clear();
		return array("ok"=>true,"res"=>$file_info);
	}

	private function set_upload_options()
	{
		$config['upload_path']          = 'uploads/airlines';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        return $config;
	}

	private function set_resize_options($filename)
    {
        $thumb_config = array();
        $thumb_config['create_thumb'] = FALSE;
        $thumb_config['image_library'] = 'gd2';
        $thumb_config['source_image'] = 'uploads/airlines/' . $filename;
        $thumb_config['new_image'] 	  = 'uploads/airlines/thumb/' . $filename;
        $thumb_config['maintain_ratio'] = FALSE;
        $thumb_config['width'] = 200;
        $thumb_config['height'] = 200;
        return $thumb_config;
    }
    // ----------------------------------------------------------------------------------------------

    public function settings(){
    	$this->load->helper('form');
    	$app_settings = $this->db->get("app_settings")->result_array();
    	// pre($app_settings[0]);
    	$this->view("settings",  $app_settings[0]);
    	// $s = settings::get_by_id(12);
    }

    public function update_settings(){
    	// pre($_POST);
    	$settings = $this->db->get("app_settings")->result_array();
    	if(count($settings)){
    		$settings = $settings[0];
    		// pre($settings);
    		foreach($settings as $k=>$v){
    			if(isset($_POST[$k]) && !empty($_POST[$k])){
    				$settings[$k]= $_POST[$k];
    			}
    		}
    		$this->db->update("app_settings",$settings);
    		// pre('...');
    	}
    	// pre($this->db->get("app_settings")->result_array());
    	redirect("admin/settings");
    }

    public function update_extra_price(){
        $extra_price_value = $this->get("POST.extra_price_value");
        $extra_price_type = $this->get("POSt.extra_price_type");
        $settings = $this->db->get("app_settings")->result_array();
        if(count($settings)){
            $settings = $settings[0];
            $settings["extra_price_value"] = $extra_price_value;
            $settings["extra_price_type"] = $extra_price_type;
        }
        $this->db->where("id",$settings["id"]);
        $res = $this->db->update("app_settings",$settings);
        if($res){
            redirect("admin/settings");
        }
    }
}
