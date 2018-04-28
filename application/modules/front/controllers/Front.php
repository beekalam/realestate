<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Ramsey\Uuid\Uuid;

class Front extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('airline/Flights_model');
		$this->load->helper("utils");
		$this->load->helper("curl_helper");
		$this->set_settings($this->Settings_model->get_settings_data());
	}

	public function search_airports(){
		$source = $this->Flights_model->search_airports("abada");
		$destination = $this->Flights_model->search_airports("shiraz");
	}

	public function search_flights(){
		$source 	 = $this->Flights_model->get_airport('76');
		$destination = $this->Flights_model->get_airport('6384');
		$res = $this->Flights_model->search_flight_paths($source,$destination);
	}

	public function search_flight_bydate(){
		$date="2018-03-26";
		pre($this->Flights_model->search_flight_bydate($date));
	}

	public function index2(){
		$cities = $this->db->get('city')->result_array();
		$counties = $this->db->get('county')->result_array();
		$provinces = $this->db->get('province')->result_array();
		foreach($cities as &$city){
			foreach($counties as $county){
				if($city["county_id"] == $county["id"]){
					$city["county"] = $county["name"];
				}
			}

			foreach($provinces as $p){
				if($city["province_id"] == $p["id"]){
					$city["province"] = $p["name"];
					// break;
				}
			}
			unset($city["province_id"]);
			unset($city["county_id"]);
		}

		pre($cities);
	}

	public function index(){
		// $this->load->helper("cron");
		// $this->load->library('Jalali_date');
        $lang = $this->get("GET.lang");
        if($lang && $lang=="en")  $_SESSION["lang"] = "en";
        if($lang && $lang=="fa") $_SESSION["lang"] = "fa";

		$this->load->helper("curl");
		$proxy = get_random_proxy_from_db();
		$_SESSION["rand_proxy"] = $proxy;

		$this->load->helper("lib_date");
		$s = new DateTime();
		date_add($s, date_interval_create_from_date_string('2 days'));
		$s = date_format($s,"Y-m-d");
		$cities = city_airport();
		$s = $this->Settings_model->get_settings_data();
		$data["title"] = $s["home_title"];
		$source = $this->Flights_model->get_airport('76');
		$destination = $this->Flights_model->get_airport('6384');

		$this->render_header = $this->render_footer = false;

        if($_SESSION["lang"] == "en")
            $this->view("enindex");
        else
            $this->view('index');
    }

	public function add_passenger(){
		$res = $this->Flights_model->add_passenger("Guest");
		if($res){
			echo json_encode(array("success"=>true,"msg"=>""));
		}else
			echo json_encode(array("success"=>false,"msg"=>""));
	}

	public function ticket_search2(){
			return ejson($_SERVER);
	}

	private function get_flights($scode,$dcode,$from_date,$extra_price_type="value",$extra_price_value=0){
	    $this->clear_search_cache();
		$this->load->model("Search_cache");
		$h = md5($scode.$dcode.$from_date);
		$r = $this->db->get_where("search_cache",array("key"=>$h))->result_array();
		if(count($r) && true){
			$res = unserialize(base64_decode($r[0]["value"]));
		}else{
			$res = alibaba_get_flights($scode,$dcode,$from_date);
			$r = base64_encode(serialize($res));
			$this->db->insert("search_cache",array("key"=>$h,"value"=>$r,"lastupdate"=>time()));
		}
		//apply discounts
        if($extra_price_value!=0){
            foreach($res->AvailableFlights as &$r){
                if($extra_price_type == "value"){
                    $r->price = $r->price + $extra_price_value;
                }else if($extra_price_type == "percent")
                    $r->price = ($r->price * $extra_price_value)/100;
            }
        }
		return $res;
	}

	private function clear_search_cache(){
        $now = time();
        $search = $this->db->get("search_cache")->result_array();
        foreach($search as $s){
            if($now - $s["lastupdate"] > 1000){
                $this->db->delete("search_cache",array("key"=>$s["key"]));
            }
        }
    }

	private function get_cheapest_flight($scode,$dcode,$from_date,$extra_price_type="value",$extra_price_value=0){
        $this->clear_search_cache();
		$this->load->helper('lib_date');
		$h = md5($scode.$dcode.convert_jalali_to_gregorian($from_date));
		$r = $this->db->get_where("search_cache",array("key"=>$h))->result_array();
		if(count($r) && true){
				$res = unserialize(base64_decode($r[0]["value"]));
		}else{
				$res = alibaba_get_cheapest_flights($scode,$dcode,convert_jalali_to_gregorian($from_date));
				$r = base64_encode(serialize($res));
        	 $this->db->insert("search_cache",array("key"=>$h,"value"=>$r,"lastupdate"=>time()));
		}
		//apply discounts
        if($extra_price_value!=0){
            foreach($res->d as  &$r){
                if($extra_price_type == "value"){
                    $r->price = $r->price + $extra_price_value;
                }else if($extra_price_type == "percent")
                    $r->price = ($r->price * $extra_price_value)/100;
            }
        }
		return $res;
	}

    public function api_ticket_search(){
  	$scode=$this->get("GET.flight_from");
		$dcode=$this->get("GET.flight_to");
		$from_date =$this->get("GET.from_date");
		xlog("flight_from".$scode);
		xlog("flight_to".$dcode);
		xlog("from_date".$from_date);
		// $from_date = '1397/02/09';//$this->get("POST.from_date");
		$extra_percent = 2;

		$data = array(
								"flight_from"=>$scode,
								"flight_to"=>$dcode,
								"flight_date"=>$from_date
		);

		$data["res"] = $this->get_flights($scode,$dcode,$from_date);
		$data["cheapest_flights"] = $this->get_cheapest_flight($scode,$dcode,$from_date);
		$data["flight_count"] = isset($data["res"]->AvailableFlights) ? count($data["res"]->AvailableFlights) : 0;
		return ejson(array("FlightList"=>$data["res"]->AvailableFlights));
		return ejson($data);
  }

	public function ticket_search_get(){
		$arr = array();
		$scode = $this->get("GET.ffrom");
		$dcode = $this->get('GET.fto');
		$from_date = $this->get('GET.from_date');

        $data = array(
				"flight_from"=>$scode,
				"flight_to"=>$dcode,
				"flight_date"=>$from_date
		);

		$data["res"] = $this->get_flights($scode,$dcode,$from_date);
		$data["cheapest_flights"] = $this->get_cheapest_flight($scode,$dcode,$from_date);
		$data["flight_count"] = isset($data["res"]->AvailableFlights) ? count($data["res"]->AvailableFlights) : 0;
		$this->view("flight_search/new_flight_search",$data);
	}

	public function ticket_search(){
			$this->load->helper('lib_date');
			$this->load->library("Flightapi");
			$this->load->library("Jdf");
			$this->load->library("Hotelapi");
//			$this->hotelapi->hotelInventory();
//			$this->hotelapi->getCities();
//            if(!function_exists("date_sub")){
//                echo "function date-su";
//            }
//
//            if(!function_exists("date_interval_create_from_date_string")) {
//                echo "function dateinterval does not exist";
//            }
            pc($_POST);

            $this->flightapi->enableOverPrice($this->settings["extra_price_type"],$this->settings["extra_price_value"]);
            $scode = $this->get("POST.flightfrom");
            $dcode = $this->get("POST.flightto");
            $from_date = $this->get("POST.flight_from_date");
            $to_date = $this->get("POST.flight_return_date");
            $roundtrip = $this->get("POST.roundtrip");

			$data = array(
					"flight_from"=>$scode,
					"flight_to"=>$dcode,
					"flight_date"=>$from_date,
                    "roundtrip"=>false
			);

			$data["flight_date"] = str_replace("/","-",$data["flight_date"]);

            if(!is_null($roundtrip) && $roundtrip == 'YES'){
                $data["roundtrip"] = true;
                $data["flight_return_date"] = $to_date;
                $data["flight_return_date"] = str_replace("/","-",$data["flight_return_date"]);
                $data["res"] = $this->flightapi->availableCharter($data["flight_from"], $data["flight_to"], $data["flight_date"],$data["flight_return_date"]);
            }else {
                $data["res"] = $this->flightapi->available($data["flight_from"], $data["flight_to"], $data["flight_date"]);
                $data["cheapest_flight"] = $this->flightapi->getCheapestFlight();
                $data["airline_cheapest"] = $this->flightapi->getAirlineCheapest();
                $data["fifteen_days_period"] = $this->flightapi->available15Days($data["flight_from"], $data["flight_to"]);
            }
//			$data["cheapest_flights"] = $this->get_cheapest_flight($scode,$dcode,$from_date);
//			$data["flight_count"] = isset($data["res"]->AvailableFlights) ? count($data["res"]->AvailableFlights) : 0;
            $data["flight_count"] = count($data["res"]["Data"]);
//            pre($data);
            $this->view("flight_search/new_flight_search",$data);
    }

    public function old_ticket_search(){
        $this->load->helper('lib_date');
        $scode=$this->get("POST.flight_from");
        $dcode=$this->get("POST.flightto");
        $from_date = $this->get("POST.flight_from_date");
//        if(!is_persian_date($from_date)){
//            $from_date = convert_gregorian_iso_to_jalali_iso($from_date);
//            $from_date = str_replace("-","/",$from_date);
//            // pre($from_date);
//        }
        $extra_percent = 2;
        $data = array(
            "flight_from"=>$scode,
            "flight_to"=>$dcode,
            "flight_date"=>$from_date
        );

        $data["res"] = $this->get_flights($scode,$dcode,$from_date);
        $data["cheapest_flights"] = $this->get_cheapest_flight($scode,$dcode,$from_date);
        // pre($data);
        $data["flight_count"] = isset($data["res"]->AvailableFlights) ? count($data["res"]->AvailableFlights) : 0;
        // $this->view("flight_search/flight_search2",$data);
//        pre($data);
        $this->view("flight_search/new_flight_search",$data);
    }

    public function ticket_search_trash(){
		// return;

		// $fm 	     = $this->Flights_model;
		// $source 	 = $fm->airport_byname($this->get('POST.source'));
		// $destination = $fm->airport_byname($this->get('POST.destination'));
		// // pre($source,$destination);
		// $res = $this->db->get_where("path_info",
		// 		array("source"=>$source["id"],"destination"=>$destination["id"])
		// 	)->result_array();

		// foreach($res as $r){
		// 	$res = $this->db->get_where("flight_schedules",array("path_id"=>$r["id"]))->result_array();
		// 	if(!empty($res)){
		// 		$data["res"][]= $fm->get_flight_schedule($res[0]["id"],true);
		// 	}
		// }
		// // $res = $this->db->get_where("flight_schedules",
		// // array("source_airport"=>$source["id"],"destination_airport"=>$destination["id"]))->result_array();
		// $this->view("flight_search/flight_search",$data);
	}

	public function sales_details() {
		$flight_id = $this->get('POST.flight_id');
		if(!$flight_id) throw new Exception("flight_id not provided");
		$flight = $this->Flights_model->get_flight_schedule($flight_id,true);

		$this->view('sales_details/sales_details');
	}

	public function train_search(){
		// $train_from 					= $this->get("POST.train_from");
		// $train_to 						= $this->get("POST.train_to");
		// $train_from_date 			= $this->get("POST.from_date");
		// $train_to_date 			  = $this->get("POST.to_date");
		// $train_num_passengers = $this->get("POST.num_passengers");
    $this->load->helper('lib_date');
		$data = array(
		                          "train_from"	        => 	$this->get("POST.train_from"),
								  "train_to"    	    =>	$this->get("POST.train_to"),
								  "train_date"	        =>	$this->get("POST.train_date"),
								  "train_return_date"   =>  $this->get("POST.train_return_date")
                     );
		$data["train_from_fa"] = iatacode_to_city($data["train_from"]);
		$data["train_to_fa"] = iatacode_to_city($data["train_to"]);
		// alibaba_get_train_schedules("THR","AWZ","1396/12/27",1);
      if(!is_persian_date($data["train_date"])){
          $data["train_date"] = convert_gregorian_iso_to_jalali_iso($data["train_date"],"/",true);
      }
        $data["res"] = alibaba_get_train_schedules($data["train_from"],$data["train_to"],$data["train_date"],1);
        $this->body_class = 'back_gray';
     $this->set_title(sprintf("خرید بلیط %s به %s",$data["train_from_fa"],$data["train_to_fa"]));   
     $this->view("train_search",$data);
	}

	public function buy_ticket(){
        $this->load->helper('lib_date');
        $this->load->library("Flightapi");
        $this->flightapi->enableOverPrice($this->settings["extra_price_type"],$this->settings["extra_price_value"]);
        $id 			= $this->get("POST.id");
        $flight_from 	= $this->get("POST.flight_from");
        $flight_to 		= $this->get("POST.flight_to");
        $flight_date 	= $this->get("POST.flight_date");
        $unique_key     = $this->get("POST.unique_key");
        $roundtrip      = $this->get("POST.roundtrip");
        pc($_POST);

        if(!is_null($roundtrip)){
            $flight_return_date = $this->get("POST.flight_return_date");
            $unique_key_bargasht = $this->get("POST.unique_key_bargasht");
            $data["flight"] = $this->flightapi->findFlight(compact("flight_from", "flight_to", "flight_date", "unique_key","unique_key_bargasht","flight_return_date","roundtrip"));
            $data["roundtrip"] = true;
        }else {
//            $this->flightapi->findFlight(compact("flight_from", "flight_to", "flight_date", "unique_key"));
            $data["flight"]  = $this->flightapi->findFlight(compact("flight_from", "flight_to", "flight_date", "unique_key"));
            $data["captcha"] = $this->flightapi->getCaptcha();
//            pre($data["captcha"]);
        }
//        pre($data);
//		$res = $this->get_flights($flight_from,$flight_to,$flight_date);
//		$res = o2a($res->AvailableFlights);
//		$flight = null;
//		foreach($res as $r){
//			if($r["Id"] == $id){
//				$flight = $r;
//				break;
//			}
//		}
		$this->render_section_main = false;
		$this->view("buy_ticket",$data);
	}

	public function redirect_to_bank(){
	    if(!isset($_SESSION["redirect_to_bank"])){
	        die("can not redirect");
        }
        $token = uniqid();
	    $_SESSION["buy_token"] = $token;
	    $_SESSION["buy_id"] = $_SESSION["redirect_to_bank"]["buy_id"];
	    $_SESSION["to_pay"] = $_SESSION["redirect_to_bank"]["to_pay"];

        $this->load->library("Mellat",array("terminal"=>"1875902","username"=>'gardggat25',"password"=>"38397561"));
        echo $this->mellat->startPayment($_SESSION['redirect_to_bank']['buy_id'],
                                         $_SESSION['redirect_to_bank']['to_pay'],
                                         'http://tripz.ir/front/pay_call_back?token='.$token);
    }

    public function libtest(){
        $this->load->helper('lib_date');
	    $this->load->library("Flightapi");
        $this->flightapi->enableOverPrice($this->settings["extra_price_type"],$this->settings["extra_price_value"]);
       $flight_from = 'thr';
       $flight_to = 'syz';
       $flight_date='2018-04-30';
       $unique_key = 'Y97151@446@system@thr@syz@Y9@h';

//       pre($flight);
//       $this->flightapi->getCaptcha();
        $this->flightapi->reserve(compact("flight_from", "flight_to", "flight_date", "unique_key"));
       echo "end";
    }

	public function buy_final(){
        $this->load->helper('lib_date');
        $this->load->library("Flightapi");
        $this->load->library("BuyLib");
        $this->flightapi->enableOverPrice($this->settings["extra_price_type"],$this->settings["extra_price_value"]);

        $flight_from 	= $this->get("POST.flight_from");
        $flight_to 		= $this->get("POST.flight_to");
        $flight_date 	= $this->get("POST.flight_date");
        $unique_key     = $this->get("POST.unique_key");

//        fixme:round trip;

//         get target flight
        $flight = $this->flightapi->findFlight(compact("flight_from", "flight_to", "flight_date", "unique_key"));
        $this->buylib->setFlightInfo($flight);
        // reserve the flight
        $reserve_res = $this->flightapi->reserve($this->buylib->build_reserve_params());
        $this->buylib->setReserveResult($reserve_res);
//        pr($this->buylib->getdbg());
        // check if everything is ok
        if(!$this->buylib->validate()) {
            echo json_encode(array("success" => false, "error" => "buylib could not validate buy."));
            return;
        }
        //save pre-factor to database
        $res = $this->buylib->persist();
        if ($res["res"] ) {
            unset($res["res"]);
            $_SESSION["redirect_to_bank"] = $res;
            echo json_encode(array("success" => true, "msg" => ""));
            return;
        } else {
            echo json_encode(array("success" => false, "error" => ""));
            return;
        }

//        if($flight){
//            pc("in if flight");
//            $_SESSION["buy_flight_info"] = serialize($flight);
//            echo json_encode(array("success"=>true, "msg"=>""));
//        }
//
//        if(false){
//			$passengers = $this->get("POST.passengers");
//			pc($passengers);
//			exit;
//			$flight_id = $this->get("POST.flight_id");
//			$from = $this->get("POST.flight_from");
//			$to = $this->get("POST.flight_to");
//			$date= $this->get("POST.flight_date");
//			// pr(array($from, $to,$date));
//			$res = alibaba_get_flights($from,$to,$date);
//            pc("getting alibaba flights");
//			$flight = null;
//			foreach($res->AvailableFlights as $f){
//				$f = o2a($f);
//				if($f["Id"] == $flight_id){
//					$flight = $f;
//					break;
//				}
//			}
////			if(!$flight)
////				return ejson(false,"flight with id not found");
//			//todo check ClassCount for capacity full
//			// pre(array("passengers"=>json_encode($passengers),
//			// 								 "flight_id"=>$flight_id,
//			// 								 "flight_info"=>json_encode($flight)));
//            pc("inserting into db");
//			$res = $this->db->insert("ticket",array("passengers"=>json_encode($passengers),
//											 "flight_id"=>$flight_id,
//											 "flight_info"=>json_encode($flight)));
//			pc($res);
//			if(!$res)
//				return ejson(false,json_encode($this->db->error()));
//
//			return ejson(array("success"=>true,"reciept_no"=>$this->db->insert_id()));
//		}
	}

