<?php
require_once __DIR__."/uagent.php";
// ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
//----------------------------------------------------
// function pr($in){
// 	echo print_r($in,true);
// }
// function pre($in){
// 	echo print_r($in,true) . PHP_EOL;
// 	exit;
// }
//-------------------------------------------------


/**
 * Parses the response from a Curl request into an object containing
 * the response body and an associative array of headers
 *
 * @package curl
 * @author Sean Huber <shuber@huberry.com>
**/
class CurlResponse {
	
	/**
	 * The body of the response without the headers block
	 *
	 * @var string
	**/
	public $body = '';
	
	/**
	 * An associative array containing the response s headers
	 *
	 * @var array
	**/
	public $headers = array();


	/**
	 * Accepts the result of a curl request as a string
	 *
	 * <code>
	 * $response = new CurlResponse(curl_exec($curl_handle));
	 * echo $response->body;
	 * echo $response->headers['Status'];
	 * </code>
	 *
	 * @param string $response
	**/
	function __construct($response) {
		# Headers regex
		$pattern = '#HTTP/\d\.\d.*?$.*?\r\n\r\n#ims';
		
		# Extract headers from response
		preg_match_all($pattern, $response, $matches);
		$headers_string = array_pop($matches[0]);
		$headers = explode("\r\n", str_replace("\r\n\r\n", '', $headers_string));
		
		# Remove headers from the response body
		$this->body = str_replace($headers_string, '', $response);
		
		# Extract the version and status from the first header
		$version_and_status = array_shift($headers);
		preg_match('#HTTP/(\d\.\d)\s(\d\d\d)\s(.*)#', $version_and_status, $matches);
		if(isset($matches[1]))
			$this->headers['Http-Version'] = $matches[1];
		if(isset($matches[2]))
			$this->headers['Status-Code'] = $matches[2];
		if(isset($matches[3]))
			$this->headers['Status'] = $matches[2].' '.$matches[3];
		
		# Convert headers into an associative array
		foreach ($headers as $header) {
			preg_match('#(.*?)\:\s(.*)#', $header, $matches);
			$this->headers[$matches[1]] = $matches[2];
		}
	}
	
	/**
	 * Returns the response body
	 *
	 * <code>
	 * $curl = new Curl;
	 * $response = $curl->get('google.com');
	 * echo $response;  # => echo $response->body;
	 * </code>
	 *
	 * @return string
	**/
	function __toString() {
		return $this->body;
	}
	
}

/**
 * A basic CURL wrapper
 *
 * See the README for documentation/examples or http://php.net/curl for more information about the libcurl extension for PHP
 *
 * @package curl
 * @author Sean Huber <shuber@huberry.com>
**/
class Curl {
	
	/**
	 * The file to read and write cookies to for requests
	 *
	 * @var string
	**/
	public $cookie_file;
	
	/**
	 * Determines whether or not requests should follow redirects
	 *
	 * @var boolean
	**/
	public $follow_redirects = true;
	
	/**
	 * An associative array of headers to send along with requests
	 *
	 * @var array
	**/
	public $headers = array();
	
	/**
	 * An associative array of CURLOPT options to send along with requests
	 *
	 * @var array
	**/
	public $options = array();
	
	/**
	 * The referer header to send along with requests
	 *
	 * @var string
	**/
	public $referer;
	
	/**
	 * The user agent to send along with requests
	 *
	 * @var string
	**/
	public $user_agent;
	
	/**
	 * Stores an error string for the last request if one occurred
	 *
	 * @var string
	 * @access protected
	**/
	protected $error = '';
	
	/**
	 * Stores resource handle for the current CURL request
	 *
	 * @var resource
	 * @access protected
	**/
	protected $request;


	/**
	* url of the proxy 
	* @var string
	**/
	public $proxy = '';

	public $dbg_str = '';

	public $has_error = false;
	public $curl_erorr = '';
	
