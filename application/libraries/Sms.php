<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sms {
        private $usrename;
	private $password;
	private $webservice_url = "http://textsms.ir/webservice/rest/";
	private $send_url =  "http://textsms.ir/webservice/rest/sms_send?";
	private $userinfo_url ="http://textsms.ir/webservice/rest/user_info?";
        /*
        example usage
        $this->load->library("sms");
        $res = $this->sms->send_sms('test','09359012419');
        */
        public function __construct($username="",$password="")
        {
        	if(empty($username)) $this->username = "esiise";
        	if(empty($password)) $this->password = "137070";
        }

        public function send_sms($in,$number)
        {
        	$a = array(
        			"login_username"=> $this->username,
        			"login_password"=> $this->password,
        			"receiver_number" => $number,
        			"sender_number" => "10007666",
        			"note_arr[]" => $in
        		);
        	$ch = curl_init();
			curl_setopt($ch, CURLOPT_HEADER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($ch, CURLOPT_URL, $this->send_url);
			curl_setopt($ch, CURLOPT_POST, true);
			// curl_setopt($ch, CURLOPT_POSTFIELDS,   'login_username=USERNAME&login_password=PASSWORD&receiver_number=09132677411&note_arr[]=سلام&sender_number=10007666');
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($a) );   
			$results2 = curl_exec($ch);
			return json_decode($results2);
        }

        public function get_user_info()
        {
        	$a = array(
        			"login_username"=> $this->username,
        			"login_password"=> $this->password
        		);
        	$ch = curl_init();
			curl_setopt($ch, CURLOPT_HEADER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($ch, CURLOPT_URL, $this->userinfo_url);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($a) );   
			$results2 = curl_exec($ch);
			return json_decode($results2);
        }
}