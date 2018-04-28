<?php 
require_once __DIR__."/curl_helper.php";
require_once __DIR__."/db.php";

function is_array_or_object($in){return is_array($in) or is_object($in); }
function truncate_log_file(){ fclose(fopen(__DIR__."/cron_helper.log","w")); }
function is_json_2($string) {json_decode($string); return json_last_error() === JSON_ERROR_NONE; }
function clog($in){
	$in= is_array_or_object($in) ?  print_r($in,true) : $in;
	$in .= PHP_EOL;
	file_put_contents(__DIR__.'/cron_helper.log',$in,FILE_APPEND | LOCK_EX);
}
$db = new db();
// $res = $db->proxy_exist("202.56.203.40:80");
// $db->delete_proxy(array("id"=>'6'));
// $db->delete_proxy(array("id"=>'5'));
// $db->delete_proxy(array("id"=>'3'));
// $db->delete_proxy(array("id"=>'9'));
// pre(".......");
truncate_log_file();
clog("in cron helper....");
$curl = (new Curl(random_uagent()))
       ->setOption("connecttimeout",2)
			 ->setOption("timeout",6);
$url = "https://www.alibaba.ir/api/GetCity";

$i = 0;
do{
	if(get_random_proxy("gimmeproxy.com")){
		// clog("random_proxy: " . $_SESSION["rand_proxy"]);
		if(isset($_SESSION["rand_proxy"]))
			$curl->setProxy($_SESSION["rand_proxy"]);
		$response = $curl->get($url);
		if(!$curl->error()) break;
	}
  // clog($response);
  // clog($curl->error());
  $i++;
}while($i < 10);


if(!is_json_2($_SESSION["rand_proxy"])){
	if(!$db->proxy_exist($_SESSION["rand_proxy"])){
			clog("adding proxy");
			$db->add_proxy($_SESSION["rand_proxy"]);
	}
}


// get random proxy from pubproxy

$i=0;
do{
	if(get_random_proxy("pubproxy.com")){
		clog("random_proxy: " . $_SESSION["rand_proxy"]);
		if(isset($_SESSION["rand_proxy"]))
			$curl->setProxy($_SESSION["rand_proxy"]);
		$response = $curl->get($url);
		if(!$curl->error()) {
			if(!$db->proxy_exist($_SESSION["rand_proxy"])){
					$db->add_proxy($_SESSION["rand_proxy"]);
					break;
			}
		}
	}
  clog($response);
  clog($curl->error());
  $i++;
}while($i < 10);


// pre($db->delete_proxy(array("id"=>1)));
// pr($db->add_proxy($_SESSION["rand_proxy"]));
clog("...........................................");
clog($db->get_all_proxies());

