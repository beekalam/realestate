<?php


class BuyLib
{
    protected $ci = null;
    private $buyer_name = null;
    private $buyer_family = null;
    private $buyer_email = null;
    private $buyer_mobile = null;
    private $buyer_address = '';
    private $gender = null;
    private $_dbg = '';
    private $errors = array();
    private $_pass = null;
    private $passengers = array();
    private $flight_info = null;
    private $captcha_code = null;
    private $id_request = null;
    private $flight_from = null;
    private $flight_to = null;
    private $flight_date = null;
//    private $email = null;
//    private $mobile = null;
    private $reservation_res = null;
    public function __construct() {
        $this->ci =& get_instance();
        $this->init();
        $this->validate();
        $this->dbg("in constructor");
    }

    public function init(){
        $this->buyer_name       = $this->ci->input->post("buyer_name");
        $this->buyer_family     = $this->ci->input->post("buyer_family");
        $this->buyer_email      = $this->ci->input->post("buyer_email");
        $this->buyer_mobile     = $this->ci->input->post("buyer_mobile");
        $this->buyer_address    = $this->ci->input->post("buyer_address");
        $this->captcha_code     = $this->ci->input->post("captcha");
        $this->id_request       = $this->ci->input->post("id_request");
        $this->gender           = $this->ci->input->post("gender");
        $this->flight_from      = $this->ci->input->post("flight_from");
        $this->flight_to        = $this->ci->input->post("flight_to");
        $this->flight_date      = $this->ci->input->post("flight_date");


        $t = $this->ci->input->post("passengers");
        if(is_null($t)){
            $this->errors[]=array("title"=>"no_passenger","famsg"=>"passengers is empty",'enmsg'=>'passengers is empty');
            return;
        }
        $this->_pass  = $t;
        foreach($this->_pass as $v){
            $this->passengers[] = new Passenger($v);
        }
    }

    public function is_valid(){
        //fixme
        return true;
//        return count($this->errors) == 0;
    }

    public function persist(){
        if(!$this->is_valid()) die("object state is not valid");
        if(!$this->flight_info) die("flight info is not set");
        $this->dbg("in persist");
        $this->ci->load->database();
        $db = &$this->ci->db;
        //fixme insert uerid if available
        $to_pay =  $this->to_pay();
        $item = array(
            "first_name" => $this->buyer_name,
            "last_name" => $this->buyer_family,
            "email" => $this->buyer_email,
            "mobile" => $this->buyer_mobile,
            "address" => '', //fixme
            "gender" => "male",
            "flight_info" => json_encode($this->flight_info),
            "passengers" => json_encode($this->_pass),
            "to_pay" => $to_pay,
            "paid"=>0,
            "reserve_info" => json_encode($this->reservation_res)
        );

        //todo persiste reservation restults
        $res = $db->insert("ticket",$item);
        if(!$res){
            die("insert not successful" . print_r($db->error(),true) );
        }
        $id = $db->insert_id();
        return array("res"=>$res,"buy_id"=>$id,"to_pay"=>$to_pay);
    }

    private function to_pay(){
        $res = 0;
        foreach($this->passengers as $p){
            switch ($p->getPersonType()){
                case 'کودک':
                    $res += $this->flight_info["price_final_chd"];
                    break;
                case 'نوزاد':
                    $res += $this->flight_info["price_final_inf"];
                    break;
                case 'بزرگسال':
                    $res += $this->flight_info["price_final"];
                    break;
                default:
                    die("invalid passenger type");
            }
        }

        return $res;
    }

    public function validate(){
        $res = !is_null($this->reservation_res) && $this->reservation_res["Result"] == "true";
        return $res;
        //todo check for valid flight into
        //todo check for if reservation was successfull
    }

    public function setFlightInfo($flight_info){
//        var_dump($flight_info);exit;
        $this->flight_info = $flight_info;
    }

    public function build_reserve_params(){
        $ret = array(
            "Email" =>$this->buyer_email,
            "Mobail" =>$this->buyer_mobile,
            "Mobile" =>$this->buyer_mobile,
            "id_request" =>$this->id_request,
            "captchcode" =>$this->captcha_code,
            "flight_from" =>$this->flight_from,
            "flight_to" =>$this->flight_to,
            "flight_date"=> $this->flight_date
        );
        foreach($this->passengers as $p){
            $ret["Passengers"][] = array(
                "passengerType" => $p->passengerType(),
                "fnamefa" => $p->fa_name,
                "lnamefa" => $p->fa_family,
                "fnameen" => $p->en_name,
                "lnameen" => $p->en_family,
                "gender" =>  $p->gender(),
                "nationality" => $p->nationality,
                "passengerCode" => $p->passengerCode(),
                "nationalitycode" => $p->nationalitycode(),
                "expdate"=>$p->expdate(),
                "birthday"=>$p->birthdate
            );
        }
        $this->dbg("in".__CLASS__."->".__METHOD__);
        $this->dbg("params: " . print_r($ret,true));
        return $ret;
    }

    public function setReserveResult($reserve_res){
        $this->reservation_res = $reserve_res;
    }

    private function dbg($in){
        $this->_dbg .= $in;
    }

    public function getdbg(){
        return $this->_dbg;
    }

    function __destruct() {

    }
}

class Passenger{
    public $en_name='';
    public $en_family = '';
    public $fa_name = '';
    public $fa_family='';
    public $person_type;
    public $gender;
    public $birthdate;
    public $national_code;
    public $passport_no = null;
    public $nationality='1';
    public $expdate;
    private $keys = array("en_name","en_family","fa_name","fa_family","gender","birthdate","national_code","person_type","passport_no");
    private  $dbg_str = "";
    public function __construct($params=array())
    {
        foreach ($this->keys as $k){
            if(isset($params[$k])){
                $this->{$k} = $params[$k];
            }
        }
    }

    /**
     * @return mixed
     */
    public function getPersonType()
    {
        return $this->person_type;
    }

    public function passengerType(){

        switch ($this->getPersonType()){
            case 'کودک':
                return 'CHD';
                break;
            case 'نوزاد':
                return 'INF';
                break;
            case 'بزرگسال':
                return 'ADL';
                break;
            default:
                $this->dbg_str .= "invalid person type in class Passenger";
        }
    }

    public function  gender(){
        if(strtolower($this->gender) == 'male' )
        {
            return 1;
        }else{
            return 2;
        }
        $this->dbg_str .= "invalid gender. \n";
    }

    public function  passengerCode(){
        if($this->nationality == 1){
            return $this->national_code;
        }else{
            return $this->passport_no;
        }
        $this->dbg_str .= "could not decide passengerCode. \n";
    }

    public function nationalitycode(){
        if($this->nationality == 1){
            return "IRI";
        }
    }

    public function expdate(){
        return $this->expdate;
    }

    public function dbg(){
        return $this->dbg_str;
    }

}