	/**
	 * Initializes a Curl object
	 *
	 * Sets the $cookie_file to "curl_cookie.txt" in the current directory
	 * Also sets the $user_agent to $_SERVER['HTTP_USER_AGENT'] if it exists, 'Curl/PHP '.PHP_VERSION.' (http://github.com/shuber/curl)' otherwise
	**/
	function __construct() {
		$this->cookie_file = dirname(__FILE__).DIRECTORY_SEPARATOR.'curl_cookie.txt';
		$this->user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : 'Curl/PHP '.PHP_VERSION.' (http://github.com/shuber/curl)';
		return $this;
	}
	
	function echo_cookie(){
		echo file_get_contents(dirname(__FILE__).DIRECTORY_SEPARATOR.'curl_cookie.txt');
	}
	/**
	 * Makes an HTTP DELETE request to the specified $url with an optional array or string of $vars
	 *
	 * Returns a CurlResponse object if the request was successful, false otherwise
	 *
	 * @param string $url
	 * @param array|string $vars 
	 * @return CurlResponse object
	**/
	function delete($url, $vars = array()) {
		return $this->request('DELETE', $url, $vars);
	}
	
	/**
	 * Returns the error string of the current request if one occurred
	 *
	 * @return string
	**/
	function error() {
		return $this->error;
	}
	
	public function setProxy($url){
		$this->proxy = $url;
		return $this;
	}

	public function getProxy(){
		return $this->proxy;
	}

	public function setUserAgent($agent){
		$this->user_agent = $agent;
		return $this;
	} 

	/**
	 * Makes an HTTP GET request to the specified $url with an optional array or string of $vars
	 *
	 * Returns a CurlResponse object if the request was successful, false otherwise
	 *
	 * @param string $url
	 * @param array|string $vars 
	 * @return CurlResponse
	**/
	function get($url, $vars = array()) {
		if (!empty($vars)) {
			$url .= (stripos($url, '?') !== false) ? '&' : '?';
			$url .= (is_string($vars)) ? $vars : http_build_query($vars, '', '&');
		}

		return $this->request('GET', $url);
	}
	
	/**
	 * Makes an HTTP HEAD request to the specified $url with an optional array or string of $vars
	 *
	 * Returns a CurlResponse object if the request was successful, false otherwise
	 *
	 * @param string $url
	 * @param array|string $vars
	 * @return CurlResponse
	**/
	function head($url, $vars = array()) {
		return $this->request('HEAD', $url, $vars);
	}
	
	/**
	 * Makes an HTTP POST request to the specified $url with an optional array or string of $vars
	 *
	 * @param string $url
	 * @param array|string $vars 
	 * @return CurlResponse|boolean
	**/
	function post($url, $vars = array()) {
		return $this->request('POST', $url, $vars);
	}
	
	/**
	 * Makes an HTTP PUT request to the specified $url with an optional array or string of $vars
	 *
	 * Returns a CurlResponse object if the request was successful, false otherwise
	 *
	 * @param string $url
	 * @param array|string $vars 
	 * @return CurlResponse|boolean
	**/
	function put($url, $vars = array()) {
		return $this->request('PUT', $url, $vars);
	}
	
	/**
	 * Makes an HTTP request of the specified $method to a $url with an optional array or string of $vars
	 *
	 * Returns a CurlResponse object if the request was successful, false otherwise
	 *
	 * @param string $method
	 * @param string $url
	 * @param array|string $vars
	 * @return CurlResponse|boolean
	**/
	function request($method, $url, $vars = array()) {
		$this->error = '';
		$this->has_error = false;
		$this->request = curl_init();
		if (is_array($vars)) $vars = http_build_query($vars, '', '&');
		
		$this->set_request_method($method);
		$this->set_request_options($url, $vars);
		$this->set_request_headers();
		
		$response = curl_exec($this->request);
		if(curl_error($this->request)){
			$this->has_error = true;
			$this->curl_error = curl_error($this->request);
			$this->dbg_str .= print_r(curl_error($this->request),true);
		}
		
		if ($response) {
			$response = new CurlResponse($response);
		} else {
			$this->error = curl_errno($this->request).' - '.curl_error($this->request);
		}
		
		curl_close($this->request);
		
		return $response;
	}
	
