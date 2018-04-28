<?php



class Hotelapi{
    private $apiUrl=null;
    private $apiKey = null;
    private $inventoryUrl = null;
    private $citiesUrl = null;
    private $apiVersion = null;
    private $debugInfoUrl;
    private $amenities;
    private $paymentMethods;
    private $lang = "fa_IR";

    public function __construct($params=array()){
        $this->initUrls();
        $this->apiKey = "75875d0a5f379e2eeeb6ac3e3c8c02cce8478450";
        $this->setLang(isset($params["lang"]) ? $params["lang"] : "en_US");
    }

    public function hotelInventory(){
        $res = $this->curlCall(array("url"=>$this->inventoryUrl));
        return $res;
    }

    public function getCities($id=null){
        $q = array("url"=>$this->citiesUrl);
        if(!is_null($id))
            $q["city_id"] = $id;
        $res = $this->curlCall($q);
        return $res;
    }

    public function getDebuginfo(){
        $res = $this->curlCall(array("url"=>$this->debugInfoUrl));
        return $res;
    }

    public function getAmenities(){
        $res = $this->curlCall(array("url"=>$this->amenities));
        return $res;
    }

    public function getPaymentMethods(){
        $res = $this->curlCall(array("url"=>$this->paymentMethods));
        return $res;
    }

    public function available($params=array()){

    }


    private function curlCall($params=array()) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: text/json; charset=utf-8 ',
            "Authorization:  ".$this->getToken()
        ));

        $query = array("lang"=>$this->getLang());
        switch ($params["url"]){
            case $this->inventoryUrl:
                if(isset($params["city_id"])) $query["city_id"];
                curl_setopt($ch, CURLOPT_URL,$this->inventoryUrl . http_build_query($query));
            case $this->citiesUrl:
                curl_setopt($ch, CURLOPT_URL, $this->citiesUrl . http_build_query($query));
                break;
        }
        //                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//                curl_setopt($ch, CURLOPT_POST, true);
//                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array("from_flight"=>$params["flight_from"],"to_flight"=>$params["flight_to"])));

        $output = curl_exec($ch);
        curl_close($ch);
        $output = json_decode($output);
        $output = $this->object_to_array($output);
        return $output;
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

    public function inventory(){

    }

    private function initUrls() {
        $this->apiUrl = "https://api.lamasoo.com/";
        $this->inventoryUrl = $this->apiUrl."booking/hotel_inventory";
        $this->citiesUrl = $this->apiUrl."booking/cities";
        $this->amenities = $this->apiKey."booking/amenities";
        $this->paymentMethods  = $this->apiKey."booking/paymentMethods";
    }

    private function getToken()
    {
        return $this->apiKey;
    }

    public function setLang($lang)
    {
        $this->lang = $lang;
    }
    public function getLang(){
        return $this->lang;
    }

}