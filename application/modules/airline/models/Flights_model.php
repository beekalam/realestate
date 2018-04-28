<?php

class Flights_model extends CI_Model {

	function __construct(){
		parent :: __construct();
	}
	public function initdb(){
		$this->db->empty_table("flight_flight_path");
		$this->db->empty_table("flight_path");
		$this->db->empty_table("flights_schedules");
		$f = array(
		    "flight_number" 		=> 123,
		    "flight_type" 			=> 2,
		    "source_airport" 		=> 76, //syz
		    "destination_airport" 	=> 56, //kih
		    "flight_date_out" 		=> '2018-02-07',
		    "flight_time_out" 		=> '07:20',
		    "flight_date_in" 		=> '2018-02-07',
		    "flight_time_in"		=> '12:50',
		    "flight_time" 			=> '2:20',
		    "airplan" 				=> 1,
		    "flight_class" 			=> 2,
		    "airline" 				=> 1
		);
		if(!$this->db->insert("flights_schedules",$f)) pre("error");
		$f = $this->db->get_where("flights_schedules",$f)->result_array()[0];
		//----------------------------------------------------
		$p = array(
			"source" 		=> 76,
			"destination" 	=> 56,
			"ticket" 		=> 1,
			"adult_price" 	=> 1,
			"child_price" 	=> 1,
			"infant_price" 	=> 1,
			"capacity" 		=> '0',
			"way" 			=> '1',
			"flight_type" 	=> '1',
			"adult_wage" 	=> '0',
			"child_wage" 	=> '0',
			"baby_wage" 	=> '0',
			"load_weight" 	=> '0'
		  );
		// table id ??? //fixme
		if(!$this->db->insert("flight_path",$p)) pre("error");
		$p = $this->db->get_where("flight_path",$p)->result_array()[0];

		$ft =array(
			"flight_id"=> $f["id"],
			"flight_path_id" => $p["id"]);
		if(!$this->db->insert("flight_flight_path",$ft)) pre("error inserting flight_flight_path");
		$ft = $this->db->get_where("flight_flight_path",$ft)->result_array()[0];
		//-----------------------------------------------------------------------
		$p = array(
			"source" 		=> 56,
			"destination" 	=> 76,
			"ticket" 		=> 1,
			"adult_price" 	=> 1,
			"child_price" 	=> 1,
			"infant_price" 	=> 1,
			"capacity" 		=> '0',
			"way" 			=> '2',
			"flight_type" 	=> '1',
			"adult_wage" 	=> '0',
			"child_wage" 	=> '0',
			"baby_wage" 	=> '0',
			"load_weight" 	=> '0'
		  );
		// table id ??? //fixme
		if(!$this->db->insert("flight_path",$p)) pre("error");
		$p = $this->db->get_where("flight_path",$p)->result_array()[0];

		$ft =array(
			"flight_id"=> $f["id"],
			"flight_path_id" => $p["id"]);
		if(!$this->db->insert("flight_flight_path",$ft)) pre("error inserting flight_flight_path");
		$ft = $this->db->get_where("flight_flight_path",$ft)->result_array()[0];
		
	}

	// public function get_flight($id){
	// 	$res = $this->db->get_where("flights",array("id"=>$id))->result_array();
	// 	return count($res) ?  $res[0]: array();
	// }
	public function get_flight_flight_paths($id){
		$this->db->select("flight_flight_path.*");
		$this->db->from("flight_flight_path");
		$this->db->where("flight_id",$id);
		$fp = $this->db->get()->result_array();
		$flight_paths=array();
		foreach($fp as $p){
			$res = $this->db->
					get_where('flight_path',array("id"=>$p["flight_path_id"]))->
					result_array();
			if(count($res))
				$flight_paths[]= $res[0];
		}
		return $flight_paths;
	}
	public function flight_byid($id,$verbose=false){
		$res = $this->db->get_where("flights_schedules",array("id"=>$id))->result_array();
		$res = count($res) ? $res[0]:array();
		if(!empty($res) && $verbose){
			$s = $this->get_airport($res["source_airport"]);
			if(!empty($s))
				$res["source_airport_desc"] = $s["code"]."-".$s["fa_cityname"]."-".$s["fa_name"];

			$d = $this->get_airport($res["destination_airport"]);
			if(!empty($d))
				$res["destination_airport_desc"] = $d["code"]."-".$d["fa_cityname"]."-".$d["fa_name"];

			$a = $this->airplane_byid($res["airplan"]);
			if(!empty($a)){
				$res["airplan_desc"] = $a["fa_name"];
			}

			$c = $this->get_flight_class($res["flight_class"]);
			if(!empty($c)){
				$res["flight_class_desc"] = $c["fa_name"];
			}
			$a = $this->get_airline($res["airline"]);
			if(!empty($a)){
				$res["airline_desc"] = $a["fa_name"];
			}
		}
		return $res;
	}