	/**
	 * Formats and adds custom headers to the current request
	 *
	 * @return void
	 * @access protected
	**/
	protected function set_request_headers() {
		$headers = array();
		foreach ($this->headers as $key => $value) {
			$headers[] = $key.': '.$value;
		}
		curl_setopt($this->request, CURLOPT_HTTPHEADER, $headers);
	}
	
	/**
	 * Set the associated CURL options for a request method
	 *
	 * @param string $method
	 * @return void
	 * @access protected
	**/
	protected function set_request_method($method) {
		switch (strtoupper($method)) {
			case 'HEAD':
				curl_setopt($this->request, CURLOPT_NOBODY, true);
				break;
			case 'GET':
				curl_setopt($this->request, CURLOPT_HTTPGET, true);
				break;
			case 'POST':
				curl_setopt($this->request, CURLOPT_POST, true);
				break;
			default:
				curl_setopt($this->request, CURLOPT_CUSTOMREQUEST, $method);
		}
	}
	
	/**
	 * Sets the CURLOPT options for the current request
	 *
	 * @param string $url
	 * @param string $vars
	 * @return void
	 * @access protected
	**/
	protected function set_request_options($url, $vars) {
		curl_setopt($this->request, CURLOPT_URL, $url);
		if (!empty($vars)) curl_setopt($this->request, CURLOPT_POSTFIELDS, $vars);
		
		# Set some default CURL options
		# curl_setopt($this->request, CURLOPT_HEADER, true);
		curl_setopt($this->request, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($this->request, CURLOPT_USERAGENT, $this->user_agent);

		if(!empty($this->proxy)){
			curl_setopt($this->request,CURLOPT_PROXY,$this->proxy);
		}

		if ($this->cookie_file) {
			curl_setopt($this->request, CURLOPT_COOKIEFILE, $this->cookie_file);
			curl_setopt($this->request, CURLOPT_COOKIEJAR, $this->cookie_file);
		}
		if ($this->follow_redirects) curl_setopt($this->request, CURLOPT_FOLLOWLOCATION, true);
		if ($this->referer) curl_setopt($this->request, CURLOPT_REFERER, $this->referer);
		
		# Set any custom CURL options
		foreach ($this->options as $option => $value) {
			curl_setopt($this->request, constant('CURLOPT_'.str_replace('CURLOPT_', '', strtoupper($option))), $value);
		}
	}

	public function setOption($k,$v){
		$this->options[$k] = $v;
		return $this;
	}

}



/////////////////////////////////////////////////

# $url = "https://www.alibaba.ir/api/GetFlight?id=164058377&last=0&ffrom=SYZ&fto=THR&datefrom=1396%2F12%2F14&count=1&interval=1&isReturn=false&isNew=true";
# $ch = curl_init(); 

# // set url 
# curl_setopt($ch, CURLOPT_URL, $url); 

# //return the transfer as a string 
# curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
# curl_setopt($ch,CURLOPT_PROXY,"127.0.0.1:8118");

# // $output contains the output string 
# $output = curl_exec($ch); 

# var_dump($output);

# // close curl resource to free up system resources 
# curl_close($ch);  


# exit;
/////////////////////////////////////////////////
function is_json_2($string) {json_decode($string); return json_last_error() === JSON_ERROR_NONE; }

function alibaba_getcity(){
		
	$curl = new Curl(random_uagent());
	if(isset($_SESSION["rand_proxy"]))
		$curl->setProxy($_SESSION["rand_proxy"]);
	
	$url = "https://www.alibaba.ir/api/GetCity";
	$response = $curl->get($url,null);
	return json_decode($response->body);
}

function head_url($dst_url){
// create a new cURL resource
    $ch = curl_init();
// set URL and other appropriate options
    curl_setopt($ch, CURLOPT_URL, $dst_url);
// This changes the request method to HEAD
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,5); // connect timeout
    curl_setopt($ch, CURLOPT_TIMEOUT, 10); // curl timeout
    curl_setopt($ch, CURLOPT_PROXY,$_SESSION["rand_proxy"]);
// grab URL and pass it to the browser
    if(FALSE === curl_exec($ch)){
        echo('open '.$dst_url.' failed'."\n");
    }else{
        // Fetch the HTTP-code (cred: @GZipp)
        $retcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//        echo('HTTP return code='.$retcode."\n");
    }
// close cURL resource, and free up system resources
    curl_close($ch);
}

