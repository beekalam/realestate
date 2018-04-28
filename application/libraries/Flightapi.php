<?php
$file = APPPATH."third_party/jdf.php";

class Flightapi{

    private $username='';
    private $password='';

    private $data = null;
    private $webservice_root = "http://172.charter724.ir/APi/";
    private $login_url = '';
    private $airportList ='';
    private $captchaUrl ='';
    private $reserveUrl='';
    private $buyTicketUrl='';
    private $token = null;
    private $available_15Days=null;
    private $available_url=null;
    private $saveTokenInSession = true;
    private $addOverPrice = false;
    private $overPriceType = '';
    private $overPriceValue = 0;
    private $unique_airlines = array();
    private $airline_cheapest = array();
    private $cheapest_flight = null;
    private $find_res = null;
    private $find_res_type = null;
    private $captchaParams = array("from_flight","to_flight","date_flight","time_flight","number_flight","ajency_online_ID","cabinclass","airline");
    public function __construct()
    {
        $this->login_url        = $this->webservice_root."/Login";
        $this->airportList      = $this->webservice_root."/WebService/Airportlist";
        $this->captchaUrl       = $this->webservice_root."/WebService/GetCaptcha";
        $this->available_15Days = $this->webservice_root."/WebService/Available15Days";
        $this->available_url    = $this->webservice_root."/WebService/Available";
        $this->reserveUrl       = $this->webservice_root."/WebService/Reservation";
        $this->buyTicketUrl     = $this->webservice_root."/WebService/BuyTicket";
        $this->username = 'demo';
        $this->password = 'demo';
    }