	public function add_flight(){
		// pre($_POST);
		$i = $this->input;
		$source_airport = $i->post('source_airport');
		$source_airport = $this->airport_byname($source_airport);
		if($source_airport==null)
			throw new Exception("source airport not found");
		$source_airport = $source_airport["id"];

		$destination_airport = $i->post('destination_airport');
		$destination_airport = $this->airport_byname($destination_airport);
		if($destination_airport==null)
			throw new Exception("destination airport not found");
		$destination_airport = $destination_airport["id"];

		list($date_out,$time_out) = explode(" ",$i->post('flight_datetime_out'));
		list($date_in,$time_in) = explode(" ",$i->post('flight_datetime_in'));

		$res = $this->db->get_where("flight_path",array("source"=>$source_airport,
			"destination" => $destination_airport))->result_array();
		pre($res);
		$f = array(
		    "flight_number" 		=> $i->post('flight_number'),
		    "flight_type" 			=> $i->post('flight_type'),
		    "source_airport" 		=> $source_airport,
		    "destination_airport" 	=> $destination_airport,
		    "flight_date_out" 		=> $date_out,
		    "flight_time_out" 		=> $time_out,
		    "flight_date_in" 		=> $date_in,
		    "flight_time_in"		=> $time_in,
		    "flight_time" 			=> $i->post('flight_time'),
		    "airplan" 				=> $i->post('airplan'),
		    "flight_class" 			=> $i->post('flight_class'),
		    "airline" 				=> $i->post('airline')
		);
		
		return $this->db->insert("flights_schedules",$f);
	}