//-------------------------------------------------------------------
	public function register(){
		$this->render_section_main = false;
	 	$this->body_class = "back_gray";

        if($_SESSION["lang"] == "en") {
            $this->view("en_register", array());
        }
        else {
            $this->set_title("ثبت نام");
            $this->view("register", array());
        }
	}

	public function register_post(){
		$this->load->library('email');
		$email = $this->get("POST.email");
		$password = $this->get("POST.password");
		$res = $this->db->get_where("users",array("email"=>$email))->result_array();
		if(count($res)!=0){
		    $this->view('message',array( 'msg'=>'user already exist'));
		    return;
		}
		if(!($email and $password)) {
		    $this->view('message',array('msg' => 'email or password is empty'));
		    return;
		}

		if($email and $password){
			$token = Uuid::uuid4();
			$token = $token->toString();
			$this->db->insert('users',array(
											"email"=>$email,
											"password"=>sha1($password),
											"is_active"=>"no",
											"activation_token"=> $token ));
			$activation_link = "http://tripz.ir/front/activate?token=".$token;
			$this->email->from('noreplay@tripz.ir', 'activation@tripz.ir');
			$this->email->to("$email");
			$this->email->cc('another@another-example.com');
			$this->email->bcc('them@their-example.com');

			$this->email->subject('Email Test');
			$this->email->message('Testing the email class. activation link:'.$activation_link);

			$this->email->send();
            $this->view('message',array('msg' => 'email sent'));
		}

	}

	public function activate(){
		$token = $this->get("GET.token");
		$res = $this->db->get_where("users",array("activation_token"=>$token))->result_array();
		if(count($res) == 0){ die("user with token not found");}
		$this->db->where("activation_token",$token);
		$this->db->set("is_active","yes");
		$res = $this->db->update("users");
        $this->render_section_main = false;
        $this->body_class = 'back_gray';
        $data = array("msg"=>"حساب کاربری شما با موفقیت ایجاد شد.");
        if($_SESSION["lang"] == "en") $data["msg"] = "Your account is activated.";
        $this->view("fa_message",$data);
	}

	public function profile(){
		$this->render_section_main = false;
		$this->set_title("حساب کاربری");
	 	$this->body_class = "back_gray";
	 	$user_info = $this->db->get_where("users",array("id"=>$_SESSION['userid']))->result_array();
	 	if(count($user_info) == 0) die("can't find user");
	 	$user_info = $user_info[0];
	 	$user_info["mode"] = "view";
//	 	pc($user_info);
//        pre($user_info);
//        $user_info["birth_date"] = '1/1/1';
//        $user_info["gender"] = 'male';
//        $user_info["national_code"] = '513996565';
//        $user_info["national_code"] = '513996565';
//        $user_info["phone"] = '513996565';
//        $user_info["mobile"] = '513996565';
//        $user_info["province"] = 'fars';
//        $user_info["city"] = 'shiraz';
//        $user_info["address"] = 'address';
//        $user_info[""]
        if($_SESSION["lang"] == "en")
            $this->view("en_profile",$user_info);
        else
		    $this->view("profile",$user_info);
	}

	public function edit_profile(){
        $this->render_section_main = false;
        $this->set_title("حساب کاربری");
        $this->body_class = "back_gray";
        $user_info = $this->db->get_where("users",array("id"=>$_SESSION['userid']))->result_array();
        if(count($user_info) == 0) die("can't find user");
        $user_info = $user_info[0];
        $user_info["mode"] = "edit";
        $user_info["birth_date"] = '1/1/1';
        $user_info["gender"] = 'male';
        $user_info["national_code"] = '513996565';
        $user_info["national_code"] = '513996565';
        $user_info["phone"] = '513996565';
        $user_info["mobile"] = '513996565';
        $user_info["province"] = 'fars';
        $user_info["city"] = 'shiraz';
        $user_info["address"] = 'address';
//        pre($user_info);

        if($_SESSION["lang"] == "en")
            $this->view("en_profile",$user_info);
        else
            $this->view("profile",$user_info);
    }

	public function purchase_track(){
		$this->render_section_main = false;
		$this->set_title("پیگیری خرید");
		$this->body_class = "back_gray";
		if($_SESSION["lang"] == "en"){
            $this->view("en_purchase_track",array());
        }else{
            $this->view("fa_purchase_track",array());
        }
	}

	public  function buy_test(){
        $this->load->library("Mellat",array("terminal"=>"1875902","username"=>'gardggat25',"password"=>"38397561"));
        echo $this->mellat->startPayment(8, 3000, 'http://tripz.ir/front/pay_call_back');
    }

    public function pay_call_back(){
	    pr($_POST);
	    $this->load->database();
        $this->load->library("Mellat",array("terminal"=>'1875902',"username"=>'gardggat25',"password"=>'38397561'));
        $res    =  $this->mellat->checkPayment($_POST);
        $refid  =  $this->get("POST.RefId");
//        pr($_GET);
//        echo $this->get("GET.token");
        $token = $this->input->get("token");
        if($res == false){
            $this->db->set("refid",$refid);
            $this->db->set("paid",$_SESSION["to_pay"]);
            $this->db->where("id",$this->get("POST.SaleOrderId"));
            $res = $this->db->update("ticket");
            //todo send sms to buyer
            //todo send buy sms
            //todo reset session values
            //todo buyticket
        }
    }

    public function paytest(){
        $this->load->library('email');
        $this->load->library("sms");

//        Array
//        (
//            [RefId] => 0E8575BE3F5E0984
//        [ResCode] => 17
//    [SaleOrderId] => 12
//    [SaleReferenceId] =>
//    [CardHolderInfo] =>
//    [CardHolderPan] =>
//)
        $flight  = unserialize($_SESSION["buy_flight_info"]);
//        pre($flight);
        $res = $this->db->insert("ticket",array("passengers"=>json_encode(array()),
            "flight_id"=>$flight["uniqueKey"],
            "flight_info"=>json_encode($flight)));

//        unset($_SESSION["buy_flight_info"]);
    }

    public function buy_callback(){
        pc("in clalback");
        $this->load->library('Mellat');
        var_dump($_POST);
        exit;
//        $data['error'] = '';
//        if (isset($_POST['RefId'])) {
//            $ResCode = intval($_POST['ResCode']);
//            $id_faktor = intval($_POST['SaleOrderId']);
//            $SaleReferenceId = intval($_POST['SaleReferenceId']);
//            if ($ResCode == 0) {
////                $query_id_requert = $this->Public_Model->get_reservasion_data1($id_faktor);
//                $id_request = $query_id_requert->id_request;
//                if (!empty($query_id_requert)) {
////                    $query_check_SaleReferenceId = $this->Public_Model->check_facktor_by_refrence($SaleReferenceId);
//                    if ($query_check_SaleReferenceId == 0) {
//                        $update = $this->Public_Model->updat_by_factor_id($id_faktor, $SaleReferenceId);
//                        if ($update) {
//                            $params = array(
//                                'SaleOrderId' => $id_faktor,
//                                'SaleReferenceId' => $SaleReferenceId
//                            );
//                            $result_verify = $this->mellat_verifyPayment($params);
//                            if ($result_verify) {
//                                $array_data = array(
//                                    'id_request' => $id_request,
//                                    'id_faktor' => $id_faktor
//                                );
////                                $this->web_server->url = 'http://94.232.172.172/APi/WebService/BuyTicket';
////                                $this->web_server->data = json_encode($array_data);
////                                $results = $this->web_server->connect();
////                                $data['result_ticket'] = $results;
////                                $query_update_facktor = $this->Public_Model->update_factor_ticket($id_faktor, $results);
//                            } else {
//                                $data['error'] = '-2';
//                            }
//                        }
//                    } else {
//                        $data['error'] = '-1';
//                    }
//                }
//            } else {
//                $data['error'] = $this->mellat->error($ResCode);
//            }
//        } else {
//            $data['error'] = 'خطایی رخ داده است';
//        }

    }

    public function rmoney_test()
    {
        $some_data = array(
            'cur'       => 'EUR', //Currency Code
            'amount'    => '10.23', //AMount to be paid
            'service'   => 'Booking', //service details
            'user_id'   => '988178', //you terminal ID
            'password'  => '71326629', //Password
            'return_url'=> 'http://tripz.ir/front/rmoney_callback', //The URL the user will be redirected after payment
            'order_id'  => '1' //The order we will refer to when the user return back to your website
        );
        $this->load->library("Rmoney",$some_data);
        $this->rmoney->startPayment();
    }

    public function rmoney_callback(){
        pc("in rmoney callback");
        $this->load->library("Rmoney");
        $order_id= $_GET['order_id'];
        $status= $_GET['status'];
        $reference=$_GET['reference'];
        if ($status=="passed") {
            $res = $this->rmoney->verifyPayment($reference);
        }
        exit;
    }

    public function verify(){
        pc("in verify");
        $this->load->library("Rmoney");
        $res = $this->rmoney->verifyPayment("e84935dfeddba4541d01bab8a48a328b");
        var_dump($res);exit;
    }

    public function contactus(){
        if($_SESSION["lang"] == "en"){
            $this->view("en_contactus");
        }else{
            $this->view("fa_contactus");
        }
    }

    public function aboutus(){
        $this->body_class = 'back_gray';
        $this->render_section_main = false;
        if($_SESSION["lang"] == "en"){
            $this->view("en_aboutus");
        }else{
            $this->view("fa_aboutus");
        }
    }

    public function changepass(){
        $this->body_class = 'back_gray';
        $this->render_section_main = false;
        $this->load->library('form_validation');
        $this->load->model('User_model');

        // handle post request
        if($_POST) {
            $old_pass = $this->get("POST.old_password");
            $new_pass = $this->get("POST.new_password");
            $new_pass_repeat = $this->get("POST.new_password_repeat");
            // check empty
            if(is_null_or_empty($old_pass,$new_pass,$new_pass_repeat)) {
                $this->view('fa_chanagepass', array("error" => "empty input value."));
                return;
            }
            //check new and old
            if($new_pass_repeat != $new_pass){
                $this->view('fa_chanagepass', array("error" => "new pass and repeat are not equal."));
                return;
            }
            // update
            $res = $this->User_model->changePassword($_SESSION["username"],$old_pass,$new_pass,$new_pass_repeat);
            if($res["res"]){
                $this->view("message",array("msg"=>"password successfully changed."));
                return;
            }else{
                $this->view("fa_changepass",array("error"=>$res["error"]));
                return;
            }
        }

        // handle get request
        if($_SESSION["lang"] == "en"){
            $this->view("en_changepass");
        }else{
            $this->view("fa_changepass");
        }
    }

    public function airports(){
        $q = $this->get("POST.query");
        $q = strtolower($q);
        $ret = array();
        foreach(city_airport() as $a){
             $found = strpos($a["city"],$q) !== false
                     || strpos(strtolower($a["IATACode"]),$q) !== false
                     || strpos(strtolower($a["en"]),$q) !== false
                     || strpos($a["name"],$q) !== false;
            if($found) {
                $ret[] = $a;
            }
        }
        //pc(count($ret));
        echo json_encode($ret);
    }

    public function test_api(){
        $this->load->library("Flightapi");
//        $res = $this->flightapi->login();
//        $res = $this->flightapi->airportList();
//        $res = $this->flightapi->available15Days('thr','mhd');
//        $res = $this->flightapi->available('thr','mhd','2018-04-20');
        $res = $this->flightapi->availableCharter('thr','mhd','2018-04-20','2018-04-21');


        pre($res);
    }

}