    public function login()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->login_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POST, true);
        $authToken = base64_encode($this->username.":".$this->password);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array("UserPassBase64"=> "Basic $authToken")));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: text/json; charset=utf-8 ',
        ));
        $output = curl_exec($ch);
        curl_close($ch);
        $output = json_decode($output);
        $output = $this->object_to_array($output);
        if(isset($output["Data"]) && isset($output["Data"]["access_token"]))
            $this->setToken($output["Data"]["access_token"]);
        return $output;
    }

    public function getToken(){
        if($this->saveTokenInSession && isset($_SESSION["api724_token"])){
            $this->token = $_SESSION["api724_token"];
            return $this->token;
        }

        if(!$this->isLoggedIn()){
            $this->login();
        }
        return $this->token;
    }

    public function setToken($token){
        if($this->saveTokenInSession)
            $_SESSION["api724_token"] = $token;
        $this->token = $token;
    }

    public function isLoggedIn(){
        return !is_null($this->token);
    }

    public function airportList(){
       return $this->curlCall(array("url"=>$this->airportList));
    }

    public function available15Days($flight_from,$flight_to){
        $res =  $this->curlCall(array("flight_from"=>$flight_from,"flight_to"=>$flight_to,"url"=>$this->available_15Days));
        $this->hydrate($res);
        return $res;
    }

    public function available($flight_from,$flight_to,$date){
        $res = $this->curlCall(array("flight_from"=>$flight_from,"flight_to"=>$flight_to,"date"=>$date,"url"=>$this->available_url));
        $this->hydrate($res);
//        $this->available_res = $res;
//        $this->available_type = 'oneway';
        return $res;
    }

    public function availableCharter($flight_from,$flight_to,$date_raft,$date_bargasht){
        $raft = $this->available($flight_from,$flight_to,$date_raft);
        $bargasht = $this->available($flight_to,$flight_from,$date_bargasht);
        $this->hydrate($raft);
        $this->hydrate($bargasht);
        $res = array("Data"=>array());
        foreach($raft["Data"] as $rf){
            foreach($bargasht["Data"] as $bf){
//                $twoway_condition = $rf["type"] == "charter" &&  $bf["type"] == "charter" && $rf["IATA_code"] == $bf["IATA_code"];
                $twoway_condition = true;
                if($twoway_condition)
                    $res["Data"][] = array("raft" => $rf,"bargasht" => $bf);
            }
        }
        $res["twoway_result"] = true;
//        $this->available_res = $res;
//        $this->available_type = 'roundtrip';
//        pre($res);
        return $res;
    }

    private function test_reserve_data(){
        $ret = array(
            "Mobail"=>"9359012419",
            "Email"=>"a@a.com"
        );

        $ret["passengers"][]=array(
            "passengerType"=>"1",
            "fnamefa"=>"محمد رضا",
            "lnamefa"=>"منصوری",
            "fnameen"=>"mohammad reza",
            "lnameen"=>"mansouri",
            "gender"=>"1",
            "nationality"=>"1",
            "passengerCode"=>"5139953323",
//            "nationalitycode"=>"",
//            "expdate"=>"",
            "birthday"=>"1984-11-12"
        );
        return $ret;
    }

    public function reserve($params=array()){
        $params["url"] = $this->reserveUrl;
        $params["captchacode"] = intval($params["captchacode"]);
        $params["id_request"]  = intval($params["id_request"]);

//        $params["captchcode"]  = $params["captchacode"];
        unset($params["captchacode"]);
        unset($params["unique_key"]);

//        pre($params);
        $apires = $this->curlCall($params);
        if($apires["Result"]=="false"){
            $apires["error"] =  $this->reservation_err($apires["Msg"]);
        }
        return $apires;
    }

    public function buyticket(){
            
    }

    public function getCaptcha(){
        //build captcha params
        $params = array("url"=>$this->captchaUrl);
        if($this->find_res_type == "oneway"){
            foreach($this->captchaParams as $k){
                $params[$k] = $this->find_res[$k];
            }
        }
        $params["from_flight"] = $this->find_res["from"];
        $params["to_flight"] = $this->find_res["to"];
        $captcha  = $this->curlCall($params);
        return $captcha;
    }

    private function curlCall($params=array()) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: text/json; charset=utf-8 ',
            "Authorization: Bearer ".$this->getToken()
        ));


        switch ($params["url"]){
            case $this->available_15Days:
                curl_setopt($ch, CURLOPT_URL, $this->available_15Days);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array("from_flight"=>$params["flight_from"],"to_flight"=>$params["flight_to"])));
                break;
            case $this->airportList:
                curl_setopt($ch, CURLOPT_URL, $this->airportList);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                break;
            case $this->available_url:
                curl_setopt($ch, CURLOPT_URL, $this->available_url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array("from_flight"=>$params["flight_from"],"to_flight"=>$params["flight_to"],"date_flight"=>$params["date"])));
                break;
            case $this->captchaUrl:
                curl_setopt($ch, CURLOPT_URL, $this->captchaUrl);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POST, true);
                unset($params["url"]);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
                break;
            case $this->reserveUrl:
                curl_setopt($ch, CURLOPT_URL, $this->reserveUrl);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POST, true);
                unset($params["url"]);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
                break;
            default:
                die("invalid request");

        }
        $output = curl_exec($ch);
        curl_close($ch);
        $output = json_decode($output);
        $output = $this->object_to_array($output);
        return $output;
    }

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    public function getUrl($type="")
    {
        if(empty($type)) {
            return $this->rootUrl;
        }else if($type=="available"){
            return $this->rootUrl . "/Available";
        }
    }

    public function translate_airline($airline) {
        switch (strtolower($airline)) {
            case 'meraj':
            case 'ji':
                $result = 'معراج';
                break;
            case 'ata':
                $result = 'آتا';
                break;
            case 'kish':
            case 'y9':
                $result = 'کیش';
                break;
            case 'taban2':
                $result = 'تابان';
                break;
            case 'zagros':
            case 'zv':
                $result = 'زاگرس';
                break;
            case 'qheshm':
            case 'qb':
                $result = 'قشم';
                break;
            case 'airtour':
            case 'b9':
                $result = 'ایر تور';
                break;
            case 'iranair':
            case 'ir':
                $result = 'ایران ایر';
                break;
            case 'aseman':
                $result = 'آسمان';
                break;
            case 'caspian':
            case 'iv':
                $result = 'کاسپین';
                break;
            case 'mahan':
            case 'w5':
                $result = 'ماهان';
                break;
            case 'naft':
                $result = 'نفت';
                break;
            case 'atrak':
                $result = 'اترک';
                break;
            case 'sepehran':
            case 'sr':
                $result='سپهران';
                break;
            default:
                $result = '';
                break;
        }

        return $result;
    }

    public function reservation_err($error_id) {
        switch ($error_id) {
            case '-401':
                $tmess = "محتوای خالی";
                break;
            case '-402':
                $tmess = "آیدی درخواست دهنده معتبر نیست";
                break;
            case '-403':
                $tmess = "ایمیل نامعتبر";
                break;
            case '-404':
                $tmess = "شماره موبایل نامعتبر";
                break;
            case '-405':
                $tmess = "مسافران نامعتبر";
                break;
            case '-406':
                $tmess = "آیدی درخواست دهنده معتبر نیست";
                break;
            case '-407':
                $tmess = "این درخواست قبلا رزور شده است";
                break;
            case '-408':
                $tmess = "انقضای شماره درخواستی";
                break;
            case '-409':
                $tmess = "تاریخ نامعتبر";
                break;
            case '-410':
                $tmess = "زمان نامعتبر";
                break;
            case '-411':
                $tmess = "کد امنیتی صحیح نیست";
                break;
            case '-412':
                $tmess = "نوع مسافر نامعتبر";
                break;
            case '-413':
                $tmess = "نوع مسافر چارتر فقط بزرگسال";
                break;
            case '-414':
                $tmess = "نام و یا نام خانوادگی انگلیسی نامعتبر";
                break;
            case '-415':
                $tmess = "نام و یا نام خانوادگی فارسی نامعتبر";
                break;
            case '-416':
                $tmess = "جنسیت نامعتبر";
                break;
            case '-417':
                $tmess = "ملیت نامعتبر";
                break;
            case '-418':
                $tmess = "کد مسافر نامعتبر";
                break;
            case '-419':
                $tmess = "ملیت نامعتبر";
                break;
            case '-420':
                $tmess = "شماره پاسپورت یا کد ملی نامعتبر";
                break;
            case '-421':
                $tmess = "تاریخ تولد بزرگسال نامعتبر";
                break;
            case '-422':
                $tmess = "تاریخ تولد کودک نامعتبر";
                break;
            case '-423':
                $tmess = "تاریخ تولد نوزاد نامعتبر";
                break;
            case '-424':
                $tmess = "تاریخ تولد  نامعتبر";
                break;
            case '-425':
                $tmess = "ADl Not Found";
                break;
            case '-426':
                $tmess = "ADl and CHD less Than INF";
                break;
            case '-427':
                $tmess = "Error Database  Request Please Contact Administrator";
                break;
            case '-428':
                $tmess = "Error Database  Request Detail Please Contact Administrator";
                break;
            case '-429':
                $tmess = "Charter724 Not Response";
                break;
            case '-430':
                $tmess = "Charter724 Send Error";
                break;
            case '-4000':
                $tmess = "System Error Contact To Administrator";
                break;
            default :
                $tmess = "خطایی رخ داده است دوباره تلاش کنید.";
                break;
        }
        return $tmess;
    }

    public function flights($from = null, $to = null, $date = null) {
        if ($date != null) {
            $date_georgion = $this->convert_jalali_to_georgion($date);
        } else {
            $date_georgion = date('Y/m/d');
//            $this->data['search_date'] = $this->jdf->jdate('Y-m-d');
        }
        //----------------------------------------------------------------------
//        $this->web_server->url = 'http://94.232.172.172/APi/WebService/Available';
          $data = '{"from_flight":"' . $from . '","to_flight":"' . $to . '","date_flight":"' . $date_georgion . '"}';
          $this->setData($data);
//        $this->data['result_search'] =
          $res = $this->query("available");
          return $res;
//        $this->render('search');
    }

    private function object_to_array($obj) {
        if(is_object($obj)) $obj = (array) $obj;
        if(is_array($obj)) {
            $new = array();
            foreach($obj as $key => $val) {
                $new[$key] = object_to_array($val);
            }
        }
        else $new = $obj;
        return $new;
    }

    public function hydrate(&$data){
        $this->addPersianKeys($data);
        if($this->addOverPrice == true){
            $this->applyOverPrice($data);
        }

        $is_cheapest_query = $data["msg"] == "avail15days";
        if(!$is_cheapest_query) {
            $this->generateUniqueKey($data);
            $this->extractAirlines($data);
            $this->airlineCheapest($data);
            $this->calcCheapestFlight($data);
        }
    }

    private function calcCheapestFlight(&$data){
        $this->cheapest_flight = min(array_column($data["Data"],"price_final"));
    }

    public function getCheapestFlight(){
        return $this->cheapest_flight;
    }
    /** makes an array of airlines with cheapest flight for that airline. */
    private function airlineCheapest(&$data)
    {
        foreach ($this->getAirlines() as $airline) {
            foreach ($data["Data"] as $flight) {
                if ($flight["IATA_code"] == $airline) {
                    if (!isset($this->airline_cheapest[$airline]))
                        $this->airline_cheapest[$airline]["min_price"] = $flight["price_final"];
                    else if ($this->airline_cheapest[$airline]["min_price"] > $flight["price_final"])
                        $this->airline_cheapest[$airline]["min_price"] = $flight["price_final"];
                }
            }
        }
        foreach($this->airline_cheapest as $k=>&$v){
            $v["name_fa"] = $this->translate_airline($k);
        }
    }

    public function getAirlineCheapest(){
        return $this->airline_cheapest;
    }

    private function extractAirlines(&$data){
        $this->unique_airlines = array_unique(array_column($data["Data"],"IATA_code"));
    }

    public function getAirlines(){
        return $this->unique_airlines;
    }

    private function addPersianKeys(&$data){
            foreach($data["Data"] as &$item) {
                if(isset($item["from"]))
                    $item["fromShowName"] = $this->iatacode_to_city($item["from"]);
                if(isset($item["to"]))
                    $item["toShowName"]  = $this->iatacode_to_city($item["to"]);
                if(isset($item["airline"]))
                    $item["airlinePersian"] = $this->translate_airline($item["airline"]);
                if(isset($item["date_flight"]))
                    $item["flightDateFa"] = convert_gregorian_iso_to_jalali_iso($item["date_flight"]);
                if(isset($item["type"]))
                    $item["type_fa"] = $item["type"] == "system" ? "سیستمی":"چارتر";
                if(isset($item["time_flight"]))
                    $item["time_period"] = $this->friendlyTimePeriod($item["time_flight"]);
                if(isset($item["date_flight"])) {
                    $item["friendlyDateFa"] = jdate('F j', strtotime($item["date_flight"]));
                    $item["dayOfWeek"] = jdate('l',strtotime($item["date_flight"]));
                }
            }
    }

    private function friendlyTimePeriod($time){
        list($h,$m,$s)=explode(":",$time);
        if($h < 12 && $h >= 4){
            return "morning";
        }else if($h >= 12 && $h < 18 ){
            return "noon";
        }else{
            return "night";
        }
    }

    private function generateUniqueKey(&$data){
        foreach($data["Data"] as &$item){
            $key = "";
            if(isset($item["number_flight"])) $key .= $item["number_flight"]."@";
            if(isset($item["ajency_online_ID"])) $key.=$item["ajency_online_ID"]."@";
            if(isset($item["type"])) $key .= $item["type"]."@";
            if(isset($item["from"])) $key .= $item["from"]."@";
            if(isset($item["to"])) $key .= $item["to"]."@";
            if(isset($item["IATA_code"])) $key .=$item["IATA_code"]."@";
            if(isset($item["cabinclass"])) $key .= $item["cabinclass"];
            $item["uniqueKey"] = $key;
        }
    }

    private function city_airport(){
        return
            array(
                array("city" => "تهران", "IATACode" => "THR", "en" => "tehran","name" => "آبادان"),
                array("city" => "اهواز", "IATACode" => "AWZ", "en"=>"ahwaz","name" => "اهواز"),
                array("city" => "شیراز", "IATACode" => "SYZ", "en" => "shiraz","name" => "شیراز"),
                array("city" => "مشهد", "IATACode" => "MHD", "en"=>"mashhad","name" => "مشهد"),
                array("city" => "بندر عباس", "IATACode" => "BND", "en"=>"bandare-abas","name" => "بندر عباس"),
                array("city" => "اصفهان", "IATACode" => "IFN", "en"=>"isfehan","name" => "اصفهان"),
                array("city" => "تبریز", "IATACode" => "TBZ", "en"=>"tabriz","name" => "تبریز"),
                array("city" => "اراک", "IATACode" => "AJK", "en"=>"arak","name" => "اراک"),
                array("city" => "اردبيل", "IATACode" => "ADU", "en"=>"ardebil","name" => "اردبیل"),
                array("city" => "اروميه", "IATACode" => "OMH","en"=>"orumie","name" => "ارومیه"),
                array("city" => "ايرانشهر", "IATACode" => "IHR", "en"=>"iranshahr","name" => "ایرانشهر"),
                array("city" => "ايلام", "IATACode" => "IIL", "en"=>"ilam","name" => "ایلام"),
                array("city" => "آبادان", "IATACode" => "ABD", "en"=>"abadan","name" => "آبادان"),
                array("city" => "بادرود", "IATACode" => "BDB", "en"=>"badrood","name" => "بادرود"),
                array("city" => "بجنورد", "IATACode" => "BJB", "en"=>"bojnord","name" => "بجنورد"),
                array("city" => "بم", "IATACode" => "BXR", "en"=>"bam","name" => "بم"),
                array("city" => "بندر لنگه", "IATACode" => "BDH", "en"=>"bandare-lenge","name" => "بندر لنگه"),
                array("city" => "بوشهر", "IATACode" => "BUZ", "en"=>"boshehr","name" => "بوشهر"),
                array("city" => "بيرجند", "IATACode" => "XBJ", "en"=>"birjand","name" => "بیرجند"),
                array("city" => "جيرفت", "IATACode" => "JYR", "en"=>"jiroft","name" => "جیرفت"),
                array("city" => "چابهار", "IATACode" => "ZBR", "en"=>"chabahar","name" => "چابهار"),
                array("city" => "خارک", "IATACode" => "KHK", "en"=>"khark","name" => "خارک"),
                array("city" => "خرم آباد", "IATACode" => "KHD", "en"=>"khoram abad","name" => "خرم آباد"),
                array("city" => "خوي", "IATACode" => "KHY", "en"=>"khoy", "name" => "خوی"),
                array("city" => "دزفول", "IATACode" => "DEF", "en"=>"dezfol", "name" => "دزفول"),
                array("city" => "رامسر", "IATACode" => "RZR", "en"=>"ramsar", "name" => "رامسر"),
                array("city" => "رشت", "IATACode" => "RAS", "en"=>"rasht", "name" => "رشت"),
                array("city" => "رفسنجان", "IATACode" => "RJN","en"=>"rafsenjan", "name" => "رفسنجان"),
                array("city" => "زابل", "IATACode" => "ACZ", "en"=>"zabol", "name" => "زابل"),
                array("city" => "زاهدان", "IATACode" => "ZAH","en"=>"zahedan", "name" => "زاهدان"),
                array("city" => "زنجان", "IATACode" => "JWN", "en"=>"zanjan", "name" => "زنجان"),
                array("city" => "ساري", "IATACode" => "SRY", "en"=>"sari", "name" => "ساری"),
                array("city" => "سبزوار", "IATACode" => "AFZ", "en"=>"sabezevar", "name" => "سبزوار"),
                array("city" => "سنندج", "IATACode" => "SDG", "en"=>"sanandaj", "name" => "سنندج"),
                array("city" => "سهند", "IATACode" => "ACP", "en"=>"sahand", "name" => "سهند"),
                array("city" => "سيرجان", "IATACode" => "SYJ", "en"=>"sirjan", "name" => "سیرجان"),
                array("city" => "شهرکرد", "IATACode" => "CQD", "en"=>"sharekord", "name" => "شهرکرد"),
                array("city" => "شاهرود", "IATACode" => "RUD", "en"=>"shahrod", "name" => "شاهرود"),
                array("city" => "طبس", "IATACode" => "TCX", "en"=>"tabas", "name" => "طبس"),
                array("city" => "عسلويه", "IATACode" => "PGU", "en"=>"asalooye", "name" => "عسلويه"),
                array("city" => "قشم", "IATACode" => "GSM", "en"=>"qeshm", "name" => "قشم"),
                array("city" => "کاشان", "IATACode" => "KSN", "en"=>"kashan", "name" => "کاشان"),
                array("city" => "کلاله", "IATACode" => "KLM", "en"=>"kalale", "name" => "کلاله"),
                array("city" => "کرمان", "IATACode" => "KER", "en"=>"kerman", "name" => "کرمان"),
                array("city" => "کرمانشاه", "IATACode" => "KSH", "en"=>"kermanshah", "name" => "کرمانشاه"),
                array("city" => "کيش", "IATACode" => "KIH", "en"=>"kish", "name" => "کیش"),
                array("city" => "گچساران", "IATACode" => "GCH", "en"=>"gachsaran", "name" => "گچساران"),
                array("city" => "گرگان", "IATACode" => "GBT", "en"=>"gorgan", "name" => "گرگان"),
                array("city" => "لار", "IATACode" => "LRR", "en"=>"lar", "name" => "لار"),
                array("city" => "لامرد", "IATACode" => "LFM", "en"=>"lamerd", "name" => "لامرد"),
                array("city" => "ماهشهر", "IATACode" => "MRX", "en"=>"mahshahr", "name" => "ماهشهر"),
                array("city" => "ماکو", "IATACode" => "MKU", "en"=>"mako", "name" => "ماکو"),
                array("city" => "نوشهر", "IATACode" => "NSH", "en"=>"noshahr", "name" => "نوشهر"),
                array("city" => "همدان","IATACode" => "HDM","en"=>"hamedan", "name" => "همدان"),
                array("city" => "ياسوج", "IATACode" => "YES","en"=>"yasoj", "name" => "یاسوج"),
                array("city" => "يزد", "IATACode" => "AZD", "en"=>"yazd", "name" => "یزد")
            );
    }

    private function iatacode_to_city($code){
        $code = strtoupper($code);
        foreach($this->city_airport() as $v){
            if($v["IATACode"] == $code){
                return $v["city"];
            }
        }
        return "";
    }

    public function enableOverPrice($type,$value){
        if($type !== "percent" && $type !== "value")
            die("invalid overprice type");
        $this->addOverPrice = true;
        $this->overPriceType = $type;
        $this->overPriceValue = $value;
    }

    public function applyOverPrice(&$data){
        foreach($data["Data"] as &$item){
            if($this->overPriceType == "value")
                $item["price_final"] += $this->overPriceValue;
            else if($this->overPriceType == "percent")
                $item["price_final"] += ($item["price_final"] * $this->overPriceValue)/100;
        }
    }

    public function findFlight($params){
        pc(func_get_args());
        $flight_from = strtolower($params["flight_from"]);
        $flight_to = strtolower($params["flight_to"]);
        $date_raft = $params["flight_date"];
        $unique_key = $params["unique_key"];
        if(isset($params["roundtrip"])){
            $flight_date_bargasht = $params["flight_return_date"];
            $flights = $this->availableCharter($flight_from,$flight_to,$date_raft,$flight_date_bargasht);

            foreach($flights["Data"] as $flight){
                if($flight["raft"]["uniqueKey"] == $unique_key && $flight["bargasht"]["uniqueKey"] == $params["unique_key_bargasht"]){
                    $this->find_res_type = 'roundtrip';
                    $this->find_res = $flight;
                    return $flight;
                }
            }
        }
        else{
            $flights = $this->available($flight_from, $flight_to, $date_raft)["Data"];
            foreach ($flights as $flight) {
                if ($flight["uniqueKey"] == $unique_key) {
                    $this->find_res_type = "oneway";
                    $this->find_res = $flight;
                        return $flight;
                }
            }
//            pre($flights);
        }
        return null;
    }

}