<?php

class Rmoney {
    private $currency;
    private $amount;
    private $service;
    private $user_id;
    private $password;
    private $return_url;
    private $order_id;
    private $pay_url = "https://rtravel.ca/travelpay/samar/api.php?request=pay";
    private $verify_url = "https://rtravel.ca/travelpay/samar/api.php?request=verify";
    public function __construct($params=array())
    {
        /*
         * example usage
        $some_data = array(
            'cur' => 'EUR', //Currency Code
            'amount' => '10.23', //AMount to be paid
            'service' => 'Booking', //service details
            'user_id' => '364158', //you terminal ID
            'pass' => 'demo', //Password
            'return_url' => 'abc', //The URL the user will be redirected after payment
            'order_id' => 'abc' //The order we will refer to when the user return back to your website
        );
        */
        if(!empty($params)) {
            $this->setUserId($params["user_id"]);
            $this->setAmount($params["amount"]);
            $this->setService($params["service"]);
            $this->setPassword($params["password"]);
            $this->setReturnUrl($params["return_url"]);
            $this->setOrderId($params["order_id"]);
            $this->setCurrency($params["cur"]);
        }
//        pre($this->buildPostData());
//        exit;
    }

    private function buildPostData(){
        return array(
            'cur'       => $this->getCurrency(), //Currency Code
            'amount'    => $this->getAmount(), //AMount to be paid
            'service'   => $this->getService(), //service details
            'user_id'   => $this->getUserId(), //you terminal ID
            'userid'    => $this->getUserId(), //you terminal ID
            'User_id'   => $this->getUserId(), //you terminal ID
            'pass'      => $this->getPassword(),
            'return_url'=> $this->getReturnUrl(), //The URL the user will be redirected after payment
            'order_id'  => $this->getOrderId() //The order we will refer to when the user return back to your website
        );
    }
    public function startPayment(){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_POST,1);
        curl_setopt($curl,CURLOPT_URL, $this->pay_url);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $this->buildPostData());
        $ch = curl_exec($curl);
        curl_close($curl);
        header( 'Location: https://rtravel.ca/travelpay/samar/index.php?ref='.$ch ) ;
    }

    public function verifyPayment($reference){
        $some_data = array(
            'reference' => $reference, //Currency Code
        );
        $curl = curl_init();
        // You can also set the URL you want to communicate with by doing this:
        // We POST the data
        curl_setopt($curl, CURLOPT_POST, 1);
        // Set the url path we want to call
        curl_setopt($curl, CURLOPT_URL,$this->verify_url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data);
        $response = curl_exec($curl);
        curl_close($curl);
        if($response=="Paid");
        {
            return true;
        }
        return false;
    }
    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     * @return Rmoney
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     * @return Rmoney
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param mixed $service
     * @return Rmoney
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     * @return Rmoney
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     * @return Rmoney
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReturnUrl()
    {
        return $this->return_url;
    }

    /**
     * @param mixed $return_url
     * @return Rmoney
     */
    public function setReturnUrl($return_url)
    {
        $this->return_url = $return_url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @param mixed $order_id
     * @return Rmoney
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
        return $this;
    }


}