function alibaba_get_flights($from,$to,$date){
	include_once __DIR__."/db.php";
	$db = new db();
	$vars=array(
		"fto"=>$from,
		"ffrom"=>$to,
		"dateFrom"=>$date,
		"adult"=>"1",
		"child"=>"0",
		"infant"=>"0"
	);
    get_random_proxy_from_db();
    /////////////////////////////////////////////////////////////////////////////////////////////
    $head_url = "https://www.alibaba.ir/Images/jabama/$to.jpg";

    /// /////////////////////////////////////////////////////////////////////////////////////////
//    $vars["dateFrom"]="1397/01/06";

    $dbg = "";

    $search_flight_url="https://alibaba.ir/api/SearchFlight";
	$curl = (new Curl(random_uagent()))
				->setOption("connecttimeout",1)
			    ->setOption("timeout",2);
	 
	do{
		get_random_proxy_from_db();
        head_url($head_url);
		if(isset($_SESSION["rand_proxy"])){
	 		 $dbg .= "setting proxy for curl" . PHP_EOL;
			 $curl->setProxy($_SESSION["rand_proxy"]);
	 	}

	 	$response = $curl->get($search_flight_url, $vars);
	 	//echo "session proxy:" . $_SESSION["rand_proxy"];
		$dbg .= "session proxy:" . $_SESSION["rand_proxy"];
		$result = null;
		if($curl->has_error){
			$db->flag_as_bad_proxy($_SESSION["rand_proxy"]);
		}else{
            $result = json_decode($response->body);
		}
	}while($curl->has_error || is_null($result));

	// mark proxy as good
	if(is_json_2($response->body)){
		$db->flag_as_good_proxy($_SESSION["rand_proxy"]);
	}

    $res = json_decode($response->body);
    if(is_null($res)) die("result null");
    if(!is_object($res)) die("result not object");
    $estimated_delay = 0;
	if(isset($res->EstimatedDelay) and $res->EstimatedDelay !=0 ){
		$estimated_delay = $res->EstimatedDelay /1000;
	}
    $curl->setOption("timeout",5+$estimated_delay);

	$v = array(
		"fto"=>$vars["fto"],
		"ffrom"=>$vars['ffrom'],
		"last"=>"0",
		"id"=>$res->RequestId,
		"count"=>"1",
		"interval"=>"1",
		"datefrom"=>$vars["dateFrom"],
		"isReturn"=>"false",
		"isNew"=>"true"
	);
	// pre($response);
	$get_flight_url = "https://alibaba.ir/api/GetFlight";
	$response = $curl->get($get_flight_url, $v);
	// var_dump($response);
	
   if(is_json($response->body))
	   return json_decode($response->body);
	return $response->body;
}

function alibaba_get_cheapest_flights($from,$to,$date){
	$route = $from.$to;
	$url = "https://www.alibaba.ir/AirCtr.aspx/GetCheapestFlight";
	$ch = curl_init($url); 
	$data_string = json_encode(array("route"=>$route,"date"=>$date));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
	if(isset($_SESSION["rand_proxy"]))
		curl_setopt($ch, CURLOPT_PROXY,$_SESSION["rand_proxy"]);
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data_string);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		'Content-Type: application/json',
		'Content-Length: ' . strlen($data_string)));
	$output = curl_exec($ch); 
	curl_close($ch);  
	return json_decode($output);
}

function alibaba_get_train_schedules($from,$to,$departuredate,$passengers)
{
	$md = md5($from.$to.$departuredate.$passengers);
	if(isset($_SESSION['{$md}'])){
		return $_SESSION['{$md}'];
	}
	 $curl = new Curl(random_uagent());
   if(isset($_SESSION["rand_proxy"]))
		$curl->setProxy($_SESSION["rand_proxy"]);
	 $vars = array(
					"departureDate" => $departuredate,
					"origin" => $from,
					"destination" => $to,
					"exclusiveCompartment" => false,
					"passengers" => $passengers,
					"returnDate" => "",
					"ticketType" => 0
	);
  $train_search_url = "https://www.alibaba.ir/api/SearchTrainAvailables";
	$response = $curl->post($train_search_url, $vars);
	$res = o2a(json_decode($response->body));
	$res["success"] = $res["successful"];
	$_SESSION['{$md}'] = $res;
	return $_SESSION['{$md}'];
}