	public function trash____add_flight_path($id=null){
		
		if($id==null){
			$this->db->insert("flights",array('name'=>'t'));
			$id=$this->db->insert_id();
		}

		$arr = array("flight_number","flight_type","path_info_id",
					"airline","flight_class","flight_time","airplan");

		if($this->input->post('flight_type') == 'roundtrip'){
			$ar= array("flight_number_back", "path_info_id_back", "airline_back",
						"flight_class_back", "flight_time_back", "airplan_back");
			$arr = array_merge($ar);
		}
		$p=array();
		foreach($arr as $k)
			$p[$k] = $this->input->post($k);

		list($date_out,$time_out) = explode(" ",$this->input->post('flight_datetime_out'));
		list($date_in,$time_in) = explode(" ",$this->input->post('flight_datetime_in'));
		$p["flight_date_out"] = $date_out;
		$p["flight_date_in"]  = $date_in;
		$p["flight_time_in"]  = $time_in;
		$p["flight_time_out"] = $time_out;
		$p["flight_id"] = $id;
		pre($p);
		return $this->db->insert("flight_path",$p);
	}
	public function get_flight_schedule($id,$verbose=false){
		$schedules = $this->db->get_where("flight_schedules",array("id"=>$id))->result_array();
		$schedules = count($schedules) ? $schedules[0]:null;
		$data = array();
		if($schedules && $verbose){
				$data = array_merge($data,$schedules);
				$a = $this->get_airline($data["airline"]);
				$data["airline_pic"] = $a["pic"];

				$data["airline_desc"] = count($a) ? $a["fa_name"]:null;
				$a = $this->airplane_byid($data["airplan"]);
				$data["airplan_desc"] = count($a) ? $a["fa_name"]:null;

				$c = $this->get_flight_class($data["flight_class"]);
				$data["flight_class_desc"] = !empty($c) ? $c["fa_name"]:null;

				// pre($data);
				$fpath = $this->db->get_where("path_info",array("id"=>$data["path_id"]))->result_array();
				$fpath = count($fpath) ? $fpath[0] : null;
				if($fpath){
					// pre($fpath);		
					$a = $this->get_airport($fpath["source"]);
					if(!empty($a)){
						$data["source_airport_desc"] = $a["code"]."-".$a["en_cityname"];
						$fpath["source_airport"] = $a;
					}
					$a = $this->get_airport($fpath["destination"]);
					if(!empty($a)){
						$data["destination_airport_desc"] = $a["code"]."-".$a["en_cityname"];	
						$fpath["destination_airport"] = $a;
					}
					$data["path"] = $fpath;
					$data["path_info"]=$data["source_airport_desc"]."---->".$data["destination_airport_desc"];
				}
		}
		// pre($data);
		return $data;
	}
	public function add_flight_schedule(){
		$arr = array("flight_number","flight_type",
					 "airline","flight_class",
					 "flight_time","airplan","flight_class","path_id");

		foreach($arr as $k) $p[$k] = $this->input->post($k);
		
		if($this->input->post('flight_type') == 'roundtrip'){
			$ar= array("flight_number_back", "airline_back",
						"flight_class_back", "flight_time_back", "airplan_back");
			foreach($ar as $k) $p[$k] = $this->input->post($k);
		}

		list($date_out,$time_out) = explode(" ",$this->input->post('flight_datetime_out'));
		list($date_in,$time_in) = explode(" ",$this->input->post('flight_datetime_in'));
		$p["flight_date_out"] = $date_out;
		$p["flight_date_in"]  = $date_in;
		$p["flight_time_in"]  = $time_in;
		$p["flight_time_out"] = $time_out;

		// $i = $this->input;
		// $source_airport = $this->airport_byname($i->post('source_airport'));
		// if($source_airport==null)
		// 	throw new Exception("source airport not found");
		// $p["source_airport"] = $source_airport["id"];

		// $destination_airport = $this->airport_byname($i->post('destination_airport'));
		// if($destination_airport==null)
		// 	throw new Exception("destination airport not found");
		// $p["destination_airport"] =  $destination_airport["id"];
		$p["capacity"] = '0'; //fixme
		$p['now_capacity'] ='0'; //fixme
		$p['num_back'] = '0'; //fixme
		return $this->db->insert("flight_schedules",$p);
	}

	public function update_flight_schedule($schedule){
		$id = $schedule["id"];
		unset($schedule["id"]);
		$arr = array("flight_number","flight_type",
					 "airline","flight_class",
					 "flight_time","airplan","flight_class","path_id");

		foreach($arr as $k){
			if(isset($_POST[$k]))
				$schedule[$k] = $this->input->post($k);
			$this->db->set($k,$schedule[$k]);
		}

		list($date_out,$time_out) = explode(" ",$this->input->post('flight_datetime_out'));
		list($date_in,$time_in) = explode(" ",$this->input->post('flight_datetime_in'));
		$dates["flight_date_out"] = $date_out;
		$dates["flight_date_in"]  = $date_in;
		$dates["flight_time_in"]  = $time_in;
		$dates["flight_time_out"] = $time_out;


		if($this->input->post('flight_type') == 'roundtrip'){
			$ar= array("flight_number_back", "airline_back",
						"flight_class_back", "flight_time_back", "airplan_back");
			foreach($ar as $k){
				if(isset($_POST[$k]))
					$schedule[$k] = $this->input->post($k);
				$this->db->set($k,$schedule[$k]);		
			}
			list($date_out,$time_out) = explode(" ",$this->input->post('flight_datetime_out_back'));
			list($date_in,$time_in) = explode(" ",$this->input->post('flight_datetime_in_back'));
			$dates["flight_date_out_back"] = $date_out;
			$dates["flight_date_in_back"]  = $date_in;
			$dates["flight_time_in_back"]  = $time_in;
			$dates["flight_time_out_back"] = $time_out;
		}
		foreach($dates as $k=>$v){
			$this->db->set($k,$v);
		}
		$this->db->where("id",$id);
		// pre($schedule);
		return $this->db->update("flight_schedules");
	}
	
