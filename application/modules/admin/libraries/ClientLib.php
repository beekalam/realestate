<?php


class ClientLib
{
    private $first_name;
    private $last_name;
    private $tel;
    private $mobile;
    private $date_submit='';
    private $time_submit='';
    private $description='';
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
        $this->description = "test";
        $date_submit_en = convert_jalali_to_gregorian($this->date_submit);
        return array(
            "first_name"    =>  $this->first_name,
            "last_name"     =>  $this->last_name,
            "tel"           =>  $this->tel,
            "mobile"        =>  $this->mobile,
            "date_submit"   =>  $date_submit_en,
            "time_submit"   =>  $this->time_submit,
            "description"   =>  $this->description,
            "date_submit_fa" => $this->date_submit,
        );
    }

    public function save(){
        $res = $this->ci->db->insert("clients",$this->build_insert_array());
        return $res;
    }

}