function test_get_city(){
	$res = alibaba_getcity();
	$size = count($res->data);
	do{
		$s = $res->data[random_int(0,$size)]->IATACode;
		$d = $res->data[random_int(0,$size)]->IATACode;
		if($s!=$d)break;
	}while($s!="THR");
	$s="THR";
	echo "$s ===> $d" . PHP_EOL;
	$res = alibaba_get_flights($s,$d,'1396/12/16');
}


function get_random_proxy3(){
	$proxy = array ("50.233.137.36:80");
	$proxy[] = "50.233.137.34:80";
	$proxy[] = "35.196.26.166:3128";
	$proxy[] = "52.53.160.7:8080";
	$proxy[] = "50.233.137.35:80";
	$proxy[] = "50.233.137.37:80";

	$p =  $proxy[array_rand($proxy)];
	$_SESSION["rand_proxy"] = $p;
}

function get_random_proxy2(){
	// pre("get random proxy");
	// $ok_to_return = isset($_SESSION["last_proxy_change"]) && isset($_SESSION["rand_proxy"]);
	// $ok_to_return = $ok_to_return && (time() - $_SESSION["last_proxy_change"] ) < 10;
	// if( $ok_to_return ){
	// 	return $_SESSION["rand_proxy"];	
	// }
	// $_SESSION["rand_proxy"] = "151.233.16.158:9090";
	// return $_SESSION["rand_proxy"];


	$ret = array("error"=>true,"value"=>null);
	$a = array("format"=>"json","type"=>"https","last_check"=>"60","post"=>"true","get"=>"true");
	$url = 'http://pubproxy.com/api/proxy?'.http_build_query($a);
	// pre($url);
	$curl = new Curl();
	$response = $curl->get($url);
	pre($response);
	if(!is_json($response->body))		return  null;
	$response = object_to_array(json_decode($response));
	if(!isset($response["data"]) or !isset($response["data"][0])) return null;

	// pre($response);
	$_SESSION["rand_proxy"] = $response["data"][0]["ipPort"];
	$_SESSION["last_proxy_change"] = time();
	// pre($_SESSION["rand_proxy"]);
	return $_SESSION["rand_proxy"];
}

function get_random_proxy($from){
	if($from == "gimmeproxy.com"){
		$a = array("protocol"=>"http","maxCheckPeriod"=>"3000","ipPort"=>"true","port"=>"80");
		$curl = new Curl();
		$response = $curl->get("https://gimmeproxy.com/api/getProxy?".http_build_query($a));
		if(!isset($response->body)) return null;
		$_SESSION["rand_proxy"] = $response->body;
		return $_SESSION["rand_proxy"];
	}

	if($from == "pubproxy.com"){
		$a = array("fomat"=>"json","type"=>"http");	
		$curl = new Curl();
		$response = $curl->get("http://pubproxy.com/api/proxy?".http_build_query($a));
		if(!isset($response->body)) return null;
		if(!is_json_2($response->body)) return null;
		$response = json_decode($response->body);
		$response = object_to_array($response);
		if(!isset($response["data"]) or !isset($response["data"][0]) or !isset($response["data"][0]["ipPort"])) return null;
		$_SESSION["rand_proxy"] = $response["data"][0]["ipPort"];
		return $_SESSION["rand_proxy"];	
	}
}

function get_random_proxy_from_db(){
	include_once __DIR__."/db.php";
	$db = new db();
	$p = $db->get_all_proxies(3);
	// var_dump($p);exit;
	$p =  $p[array_rand($p)];
	$_SESSION["rand_proxy"] = $p["address"];
	return $p["address"];
}
// $c = new Curl();
// $response = $c->get("http://my.farahoosh.ir/XBS2/captcha");
// $c->echo_cookie();
// pre($response);
?>