	public function flights_bypath($fpid){
		return $this->db->get_where("flights",array("fp_id"=> $fpid))->result_array();
	}

	public function get_all_flight_classes(){
		return $this->db->get("flight_class")->result_array();
	}

	public function get_all_plain_types() {
		return $this->db->get("airplanes")->result();
	}

	public function get_all_airlines() {
		return  $this->db->get("airlines")->result_array();
	}

	public function get_all_airports() {
		return $this->db->get("airports")->result_array();	
	}

	public function get_airport($id){
		$res = $this->db->get_where("airports",array("id"=>$id))->result_array();
		return count($res) ? $res[0] : array();
	}

	public function search_airports($param)
	{
		if(empty($param))
			throw new Exception("empty search param for airports");
		
		$param= strtolower($param);
		$columns = array('code','fa_name','en_name','fa_cityname','fa_countryname','en_countryname','fa_cityname','en_cityname');
		$where = array();
		foreach($columns as $col){
			$where[] = " {$col} like '%{$param}%' ";
		}
		$q = "select * from airports where " . join(' or ',$where);
		$result = $this->db->query($q)->result_array();
		foreach ($result as &$row) {
			$row["description"] = $row["code"]."-".$row["en_cityname"];
		}
		return $result;
	}

	public function trash___search_flight($source ,$destination)
	{
		if(empty($source) || empty($destination))
			throw new Exception("empty source or destination for flight paths search");
		$q ="";
		$res = $this->db->get('flight_path')->result();
		$res = $this->db->get('flights')->result();
		// pre($this->db->get('flights')->result());
		$res = $this->db->get_where('flights',
							array("source_airport" => $source["id"],"destination_airport" => $destination["id"]))
		                 ->result_array();
		return count($res) ? $res[0]: array();
	}

	public function search_flight($source,$destination)
	{
		if(empty($source) || empty($destination))
			throw new Exception("empty source or destination for flight paths search");
		// $res = $this->search_flight($source,$destination)
		// $res = $this->db->get('flight_path')->result();
		// $res = $this->db->get('flights')->result();
		// pre($this->db->get('flights')->result());
		$this->db->select('flights.*,airplanes.fa_name as plan_fa_name,airlines.fa_name as airline_fa_name');
		$this->db->from('flights');
		$this->db->where('source_airport',$source["id"]);
		$this->db->where('destination_airport',$destination["id"]);
		$this->db->join('airlines','flights.airline = airlines.id');
		$this->db->join('airplanes','flights.airplan = airplanes.id');
		$res = $this->db->get()->result();
		return count($res) ? $res[0]:array();
	}
	public function search_flight_bydate($out_date)
	{
		if(empty($out_date))
			throw new Exception("out date is emtpy");
		$this->db->select('flights.*,airplanes.fa_name as plan_fa_name,airlines.fa_name as airline_fa_name');
		$this->db->from('flights');
		$this->db->where("flights.flight_date_out > '{$out_date}'");
		$this->db->join('airlines','flights.airline = airlines.id');
		$this->db->join('airplanes','flights.airplan = airplanes.id');
		$res = $this->db->get()->result_array();
		return $res;
	}

	public function get_all_passengers()
	{
		return $this->db->get('passengers')->result_array();
	}

	public function add_passenger($passenger_type)
	{
		if(empty($passenger_type))
			throw new Exception("passenger_type is empty");

		$p = array(
				"first_name" 	=> $this->input->post('first_name'),
				"last_name" 	=> $this->input->post('last_name'),
				"gender" 		=> $this->input->post("gender"),
				"identity_num" 	=> $this->input->post("identity_num"),
				"passenger_type"=> $passenger_type,
				"person_type" 	=> "Adult",
				"mobile_num" 	=> $this->input->post("mobile_num")
			);
		if($passenger_type == "Guest")
			$p["main_id"] = $this->input->post('main_id');

		return $this->db->insert("passengers",$p);
	}

