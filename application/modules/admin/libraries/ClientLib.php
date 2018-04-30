<?php


class ClientLib
{
    private $id = 0;
    private $first_name;
    private $last_name;
    private $tel;
    private $mobile;
    private $date_submit='';
    private $time_submit='';
    private $description='';
    private $budget;
    private $exchange; //معاوضه
    private $exchange_description; //توضیحات معاوضه
    protected $ci;

    public function __construct()
    {
        $this->ci = & get_instance();
        $this->ci->load->library('form_validation');
        $this->ci->load->database();
        $this->ci->load->helper("lib_date");
        $this->set_validation_rules();
    }

    public function  init_from_post(){
        $p =  &$this->ci->input;
        $this->first_name  = $p->post('first_name');
        $this->last_name   = $p->post('last_name');
        $this->tel         = $p->post('tel');
        $this->mobile      = $p->post('mobile');
        $this->date_submit = $p->post('date_submit');
        $this->time_submit = $p->post('time_submit');
        $this->description = $p->post('description');
        $this->budget       = $p->post('budget');
        $this->budget       = $p->post('budget');
        $this->exchange       = $p->post('exchange');
        $this->exchange_description = $p->post("exchange_description");
        if(isset($_POST["id"]))
            $this->id = $p->post("id");
    }

    public function init_from_db($rec){
        $this->id          = $rec["id"];
        $this->first_name  = $rec['first_name'];
        $this->last_name   = $rec['last_name'];
        $this->tel         = $rec['tel'];
        $this->mobile      = $rec['mobile'];
        $this->date_submit = $rec['date_submit'];
        $this->time_submit = $rec['time_submit'];
        $this->description = $rec['description'];
        $this->date_submit_fa = $rec['date_submit_fa'];
        $this->budget       = $rec["budget"];
        $this->exchange    = $rec['exchange'];
        $this->exchange_description = $rec['exchange_description'];
    }
    
    public function set_validation_rules(){
        $fv = $this->ci->form_validation;
        $err = array( "required" =>"مقداری برای %s وارد نشده است");
        $fv->set_rules('first_name','نام','required',$err);
        $fv->set_rules('last_name','نام خانوادگی','required',$err);
        $fv->set_rules('tel','شماره تلفن','required',$err);
        $fv->set_rules('mobile','موبایل','required',$err);
        $fv->set_rules('date_submit','تاریخ مراجعه','required',$err);
        $fv->set_rules('time_submit','ساعت مراجعه','required',$err);
    }

    public function is_valid(){
        return $this->ci->form_validation->run();
    }

    public function build_insert_array(){
        $date_submit_en = convert_jalali_to_gregorian($this->date_submit);
        $res = array(
            "first_name"    =>  $this->first_name,
            "last_name"     =>  $this->last_name,
            "tel"           =>  $this->tel,
            "mobile"        =>  $this->mobile,
            "date_submit"   =>  $date_submit_en,
            "time_submit"   =>  $this->time_submit,
            "date_submit_fa" => $this->date_submit,
            "description"   =>  $this->description,
        );
        if($this->budget){
            $res["budget"] = $this->budget;
        }
        if($this->exchange == 'yes' && $this->exchange_description){
            $res["exchange"] = $this->exchange;
            $res["exchange_description"] = $this->exchange_description;
        }
        return $res;
    }

    public function save(){
        for($i=0;$i < 100;$i++){
//            $res = $this->ci->db->insert("clients",$this->build_insert_array());
        }

        $res = $this->ci->db->insert("clients",$this->build_insert_array());
        return $res;
    }

    public function find_by_id($id){
        $res =  $this->ci->db->get_where("clients",array("id"=>$id))->result_array();
        $this->init_from_db($res[0]);
        return $res[0];
    }

    public function update(){
        $this->ci->db->where('id',$this->id);
        $res = $this->ci->db->update('clients',$this->build_insert_array());
        return $res;
    }

    public function search() {
        $this->init_from_post();
        $db = $this->ci->db;
        $q = "like";
        if($this->first_name) {
            $db->{$q}('first_name', $this->first_name);
            $q="or_like";
        }
        if($this->last_name){
            $db->{$q}('last_name',$this->last_name);
            $q="or_like";
        }
        if($this->tel) {
            $db->{$q}('tel', $this->tel);
            $q = "or_like";
        }
        if($this->mobile) {
            $db->{$q}('mobile', $this->mobile);
            $q = "or_like";
        }
        $res = $db->get("clients")->result_array();
        return $res;
    }

}