	public function path_info_byid($id){
		$res = $this->db->get_where("path_info",array("id"=>$id))->result_array();
		$airports = $this->get_all_airports();
		foreach($res as &$r){
			$i = array_search($r["source"],array_column($airports,"id"));
			$r["source_desc"] = 
				$airports[$i]["code"]."-".$airports[$i]["en_cityname"];
			$i = array_search($r["destination"],array_column($airports,"id"));
			$r["destination_desc"] = 
				$airports[$i]["code"]."-".$airports[$i]["en_cityname"];
		}
		// pre($res);
		return count($res) ? $res[0]:array();
	}

	public function airport_byname($name){
		list($code,$en_cityname) = explode("-",$name);
		// if(!empty($code) && !empty($en_cityname)){ //fixme
			$res = $this->db->get_where("airports",array("code" => $code,"en_cityname" => $en_cityname))->result_array();
			return count($res) ? $res[0] : null;
		// }
		
	}
	public function add_flight_path2($source_id,$destination_id){
		$p = array(
			"source" 		=> $source_id,
			"destination" 	=> $destination_id,
			"ticket" 		=> $this->input->post("ticket"),
			"adult_price" 	=> $this->input->post("adult_price"),
			"child_price" 	=> $this->input->post("child_price"),
			"infant_price" 	=> $this->input->post("infant_price"),
			"capacity" 		=> '0' || $this->input->post("capcity") , //fixme
			"way" 			=> '1' || $this->input->post("way"), //fixme
			"flight_type" 	=> '0' || $this->input->post("flight_type"), //fixme
			"adult_wage" 	=> '0' || $this->input->post("adult_wage") , //fixme
			"child_wage" 	=> '0' ||$this->input->post("child_wage") , //fixme
			"baby_wage" 	=> '0' ||$this->input->post("baby_wage") , //fixme
			"load_weight" 	=> '0'||$this->input->post("load_weight") //fixme
		  );
		// table id ??? //fixme
		return $this->db->insert("flight_path",$p);
	}

	public function update_flight_path($flight_path){
		foreach(array_keys($flight_path) as $k){
			if($this->input->post($k)){
				$flight_path[$k] = $this->input->post($k);
			}
		}
		foreach(array("ticket","adult_price","child_price","infant_price") as $k){
			$this->db->set($k,$flight_path[$k]);
		}
		$this->db->where("id",$flight_path["id"]);
		return $this->db->update('flight_path');
	}
	public function add_airport() {
		$a=array(
			"code" 			=> $this->input->post('code'),
			"fa_name"		=> $this->input->post("fa_name"),
			"en_name" 		=> $this->input->post("en_name"),
			"fa_cityname" 	=> $this->input->post("fa_cityname"),
			"en_cityname" 	=> $this->input->post("en_cityname"),
			"fa_countryname"=> $this->input->post("fa_countryname"),
			"en_countryname"=> $this->input->post("en_countryname"),
			"lat"			=> $this->input->post("lat"),
			"lng"			=> $this->input->post("lng"),
		);
		return $this->db->insert("airports",$a);
	}

	public function update_airport($airport){
		$id = $airport["id"];
		foreach(array_keys($airport) as $k){
			if($this->input->post($k)){
				$airport[$k] = $this->input->post($k);
			}
		}
		unset($airport["id"]);
		foreach(array_keys($airport) as $k){
			$this->db->set($k,$airport[$k]);
		}
		// pre($airport);
		$this->db->where("id",$id);
		return $this->db->update('airports');
	}
	public function add_airline(){
		$a = array(
				"fa_name" 	=> $this->input->post('fa_name'),
				"en_name" 	=> $this->input->post('en_name'),
				"pic" 		=> $this->input->post('pic'),
		);
		return $this->db->insert("airlines",$a);
	}
	public function get_airline($id){
		$res = $this->db->get_where("airlines",array("id" => $id))->result_array();
		return count($res) ? $res[0]: array();
	}
	public function update_airline($airline){
		$id = $airline["id"];
		foreach(array_keys($airline) as $k){
			if($this->input->post($k)){
				$airline[$k] = $this->input->post($k);
			}
		}
		unset($airline["id"]);
		foreach(array_keys($airline) as $k){
			$this->db->set($k,$airline[$k]);
		}
		
		$this->db->where("id",$id);
		return $this->db->update('airlines');
	}

	public function add_airplane() {
		$a = array(
				"fa_name" => $this->input->post("fa_name"),
				"en_name" => $this->input->post("en_name")
		);
		return $this->db->insert("airplanes",$a);
	}
	public function get_all_airplanes(){
		return $this->db->get("airplanes")->result_array();
	}
	public function airplane_byid($id){
		$res= $this->db->get_where("airplanes",array("id"=>$id))->result_array();
		return count($res) ? $res[0]: array();
	}

	public function add_flight_class() {
		$a = array(
				"fa_name" 	=> $this->input->post("fa_name"),
				"en_name" 	=> $this->input->post("en_name"),
				"code" 		=> $this->input->post("code")
		);
		return $this->db->insert("flight_class",$a);
	}

	public function get_flight_class($id){
		$res= $this->db->get_where("flight_class",array("id"=>$id))->result_array();
		return count($res) ? $res[0] : array();
	}

	public function update_flight_class($class){
		$id = $class["id"];
		foreach(array_keys($class) as $k){
			if($this->input->post($k)){
				$class[$k] = $this->input->post($k);
			}
		}
		unset($class["id"]);
		foreach(array_keys($class) as $k){
			$this->db->set($k,$class[$k]);
		}
		
		$this->db->where("id",$id);
		return $this->db->update('flight_class');
	}

	public function get_all_flights(){
		// $res = $this->db->get("flights")->result_array();
		$this->db->select(
			'flights.*,airplanes.fa_name as plan_fa_name,airlines.fa_name as airline_fa_name,adult_price,way' );
		$this->db->from('flights');
		// $this->db->where('source_airport',$source["id"]);
		// $this->db->where('destination_airport',$destination["id"]);
		$this->db->join('airlines','flights.airline = airlines.id');
		$this->db->join('airplanes','flights.airplan = airplanes.id');
		$this->db->join('flight_path','flights.fp_id = flight_path.id');
		$res = $this->db->get()->result_array();
		$airports = $this->get_all_airports();
		// pre($res);
		// pre($airports);
		foreach($res as &$r){
			// pre($r["source_airport"]);
			$i = array_search($r["source_airport"],array_column($airports,"id"));
// pre($airports[$i]);
			$r["source_desc"] = 
				$airports[$i]["code"]."-".$airports[$i]["fa_cityname"];
			$i = array_search($r["destination_airport"],array_column($airports,"id"));
			$r["destination_desc"] = 
				$airports[$i]["code"]."-".$airports[$i]["fa_cityname"];
		}
		// pre($res);
		return $res;
	}

	public function all_path_info() {
		$res = $this->db->get('path_info')->result_array();
		$airports = $this->get_all_airports();
		// $flights = $this->db->get("flights")->result_array();
		foreach($res as &$r){
			$i = array_search($r["source"],array_column($airports,"id"));
			$r["source_desc"] = 
				$airports[$i]["code"]."-".$airports[$i]["fa_cityname"];

			$i = array_search($r["destination"],array_column($airports,"id"));
			$r["destination_desc"] = 
				$airports[$i]["code"]."-".$airports[$i]["fa_cityname"];

			// $i = array_search($r["id"],array_column($flights,"fp_id"));

			// $minutes =0;
			// $j = -1;
			// foreach($flights as $f){
			// 	if($r["id"] == $f["fp_id"] && $f["flight_type"] == 1){
			// 	    $j++;
   //                  $time = explode(':', $f["flight_time"]);
   //                  $minutes += ($time[0] * 60.0 + $time[1] * 1.0);
			// 	}
			// }
			// $r["flight_time"] = floor($minutes / 60) . ':' . ($minutes - floor($minutes / 60) * 60);
			// $r["stop"] = $j;
			//todo ask capacity
			// pre($res);
		}
		// pre($res);
		return $res;
	}


}